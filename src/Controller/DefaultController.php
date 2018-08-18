<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(LoggerInterface $log)
    {
        $number = mt_rand(0, 100);

        $log->alert('Surprise!');

        return new Response(
            '<html><body><p>Lucky number: '.$number.'</p></body></html>'
        );
    }
}
