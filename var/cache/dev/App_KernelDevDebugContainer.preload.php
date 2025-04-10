<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerQ66d2mI\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerQ66d2mI/EntityManagerGhost614a58f.php';
require __DIR__.'/ContainerQ66d2mI/RequestPayloadValueResolverGhost01ca9cc.php';
require __DIR__.'/ContainerQ66d2mI/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerQ66d2mI/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerQ66d2mI/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerQ66d2mI/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerQ66d2mI/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerQ66d2mI/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerQ66d2mI/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerQ66d2mI/getSession_FactoryService.php';
require __DIR__.'/ContainerQ66d2mI/getServicesResetterService.php';
require __DIR__.'/ContainerQ66d2mI/getSecrets_VaultService.php';
require __DIR__.'/ContainerQ66d2mI/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/ContainerQ66d2mI/getRouting_LoaderService.php';
require __DIR__.'/ContainerQ66d2mI/getPropertyAccessorService.php';
require __DIR__.'/ContainerQ66d2mI/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_Type_FormService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_Type_FileService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_Type_EntityService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_Type_ColorService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_RegistryService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_FactoryService.php';
require __DIR__.'/ContainerQ66d2mI/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerQ66d2mI/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerQ66d2mI/getErrorControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerQ66d2mI/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerQ66d2mI/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerQ66d2mI/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerQ66d2mI/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerQ66d2mI/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerQ66d2mI/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerQ66d2mI/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerQ66d2mI/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerQ66d2mI/getCache_SystemClearerService.php';
require __DIR__.'/ContainerQ66d2mI/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerQ66d2mI/getCache_AppClearerService.php';
require __DIR__.'/ContainerQ66d2mI/getTemplateControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getRedirectControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getProfilerControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getProduitRepositoryService.php';
require __DIR__.'/ContainerQ66d2mI/getInscriptionRepositoryService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationRepositoryService.php';
require __DIR__.'/ContainerQ66d2mI/getEmployeRepositoryService.php';
require __DIR__.'/ContainerQ66d2mI/getRechercheInscriptionService.php';
require __DIR__.'/ContainerQ66d2mI/getProduitTypeService.php';
require __DIR__.'/ContainerQ66d2mI/getInscriptionTypeService.php';
require __DIR__.'/ContainerQ66d2mI/getFormTypeService.php';
require __DIR__.'/ContainerQ66d2mI/getEmployeTypeService.php';
require __DIR__.'/ContainerQ66d2mI/getRechercheControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getLoginControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getInscriptionControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerService.php';
require __DIR__.'/ContainerQ66d2mI/getRechercheControllerrechercheFindByActionService.php';
require __DIR__.'/ContainerQ66d2mI/getLoginControlleremployeConnexionService.php';
require __DIR__.'/ContainerQ66d2mI/getInscriptionControllerfindOneBySomePrenomNomActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllersuppFormationActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerajoutproduitActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerajoutFormationActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerafficheLesValidationsActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerafficheLesFormationsActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerValiderformationActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerRefuserformationActionService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_JtEnr_GService.php';
require __DIR__.'/ContainerQ66d2mI/getRechercheControllerrechercheInscriptionsService.php';
require __DIR__.'/ContainerQ66d2mI/getRechercheControllerrechercheInscriptionService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_VtrKQedService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_TfgZC7RService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_QaaoWjxService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_4wc4Ag1_KernelloadRoutesService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_4wc4Ag1Service.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerinscriptionformationActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerafficheLesFormationsValiderActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerafficheLesFormationsEmpActionService.php';
require __DIR__.'/ContainerQ66d2mI/getFormationControllerDejaInscritEmpActionService.php';
require __DIR__.'/ContainerQ66d2mI/get_ServiceLocator_0L3QldService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerQ66d2mI/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\Console\DataCollector\CommandDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\Attribute\MapEntity';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\VirtualRequestStack';
$classes[] = 'App\Controller\FormationController';
$classes[] = 'App\Controller\InscriptionController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\RechercheController';
$classes[] = 'App\Form\EmployeType';
$classes[] = 'App\Form\FormType';
$classes[] = 'App\Form\InscriptionType';
$classes[] = 'App\Form\ProduitType';
$classes[] = 'App\Form\RechercheInscription';
$classes[] = 'App\Repository\EmployeRepository';
$classes[] = 'App\Repository\FormationRepository';
$classes[] = 'App\Repository\InscriptionRepository';
$classes[] = 'App\Repository\ProduitRepository';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\IdleConnectionMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\Middleware\IdleConnection\Listener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultTypedFieldMapper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Component\DependencyInjection\StaticEnvVarLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);
