<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc780e78212fb3a50d677026f5e0d74a4
{
    public static $files = array (
        'fbfe3b296c7b474b96ad8eecc62a6f8a' => __DIR__ . '/../..' . '/src/Config.php',
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitc780e78212fb3a50d677026f5e0d74a4::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitc780e78212fb3a50d677026f5e0d74a4::$classMap;

        }, null, ClassLoader::class);
    }
}
