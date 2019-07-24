<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Author;
use App\Article;
use DB;

class HomeArticlesController extends Controller
{
    public function index(){

    	$article= DB::table('articles')

    			->where('articles.articleStatus','published')
    			->orderby('articleId','DESC')
    			->get();
    	
    	return view('front-page-articles.front-articles')
    			->with('article',$article);	

    }

    public function readMore($articleId){
    	$categories= DB::table('categories')
    			->where('categoryStatus','published')
    			->get('categories.*');
        
        $authors= DB::table('articles')
                ->join('authors','articles.authorId','=','authors.authorId')
                ->where('articles.articleId',$articleId)
                ->first();        

    	$read= DB::table('articles')
    		    ->join('categories','articles.categoryId','=','categories.categoryId')
    			->join('authors','articles.authorId','=','authors.authorId')
    			->where('articles.articleId',$articleId)
    			->first();

    	return view('front-page-articles.front-articles-single')
    			->with('read',$read)
                ->with('authors',$authors)
    			->with('categories',$categories);		
    }

    public function articlesOfSameCategory($categoryId){
        $categories= DB::table('categories')
                ->where('categoryId',$categoryId)
                ->first();
        $articlesOfSameCategory= DB::table('articles')
                ->where('articles.categoryId',$categoryId)
                
                ->get();
        return view('front-page-articles.show-by-categories')
                ->with('categories',$categories)
                ->with('articlesOfSameCategory', $articlesOfSameCategory);        

    }

    public function showContributors(){
        $contributors=DB::table('authors')->get();
        return view('includes.front-page-navbar-contributors',['contributors'=>$contributors]);
    }


}
