<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
/**
 * Description of RandomController
 *
 * @author Justine
 */
class RandomController {
    //put your code here
    
    public function indexAction($limit){
        return new response('<html><body>Number: '.rand(1,$limit).'</body></html>');
    }
}
