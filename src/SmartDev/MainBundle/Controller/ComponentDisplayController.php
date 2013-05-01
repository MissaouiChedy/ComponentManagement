<?php
namespace SmartDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComponentDisplayController extends Controller 
{
    public function displayAction() {
    	return $this->render("SmartDevMainBundle:ComponentDisplay:index.html.twig"); 
    }
}
?>
