<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    protected $request;
    protected $article;

    public function __construct(Request $request, Article $article) {
        $this->request = $request;
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
        //$articles = Article::paginate(15);

        // Return collection of articles as a resource
        //return ArticleResource::collection($articles);
        $article = $this->article->all();
        return response()->json(['data' => $article,
            'status' => Response::HTTP_OK]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
