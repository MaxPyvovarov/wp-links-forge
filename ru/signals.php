<?php
/*
	Template Name: RU signals
*/
?>

<?php get_header();?>

		<main>
			<section id="hero">
				<div class="container relative">
					<div class="hero-content fade-in">
						<h1><?php the_field('RU-signals-hero-h1'); ?></h1>
						<p><?php the_field('RU-signals-hero-h2'); ?></p>
						<a href="#prices" class="btn-primary">Заказать ссылки</a>
					</div>
					<img
						class="hero-main-img signals fade-in"
						src="<?php bloginfo('template_url');?>/assets/images/services/signals/hero-main.svg"
						alt=""
					/>
					<img
						class="hero-bg-img signals"
						src="<?php bloginfo('template_url');?>/assets/images/services/signals/hero-bg.svg"
						alt=""
					/>
				</div>
			</section>
			<section id="advantages">
				<div class="container">
					<div class="advantages-content">
						<div class="advantages-text fade-in fade-in-left">
							<h2 class="blue"><?php the_field('RU-signals-advantages-h1'); ?></h2>
							<p><?php the_field('RU-signals-advantages-h2'); ?></p>
						</div>
						<img
							class="advantages-img signals fade-in fade-in-right"
							src="<?php the_field('RU-signals-advantages-img'); ?>"
							alt=""
						/>
					</div>
				</div>
			</section>
			<section id="why-us">
				<div class="container relative">
					<h2 class="blue fade-in">
						<?php the_field('RU-signals-whyus-h1'); ?>
					</h2>
					<div class="why-us-content">
						<?php
							$block = get_field('RU-signals-whyus-block1');
							if( $block ): ?>
							<div class="reason fade-in">
								<div class="reason-heading">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/crowd/whyus.svg"
										alt=""
									/>
									<h3><?php echo $block['title']; ?></h3>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="reason-body-wrapper">
								<div class="reason-body"><?php echo $block['body']; ?></div>
								</div>
							</div>
						<?php endif; ?>
						<?php
							$block = get_field('RU-signals-whyus-block2');
							if( $block ): ?>
							<div class="reason fade-in">
								<div class="reason-heading">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/crowd/whyus.svg"
										alt=""
									/>
									<h3><?php echo $block['title']; ?></h3>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="reason-body-wrapper">
								<div class="reason-body"><?php echo $block['body']; ?></div>
								</div>
							</div>
						<?php endif; ?>
						<?php
							$block = get_field('RU-signals-whyus-block3');
							if( $block ): ?>
							<div class="reason fade-in">
								<div class="reason-heading">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/crowd/whyus.svg"
										alt=""
									/>
									<h3><?php echo $block['title']; ?></h3>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="reason-body-wrapper">
								<div class="reason-body"><?php echo $block['body']; ?></div>
								</div>
							</div>
						<?php endif; ?>
						<?php
							$block = get_field('RU-signals-whyus-block4');
							if( $block ): ?>
							<div class="reason fade-in">
								<div class="reason-heading">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/crowd/whyus.svg"
										alt=""
									/>
									<h3><?php echo $block['title']; ?></h3>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="reason-body-wrapper">
								<div class="reason-body"><?php echo $block['body']; ?></div>
								</div>
							</div>
						<?php endif; ?>
						<?php
							$block = get_field('RU-signals-whyus-block5');
							if( $block ): ?>
							<div class="reason fade-in">
								<div class="reason-heading">
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/crowd/whyus.svg"
										alt=""
									/>
									<h3><?php echo $block['title']; ?></h3>
								<img src="<?php bloginfo('template_url');?>/assets/icons/arrow-down.svg" alt="show more" />
							</div>
							<div class="reason-body-wrapper">
								<div class="reason-body"><?php echo $block['body']; ?></div>
								</div>
							</div>
						<?php endif; ?>
					</div>

					<img
						class="why-us-link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>

					<img
						class="why-us-link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
				</div>
			</section>
			<section id="countries">
				<div class="container relative">
					<h2 class="fade-in"><?php the_field('RU-signals-countries-h1'); ?></h2>
					<div class="countries-list">
						<div class="country fade-in">
							<img
								src="<?php bloginfo('template_url');?>/assets/images/countries/UK.png"
								alt="United Kingdom"
							/>
							<span>Великобритания</span>
						</div>
						<div class="country fade-in">
							<img
								src="<?php bloginfo('template_url');?>/assets/images/countries/US.png"
								alt="United States"
							/>
							<span>США</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/FR.png" alt="France" />
							<span>Франция</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/ES.png" alt="Spain" />
							<span>Испания</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/DE.png" alt="Germany" />
							<span>Германия</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/PL.png" alt="Poland" />
							<span>Польша</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/UA.png" alt="Ukraine" />
							<span>Украина</span>
						</div>
						<div class="country fade-in">
							<img
								src="<?php bloginfo('template_url');?>/assets/images/countries/KZ.png"
								alt="Kazakhstan"
							/>
							<span>Казахстан</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/MX.png" alt="Mexico" />
							<span>Мексика</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/AR.png" alt="Argentina" />
							<span>Аргентина</span>
						</div>
						<div class="country fade-in">
							<img src="<?php bloginfo('template_url');?>/assets/images/countries/CL.png" alt="Chile" />
							<span>Чили</span>
						</div>
					</div>
					<img
						class="countries-link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
					<img
						class="countries-link-bg link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
				</div>
			</section>
			<section id="impact">
				<div class="container">
					<div class="impact-content">
						<div class="impact-text fade-in fade-in-left">
							<h2 class="blue"><?php the_field('RU-signals-impact-h1'); ?></h2>
							<p><?php the_field('RU-signals-impact-text'); ?></p>
						</div>
						<img
							src="<?php the_field('RU-signals-impact-img'); ?>"
							class="impact-img fade-in fade-in-right"
							alt="impact"
						/>
					</div>
				</div>
			</section>
			<section id="prices">
				<div class="container">
					<h2 class="fade-in"><?php the_field('RU-signals-prices-h1'); ?></h2>
					<div class="prices-list">
						<div class="row">
							<?php
							$block = get_field('RU-signals-prices-item1');
							if( $block ): ?>
								<div class="prices-item relative fade-in">
									<div class="content">
										<h3 class="blue"><?php echo $block['title']; ?></h3>
										<div class="price-block">
											<span class="main-price relative"><?php echo $block['full-price']; ?></span>
											<span class="link-amount"><?php echo $block['link-amount']; ?> ссылок</span>
											<span class="single-price">(<b>$<?php echo $block['link-price']; ?></b> за ссылку)</span>
										</div>
										<div class="options-block">
											<?php
												$item = $block['list'];
												if( $item['item1'] ): ?>
													<p><?php echo $item['item1'];?></p>
											<?php endif; ?>
											<?php
												$item = $block['list'];
												if( $item['item2'] ): ?>
													<p><?php echo $item['item2'];?></p>
											<?php endif; ?>
											<?php
												$item = $block['list'];
												if( $item['item3'] ): ?>
													<p><?php echo $item['item3'];?></p>
											<?php endif; ?>
											<?php
												$item = $block['list'];
												if( $item['item4'] ): ?>
													<p><?php echo $item['item4'];?></p>
											<?php endif; ?>
											<?php
												$item = $block['list'];
												if( $item['item5'] ): ?>
													<p><?php echo $item['item5'];?></p>
											<?php endif; ?>
										</div>
									</div>
									<button
										data-selected-plan="<?php echo $block['title']; ?>"
										data-open-modal
										class="btn-secondary"
									>
										Заказать сейчас
									</button>
									<?php
												$label = $block['label'];
												if( $label ): ?>
													<p class="offer-label"><?php echo $label?></p>
											<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php
							$block = get_field('RU-signals-prices-item2');
							if( $block ): ?>
								<div class="prices-item relative fade-in">
									<div class="content">
										<h3 class="blue"><?php echo $block['title']; ?></h3>
										<div class="price-block">
											<span class="main-price relative"><?php echo $block['full-price']; ?></span>
											<span class="link-amount"><?php echo $block['link-amount']; ?> ссылок</span>
											<span class="single-price">(<b>$<?php echo $block['link-price']; ?></b> за ссылку)</span>
										</div>
										<div class="options-block">
											<?php
												$item = $block['list'];
												if( $item['item1'] ): ?>
													<p><?php echo $item['item1'];?></p>
											<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item2'] ): ?>
											<p><?php echo $item['item2'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item3'] ): ?>
											<p><?php echo $item['item3'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item4'] ): ?>
											<p><?php echo $item['item4'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item5'] ): ?>
											<p><?php echo $item['item5'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item6'] ): ?>
											<p><?php echo $item['item6'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item7'] ): ?>
											<p><?php echo $item['item7'];?></p>
									<?php endif; ?>
								</div>
							</div>
							<button
								data-selected-plan="<?php echo $block['title']; ?>"
								data-open-modal
								class="btn-secondary"
							>
								Заказать сейчас
							</button>
							<?php
										$label = $block['label'];
										if( $label ): ?>
											<p class="offer-label"><?php echo $label?></p>
									<?php endif; ?>
						</div>
						<?php endif; ?>
						</div>
						<div class="row">
							<?php
							$block = get_field('RU-signals-prices-item3');
							if( $block ): ?>
								<div class="prices-item relative fade-in">
									<div class="content">
										<h3 class="blue"><?php echo $block['title']; ?></h3>
										<div class="price-block">
											<span class="main-price relative"><?php echo $block['full-price']; ?></span>
											<span class="link-amount"><?php echo $block['link-amount']; ?> ссылок</span>
											<span class="single-price">(<b>$<?php echo $block['link-price']; ?></b> за ссылку)</span>
										</div>
										<div class="options-block">
											<?php
												$item = $block['list'];
												if( $item['item1'] ): ?>
													<p><?php echo $item['item1'];?></p>
											<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item2'] ): ?>
											<p><?php echo $item['item2'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item3'] ): ?>
											<p><?php echo $item['item3'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item4'] ): ?>
											<p><?php echo $item['item4'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item5'] ): ?>
											<p><?php echo $item['item5'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item6'] ): ?>
											<p><?php echo $item['item6'];?></p>
									<?php endif; ?>
									<?php
										$item = $block['list'];
										if( $item['item7'] ): ?>
											<p><?php echo $item['item7'];?></p>
									<?php endif; ?>
								</div>
							</div>
							<button
								data-selected-plan="<?php echo $block['title']; ?>"
								data-open-modal
								class="btn-secondary"
							>
								Заказать сейчас
							</button>
							<?php
										$label = $block['label'];
										if( $label ): ?>
											<p class="offer-label"><?php echo $label?></p>
									<?php endif; ?>
						</div>
						<?php endif; ?>
							<div class="prices-item special fade-in">
								<div class="content">
									<h3 class="blue"><?php the_field('RU-signals-special-h1'); ?></h3>
									<p class="subheading"><?php the_field('RU-signals-special-h2'); ?></p>
									<img
										src="<?php bloginfo('template_url');?>/assets/images/services/special-offer.svg"
										alt=""
									/>
									<p class="caption"><?php the_field('RU-signals-special-h1'); ?></p>
								</div>
								<button
									data-selected-plan="special"
									data-open-modal
									class="btn-secondary"
								>
									Заказать сейчас
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="feedback">
				<div class="container">
					<div class="feedback-content">
						<div class="feedback-left fade-in fade-in-left">
							<h2 class="blue"><?php the_field('RU-signals-feedback-h1'); ?></h2>
							<form class="feedback-form" novalidate>
								<div class="feedback-inputs">
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
									<div class="input-container">
										<p class="placeholder">Номер телефона*</p>
										<input type="tel" name="phone" class="input" />
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
										<p class="placeholder">E-mail*</p>
										<input type="email" name="email" class="input" />
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
											></path>
										</svg>
									</div>
								</div>
								<p class="feedback-subtext">
									Нажимая кнопку, вы даете согласие на обработку персональных данных
								</p>
								<button class="feedback-submit btn-primary" type="submit">
									Получить консультацию
								</button>
							</form>
						</div>
						<img
							class="fade-in fade-in-left"
							src="<?php bloginfo('template_url');?>/assets/images/modal-img.svg"
							alt=""
						/>
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
									Нажимая кнопку “Отправить”, вы даете согласие на обработку персональных данных
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