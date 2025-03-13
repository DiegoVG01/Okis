
  <?php
		if (isset($title))
		{
	?>

<nav class="navbar navbar-default navbar-vertical">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="stock.php">OKIS</a>
    </div>

    <div class="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php if (isset($active_productos)){echo $active_productos;}?>"><a href="stock.php"><i class='glyphicon glyphicon-barcode'></i> Inventario</a></li>
        <li class="<?php if (isset($active_categoria)){echo $active_categoria;}?>"><a href="categorias.php"><i class='glyphicon glyphicon-tags'></i> Categorías</a></li>
        <li class="<?php if (isset($active_usuarios)){echo $active_usuarios;}?>"><a href="usuarios.php"><i class='glyphicon glyphicon-user'></i> Usuarios</a></li>
        
      </ul>
      </ul>
    </div>
  </div>
</nav>

<!-- Navbar superior solo para "Soporte" y "Salir" -->
<nav class="navbar navbar-default navbar-top">
  <div class="container-fluid">
    <div class="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://portal.undc.edu.pe/contactanos/" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Soporte</a></li>
        <li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>



	<?php
		}
	?>
