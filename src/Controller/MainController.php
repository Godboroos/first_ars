<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $etap1 = [
           'bo'=> [
                'zardnel'=>'8:00',
                'dproc'=>'8:30',
                'tun'=>'Mkrtchyan'
            ],


        ];
        $hajox =[

        ];


        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'eatap1'=>$etap1,
            'hajox'=>$hajox,
        ]);
    }
}
