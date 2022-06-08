<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64b20ccf8ee0ce7750a50ac3b1083222
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64b20ccf8ee0ce7750a50ac3b1083222::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64b20ccf8ee0ce7750a50ac3b1083222::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64b20ccf8ee0ce7750a50ac3b1083222::$classMap;

        }, null, ClassLoader::class);
    }
}