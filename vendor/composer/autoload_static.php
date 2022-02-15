<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d78ac33d5461b56aa769f52c0b3e586
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\0215\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\0215\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d78ac33d5461b56aa769f52c0b3e586::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d78ac33d5461b56aa769f52c0b3e586::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6d78ac33d5461b56aa769f52c0b3e586::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit6d78ac33d5461b56aa769f52c0b3e586::$classMap;

        }, null, ClassLoader::class);
    }
}
