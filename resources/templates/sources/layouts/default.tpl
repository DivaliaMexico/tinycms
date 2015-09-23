<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>{$title|default:'Default Page Title'}</title>
    {block name=header}{/block}
  </head>
  <body>
    <header class="banner">
      <h1>News</h1>
      <p>Local and National News</p>
    </header>

    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="archive.html">Archives</a></li>
        <li><a href="about.html">About</a></li>
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
      <p>Footer Information</p>
    </footer>

  </body>
</html>
