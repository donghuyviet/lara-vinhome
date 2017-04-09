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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lang/{lang}', 'LanguageController@index');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/template', function(){
        return view('template.index');
    });

    Route::get('/components', function(){
        return view('template.component');
    });

    Route::get('/template/full-page', function(){
        return view('template.full-page');
    });

    Route::get('/template/list', function(){
        return view('template.list');
    });

    Route::get('/template/form', function(){
        return view('template.form');
    });

    Route::get('/template/button', function(){
        return view('template.button');
    });

    Route::get('/template/text', function(){
        return view('template.text');
    });

    Route::get('/template/ajax', function(){
        return view('template.ajax');
    });

    Route::get('/template/confirm', function(){
        return view('template.confirm');
    });

    Route::get('/template/icon', function(){
        return view('template.icon');
    });
    Route::get('/template/model', function(){
        return view('template.model');
    });
    Route::get('/template/popupmessage', function(){
        return view('template.popup-message');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::group( ['middleware' => 'auth' ], function()
        {
            Route::get('/', function ()    {
                return "echo abc";
            });
            Route::group(['prefix'=>'articels'], function(){
                Route::get('/','AdminArticelController@index');
                Route::get('/add','AdminArticelController@add');
                Route::post('/store','AdminArticelController@store');
                Route::get('/edit/{id}','AdminArticelController@edit');
                Route::post('/edit/{id}','AdminArticelController@update');
                Route::get('/delete/{id}','AdminArticelController@delete');
            });

            Route::group(['prefix'=>'category'], function(){
                Route::get('/','AdminCategoryController@index');
                Route::get('/add','AdminCategoryController@add');
                Route::post('/store','AdminCategoryController@store');
                Route::get('/edit/{id}','AdminCategoryController@edit');
                Route::post('/edit/{id}','AdminCategoryController@update');
                Route::get('/delete/{id}','AdminCategoryController@delete');
            });
            Route::group(['prefix'=>'slide'], function(){
                Route::get('/','AdminSlideController@index');
                Route::get('/add','AdminSlideController@add');
                Route::post('/store','AdminSlideController@store');
                Route::get('/edit/{id}','AdminSlideController@edit');
                Route::post('/edit/{id}','AdminSlideController@update');
                Route::get('/delete/{id}','AdminSlideController@delete');
            });
        });
});
Route::get('/api/keyword','ApiSearchController@index');
Route::get('/api/search','ApiSearchController@get_job_in_keyrord');

Route::get('/tables', function(){
    Schema::create('slide', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->string('images');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    return "thành công" ;
});
Route::get('/colume', function(){
    Schema::table('articel', function ($table) {
        $table->string('cate_id');
    });
    return "thành công" ;
});