<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Author;
use App\Article;
use DB;
class ArticleController extends Controller
{
    public function addArticle(){
      $categories=Category::where('categoryStatus','published')->get();
      $authors=Author::where('authorStatus','active')->get();
      return view('admin.articles.add-articles', ['categories'=>$categories, 'authors'=>$authors]);    	
    	
    }



    public function saveArticleImage(Request $request){

   	  $articleImage=$request->file('articleImage');
      
      $imgName=$articleImage->getClientOriginalName();//show image file name only
      
      $uploadPath='articleImages/';
      
      $articleImage->move($uploadPath,$imgName);//move to productImage folder
      
      $imgUrl= $uploadPath.$imgName;

      $this->saveArticle($request, $imgUrl);
      return redirect('/all-articles')->with('message','Article Info insertion success!');
    }
    protected function saveArticle(Request $request, $imgUrl){
      $article= new Article();
      
      $article->categoryId=      $request->categoryId;
      $article->authorId=        $request->authorId;
      $article->articleName=     strip_tags($request->articleName);
      $article->articleSubHead=  strip_tags($request->articleSubHead);
      $article->articleBody=     strip_tags($request->articleBody);
      $article->articleImage=    $imgUrl;
      $article->articleStatus=   $request->articleStatus;
      $article->save();
    }

    
    

    public function allArticle(){
      $articles= DB::table('articles')
		        ->join('categories','articles.categoryId', '=' ,'categories.categoryId')
		        ->join('authors','articles.authorId', '=' ,'authors.authorId')
		        ->select('articles.*', 'categories.categoryName','authors.authorName')
		        
		        ->get();

      return view('admin.articles.all-articles',['articles'=>$articles]);
    }

    

    public function editArticle($articleId){
		$categories=Category::where('categoryStatus','published')->get();
		$authors=   Author::where('authorStatus','active')->get();
   		
   		$articleInfo= DB::table('articles')
    		
    		->join('categories','articles.categoryId','=','categories.categoryId')
    		->join('authors','articles.authorId','=','authors.authorId')
    		->where('articleId',$articleId)   		
    		->first();
    	return view('admin.articles.edit-articles')
      									->with('categories',$categories)
      									->with('articleInfo', $articleInfo)
      									->with('authors',$authors);
    }

    public function detailArticle($articleId){

   		
   		$detailById= DB::table('articles')
    		
    		->join('categories','articles.categoryId','=','categories.categoryId')
    		->join('authors','articles.authorId','=','authors.authorId')
    		->where('articleId',$articleId)   		
    		->first();
    	return view('admin.articles.details-articles')->with('detailById', $detailById);
    }

    public function updateArticle(Request $request){
        $imgUrl= $this->imgExistStatus($request);
        
        $article= new Article();
        $article= Article::find($request->articleId);
        
        $article->categoryId=     $request->categoryId;
        $article->authorId=       $request->authorId;
        $article->articleName=    $request->articleName;
		$article->articleSubHead= strip_tags($request->articleSubHead);
        $article->articleBody=    strip_tags($request->articleBody);
        
		$article->articleImage=  $imgUrl;
		$article->save();
        return redirect('/all-articles')->with('message','Author info updated successfully');
    }

    private function imgExistStatus($request){

      	$articleInfo=     Article::where('articleId',$request->articleId)->first();
      	$articleImg=    $request->file('articleImage');
      
      	if($articleImg){

		    unlink($articleInfo->articleImage);
		    $imgName=$articleImg->getClientOriginalName();//show image file name only
		    $uploadPath= 'articleImages/';
		    $articleImg->move($uploadPath,$imgName);//move to productImage folder
		    $imgUrl= $uploadPath.$imgName;
        }else
        {

			$imgUrl= $articleInfo->articleImage;
      	}

      	return $imgUrl;
    }


    public function unpublishedArticle($articleId){

      $changeStatus=Article::where('articleId',$articleId)->first();
      $changeStatus->articleStatus='unpublished';
      $changeStatus->save();
      return redirect('/all-articles');
    }

    

    public function publishedArticle($articleId){

      $changeStatus=Article::where('articleId',$articleId)->first();
      $changeStatus->articleStatus='published';
      $changeStatus->save();
      return redirect('/all-articles');
    }


    
    

    public function deleteArticle($articleId){
      $article=Article::where('articleId',$articleId)->first();
      $article->delete();
      return redirect('/all-articles')->with('message','Article row deleted successfully');    	
    }           
    /*public function viewArticle(){
      $productById= DB::table('products')
        ->join('categories','products.categoryId', '=' ,'categories.id')
        ->join('manufacturers','products.manufacturerId', '=' ,'manufacturers.id')

        ->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
        ->where('products.id', $id)
        ->first();
      return view('admin.product.viewProduct', ['product'=>$productById]);
    }  */    
}
