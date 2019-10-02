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
Route::namespace('frontEnd')->group(function () {
    Route::get('/', 'SiteUIController@index')->name('frontEnd.index');
    Route::get('category/{id}', 'SiteUIController@category')->name('frontEnd.category');
    Route::get('skills/{id}', 'SiteUIController@skills')->name('frontEnd.skills');
    Route::get('tags/{id}', 'SiteUIController@tags')->name('frontEnd.tags');
    Route::get('/videos', 'SiteUIController@getVideos')->name('frontEnd.videos');
    Route::get('/videos/show/{id}', 'SiteUIController@show')->name('frontEnd.video.show');
    Route::get('/aboutUs', 'SiteUIController@aboutUs')->name('frontEnd.aboutUs');
    Route::get('/contactUs', 'SiteUIController@contactUs')->name('frontEnd.contactUs');
    Route::post('/contactUs', 'SiteUIController@messageStore')->name('frontEnd.messageStore');


});
Route::namespace('frontEnd')->middleware(['auth'])->group(function () {
    Route::post('comment/{id}', 'SiteUIController@commentStore')->name('frontEnd.commentStore');
    Route::put('comment/{id}', 'SiteUIController@commentUpdate')->name('frontEnd.commentUpdate');
});
Route::namespace('BackEnd')->prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('home', 'HomeController@index')->name('BackEnd.index');
    Route::resource('users', 'UsersController')->except(['show']);
    Route::get('users/changepassowrd/{id}', 'UsersController@changePassword')->name('users.changepassowrd');
    Route::resource('categories', 'CategoryController')->except(['show']);
    Route::resource('skills', 'SkillController')->except(['show']);
    Route::resource('tags', 'TagController')->except(['show']);
    Route::resource('pages', 'PageController')->except(['show']);
    Route::resource('videos', 'VideoController')->except(['show']);
    Route::post('comments', 'VideoController@storeComment')->name('comments.storeComment');
    Route::delete('comments/delete/{id}', 'VideoController@destroyComment')->name('comments.destroyComment');
    Route::put('comments/update/{id}', 'VideoController@updateComment')->name('comments.updateComment');
    Route::resource('messages', 'MessagesController')->except(['show']);
    Route::post('messages/replay/{id}', 'MessagesController@replay')->name('messages.replay');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
