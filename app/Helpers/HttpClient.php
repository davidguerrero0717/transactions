<?php


namespace App\Helpers;
use Illuminate\Support\Facades\Http;


class HttpClient {

    private $token;

    public function __construct() {
        $this->baseUrl=config('parameters.basePath');
    }

    public function get($path){
        return Http::get($this->baseUrl."/".$path);
    }

}