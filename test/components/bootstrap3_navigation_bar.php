 <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "cabecera"){?> <nav class="navbar navbar-default <?php echo $valores["config.position"];?> <?php echo $valores["config.inverse"];?>" role="navigation"> <?php if(  $valores["config.containerFluid"] == "si"){?><div class="container-fluid"> <?php }else{?><div class="container"><?php }?><div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Desplegar navegación</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?php echo $valores["config.href"];?>"><?php echo $valores["config.logo"];?></a> </div> <div class="collapse navbar-collapse navbar-ex1-collapse">     <?php }?>          <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "pie"){?>          </div></div></nav> <?php }?> 