function validarFormulario(event) {
  event.preventDefault(); // Impede o envio imediato do formulário

  const name = document.getElementById('name').value.trim();
  const nickname = document.getElementById('nickname').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const password = document.getElementById('password').value.trim();
  const confirmPassword = document.getElementById('confirmPassword').value.trim();
  const errorMessage = document.getElementById('errorMessage');
  const successMessage = document.getElementById('successMessage');
 
  errorMessage.style.display = 'none';
  successMessage.style.display = 'none';
  errorMessage.innerText = '';

  // Verificar se os campos estão preenchidos
  if (!name || !nickname || !email || !phone || !password || !confirmPassword) {
      errorMessage.innerText = 'Por favor, preencha todos os campos.';
      errorMessage.style.display = 'block';
      return; // Não enviar o formulário
  }

  // Verificar se as senhas coincidem
  if (password !== confirmPassword) {
      errorMessage.innerText = 'As senhas não coincidem.';
      errorMessage.style.display = 'block';
      return; // Não enviar o formulário
  }

  // Verificar a validade da senha
  if (password.length < 6) {
      errorMessage.innerText = 'A senha deve ter pelo menos 6 caracteres.';
      errorMessage.style.display = 'block';
      return; // Não enviar o formulário
  }

  // Mostrar mensagem de sucesso
  successMessage.innerText = 'Registro realizado com sucesso!';
  successMessage.style.display = 'block';

  // Após 3 segundos, esconder a mensagem de sucesso
  setTimeout(() => {
      successMessage.style.display = 'none';
  }, 3000);

  // Submeter o formulário após a validação bem-sucedida
  document.getElementById('registerForm').submit();
}
