document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita o envio do formulário e o recarregamento da página.
  
    const nickname = document.getElementById('nickname').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('errorMessage');
    const successMessage = document.getElementById('successMessage');
  
    // Escondendo mensagens anteriores
    errorMessage.style.display = 'none';
    successMessage.style.display = 'none';
  
    // Validações básicas
    if (!nickname || !password) {
      errorMessage.innerText = 'Por favor, preencha todos os campos.';
      errorMessage.style.display = 'block';
      return;
    }
  
    if (password.length < 6) {
      errorMessage.innerText = 'A senha deve ter pelo menos 6 caracteres.';
      errorMessage.style.display = 'block';
      return;
    }
  
    // Mensagem de sucesso
    successMessage.innerText = 'Login realizado com sucesso!';
    successMessage.style.display = 'block';
  
    // Ocultar mensagem de sucesso após 2 segundos
    setTimeout(() => {
      successMessage.style.display = 'none';
    }, 2000);
  });
  