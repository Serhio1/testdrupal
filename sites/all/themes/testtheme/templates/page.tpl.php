<header class="black-header">
    <div class="user-menu">
        <?php if ($logged_in): ?>
            <?php print render($page['user_menu']); ?>
        <?php else: ?>
            <ul>
                <li class="menu"><a href="<?php base_path(); ?>user/login">Login</a></li>
            </ul>
        <?php endif; ?>
    </div>
</header>

<header class="div-logo">
    <div class="logo">
        <?php if ($logo): ?>
        <a id="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
        <?php endif; ?>
    </div>
    <div class="site-name"><?php print $site_name ?></div>
</header>

<main class="main-content"><?php print render($page['content']); ?></main>
