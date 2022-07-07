<?php
use Bankas\App;

require __DIR__ . '/top.php';
?> 
<h1>Form</h1>
<fieldset>
    <legend>Enter</legend>
    <form action="" method="post">
        <input type="text" name="form-text" id="">
        <button type="submit">Click me</button>
        <input type="hidden" name="csrf" value="<?= App::csrf()?>">
    </form>
</fieldset>

<?php 
require __DIR__ . '/bottom.php';