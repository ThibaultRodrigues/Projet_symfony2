<?php

namespace ContainerPfxmvrJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllerafficheLesFormationsEmpActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0L3Qld_.App\Controller\FormationController::afficheLesFormationsEmpAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0L3Qld_.App\\Controller\\FormationController::afficheLesFormationsEmpAction()'] = ($container->privates['.service_locator.0L3Qld_'] ?? $container->load('get_ServiceLocator_0L3QldService'))->withContext('App\\Controller\\FormationController::afficheLesFormationsEmpAction()', $container);
    }
}
