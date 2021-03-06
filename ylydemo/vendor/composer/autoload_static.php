<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit460254d94104cea9ebbc9999ef6d2614
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit460254d94104cea9ebbc9999ef6d2614::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit460254d94104cea9ebbc9999ef6d2614::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit460254d94104cea9ebbc9999ef6d2614::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
