<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2ddb9aeadb129517eab2c47e370e15e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2ddb9aeadb129517eab2c47e370e15e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2ddb9aeadb129517eab2c47e370e15e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}