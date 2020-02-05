<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c2ef59ab38730a7a2f82a6892a17729
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c2ef59ab38730a7a2f82a6892a17729::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c2ef59ab38730a7a2f82a6892a17729::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}