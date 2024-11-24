<?php
/*
	Template Name: UA FAQ
*/
?>

<?php get_header();?>
		<main>
			<section id="faq">
				<div class="container relative">
					<h2 class="blue fade-in"><?php the_field('UA-faq-h1'); ?></h2>
					<div class="faq-content">
						<div class="questions fade-in fade-in-left">
							<?php
							$question = get_field('UA-faq-question1');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question2');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question3');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question4');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question5');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question6');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question7');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question8');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question9');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question10');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question11');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question12');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question13');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question14');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$question = get_field('UA-faq-question15');
							if( $question['question'] && $question['answer'] ): ?>
								<div class="question-wrapper">
									<div class="question">
										<h4><?php echo $question['question'];?></h4>
										<img src="<?php bloginfo('template_url');?>/assets/icons/close.svg" alt="close" />
									</div>
									<div class="answer-wrapper">
										<div class="answer"><?php echo $question['answer'];?></div>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<img
							class="faq-img fade-in fade-in-right"
							src="<?php bloginfo('template_url');?>/assets/images/faq.svg"
							alt="FAQ"
						/>
					</div>
					<img
						class="link-bg faq__link-bg"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background-link"
					/>
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
								<h3 class="blue">Залишайте заявку!</h3>
								<span>Ми зв’яжемося з вами найближчим часом.</span>
							</div>
							<img src="<?php bloginfo('template_url');?>/assets/images/modal-img.svg" alt="Contact us" />
						</div>
						<div class="modal-right">
							<form id="modal-form" action="send_email.php" method="POST"">
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
									Натискаючи кнопку "Відправити", ви погоджуєтеся на обробку персональних даних.
								</p>
								<button class="modal-submit btn-primary" type="submit">
									Відправити
								</button>
							</form>
						</div>
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