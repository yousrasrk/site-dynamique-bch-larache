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

/*====================For admin=========================== */
Auth::routes();

Route::get('/admin','activitieController@list' )->middleware('auth');
Route::get('/activities' ,'activitieController@list' )->middleware('auth');
Route::get('/events' ,'eventController@list' )->middleware('auth');
Route::get('/dece' ,'deceController@list' )->middleware('auth');
Route::get('/add-activities', function(){
        return view('auth.admin-activities.add');
})->middleware('auth');
Route::get('/add-deces', function(){
    return view('auth.admin-deces.add');
})->middleware('auth');
Route::get('/add-events', function(){
    return view('auth.admin-events.add');
})->middleware('auth');
Route::post('/activities' ,'activitieController@store')->middleware('auth');
Route::post('/events' ,'eventController@store')->middleware('auth');
Route::post('/deces' ,'deceController@store')->middleware('auth');

Route::get('activities/{id}/edit' , 'activitieController@edit')->middleware('auth');
Route::put('activities/{id}' , 'activitieController@update')->middleware('auth');
Route::get('activities/{id}/delete' , 'activitieController@destroy')->middleware('auth');
Route::get('/activities/activ/{filename}/{id}/{n}' , 'activitieController@deletpic')->middleware('auth');


Route::get('deces/{id}/edit' , 'deceController@edit')->middleware('auth');
Route::put('deces/{id}' , 'deceController@update')->middleware('auth');
Route::get('deces/{id}/delete' , 'deceController@destroy')->middleware('auth');

Route::get('events/{id}/edit' , 'eventController@edit')->middleware('auth');
Route::put('events/{id}' , 'eventController@update')->middleware('auth');
Route::get('events/{id}/delete' , 'eventController@destroy')->middleware('auth');
Route::get('/events/eventi/{filename}/{id}/{n}' , 'eventController@deletpic')->middleware('auth');
/*====================================================== */

/*================Articles ================== */

Route::get('Hygiène-alimentaire','CommentController@index1');
Route::get('Salubrité-publique','CommentController@index2');
Route::get('Lutte-antivectorielle','CommentController@index3');

Route::get('Ramassage-des-chiens-et-chats-errants','CommentController@index5');
Route::get('A-propos-de-l’hygiène','CommentController@index6');
Route::get('Organigramme','CommentController@index7');
Route::get('corde','CommentController@index8');
Route::get('/Activité','CommentController@index9');
Route::get('/nosEvenements','CommentController@index10');
Route::get('/definition', 'CommentController@index11' );
Route::get('/desordonnes', 'CommentController@index12' );
Route::get('/permission', 'CommentController@index13' );
Route::get('/cimetiere', 'CommentController@index14' );
Route::get('/Lutte', 'CommentController@index15' );
    
Route::get('controle','CommentController@index4');


Route::post('/comment/{id}',['uses'=>'CommentController@store','as'=>'comments.store']);
Route::get('/Tout-Articles', function () {
    return view('Articles/Tout-Articles');
});



/*================Articles ================== */


/* ==============Normal Navbar =============  */
//na9sa reclamation o contact
Route::get('/','deceController@dernier' );
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/reclamation', function () {
    return view('contact_process');
});



Route::get('/Textes-de-lois-et-réglements', function () {
    return view('Textes-de-lois-et-réglements');
});
/*---------------for reclamation-------------*/ 
Route::get('reclamation', 'ReclamationFormController@create')->name('reclamation.create');
Route::post('reclamation', 'ReclamationFormController@store')->name('reclamation.store');
/*---------------------------------------- */



/*---------------for contact-------------*/ 
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

/*--------------------------------------------*/ 

/* ==============Normal Navbar =============  */
Route::get('activities/{id}/autre' , 'activitieController@other')->middleware('auth');
Route::get('activities/{id}' , 'activitieController@voir');

/*==============De index=========== */






Route::get('/ambulance', function () {
    return view('services.ambulance');
});

/*==========fin nos services ======*/


Route::get('events/{id}/edit' , 'eventController@edit')->middleware('auth');
Route::put('events/{id}' , 'eventController@update')->middleware('auth');
Route::get('events/{id}/delete' , 'eventController@destroy')->middleware('auth');
Route::get('events/{id}/autre' , 'eventController@other')->middleware('auth');
Route::get('events/{id}' , 'eventController@voir');
Route::get('/press1' , 'eventController@show');
