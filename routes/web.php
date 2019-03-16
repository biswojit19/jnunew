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

Route::auth();

Route::get('/home', 'Backend\HomeController@index');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');
Route::get('/blog', 'Backend\BlogController@index')->name('blog');

Route::put('/backend/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as'   => 'backend.blog.restore'
]);
Route::delete('/backend/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as'   => 'backend.blog.force-destroy'
]);
//Route::resource('/backend/blog', 'Backend\BlogController');
Route::get('/backend/blog/destroy', 'Backend\BlogController@destroy')->name('backend.blog.destroy');
Route::get('/backend/blog/edit/{blog}', 'Backend\BlogController@edit')->name('backend.blog.edit');
Route::put('/backend/blog/update/{blog}', 'Backend\BlogController@update')->name('backend.blog.update');

Route::get('/backend/categories/create', [
    'uses' => 'Backend\CategoriesController@create',
    'as' => 'backend.categories.create'
]);

Route::get('/backend/categories/destroy', 'Backend\CategoriesController@destroy')->name('backend.categories.destroy');
Route::get('/backend/categories/edit/{blog}', 'Backend\CategoriesController@edit')->name('backend.categories.edit');
Route::put('/backend/categories/update/{blog}', 'Backend\CategoriesController@update')->name('backend.categories.update');


Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);
//Route::resource('/backend/users', 'Backend\UsersController');
Route::get('/backend/users/destroy', 'Backend\UsersController@destroy')->name('backend.users.destroy');
Route::get('/backend/users/edit/{blog}', 'Backend\UsersController@edit')->name('backend.users.edit');
Route::put('/backend/users/update/{blog}', 'Backend\UsersController@update')->name('backend.users.update');

Route::get('/backend/users', [
    'uses' => 'Backend\UsersController@index',
    'as'   => 'backend.users.index'
]);

Route::get('/backend/categories/search', [
    'uses' => 'Backend\CategoriesController@search',
    'as'   => 'backend.categories.search'
]);

Route::get('/backend/categories', [
    'uses' => 'Backend\CategoriesController@index',
    'as'   => 'backend.categories.index'
]);

Route::get('/backend/categoriessearch/search', [
    'uses' => 'Backend\CategoriesController@search',
    'as'   => 'backend.categories.search'
]);


Route::get('/backend/categoriessearch/search', 'Backend\CategoriesController@search');

//Departments
//Route::resource('/backend/departments', 'Backend\DepartmentController');
Route::get('/backend/departments/destroy', 'Backend\DepartmentController@destroy')->name('backend.departments.destroy');
Route::get('/backend/departments/edit/{blog}', 'Backend\DepartmentController@edit')->name('backend.departments.edit');
Route::put('/backend/departments/update/{blog}', 'Backend\DepartmentController@update')->name('backend.departments.update');

Route::get('/backend/departments', [
    'uses' => 'Backend\DepartmentController@index',
    'as'   => 'backend.departments.index'
]);

Route::get('/backend/categories', [
    'uses' => 'Backend\CategoriesController@index',
    'as'   => 'backend.categories.index'
]);

//Designations
Route::get('/backend/designations/search', [
    'uses' => 'Backend\Designations@search',
    'as'   => 'backend.designations.search'
]);
//Route::resource('/backend/designations', 'Backend\Designations'); 
Route::get('/backend/designations/destroy', 'Backend\Designations@destroy')->name('backend.designations.destroy');
Route::get('/backend/designations/edit/{blog}', 'Backend\Designations@edit')->name('backend.designations.edit');
Route::put('/backend/designations/update/{blog}', 'Backend\Designations@update')->name('backend.designations.update');

Route::get('/backend/designations', [
    'uses' => 'Backend\Designations@index',
    'as'   => 'backend.designations.index'
]);

//JobPOst
//Route::resource('/backend/jobposts', 'Backend\JobPosts'); 

Route::get('/backend/jobposts/destroy', 'Backend\JobPosts@destroy')->name('backend.jobposts.destroy');
Route::get('/backend/jobposts/edit/{blog}', 'Backend\JobPosts@edit')->name('backend.jobposts.edit');
Route::put('/backend/jobposts/update/{blog}', 'Backend\JobPosts@update')->name('backend.jobposts.update');

Route::get('/backend/jobposts/search', [
    'uses' => 'Backend\JobPosts@search',
    'as'   => 'backend.jobposts.search'
]);

Route::get('/backend/jobposts', [
    'uses' => 'Backend\JobPosts@index',
    'as'   => 'backend.jobposts.index'
]);

Route::get('/backend/editjobcategory/{jobid}/{postid}', [
    'uses' => 'Backend\JobPosts@editjobcategory',
    'as'   => 'backend.jobposts.editjobcategory'
]);
Route::put('/backend/updatejobcategory/{jobid}', [
    'uses' => 'Backend\JobPosts@updatejobcategory',
    'as'   => 'backend.jobposts.updatejobcategory'
]);


//side controller

Route::get('/side', [
    'uses' => 'SideController@index',
    'as'   => 'side'
]);
Route::get('/side/signup', [
    'uses' => 'SideController@signup',
    'as'   => 'side.signup'
]);

Route::post('/side/signup/store', [
    'uses' => 'SideController@store',
    'as'   => 'side.signup.store'
]);


Route::get('loginc','LogincController@index');



