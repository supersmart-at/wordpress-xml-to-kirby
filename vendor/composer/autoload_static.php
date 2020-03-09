<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cc9d137075d45987019c435aa52b510
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5cc9d137075d45987019c435aa52b510::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5cc9d137075d45987019c435aa52b510::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}