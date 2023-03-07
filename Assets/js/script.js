const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	const email = event.target.elements.email.value;
	
	// Aqui você pode adicionar o código para enviar o email para um servidor ou banco de dados
	alert(`O e-mail ${email} foi cadastrado com sucesso na newsletter!`);
});