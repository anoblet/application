<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e638066b7610b8af3537c9f15b8122d
{
    public static $classMap = array (
        'Application' => __DIR__ . '/..' . '/anoblet/library/Application.php',
        'Application\\Base' => __DIR__ . '/..' . '/anoblet/library/Application/Base.php',
        'Application\\Controller' => __DIR__ . '/..' . '/anoblet/library/Application/Controller.php',
        'Application\\CreateTable' => __DIR__ . '/../..' . '/CreateTable.php',
        'Application\\Model' => __DIR__ . '/..' . '/anoblet/library/Application/Model.php',
        'Application\\Model\\Query' => __DIR__ . '/../..' . '/Model/Query.php',
        'Application\\Model\\User' => __DIR__ . '/../..' . '/Model/User.php',
        'Application\\Module' => __DIR__ . '/..' . '/anoblet/library/Application/Module.php',
        'Application\\Module\\CMS' => __DIR__ . '/..' . '/anoblet/library/Application/Module/CMS.php',
        'Application\\Module\\CMS\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/CMS/Controller/Index.php',
        'Application\\Module\\Controller' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Controller.php',
        'Application\\Module\\Database' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Database.php',
        'Application\\Module\\Database\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Database/Controller/Index.php',
        'Application\\Module\\Database\\Model\\Connection' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Database/Model/Connection.php',
        'Application\\Module\\Database\\Model\\Database' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Database/Model/Database.php',
        'Application\\Module\\Database\\Model\\Query' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Database/Model/Query.php',
        'Application\\Module\\Database\\Persistent' => __DIR__ . '/../..' . '/Application/Module/Database/Persistent.php',
        'Application\\Module\\HTML' => __DIR__ . '/..' . '/anoblet/library/Application/Module/HTML.php',
        'Application\\Module\\HTML\\Model\\Element' => __DIR__ . '/..' . '/anoblet/library/Application/Module/HTML/Model/Element.php',
        'Application\\Module\\Layout' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Layout.php',
        'Application\\Module\\Layout\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Layout/Controller/Index.php',
        'Application\\Module\\Layout\\Model\\Layout' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Layout/Model/Layout.php',
        'Application\\Module\\Request' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Request.php',
        'Application\\Module\\Search' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Search.php',
        'Application\\Module\\Search\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Search/Controller/Index.php',
        'Application\\Module\\Session' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Session.php',
        'Application\\Module\\Settings' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Settings.php',
        'Application\\Module\\Settings\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Settings/Controller/Index.php',
        'Application\\Module\\Template' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Template.php',
        'Application\\Module\\User' => __DIR__ . '/..' . '/anoblet/library/Application/Module/User.php',
        'Application\\Module\\User\\Controller\\Index' => __DIR__ . '/..' . '/anoblet/library/Application/Module/User/Controller/Index.php',
        'Application\\Module\\User\\Model\\User' => __DIR__ . '/..' . '/anoblet/library/Application/Module/User/Model/User.php',
        'Application\\Module\\XML' => __DIR__ . '/..' . '/anoblet/library/Application/Module/XML.php',
        'Application\\Modules\\Request\\Models\\Request' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Request/Model/Request.php',
        'Application\\Modules\\Response' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Response.php',
        'Application\\Modules\\Response\\Models\\Response' => __DIR__ . '/..' . '/anoblet/library/Application/Module/Response/Model/Response.php',
        'Application\\Persistent' => __DIR__ . '/../..' . '/Application/Persistent.php',
        'ComposerAutoloaderInit8e638066b7610b8af3537c9f15b8122d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit8e638066b7610b8af3537c9f15b8122d' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8e638066b7610b8af3537c9f15b8122d::$classMap;

        }, null, ClassLoader::class);
    }
}
