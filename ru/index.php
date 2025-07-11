<?php
/*
	Template Name: RU front-page
*/
?>

<?php get_header();?>

		<main>
			<section id="hero">
				<div class="container relative">
					<div class="hero__left fade-in fade-in-left">
						 <h1><?php the_field('RU-home-hero-h1');?></h1>
						<p>
							<?php the_field('RU-home-hero-h2');?>
						</p>
						<button data-open-modal class="btn-primary hero__left-cta">
							Заказать ссылки
						</button>
					</div>
					<div class="hero__right fade-in fade-in-right">
						<img src="<?php the_field('RU-home-hero-img'); ?>" />
					</div>
					<img
						class="link-bg hero__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
					<img
						class="link-bg hero__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
					<img
						class="link-bg hero__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
					<img
						class="link-bg hero__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
				</div>
			</section>
			<section id="why-us">
				<div class="container">	
					<h2 class="blue fade-in"><?php the_field('RU-home-whyus-h1'); ?></h2>
					<div class="why-us__benefits">
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="50"
									viewBox="0 0 54 50"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M35.5488 37.9574C35.5488 38.415 35.3705 38.8539 35.053 39.1774C34.7355 39.501 34.305 39.6828 33.856 39.6828H10.1568C9.78439 39.6828 9.4289 40.0279 9.12419 40.2522L3.3856 44.8588V17.2533C3.3856 16.7957 3.56395 16.3569 3.88141 16.0333C4.19887 15.7097 4.62944 15.528 5.0784 15.528H11.6126V12.0773H5.0784C3.73153 12.0773 2.43981 12.6226 1.48743 13.5933C0.535044 14.564 0 15.8805 0 17.2533V48.3095C0.0025194 48.6299 0.0925403 48.9433 0.259974 49.2145C0.427408 49.4858 0.665638 49.7041 0.947968 49.8451C1.21997 49.9711 1.51986 50.0216 1.81718 49.9913C2.1145 49.961 2.39865 49.851 2.64077 49.6725L11.3587 43.1335H34.1099C34.7515 43.1528 35.3902 43.0377 35.9863 42.7952C36.5825 42.5528 37.1234 42.1881 37.5757 41.7239C38.028 41.2597 38.382 40.7058 38.6157 40.0965C38.8494 39.4872 38.9579 38.8355 38.9344 38.1817V36.2321H35.5488V37.9574Z"
										fill="#010948"
									/>
									<path
										d="M49.0911 0H20.3135C18.9666 0 17.6749 0.545331 16.7225 1.51603C15.7702 2.48672 15.2351 3.80327 15.2351 5.17604V25.8802C15.2351 27.2529 15.7702 28.5695 16.7225 29.5402C17.6749 30.5109 18.9666 31.0562 20.3135 31.0562H43.251L51.3426 37.4572C51.5831 37.6385 51.8665 37.7516 52.1638 37.7849C52.4612 37.8182 52.7619 37.7707 53.0354 37.647C53.3234 37.5072 53.5668 37.2872 53.7376 37.0125C53.9083 36.7377 53.9993 36.4194 54.0002 36.0942V5.17604C54.001 3.83264 53.4892 2.54158 52.5732 1.5757C51.6571 0.609816 50.4084 0.0447796 49.0911 0ZM50.7839 32.678L44.8591 27.9678C44.5636 27.7341 44.2005 27.6067 43.8265 27.6055H20.3135C19.8646 27.6055 19.434 27.4237 19.1165 27.1002C18.7991 26.7766 18.6207 26.3378 18.6207 25.8802V5.17604C18.6207 4.71845 18.7991 4.2796 19.1165 3.95603C19.434 3.63247 19.8646 3.45069 20.3135 3.45069H49.0911C49.5436 3.49255 49.9655 3.70159 50.2773 4.03844C50.5891 4.37529 50.7693 4.8167 50.7839 5.27956V32.678Z"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="54"
									viewBox="0 0 54 54"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M27 54C23.284 54 19.784 53.29 16.5 51.87C13.216 50.45 10.356 48.52 7.92001 46.08C5.48401 43.64 3.55402 40.78 2.13002 37.5C0.706017 34.22 -0.00398319 30.72 1.68067e-05 27C1.68067e-05 23.274 0.710017 19.771 2.13002 16.491C3.55002 13.211 5.48001 10.354 7.92001 7.92C10.36 5.486 13.22 3.557 16.5 2.133C19.78 0.709004 23.28 -0.00199579 27 4.20757e-06C30.726 4.20757e-06 34.229 0.710004 37.509 2.13C40.789 3.55 43.647 5.48 46.083 7.92C48.519 10.36 50.447 13.217 51.867 16.491C53.287 19.765 53.998 23.268 54 27C54 30.716 53.29 34.216 51.87 37.5C50.45 40.784 48.52 43.644 46.08 46.08C43.64 48.516 40.783 50.446 37.509 51.87C34.235 53.294 30.732 54.004 27 54ZM27 51.024C28.76 48.762 30.212 46.541 31.356 44.361C32.5 42.181 33.429 39.741 34.143 37.041H19.857C20.649 39.893 21.597 42.409 22.701 44.589C23.805 46.769 25.238 48.914 27 51.024ZM23.181 50.574C21.781 48.924 20.503 46.884 19.347 44.454C18.191 42.026 17.331 39.554 16.767 37.038H5.25902C6.97901 40.77 9.41602 43.83 12.57 46.218C15.724 48.606 19.26 50.058 23.178 50.574M30.816 50.574C34.732 50.058 38.268 48.606 41.424 46.218C44.58 43.83 47.017 40.77 48.735 37.038H37.233C36.473 39.592 35.516 42.084 34.362 44.514C33.206 46.942 32.024 48.962 30.816 50.574ZM4.03502 34.038H16.14C15.912 32.808 15.752 31.609 15.66 30.441C15.564 29.273 15.516 28.126 15.516 27C15.516 25.874 15.563 24.727 15.657 23.559C15.751 22.391 15.911 21.191 16.137 19.959H4.04102C3.71502 20.999 3.46002 22.132 3.27602 23.358C3.09202 24.584 3.00002 25.798 3.00002 27C3.00002 28.202 3.09102 29.416 3.27302 30.642C3.45502 31.868 3.71002 33 4.03802 34.038M19.143 34.038H34.857C35.085 32.808 35.245 31.628 35.337 30.498C35.429 29.368 35.478 28.202 35.484 27C35.49 25.798 35.443 24.632 35.343 23.502C35.243 22.372 35.083 21.192 34.863 19.962H19.14C18.914 21.192 18.754 22.372 18.66 23.502C18.566 24.632 18.519 25.798 18.519 27C18.519 28.202 18.566 29.368 18.66 30.498C18.754 31.628 18.917 32.808 19.143 34.038ZM37.86 34.038H49.962C50.288 32.998 50.543 31.866 50.727 30.642C50.911 29.418 51.002 28.204 51 27C50.998 25.796 50.907 24.582 50.727 23.358C50.547 22.134 50.292 21.002 49.962 19.962H37.857C38.085 21.192 38.245 22.391 38.337 23.559C38.433 24.727 38.481 25.874 38.481 27C38.481 28.126 38.434 29.273 38.34 30.441C38.246 31.609 38.086 32.809 37.86 34.041M37.236 16.962H48.738C46.98 13.154 44.572 10.094 41.514 7.782C38.454 5.47 34.889 4 30.819 3.372C32.219 5.212 33.478 7.318 34.596 9.69C35.714 12.062 36.594 14.486 37.236 16.962ZM19.857 16.962H34.143C33.351 14.146 32.374 11.6 31.212 9.324C30.05 7.048 28.646 4.932 27 2.976C25.354 4.93 23.95 7.046 22.788 9.324C21.628 11.6 20.651 14.146 19.857 16.962ZM5.26202 16.962H16.764C17.408 14.484 18.288 12.06 19.404 9.69C20.52 7.32 21.779 5.213 23.181 3.369C19.073 3.999 15.499 5.479 12.459 7.809C9.41901 10.139 7.01901 13.189 5.25902 16.959"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block2');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="54"
									viewBox="0 0 54 54"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M26.973 0C12.069 0 0 12.096 0 27C0 41.904 12.069 54 26.973 54C41.904 54 54 41.904 54 27C54 12.096 41.904 0 26.973 0ZM27 48.6C15.066 48.6 5.4 38.934 5.4 27C5.4 15.066 15.066 5.4 27 5.4C38.934 5.4 48.6 15.066 48.6 27C48.6 38.934 38.934 48.6 27 48.6ZM26.406 13.5H26.244C25.164 13.5 24.3 14.364 24.3 15.444V28.188C24.3 29.133 24.786 30.024 25.623 30.51L36.828 37.233C37.746 37.773 38.934 37.503 39.474 36.585C39.6096 36.3664 39.6998 36.1227 39.7392 35.8685C39.7786 35.6143 39.7665 35.3547 39.7035 35.1053C39.6405 34.8559 39.528 34.6217 39.3726 34.4167C39.2172 34.2117 39.0221 34.04 38.799 33.912L28.35 27.702V15.444C28.35 14.364 27.486 13.5 26.406 13.5Z"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block3');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="45"
									viewBox="0 0 54 45"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										fill-rule="evenodd"
										clip-rule="evenodd"
										d="M21.821 0H32.1745C36.8037 0 40.4684 3.06538e-07 43.3368 0.393429C46.2857 0.799715 48.6744 1.65343 50.5582 3.57686C53.1453 6.21771 53.7733 9.85114 53.9717 14.6777V14.7394C53.9918 15.1611 54.0094 15.5906 53.9918 15.9531C53.984 16.4736 53.8557 16.9847 53.6175 17.4446C53.4434 17.7522 53.2152 18.0243 52.9444 18.2469C52.7411 18.4143 52.5281 18.5689 52.3064 18.7097C51.897 18.9746 51.3393 19.2934 50.6888 19.6663L50.6386 19.692C50.1493 19.9701 49.7416 20.3771 49.4577 20.8708C49.1738 21.3646 49.0241 21.9271 49.0241 22.5C49.0241 23.0729 49.1738 23.6354 49.4577 24.1292C49.7416 24.6229 50.1493 25.0299 50.6386 25.308L50.6888 25.3337C51.3419 25.7066 51.8945 26.0254 52.3064 26.2903C52.5199 26.4291 52.7434 26.5834 52.9444 26.7531C53.1302 26.91 53.409 27.1749 53.6175 27.5554C53.9189 28.1057 53.9767 28.6611 53.9943 29.0469C54.0094 29.4069 53.9918 29.8389 53.9742 30.2606L53.9717 30.3223C53.7707 35.1463 53.1428 38.7823 50.5582 41.4231C48.6744 43.3466 46.2882 44.2003 43.3368 44.6066C40.4684 45 36.8037 45 32.1745 45H21.8235C17.1943 45 13.5296 45 10.6611 44.6066C7.7098 44.2003 5.32362 43.3466 3.43978 41.4231C0.852655 38.7823 0.22471 35.1489 0.02628 30.3223V30.2606C0.00274928 29.8565 -0.00479208 29.4516 0.00367415 29.0469C0.0212566 28.6611 0.0790274 28.1057 0.38044 27.5554C0.554526 27.2478 0.782759 26.9757 1.0536 26.7531C1.25685 26.5857 1.46991 26.4311 1.69159 26.2903C2.10101 26.0254 2.65862 25.7066 3.30917 25.3337L3.35941 25.308C3.84869 25.0299 4.25641 24.6229 4.54028 24.1292C4.82416 23.6354 4.97385 23.0729 4.97385 22.5C4.97385 21.9271 4.82416 21.3646 4.54028 20.8708C4.25641 20.3771 3.84869 19.9701 3.35941 19.692L3.30917 19.6663C2.65611 19.2934 2.10352 18.9746 1.69159 18.7097C1.46952 18.5695 1.25643 18.4149 1.0536 18.2469C0.782759 18.0243 0.554526 17.7522 0.38044 17.4446C0.141379 16.9849 0.012254 16.4738 0.00367415 15.9531C-0.00563409 15.5278 0.00274606 15.1023 0.0287919 14.6777C0.22471 9.85371 0.852655 6.21771 3.43978 3.57686C5.32362 1.65343 7.7098 0.799715 10.6611 0.393429C13.5271 3.06538e-07 17.1892 0 21.821 0ZM50.2317 29.5097V29.5611L50.209 30.1603C50.0131 34.9329 49.3776 37.1854 47.8982 38.6923C46.8332 39.7826 45.3714 40.4357 42.837 40.7829C40.2499 41.1377 36.8364 41.1429 32.0364 41.1429H21.9641C17.1641 41.1429 13.7506 41.1377 11.1635 40.7829C8.6266 40.4357 7.16726 39.7826 6.09975 38.6923C4.62283 37.1854 3.98735 34.9329 3.78892 30.1603C3.78045 29.9435 3.77375 29.7266 3.76883 29.5097C4.08029 29.3117 4.52989 29.0546 5.19551 28.674C6.26944 28.061 7.16399 27.1655 7.78673 26.0801C8.40946 24.9947 8.73779 23.7588 8.73779 22.5C8.73779 21.2412 8.40946 20.0053 7.78673 18.9199C7.16399 17.8345 6.26944 16.939 5.19551 16.326C4.71483 16.0567 4.23919 15.7781 3.76883 15.4903V15.4389L3.79143 14.8397C3.98735 10.0671 4.62283 7.81457 6.10227 6.30771C7.16726 5.21743 8.6266 4.56429 11.1635 4.21714C13.7506 3.86229 17.1641 3.85714 21.9641 3.85714H32.0364C36.8364 3.85714 40.2499 3.86229 42.837 4.21714C45.3739 4.56429 46.8332 5.21743 47.9007 6.30771C49.3751 7.81457 50.0131 10.0671 50.209 14.8397L50.2317 15.4389V15.4903C49.9202 15.6883 49.4706 15.9454 48.805 16.326C47.7304 16.9384 46.8351 17.8337 46.2119 18.9192C45.5887 20.0047 45.26 21.2409 45.26 22.5C45.26 23.7591 45.5887 24.9953 46.2119 26.0808C46.8351 27.1663 47.7304 28.0615 48.805 28.674C49.4681 29.0546 49.9202 29.3117 50.2317 29.5097ZM35.8643 13.4229C36.2171 13.7845 36.4152 14.2746 36.4152 14.7857C36.4152 15.2968 36.2171 15.787 35.8643 16.1486L20.7936 31.5771C20.4365 31.9178 19.9642 32.1033 19.4762 32.0945C18.9881 32.0856 18.5225 31.8832 18.1773 31.5299C17.8322 31.1765 17.6345 30.6998 17.6259 30.2002C17.6172 29.7006 17.7984 29.217 18.1312 28.8514L33.2018 13.4229C33.555 13.0617 34.0338 12.8588 34.5331 12.8588C35.0323 12.8588 35.5111 13.0617 35.8643 13.4229Z"
										fill="#010948"
									/>
									<path
										d="M35.789 28.9286C35.789 29.6106 35.5243 30.2646 35.0533 30.7468C34.5822 31.2291 33.9434 31.5 33.2772 31.5C32.611 31.5 31.9722 31.2291 31.5011 30.7468C31.0301 30.2646 30.7654 29.6106 30.7654 28.9286C30.7654 28.2466 31.0301 27.5925 31.5011 27.1103C31.9722 26.6281 32.611 26.3571 33.2772 26.3571C33.9434 26.3571 34.5822 26.6281 35.0533 27.1103C35.5243 27.5925 35.789 28.2466 35.789 28.9286ZM23.2301 16.0714C23.2301 16.7534 22.9655 17.4075 22.4944 17.8897C22.0234 18.3719 21.3845 18.6429 20.7183 18.6429C20.0522 18.6429 19.4133 18.3719 18.9422 17.8897C18.4712 17.4075 18.2065 16.7534 18.2065 16.0714C18.2065 15.3894 18.4712 14.7354 18.9422 14.2532C19.4133 13.7709 20.0522 13.5 20.7183 13.5C21.3845 13.5 22.0234 13.7709 22.4944 14.2532C22.9655 14.7354 23.2301 15.3894 23.2301 16.0714Z"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block4');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="55"
									viewBox="0 0 54 55"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M2.88415 0.504006C2.72727 0.344216 2.54102 0.217465 2.33604 0.130987C2.13106 0.0445095 1.91137 1.68366e-09 1.6895 0C1.46763 -1.68366e-09 1.24793 0.0445096 1.04296 0.130987C0.837976 0.217465 0.651727 0.344216 0.494842 0.504006C0.337958 0.663796 0.213511 0.853494 0.128606 1.06227C0.0437003 1.27104 -1.65305e-09 1.49481 0 1.72079C1.65305e-09 1.94676 0.0437003 2.17053 0.128606 2.3793C0.213511 2.58808 0.337958 2.77777 0.494842 2.93756L4.40953 6.92131C3.19093 7.0832 2.07176 7.69106 1.2608 8.63152C0.449835 9.57197 0.00246054 10.7808 0.00213138 12.0325V36.0931C0.00213138 37.4605 0.535458 38.7719 1.48479 39.7388C2.43411 40.7057 3.72168 41.2489 5.06423 41.2489H38.113L41.4877 44.6861H7.03845C7.38754 45.6918 8.03428 46.5624 8.88952 47.178C9.74477 47.7936 10.7664 48.1239 11.8137 48.1234H42.1863C43.0187 48.1234 43.8275 48.0386 44.6127 47.869L51.1158 54.496C51.4327 54.8187 51.8624 55 52.3105 55C52.7586 55 53.1883 54.8187 53.5052 54.496C53.822 54.1733 54 53.7356 54 53.2792C54 52.8228 53.822 52.3851 53.5052 52.0624L2.88415 0.504006ZM33.7495 36.8046V37.8117H13.5011V34.3745C13.5011 32.5512 12.79 30.8027 11.5242 29.5135C10.2584 28.2243 8.54167 27.5 6.7516 27.5H3.37687V20.6255H6.7516C8.18114 20.6262 9.57398 20.1646 10.7294 19.3072C11.8848 18.4498 12.743 17.2408 13.1805 15.8547L17.8106 20.5705C17.047 21.8839 16.7342 23.4187 16.9215 24.9331C17.1089 26.4475 17.7858 27.8553 18.8454 28.9346C19.9051 30.0138 21.2873 30.7033 22.7742 30.8941C24.261 31.0849 25.7679 30.7663 27.0574 29.9886L33.7495 36.8046ZM7.7404 10.3139L10.1263 12.744V13.7511C10.1263 14.6627 9.77078 15.537 9.1379 16.1816C8.50501 16.8262 7.64663 17.1883 6.7516 17.1883H3.37687V12.0325C3.37687 11.5767 3.55464 11.1395 3.87108 10.8172C4.18753 10.4949 4.61671 10.3139 5.06423 10.3139H7.7404ZM20.3619 23.1725L24.5027 27.3831C23.9303 27.5396 23.3277 27.5397 22.7552 27.3836C22.1828 27.2275 21.6608 26.9206 21.2418 26.4938C20.8228 26.067 20.5214 25.5354 20.3682 24.9524C20.2149 24.3693 20.2151 23.7555 20.3686 23.1725M5.06423 37.8117C4.61671 37.8117 4.18753 37.6306 3.87108 37.3083C3.55464 36.986 3.37687 36.5489 3.37687 36.0931V30.9372H6.7516C7.64663 30.9372 8.50501 31.2994 9.1379 31.944C9.77078 32.5886 10.1263 33.4628 10.1263 34.3745V37.8117H5.06423ZM40.4989 27.5C38.7339 27.5 37.131 28.1874 35.9295 29.3149L38.3189 31.7519C38.9281 31.2262 39.7005 30.9376 40.4989 30.9372H43.8737V36.0931C43.8734 36.4505 43.7637 36.7989 43.5598 37.0899L45.9559 39.5303C46.7591 38.6194 47.2484 37.413 47.2484 36.0931V12.0325C47.2484 10.6651 46.7151 9.35365 45.7657 8.38674C44.8164 7.41983 43.5289 6.87663 42.1863 6.87663H13.8959L17.2706 10.3139H33.7495V13.7511C33.7495 15.5743 34.4606 17.3229 35.7263 18.6121C36.9921 19.9013 38.7089 20.6255 40.4989 20.6255H43.8737V27.5H40.4989ZM42.1863 10.3139C42.6338 10.3139 43.063 10.4949 43.3795 10.8172C43.6959 11.1395 43.8737 11.5767 43.8737 12.0325V17.1883H40.4989C39.6039 17.1883 38.7455 16.8262 38.1126 16.1816C37.4798 15.537 37.1242 14.6627 37.1242 13.7511V10.3139H42.1863ZM48.3486 41.9639L50.7345 44.3974C52.7593 42.2354 53.9979 39.3103 53.9979 36.0931V18.9069C53.9984 17.8403 53.6741 16.7997 53.0697 15.9286C52.4653 15.0575 51.6105 14.3988 50.6231 14.0432V36.0931C50.6231 38.3616 49.7592 40.4274 48.3486 41.9639Z"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block5');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="benefit fade-in">
							<div class="benefit-main-content">
								<svg
									width="54"
									height="61"
									viewBox="0 0 54 61"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M29.106 0.390576L50.106 8.44771C51.2499 8.88642 52.2357 9.67195 52.9315 10.6993C53.6274 11.7266 54.0002 12.9468 54 14.1967V30.6578C54.0001 35.788 52.6039 40.8169 49.9678 45.181C47.3317 49.5451 43.5599 53.0719 39.075 55.3663L29.013 60.5137C28.388 60.8335 27.6988 61 27 61C26.3012 61 25.612 60.8335 24.987 60.5137L14.925 55.3663C10.4401 53.0719 6.6683 49.5451 4.03221 45.181C1.39611 40.8169 -0.000108095 35.788 4.65534e-08 30.6578V14.1967C-0.000152095 12.9468 0.372611 11.7266 1.06846 10.6993C1.76431 9.67195 2.75008 8.88642 3.894 8.44771L24.894 0.390576C26.2519 -0.130192 27.7481 -0.130192 29.106 0.390576ZM27 6.13953L6 14.1967V30.6578C6.00069 34.6476 7.08718 38.5583 9.13774 41.952C11.1883 45.3456 14.122 48.0881 17.61 49.8721L27 54.6818L36.39 49.8783C39.879 48.0938 42.8132 45.3504 44.8638 41.9555C46.9145 38.5607 48.0004 34.6486 48 30.6578V14.1967L27 6.13953ZM27 18.2083C28.2806 18.2078 29.5278 18.6265 30.5591 19.4031C31.5905 20.1798 32.3519 21.2737 32.732 22.5249C33.1122 23.776 33.0911 25.1188 32.6718 26.3568C32.2526 27.5948 31.4572 28.6631 30.402 29.4055L30 29.6664V39.694C29.9992 40.4764 29.7064 41.2288 29.1815 41.7977C28.6565 42.3666 27.9391 42.7089 27.1758 42.7547C26.4125 42.8006 25.6609 42.5465 25.0745 42.0444C24.4881 41.5422 24.1113 40.83 24.021 40.0532L24 39.694V29.6664C22.8547 28.9913 21.9594 27.9483 21.4529 26.6992C20.9465 25.4501 20.8574 24.0649 21.1994 22.7587C21.5414 21.4524 22.2954 20.2983 23.3443 19.4755C24.3932 18.6527 25.6783 18.2072 27 18.2083Z"
										fill="#010948"
									/>
								</svg>
								<?php
										$block = get_field('RU-home-whyus-block6');
										if( $block ): ?>
										<h3><?php echo $block['title']; ?></h3>
									<?php endif; ?>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="benefit-subtext-wrapper">
								<div class="benefit-subtext">
									<?php
										$block = get_field('RU-home-whyus-block1');
										if( $block ): ?>
										<p><?php echo $block['body']; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="qualities">
				<div class="qualities-blue">
					<div class="container relative">
						<h2 class="fade-in"><?php the_field('RU-home-quality-h1');?></h2>
						<img
							class="qualities__link-bg link-bg"
							src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
							alt="background link"
						/>
						<img
							class="qualities__link-bg link-bg"
							src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
							alt="background link"
						/>
					</div>
					<div class="qualities__list-wrapper">
						<div class="qualities__list">
							<div class="quality fade-in">
								<img src="<?php bloginfo('template_url');?>/assets/icons/Quality1.svg" alt="High DR" />
								<p class="quality-text">
									<span>1.</span>
									<?php the_field('RU-home-quality-1');?>
								</p>
							</div>
							<div class="quality fade-in">
								<img
									src="<?php bloginfo('template_url');?>/assets/icons/Quality2.svg"
									alt="Good indexability"
								/>
								<p class="quality-text">
									<span>2.</span>
									<?php the_field('RU-home-quality-2');?>
								</p>
							</div>
							<div class="quality fade-in">
								<img src="<?php bloginfo('template_url');?>/assets/icons/Quality3.svg" alt="Live sites" />
								<p class="quality-text">
									<span>3.</span>
									<?php the_field('RU-home-quality-3');?>
								</p>
							</div>
							<div class="quality fade-in">
								<img
									src="<?php bloginfo('template_url');?>/assets/icons/Quality4.svg"
									alt="Large site database"
								/>
								<p class="quality-text">
									<span>4.</span>
									<?php the_field('RU-home-quality-4');?>
								</p>
							</div>
							<div class="quality fade-in">
								<img src="<?php bloginfo('template_url');?>/assets/icons/Quality5.svg" alt="Unspamed donors" />
								<p class="quality-text">
									<span>5.</span>
									<?php the_field('RU-home-quality-5');?>
								</p>
							</div>
							<div class="quality fade-in">
								<img
									src="<?php bloginfo('template_url');?>/assets/icons/Quality6.svg"
									alt="Uniqueness and naturalness"
								/>
								<p class="quality-text">
									<span>6.</span>
									<?php the_field('RU-home-quality-6');?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="qualities-white">
					<div class="container relative">
						<img
							class="qualities__link-bg link-bg"
							src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
							alt="background link"
						/>
						<img
							class="qualities__link-bg link-bg"
							src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
							alt="background link"
						/>
					</div>
				</div>
			</section>
			<section id="clients">
				<div class="container">
					<h2 class="blue fade-in">Наши клиенты</h2>
					<div class="clients-swiper fade-in">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Linemedia.svg"
										alt="Linemedia"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Autoline.svg"
										alt="Autoline"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Machineryline.svg"
										alt="Machineryline"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Agronetto.svg"
										alt="Agronetto"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/KharkivBlade.svg"
										alt="Kharkiv Blade"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img src="<?php bloginfo('template_url');?>/assets/images/partners/Bhii.svg" alt="BHII" />
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Itforce.png"
										alt="ITForce"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/Ukrpass.svg"
										alt="Ukrpass"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/AquaMirgorod.svg"
										alt="AquaMirgorod"
									/>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img src="<?php bloginfo('template_url');?>/assets/images/partners/Compx.svg" alt="Compx" />
								</div>
							</div>
							<div class="swiper-slide">
								<div class="slide-image-wrapper">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/partners/EvaKovrik.png"
										alt="EvaKovrik"
									/>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>

						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</section>
			<section id="countries" class="index-countries">
				<div class="container relative">
					<h2 class="fade-in">Линкбилдинг в 10+ странах</h2>
					<div class="countries-list">
						<div class="countries-item">
							<div class="country uk fade-in fade-in-top">
								<img
									src="<?php bloginfo('template_url');?>/assets/images/countries/UK.png"
									alt="United Kingdom"
								/>
								<span>Великобритания</span>
							</div>
						</div>
						<div class="countries-item">
							<div class="country fade-in fade-in-left">
								<img
									src="<?php bloginfo('template_url');?>/assets/images/countries/US.png"
									alt="United States"
								/>
								<span>США</span>
							</div>
							<div class="country fade-in fade-in-right">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/UA.png" alt="Ukraine" />
								<span>Украина</span>
							</div>
						</div>
						<div class="countries-item fade-in fade-in-left">
							<div class="country">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/FR.png" alt="France" />
								<span>Франция</span>
							</div>
							<div class="country fade-in fade-in-right">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/KZ.png" alt="Kazakhstan" />
								<span>Казахстан</span>
							</div>
						</div>
						<div class="countries-item fade-in fade-in-left">
							<div class="country">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/ES.png" alt="Spain" />
								<span>Испания</span>
							</div>
							<div class="country fade-in fade-in-right">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/MX.png" alt="Mexico" />
								<span>Мексика</span>
							</div>
						</div>
						<div class="countries-item fade-in fade-in-left">
							<div class="country">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/DE.png" alt="Germany" />
								<span>Германия</span>
							</div>
							<div class="country fade-in fade-in-right">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/AR.png" alt="Argentina" />
								<span>Аргентина</span>
							</div>
						</div>
						<div class="countries-item fade-in">
							<div class="country">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/PL.png" alt="Poland" />
								<span>Польша</span>
							</div>
							<div class="country fade-in">
								<img src="<?php bloginfo('template_url');?>/assets/images/countries/CL.png" alt="Chile" />
								<span>Чили</span>
							</div>
						</div>
						<svg
							class="countries-globe"
							width="368"
							height="368"
							viewBox="0 0 368 368"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M79.0773 92.5318C76.037 93.2433 77.9776 93.114 75.4548 93.4374C64.652 95.7662 72.6732 97.8362 79.0773 92.5318ZM269.064 96.8658C269.841 96.3483 272.558 93.6962 264.084 91.1087C264.601 93.7608 262.337 93.5021 262.337 94.9899C268.612 100.682 271.199 110.58 279.22 112.65C280.773 105.534 272.105 102.041 269.064 96.8658ZM73.3201 90.4618C74.2904 96.219 78.6245 84.3812 78.6891 80.1765C77.0073 81.1468 75.3254 82.1171 73.5788 82.8933C77.6541 84.9633 74.0963 87.1627 69.6976 90.4618C60.7707 101.588 78.0423 81.7937 73.3201 90.4618ZM184 18.3999C92.5323 18.3999 18.4004 92.5318 18.4004 184C18.4004 275.403 92.5323 349.6 184 349.6C275.469 349.6 349.6 275.403 349.6 184C349.6 92.5318 275.469 18.3999 184 18.3999ZM188.399 73.9018L189.175 74.1605C186.07 78.1712 205.347 89.8796 191.504 90.8499C178.567 94.5371 196.938 87.4862 186.911 88.7152C192.216 81.3408 182.707 81.2115 188.399 73.9018ZM109.869 84.5105C105.211 80.6293 90.5916 89.8149 95.702 87.6155C108.381 82.6346 96.5429 88.133 99.5185 94.0843C96.8016 99.7121 98.6129 88.5212 91.8854 95.184C87.0338 96.2837 75.1313 107.281 76.6191 103.917C76.231 109.156 62.4526 115.366 60.5766 124.099C56.0485 136.196 59.477 123.646 58.636 118.924C52.1673 110.709 40.3941 132.832 43.8873 141.565C49.7738 131.215 49.321 140.465 45.0516 145.058C49.3857 153.015 41.1057 163.365 49.321 169.251C52.9435 170.092 60.1885 157.09 57.0188 170.61C59.2182 158.901 63.0995 173.391 69.3741 170.157C69.7623 176.302 73.5788 173.456 74.4198 180.895C84.8991 180.119 94.4729 197.843 81.9882 201.207C83.8641 200.689 87.5513 203.988 91.8207 201.466C99.0657 207.223 118.149 207.934 118.666 222.166C105.534 228.44 115.432 245.647 104.047 251.792C90.9798 249.852 99.5832 267.9 94.0848 265.83C96.2841 278.832 80.8885 264.148 86.8398 271.328C97.772 278.056 82.0529 276.697 86.9691 281.613C81.4707 280.449 90.3976 291.834 91.8854 296.039C99.7773 308.847 85.0932 293.192 80.7591 288.923C76.6191 280.643 66.8513 264.795 64.1345 251.792C62.582 232.904 47.9626 220.225 44.5988 201.789C41.2351 191.504 53.8491 175.008 47.057 169.251C41.1704 164.658 43.5638 148.939 40.0707 140.659C48.8035 102.817 76.5545 70.9262 109.869 52.0374C106.44 54.5602 129.469 45.504 126.817 47.7033C126.105 49.3205 140.272 41.558 148.81 40.3937C147.905 40.523 126.623 48.1562 132.509 47.1212C123.388 51.5846 131.604 49.0618 136.132 46.7977C127.075 53.4605 120.089 51.5846 109.804 57.4712C99.4538 60.188 101.589 70.9262 94.2141 76.2952C98.5482 77.0715 109.416 65.1043 115.755 60.8996C130.31 53.8487 108.381 73.7077 122.224 65.169C117.566 69.503 118.537 76.4246 115.69 78.3652C114.267 77.9771 121.318 81.729 109.869 84.5105ZM132.509 54.7543C131.021 56.7596 128.951 61.0937 127.722 58.4415C126.04 59.2824 125.394 62.9049 122.224 59.994C124.1 58.6355 126.04 55.4012 122.353 57.4065C124.035 55.5952 139.043 50.4849 138.202 48.5443C140.854 46.8624 140.595 46.0215 137.555 47.0565C136.002 46.539 141.242 42.1402 148.228 41.558C149.199 41.558 149.587 42.2049 147.84 42.0108C137.296 45.2452 141.824 44.3396 148.94 42.0108C146.223 43.5633 144.347 44.0162 143.894 44.7277C151.01 42.1402 143.506 46.6037 145.123 46.2802C143.118 47.3152 145.447 47.6387 141.565 49.1265C142.277 48.5443 135.226 53.3312 139.431 51.908C135.355 55.7893 133.544 55.854 132.509 54.7543ZM138.719 64.0046C138.849 57.7946 147.775 53.8487 146.676 53.5252C157.673 48.3502 142.859 53.7193 151.527 49.0618C154.762 48.7383 161.619 38.3883 171.128 37.7415C181.607 34.5718 176.755 37.9355 184.518 34.9599L182.965 36.2537C181.607 36.4477 183.289 38.8412 178.373 42.4637C177.855 48.0915 168.993 45.504 173.392 51.5199C170.545 47.4446 166.276 51.3905 171.645 51.7787C165.888 56.1774 152.498 56.9537 146.094 64.2633C141.954 70.2146 138.137 68.3387 138.719 64.0046ZM184.712 84.7046C180.313 95.3133 176.044 83.1521 183.806 81.2115C185.747 82.2465 186.523 82.5699 184.712 84.7046ZM168.152 63.4871C166.858 58.7002 167.893 61.223 175.591 58.959C180.895 62.7755 170.869 65.2983 168.152 63.4871ZM288.6 253.345C282.519 242.866 295.974 233.162 300.503 224.365C299.92 234.65 298.627 244.806 288.6 253.345ZM311.499 133.608C304.901 134.126 298.95 135.678 292.999 131.926C279.285 116.919 295.522 148.875 300.05 135.808C316.351 142.018 299.791 168.798 289.506 166.017C283.749 153.597 276.633 139.948 264.084 133.867C273.722 144.541 278.509 157.672 288.859 167.311C289.57 180.766 303.219 162.394 302.379 172.809C303.672 190.727 282.131 201.466 285.883 219.449C293.904 235.815 270.423 238.79 273.075 253.474C263.631 264.018 253.539 278.25 236.591 275.986C236.591 267.059 232.063 259.49 231.028 250.305C221.843 238.661 240.731 226.176 229.023 214.015C215.503 210.975 231.804 192.345 217.897 194.091C209.552 185.746 197.326 193.832 185.359 193.897C170.351 195.32 154.891 175.461 161.554 161.424C156.249 146.805 178.373 142.535 178.955 129.662C189.564 120.8 204.636 121.9 218.996 119.83C217.961 130.115 228.829 130.18 237.044 133.608C241.637 122.482 255.933 135.42 265.701 128.369C269.064 111.938 256.192 121.835 248.817 116.596C239.89 103.529 267.9 109.868 264.989 103.011C254.122 102.946 260.267 89.6208 252.569 97.0599C259.491 98.289 251.34 103.723 251.534 97.5127C241.055 94.4724 251.146 109.415 245.842 110.838C237.756 107.475 241.572 114.655 242.413 115.755C238.92 123.323 234.651 104.628 224.754 105.146C214.921 96.1543 220.872 109.221 229.411 111.356C227.6 111.873 230.446 119.312 228.182 116.143C221.131 106.44 207.741 99.9708 199.784 111.873C198.943 123 176.303 126.169 179.925 113.167C174.621 99.7121 196.356 112.779 194.35 102.041C180.378 92.7905 198.167 95.7662 202.889 87.098C213.627 87.4215 203.342 78.3005 208.388 75.6483C207.87 85.5455 216.603 83.6696 223.524 81.7937C221.843 76.1012 227.664 76.2952 224.107 71.573C240.149 65.169 211.881 74.5487 217.573 60.5115C210.652 55.7246 214.662 71.0555 217.573 72.6727C217.767 77.3949 213.757 83.2168 208.258 73.3196C200.237 78.5593 201.078 68.0152 200.56 69.1149C199.655 65.0396 206.641 64.8455 206.706 57.7299C206.124 53.2018 206.253 50.8083 209.487 50.5496C209.746 51.1965 222.748 51.3905 227.341 56.7596C214.792 54.2368 225.465 58.8296 231.093 61.4171C225.077 56.6949 233.486 61.4171 228.57 56.048C230.511 56.4362 223.201 48.6737 230.705 55.4658C226.629 50.6143 238.661 52.0374 231.546 48.4149C241.96 51.3258 235.815 48.6737 229.67 46.0215C212.722 35.9302 259.62 59.6705 240.473 49.1265C252.699 51.7787 214.339 39.6821 231.804 44.9865C225.142 42.0755 231.61 43.6927 237.626 45.5687C226.824 42.2049 210.652 35.9302 211.299 35.6715C215.05 35.9302 218.738 36.7712 222.295 37.8062C233.357 41.1052 219.126 37.0299 222.166 37.0946C260.202 46.8624 293.516 72.3493 313.764 105.663C318.486 110.644 331.359 143.57 324.631 128.951C327.671 140.595 328.124 153.144 329.741 165.046C326.378 161.295 322.626 147.451 319.391 139.754C318.033 142.729 316.48 135.549 311.499 133.608Z"
								fill="white"
							/>
							<circle
								cx="184"
								cy="184"
								r="183"
								stroke="white"
								stroke-width="2"
								stroke-dasharray="32 32"
							/>
						</svg>
					</div>
					<img
						class="countries__link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
					<img
						class="countries__link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
					<img
						class="countries__link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>

					<img
						class="countries__link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
				</div>
			</section>
			<section id="reviews">
				<div class="container">
					<h2 class="blue fade-in"><?php the_field('RU-reviews-h1'); ?></h2>
					<div class="reviews-content">
						<img
							class="reviews-image fade-in fade-in-left"
							src="<?php bloginfo('template_url');?>/assets/images/home/reviews.svg"
							alt="Reviews"
						/>
						<div class="reviews-swiper fade-in fade-in-right">
							<div class="swiper-wrapper">
								<?php
										$review = get_field('RU-review1');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review2');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review3');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review4');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review6');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review7');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
								<?php
										$review = get_field('RU-review8');
										if( $review['name'] && $review['position'] && $review['text']  ): ?>
										<div class="swiper-slide">
											<div class="review">
											<img
												src="<?php bloginfo('template_url');?>/assets/icons/quotes.svg"
												alt="quote"
												class="quote"
											/>
											<div class="reviewer-info">
												<h5><?php echo $review['name']; ?></h5>
												<span><?php echo $review['position']; ?></span>
												<div class="review-mark">
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
													<img src="<?php bloginfo('template_url');?>/assets/icons/Star.svg" alt="star" />
												</div>
											</div>
											<p class="review-text">
												<?php echo $review['text']; ?>
											</p>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>
				</div>
			</section>
			<div id="modal">
				<div class="modal-dialog">
					<div class="modal-content relative">
						<button data-close-modal class="close-modal">
							<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
						</button>
						<div class="modal-left">
							<div class="modal-left-text">
								<h3 class="blue">Оставляйте заявку!</h3>
								<span>Мы свяжемся с вами в кратчайшие сроки</span>
							</div>
							<img src="<?php bloginfo('template_url');?>/assets/images/modal-img.svg" alt="Contact us" />
						</div>
						<div class="modal-right">
							<form id="modal-form" action="send_email.php" method="POST"">
								<div class="modal-inputs">
									<div class="input-container">
										<p class="placeholder">Имя*</p>
										<input
											type="text"
											name="name"
											autocomplete="off"
											class="input"
										/>
										<svg
											class="line-svg"
											width="300"
											height="1"
											viewBox="0 0 300 1"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												class="elastic-line"
												d="M0 0.999512C0 0.999512 60.5 0.999512 150 0.999512C239.5 0.999512 300 0.999512 300 0.999512"
												stroke="#0112224D"
												stroke-width="1"
											/>
										</svg>
									</div>
									<div class="comm-method">
										<p class="placeholder">Способ связи*</p>
										<div class="radio-group">
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="phone"
													value="phone"
												/>
												<label for="phone">Номер телефона</label>
											</div>
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="telegram"
													value="telegram"
												/>
												<label for="telegram">Telegram</label>
											</div>
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="email"
													value="email"
												/>
												<label for="email">E-mail</label>
											</div>
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="viber"
													value="viber"
												/>
												<label for="viber">Viber</label>
											</div>
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="whatsapp"
													value="whatsapp"
												/>
												<label for="whatsapp">WhatsApp</label>
											</div>
										</div>
									</div>
									<div id="dynamic-input" class="input-container">
										<p class="placeholder">Номер телефона*</p>
										<input type="tel" name="phone" class="input dynamic" />
										<svg
											class="line-svg"
											width="300"
											height="1"
											viewBox="0 0 300 1"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												class="elastic-line"
												d="M0 0.999512C0 0.999512 60.5 0.999512 150 0.999512C239.5 0.999512 300 0.999512 300 0.999512"
												stroke="#0112224D"
												stroke-width="1"
											/>
										</svg>
									</div>
									<div class="input-container">
										<p class="placeholder">Сообщение</p>
										<input
											type="text"
											name="message"
											autocomplete="off"
											class="input"
											id="message"
										/>
										<svg
											class="line-svg"
											width="300"
											height="1"
											viewBox="0 0 300 1"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												class="elastic-line"
												d="M0 0.999512C0 0.999512 60.5 0.999512 150 0.999512C239.5 0.999512 300 0.999512 300 0.999512"
												stroke="#0112224D"
												stroke-width="1"
											/>
										</svg>
									</div>
								</div>
								<p class="modal-subtext">
									Нажимая кнопку “Отправить”, вы даете согласие на обработку
									персональных данных
								</p>
								<button class="modal-submit btn-primary" type="submit">
									Отправить
								</button>
							</form>
						</div>
						<div class="modal-submitted">
							<h3 class="blue">Ваш запрос успешно отправлен!</h3>
							<img
								src="<?php bloginfo('template_url');?>/assets/images/form-submitted.svg"
								alt="form submitted"
							/>
						</div>
					</div>
					<div data-close-modal class="modal-backdrop"></div>
				</div>
			</div>
		</main>

<?php get_footer();?>