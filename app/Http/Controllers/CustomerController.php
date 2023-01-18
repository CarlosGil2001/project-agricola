<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use GuzzleHttp\Client;

class CustomerController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8070/api/v1/customers');
        $customersArray = $response->json();
        return view('customer.list',compact('customersArray'));
        //return dd($customersArray);
        //return Http::get('http://127.0.0.1:8070/api/v1/customers')["customerRespose"]["customer"][0]["id"];
    }
}