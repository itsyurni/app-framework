<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit676e5af0623aca5340a77da5525101ac
{
    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yurni\\framework\\' => 16,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yurni\\framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/yurni/mvc-mvc',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit676e5af0623aca5340a77da5525101ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit676e5af0623aca5340a77da5525101ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit676e5af0623aca5340a77da5525101ac::$classMap;

        }, null, ClassLoader::class);
    }
}
