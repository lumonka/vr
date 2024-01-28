<?php

use App\Http\Controllers\Banners;
use App\Http\Controllers\ChangeLog;
use App\Http\Controllers\Contact;
use App\Http\Controllers\CreateBeatController;
use App\Http\Controllers\Events;
use App\Http\Controllers\Label;
use App\Http\Controllers\Main;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Services;
use App\Http\Controllers\Social;
use App\Http\Controllers\Studio;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [Main::class, 'index'])->name('main');
Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/label', [Label::class, 'index'])->name('label');
Route::get('/services', [Services::class, 'index'])->name('services');
Route::get('/studio', [Studio::class, 'index'])->name('studio');
Route::get('/create-beat', [CreateBeatController::class, 'index'])->name('create-beat');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile-events', [ProfileController::class, 'events'])->name('profile.events');
});


Route::middleware(['auth','middleware' => 'is_admin'])->group(function () {

    // <--------------------MAIN-------------------->

    Route::get('/admin_main', [Main::class, 'admin_index'])->name('admin_main');
    Route::get('/admin_main_music/{id}', [Main::class, 'getMusicById']);
    Route::patch('/admin_main_music_edit/{id}', [Main::class, 'editMusic']);
    Route::get('/admin_main_music_create', [Main::class, 'createMusicView']);
    Route::post('/admin_main_music_create', [Main::class, 'createMusic']);
    Route::delete('/admin_main_music_delete/{id}', [Main::class, 'deleteMusic'])
    ;
    // <--------------------CONTACT-------------------->

    Route::get('/admin_contact', [Contact::class, 'admin_index'])->name('admin_contact');
    Route::get('/admin_contact_contacts/{id}', [Contact::class, 'getContactsById']);
    Route::patch('/admin_contact_contacts_edit/{id}', [Contact::class, 'editContacts']);

    // <--------------------EVENTS-------------------->

    Route::get('/admin_events', [Events::class, 'admin_index'])->name('admin_events');
    Route::get('/admin_events_news/{id}', [Events::class, 'getNewsById']);
    Route::patch('/admin_events_news_edit/{id}', [Events::class, 'editNews']);
    Route::get('/admin_events_news_create', [Events::class, 'createNewsView']);
    Route::post('/admin_events_news_create', [Events::class, 'createNews']);
    Route::delete('/admin_events_news_delete/{id}', [Events::class, 'deleteNews']);
    Route::get('/admin_events_person/{id}', [Events::class, 'getPersonById']);
    Route::patch('/admin_events_person_edit/{id}', [Events::class, 'editPerson']);
    Route::delete('/admin_events_person_delete/{id}', [Events::class, 'deletePerson']);

    // <--------------------LABEL-------------------->

    Route::get('/admin_label', [Label::class, 'admin_index'])->name('admin_label');
    Route::get('/admin_label_header/{id}', [Label::class, 'getHeaderById']);
    Route::patch('/admin_label_header_edit/{id}', [Label::class, 'editHeader']);
    Route::get('/admin_label_cards/{id}', [Label::class, 'getCardsById']);
    Route::patch('/admin_label_cards_edit/{id}', [Label::class, 'editCards']);
    Route::get('/admin_label_cards_create', [Label::class, 'createCardsView']);
    Route::post('/admin_label_cards_create', [Label::class, 'createCards']);
    Route::delete('/admin_label_cards_delete/{id}', [Label::class, 'deleteCards']);

    // <--------------------SERVICES-------------------->

    Route::get('/admin_services', [Services::class, 'admin_index'])->name('admin_services');
    Route::get('/admin_services_cards/{id}', [Services::class, 'getCardsById']);
    Route::patch('/admin_services_cards_edit/{id}', [Services::class, 'editCards']);
    Route::get('/admin_services_cards_create', [Services::class, 'createCardsView']);
    Route::post('/admin_services_cards_create', [Services::class, 'createCards']);
    Route::delete('/admin_services_cards_delete/{id}', [Services::class, 'deleteCards']);

    // <--------------------STUDIO-------------------->

    Route::get('/admin_studio', [Studio::class, 'admin_index'])->name('admin_studio');
    Route::get('/admin_studio_list/{id}', [Studio::class, 'getListById']);
    Route::patch('/admin_studio_list_edit/{id}', [Studio::class, 'editList']);
    Route::get('/admin_studio_list_create', [Studio::class, 'createListView']);
    Route::post('/admin_studio_list_create', [Studio::class, 'createList']);
    Route::delete('/admin_studio_list_delete/{id}', [Studio::class, 'deleteList']);
    Route::get('/admin_studio_person/{id}', [Studio::class, 'getPersonById']);
    Route::patch('/admin_studio_person_edit/{id}', [Studio::class, 'editPerson']);
    Route::get('/admin_studio_cards/{id}', [Studio::class, 'getCardsById']);
    Route::patch('/admin_studio_cards_edit/{id}', [Studio::class, 'editCards']);
    Route::get('/admin_studio_cards_create', [Studio::class, 'createCardsView']);
    Route::post('/admin_studio_cards_create', [Studio::class, 'createCards']);
    Route::delete('/admin_studio_cards_delete/{id}', [Studio::class, 'deleteCards']);

    // <--------------------BANNER-------------------->

    Route::get('/admin_banners', [Banners::class, 'admin_index'])->name('admin_banners');
    Route::get('/admin_banner/{id}', [Banners::class, 'getBannerById']);
    Route::patch('/admin_banner_edit/{id}', [Banners::class, 'editBanner']);

    // <--------------------SOCIAL-------------------->

    Route::get('/admin_socials', [Social::class, 'admin_index'])->name('admin_socials');
    Route::get('/admin_social/{id}', [Social::class, 'getSocialById']);
    Route::patch('/admin_social_edit/{id}', [Social::class, 'editSocial']);
    Route::get('/admin_social_create', [Social::class, 'createSocialView']);
    Route::post('/admin_social_create', [Social::class, 'createSocial']);
    Route::delete('/admin_social_delete/{id}', [Social::class, 'deleteSocial']);

    // <--------------------USERS-------------------->

    Route::get('/admin_users', [Users::class, 'admin_index'])->name('admin_users');
    Route::get('/admin_users/{id}', [Users::class, 'getUserById']);
    Route::patch('/admin_users_edit/{id}', [Users::class, 'editUser']);
    Route::delete('/admin_users_delete/{id}', [Users::class, 'deleteUser']);
    Route::get('/admin_users_requests/{id}', [Users::class, 'getRequestById']);
    Route::patch('/admin_users_requests_edit/{id}', [Users::class, 'editRequest']);
    Route::get('/admin_users_requests_create', [Users::class, 'createRequestView']);
    Route::post('/admin_users_requests_create', [Users::class, 'createRequest']);
    Route::delete('/admin_users_requests_delete/{id}', [Users::class, 'deleteRequest']);

    // <--------------------CHANGE LOG-------------------->

    Route::get('/change_log', [ChangeLog::class, 'admin_index'])->name('change_log');

});

require __DIR__ . '/auth.php';
