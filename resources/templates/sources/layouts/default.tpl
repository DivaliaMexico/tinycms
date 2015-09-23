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
        <h2>Search</h2>
        <form>
            <input name="q" placeholder="Go to a Website">
            <input type="submit" value="Search">
        </form>
    </aside>

    <aside>
        <h2>Be a news reporter</h2>
        <p>If you see news happening - Send us a Text.</p>
    </aside>

    <footer>
        <p>Hecho con
            <span>❤</span> por <a href="https://www.divalia.mx/" target="_blank">Divalia S.A de C.V</a> en México.</p>
    </footer>

</body>

</html>
