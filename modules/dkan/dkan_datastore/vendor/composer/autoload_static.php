<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit492717d59652f375428c4b93962453fc
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dkan\\Datastore\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dkan\\Datastore\\' => 
        array (
            0 => __DIR__ . '/..' . '/fmizzell/datastore/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit492717d59652f375428c4b93962453fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit492717d59652f375428c4b93962453fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}