    <?php if(  $valores["config.checked"] == "si"){?> <option value="<?php echo $valores["config.value"];?>" selected> <?php }else{?> <option value="<?php echo $valores["config.value"];?>"> <?php }?>          <?php echo $valores["config.label"];?>  </option>