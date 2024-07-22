<?php

namespace Arkafe\Website\Controllers;

class Site extends BadDragon
{
    protected $s;

    public function __construct()
    {
        // Access controls
    }
    
    public function __destruct()
    {
        $this->session->close();
    }
    
    public function index(): string
    {
        
        
        // var_dump($session);

        $d = [
            'activePID' => 5,
            'sessionID' => $this->session->session_id,
        ];

        echo "website: ".$d['sessionID'];
        return "!";
    }

    public function concert(): string{
        return 'concert';
    }
}
