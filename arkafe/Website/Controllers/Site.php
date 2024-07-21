<?php

namespace Arkafe\Website\Controllers;

class Site extends BadDragon
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

        //echo view("hello", $d);
        //return view('home');

        echo "website";
        return "!";
    }
}
