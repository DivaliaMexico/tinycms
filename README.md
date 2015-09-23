# Divalia Tiny CMS

Este pequeño CMS utiliza Smarty y PHP clasico, con algun patron MVC por asi decirlo.
Genera sitios dinamicos de forma rapida utilizando comparaciones flexibles. En un mundo dominado por composer y grandes monstruos nos olvidamos de un principio simple, KISS.

Demo: http://code.divalia.mx/

## Estructura
```.
├── index.php
├── library
│   ├── blog
│   │   ├── markdown.php
│   │   └── tinyengine.php
│   ├── divalia
│   │   ├── Init.php
│   │   ├── RoutingEngine.php
│   │   └── TemplateEngine.php
│   └── smarty
│       ├── Autoloader.php
│       ├── debug.tpl
│       ├── plugins
│       ├── SmartyBC.class.php
│       ├── Smarty.class.php
│       └── sysplugins
├── LICENSE
├── README.md
├── resources
│   ├── css
│   │   └── style.css
│   ├── images
│   ├── javascript
│   └── templates
│       ├── cache
│       ├── compiled
│       ├── config
│       └── sources
│           ├── blog
│           │   ├── list.tpl
│           │   └── read.tpl
│           ├── errors
│           │   └── 404.tpl
│           ├── index.tpl
│           └── layouts
│               └── default.tpl
├── robots.txt
└── storage
    ├── Donec consequat, nulla nec dictum condimentum.md
    └── Hola Mundo.md

```

[Uso de Divalia Tiny CMS](https://github.com/DivaliaMexico/tinycms/wiki)

Un proyecto de [Divalia S.A de C.V](https://www.divalia.mx)
