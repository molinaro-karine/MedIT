<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit46c680d8157da7356575efe71a0cde3f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit46c680d8157da7356575efe71a0cde3f', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit46c680d8157da7356575efe71a0cde3f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit46c680d8157da7356575efe71a0cde3f::getInitializer($loader));

        if (method_exists($loader,"setClassMapAuthoritative")){
            $loader->setClassMapAuthoritative(true);
        }
        $loader->register(false);

        return $loader;
    }
}