<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa3e191494625674a5518bc2b42b8e08
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa3e191494625674a5518bc2b42b8e08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa3e191494625674a5518bc2b42b8e08::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
