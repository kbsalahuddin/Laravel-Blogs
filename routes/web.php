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

Route::get('/', ['uses'=>'HomeArticlesController@index', 'as'=>'/']);
Route::get('/read-more/{articleId}','HomeArticlesController@readMore');
Route::get('/articles-by-category/{categoryId}','HomeArticlesController@articlesOfSameCategory');
Route::get('/show-contributors','HomeArticlesController@showContributors');

//Route::get('/admin','AdminController@adminLogin');

Auth::routes();

//middlware group
Route::group(['middleware'=>'blogs'], function(){


		Route::get('/dashboard', 'HomeController@index');

		//Admin work
		Route::get('/add-categories','CategoryController@addCategory');
		Route::post('/save-categories','CategoryController@saveCategory');
		Route::get('/all-categories','CategoryController@allCategory');
		Route::get('/unpublished-categories/{categoryId}','CategoryController@unpublishedCategory');
		Route::get('/published-categories/{categoryId}','CategoryController@publishedCategory');
		Route::post('/update-categoryName','CategoryController@updateCategoryName');
		Route::get('/delete-categories/{categoryId}','CategoryController@deleteCategory');


		Route::get('/add-authors','AuthorController@addAuthor');
		Route::post('/save-authors','AuthorController@saveAuthor');
		Route::get('/all-authors','AuthorController@allAuthor');
		Route::get('/inactive-authors/{authorId}','AuthorController@inactiveAuthor');
		Route::get('/active-authors/{authorId}','AuthorController@activeAuthor');
		Route::get('/detail-authors/{authorId}','AuthorController@detailAuthor');
		Route::get('/edit-authors/{authorId}','AuthorController@editAuthor');
		Route::post('/update-authors','AuthorController@updateAuthor');
		Route::get('/delete-authors/{authorId}','AuthorController@deleteAuthor');



		Route::get('/add-articles','ArticleController@addArticle');
		Route::post('/save-articles','ArticleController@saveArticleImage');
		Route::get('/all-articles','ArticleController@allArticle');
		Route::get('/unpublished-articles/{articleId}','ArticleController@unpublishedArticle');
		Route::get('published-articles/{articleId}','ArticleController@publishedArticle');
		Route::get('/detail-articles/{articleId}','ArticleController@detailArticle');
		Route::get('/edit-articles/{articleId}','ArticleController@editArticle');
		Route::post('/update-articles','ArticleController@updateArticle');
		Route::get('/delete-articles/{articleId}','ArticleController@deleteArticle');



});
		


