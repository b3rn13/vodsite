<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab8d5ce519f44a6f1d92476929b92142
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab8d5ce519f44a6f1d92476929b92142::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab8d5ce519f44a6f1d92476929b92142::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
