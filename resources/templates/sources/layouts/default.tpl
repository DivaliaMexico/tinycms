<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$title|default:'Tiny CMS'}</title>
    {block name=header}{/block}
</head>

<body>
    <header class="banner">
        <h1>Tiny CMS</h1>
        <p>Tiny micro small shitty CMS!</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
        </ul>
    </nav>

    {block name=content}{/block}

    <aside>
        <h2>Recursos</h2>
            <ul>
                <li><a href="https://github.com/DivaliaMexico/tinycms">Github</a></li>
                <li><a href="https://github.com/DivaliaMexico/tinycms/releases">Descargar</a></li>
                <li><a href="https://github.com/DivaliaMexico/tinycms/wiki">Documentación</a></li>
            </ul>
    </aside>

    <aside>
        <h2>Patrocinador</h2>
        <p>
            <a href="https://www.divalia.mx/" target="_blank">Divalia S.A de C.V</a>
        </p>
    </aside>

    <footer>
        <p>Hecho con
            <span>❤</span> por <a href="https://www.divalia.mx/" target="_blank">Divalia S.A de C.V</a> en México.</p>
    </footer>

</body>

</html>
