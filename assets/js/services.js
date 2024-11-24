const reasons = document.querySelectorAll('.reason');
reasons.forEach(reason => {
	reason.addEventListener('click', () => {
		//Making only 1 active at the time
		// reasons.forEach(r => (r === reason ? '' : r.classList.remove('active')));
		reason.classList.toggle('active');
	});
});

const MIN_NAME_LENGTH = 2;
const ERROR_COLOR = '#FF3B32';
const SUCCESS_COLOR = '#202AE9';

const feedbackForm = document.querySelector('.feedback-form');

feedbackForm.addEventListener('submit', e => {
	e.preventDefault();

	const nameInput = feedbackForm.querySelector('input[name="name"]');
	const phoneInput = feedbackForm.querySelector('input[name="phone"]');
	const emailInput = feedbackForm.querySelector('input[name="email"]');

	if (validateForm(nameInput, phoneInput, emailInput)) {
		// If form valid
		const submittedForm = {
			name: nameInput?.value,
			email: emailInput?.value,
			phone: phoneInput?.value,
			page: getCurrentPageByURL(),
		};

		// console.log(submittedForm);

		const submitTimeline = gsap.timeline({
			defaults: {duration: 0},
		});

		submitTimeline.fromTo(
			'#modal .modal-left',
			{opacity: 1},
			{opacity: 0, pointerEvents: 'none'}
		);

		submitTimeline.fromTo(
			'#modal .modal-right',
			{opacity: 1},
			{opacity: 0, pointerEvents: 'none'},
			'<'
		);

		if (window.screen.width >= 992) {
			submitTimeline.fromTo(
				'#modal .modal-content',
				{maxWidth: 850, maxHeight: '607px'},
				{maxWidth: 462, maxHeight: '450px'},
				'<'
			);
		} else if (window.screen.width < 992) {
			submitTimeline.fromTo(
				'#modal .modal-content',
				{maxWidth: 364, maxHeight: '741px'},
				{maxWidth: 330, maxHeight: '385px'},
				'<'
			);
		}

		submitTimeline.fromTo(
			'#modal .modal-submitted',
			{opacity: 0},
			{opacity: 1, pointerEvents: 'all'},
			'<'
		);

		modal.classList.add('active');
		document.querySelector('body').classList.add('backdrop-opened');

		setTimeout(() => {
			modal.classList.remove('active');
			document.querySelector('body').classList.remove('backdrop-opened');
		}, 5000);
	}

	//else {code for not valid};
});

function validateForm(name, phoneInput, emailInput) {
	const nameLine = getInputSiblings(name)?.line;
	const namePlaceholder = getInputSiblings(name)?.placeholder;

	const phoneInputLine = getInputSiblings(phoneInput)?.line;
	const phoneInputPlaceholder = getInputSiblings(phoneInput)?.placeholder;

	const emailInputLine = getInputSiblings(emailInput)?.line;
	const emailInputPlaceholder = getInputSiblings(emailInput)?.placeholder;

	let isNameValid = false;
	let isPhoneInputValid = false;
	let isEmailInputValid = false;

	//Name validation
	if (name.value.trim().length <= MIN_NAME_LENGTH || name.value.trim() === '') {
		colorize(ERROR_COLOR, nameLine, namePlaceholder);
		isNameValid = false;
	} else {
		colorize(SUCCESS_COLOR, nameLine, namePlaceholder);
		isNameValid = true;
	}

	//Phone validation

	if (!validatePhone(phoneInput.value) || phoneInput.value.trim() === '') {
		colorize(ERROR_COLOR, phoneInputLine, phoneInputPlaceholder);
		isPhoneInputValid = false;
	} else {
		colorize(SUCCESS_COLOR, phoneInputLine, phoneInputPlaceholder);
		isPhoneInputValid = true;
	}

	//Email validation

	if (!validateEmail(emailInput.value) || emailInput.value.trim() === '') {
		colorize(ERROR_COLOR, emailInputLine, emailInputPlaceholder);
		isEmailInputValid = false;
	} else {
		colorize(SUCCESS_COLOR, emailInputLine, emailInputPlaceholder);
		isEmailInputValid = true;
	}

	return isNameValid && isPhoneInputValid && isEmailInputValid;
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
