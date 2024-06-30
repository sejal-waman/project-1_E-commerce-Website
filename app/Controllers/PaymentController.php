<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PaymentController extends BaseController
{
    public function payment()
    {
        return view('Commerce/payment');
    }

    public function processPayment()
    {
        $paymentMethod = $this->request->getPost('payment-method');
        return redirect()->back()->with('message', 'Selected payment method: ' . $paymentMethod);
    }

}
