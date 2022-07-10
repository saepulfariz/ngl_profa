<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/page1');
    }

    public function page2()
    {
        return view('home/page2');
    }

    public function page3()
    {
        return view('home/page3');
    }

    public function input($name = "saepulfariz")
    {
        $data = [
            'name' => $name
        ];
        return view('home/input', $data);
    }

    public function blank()
    {
        return view('blank');
    }

    public function ku()
    {
        return view('ku');
    }


    // question=kuyhaa+Me%21&deviceId=daab2174-ea7f-4013-bb87-eb73821b4599
    // https://ngl.link/saepulfariz
    // POST
}
