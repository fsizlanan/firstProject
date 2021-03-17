<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()  //routers dan gelecek olan istek, fonk oluşturuldu. 
   {
       return view('front.index'); //views içindeki front un about blade ini döndürdü
   }

   public function contact() //fonksiyon oluşturuldu
   {
       return view('front.contact'); // views altında front altında daha önceden oluşturulan contact bladei çağrıldı.
    }
    public function about()
    {
        return view('front.about');
    }
}

