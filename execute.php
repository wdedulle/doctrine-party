<?php
require_once 'bootstrap.php';
$reader = new \Doctrine\Common\Annotations\AnnotationReader();

// $party = new Individual();
// $party->setFirstName("");
// $party->setLastName("");

$party = new Organization();
$party->setName("this orm worthy");

$legal = new LegalDetails();
$legal->setVat("BE 1234 45");

$party->setLegalDetails( $legal );

$entityManager->persist($party);
$entityManager->flush();

// $party = $entityManager->find("Party", "f1f7cd58-c134-11e5-bf3d-0019d190e116");
// $party = $entityManager->find("Party", "1944af12-c133-11e5-bf3d-0019d190e116");

$productRepository = $entityManager->getRepository('Party');
$products = $productRepository->findAll();

foreach ($products as $product) {
	if( $product instanceof Organization ) {
    	echo "Organization : " . $product->getName() . PHP_EOL;
    	if( null !== $product->getLegalDetails() ) {
    		echo "VAT : " . $product->getLegalDetails()->getVat() . PHP_EOL;
    	}
	}
}
