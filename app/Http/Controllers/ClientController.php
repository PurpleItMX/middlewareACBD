<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('/client/index');
    }

     /**
     * Show the form for create new client.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return  view('/client/form');
    }


	 /**
	 * Show the form for edit client.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function edit()
    {
        return  view('/client/form');
    }
}
