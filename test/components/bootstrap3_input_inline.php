 <?php if(  $valores["config.typeError"] == NULL){?><div class="form-group"><?php }else{?><div class="form-group has-<?php echo $valores["config.typeError"];?>"><?php }?> <label for="<?php echo $valores["config.id"];?>" class="control-label input-<?php echo $valores["config.size"];?>"><?php echo $valores["config.label"];?></label>  <input class="form-control input-<?php echo $valores["config.size"];?>" type="<?php echo $valores["config.type"];?>" id="<?php echo $valores["config.id"];?>" name="<?php echo $valores["config.name"];?>" placeholder="<?php echo $valores["config.placeholder"];?>" value="<?php echo $valores["config.value"];?>">     </div> 