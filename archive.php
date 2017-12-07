<?php get_header(); ?>

<?php  
    // if (is_post_type_archive( array('uslugi') )) $is_post_with_meta = true;
        // else $is_post_with_meta = false;
?>
<div class="content__title">
    <?php 
        $term_id = get_queried_object()->term_id;
        $term_title = get_field('title','category_'.$term_id);
        if (!$term_title) { $term_title = get_the_archive_title(); }
    ?>
    <h1><?php echo $term_title; ?></h1>
</div>    
<div class="content__body">
    <?php if (have_posts()): ?>
        <div class="content__list">
            <div class="b-news">
                <?php while (have_posts()): the_post(); 
                if ( ('product' == get_post_type() || 'service' == get_post_type()) && $post->post_parent )
                    continue;
                    $post_title = get_the_title(); 
                    $post_link = get_the_permalink();
                ?>
                <div class="b-news__item<?php if (!has_post_thumbnail()) echo ' b-news__item_without-img'?>" itemscope itemtype="http://schema.org/Article">
                    <?php if (has_post_thumbnail()): ?>
                        <a class="b-news__link" href="<?php echo $post_link; ?>" title="Перейти на страницу <?php echo $post_title; ?>">
                            <div data-aload class="b-news__img" style="background-image:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(),'medium'); ?>);"></div>
                        </a>
                    <?php endif; ?>
                    <div class="b-news__body">
                        <a href="<?php echo $post_link; ?>" class="b-news__title" itemprop="headline" title="Перейти на страницу <?php echo $post_title; ?>"><?php echo $post_title; ?></a>
                        <?php if (get_the_excerpt()): ?>
                            <div class="b-news__txt" itemprop="articleBody"><?php the_excerpt(); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="b-news____btn-wrap">
                        <a href="<?php echo $post_link; ?>" class="b-news__btn-more" title="Перейти на страницу <?php echo $post_title; ?>">Подробнее</a>
                    </div>
                </div>
                <?php endwhile ?>
            </div>
        </div>
        <?php $pagi = paginate_links(array('prev_text' => '', 'next_text' => '')); ?>
        <?php if ($pagi): ?>
            <div class="pagi"><?php echo $pagi; ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
