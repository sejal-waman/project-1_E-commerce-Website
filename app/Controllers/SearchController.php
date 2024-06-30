<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SearchController extends BaseController
{
    public function index()
    {
        //
    }

    public function search()
    {
        // This method could load the initial search form view if needed
        return view('search');
    }

    public function results()
    {
        $query = $this->request->getGet('query');

        // Perform your search logic here
        // For simplicity, let's just display the query for demonstration
        echo "Search results for: " . htmlspecialchars($query);
    }
}

