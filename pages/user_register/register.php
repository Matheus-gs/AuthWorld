<section id="home" class="register">

  <div class="home-presentation register">

    <img src="./assets/images/home-presentation2-bg.jpg" alt="Background image" class="home-presentation-background">

    <h1>Hey welcome to AuthWorld!</h1>
    <p>We are proud to have you here!</p>

  </div>

  <div class="home-form">

    <h1>Sign<span>Up</span></h1>

    <form action="" method="POST">

      <input type="text" placeholder="Username" name='username' required maxlength="20">

      <input type="email" placeholder="Email Address" name='email' required maxlength="40">

      <input type="password" placeholder="Password" name='password' required maxlength="20">

      <button type="submit" class="enter-btn">Register</button>

    </form>

  </div>

</section>

<?php

// Pegando os dados do formulário
$user_name = @$_POST['username'];
$user_email = @$_POST['email'];
$user_password = @$_POST['password'];

// Criptografando senha
$user_password_hash = password_hash($user_password, PASSWORD_BCRYPT);

// Verificando se já existe usuários com o mesmo nome ou email
$has_user = $pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario ='{$user_name}' and email_usuario = '{$user_email}'");
$has_user->execute();

$count = $has_user->rowCount();

// Cadastrando no banco de dados
if (
  $user_name !== null and
  $user_email !== null and
  $user_password !== null and $count == 0
) {

  try {
    $sql = "INSERT INTO usuarios (
      id,
      nome_usuario,
      email_usuario,
      senha_usuario
    ) VALUES (
      null,
      '{$user_name}',
      '{$user_email}',
      '{$user_password_hash}'
    )";

    $pdo->exec($sql);

    echo '<script>alert("Usuario cadastrado com sucesso")</script>';
    echo '<script>location.href="?page=login"</script>';
    // 
  } catch (PDOException $e) {

    echo '<script>console.log("Falha ao cadastrar")</script>';

    echo $sql . "<br>" . $e->getMessage();
  }

  $pdo = null;
  // 
} else if ($count !== 0) {

  print '<script>alert("Nome de usuário já existente ou email inválido, verifique os dados e tente novamente.")</script>';
}
?>