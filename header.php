<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= get_home_url() ?>/" target="_self">
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/assets/img/logo.png">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <header class="w-full px-4 pt-2">
        <div class="flex max-w-screen-xl mx-auto h-[70px]">
            <div class="pl-3">
                <?php the_custom_logo() ?>
            </div>
            <div id="menu-items" class="grow pt-5">
                <?= wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </div>
        </div>
    </header>

    <main class="flex-auto">