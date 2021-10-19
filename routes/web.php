<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

Route::get('/', [PageController::class, 'getHome'])->name('home');
Route::resource('contact',ContactController::class);

Route::get('/contact-mail', function(){
    
    $contact = Contact::find(1);
    // \Illuminate\Support\Facades\Mail::send(new \App\Mail\contact($contact));
    return new \App\Mail\contact($contact);
});