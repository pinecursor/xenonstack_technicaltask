<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5dd18b68ba7b71e99ddbedf7fdeb228
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite5dd18b68ba7b71e99ddbedf7fdeb228::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite5dd18b68ba7b71e99ddbedf7fdeb228::$classMap;

        }, null, ClassLoader::class);
    }
}