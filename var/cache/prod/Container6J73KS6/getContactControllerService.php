<?php

namespace Container6J73KS6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ContactController', $container));

        return $instance;
    }
}
