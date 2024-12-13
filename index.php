<?php

get_header(); ?>
<img src="<?= get_template_directory_uri() ?>/assets/img/Slider.jpg" alt="" />
<?php
$categories = get_categories(["hide_empty" => 0]);
?>
<div class="mx-auto max-w-screen-xl flex flex-wrap">
    <?php foreach ($categories as $category) {
        if (function_exists('z_taxonomy_image')) {
            echo '<div>';
            z_taxonomy_image($category->term_id);
            echo '</div>';
        }
    }
    ?>
</div>
<div class="max-w-screen-lg mx-auto">
    <h2 class="product-title text-center dual-color mb-10 mt-6">
        <span>آخرین</span>
        محصولات
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php while (have_posts()) : the_post();
            include('inc/_post.php');

        endwhile; ?>
    </div>



    <div class="py-5">
        <?php the_posts_pagination() ?>
    </div>

</div>



<?php get_footer() ?>