<!DOCTYPE html>
<html lang="es">
<head>
    <title>UI Services - PHP</title>
    <?php Tags::theme();?>
    <?php Tags::javaScript();?>
</head>
<body>
    <?php Tags::setProyecto('bootstrap3'); ?>
    
    <?php Tags::dropDownMenu('Menu Desplegable', 'primary');?>
        <?php Tags::navItem('Opcion 1', 'url1');?>
        <?php Tags::navItem('Opcion 2', 'url2', 'active');?>
        <?php Tags::navItem('Opcion 3', 'url3');?>
    <?php Tags::endDropDownMenu(); ?>
    
    <?php Tags::form('12', 'POST', 'pepe.com', '', 'Label'); ?>
        <?php Tags::input('Un Input', 'idInput', 'nameInput', 'text', 'Valor');?>
        <?php Tags::textarea('TextArea', 'idText', 'nameText', '5', 'Placeholder', '', 'Mensaje de Informacion', 'success', 'lg'); ?>
        <?php Tags::booleanCheckbox('Label', 'idCheck', 'nameCheck', TRUE, 'error', 'md');?>
    
        <?php Tags::checkbox('Check', 'idCheck2', 'nameCheck2', 'value', FALSE, NULL, 'sm');?>
            <?php Tags::checkboxOption('Opcion 1', 'valueOtro');?>
            <?php Tags::checkboxOption('Opcion 2', 'value');?>
        <?php Tags::endCheckbox();?>
    
        <?php Tags::checkbox('Check', 'idCheck2', 'nameCheck2', array('value', 2), FALSE, 'warning');?>
            <?php Tags::checkboxOption('Opcion 1', 'value');?>
            <?php Tags::checkboxOption('Opcion 2', '3');?>
            <?php Tags::checkboxOption('Opcion 3', '2');?>
            <?php Tags::checkboxOption('Opcion 4', 4);?>
        <?php Tags::endCheckbox();?>
    
        <?php Tags::radio('Radio', 'idRadio', 'nameRadio', 'value', TRUE, NULL, 'lg');?>
            <?php Tags::radioOption('Opcion 1', 'value');?>
            <?php Tags::radioOption('Opcion 2', 'otro');?>
            <?php Tags::radioOption('Opcion 3', 'value2');?>
        <?php Tags::endRadio(); ?>
    
        <?php Tags::select('Select', 'idSelect', 'nameSelect', array('value', 3), '', TRUE, 'Mensaje', 'error', 'sm');?>
            <?php Tags::selectOption('Opcion 1', 2)?>
            <?php Tags::selectOption('Opcion 2', 3)?>
            <?php Tags::selectOption('Opcion 3', 'value')?>
        <?php Tags::endSelect();?>

        <?php 
            $var= array();
            $var[]= array('Opcion 1', '1');
            $var[]= array('Opcion 2', '2');
            $var[]= array('Opcion 3', 3);
            class Prueba{
                public $nombre;
                public $id;
                public function __construct($nom, $i) {$this->nombre= $nom; $this->id= $i;}
            }
            
            $varOb1= new Prueba('label 1', '1'); 
            $varOb2= new Prueba('label 2', '2'); 
            $varOb3= new Prueba('label 3', 3);
            $varsObject= array($varOb1, $varOb2, $varOb3);
        ?>
    
        <?php Tags::checkboxFull('Full Check', 'idCheck3', 'nameCheck3', array('1', 2), $var, NULL, NULL, FALSE, 'error')?>
        <?php Tags::checkboxFull('Full Check - Object', 'idCheck4', 'nameCheck4', array(3, 2), $varsObject, 'nombre', 'id')?>
        <?php Tags::radioFull('Radio Full - Object', 'idRadio2', 'nameRadio2', '2', $varsObject, 'nombre', 'id', FALSE, '', 'sm');?> 
    
        <?php Tags::selectFull(FALSE, 'Select Full', 'idSelect2', 'nameSelect2', array('1', 2), $var, NULL,NULL,'Elija', '0'); ?>
    
        <?php Tags::botonera(); ?>    
            <?php Tags::button('Ingresar', '', 'submit');?>
        <?php Tags::endBotonera(); ?>
    <?php Tags::endForm();?>
</body>
</html>