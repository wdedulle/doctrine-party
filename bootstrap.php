<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$loader = require_once "vendor/autoload.php";

// register classes with namespaces
$loader->add('', __DIR__.'/src/Entity');

// activate the autoloader
$loader->register();

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// $logger = new \Doctrine\DBAL\Logging\EchoSQLLogger();
// $config->setSQLLogger($logger);

// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$connectionParams = array(
    'url' => 'sqlite:///:memory:',
);
// obtaining the entity manager
$entityManager = EntityManager::create($connectionParams, $config);

//lets create tables
$queries = explode(";", file_get_contents( __DIR__."/src/sql/create.sql" ));

foreach ( $queries as $query ) {
	$entityManager->getConnection()->prepare($query)->execute();
}