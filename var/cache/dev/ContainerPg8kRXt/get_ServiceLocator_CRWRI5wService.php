<?php

namespace ContainerPg8kRXt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CRWRI5wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cRWRI5w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cRWRI5w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'request' => ['privates', '.errored.KJlajXK', NULL, 'Cannot determine controller argument for "App\\Controller\\AxelController::cv()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'request' => '?',
        ]);
    }
}
