<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of RandomController
 *
 * @author Justine
 */
class RandomController extends Controller {

    //put your code here

    public function indexAction($limit) {
        $number = rand(1, $limit);

        return $this->render('AcmeBundle:Random:index.html.twig', array('number' => $number));
    }

}
