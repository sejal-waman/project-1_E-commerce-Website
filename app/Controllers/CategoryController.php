<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    public $detail='';
    
    public function categories()
    {
        return view('Categories/categories');
    }

    public function addtocart()
    {
        $imagePath = urldecode($this->request->getGet('data4'));
        $data=[
            'product_name'=>$this->request->getVar('data1'),
            'product_brand'=>$this->request->getVar('data2'),
            'product_price'=>$this->request->getVar('data3'),
            'image_url' => $imagePath,
        ];
        
        $model = new \App\Models\CartModel();
        $Model = model('CartModel');
        $model->insert($data);
       
        return $this->response->redirect(site_url('viewcart'));
        
    }

    public function viewimage()
    {
        $model = new \App\Models\ImageModel();
        $data['detail']=$model->findAll();
        return view('Cart/viewimage',$data);
       // return view('Cart/viewimage');
    }

    public function viewcart()
    {
        $model = new \App\Models\CartModel();
        $data['detail']=$model->findAll();
        return view('Cart/viewcart',$data);
        //return view('Cart/cart');
    }

    public function removecart($id)
    {
        $model = new \App\Models\CartModel();
        if($model->find($id))
        {
            $model->delete($id);
        
        }
        return $this->response->redirect(site_url('viewcart'));
    }
    public function women()
    {
        return view('Categories/women');
    }

    public function men()
    {
        return view('Categories/men');
    }

    public function digital()
    {
        return view('Categories/digital');
    }

    public function cosmetics()
    {
        return view('Categories/cosmetics');
    }

    public function kids()
    {
        return view('Categories/kids');
    }

    public function jewellery()
    {
        return view('Categories/jewellery');
    }
}
