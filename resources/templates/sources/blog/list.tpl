{extends file="layouts/default.tpl"}
{block name=header}
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
{/block}
{block name=content}
<main>
    <section>
        <h2>Ultimas Entradas de Blog</h2>
        {foreach $entries as $entry}
        <article>
            <header>
                <h3><a href="/blog/{$entry|replace:".md":""|replace:" ":"-"|escape}">{$entry|replace:".md":""}</a></h3>
            </header>
        </article>
        {/foreach}
</main>
{/block}
