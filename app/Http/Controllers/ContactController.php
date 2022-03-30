<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactSender;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['edit', 'update']);
    }




    // c pour le mail

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string',
            'message' => 'required',
        ]);

        $contact = new Contact();

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        // $contact->read = 1;
        $contact->save();
        Mail::to($contact->email, $contact->fullname)->send(new ContactSender($contact->fullname, $contact->message));
        return redirect()->back()->with('success', 'le mail a bien été envoyé !');
    }

    // pour la partie droite
    public function edit(Info $info)
    {
        // dd("test");
        return view("admin.contact.edit", compact("info"));
    }

    public function update(Request $request, Info $info)
    {

        $request->validate([
            'adresse' => 'required',
            'mail' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'site' => 'required',
        ]);


        $info->adresse = $request->adresse;
        $info->mail = $request->mail;
        $info->telephone = $request->telephone;
        $info->fax = $request->fax;
        $info->site = $request->site;

        $info->save();
        // dd("test");
        return redirect()->route('contact.index')->with('success', 'contacts ' . $request->adresse . ' modifiée !');
    }

    public function affichage()
    {
        $info = Info::first();
        return view("admin.contact.index", compact("info"));
    }

    public function index()
    {

        $contacts = Contact::all();
        return view('admin.mailbox.index', compact('contacts'));
    }
    public function archives()
    {
        $contacts = Contact::onlyTrashed()->get();
        return view('admin.mailbox.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return back();
    }

    public function restore($id)
    {
        $contact = Contact::withTrashed()->where('id',$id)->first();
        $contact->restore();
        return back();
    }
}
