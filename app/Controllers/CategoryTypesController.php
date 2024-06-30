<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryTypesController extends BaseController
{
    public function index()
    {
        //
    }

    //women
    public function bags_wallets_clutches()
    {
        return view('women_category/bags_wallets_clutches');
    }

    public function brands()
    {
        return view('women_category/brands');
    }

    public function ethnic_fusion()
    {
        return view('women_category/ethnic_fusion');
    }

    public function footwear()
    {
        return view('women_category/footwear');
    }


    public function lingerie_loungewear()
    {
        return view('women_category/lingerie_loungewear');
    }

    public function western()
    {
        return view('women_category/western');
    }



    //men
    public function top_wear()
    {
        return view('men_category/top_wear');
    }

    public function bottom_wear()
    {
        return view('men_category/bottom_wear');
    }

    public function ethnic_wear()
    {
        return view('men_category/ethnic_wear');
    }

    public function foot_wear()
    {
        return view('men_category/foot_wear');
    }

    public function inner_wear()
    {
        return view('men_category/inner_wear');
    }

    public function men_brand()
    {
        return view('men_category/men_brand');
    }


    //kids

    public function bags()
    {
        return view('kids_category/bags');
    }

    public function boys_clothing()
    {
        return view('kids_category/boys_clothing');
    }





}
