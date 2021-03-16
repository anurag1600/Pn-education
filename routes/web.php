<?php

use Illuminate\Support\Facades\Route;

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


// category--------------------//




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin','CategoryController@index');

Route::post('admin/category_save','CategoryController@save');

Route::get('admin/category','CategoryController@display');

Route::get('admin/edit/{id}','CategoryController@edit');

Route::post('admin/update','CategoryController@update');

Route::get('admin/category_delete/{id}','CategoryController@delete');

// Course Controller---------------------//

Route::get('admin/course','CourseController@course');

Route::post('admin/save','CourseController@save');

Route::get('admin/course','CourseController@display');

Route::get('admin/course_edit/{id}','CourseController@edit');

Route::post('admin/course_update','CourseController@update');

Route::get('admin/delete/{id}','CourseController@delete');


/////////////course frontend////

Route::get('course_detail/{id}','CourseController@course_detail');

Route::get('courses','CourseController@courses');

Route::get('category_course/{id}','CourseController@category_course');









//frontend controller----------------------//

Route::get('/','Frontcontroller@index');











//Banner Controller ---------------------------//

Route::get('admin/banner','BannerController@banner');

Route::post('admin/banner_save','BannerController@save');

Route::get('admin/banner','BannerController@display');

Route::get('admin/banner_edit/{id}','BannerController@edit');

Route::post('admin/banner_update','BannerController@update');

Route::get('admin/banner_delete/{id}','BannerController@delete');

//Navbar Controller ----------------------------//

Route::get('admin/navbar','NavbarController@index');

Route::post('admin/navbar_save','NavbarController@save');

Route::get('admin/navbar','NavbarController@display');

Route::get('admin/navbar_edit/{id}','NavbarController@edit');

Route::post('admin/navbar_update','NavbarController@update');

Route::get('admin/navbar_delete/{id}','NavbarController@delete');


//Onlinelearn Controller ---------------------------//

Route::get('admin/onlinelearn','OnlinelearnController@index');

Route::post('admin/onlinelearn_save','OnlinelearnController@save');

Route::get('admin/onlinelearn','OnlinelearnController@display');

Route::get('admin/onlinelearn_edit/{id}','OnlinelearnController@edit');

Route::post('admin/onlinelearn_update','OnlinelearnController@update');

Route::get('admin/onlinelearn_delete/{id}','OnlinelearnController@delete');




///Sign up method///////////////////


Route::get('front/signup','Frontcontroller@signup');

Route::post('front/signup_save','Frontcontroller@signup_save');




///Login  method s//////////

Route::get('front/login','Frontcontroller@login');

Route::post('front/login_save','Frontcontroller@login_save');



///////Add to cart /////////////////////////////

Route::post('cart','Frontcontroller@addtocart');

Route::get('front/cart','Frontcontroller@cart');




////Our team Controller ////////////////////////




Route::get('admin/ourteam','OurteamController@ourteam');

Route::post('admin/ourteam_save','OurteamController@ourteam_save');

Route::get('admin/ourteam','OurteamController@display');

Route::get('admin/ourteam_edit/{id}','OurteamController@edit');

Route::post('admin/ourteam_update','OurteamController@update');

Route::get('admin/ourteam_delete/{id}','OurteamController@delete');


////////

Route::get('ourteam','Frontcontroller@our');


//////Placement Controller////////////////

Route::get('admin/placement','PlacementController@placement');

Route::post('admin/placement_save','PlacementController@placement_save');

Route::get('admin/placement','PlacementController@display');

Route::get('admin/placement_edit/{id}','PlacementController@edit');

Route::post('admin/placement_update','PlacementController@update');

Route::get('admin/placement_delete/{id}','PlacementController@delete');

///////////

Route::get('placement','Frontcontroller@place');




//////////Intern conteroller/////////

Route::get('admin/intern','InternController@intern');

Route::post('admin/intern_save','InternController@intern_save');

Route::get('admin/intern','InternController@display');

Route::get('admin/intern_edit/{id}','InternController@edit');

Route::post('admin/intern_update','InternController@update');

Route::get('admin/intern_delete/{id}','InternController@delete');


/////

Route::get('intern','Frontcontroller@internship');

////content Controller///////////////

Route::get('contect','Frontcontroller@contect');

Route::post('contect_save','ContectController@save');

Route::get('admin/contect','ContectController@display');








