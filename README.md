# Divalia Tiny CMS

Este pequeño CMS utiliza Smarty y PHP clasico, con algun patron MVC por asi decirlo.
Genera sitios dinamicos de forma rapida utilizando comparaciones flexibles. En un mundo dominado por composer y grandes monstruos nos olvidamos de un principio simple, KISS.

## Estructura
```
├── index.php
├── library
│   ├── divalia
│   │   ├── Init.php
│   │   ├── RoutingEngine.php
│   │   └── TemplateEngine.php
│   └── smarty
│       ├── debug.tpl
│       ├── plugins
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
│           ├── errors
│           │   └── 404.tpl
│           ├── index.tpl
│           └── layouts
│               └── default.tpl
└── robots.txt
```
