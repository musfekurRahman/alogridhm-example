<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc7d730b5f6b9bc6951853ed93db6749
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Algorithm\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Algorithm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc7d730b5f6b9bc6951853ed93db6749::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc7d730b5f6b9bc6951853ed93db6749::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc7d730b5f6b9bc6951853ed93db6749::$classMap;

        }, null, ClassLoader::class);
    }
}