<?php
namespace SmartDev\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;
class GeneralDisplayController extends Controller {
	public function displayComponentsAction() {
		$comp1 = new ComponentDTO("EJB", "Enterprise JAVA BEAN",
				"Proprieaitaire", "Entity Rep", "jar file", "stable", true);

		$comp2 = new ComponentDTO("Junit", "Testing framework", "GNU GPL",
				"Testing framework", "jar file", "stable", false);

		$allComponents = array($comp1, $comp1, $comp1, $comp2);

		$tableModel = new ComponentTableModel($allComponents);
		return $this
				->render(
						"SmartDevMainBundle:GeneralDisplay:components.html.twig",
						array("model" => $tableModel));
	}
	public function displayProductsAction() {
		$allProducts = array();
		$tableModel = new ProductTableModel($allProducts);
		return $this
				->render(
						"SmartDevMainBundle:GeneralDisplay:products.html.twig",
						array("model" => $tableModel));
	}
}
?>
