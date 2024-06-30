<!-- app/Controllers/Billing.php -->
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class Billing extends Controller
{
    public function billing_details()
    {
        return view('billing_details');
    }

    public function submit()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'region' => 'required',
            'street_address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pin_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required|valid_email'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON(['errors' => $validation->getErrors()])->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST);
        }

        // Process the form data, for example, save to database
        // ...

        return $this->response->setJSON(['message' => 'Billing details submitted successfully!']);
    }
}