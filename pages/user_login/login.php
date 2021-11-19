<section id="home" class="login">

  <div class="home-presentation">

    <img src="./assets/images/home-presentation-bg.jpg" alt="Background image" class="home-presentation-background">

    <h1>Hey welcome back to AuthWorld!</h1>
    <p>Sign In to continue to your account.</p>

  </div>

  <div class="home-form">

    <h1>Sign<span>In</span></h1>

    <form action="" method="POST">

      <input type="text" placeholder="Username or Email Address" name='username' required>

      <input type="password" placeholder="Password" name='password' required>

      <button type="submit" class="enter-btn">Login</button>

    </form>

  </div>

</section>

<?php

// Pegando os dados do formulário
$user_name = @$_REQUEST['username'];
$user_password = @$_REQUEST['password'];

// Verificando Usuário
$has_user = @$pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario = '{$user_name}' OR email_usuario = '{$user_name}'");
$has_user->execute();

$fetch_user = $has_user->fetchAll();

// Verificando Senha
$has_password =  $pdo->prepare("SELECT senha_usuario FROM usuarios WHERE nome_usuario = '{$user_name}' OR email_usuario = '{$user_name}'");
$has_password->execute();

$fetch_password = $has_password->fetchAll();

// Percorrendo o banco de dados e pegando os valores que são iguais aos informados pelo usuário
foreach ($fetch_user as $key => $value) {
  $verify_user_name = $value['nome_usuario'];
  $verify_user_email = $value['email_usuario'];
}

foreach ($fetch_password as $key => $value) {
  $verify_password = password_verify($user_password, $value['senha_usuario']);
}

// Verificando se os valores informados pelo usuario são iguais aos retornados pelo banco de dados
if ($user_name == @$verify_user_name or $user_name == @$verify_user_email and @$verify_password) {
  echo '<script>console.log("usuário e senha encontrado")</script>';
} else if ($user_name !== @$verify_user_name or $user_name !== @$verify_user_email and !@$verify_password) {
  echo '<script>alert("usuário ou senha incorretos")</script>';
}

?>