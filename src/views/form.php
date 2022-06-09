<?php
use Bank\App;
require __DIR__.'./top.php';
?>
    <h1> this <span>form</span> </h1>

    <fieldset>
        <legend>Enter</legend>
        <form method="post">
        <input type="text" name="alabama">
        <button type="submit">GO</button>
        <input type="hidden" name="csrf" value="<?=App::csrf()?>">
        </form>
    </fieldset>

<?php
require __DIR__.'./bottom.php';

