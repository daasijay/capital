<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ( defined('WPSEO_VERSION') ) {wp_title('');} else {bloginfo('name');  wp_title(' - ', true);} ?></title>
    <?php wp_head();?>
</head>
<body>

<div id="home-main-header">
    <!-- Header top section -->
    <section id="header-section">
        <div class="container">
            <div class="content">
                <div class="col-1">
                    <div class="logo">
                        <a href="<?php echo site_url();?>"><img src="<?php bloginfo('template_url');?>/assets/images/logo.png" alt="Capital placement"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="site-search">
                        <form action="#">
                            <input type="text" placeholder="Internship location">
                            <input type="text" placeholder="Duration">
                            <input type="text" placeholder="Industry">
                            <button class="search-icon"><img src="<?php bloginfo('template_url');?>/assets/images/search-icon.png" alt="search"></button>
                        </form>
                    </div>
                </div>
                <div class="col-3">
                    <div class="free-consult-text">
                        <a href="#">Book free consultation</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="extra-nav">
                        <nav role="navigation">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu-extra">
                            <a href="#"><li>Programs</li></a>
                            <a href="#"><li>Industries</li></a>
                            <a href="#"><li>Destinations</li></a>
                            <a href="#"><li>Blog</li></a>
                            <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>

        </div>
        </div>
    </section>

    <!-- Header nav top section -->
    <section id="nav-section">
        <div class="container">
            <?php $defaults = array(
                'menu'                 => '',
                'container'            => 'div',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => '',
                'menu_class'           => 'menu',
                'menu_id'              => '',
                'echo'                 => true,
                'fallback_cb'          => 'wp_page_menu',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'         => 'preserve',
                'depth'                => 0,
                'walker'               => '',
                'theme_location'       => 'main-menu',
            );
            wp_nav_menu($defaults);
        ?>
        </div>
    </section>


    <!-- Banner section -->
    <section id="banner">
        <div class="container">
            <div class="content">
                <div class="banner-left-col">
                    <h1>Envision an<br/> exemplary life<br/> as a grduate<br/> intern</h1>
                    <a href="#">Explore opportunities</a>
                </div>
                <div class="banner-right-col">
                    <div class="banner-right-content">
                        <div class="video-item">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>