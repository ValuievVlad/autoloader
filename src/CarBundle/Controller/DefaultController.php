<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/our-cars", name="offer")
     */
    public function indexAction()
    {
        $cars = [
            ['make' => 'Alfa-Romeo', 'name' => '145'],
            ['make' => 'BMW', 'name' => 'X5'],
            ['make' => 'Lamborghini', 'name' => 'Diablo'],
        ];
        return $this->render('CarBundle:Default:index.html.twig', ['cars' => $cars]);
    }
}
