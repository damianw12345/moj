<?php

namespace Login\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Created by PhpStorm.
 * User: damian.warzecha
 * Date: 2016-07-21
 * Time: 11:39
 */
class LoginController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

}