<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Auth::routes();
Route::get('user/activation/{token}', ['as' => 'user.activate', 'uses' => 'Auth\RegisterController@activateUser']);
Route::get('pwdchange', ['as' => 'pwdchange', 'uses' => 'UserController@showPwdChangeForm']);
Route::patch('pwdchange/{id}', ['as' => 'pwdchange.patch', 'uses' => 'UserController@pwdChange']);

Route::resource('ads', 'AdsController');
Route::resource('calendars', 'CalendarsController');
Route::resource('categories', 'CategoriesController');
Route::resource('cities', 'CitiesController');
Route::resource('companies', 'CompaniesController');
Route::resource('counties', 'CountiesController');
Route::resource('images', 'ImagesController');
Route::resource('lists', 'ListsController');
Route::resource('roles', 'RolesController');
Route::resource('tags', 'TagsController');
Route::resource('users', 'UserController');
Route::resource('rooms', 'RoomsController');

Route::get('companies/{company}/profile', ['as'=>'companies.profile', 'uses'=>'CompaniesController@profile']);
Route::patch('companies/{company}/profile', ['as' => 'companies.update.profile', 'uses' => 'CompaniesController@updateProfile']);
Route::post('companies/image', ['as' => 'companies.image', 'uses' => 'CompaniesController@uploadImage']);

Route::get('city-dropdown', function () {
    return App\Models\Cities::where('counties_id', '=' , $_REQUEST['county'])->get();
});

Route::get('category-dropdown', function () {
    return App\Models\Categories::where('parent_id', '=' , $_REQUEST['parent_id'])->get();
});

Route::get('delete-image', function () {
	$id = $_REQUEST['id'];
	App\Models\Images::destroy($id);
	return $id;
});

Route::post('dropzone/uploadFiles', ['as'=>'dropzone.post', 'uses' => 'AdsController@uploadFiles']);


Route::resource('menucards', 'MenucardsController');

Route::resource('comments', 'CommentsController');

Route::resource('orderDetails', 'OrderDetailsController');