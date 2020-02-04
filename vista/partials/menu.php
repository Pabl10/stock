<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">STOCK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="index.php">Principal</a></li>
      <li><a href="crud_usuario.php">Mantenimiento</a></li>
      <?php if (!isset($_SESSION['usuario'])) { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="registro.php">Registro</a></li>
      <?php } else { ?>
      <?php if ($_SESSION['usuario']['privilegio'] == 1) { ?>
        <li><a href="admin.php">Admin</a></li>
      <?php } else { ?>
        <li><a href="usuario.php">Usuario</a></li>
      <?php }} ?>
    </ul>
  </div>
</nav>