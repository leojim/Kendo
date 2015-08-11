<?php
use LazyRecord\Schema\SchemaGenerator;
use LazyRecord\ConfigLoader;
use CLIFramework\Logger;

$loader = require 'vendor/autoload.php';
// Add fallback directory for looking up class files
$loader->add(null, 'tests');

$config = ConfigLoader::getInstance();
$config->loadFromSymbol(true);


$logger = new Logger;
$logger->info("Building schema class files...");

// build schema class files
$schemas = array(
    new \Kendo\Model\ActorSchema,
    new \Kendo\Model\RoleSchema,
    new \Kendo\Model\AccessRuleSchema,
);
$g = new \LazyRecord\Schema\SchemaGenerator($config, $logger);
$g->setForceUpdate(true);
$g->generate($schemas);
