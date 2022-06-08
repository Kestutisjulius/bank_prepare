<?php

require __DIR__.'./top.php';
?>
    <h1> me <span>sweet</span> home</h1>
    <ul>
        <?php foreach ($list as $value) : ?>
        <li><?= $value ?></li>

        <?php endforeach ?>
    </ul>


<?php
require __DIR__.'./bottom.php';

