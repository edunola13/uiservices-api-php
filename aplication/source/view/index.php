<!DOCTYPE html>
<html lang="es">
<head>
    <title>Enola PHP</title>
    <?php Tags::theme();?>
    <?php Tags::javaScript();?>
</head>
<body>
    <?php Tags::button_badge('U Boton', '34', 'ID', 'pepe()', 'button', 'primary', 'sm'); ?>
    <?php Tags::button('Otro Boton', 'id', 'pepe()', 'button'); ?>
    <?php Tags::jumbotron('Un titulo', 'asdd ada da d ad ad ad ad ', 'pepe.com', 'label', 'primary', 'lg'); ?>
    <?php Tags::thumbnail('asdadad', 'adasdad da da d ad', 'adad.com', 'Label', null, null, 'danger', 'sm'); ?>
    <?php Tags::form('12', 'POST', 'pepe.com', '', 'Label'); ?>
        <?php Tags::input('Un  Label', '1', '2', 'text', 'Valor', '', '');?>
        <?php Tags::input('Un  Label', '1', '2', 'text', 'Valor', '', 'as', 'error', 'sm');?>
        <?php Tags::textarea('EL Label', '2', 'name', '3', 'eee', '', 'ss', 'success', 'lg'); ?>
        <?php Tags::boolean_checkbox('Label', 'bol', 'as', TRUE, 'error', 'md');?>
        <?php Tags::checkbox('Check', 'as', 'asee', 'pepe', 'no', '', 'sm');?>
            <?php Tags::checkbox_option('Ahh', 'pepa');?>
            <?php Tags::checkbox_option('Ahsssh', 'pepe');?>
        <?php Tags::end_checkbox();?>
        <?php Tags::checkbox('Check', 'as2', 'ase', array('pepe', 2), 'no', 'warning');?>
            <?php Tags::checkbox_option('Ahh', 'pepa');?>
            <?php Tags::checkbox_option('Ahsssh', 'pepe');?>
            <?php Tags::checkbox_option('Ahh', 'pepa');?>
            <?php Tags::checkbox_option('Ahsssh', 2);?>
        <?php Tags::end_checkbox();?>
        <?php 
            $var= array();
            $var[]= array('prueba', 'pepe');
            $var[]= array('prueba', 'pepa');
            $var[]= array('prueba', '2');
        ?>
        <?php Tags::checkbox_full('Full Check', 'full', 'full', array('pepa', 2), $var, FALSE, 'error')?>
        <?php Tags::radio_full('Radio Full', 'fuli', 'pepan', 'pepa', $var, FALSE, '', 'sm');?>
        <?php Tags::radio('Un Radio', 'rad', 'rade', 'rad1', 'si', '', 'lg');?>
            <?php Tags::radio_option('puti', 'rad1');?>
            <?php Tags::radio_option('puti', 'rad2');?>
            <?php Tags::radio_option('puti', 'rad3');?>
        <?php Tags::end_radio(); ?>
        <?php Tags::select('Select', 'sele', 'sene', array('pepa', 3), 'pepe()', FALSE, 'pepe', 'error', 'sm');?>
            <?php Tags::select_option('prueba', 2)?>
            <?php Tags::select_option('prueba2', 3)?>
            <?php Tags::select_option('prueba3', 'pepa')?>
        <?php Tags::end_select();?>
        <?php Tags::select_full(FALSE, 'SElect Full', 'full', 'fuli', array('pepa', 2), $var); ?>
        <?php Tags::input_button('12', 'aaa', 'text', 'ahhhhh', 'Boton', '', 'a', FALSE, 'sd', 'primary', 'sm');?>
    <?php Tags::end_form();?>
    
    <?php Tags::form_inline('asas', 'POST', 'pepe.com');?>
        <?php Tags::input_inline('', 'as', 'si', 'text', 'algo', '', 'error', 'sm');?>
        <?php Tags::input_inline('Label', 'as', 'si', 'text', 'algo');?>
        <?php Tags::checkbox_full('Ahh', 'as', 'asd', 'pepe', $var, TRUE);?>
        <?php Tags::select_simple('asda', 'as', 'pepa', '', FALSE, 'sm');?>
            <?php Tags::select_option('prueba as a sa as', 2)?>
            <?php Tags::select_option('prueba2', 3)?>
            <?php Tags::select_option('prueba3', 'pepa')?>
        <?php Tags::end_select();?>
        <?php Tags::select_full(TRUE, 'SElect Full', 'full', 'fuli', array('pepa', 2), $var, '', TRUE); ?>
        <?php Tags::button('aaa');?>
    <?php Tags::end_form_inline(); ?>
    
    <?php Tags::drop_down_menu('Ehh Gil', 'primary');?>
        <?php Tags::nav_item('asas', 'asasas');?>
        <?php Tags::nav_item('asas', 'asasas');?>
        <?php Tags::nav_item('asas', 'asasas');?>
    <?php Tags::end_drop_down_menu(); ?>
    
    <?php Tags::button_group('Ehhh');?>
        <?php Tags::button('pepe');?>
        <?php Tags::button('pepe');?>
        <?php Tags::button('pepe');?>
    <?php Tags::end_button_group(); ?>
    
    <?php Tags::button_toolbar();?>
        <?php Tags::button_group('Ehhh');?>
            <?php Tags::button('asas', 'asas', '', 'button', 'primary');?>
            <?php Tags::button('pepe');?>
            <?php Tags::button('pepe');?>
        <?php Tags::end_button_group(); ?>
        <?php Tags::button_group('Ehhh', FALSE, 'lg');?>
            <?php Tags::button('pepe');?>
            <?php Tags::button('pepe');?>
            <?php Tags::button('pepe');?>
        <?php Tags::end_button_group(); ?>
    <?php Tags::end_button_toolbar();?>
</body>
</html>