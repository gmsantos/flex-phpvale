<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Psr\Log\LoggerInterface;

class DefaultController
{
    public function index()
    {
        $number = mt_rand(0, 100);

        //$log->alert('Surprise!');

        return new Response(
            '<html><body><p>Lucky number: '.$number.'</p></body></html>'
        );
    }
}