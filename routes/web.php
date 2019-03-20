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

Route::get('/', [
    'uses' => 'SiteController@index',
    'as'   => 'site'
]);

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);


Route::get('/category/{category}', 'BlogController@category')->name('category');

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);

Route::get('/tag/{tag}', [
    'uses' => 'BlogController@tag',
    'as'   => 'tag'
]);

Route::post('/blog/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as' => 'blog.comments'
]);

//site controller

Route::get('/site', [
    'uses' => 'SiteController@index',
    'as'   => 'site'
]);
Route::get('/site/signup', [
    'uses' => 'SiteController@signup',
    'as'   => 'side.signup'
]);

Route::post('/site/signup/store', [
    'uses' => 'SiteController@store',
    'as'   => 'side.signup.store'
]);


Route::get('loginc','LogincController@index');





Auth::routes();

Route::get('/home', 'Backend\HomeController@index');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');
Route::get('/blog', 'Backend\BlogController@index')->name('blog');

Route::get('/candidate', 'CandidateController@index')->name('candidate');


// Administrator & SuperAdministrator Control Panel Routes
Route::group(['prefix' => 'backend', 'middleware' => 'auth', 'middleware' => ['role:administrator|superadministrator'], 'namespace' => 'Backend'], function () {
	
	Route::put('/blog/restore/{blog}', [
		'uses' => 'BlogController@restore',
		'as'   => 'blog.restore'
	]);
	Route::delete('/blog/force-destroy/{blog}', [
		'uses' => 'BlogController@forceDestroy',
		'as'   => 'blog.force-destroy'
	]);
	//Route::resource('/blog', 'BlogController');
	Route::get('/blog/destroy', 'BlogController@destroy')->name('blog.destroy');
	Route::get('/blog/edit/{blog}', 'BlogController@edit')->name('blog.edit');
	Route::put('/blog/update/{blog}', 'BlogController@update')->name('blog.update');

	Route::get('/categories/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'categories.create'
	]);

	Route::get('/categories/destroy', 'CategoriesController@destroy')->name('categories.destroy');
	Route::get('/categories/edit/{blog}', 'CategoriesController@edit')->name('categories.edit');
	Route::put('/categories/update/{blog}', 'CategoriesController@update')->name('categories.update');


	Route::get('/users/confirm/{users}', [
		'uses' => 'UsersController@confirm',
		'as' => 'users.confirm'
	]);
	//Route::resource('/users', 'UsersController');
	Route::get('/users/create', 'UsersController@create')->name('users.create');
	Route::get('/users/destroy', 'UsersController@destroy')->name('users.destroy');
	Route::get('/users/store', 'UsersController@store')->name('users.store');
	Route::get('/users/edit/{blog}', 'UsersController@edit')->name('users.edit');
	Route::put('/users/update/{blog}', 'UsersController@update')->name('users.update');

	Route::get('/users', [
		'uses' => 'UsersController@index',
		'as'   => 'users.index'
	]);

	Route::get('/categories/search', [
		'uses' => 'CategoriesController@search',
		'as'   => 'categories.search'
	]);

	Route::get('/categories', [
		'uses' => 'CategoriesController@index',
		'as'   => 'categories.index'
	]);

	Route::get('/categoriessearch/search', [
		'uses' => 'CategoriesController@search',
		'as'   => 'categories.search'
	]);


	Route::get('/categoriessearch/search', 'CategoriesController@search');

	//Departments
	//Route::resource('/departments', 'DepartmentController');
	Route::get('/departments/destroy', 'DepartmentController@destroy')->name('departments.destroy');
	Route::get('/departments/edit/{blog}', 'DepartmentController@edit')->name('departments.edit');
	Route::put('/departments/update/{blog}', 'DepartmentController@update')->name('departments.update');

	Route::get('/departments', [
		'uses' => 'DepartmentController@index',
		'as'   => 'departments.index'
	]);

	Route::get('/categories', [
		'uses' => 'CategoriesController@index',
		'as'   => 'categories.index'
	]);

	//Designations
	Route::get('/designations/search', [
		'uses' => 'Designations@search',
		'as'   => 'designations.search'
	]);
	//Route::resource('/designations', 'Designations'); 

	Route::get('/designations/create', 'Designations@create')->name('designations.create');
	Route::get('/designations/destroy', 'Designations@destroy')->name('designations.destroy');
	Route::get('/designations/edit/{blog}', 'Designations@edit')->name('designations.edit');
	Route::put('/designations/update/{blog}', 'Designations@update')->name('designations.update');

	Route::get('/designations', [
		'uses' => 'Designations@index',
		'as'   => 'designations'
	]);

	//JobPOst
	//Route::resource('/jobposts', 'JobPosts'); 
	Route::get('/jobposts/create', 'JobPosts@create')->name('jobposts.create');
	Route::get('/jobposts/show', 'JobPosts@show')->name('jobposts.show');
	Route::get('/jobposts/destroy', 'JobPosts@destroy')->name('jobposts.destroy');
	Route::get('/jobposts/edit/{blog}', 'JobPosts@edit')->name('jobposts.edit');
	Route::put('/jobposts/update/{blog}', 'JobPosts@update')->name('jobposts.update');
	Route::get('/jobposts/store', 'JobPosts@store')->name('jobposts.store');





	Route::get('/jobposts/search', [
		'uses' => 'JobPosts@search',
		'as'   => 'jobposts.search'
	]);

	Route::get('/jobposts', [
		'uses' => 'JobPosts@index',
		'as'   => 'jobposts.index'
	]);

	Route::get('/editjobcategory/{jobid}/{postid}', [
		'uses' => 'JobPosts@editjobcategory',
		'as'   => 'jobposts.editjobcategory'
	]);
	Route::put('/updatejobcategory/{jobid}', [
		'uses' => 'JobPosts@updatejobcategory',
		'as'   => 'jobposts.updatejobcategory'
	]);




});
Route::get('/site', [
    'uses' => 'SiteController@index',
    'as'   => 'site'
]);
Route::get('/site/signup', [
    'uses' => 'SiteController@signup',
    'as'   => 'site.signup'
]);

Route::post('/site/signup/store', [
    'uses' => 'SiteController@store',
    'as'   => 'site.signup.store'
]);

// form controller
Route::get('/form/eligibility', [
    'uses' => 'FormController@index',
    'as'   => 'form.eligibility'
]);

Route::get('/form/apply', [
    'uses' => 'FormController@apply',
    'as'   => 'form.apply'
]);

Route::get('/form/eligibilitylist', [
    'uses' => 'FormController@eligibilitylist',
    'as'   => 'form.eligibilitylist'
]);

Route::get('/form/formvalidate/{id}', [
    'uses' => 'FormController@formvalidate',
    'as'   => 'form.formvalidate'
]);

Route::get('/form/edit/{parameter}', 'FormController@formedit');

Route::get('/department','FormController@department');
Route::get('/advertisement','FormController@advertisement');
Route::get('/details','FormController@getShowUploadInfo');

Route::post('/store', [
    'uses' => 'FormController@store',
    'as'   => 'form.store'
]);

Route::post('/storecategory', [
    'uses' => 'FormController@storeCategory',
    'as'   => 'form.storecategory'
]);

Route::post('/storeacademic', [
    'uses' => 'FormController@storeAcademic',
    'as'   => 'form.storeacademic'
]);


Route::get('loginc','LogincController@index');

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});



