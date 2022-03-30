<?php

use App\Models\Contact;
use App\Models\Gallery;
use App\Mail\ContactSender;
use App\Models\Reservation;
use App\Mail\ReservationMail;
use App\Models\CategorieImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CategorieImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name("home");

Route::get('/', [FrontController::class, "home"])->name('home');


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/admin/dashboard', [FrontController::class, "admin"])->middleware(["auth"])->name('dashboard');


require __DIR__ . '/auth.php';

// Mon front
Route::get('/pages/Room', [FrontController::class, "room"])->name('room');
Route::get('/pages/reaservation/avancer/bookingform', [FrontController::class, "reservationAvancer"])->name('bookingForm');
Route::get('/pages/RoomsList', [FrontController::class, "roomslist"])->name('roomslist');
Route::get('/pages/Blog', [FrontController::class, "blog"])->name('blog');
Route::get('/pages/Gallery', [FrontController::class, "gallery"])->name('gallery');
Route::get('/pages/Events', [FrontController::class, "events"])->name('events');
Route::get('/pages/EventDetails', [FrontController::class, "eventdetails"])->name('eventdetails');
Route::get('/pages/Staff', [FrontController::class, "staff"])->name('staff');
Route::get('/pages/Loading', [FrontController::class, "loading"])->name('loading');
Route::get('/pages/Contact', [FrontController::class, "contact"])->name('contact');
// Route::get('/pages/BlogPost', [FrontController::class,"blogPost"])->name('blogPost');
Route::get('/pages/{id}/BlogPost', [FrontController::class, "blogPost"])->name('blogLast');
// Route::get('/pages/BlogPost2', [FrontController::class,"blogPost2"])->name('blogPost2');
// Route::get('/pages/Comment', [FrontController::class,"comment"])->name('comment');
// Route::get('/pages/Service/home', [FrontController::class,"service"])->name('service');
Route::get('/pages/{id}/RoomPost', [FrontController::class, "roomPost"])->name('roomLast');
Route::post("/reservation", [ReservationController::class, 'store'])->name('reservation.store');






// fonction recherche
Route::get('/search', [FrontController::class, "search"])->name('search');
// categorie id
Route::get('/pages/{id}/CategorieId', [FrontController::class, "searchCategorie"])->name('blogCategorie');
// //last par id
// Route::get('/pages/{id}/LastId', [FrontController::class,"tagCategorie"])->name('blogLast');

//tag id
Route::get('/pages/{id}/TAGId', [FrontController::class, "tagCategorie"])->name('tagCategorie');

// tag rooms id
Route::get('/pages/{id}/tagRoomsID', [FrontController::class, "tagRooms"])->name('tagRooms');
//category room
Route::get('/pages/Room/{id}/CategorieId', [FrontController::class, "searchRoomCategorie"])->name('roomCategorie');
// fonction recherche pour chambre
Route::post('/room/search', [FrontController::class, "RoomSearch"])->name('RoomSearch');


// route par page admin
// Route::get('/dashboard/room', function () {
//     return view('admin.room.index');
// })->middleware(['auth'])->name('room.index');

// Route::get('/dashboard/staff', function () {
//     return view('admin.staff.index');
// })->middleware(['auth'])->name('staff.index');

// Route::get('/dashboard/blog', function () {
//     return view('admin.blog.index');
// })->middleware(['auth'])->name('blog.index');

// Route::get('/dashboard/gallery', function () {
//     return view('admin.gallery.index');
// })->middleware(['auth'])->name('gallery.index');

// image
Route::get('/dashboard/gallery', [GalleryController::class, "affichage"])->middleware(["auth"])->name('gallery.index');
// categoryImage
Route::get('/dashboard/categoryImage/gallery', [CategorieImageController::class, "affichageCategoryImage"])->middleware(["auth"])->name('categoryImage.index');


// Route::get('/dashboard/contact', function () {
//     return view('admin.contact.index');
// })->middleware(['auth'])->name('contact.index');

// store pour le formulaire commentaire
Route::post("/{id}/commentaires", [CommentController::class, "store"]);
Route::delete("/comments/{id}/delete", [CommentController::class, "destroy"])->name("comment.destroy");
// Route::get("/comments/{id}/edit", [CommentController::class, "edit"]);

Route::get("/comments/{id}/update", [CommentController::class, "update"])->name("comment.update");

// Route::get("/comments/admin/affichagess", [CommentController::class, "affichage"])->name("commentaires");

Route::get('/dashboard/comment', [CommentController::class, "affichageComment"])->middleware(["auth"])->name('commentaire.index');



// affichage par page admin

// Gallery crud
// create
route::get("/admin/Gallery/images/createImages", [GalleryController::class, "create"])->name("images.create");
// store
route::post("/admin/Gallery/images/storeImages", [GalleryController::class, "store"])->name("images.store");
// del
Route::delete('admin/Gallery/images/{image}/deleteimages', [GalleryController::class, "destroy"])->name("images.destroy");

// CategorieImage crud
// create
route::get("/admin/image/categoryImage/createss", [CategorieImageController::class, "create"])->name("categoryImage.create");
// store
route::post("/admin/images/categoryImage/storess", [CategorieImageController::class, "store"])->name("categoryImage.store");
// destroy
Route::delete('/admin/image/categoryImage/{categories}/deletecategoryImage', [CategorieImageController::class, "destroy"])->name("categoryImage.destroy");
// edit
route::get("/admin/image/categoryImage/{categories}/editindex", [CategorieImageController::class, "edit"])->name("categories.edit");
// update
route::put("/admin/image/categoryImage/{categories}/updateindex", [CategorieImageController::class, "update"])->name("categories.update");



// Team
Route::get('/dashboard/staff', [StaffController::class, "affichage"])->middleware(["auth"])->name('team.index');

// team crud
// create
route::get("/admin/staff/teams/createss", [StaffController::class, "create"])->name("teams.create");
// store
route::post("/admin/staff/teams/storess", [StaffController::class, "store"])->name("teams.store");
// destroy
Route::delete('/admin/staff/teams/{teams}/deleteTeams', [StaffController::class, "destroy"])->name("teams.destroy");
// edit
route::get("/admin/staf/teams/{teams}/editindex", [StaffController::class, "edit"])->name("teams.edit");
// update
route::put("/admin/staf/teams/{teams}/updateindex", [StaffController::class, "update"])->name("teams.update");

// Mail::to($contact->email,$contact->first_name)->send(new ContactMail($contact->first_name,$contact->msg));

Route::post('/mail/test/contact', [ContactController::class, "store"])->name('testmail');


// contact crud
// edit
route::get("/admin/contacts/info/{info}/editindex", [ContactController::class, "edit"])->name("contacts.edit");
// update
route::put("/admin/contacts/info/{info}/updateindex", [ContactController::class, "update"])->name("contacts.update");
//affichage
Route::get('/dashboard/contact', [ContactController::class, "affichage"])->middleware(["auth"])->name('contact.index');


// blog crud
// store
route::post("/admin/blog/article/stores", [ArticleController::class, "store"])->name("blogs.store");
// create
route::get("/admin/blog/article/creates", [ArticleController::class, "create"])->name("blogs.create");
// edit
route::get("/admin/blog/article/{blogs}/editindex", [ArticleController::class, "edit"])->name("blogs.edit");
// update
route::put("/admin/article/blog/{blogs}/updateindex", [ArticleController::class, "update"])->name("blogs.update");
//affichage
Route::get('/dashboard/blog', [ArticleController::class, "affichage"])->middleware(["auth"])->name('blog.index');
// destroy
Route::delete('/admin/blog/article/{blogs}/deleteArticle', [ArticleController::class, "destroy"])->name("blogs.destroy");

// ROOM crud
// store
route::post("/admin/chambre/room/stores", [RoomController::class, "store"])->name("rooms.store");
// create
route::get("/admin/room/chambre/creates", [RoomController::class, "create"])->name("rooms.create");
// edit
route::get("/admin/room/chambre/{rooms}/editindex", [RoomController::class, "edit"])->name("rooms.edit");
// update
route::put("/admin/chambre/room/{rooms}/updateindex", [RoomController::class, "update"])->name("rooms.update");
//affichage
Route::get('/dashboard/roomss', [RoomController::class, "affichage"])->middleware(["auth"])->name('room.index');
// destroy
Route::delete('/admin/chambre/room/{rooms}/deleteRoom', [RoomController::class, "destroy"])->name("rooms.destroy");


Route::get('/pages/BOOK/BookRoom', [FrontController::class, "bookRoom"])->name('bookRoom');


Route::get('/dashboard/carousel', [CarouselController::class, "affichage"])->middleware(["auth"])->name('carousel.index');
// edit
route::get("/admin/home/carousel/{carousel}/editindexcarousel", [CarouselController::class, "edit"])->name("carousel.edit");
// update
route::put("/admin/carousel/home/{carousel}/updatecarousel", [CarouselController::class, "update"])->name("carousel.update");


Route::get('/dashboard/videos', [FrontController::class, "videosAffiche"])->middleware(["auth"])->name('video.index');
// // edit
route::get("/admin/video/videos/{video}/editindexvideo",[VideoController::class,"edit"])->name("video.edit");
Route::put('/dashboard/video/update', [VideoController::class, "update"])->middleware(["auth"])->name('video.update');



Route::get('/dashboard/reservation', [ReservationController::class, "affichage"])->middleware(["auth"])->name('reservation.index');
Route::get('/dashboard/reservation/{id}/validate', [ReservationController::class, "update"])->middleware(["auth"])->name('reservation.update');


//affichage
Route::get('/dashboard/mailbox', [ContactController::class, "index"])->middleware(["auth"])->name('mailbox.index');
Route::get('/dashboard/mailbox/archives', [ContactController::class, "archives"])->middleware(["auth"])->name('mailbox.archive');
Route::get('/dashboard/mailbox/{id}/delete', [ContactController::class, "destroy"])->middleware(["auth"])->name('mailbox.destroy');
Route::get('/dashboard/mailbox/{id}/restore', [ContactController::class, "restore"])->middleware(["auth"])->name('mailbox.restore');



// image
Route::get('/dashboard/user', [UserController::class, "affichage"])->middleware(["auth"])->name('user.index');

// edit
route::get("/admin/user/{user}/edit", [UserController::class, "edit"])->name("user.edit");
// update
route::put("/admin/user/{user}/update", [UserController::class, "update"])->name("user.update");
