{extends file="layouts/default.tpl"}

{block name=header}
<link href="/resources/css/style.css" rel="stylesheet" type="text/css" />
{/block}

{block name=content}
<main>
    <section>
        <h2>{$entry.name}</h2>
        <article>
            <header>
                <small>Etiquetas: {foreach from=$entry.tags item=tag}{$tag}{/foreach}</small>
            </header>
            <p>{$entry.content}</p>
        </article>
</main>
{/block}
