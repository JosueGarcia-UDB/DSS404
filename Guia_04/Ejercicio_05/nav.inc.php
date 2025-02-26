<header id="header">
    <hgroup>
        <img src="./img/logo.png" alt="logo">
        <h1 id="site-description">Responsive Design con CSS3 Media Queries</h1>
    </hgroup>
    <nav>
        <ul id="main-nav" class="clearfix">
            <?php
            $menuOptions = array("Home", "Quiénes somos", "Servicios", "Portafolio", "Blog", "Contacto");
            $lisItems = "";
            foreach ($menuOptions as $item) :
                $lisItems .= "\t<li>\n\n<a href=\"javascript:void(0);\">$item</a>\n</li>\n";
            endforeach;
            echo $lisItems;
            ?>
        </ul>
    </nav>
    <form id="searchform" action="javascript:void(0);">
        <input id="s" placeholder="Search" type="search">
    </form>
</header>
