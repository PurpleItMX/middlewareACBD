<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clients = DB::select('select * from clients');
        return  view('/client/index',['clients' => $clients]);
    }

     /**
     * Show the form for create new client.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return  view('/client/form', ['client' =>'']);
    }


	 /**
	 * Show the form for edit client.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function edit($id)
    {

        $client = DB::select('select * from clients where id_client = ?', [$id]);
        return  view('/client/form', ['client' => $client]);
    }


    /**
     * save un new client or update a client.
     *
     * @return \Illuminate\Http\Response
     */
    public function save($id)
    {
        return  view('/client/form');
    }

}
