<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TransactionsController extends Controller
{

    private $client;
    private $token;
    public function __construct() {
        $this->client=new HttpClient();
        $this->token=config('parameters.token');
    }
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $response =  $this->client->get("users/$this->token");
        return view('transactions', ['transactions' => collect($response->json())->take(50)]);
    }

    public function userTransactions($id)
    {   
        $userResponse = $this->client->get("users/$this->token/transaction/$id");
        return view('userTransaction', ['userTransac' => collect($userResponse->json())->take(1)]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
