<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5301e8c558197d9b50ef21536327b91
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nilambar\\AdminNotice\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nilambar\\AdminNotice\\' => 
        array (
            0 => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nilambar\\AdminNotice\\Notice' => __DIR__ . '/..' . '/ernilambar/wp-admin-notice/src/Notice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5301e8c558197d9b50ef21536327b91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5301e8c558197d9b50ef21536327b91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5301e8c558197d9b50ef21536327b91::$classMap;

        }, null, ClassLoader::class);
    }
}