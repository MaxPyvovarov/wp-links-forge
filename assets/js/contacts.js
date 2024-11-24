//Modal form
const containers = document.querySelectorAll('.input-container');

const inputTimeline = gsap.timeline({defaults: {duration: 1}});

const start =
	'M0 0.999512C0 0.999512 60.5 0.999512 150 0.999512C239.5 0.999512 300 0.999512 300 0.999512';
const end =
	'M1 0.999512C1 0.999512 61.5 7.5 151 7.5C240.5 7.5 301 0.999512 301 0.999512';
const ERROR_COLOR = '#FF3B32';
const SUCCESS_COLOR = '#202AE9';
const MIN_NAME_LENGTH = 2;

const modal = document.querySelector('#modal');

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
document
	.querySelector('#modal-form.contacts-form .radio-button input#phone')
	.click();

document
	.querySelectorAll('#modal-form.contacts-form .radio-button input')
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

	const placeholders = {
		RU: 'Номер телефона',
		EN: 'Phone number',
		UA: 'Номер телефону',
	};

	allInputs.forEach(input => {
		if (input.name === selectedMethod) return;
		else {
			switch (selectedMethod) {
				case 'phone':
					dynamicPlaceholder = placeholders[defaultLang] || placeholders['ua'];
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
const contactsForm = document.querySelector('#modal-form.contacts-form');

contactsForm.addEventListener('submit', e => {
	e.preventDefault();

	const nameInput = contactsForm.querySelector('input[name="name"]');
	const commMethodInput = contactsForm.querySelector(
		'#dynamic-input input.dynamic'
	);

	if (validateForm(nameInput, commMethodInput)) {
		// If form valid
		const selectedCommMethod = commMethodInput?.name;
		const submittedForm = {
			name: nameInput?.value,
			[selectedCommMethod]: commMethodInput?.value,
		};
		const submitTimeline = gsap.timeline({
			defaults: {duration: 1},
		});

		modal.classList.add('active');
		document.querySelector('body').classList.add('backdrop-opened');

		console.log(submittedForm);

		setTimeout(() => {
			modal.classList.remove('active');
			document.querySelector('body').classList.remove('backdrop-opened');
		}, 5000);
	}

	//else {code for not valid};
});

function validateForm(name, commMethod) {
	const nameLine = getInputSiblings(name)?.line;
	const namePlaceholder = getInputSiblings(name)?.placeholder;

	const commMethodLine = getInputSiblings(commMethod)?.line;
	const commMethodPlaceholder = getInputSiblings(commMethod)?.placeholder;

	let isNameValid = false;
	let isCommMethodValid = false;

	//Name validation
	if (name.value.trim().length < MIN_NAME_LENGTH || name.value.trim() === '') {
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
