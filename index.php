<?php
$title = 'Главная';

include __DIR__. '/header.php'; ?>

<body>

<main class="home">
    <div class="home__wrapper">
        <div class="home__wrapper--backgraund">

             <div class="home__logo">

             </div>

            <div class="home__welcome-wrapper">
                <h1 class="home__welcome-item">&laquo;SkyVorobey&raquo;</h1>
                <p class="home__welcome-item home__welcome-item--line">Веб Разработка</p>
                <p class="home__welcome-item home__welcome-item--linetwo">От &laquo;&alpha;&raquo; до &laquo;&omega;&raquo;</p>
            </div>

            <ul class="home__nav">
                <li>
                    <a href="/portfolio.php" class="home__item">Портфолио</a>
                </li>
                <li>
                    <a href="/blog.php" class="home__item">блог</a>
                </li>
                <li>
                    <a href="/contacts.php"  class="home__item">контакты</a>
                </li>
                <li>
                    <a href="/about.php"  class="home__item">о авторе</a>
                </li>
            </ul>

        </div>
    </div>

</main>

<?php include __DIR__. '/footer.php'; ?>
