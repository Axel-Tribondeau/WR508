<?php

namespace ContainerCsxyJQ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Action_EntrypointService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.graphql.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\GraphQl\Action\EntrypointAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Action/EntrypointAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/ExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Executor.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Error/ErrorHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Error/ErrorHandler.php';

        return $container->services['api_platform.graphql.action.entrypoint'] = new \ApiPlatform\GraphQl\Action\EntrypointAction(($container->privates['api_platform.graphql.schema_builder'] ?? $container->load('getApiPlatform_Graphql_SchemaBuilderService')), new \ApiPlatform\GraphQl\Executor(true), ($container->services['api_platform.graphql.action.graphiql'] ?? $container->load('getApiPlatform_Graphql_Action_GraphiqlService')), ($container->services['api_platform.graphql.action.graphql_playground'] ?? $container->load('getApiPlatform_Graphql_Action_GraphqlPlaygroundService')), ($container->privates['debug.serializer'] ?? self::getDebug_SerializerService($container)), new \ApiPlatform\GraphQl\Error\ErrorHandler(), true, true, true, 'graphiql');
    }
}