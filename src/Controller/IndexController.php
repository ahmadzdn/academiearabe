<?php
/**
 * Created by PhpStorm.
 * User: ahmadzeidan
 * Date: 16/11/2018
 * Time: 12:37
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route(name="home", path="/")
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return $this->render('Home/index.html.twig');
    }

}