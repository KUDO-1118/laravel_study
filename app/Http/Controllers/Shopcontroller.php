<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class Shopcontroller extends Controller
{
    public function index()
    {
        //1対多　親->子 親から子を探す
        $shops = Area::find(1)->shops;

        //親 <- 子 子から親を探す
        $area = Shop::find(2)->area;
        // dd($area);

    }
}
