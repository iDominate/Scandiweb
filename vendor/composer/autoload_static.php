<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9543ddcb5c0dce1baea6d4fa18c4920d
{
    public static $files = array (
        '71ecd0286a4e74fd8732297fb587023c' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/MysqliDb.php',
        'd383f1ec7b1e54a09cb53eb6fcf751e0' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/dbObject.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9543ddcb5c0dce1baea6d4fa18c4920d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9543ddcb5c0dce1baea6d4fa18c4920d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9543ddcb5c0dce1baea6d4fa18c4920d::$classMap;

        }, null, ClassLoader::class);
    }
}
