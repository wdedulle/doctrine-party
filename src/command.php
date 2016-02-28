<?php
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\EntityGenerator;

require_once '../bootstrap.php';


$entityManager->getConfiguration()->setMetadataDriverImpl(
	new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
		$entityManager->getConnection()->getSchemaManager()
	)
);

$tool = new \Doctrine\ORM\Tools\SchemaTool($entityManager);
$classes = array(
  $entityManager->getClassMetadata('Individual'),
  $entityManager->getClassMetadata('Party'),
);

foreach ( $tool->getCreateSchemaSql($classes) as $sqlScript ) {
	echo $sqlScript . PHP_EOL;
}

// $cmf = new DisconnectedClassMetadataFactory();
// $cmf->setEntityManager($entityManager);

// $metadata = $cmf->getAllMetadata();

// $generator = new EntityGenerator();
// $generator->setFieldVisibility(EntityGenerator::FIELD_VISIBLE_PROTECTED);
// $generator->setGenerateAnnotations(true);
// $generator->setGenerateStubMethods(true);
// $generator->generate($metadata,  __DIR__ . '/Entity');
