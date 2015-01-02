<?php
    function theme($nombre = 'base'){
        $api= ApiUi::getInstance();    
        return $api->theme($nombre);               
    }    
    /**
     * Java Script
     * @param type $nombre
     * @return type 
     */
    function javaScript($nombre = 'base'){
        $api= ApiUi::getInstance();    
        return $api->javaScript($nombre);
    }    
    /*
     * DEFINICION DE TODOS LOS COMPONENTES 
     */    
    /*
     * Charts
     */
    function column_parsed($tableId, $title, $units){
        $api= ApiUi::getInstance();
        $valores= array('config.tableId' => $tableId, 'config.title' => $title, 'config.units' => $units);
        $api->componente('column-parsed', $valores);
    }
    function date_countdown($id, $date, $width, $height){
        $api= ApiUi::getInstance();
        $valores= array('config.id' => $id, 'config.date' => $date, 'config.width' => $width, 'config.height' => $height);
        $api->componente('date_countdown', $valores);
    }    
    /*
     * Estaticos
     */        
    function address($name, $dir, $locale, $tel){
        $api= ApiUi::getInstance();
        $valores= array('config.nombre' => $name, 'config.direccion' => $dir, 'config.localidad' => $locale, 'config.telefono' => $tel);
        $api->componente('address', $valores);
    }    
    function alert_message($type, $message, $strong = NULL){
        if($message != NULL){
            $api= ApiUi::getInstance();
            $valores= array('config.type' => $type, 'config.strong' => $strong, 'config.message' => $message);
            $api->componente('alert_message', $valores);
        }
    }    
    function badge($label, $href, $badge = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'config.href' => $href, 'config.badge' => $badge);
        $api->componente('badge', $valores);
    }    
    function blockquote($text, $source){
        $api= ApiUi::getInstance();
        $valores= array('config.texto' => $text, 'config.fuente' => $source);
        $api->componente('blockquote', $valores);
    }    
    function fixed_footer(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('fixed_footer', $valores);
    }    
    function end_fixed_footer(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('fixed_footer', $valores);
    }    
    function form_search($name, $label, $button_id, $onClick, $placeholder, $value = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.input.name' => $name, 'config.input.placeholder' => $placeholder, 'config.label' => $label,
            'config.id' => $button_id, 'config.onclick' => $onClick, 'datos.value_input' => $value);
        $api->componente('form_search', $valores);
    }    
    function iframe($src, $ratio = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.src' => $src, 'config.ratio' => $ratio);
        $api->componente('iframe', $valores);
    }    
    function image($alt, $src, $type = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.alt' => $alt, 'config.src' => $src, 'config.type' => $type);
        $api->componente('image', $valores);
    }    
    function jumbotron($title, $content, $href, $label){
        $api= ApiUi::getInstance();
        $valores= array('config.titulo' => $title, 'config.contenido' => $content, 'config.href' => $href, 'config.label' => $label);
        $api->componente('jumbotron', $valores);
    }    
    function paginador_simple($preState, $preHref, $preLabel, $nextState, $nextHref, $nextLabel){
        $api= ApiUi::getInstance();
        $valores= array('config.previous.state' => $preState, 'config.previous.href' => $preHref, 'config.previous.label' => $preLabel,
                        'config.next.state' => $nextState, 'config.next.href' => $nextHref, 'config.next.label' => $nextLabel);
        $api->componente('paginador_simple', $valores);
    }    
    function progress_bar($percentage, $striped = FALSE){
        $api= ApiUi::getInstance();
        $valores= array('config.porcentaje' => $percentage, 'config.striped' => ($striped ? 'si' : 'no'));
        $api->componente('progress_bar', $valores);
    }    
    function simple_footer(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('simple_footer', $valores);
    }    
    function end_simple_footer(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('simple_footer', $valores);
    }    
    function simple_header($primary, $secondary = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.primario' => $primary, 'config.secundario' => $secondary);
        $api->componente('simple_header', $valores);
    }    
    function thumbnail($title, $content, $href, $label, $src = NULL, $alt = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.titulo' => $title, 'config.contenido' => $content, 'config.href' => $href, 'config.label' => $label, 'config.src' => $src, 'config.alt' => $alt);
        $api->componente('thumbnail', $valores);
    }    
    function title($title){
        $api= ApiUi::getInstance();
        $valores= array('config.title' => $title);
        $api->componente('title', $valores);
    }    
    function well($content){
        $api= ApiUi::getInstance();
        $valores= array('config.contenido' => $content);
        $api->componente('well', $valores);
    }    
    /*
     * Formulario
     */   
    function formulario($method, $action, $enctype = NULL, $label = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.method' => $method, 'config.action' => $action, 'config.label' => $label,
            'config.enctype' => $enctype);
        $api->componente('formulario', $valores);
    }    
    function end_formulario(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('formulario', $valores);
    }    
    function botonera(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('botonera', $valores);
    }    
    function end_botonera(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('botonera', $valores);
    }    
    function button($type, $label, $style = 'default', $id = NULL, $onClick = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => $type, 'config.label' => $label, 'config.style' => $style, 'config.id' => $id, 'config.onclick' => $onClick);
        $api->componente('button', $valores);
    }    
    function boolean_checkbox($label, $name, $value){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label);
        //Imprimo lo que seria el Head
        $api->componente('checkbox', $valores);
        //Imprimo los hijos
        $valores_option= array('config.label' => '', 'config.name' => $name, 'config.inline' => 'si', 'config.num' => 0, 'config.checked' => ($value ? 'si' : 'no'), 'datos.value' => '1');       
        $api->componente('checkbox_option', $valores_option);
        //Armo el Pie
        $valores= array('config.seccion' => 'pie');
        $api->componente('checkbox', $valores);
    }    
    function checkbox($label, $name, $value, $inline = FALSE){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label);
        //Guardo los value para los option
        $GLOBALS['check_name']= $name;
        $GLOBALS['check_value']= $value;
        $GLOBALS['check_num']= 0;
        $GLOBALS['check_inline']= $inline;
        $api->componente('checkbox', $valores);
    }    
    function end_checkbox(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        //Elimino los datos
        unset($GLOBALS['radio_name']);
        unset($GLOBALS['radio_value']);
        unset($GLOBALS['radio_num']);
        unset($GLOBALS['radio_inline']);
        $api->componente('checkbox', $valores);
    }    
    function checkbox_option($label, $value){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'datos.value' => $value, 'config.name' => $GLOBALS['check_name']);     
        $checked= FALSE;
        if(isset($GLOBALS['check_value'])){
            $var= $GLOBALS['check_value'];
            if(is_array($var)){
                if(in_array($value, $var)){
                    $checked= TRUE;
                }
            }
            else{
                if($value == $var){
                    $checked= TRUE;
                }
            }
        }        
        if($checked == TRUE){
            $valores['config.checked']= 'si';
        }
        else{
            $valores['config.checked']= 'no';
        }        
        if($GLOBALS['check_inline'] == TRUE){
            $valores['config.inline']= 'si';
        }
        else{
            $valores['config.inline']= 'no';
        }        
        $valores['config.num']= $GLOBALS['check_num'];
        $GLOBALS['check_num']++;
        $api->componente('checkbox_option', $valores);
    }    
    function file_button($label, $name){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'config.name' => $name);
        $api->componente('file_button', $valores);
    }    
    function input($label, $name, $type, $placeholder = NULL, $value = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'config.name' => $name, 'config.type' => $type, 'config.placeholder' => $placeholder, 'datos.value' => $value);
        $api->componente('input', $valores);
    }    
    function login($method, $action, $title, $userName, $userPlaceholder, $passName, $passPlaceholder, $checkName, $checkLabel, $checkValue, $labelButton, $userValue = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.method' => $method, 'config.action' => $action, 'config.title' => $title, 
                        'datos.email.name' => $userName, 'datos.email.placeholder' => $userPlaceholder,
                        'datos.pass.name' => $passName, 'datos.pass.placeholder' => $passPlaceholder,
                        'datos.check.name' => $checkName, 'datos.check.value' => $checkValue, 'datos.check.label' => $checkLabel,
                        'config.labelButton' => $labelButton, 'datos.email.value' => $userValue);
        $api->componente('login', $valores);
    }    
    function radio($label, $name, $value, $inline = FALSE){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label);
        //Guardo los value para los option
        $GLOBALS['radio_name']= $name;
        $GLOBALS['radio_value']= $value;
        $GLOBALS['radio_num']= 0;
        $GLOBALS['radio_inline']= $inline;
        $api->componente('radio', $valores);
    }    
    function end_radio(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        //Elimino los datos
        unset($GLOBALS['radio_name']);
        unset($GLOBALS['radio_value']);
        unset($GLOBALS['radio_num']);
        unset($GLOBALS['radio_inline']);
        $api->componente('radio', $valores);
    }    
    function radio_option($label, $value){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'datos.value' => $value, 'config.name' => $GLOBALS['radio_name']);
        if(isset($GLOBALS['radio_value'])){
            if($value == $GLOBALS['radio_value']){
                $valores['config.checked']= 'si';
            }
            else{
                $valores['config.checked']= 'no';
            }
        }        
        if($GLOBALS['radio_inline'] == TRUE){
            $valores['config.inline']= 'si';
        }
        else{
            $valores['config.inline']= 'no';
        }        
        $valores['config.num']= $GLOBALS['radio_num'];
        $GLOBALS['radio_num']++;
        $api->componente('radio_option', $valores);
    }    
    function select($label, $name, $value, $multiple = FALSE){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label, 'config.name' => $name, 'config.multiple' => ($multiple ? 'si':'no'));
        //Guardo los value para los option
        $GLOBALS['select_value']= $value;
        $api->componente('select', $valores);
    }    
    function end_select(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        //Elimino los datos
        unset($GLOBALS['select_value']);
        $api->componente('select', $valores);
    }    
    function select_option($label, $value){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'datos.value' => $value);
        $checked= FALSE;
        if(isset($GLOBALS['select_value'])){
            $var= $GLOBALS['select_value'];
            if(is_array($var)){
                if(in_array($value, $var)){
                    $checked= TRUE;
                }
            }
            else{
                if($value == $var){
                    $checked= TRUE;
                }
            }
        }        
        if($checked == TRUE){
            $valores['config.checked']= 'si';
        }
        else{
            $valores['config.checked']= 'no';
        }        
        $api->componente('select_option', $valores);
    }    
   function textarea($label, $name, $rows, $placeholder = NULL, $value = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'config.name' => $name, 'config.rows' => $rows, 'config.placeholder' => $placeholder, 'datos.value' => $value);
        $api->componente('textarea', $valores);
    }    
    /*
     * Navegacion y Menu 
     */    
    function drop_down_menu($label, $right = FALSE){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label, 'config.right' => ($right ? 'pull-right': ''));
        $api->componente('drop_down_menu', $valores);
    }    
    function end_drop_down_menu(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('drop_down_menu', $valores);
    }    
    function menu_item($type, $label = NULL, $href = NULL, $disabled = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => $type, 'config.label' => $label, 'config.disabled' => ($disabled ? 'si' : 'no'), 'config.href' => $href);
        $api->componente('menu_item', $valores);
    }    
    function nav_bar_form($action, $method, $inputName, $inputPlaceholder, $labelButton, $inputValue = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.action' => $action, 'config.method' => $method, 'config.input_name' => $inputName,
                        'config.placeholder' => $inputPlaceholder, 'config.label' => $labelButton, 'config.value_input' => $inputValue);
        $api->componente('nav_bar_form', $valores);
    }    
    function nav_bar_left(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('nav_bar_left', $valores);
    }    
    function end_nav_bar_left(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('nav_bar_left', $valores);
    }
    function nav_bar_right(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('nav_bar_right', $valores);
    }    
    function end_nav_bar_right(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('nav_bar_right', $valores);
    }    
    function nav_item($label, $href, $state = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.label' => $label, 'config.href' => $href, 'config.state' => $state);
        $api->componente('nav_item', $valores);
    }    
    function nav_item_drop_down($label, $right = FALSE, $state = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.label' => $label, 'config.right' => ($right ? 'pull-right': ''), 'config.state' => $state);
        $api->componente('nav_item_drop_down', $valores);
    }    
    function end_nav_item_drop_down(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('nav_item_drop_down', $valores);
    }    
    function nav_item_list($type, $label = NULL, $href = NULL, $disabled = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => $type, 'config.label' => $label, 'config.disabled' => ($disabled ? 'si' : 'no'), 'config.href' => $href);
        $api->componente('nav_item_list', $valores);
    }    
    function navigation_bar($logo, $href){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.logo' => $logo, 'config.href' => $href);
        $api->componente('navigation_bar', $valores);
    }    
    function end_navigation_bar(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('navigation_bar', $valores);
    }    
    function navigation_list(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('navigation_list', $valores);
    }    
    function end_navigation_list(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('navigation_list', $valores);
    }    
    function navigation_menu($type, $justified = NULL, $stacked = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.type' => $type, 'config.justified' => ($justified ? 'si' : 'no'), 'config.stacked' => ($stacked ? 'si' : 'no'));
        $api->componente('navigation_menu', $valores);
    }    
    function end_navigation_menu(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('navigation_menu', $valores);
    }    
    /*
     * Componentes Varios 
     */    
    function breadcrumb(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('breadcrumb', $valores);
    }    
    function end_breadcrumb(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('breadcrumb', $valores);
    }    
    function em($value){
        $api= ApiUi::getInstance();
        $valores= array('config.value' => $value);
        $api->componente('em', $valores);
    }    
    function li($label, $active = NULL, $badge = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista', 'config.label' => $label, 'config.badge' => $badge, 'config.active' => ($active ? 'active': ''));
        $api->componente('li', $valores);
    }    
    function li_a($label, $href, $active = NULL, $badge = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista_a', 'config.label' => $label, 'config.href' => $href, 'config.badge' => $badge, 'config.active' => ($active ? 'active': ''));
        $api->componente('li', $valores);
    }    
    function media_object($href, $alt, $src, $title, $content){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.href' => $href, 'config.alt' => $alt,
                        'congif.src' => $src, 'config.titulo' => $title, 'config.contenido' => $content);
        $api->componente('media_object', $valores);
    }    
    function end_media_object(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('media_object', $valores);
    }    
    function page($label, $href, $state = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.first' => 'no', 'config.last' => 'no', 'config.label' => $label, 'config.href' => $href, 'config.state' => $state);
        $api->componente('pagina', $valores);
    }    
    function page_first($href, $state = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.first' => 'si', 'config.href' => $href, 'config.state' => $state);
        $api->componente('pagina', $valores);
    }    
    function page_last($href, $state = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.last' => 'si', 'config.first' => 'no', 'config.href' => $href, 'config.state' => $state);
        $api->componente('pagina', $valores);
    }    
    function paginator(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('paginador', $valores);
    }    
    function end_paginator(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('paginador', $valores);
    }    
    function panel($title = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.titulo' => $title);
        $api->componente('panel', $valores);
    }
    function end_panel($fot = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie', 'config.pie' => $fot);
        $api->componente('panel', $valores); 
    }
    function paragraph($align = NULL, $lead = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.align' => $align, 'config.lead' => $lead);
        $api->componente('parrafo', $valores);
    }    
    function end_paragraph(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('parrafo', $valores);
    }    
    function small($value){
        $api= ApiUi::getInstance();
        $valores= array('config.value' => $value);
        $api->componente('small', $valores);
    }    
    function strong($value){
        $api= ApiUi::getInstance();
        $valores= array('config.value' => $value);
        $api->componente('strong', $valores);
    }    
    function text($value){
        $api= ApiUi::getInstance();
        $valores= array('config.value' => $value);
        $api->componente('text', $valores);
    }    
    function ul(){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista', 'config.seccion' => 'cabecera');
        $api->componente('ul', $valores);
    }    
    function end_ul(){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista', 'config.seccion' => 'pie');
        $api->componente('ul', $valores);
    }    
    function ul_a(){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista_a', 'config.seccion' => 'cabecera');
        $api->componente('ul', $valores);
    }    
    function end_ul_a(){
        $api= ApiUi::getInstance();
        $valores= array('config.type' => 'lista_a', 'config.seccion' => 'pie');
        $api->componente('ul', $valores);
    }    
    /*
     * Table
     */    
    function table(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('table', $valores);
    }    
    function end_table(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('table', $valores);
    }    
    function table_field($value = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.value' => $value);
        $api->componente('table_field', $valores);
    }    
    function end_table_field(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('table_field', $valores);
    }    
    function table_head(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('table_head', $valores);
    }    
    function end_table_head(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('table_head', $valores);
    }    
    function table_head_field($value = NULL){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera', 'config.value' => $value);
        $api->componente('table_head_field', $valores);
    }    
    function end_table_head_field(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('table_head_field', $valores);
    }    
    function table_row(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'cabecera');
        $api->componente('table_row', $valores);
    }    
    function end_table_row(){
        $api= ApiUi::getInstance();
        $valores= array('config.seccion' => 'pie');
        $api->componente('table_row', $valores);
    }
?>
