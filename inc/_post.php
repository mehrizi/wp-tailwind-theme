<?php
$price = get_post_meta(get_the_ID(), 'price', true);
$finalPrice = get_post_meta(get_the_ID(), 'final_price', true);
$cat = get_the_category();
?>
<a href="<?= get_the_permalink() ?>" class="post-box relative">
    <span class="cat"><?= $cat[0]->name ?></span>
    <?php the_post_thumbnail() ?>
    <span class="title">
        <?php the_title(); ?>
    </span>
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