const questions = document.querySelectorAll('.question-wrapper');
questions.forEach(question => {
	question.addEventListener('click', () => {
		//Making only 1 active at the time
		questions.forEach(q =>
			q === question ? '' : q.classList.remove('active')
		);
		question.classList.toggle('active');
	});
});
