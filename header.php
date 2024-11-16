<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
	<head>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<?php
// Функция для генерации заголовка страницы
function generate_dynamic_title() {
    // Получаем текущий URL
    $uri = $_SERVER['REQUEST_URI'];

    // Массив заголовков для страниц
    $titles = [
        'en' => [
            '' => 'Welcome to Our Website',
            '404.html' => 'Page Not Found',
            'contacts.html' => 'Contact Us',
            'faq.html' => 'Frequently Asked Questions',
            'services/crowd.html' => 'Crowd Links Service',
            'services/linkbuilding.html' => 'Comprehensive Linkbuilding',
            'services/outreach.html' => 'Outreach Links Service',
            'services/reviews.html' => 'Reviews Publication Service',
            'services/signals.html' => 'Social Signals Service',
            'services/submits.html' => 'Submits Service',
        ],
        'ua' => [
            '' => 'Ласкаво просимо на наш сайт',
            '404.html' => 'Сторінку не знайдено',
            'contacts.html' => 'Зв’язатися з нами',
            'faq.html' => 'Часті запитання',
            'services/crowd.html' => 'Послуга Crowd Links',
            'services/linkbuilding.html' => 'Комплексний лінкбілдинг',
            'services/outreach.html' => 'Послуга Outreach Links',
            'services/reviews.html' => 'Послуга публікації відгуків',
            'services/signals.html' => 'Послуга соціальних сигналів',
            'services/submits.html' => 'Послуга сабмітів',
        ],
        'ru' => [
            '' => 'Добро пожаловать на наш сайт',
            '404.html' => 'Страница не найдена',
            'contacts.html' => 'Свяжитесь с нами',
            'faq.html' => 'Часто задаваемые вопросы',
            'services/crowd.html' => 'Услуга Crowd Links',
            'services/linkbuilding.html' => 'Комплексный линкбилдинг',
            'services/outreach.html' => 'Услуга Outreach Links',
            'services/reviews.html' => 'Услуга публикации отзывов',
            'services/signals.html' => 'Услуга социальных сигналов',
            'services/submits.html' => 'Услуга сабмитов',
        ],
    ];

    // Извлекаем язык и путь страницы из URL
    $segments = explode('/', trim($uri, '/'));
    $language = $segments[0] ?? 'ua'; // Язык по умолчанию — 'ua'
    $page = $segments[1] ?? 'index.php'; // Страница по умолчанию — 'index.php'

    // Определяем заголовок
    if (isset($titles[$language][$page])) {
        return $titles[$language][$page];
    } else {
        return 'Default Title'; // Заголовок по умолчанию
    }
}

// Выводим заголовок
?>
<title><?php echo generate_dynamic_title(); ?></title>

	<?php wp_head();?>

	</head>
	<body>
		<?php
$translations = [
    'ru' => [
        'services' => 'Услуги',
        'faq' => 'F.A.Q',
        'contacts' => 'Контакты',
        'contact_us' => 'Связаться',
        'services_list' => [
            'crowd' => 'Крауд ссылки',
            'outreach' => 'Аутрич ссылки',
            'submits' => 'Сабмиты',
            'signals' => 'Соц. сигналы',
            'reviews' => 'Публикация отзывов',
            'linkbuilding' => 'Линкбилдинг под ключ',
        ],
    ],
    'en' => [
        'services' => 'Services',
        'faq' => 'F.A.Q',
        'contacts' => 'Contacts',
        'contact_us' => 'Contact us',
        'services_list' => [
            'crowd' => 'Crowd links',
            'outreach' => 'Outreach links',
            'submits' => 'Submits',
            'signals' => 'Social signals',
            'reviews' => 'Review publications',
            'linkbuilding' => 'Turnkey linkbuilding',
        ],
    ],
    'ua' => [
        'services' => 'Послуги',
        'faq' => 'F.A.Q',
        'contacts' => 'Контакти',
        'contact_us' => 'Зв\'язатися',
        'services_list' => [
            'crowd' => 'Крауд посилання',
            'outreach' => 'Аутріч посилання',
            'submits' => 'Сабміти',
            'signals' => 'Соц. сигнали',
            'reviews' => 'Публікація відгуків',
            'linkbuilding' => 'Лінкбілдінг під ключ',
        ],
    ],
];
?>

<?php
$uri_segments = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$current_lang = in_array($uri_segments[0], ['ru', 'en', 'ua']) ? $uri_segments[0] : 'ua'; // 'ua' по умолчанию
?>
<header id="header">
  <div class="container">
  	<div class="header__left">
			<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>">
				<?php $logo_img = '';
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if( $custom_logo_id ){
						$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
							'class'    => 'logo',
							'itemprop' => 'logo',
						) );
					}
					echo $logo_img; 
				?>
			</a>
      	<nav id="nav">
        	<ul class="main-nav">
          	<li class="dropdown">
            	<?php echo $translations[$current_lang]['services']; ?>
              	<img src="<?php bloginfo('template_url'); ?>/assets/icons/arrow-down.svg" alt="show more" />
                	<div class="dropdown-menu services-menu">
                    <ul>
											<?php foreach ($translations[$current_lang]['services_list'] as $key => $service): ?>
													<li>
														<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/services/<?php echo $key; ?>.html"><?php echo $service; ?>
														</a>
												</li>
											<?php endforeach; ?>
										</ul>
								</div>
						</li>
						<li><a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/faq.html"><?php echo $translations[$current_lang]['faq']; ?></a></li>
						<li><a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/contacts.html"><?php echo $translations[$current_lang]['contacts']; ?></a></li>
				</ul>
				</nav>
      </div>
			<div class="header__right">
				<button data-open-modal class="btn-primary header__right-cta">
					<?php echo $translations[$current_lang]['contact_us']; ?>
				</button>
				<div class="dropdown lang-select">
					<span class="selected-lang"><?php echo strtoupper($current_lang); ?></span>
					<img src="<?php bloginfo('template_url'); ?>/assets/icons/arrow-down.svg" alt="show more" />
					<div class="dropdown-menu lang-menu">
						<ul>
							<?php foreach (['ru', 'en', 'ua'] as $lang): ?>
								<?php if ($lang !== $current_lang): ?>
										<li class="lang"><?php echo strtoupper($lang); ?></li>
								<?php endif; ?>
							<?php endforeach; ?>
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
					<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>">
				<?php $logo_img = '';
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if( $custom_logo_id ){
						$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
							'class'    => 'logo',
							'itemprop' => 'logo',
						) );
					}
					echo $logo_img; 
				?>
			</a>
					<nav class="mobile-nav">
						<ul class="primary-menu-list">
							<li class="mobile-services-dropdown">
								<span>
									<?php echo $translations[$current_lang]['services']; ?>
									<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
								</span>
								<div class="mobile-services-menu">
    							<ul class="secondary-menu-list">
										<?php foreach ($translations[$current_lang]['services_list'] as $key => $service): ?>
											<li>
												<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/services/<?php echo $key; ?>.html"><?php echo $service; ?>
														</a>
											</li>
										<?php endforeach; ?>
    							</ul>
								</div>
								<li>
									<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/faq.html"><?php echo $translations[$current_lang]['faq']; ?></a>
								</li>
								<li>
									<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/contacts.html"><?php echo $translations[$current_lang]['contacts']; ?></a>
								</li>
							</li>
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
    </div>
</header>
