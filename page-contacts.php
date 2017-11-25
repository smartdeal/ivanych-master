<?php 
/*
Template Name: Контакты
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <div class="content content_about" itemscope itemtype="http://schema.org/Article">
            <div class="content__title">
                <h1 itemprop="headline"><?php the_custom_title(); ?></h1>
            </div>    
            <?php 
                $page_contacts_tel = get_field('page-contacts-tel'); 
                $page_contacts_adr = get_field('page-contacts-adr'); 
                $page_contacts_email = get_field('page-contacts-email'); 
                $page_contacts_time = get_field('page-contacts-time'); 
            ?>
            <?php if ($page_contacts_tel || $page_contacts_adr || $page_contacts_email || $page_contacts_time): ?>
                <div class="b-contacts content-block">
                    <?php if ($page_contacts_tel): ?>
                        <div class="b-contacts__item">
                            <div class="b-contacts__icon b-contacts__icon_tel"></div>
                            <div class="b-contacts__text"><a href="tel:<?php echo preg_replace("/[^0-9+]/","",$page_contacts_tel); ?>"><?php echo $page_contacts_tel; ?></a><span>Многоканальный</span></div>
                        </div>
                    <?php endif ?>
                    <?php if ($page_contacts_adr): ?>
                        <div class="b-contacts__item">
                            <div class="b-contacts__icon b-contacts__icon_adr"></div>
                            <div class="b-contacts__text"><?php echo $page_contacts_adr; ?></div>
                        </div>
                    <?php endif ?>
                    <?php if ($page_contacts_email): ?>
                        <div class="b-contacts__item">
                            <div class="b-contacts__icon b-contacts__icon_email"></div>
                            <div class="b-contacts__text"><a href="mailto:<?php echo $page_contacts_email; ?>"><?php echo $page_contacts_email; ?></a><span>Почта для заказов</span></div>
                        </div>
                    <?php endif ?>
                    <?php if ($page_contacts_time): ?>
                        <div class="b-contacts__item">
                            <div class="b-contacts__icon b-contacts__icon_time"></div>
                            <div class="b-contacts__text"><?php echo $page_contacts_time; ?></div>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <div class="content__body">
                <div class="content__txt" itemprop="articleBody"><?php the_content(); ?></div>
            </div>
            <?php $clients_form = get_field('contact-form'); ?>
            <?php if ($clients_form) the_form_feedback($clients_form); ?>
        </div>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>
