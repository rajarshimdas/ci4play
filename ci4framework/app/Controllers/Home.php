<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
        $session = service('session');
        // var_dump($session);

        $d = [
            'activePID' => 5,
            'sessionID' => $session->session_id,
        ];

        $session->close();

        echo view("hello", $d);
        return view('home');
    }
}
