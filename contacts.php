<?php
/*
	Template Name: UA contacts
*/
?>

<?php get_header();?>
		<main>
			<section id="contacts">
				<div class="container relative">
					<h1 class="blue fade-in"><?php the_field('UA-contacts-h1'); ?></h1>
					<div class="contacts-content fade-in">
						<div class="contacts-left">
							<h2 class="blue"><?php the_field('UA-contacts-left-h2'); ?></h2>
							<span class="subheading"
								><?php the_field('UA-contacts-left-text'); ?></span
							>
							<form id="modal-form" class="contacts-form">
								<div class="modal-inputs">
									<div class="input-container">
										<p class="placeholder">Ім'я*</p>
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
										<p class="placeholder">Спосіб зв'язку*</p>
										<div class="radio-group">
											<div class="radio-button">
												<input
													type="radio"
													name="communication"
													id="phone"
													value="phone"
												/>
												<label for="phone">Номер телефону</label>
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
										<p class="placeholder">Номер телефону*</p>
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
										<p class="placeholder">Повідомлення</p>
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
									Натискаючи кнопку "Надіслати", ви погоджуєтеся на обробку персональних даних.
								</p>
								<button class="modal-submit btn-primary" type="submit">
									Надіслати
								</button>
							</form>
						</div>
						<div class="credentials">
							<div class="top">
								<h2><?php the_field('UA-contacts-right-h2'); ?></h2>
								<div class="contacts-list">
									<div class="contacts-item">
										<div>
											<img src="<?php bloginfo('template_url');?>/assets/icons/phone.svg" alt="phone" />
										</div>
										<div class="links">
											<h4>Номер телефону</h4>
											<a href="tel:+38000000000">+380XXXXXXXXX</a>
											<a href="tel:+38000000000">+380XXXXXXXXX</a>
										</div>
									</div>
									<div class="contacts-item">
										<div>
											<img src="<?php bloginfo('template_url');?>/assets/icons/mail.svg" alt="mail" />
										</div>
										<div class="links">
											<h4>Email</h4>
											<a href="mailto:links_forge@gmail.com"
												>links_forge@gmail.com</a
											>
											<a href="mailto:links_forge@gmail.com"
												>links_forge@gmail.com</a
											>
										</div>
									</div>
								</div>
							</div>
							<img src="<?php bloginfo('template_url');?>/assets/images/modal-img.svg" alt="Contact us" />
						</div>
					</div>
					<img
						class="link-bg contacts__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
					<img
						class="link-bg contacts__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
					<img
						class="link-bg contacts__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
				</div>
			</section>
			<div id="modal" class="contacts-modal">
				<div class="modal-dialog">
					<div class="modal-content relative">
						<button data-close-modal class="close-modal">
							<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
						</button>
						<div class="modal-submitted">
							<h3 class="blue">Ваш запит успішно відправлено!</h3>
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
