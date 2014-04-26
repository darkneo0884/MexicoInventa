<?php
   

require 'Doctrine/Common/ClassLoader.php';

//Registramos el namespace de las clases de Doctrine.
require '/inc/config/Doctrine/lib/Doctrine/Common/ClassLoader.php';
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', '/inc/config/Doctrine/lib');
$classLoader->register(); // register on SPL autoload stack

$classloader = new \Doctrine\Common\ClassLoader('Symfony', '/inc/config/Doctrine/lib/Doctrine');
$classloader->register();

use Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration,
    Symfony\Component\Yaml\Yaml;

echo \Symfony\Component\Yaml\Yaml::dump(array('prueba' => 'prueba'));

$applicationMode = "development";

if ($applicationMode == "development") {
    $cache = new \Doctrine\Common\Cache\ArrayCache;
} else {
    $cache = new \Doctrine\Common\Cache\ApcCache;
}

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver(dirname(__FILE__).DIRECTORY_SEPARATOR.'Entities');
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir(dirname(__FILE__).DIRECTORY_SEPARATOR.'Entities');
$config->setProxyNamespace('MyProject\Proxies');

if ($applicationMode == "development") {
    $config->setAutoGenerateProxyClasses(true);
} else {
    $config->setAutoGenerateProxyClasses(false);
}

$connectionOptions = array(
    'dbname' => 'prueba',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$mysql = new basededatos($CONFIG["server"],$CONFIG["user"],
                   		$CONFIG["password"],$CONFIG["db"]);
$em = EntityManager::create($connectionOptions, $config);

var_dump($em);



?>