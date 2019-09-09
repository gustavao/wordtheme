<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>


<nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <?php

            $menu = array(
                'theme_location'  => 'menu-principal',
                'menu_class'      => 'right hide-on-med-and-down',
                'container'       => false,
                'depth'           => 1
            );
            $menuMobile = array(
                'theme_location'  => 'menu-principal',
                'menu_class'      => 'side-nav',
                'menu_id'         => 'mobile-demo',
                'container'       => false,
                'depth'           => 1

            );
            wp_nav_menu($menu);

            wp_nav_menu($menuMobile);

            ?>

            </ul>
        </div>
    </nav>


    <nav>
        <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
        </div>
  </nav>    