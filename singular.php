<?php
$mostViewedPosts = get_top_viewed_posts();
get_header();
?>
<div class="pt-32 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="md:col-span-2">
        <?php
        if (have_posts()): ?>
            <section class="single-article max-w-screen-lg mx-auto">
                <?php while (have_posts()):
                    the_post();
                ?>
                    <?php the_post_thumbnail() ?>
                    <div class="flex pb-5">
                        <div class="date w-40 text-left pt-6 fs-12 fw-700">
                            <?= get_the_date() ?>
                        </div>

                    </div>
                    <div class="article-content inst-context text-justify">
                        <?php the_content() ?>

                    </div>

                <?php endwhile ?>
            </section>
        <?php endif; ?>

    </div>
    <div>
        <?php $price = get_post_meta(get_the_ID(), 'price', true);
        $finalPrice = get_post_meta(get_the_ID(), 'final_price', true);
        $cat = get_the_category();
        ?>
        <a href="<?= get_the_permalink() ?>" class="post-box relative">
            <span class="cat"><?= $cat[0]->name ?></span>
                <?php if (!empty($price)): ?>
                <span class="mx-auto price block w-fit">
                    <?= toFarsiNumerals(number_format($price)) ?>
                </span>
            <?php endif; ?>
            <?php if (!empty($finalPrice)): ?>
                <span class="mx-auto final-price block w-fit text-orange">
                    <?= toFarsiNumerals(number_format($finalPrice)) ?>
                </span>
            <?php endif; ?>

        </a>
        <div class="grid grid-cols-1 gap-5">
            <?php while ($mostViewedPosts->have_posts()) : $mostViewedPosts->the_post();
                include('inc/_post.php');

            endwhile; ?>
        </div>

    </div>
</div>
<?php get_footer() ?>