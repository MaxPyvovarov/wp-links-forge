window.addEventListener('DOMContentLoaded', () => {
	//Fade in animation
	const controller = new ScrollMagic.Controller();
	const fadeElements = document.querySelectorAll('.fade-in');

	// Добавляем сцены для каждого элемента
	fadeElements.forEach(el => {
		// Создаем сцену для каждого элемента
		new ScrollMagic.Scene({
			triggerElement: el, // Элемент, который активирует анимацию
			triggerHook: 0.9, // Начало анимации, когда элемент почти полностью виден
			reverse: false, // Не анимировать обратно, когда элемент выйдет из области видимости
		})
			.on('enter', () => {
				gsap.to(el, {
					opacity: 1,
					y: 0,
					x: 0,
					duration: 0.1,
					delay: el?.getAttribute('data-delay'),
				});
			})
			.addTo(controller);
	});

	function addDelayToElements(elements, delay = 0.2) {
		elements.forEach((el, index) => {
			// Добавляем атрибут data-delay для каждого элемента
			el.setAttribute('data-delay', (index * delay).toFixed(1)); // Умножаем индекс на 0.2 и округляем до 1 знака
		});
	}

	//Home page delays
	addDelayToElements(document.querySelectorAll('#why-us .benefit'));
	addDelayToElements(document.querySelectorAll('#qualities .quality'));

	//Services delays
	addDelayToElements(document.querySelectorAll('#why-us .reason'), 0.1);
	addDelayToElements(
		document.querySelectorAll('#countries:not(.index-countries) .country'),
		0.1
	);
	addDelayToElements(document.querySelectorAll('#prices .prices-item'));
	addDelayToElements(document.querySelectorAll('#feedback .fade-in'));

	//Other pages delay
	addDelayToElements(document.querySelectorAll('#faq .fade-in'));
	addDelayToElements(document.querySelectorAll('#contacts .fade-in'));
	addDelayToElements(document.querySelectorAll('.not-found .fade-in'));

	//Language picker

	// Получаем язык страницы из URL
	function getLanguageFromURL() {
		const urlPath = window.location.pathname.split('/');
		const langCode = urlPath[1]; // предполагается, что код языка - второй элемент URL
		return ['ru', 'en', 'ua'].includes(langCode)
			? langCode.toUpperCase()
			: 'UA';
	}

	// Устанавливаем язык в URL и перезагружаем страницу, если язык изменился
	function setLanguageInURL(language) {
		const currentPath = window.location.pathname.split('/');
		const currentLang = currentPath[1]?.toUpperCase();

		// Проверка на текущий язык и добавление или удаление префикса
		if (currentLang !== language) {
			// Если выбран русский язык, убираем префикс из URL
			if (language === 'UA') {
				// Для русского языка удаляем языковой префикс из пути
				if (currentLang === 'EN' || currentLang === 'RU') {
					currentPath.splice(1, 1); // Удаляем языковой префикс
				}
			} else if (!['RU', 'UA', 'EN'].includes(currentLang)) {
				// Для услуг обновляем язык перед /services
				currentPath[0] = language.toLowerCase();
			} else {
				currentPath.splice(0, 1); // Удаляем языковой префикс
				// Для других языков, добавляем их в начало пути
				currentPath[0] = language.toLowerCase();
			}

			const newPath = currentPath.join('/');
			window.location.pathname = newPath; // Переходим на новый путь
		}
	}

	const ulList = document.querySelector('.lang-menu > ul');
	const allLanguageElements = ulList.querySelectorAll('.lang');
	const selectedLangElement = document.querySelector('.selected-lang');
	let defaultLang = getLanguageFromURL();
	let langList = [];

	selectedLangElement.innerHTML = defaultLang;
	document.body.classList.remove('hidden');

	// Mobile
	const mobileList = document.querySelectorAll('.lang-mobile');
	mobileList.forEach(item => {
		item.addEventListener('click', event => {
			const selectedLanguage = event.target.innerHTML;
			updateLanguages(selectedLanguage);
		});
	});

	// Устанавливаем начальный язык на основе URL
	selectedLangElement.innerHTML = `${defaultLang}`;
	resetDesktopLanguages();
	resetMobileLanguages(defaultLang);

	// Обработчик для десктопного меню
	ulList.addEventListener('click', e => {
		const selectedLanguage = e.target.innerHTML;
		updateLanguages(selectedLanguage);
	});

	// Функция для обновления меню и URL
	function updateLanguages(selected) {
		selectedLangElement.innerHTML = selected;
		setLanguageInURL(selected); // Перенаправляем на новый URL, если язык изменился
		resetDesktopLanguages();
		resetMobileLanguages(selected);
	}

	// Обновляем десктопное меню
	function resetDesktopLanguages() {
		langList = [];
		allLanguageElements.forEach(lang => {
			langList.push(lang.innerHTML);
		});

		ulList.innerHTML = '';
		langList.forEach(lang => {
			const insertLang = document.createElement('li');
			insertLang.classList.add('lang');
			insertLang.innerHTML = lang;
			ulList.appendChild(insertLang);
		});
	}

	// Обновляем мобильное меню
	function resetMobileLanguages(selected) {
		mobileList.forEach(item => {
			item.innerHTML === selected
				? item.classList.add('active')
				: item.classList.remove('active');
		});
	}

	//Mobile Backdrop
	const backdrop = document.querySelector('.backdrop');
	backdrop.addEventListener('click', () => {
		toggleMobileMenu();
	});

	//Mobile menu
	const hamburger = document.querySelector('.hamburger-menu');
	const mobileMenu = document.querySelector('.mobile-menu');
	hamburger.addEventListener('click', () => {
		toggleMobileMenu();
	});

	const mobileServices = document.querySelector('.mobile-services-dropdown');
	mobileServices.addEventListener('click', () => {
		mobileServices.classList.toggle('active');
	});

	function toggleMobileMenu() {
		hamburger.classList.toggle('active');
		mobileMenu.classList.toggle('active');
		backdrop.classList.toggle('mobile-open');
		document.querySelector('body').classList.toggle('backdrop-opened');
		mobileServices.classList.remove('active');
	}

	//Modal window

	const modal = document.querySelector('#modal');
	const ERROR_COLOR = '#FF3B32';
	const SUCCESS_COLOR = '#202AE9';
	const MIN_NAME_LENGTH = 2;
	let selectedPlanBeforeModal = '';

	//All opening elements
	document.querySelectorAll('[data-open-modal]').forEach(item => {
		item.addEventListener('click', () => {
			modal.classList.add('active');
			document.querySelector('body').classList.add('backdrop-opened');
			if (item.getAttribute('data-selected-plan'))
				selectedPlanBeforeModal = item.getAttribute('data-selected-plan');
		});
	});

	//All closing elements
	document.querySelectorAll('[data-close-modal]').forEach(item => {
		item.addEventListener('click', () => {
			modal.classList.remove('active');
			document.querySelector('body').classList.remove('backdrop-opened');
		});
	});

	//Modal form
	const containers = document.querySelectorAll('.input-container');

	const inputTimeline = gsap.timeline({defaults: {duration: 1}});

	const start =
		'M0 0.999512C0 0.999512 60.5 0.999512 150 0.999512C239.5 0.999512 300 0.999512 300 0.999512';
	const end =
		'M1 0.999512C1 0.999512 61.5 7.5 151 7.5C240.5 7.5 301 0.999512 301 0.999512';

	containers.forEach(container => {
		const input = container.querySelector('input');

		handleInputAnimation(
			input,
			getInputSiblings(input)?.line,
			getInputSiblings(input)?.placeholder
		);
	});

	//Communication input

	let selectedMethod = 'phone';
	document.querySelector('#modal-form .radio-button input#phone').click();

	document
		.querySelectorAll('#modal-form .radio-button input')
		.forEach(input => {
			input.addEventListener('click', e => {
				if (e.target.id === selectedMethod) return;
				else {
					selectedMethod = e.target.id;
					resetInputs();
				}
			});
		});

	//Dynamic input selection and html inserting
	function resetInputs() {
		const allInputs = document.querySelectorAll('.input-container input');
		const dynamicInputContainer = document.querySelector('#dynamic-input');
		let dynamicPlaceholder = '';
		let dynamicType = '';
		let dynamicName = '';

		allInputs.forEach(input => {
			if (input.name === selectedMethod) return;
			else {
				switch (selectedMethod) {
					case 'phone':
						dynamicPlaceholder = 'Номер телефона';
						dynamicName = 'phone';
						dynamicType = 'tel';
						break;
					case 'email':
						dynamicPlaceholder = 'E-mail';
						dynamicName = 'email';
						dynamicType = 'email';
						break;
					case 'telegram':
						dynamicPlaceholder = 'Telegram';
						dynamicName = 'telegram';
						dynamicType = 'text';
						break;
					case 'whatsapp':
						dynamicPlaceholder = 'WhatsApp';
						dynamicName = 'whatsapp';
						dynamicType = 'text';
						break;
					case 'viber':
						dynamicPlaceholder = 'Viber';
						dynamicName = 'viber';
						dynamicType = 'text';
						break;
				}

				dynamicInputContainer.innerHTML = `
				<p class="placeholder">${dynamicPlaceholder}*</p>
										<input
											type="${dynamicType}"
											name="${dynamicName}"
											class="input dynamic"
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
				`;
			}
		});

		handleInputAnimation(
			dynamicInputContainer.querySelector('input'),
			dynamicInputContainer.querySelector('.elastic-line'),
			dynamicInputContainer.querySelector('.placeholder')
		);
	}

	//Adding animation
	function handleInputAnimation(input, line, placeholder) {
		input.addEventListener('focus', () => {
			if (!input.value) {
				inputTimeline.fromTo(
					line,
					{attr: {d: start}},
					{
						attr: {d: end},
						ease: 'power2.easeOut',
						duration: 0.75,
					}
				);
				inputTimeline.to(
					line,
					{attr: {d: start}, ease: 'elastic.out(3, 0.5)'},
					'<50%'
				);

				inputTimeline.to(
					placeholder,
					{
						top: -20,
						left: 0,
						scale: 0.8,
						duration: 0.3,
						ease: 'power2.easeOut',
					},
					'<10%'
				);
			}
		});

		input.addEventListener('focusout', () => {
			if (!input.value) {
				gsap.to(placeholder, {
					top: 0,
					left: 0,
					scale: 1,
					duration: 0.5,
					ease: 'power2.easeOut',
				});
			}
		});
		input.addEventListener('change', e => {
			if (e.target.type == 'text') {
				let inputText = e.target.value.trim();
				if (inputText.length >= MIN_NAME_LENGTH)
					colorize(SUCCESS_COLOR, line, placeholder);
				else colorize(ERROR_COLOR, line, placeholder);
			}
			if (e.target.type == 'email') {
				let isValid = validateEmail(e.target.value.trim());
				if (isValid) colorize(SUCCESS_COLOR, line, placeholder);
				else colorize(ERROR_COLOR, line, placeholder);
			}
			if (e.target.type == 'tel') {
				let isValid = validatePhone(e.target.value);
				if (isValid) colorize(SUCCESS_COLOR, line, placeholder);
				else colorize(ERROR_COLOR, line, placeholder);
			}
		});
	}

	//Form validation
	const modalForm = document.querySelector('#modal-form');

	modalForm.addEventListener('submit', e => {
		e.preventDefault();

		if (getCurrentPageByURL() !== 'contacts') {
			const nameInput = modalForm.querySelector('input[name="name"]');
			const commMethodInput = modalForm.querySelector(
				'#dynamic-input input.dynamic'
			);

			if (validateForm(nameInput, commMethodInput)) {
				// If form valid
				const selectedCommMethod = commMethodInput?.name;
				const submittedForm = {
					name: nameInput?.value,
					[selectedCommMethod]: commMethodInput?.value,
					...(selectedPlanBeforeModal && {
						selectedPlan: selectedPlanBeforeModal,
					}),
					...(selectedPlanBeforeModal && {page: getCurrentPageByURL()}),
				};
				const submitTimeline = gsap.timeline({
					defaults: {duration: 1},
				});

				submitTimeline.fromTo(
					'#modal .modal-left',
					{opacity: 1},
					{opacity: 0, pointerEvents: 'none', duration: 0.5}
				);

				submitTimeline.fromTo(
					'#modal .modal-right',
					{opacity: 1},
					{opacity: 0, pointerEvents: 'none', duration: 0.5},
					'<'
				);

				if (window.screen.width >= 992) {
					submitTimeline.fromTo(
						'#modal .modal-content',
						{maxWidth: 850, maxHeight: '607px'},
						{maxWidth: 462, maxHeight: '450px'},
						'<80%'
					);
				} else if (window.screen.width < 992) {
					submitTimeline.fromTo(
						'#modal .modal-content',
						{maxWidth: 364, maxHeight: '741px'},
						{maxWidth: 330, maxHeight: '385px'},
						'<80%'
					);
				}

				submitTimeline.fromTo(
					'#modal .modal-submitted',
					{opacity: 0},
					{opacity: 1, pointerEvents: 'all'},
					'<30%'
				);

				setTimeout(() => {
					modal.classList.remove('active');
					document.querySelector('body').classList.remove('backdrop-opened');
				}, 5000);
			}

			//else {code for not valid};
		}
	});

	function validateForm(name, commMethod) {
		const nameLine = getInputSiblings(name)?.line;
		const namePlaceholder = getInputSiblings(name)?.placeholder;

		const commMethodLine = getInputSiblings(commMethod)?.line;
		const commMethodPlaceholder = getInputSiblings(commMethod)?.placeholder;

		let isNameValid = false;
		let isCommMethodValid = false;

		//Name validation
		if (
			name.value.trim().length < MIN_NAME_LENGTH ||
			name.value.trim() === ''
		) {
			colorize(ERROR_COLOR, nameLine, namePlaceholder);
			isNameValid = false;
		} else {
			colorize(SUCCESS_COLOR, nameLine, namePlaceholder);
			isNameValid = true;
		}

		//Communication method validation

		switch (commMethod.name) {
			case 'phone':
				if (!validatePhone(commMethod.value)) {
					colorize(ERROR_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = false;
				} else {
					colorize(SUCCESS_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = true;
				}
				break;
			case 'email':
				if (!validateEmail(commMethod.value)) {
					colorize(ERROR_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = false;
				} else {
					colorize(SUCCESS_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = true;
				}
				break;

			default:
				if (commMethod.value.trim().length <= MIN_NAME_LENGTH) {
					colorize(ERROR_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = false;
				} else {
					colorize(SUCCESS_COLOR, commMethodLine, commMethodPlaceholder);
					isCommMethodValid = true;
				}
				break;
		}

		return isNameValid && isCommMethodValid;
	}

	function validateEmail(email) {
		let re = /\S+@\S+\.\S+/;
		return re.test(email);
	}

	function validatePhone(phone) {
		let re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
		return re.test(phone);
	}

	//Text & line colorizing
	function colorize(color, line, placeholder) {
		gsap.to(line, {stroke: color, duration: 0.75});
		gsap.to(placeholder, {color, duration: 0.75});
	}

	function getInputSiblings(input) {
		const line = input.parentElement.querySelector('.elastic-line');
		const placeholder = input.parentElement.querySelector('.placeholder');
		return {line, placeholder};
	}

	function getCurrentPageByURL() {
		const url = window.location.href;

		const parts = url.split('/');

		const lastPart = parts[parts.length - 1];

		const pageName = lastPart.split('.')[0];
		return pageName;
	}

	function getPageLanguage() {
		const url = window.location.href;

		const parsedUrl = new URL(url);

		const pathSegments = parsedUrl.pathname.split('/');

		const languageCode = pathSegments[1];

		return languageCode;
	}

	//Footer date
	document.querySelector('#footer-date').innerHTML = new Date().getFullYear();
});
