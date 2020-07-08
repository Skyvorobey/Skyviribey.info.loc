<header>
    <nav class="nav nav__backgraund nav__backgraund<?php echo $titleclass?>">
        <div class="nav__logo">
            <h2 class="nav__logo-name">SkyVorobey</h2>
        </div>

        <!-- нужно ли?
        <div class="nav__title">
            <h3 class="nav__title-text"><?php echo $title ?></h3>
        </div>
        -->
        <div class="nav__item-wrapper">
            <ul class="nav__menu">
                <?php
                $nav_items = [
                'portfolio' => '<li class="nav__item nav__item--backgraund nav__projects nav__item' . (($active == 'portfolio') ? '--active' : '') . '">
                    <a href="/portfolio.php">Портфолио</a>
                </li>',
                'blog' => '<li class="nav__item nav__item--backgraund nav__blog nav__item' . (($active == 'blog') ? '--active' : '') . '">
                    <a href="/blog.php">Блог</a>
                </li>',
                '<li class="nav__item nav__bird-logo">
                    <a href="/index.php"><span class="visual-hidden">Домой</span> <img width="15px" height="15px" class="nav__bird-logo-link" src="/img/bird.svg"> </a>
                </li>',
                'contacts' => '<li class="nav__item nav__item--backgraund nav__contacts nav__item' . (($active == 'contacts') ? '--active' : '') . '">
                    <a href="/contacts.php">Контакты</a>
                </li>',
                'about' => '<li class="nav__item nav__item--backgraund nav__about nav__item' . (($active == 'about') ? '--active' : '') . '">
                    <a href="/about.php">Обо Мне</a>
                </li>',
                ];

                foreach ($nav_items as $item) {
                echo $item;
                }

                ?>
            </ul>
        </div>
    </nav>
</header>
