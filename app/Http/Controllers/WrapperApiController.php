<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function contacts()
    {
        $json = Http::get('http://3.13.86.142:3000/contacts')->json();
        return response()->json($json);
    }
    public function getcontact()
    {
        $json = Http::get('http://3.13.86.142:3000/contacts/62483268f2967f0ec89557d8')->json();
        return response()->json($json);
    }
    public function audio()
    {
        $json = Http::get('http://api.alquran.cloud/v1/edition?format=audio&language=ar')->json();
        return response()->json($json);
    }
    public function metadata()
    {
        $json = Http::get('http://api.alquran.cloud/v1/meta')->json();
        return response()->json($json);
    }
    public function book()
    {
        $json = Http::get('http://api.alquran.cloud/v1/edition/language/ar')->json();
        return response()->json($json);
    }
}
