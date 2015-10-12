<header>
    <br><br><br><br>
    <h6>This is <strong>not</strong> an official website</h6>
</header>

<nav>
    <h3>Menu</h3>
    <ul>
        <li {if $current_pag eq about} class="selected{/if} ><a href="?page=about">About</a></li>
        <br>
        <li {if $current_pag eq discography} class="selected {/if}><a href="?page=discography">Discography</a></li>
        <br>
        <li {if $current_pag eq bandmembers} class="selected {/if}><a href="?page=bandmembers">Band Members</a></li>
        <br>
        <li {if $current_pag eq tourdates} class="selected {/if}><a href="?page=tourdates">Tour Dates</a></li>
        <br>
        <li {if $current_pag eq tourvlogs} class="selected {/if}><a href="?page=tourvlogs">Tour Vlogs</a></li>
        <br>
        <li {if $current_pag eq news} class="selected {/if} {if $current_pag eq search} class="selected {/if}>
            <a href="?page=news">News</a></li>
        <br>
        <li><a href="//withintemptation.probitymerch.com/">Merchandise</a></li>
        <br>
        <li {if $current_pag eq contact} class="selected {/if}><a href="?page=contact">Contact</a></li>
    </ul>
</nav>