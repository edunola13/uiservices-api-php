<?php $tags= new UiServices\Tags();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>UI Services - PHP</title>
    <?php $tags->theme();?>
    <?php $tags->javaScript();?>
</head>
<body>
    <?php $tags->setProject('bootstrap3'); ?>
    
    <?php $tags->dropDownMenu('Menu Desplegable', 'primary');?>
        <?php $tags->navItem('Opcion 1', 'url1');?>
        <?php $tags->navItem('Opcion 2', 'url2', 'active');?>
        <?php $tags->navItem('Opcion 3', 'url3');?>
    <?php $tags->endDropDownMenu(); ?>
    
    <?php $tags->form('12', 'POST', 'pepe.com', '', 'Label'); ?>
        <?php $tags->input('Un Input', 'idInput', 'nameInput', 'text', 'Valor');?>
        <?php $tags->textarea('TextArea', 'idText', 'nameText', '5', 'Placeholder', '', 'Mensaje de Informacion', 'success', 'lg'); ?>
        <?php $tags->booleanCheckbox('Label', 'idCheck', 'nameCheck', TRUE, 'error', 'md');?>
    
        <?php $tags->checkbox('Check', 'idCheck2', 'nameCheck2', 'value', FALSE, NULL, 'sm');?>
            <?php $tags->checkboxOption('Opcion 1', 'valueOtro');?>
            <?php $tags->checkboxOption('Opcion 2', 'value');?>
        <?php $tags->endCheckbox();?>
    
        <?php $tags->checkbox('Check', 'idCheck2', 'nameCheck2', array('value', 2), FALSE, 'warning');?>
            <?php $tags->checkboxOption('Opcion 1', 'value');?>
            <?php $tags->checkboxOption('Opcion 2', '3');?>
            <?php $tags->checkboxOption('Opcion 3', '2');?>
            <?php $tags->checkboxOption('Opcion 4', 4);?>
        <?php $tags->endCheckbox();?>
    
        <?php $tags->radio('Radio', 'idRadio', 'nameRadio', 'value', TRUE, NULL, 'lg');?>
            <?php $tags->radioOption('Opcion 1', 'value');?>
            <?php $tags->radioOption('Opcion 2', 'otro');?>
            <?php $tags->radioOption('Opcion 3', 'value2');?>
        <?php $tags->endRadio(); ?>
    
        <?php $tags->select('Select', 'idSelect', 'nameSelect', array('value', 3), '', TRUE, 'Mensaje', 'error', 'sm');?>
            <?php $tags->selectOption('Opcion 1', 2)?>
            <?php $tags->selectOption('Opcion 2', 3)?>
            <?php $tags->selectOption('Opcion 3', 'value')?>
        <?php $tags->endSelect();?>

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
    
        <?php $tags->checkboxFull('Full Check', 'idCheck3', 'nameCheck3', array('1', 2), $var, 0, 1, FALSE, 'error')?>
        <?php $tags->checkboxFull('Full Check - Object', 'idCheck4', 'nameCheck4', array(3, 2), $varsObject, 'nombre', 'id')?>
        <?php $tags->radioFull('Radio Full - Object', 'idRadio2', 'nameRadio2', '2', $varsObject, 'nombre', 'id', FALSE, '', 'sm');?> 
    
        <?php $tags->selectFull(FALSE, 'Select Full', 'idSelect2', 'nameSelect2', array('1', 2), $var, 0,1,'Elija', '0'); ?>
    
        <?php $tags->boxButton() ?>    
            <?php $tags->button('Ingresar', '', 'submit');?>
        <?php $tags->endBoxButton(); ?>
    <?php $tags->endForm();?>
</body>
</html>