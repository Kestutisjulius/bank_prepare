<?php

require __DIR__.'./top.php';
?>
    <h1> me <span>sweet</span> home</h1>

    <div class="home">
        home
        <div class="home__bin">
            bib
            <div class="home__bin__content">
            comtent
            </div>
        </div>
    </div>


    <ul>
        <?php foreach ($list as $value) : ?>
        <li><?= $value ?></li>

        <?php endforeach ?>
    </ul>


<?php
require __DIR__.'./bottom.php';

