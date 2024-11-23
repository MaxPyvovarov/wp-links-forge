<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
	<head>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<?php
// Массивы с SEO-тайтлами для разных языков
// $seo_titles = [
//     'ru' => [
//         '' => 'SEO Услуги | Качественный Линкбилдинг и Цифровой Маркетинг | Links Forge',  // Для главной страницы
//         '404.html' => '404 Страница не найдена | Links Forge',
//         'contacts.html' => 'Свяжитесь с нами для SEO услуг | Links Forge',
//         'faq.html' => 'Часто задаваемые вопросы | SEO и Цифровой Маркетинг | Links Forge',
//         'services/crowd.html' => 'Услуга Crowd Links | Купить Качественные Crowd Links | Links Forge',
//         'services/linkbuilding.html' => 'Комплексный Линкбилдинг | Качественные SEO Ссылки | Links Forge',
//         'services/outreach.html' => 'Услуга Outreach Link Building | Получить Качественные Обратные Ссылки | Links Forge',
//         'services/reviews.html' => 'Услуга Публикации Отзывов | Повышение Онлайн Репутации | Links Forge',
//         'services/signals.html' => 'Услуга Социальных Сигналов | Улучшение SEO через Социальные Сети | Links Forge',
//         'services/submits.html' => 'Услуга Сабмитов | Эффективная Подача Ссылок для SEO | Links Forge',
//     ],
//     'en' => [
//         '' => 'SEO Services | High-Quality Link Building & Digital Marketing | Links Forge',  // Для главной страницы
//         '404.html' => '404 Page Not Found | Links Forge',
//         'contacts.html' => 'Contact Us for SEO Services | Links Forge',
//         'faq.html' => 'Frequently Asked Questions | SEO & Digital Marketing | Links Forge',
//         'services/crowd.html' => 'Crowd Links Service | Buy Quality Crowd Links | Links Forge',
//         'services/linkbuilding.html' => 'Comprehensive Link Building Services | High-Quality SEO Links | Links Forge',
//         'services/outreach.html' => 'Outreach Link Building Service | Gain Quality Backlinks | Links Forge',
//         'services/reviews.html' => 'Review Publication Service | Boost Your Online Reputation | Links Forge',
//         'services/signals.html' => 'Social Signals Service | Improve SEO with Social Media Engagement | Links Forge',
//         'services/submits.html' => 'Submit Links Service | Effective Link Submission for SEO | Links Forge',
//     ],
//     'ua' => [
//         '' => 'SEO Послуги | Якісний Лінкбілдінг та Цифровий Маркетинг | Links Forge',  // Для главной страницы
//         '404.html' => '404 Сторінка не знайдена | Links Forge',
//         'contacts.html' => 'Зв’язатися з нами для SEO послуг | Links Forge',
//         'faq.html' => 'Часті Запитання | SEO та Цифровий Маркетинг | Links Forge',
//         'services/crowd.html' => 'Послуга Crowd Links | Купити Якісні Crowd Links | Links Forge',
//         'services/linkbuilding.html' => 'Комплексний Лінкбілдінг | Якісні SEO Посилання | Links Forge',
//         'services/outreach.html' => 'Послуга Outreach Link Building | Отримати Якісні Зворотні Посилання | Links Forge',
//         'services/reviews.html' => 'Послуга Публікації Відгуків | Підвищити Вашу Онлайн Репутацію | Links Forge',
//         'services/signals.html' => 'Послуга Соціальних Сигналів | Покращення SEO через Соціальні Медіа | Links Forge',
//         'services/submits.html' => 'Послуга Сабмітів | Ефективна Подання Посилань для SEO | Links Forge',
//     ],
// ];

// function get_current_language() {
//     $path = trim($_SERVER['REQUEST_URI'], '/');
//     if (preg_match('/^en(\/|$)/', $path)) {
//         return 'en';
//     } elseif (preg_match('/^ru(\/|$)/', $path)) {
//         return 'ru';
//     }
//     return 'ua'; // По умолчанию украинский
// }


// // Функция для генерации тайтла
// function get_dynamic_title($current_page, $seo_titles) {
//     $language = get_current_language();
		
//     // Главная страница
//     if ($current_page == '' || $current_page == 'index.php') {
// 			$current_page = '';
//     }
		
//     // Проверяем, есть ли ключ в массиве
//     if (isset($seo_titles[$language][$current_page])) {
// 			return $seo_titles[$language][$current_page];
//     }
//     return 'SEO Услуги | Links Forge';
// }

// // Получаем текущий путь
// $current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Только путь
// $current_page = ltrim($current_page, '/'); // Удаляем начальный слеш

// $path_parts = explode('/', $current_page, 2); // Разбиваем строку на максимум 2 части
// if (in_array($path_parts[0], ['en', 'ru', 'ua'])) {
//     $current_page = $path_parts[1] ?? ''; // Если есть 2-я часть, используем её; иначе пустая строка
// }

// $title = get_dynamic_title($current_page, $seo_titles);

// echo "<title>" . htmlspecialchars($title) . "</title>";
?>
<title><?php the_title(); ?></title>

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
														<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang. '/');?>services/<?php echo $key; ?>"><?php echo $service; ?>
														</a>
												</li>
											<?php endforeach; ?>
										</ul>
								</div>
						</li>
						<li><a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang . '/');?>faq"><?php echo $translations[$current_lang]['faq']; ?></a></li>
						<li><a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang . '/');?>contacts"><?php echo $translations[$current_lang]['contacts']; ?></a></li>
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
												<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/services/<?php echo $key; ?>"><?php echo $service; ?>
														</a>
											</li>
										<?php endforeach; ?>
    							</ul>
								</div>
								<li>
									<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/faq"><?php echo $translations[$current_lang]['faq']; ?></a>
								</li>
								<li>
									<a href="<?php echo home_url('/') . (($current_lang === 'ua') ? '' : $current_lang);?>/contacts"><?php echo $translations[$current_lang]['contacts']; ?></a>
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
