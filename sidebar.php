<?php
// The Sidebar
?>

<div class="main-layout__sidebar">
	<div class="sidebar">
		<div class="b-widget b-widget_services">
			<div class="b-widget__title">Услуги</div>
			<div class="b-widget__body"></div>
		</div>
		<div class="b-widget b-widget_products">
			<div class="b-widget__title">Товары</div>
			<div class="b-widget__body"></div>
		</div>
		<div class="b-widget b-widget_news">
		    <div class="b-widget__title">Новости</div>
		    <div class="b-widget__body"><?php the_last_news(3); ?></div>
		</div>
	</div>
</div>