<?php

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

use Illuminate\Support\Facades\Route;

/////////////////      Compliants          ////////////////////////
Route::prefix('compliants')->group(function() {

    Route::get('/','CompliantController@index')->name('compliants.index');
    Route::get('/activation/{id}','CompliantController@activate');
    Route::get('/delete/{id}','CompliantController@destroy');

});

/////////////////      Suggestions          ////////////////////////
Route::prefix('suggestions')->group(function() {

    Route::get('/','SuggestionController@index')->name('suggestions.index');
    Route::get('/activation/{id}','SuggestionController@activate');
    Route::get('/delete/{id}','SuggestionController@destroy');

});

/////////////////      Announcements          ////////////////////////
Route::prefix('announcements')->group(function() {

    Route::get('/','AnnouncementController@index')->name('announcements.index');
    Route::get('/activation/{id}','AnnouncementController@activate');
    Route::get('/delete/{id}','AnnouncementController@destroy');

});

Route::get('/about-us','HelpCenterModuleController@aboutUs')->name('about.us');
Route::get('/contactUs','HelpCenterModuleController@contactUs')->name('contact.us');
Route::get('/helpCenter','HelpCenterModuleController@helpCenter')->name('help.center');
Route::get('/privacyPolicy','HelpCenterModuleController@privacyPolicy')->name('privacy.policy');
Route::get('/termsOfUse','HelpCenterModuleController@termsOfUse')->name('terms.of.use');

