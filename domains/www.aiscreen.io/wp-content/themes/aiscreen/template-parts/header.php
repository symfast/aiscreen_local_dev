<header class="main_header">
    <div class="header__desktop">
        <div class="container_header">
            <div class="header__content">
                <div class="header__left">
                    <div class="header__logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="logo">
                        </a>
                    </div>
                    <?php wp_nav_menu([

                        'menu'            => 'main',
                        'container'       => 'div',
                        'container_class' => 'header__menu',
                        'depth'           => 2,
                        'walker'          => new Main_Sublevel_Walker,
                    ]); ?>
                </div>  
				<div class="toggle-languages">
				<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
					<div class="header__right_btns">
                    <a href="https://manager.aiscreen.io/login">
                        Login
                    </a>
                    <a href="/schedule" class="btn_blue">
                        Get Demo
                    </a>
                </div>

                <div class="header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header__mobile">
                    <div class="block_close"></div>
                    <div class="header__mobile__content">
                        <div class="header__right_btns">
                            <a href="/schedule" class="btn_blue">
                                Get Demo
                            </a>
                            <a href="https://manager.aiscreen.io/login">
                                Login
                            </a>
                        </div>
                        <?php wp_nav_menu([

                            'menu'            => 'main',
                            'container'       => 'div',
                            'container_class' => 'header__menu',
                            'depth'           => 2,
                            'walker'          => new Main_Sublevel_Mob_Walker,
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>