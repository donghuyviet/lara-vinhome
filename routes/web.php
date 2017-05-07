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

Route::get('/', 'HomeController@home');
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

Route::get('/home', 'AdminController@index');

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::group( ['middleware' => 'auth' ], function()
        {
            Route::get('/', 'AdminPagesController@index'); // redirect pagescontroller

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
            Route::group(['prefix'=>'pages'], function(){
                Route::get('/','AdminPagesController@index');
                Route::get('/add','AdminPagesController@add');
                Route::post('/store','AdminPagesController@store');
                Route::get('/edit/{id}','AdminPagesController@edit');
                Route::post('/edit/{id}','AdminPagesController@update');
                Route::get('/delete/{id}','AdminPagesController@delete');
            });
            Route::group(['prefix'=>'members'], function(){
                Route::get('/','AdminMemberController@index');
                Route::get('/add','AdminMemberController@add');
                Route::post('/store','AdminMemberController@store');
                Route::get('/edit/{id}','AdminMemberController@edit');
                Route::post('/edit/{id}','AdminMemberController@update');
                Route::get('/delete/{id}','AdminMemberController@delete');
            });
            Route::group(['prefix'=>'customers'], function(){
                Route::get('/','AdminCustomerController@index');
                Route::get('/date','AdminCustomerController@date');
                Route::get('/month','AdminCustomerController@month');
            });
        });
});


// fontend
Route::get('trang-chu.html','HomeController@home');
Route::get('lien-he.html','HomeController@contact');
Route::post('/store','HomeController@get_mail');
// submit form resgiter
Route::get('cam-on.html','HomeController@thanks');
// download file
Route::get('/download/{file}', 'HomeController@download');

// Category url
// Route::get('category/{id}/{slug}','HomeController@category');
Route::get('danh-muc/{slug}.html','HomeController@category');

// danh mục dự án
Route::get('danh-muc.html','CategoryController@index');

Route::get('tin-tuc.html','NewsController@index');
Route::get('tin-tuc/{id}/{slug}.html','NewsController@detail');








// redirect trang chủ khi sai url
Route::any('{all?}','HomeController@home')->where('all','(.*)');

Route::get('/api/keyword','ApiSearchController@index');
Route::get('/api/search','ApiSearchController@get_job_in_keyrord');

Route::get('/tables', function(){
    Schema::create('customer', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
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
