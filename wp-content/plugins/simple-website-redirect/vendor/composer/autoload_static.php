<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita73adf81539fc4b0f534188baa229e71
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/url',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'wpscholar\\Url' => __DIR__ . '/..' . '/wpscholar/url/Url.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita73adf81539fc4b0f534188baa229e71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita73adf81539fc4b0f534188baa229e71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita73adf81539fc4b0f534188baa229e71::$classMap;

        }, null, ClassLoader::class);
    }
}
