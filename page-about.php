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
                    <div class="title_black"><span>Наша цель</span></div>
                    <div class="b-about-target__body">
                        <div class="b-about-target__txt"><?php the_field('about-target-txt'); ?></div>
                        <?php if (get_field('about-target-title')): ?>
                            <div class="b-about-target__sing"><?php the_field('about-target-title'); ?></div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endif ?>
            <div class="content__body">
                    <div class="content__txt" itemprop="articleBody"><?php the_content(); ?></div>
            </div>
        </div>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
