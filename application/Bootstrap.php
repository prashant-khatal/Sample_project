<?php
use Doctrine\ORM\Mapping\Driver;
use Doctrine\ORM\Tools;
use Doctrine\ORM;
require_once 'Doctrine/Common/ClassLoader.php';
use Doctrine\ORM\EntityManager, Doctrine\ORM\Configuration;
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{

	public function _initDoctrine(){
		$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', realpath(APPLICATION_PATH . "/../library/"));
		$classLoader->register();

		$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', realpath(APPLICATION_PATH . "/../library/"));
		$classLoader->register();

		$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', realpath(APPLICATION_PATH . "/../library/"));
		$classLoader->register();

		$classLoader = new \Doctrine\Common\ClassLoader('Entities', realpath(APPLICATION_PATH));
		$classLoader->register();

		$classLoader = new \Doctrine\Common\ClassLoader('Proxies', realpath(APPLICATION_PATH));
		$classLoader->register();

		$cache = new \Doctrine\Common\Cache\ArrayCache();


		$config = new Configuration();
		$config->setMetadataCacheImpl($cache);
		$config->setMetadataDriverImpl(Doctrine\ORM\Mapping\Driver\AnnotationDriver::create(array(APPLICATION_PATH . '/Entities')));
		$config->setQueryCacheImpl($cache);
		$config->setProxyDir(APPLICATION_PATH . '/Proxies');
		$config->setProxyNamespace('Proxies');
		$config->setEntityNamespaces(array('Entities'));
		$config->setAutoGenerateProxyClasses(false);

$connectionOptions = array('dbname'=>"sample_project_db", 'user'=>"root",
			'password'=>"", 'host'=>"localhost", 'driver'=>"pdo_mysql");
$em = EntityManager::create($connectionOptions, $config);
Zend_Registry::set('em', $em);




//{
//		$config = new Configuration();
//		$config->setMetadataCacheImpl($cache);
//		$config->setEntityNamespaces(array('Entities'));
//		$annotationDriver = $config->newDefaultAnnotationDriver(array(APPLICATION_PATH."/Entities"));
//
//
//		$config->setMetadataDriverImpl($annotationDriver);
////		$driverImpl = $config->newDefaultAnnotationDriver(APPLICATION_PATH . '/Entities');
////		$config->setMetadataDriverImpl($driverImpl);
//		$config->setQueryCacheImpl($cache);
//		$config->setProxyDir(APPLICATION_PATH . '/Proxies');
//		$config->setProxyNamespace('Proxies');
//		$config->setAutoGenerateProxyClasses(false);
//
//
//		$connectionOptions = array('dbname'=>"sample_project_db", 'user'=>"root",
//			'password'=>"", 'host'=>"localhost",
//			'driver'=>"pdo_mysql");
////		$connectionOptions = array('dbname'=>"youtube_connect", 'user'=>"myron",
////			'password'=>"orchard", 'host'=>"192.168.31.138",
////			'driver'=>"pdo_mysql");
//		$em = EntityManager::create($connectionOptions, $config);
//
//
//		$driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver($em->getConnection()->getSchemaManager());
//
//		$em->getConfiguration()->setMetadataDriverImpl($driver);
//
//		$cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($em);
//		$cmf->setEntityManager($em);
//		$classes = $driver->getAllClassNames();
//		$metadata = $cmf->getAllMetadata();
//		$generator = new \Doctrine\ORM\Tools\EntityGenerator();
//		$generator->setUpdateEntityIfExists(false);
//		$generator->setBackupExisting(false);
//		$generator->setGenerateStubMethods(true);
//		$generator->setGenerateAnnotations(true);
//		$generator->generate($metadata, '../application/Entities');
//Zend_Registry::set("em", $em);
//}

	}

}

