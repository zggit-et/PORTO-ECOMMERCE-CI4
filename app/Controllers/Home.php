<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("layouts/header_view");
        echo view("index_view");
        echo view("layouts/footer_view");
        
    }
}