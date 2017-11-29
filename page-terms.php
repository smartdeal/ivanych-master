<?php 
/*
Template Name: Порядок работы
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

            <?php $price = get_field('price'); ?>
            <?php if ($price && is_array($price)): ?>
                <div class="b-accord b-accord_price content-block">
                    <div class="b-accord__items">
                        <?php foreach ($price as $key => $value): ?>
                            <div class="b-accord__item">
                                <a class="b-accord__title js-accord-item" href="#"><?php echo $value['caption'] ?></a>
                                <div class="b-accord__desc"><?php echo $value['table'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif ?>            

            <?php $table_caption = get_field('table_caption'); ?>
            <?php $table_table = get_field('table_table'); ?>
            <?php if ($table_caption || $table_table): ?>
                <div class="b-term-block">
                    <?php if ($table_caption): ?>
                        <div class="b-term-block__title title-line_blue"><span><?php echo $table_caption; ?></span></div>
                    <?php endif ?>            
                    <?php if ($table_table): ?>
                        <div class="b-term-block__table"><?php echo $table_table; ?></div>
                    <?php endif ?>            
                </div>
            <?php endif ?>            

            <?php if ('' !== get_post()->post_content): ?>
                <div class="content__body">
                    <div class="content__txt" itemprop="articleBody"><?php the_content(); ?></div>
                </div>            
            <?php endif ?>            

            <?php $text_blue = get_field('text-blue'); ?>
            <?php if ($text_blue): ?>
                <div class="b-text-blue b-text-blue_delivery content-block"><?php echo $text_blue; ?></div>
            <?php endif ?>

        </div>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
