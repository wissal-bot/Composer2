<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1859b2ee6f4667cd59eee13ba38e8815
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1859b2ee6f4667cd59eee13ba38e8815::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1859b2ee6f4667cd59eee13ba38e8815::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1859b2ee6f4667cd59eee13ba38e8815::$classMap;

        }, null, ClassLoader::class);
    }
}
