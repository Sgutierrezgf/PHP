<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefbb6d2e29b6ce092cec44eb3fb28651
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefbb6d2e29b6ce092cec44eb3fb28651::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefbb6d2e29b6ce092cec44eb3fb28651::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}