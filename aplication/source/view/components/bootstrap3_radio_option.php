 <?php if(  $valores["config.inline"] == "no"){?> <div class="radio"> <label for="<?php echo $valores["config.id"];?>"> <?php if(  $valores["config.checked"] == "si"){?> <input type="radio" name="<?php echo $valores["config.name"];?>" id="<?php echo $valores["config.id"];?>" value="<?php echo $valores["datos.value"];?>" checked="checked"> <?php }else{?> <input type="radio" name="<?php echo $valores["config.name"];?>" id="<?php echo $valores["config.id"];?>" value="<?php echo $valores["datos.value"];?>"> <?php }?> <?php echo $valores["config.label"];?> </label> </div> <?php }else{?>    <label class="radio-inline" for="<?php echo $valores["config.id"];?>"> <?php if(  $valores["config.checked"] == "si"){?> <input type="radio" name="<?php echo $valores["config.name"];?>" id="<?php echo $valores["config.id"];?>" value="<?php echo $valores["datos.value"];?>" checked="checked"> <?php }else{?> <input type="radio" name="<?php echo $valores["config.name"];?>" id="<?php echo $valores["config.id"];?>" value="<?php echo $valores["datos.value"];?>"> <?php }?> <?php echo $valores["config.label"];?> </label> <?php }?> 