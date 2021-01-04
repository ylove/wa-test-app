<?php

namespace Ylove\Routing;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersPostsController extends Controller
{    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  string $username
     * @return \Illuminate\Http\Response
     */
    public function show($username, $id)
    {
        //
        return view('routing::posts', ['post_id' => $id, 'username' => $username ]);
    }


}
