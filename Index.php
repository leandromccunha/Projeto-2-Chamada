<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Colégio Pedro II</title>

  <link rel="icon" href="Imagens/favi.ico" type="image/ico" sizes="64x64">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css">
</head>

<body>

  <div id="login-box">

    <div id="login-logo">
      <img src="logo.png" id="logo" alt="CP2">
    </div>

    <div class="Container">
        <form method="POST" class="form" action="Controle/entra.php">
          <div class="form-group">
            <label>Matrícula: <input name="nomeUsuario" type="text" required placeholder="Login" class="form-control"/></label>
          </div>
          <div class="form-group">
            <label>Senha: <input name="senha" type="password" required minlength="6" maxlength="12" placeholder="******" class="form-control"/></label>
          </br>  <a href="cadastro.php" name="entrar">Cadastre-se</a>
          </div>


          <input type="submit" class="botao btn btn-primary" value="Entrar"/>
        </form>
    </div>

  </div>

</body>
</html>
