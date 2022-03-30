<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function affichage()
    {
        $reservation = Reservation::all();
        return view("admin.reservation.index", compact("reservation"));
    }

    public function __construct()
    {
        $this->middleware('webmaster')->only('update');
    }
    public function store(Request $request)
    {

        $request->validate([
            'nom' => ['required'],
            'email' => ['required'],
            'booking_date' => ['required'],
            'adult' => ['required'],
            'enfant' => ['required'],
        ]);
        // dd($request->booking_date);
        $dates = explode(' - ', $request->booking_date);
        // dd($dates);
        $debut = $dates[0];
        $fin = $dates[1];
        $reservation = new Reservation();
        $reservation->nom = $request->nom;
        $reservation->email = $request->email;
        $reservation->debut = Carbon::parse($debut);
        $reservation->fin = Carbon::parse($fin);
        $reservation->adult = $request->adult;
        $reservation->enfant = $request->enfant;
        $reservation->commentaire = $request->commentaire;
        $reservation->telephone = $request->telephone;
        $reservation->country = $request->country;
        $reservation->valide = false;
        $reservation->category_room_id = $request->category_room_id;
        $reservation->save();
        return back();
    }
    public function update($id)
    {
        $reservation = Reservation::find($id);
        $reservation->valide = true;
        $reservation->save();
        Mail::to($reservation->email, $reservation->nom)->later(now()->addSeconds(30), new ReservationMail($reservation));
        return  redirect()->back();
    }
}
