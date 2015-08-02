<?php
require "../vendor/autoload.php";

use Doctrine\Common\ClassLoader,
    Doctrine\ODM\MongoDB\Configuration,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver,
    Doctrine\ODM\MongoDB\DocumentManager,
    Doctrine\MongoDB\Connection;

/**
 * Doctrine bootstrap library for CodeIgniter
 *
 * @author	Joseph Wynn <joseph@wildlyinaccurate.com>
 * @link	http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2
 */
class DoctrineODM
{
	public $em;
        public $dm;

	public function __construct()
	{
            require_once APPPATH.'config/doctrine.php';
            
            // With this configuration, your model files need to be in application/models/Entity
            // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
            //$models_namespace = 'Documents';

        // Set up driver
            foreach (glob(APPPATH . 'modules/*', GLOB_ONLYDIR) as $m) {

                $module = str_replace(APPPATH . 'modules/', '', $m);
                $loader = new ClassLoader($module, APPPATH . 'modules');
                $loader->register();
            }
            
            $bfpath = BFPATH;
            foreach (glob($bfpath . 'modules/*', GLOB_ONLYDIR) as $m) {
                $module = str_replace($bfpath . 'modules/', '', $m) . '\\models';
                $loader = new ClassLoader('bonfire\\modules\\' . $module, '../'); //$bfpath); // .  'modules');
//print "<pre>load:namepace:$module path:" . $bfpath . 'modules';                
                $loader->register();
            }
            
            $models = array(APPPATH . 'models');
            $loader = new ClassLoader('models/', $models);
            $loader->register();
            
            foreach (glob(APPPATH . 'modules/*/models', GLOB_ONLYDIR) as $m) {
                array_push($models, $m);
            }            
            
            foreach (glob($bfpath . 'modules/*/models', GLOB_ONLYDIR) as $m) {
                array_push($models, $m);
            }            
            
            //$models_path = APPPATH . 'models';
            $proxies_dir = APPPATH . 'models/Proxies';
            $hydrators_dir = APPPATH . 'models/Hydrators';
            $metadata_paths = array(APPPATH . 'models');

            $config = new Configuration();
            $config->setDefaultDB($db['default']['database']);

            $config->setProxyDir($proxies_dir);
            $config->setProxyNamespace('Proxies');

            $config->setHydratorDir($hydrators_dir);
            $config->setHydratorNamespace('Hydrators');
//print "<pre>models:"; print_r($models);

            //$annotationDriver = $config->newDefaultAnnotationDriver(array($models_path . '/Documents'));
            $annotationDriver = $config->newDefaultAnnotationDriver($models);
            $config->setMetadataDriverImpl($annotationDriver);
            AnnotationDriver::registerAnnotationClasses();

            try {
                $this->dm = DocumentManager::create(new Connection($db['default']['server']), $config);
            } catch (Exception $ex) {
                var_dump($e->getMessage());
            }

	}
}
