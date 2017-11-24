<?php 
/*
Template Name: О компании
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <div class="content content_about" itemscope itemtype="http://schema.org/Article">
            <div class="content__title">
                <h1 itemprop="headline"><?php the_custom_title(); ?></h1>
            </div>    
            <?php if (get_field('about-target-txt')): ?>
                <div class="b-about-target content-block">
                    <div class="title-line"><span>Наша цель</span></div>
                    <div class="b-about-target__body">
                        <div class="b-about-target__txt"><?php the_field('about-target-txt'); ?></div>
                        <?php if (get_field('about-target-title')): ?>
                            <div class="b-about-target__sing"><?php the_field('about-target-title'); ?></div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endif ?>
            <?php $worth = get_field('about-worth-items'); ?>
            <?php if ($worth): ?>
                <div class="b-about-worth content-block">
                    <div class="title-line"><span>Наши ценности и приоритеты</span></div>
                    <div class="b-about-worth__body">
                        <div class="b-bullet__items js-slick js-about-worth">
                            <?php foreach ($worth as $key => $value): ?>
                                <div class="b-bullet__item b-bullet__item_<?php echo $key+1 ?>">
                                    <div class="b-bullet__caption js-bullet-caption"><span><?php echo $value['caption'] ?></span></div>
                                    <div class="b-bullet__img-wrap">
                                        <div class="b-bullet__img"></div>
                                    </div>
                                    <div class="b-bullet__txt"><?php echo $value['desc'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>                    
                    </div>
                </div>
            <?php endif ?>
            <div class="content__body">
                <div class="content__txt content__txt_bg-grey" itemprop="articleBody"><?php the_content(); ?></div>
            </div>
            <?php the_managers(); ?>
            <?php the_our_production(); ?>
            <?php $cooperation = get_field('about-cooperation-txt'); ?>
            <?php if ($cooperation): ?>
                <div class="b-about-cooperation content-block">
                    <div class="title-line title-line_blue"><span>Сотрудничество</span></div>
                    <div class="b-about-cooperation__body"><?php echo $cooperation; ?></div>
                </div>
            <?php endif ?>
        </div>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
