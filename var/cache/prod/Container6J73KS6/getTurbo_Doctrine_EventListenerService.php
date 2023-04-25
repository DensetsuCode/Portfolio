<?php

namespace Container6J73KS6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Doctrine_EventListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'turbo.doctrine.event_listener' shared service.
     *
     * @return \Symfony\UX\Turbo\Doctrine\BroadcastListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['turbo.doctrine.event_listener'] = new \Symfony\UX\Turbo\Doctrine\BroadcastListener(new \Symfony\UX\Turbo\Broadcaster\TwigBroadcaster(new \Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ['App\\Entity\\' => 'broadcast/'], new \Symfony\UX\Turbo\Broadcaster\IdAccessor(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->services['doctrine'] ?? $container->getDoctrineService()))), ($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
    }
}