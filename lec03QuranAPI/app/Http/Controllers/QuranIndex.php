<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use View;

class QuranIndex extends Controller
{
    //



    function getContents()
    {

        // echo "working ......";




        $mydata = Http::get("https://api.alquran.cloud/v1/meta");

        return View("Surahs", ["alldata" => $mydata["data"]["surahs"]["references"]]);
    }
}
