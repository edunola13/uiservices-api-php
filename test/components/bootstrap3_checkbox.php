 <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "cabecera"){?> <?php if(  $valores["config.typeError"] == NULL){?><div class="form-group"><?php }else{?><div class="form-group has-<?php echo $valores["config.typeError"];?>"><?php }?> <label class="col-md-2 control-label input-<?php echo $valores["config.size"];?>" for="checkboxes"><?php echo $valores["config.label"];?></label> <div class="col-md-10"> <?php }?>           <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "pie"){?> </div></div> <?php }?> 