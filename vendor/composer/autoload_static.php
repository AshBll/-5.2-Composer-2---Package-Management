<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb87d43bb0cf1fb94938252f8a5204086
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb87d43bb0cf1fb94938252f8a5204086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb87d43bb0cf1fb94938252f8a5204086::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb87d43bb0cf1fb94938252f8a5204086::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb87d43bb0cf1fb94938252f8a5204086::$classMap;

        }, null, ClassLoader::class);
    }
}
