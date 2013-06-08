<?php
namespace SmartDev\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmartDev\MainBundle\BuisnessLayer\ComponentDTO;
use SmartDev\MainBundle\BuisnessLayer\ProductDTO;
class GeneralDisplayController extends Controller {
	public function displayComponentsAction() {
		$allComponentsEntities = $this->getDoctrine()->getEntityManager()
				->getRepository("SmartDevMainBundle:Composant")->findAll();

		$allComponents = array();
		foreach ($allComponentsEntities as $entity) {
			$allComponents[] = new ComponentDTO($entity->getTitre(),
					$entity->getDescription(),
					$entity->getlicence()->getNomLicence(),
					$entity->getNatureComposant()->getNomNature(),
					$entity->getTypeComposant()->getNomType(),
					$entity->getEtat()->getNomEtat(), $entity->getVisibilite());

		}
		$tableModel = new ComponentTableModel($allComponents);
		return $this
				->render(
						"SmartDevMainBundle:GeneralDisplay:components.html.twig",
						array("model" => $tableModel));
	}

	public function displayProductsAction() {
		$allProductsEntities = $this->getDoctrine()->getEntityManager()
				->getRepository("SmartDevMainBundle:Produit")->findAll();
		$allProducts = array();
		foreach ($allProductsEntities as $entity) {
			$allProducts[] = new ProductDTO($entity->getTitre(), null,
					$entity->getDescription(),
					$entity->getNatureProduit()->getNomNature(),
					$entity->getTypeProduit()->getNomType(),
					$entity->getLicence()->getNomLicence(),
					$entity->getEtat()->getNomEtat(), $entity->getVisibilite(),
					null);
		}
		$tableModel = new ProductTableModel($allProducts);
		return $this
				->render(
						"SmartDevMainBundle:GeneralDisplay:products.html.twig",
						array("model" => $tableModel));
	}
	public function displayParametersAction() {
		return $this
		->render(
				"SmartDevMainBundle:GeneralDisplay:parameters.html.twig");
	}
}
?>
