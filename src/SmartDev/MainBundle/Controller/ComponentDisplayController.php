<?php
namespace SmartDev\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;
class ComponentDisplayController extends Controller {
	public function displayAction() {
		$comp1 = new ComponentDTO("EJB", "Enterprise JAVA BEAN", "Proprieaitaire", 
				"Entity Rep", "jar file", "stable", true);
		$comp2 = new ComponentDTO("Junit", "Testing framework", "GNU GPL",
				"Testing framework", "jar file", "stable", false);
		$allComponents = array($comp1, $comp1, $comp1, $comp2); 
		$tableModel = new ComponentTableModel($allComponents);
		return $this
				->render(
						"SmartDevMainBundle:ComponentDisplay:index.html.twig",
						array("model" => $tableModel));
	}
}
?>
