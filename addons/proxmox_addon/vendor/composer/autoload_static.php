<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc945eea441196fa81725eabf46712e53
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Proxmox\\' => 8,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Proxmox\\' => 
        array (
            0 => __DIR__ . '/..' . '/saleh7/proxmox-ve_php_api/src',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc945eea441196fa81725eabf46712e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc945eea441196fa81725eabf46712e53::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
