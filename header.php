<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
	<head>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Links Forge</title>

	<?php wp_head();?>

	</head>
	<body>
		<header id="header">
			<div class="container">
				<div class="header__left">
					<?php the_custom_logo();?>
					<nav id="nav">
						<ul class="main-nav">
							<li class="dropdown">
								Услуги
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
								<div class="dropdown-menu services-menu">
									<ul>
										<li>
											<a href="./services/crowd.html">Крауд ссылки</a>
										</li>
										<li>
											<a href="./services/outreach.html">Аутрич ссылки</a>
										</li>
										<li><a href="./services/submits.html">Сабмиты</a></li>
										<li>
											<a href="./services/signals.html">Соц. сигналы</a>
										</li>
										<li>
											<a href="./services/reviews.html">Публикация отзывов</a>
										</li>
										<li>
											<a href="./services/linkbuilding.html"
												>Линкбилдинг под ключ</a
											>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="./faq.html">F.A.Q</a></li>
							<li><a href="./contacts.html">Контакты</a></li>
						</ul>
					</nav>
				</div>
				<div class="header__right">
					<button data-open-modal class="btn-primary header__right-cta">
						Связаться
					</button>
					<div class="dropdown lang-select">
						<span class="selected-lang">RU</span>
						<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
						<div class="dropdown-menu lang-menu">
							<ul>
								<li class="lang">RU</li>
								<li class="lang">EN</li>
								<li class="lang">UA</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="hamburger-menu">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
			</div>
			<div class="mobile-menu">
				<div class="mobile-menu-top">
					<?php the_custom_logo();?>
					<nav class="mobile-nav">
						<ul class="primary-menu-list">
							<li class="mobile-services-dropdown">
								<span>
									Услуги
									<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
								</span>
								<div class="mobile-services-menu">
									<ul class="secondary-menu-list">
										<li>
											<a href="./services/crowd.html">Крауд ссылки</a>
										</li>
										<li>
											<a href="./services/outreach.html">Аутрич ссылки</a>
										</li>
										<li><a href="./services/submits.html">Сабмиты</a></li>
										<li>
											<a href="./services/signals.html">Соц. сигналы</a>
										</li>
										<li>
											<a href="./services/reviews.html">Публикация отзывов</a>
										</li>
										<li>
											<a href="./services/linkbuilding.html"
												>Линкбилдинг под ключ</a
											>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="./faq.html">F.A.Q</a></li>
							<li><a href="./contacts.html">Контакты</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-menu-bottom">
					<div class="lang-select-mobile">
						<div class="lang-mobile">UA</div>
						<div class="lang-mobile">RU</div>
						<div class="lang-mobile">EN</div>
					</div>
					<div class="mobile-menu-socials">
						<a href="<?php the_field('skype')?>" class="mobile-social-item">
							<img src="<?php bloginfo('template_url');?>/assets/icons/Skype.svg" alt="skype" />
						</a>
						<a href="<?php the_field('whatsapp')?>" class="mobile-social-item">
							<img src="<?php bloginfo('template_url');?>/assets/icons/WhatsApp.svg" alt="whatsapp" />
						</a>
						<a href="<?php the_field('telegram')?>" class="mobile-social-item">
							<img src="<?php bloginfo('template_url');?>/assets/icons/Telegram.svg" alt="telegram" />
						</a>
						<a href="<?php the_field('discord')?>" class="mobile-social-item">
							<img src="<?php bloginfo('template_url');?>/assets/icons/Discord.svg" alt="discord" />
						</a>
						<a href="<?php the_field('viber')?>" class="mobile-social-item">
							<img src="<?php bloginfo('template_url');?>/assets/icons/Viber.svg" alt="viber" />
						</a>
					</div>
				</div>
			</div>

			<div class="backdrop"></div>
		</header>