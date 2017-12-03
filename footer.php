			</div>
		</div>
	</div>
</div>
<?php if (is_front_page()) { get_template_part( 'inc/inc-why-we' ); } ?>
</div> <!-- main-layout -->
<div class="footer">
	<?php the_footer_useful(); // Вывести статьи Полезной информации ?>
	<div class="footer-form">
		<div class="container">
			<div class="b-form b-form_footer">
				<form class="b-form__form">
					<div class="b-form__title">остались вопросы?</div>
					<div class="b-form__body">
						<input class="b-form__input" type="tel" placeholder="Ваш телефон" value="">
						<button class="b-form__btn btn_c2" type="submit">ЗАКАЗАТЬ ЗВОНОК</button>
					</div>
				</form>
				<div class="b-form__txt">Свяжитесь с нами или оставьте свой номер для звонка специалиста<a class="b-form__tel" hre="#">8 (499) 647-90-53</a></div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="" class="footer-logo_img">
				<div class="footer-logo__txt">© 2017 Все права защищены</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<?php the_field('option_code_bottom','option'); ?>
<script>
	var home_url="<?php echo home_url(); ?>";
	var theme_url="<?php echo get_template_directory_uri(); ?>";
</script>
</body>
</html>
