<?php use Bankas\App ?>
<?php if(App::auth()) : ?>
    <span><?= App::authName() ?></span>
    <form action="<?= App::url('doLogout')?>" method="post">
        <button type="submit">Logout</button>
    </form>
<?php else : ?>
    <a href="<?php App::url('login')?>">
<?php endif ?>