<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d8b0d9bd31c209648408ee436ceaea4
{
    public static $classMap = array (
        'ComposerAutoloaderInit3d8b0d9bd31c209648408ee436ceaea4' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit3d8b0d9bd31c209648408ee436ceaea4' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'simplehtmldom\\Debug' => __DIR__ . '/../..' . '/Debug.php',
        'simplehtmldom\\HtmlDocument' => __DIR__ . '/../..' . '/HtmlDocument.php',
        'simplehtmldom\\HtmlNode' => __DIR__ . '/../..' . '/HtmlNode.php',
        'simplehtmldom\\HtmlWeb' => __DIR__ . '/../..' . '/HtmlWeb.php',
        'simplehtmldom\\simple_html_dom' => __DIR__ . '/../..' . '/simple_html_dom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3d8b0d9bd31c209648408ee436ceaea4::$classMap;

        }, null, ClassLoader::class);
    }
}
