 <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "cabecera"){?> <?php if(  $valores["config.vertical"] == "no"){?><div class="btn-group btn-group-<?php echo $valores["config.size"];?>" role="group" aria-label="<?php echo $valores["config.label"];?>"> <?php }else{?><div class="btn-group btn-group-vertical btn-group-<?php echo $valores["config.size"];?>" role="group" aria-label="<?php echo $valores["config.label"];?>"><?php }?> <?php }?>            <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "pie"){?></div><?php }?> 