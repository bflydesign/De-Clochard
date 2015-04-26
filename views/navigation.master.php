<nav>
    <ul>
        <li>
            <a href="/welkom" class="<?php print $url == 'welkom' ? 'active' : ''; ?>">
                welkom
            </a>
        </li>
        <li class="toleft">
            <a href="/over-ons" class="<?php print $url == 'over-ons' ? 'active' : ''; ?>">
                over ons
            </a>
        </li>
        <li>
            <a href="/galerij" class="<?php print $url == 'galerij' ? 'active' : ''; ?>">
                galerij
            </a>
        </li>
        <li class="toright">
            <a href="/nieuws" class="<?php print $url == 'nieuws' ? 'active' : ''; ?>">
                nieuws
            </a>
        </li>
        <li>
            <a href="/contact" class="<?php print $url == 'contact' ? 'active' : ''; ?>">
                contact
            </a>
        </li>
    </ul>
    <a href="#" id="pull">Menu</a>
</nav>