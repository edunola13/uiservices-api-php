 <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "cabecera"){?> <div class="carousel slide" data-ride="carousel"> <ol class="carousel-indicators"> </ol> <div class="carousel-inner" role="listbox">  <?php }?>                <?php if(  $valores["config.seccion"] == NULL || $valores["config.seccion"] == "pie"){?>          </div><!-- Controls --> <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only"><?php echo $valores["config.labelPrevious"];?></span></a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only"><?php echo $valores["config.labelNext"];?></span></a></div> <?php }?> 