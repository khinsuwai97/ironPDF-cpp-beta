<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $jsonPath = APPPATH . 'Data/content.json';
        $data = json_decode(file_get_contents($jsonPath), true);

        return view('landing', $data);
    }
}
