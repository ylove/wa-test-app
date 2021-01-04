<?php

namespace Ylove\Routing;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CategoriesPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('routing::main', [ 'taxonomy' => 'CategoriesPosts' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $category
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $id)
    {
        //
        return view('routing::posts', ['post_id' => $id, 'category' => $category ]);
    }

}
