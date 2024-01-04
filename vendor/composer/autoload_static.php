<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f633d69bf3c7bc6a1da1e5ec45cd733
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gabbymrh\\WebmanTpvalidate\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gabbymrh\\WebmanTpvalidate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f633d69bf3c7bc6a1da1e5ec45cd733::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f633d69bf3c7bc6a1da1e5ec45cd733::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f633d69bf3c7bc6a1da1e5ec45cd733::$classMap;

        }, null, ClassLoader::class);
    }
}