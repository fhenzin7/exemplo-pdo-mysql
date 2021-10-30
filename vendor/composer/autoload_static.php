<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37df8cf32e6d4621eeae71d71d79dc01
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37df8cf32e6d4621eeae71d71d79dc01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37df8cf32e6d4621eeae71d71d79dc01::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
