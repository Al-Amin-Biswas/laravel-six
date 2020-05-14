<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Route::get('/',function(){
//    return view('design/home');
//});
Route::get('/','mycontroller@home');

Route::get('/about-us','mycontroller@about')->name('about');
Route::get('/contact-us','mycontroller@contact')->name('contact');

//-----category crud are here------------------------------------note.
Route::get('/addinghere','catcontroller@carry')->name('addcat');
Route::post('/store/category','catcontroller@storecatagory')->name('story');
Route::get('/allhere','catcontroller@showcat')->name('allcat');
Route::get('view/category/{id}','catcontroller@viewcat');
Route::get('delete/category/{id}','catcontroller@deletecat');
Route::get('edit/category/{id}','catcontroller@updatecat');
Route::post('upto/catregory/{id}','catcontroller@comup');

//-----post crud are here------------------------------------note.
Route::get('/write/post','postcontroller@write')->name('write');
Route::post('/write/store','postcontroller@addpost')->name('storing');
Route::get('/write/allpost','postcontroller@displaypost')->name('allpostt');
Route::get('view/post/{id}','postcontroller@viewpost');
Route::get('delete/post/{id}','postcontroller@deletewpost');
Route::get('edit/post/{id}','postcontroller@editpost');
Route::post('update/post/{id}','postcontroller@updatepost');




//Previous code for learning time ...........

Route::prefix('brinta')->group(function(){
    Route::get('/jerin',function(){
        echo "I love you";
    });
    Route::get('/israt', function(){
        return view('pages/love',['love'=>"ummah "]);
    });
});
