<div id="search">
    <form method="post" action="?page=search">
        <input type="search" name="search_str">
        <input type="submit" value="Search">
    </form>
</div>




<section id="news">

    {foreach from=$result item=newsitem}

        <article>
            <br>
            <h1>{$newsitem.title}</h1>
            <br>
            <img src="{$newsitem.image}" id="img">
            <content>{$newsitem.content}</content>
            <br>
        </article>

    {/foreach}
</section>

<div id="endSearch">
    <br>
    <hr>
    <br>
    <h3>That is all for this search term.</h3>
    <br>
</div>

{include file="pagination.tpl"}