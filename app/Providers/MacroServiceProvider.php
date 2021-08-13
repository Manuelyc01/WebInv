<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Texto - input
        \Form::macro('stdText', function($label, $required , $name, $errors = null , $text = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::text($name , null , ['class' => 'form-control', 'placeholder' => '', 'data-toggle' => 'tooltip' , 'title' => $text, 'data-placement' => 'right', 'data-trigger' => 'focus']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';

            return $item;
        });

        //Texto - input sólo lectura - "se muestra el campo como deshabilitado"
        \Form::macro('stdTextRead', function($label, $required , $name, $errors = null , $text = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::text($name , null , ['class' => 'form-control', 'placeholder' => '', 'data-toggle' => 'tooltip' , 'title' => $text, 'data-placement' => 'right', 'data-trigger' => 'focus', 'readonly' => 'true']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';

            return $item;
        });

        //Color Picker
        \Form::macro('stdColor', function($label, $required , $name, $errors = null) {

            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= '<div id="cpl" data-format="alias" class="input-group colorpicker-component">';
            $item .= \Form::text($name , null, ['class' => 'form-control']);
            $item .= '<span class="input-group-addon"><i id="codColor"></i></span>';
            $item .= '</div>';
            $item .= '</div>';

            return $item;
        });
        

        //URL
        \Form::macro('stdUrl', function($label, $required, $name, $errors = null , $link = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::text($name , null , ['class' => 'form-control', 'placeholder' => '']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';

            return $item;
        });

        //Área de Texto - simple
        \Form::macro('stdTextArea', function($label, $required, $name, $value = null, $errors = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::textarea($name, $value ? $value : null, ['class' => 'form-control', 'placeholder' => '', 'rows' => '4x4']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';
 
            return $item;
        });

        //Área de Texto - con herramientas
        \Form::macro('stdCKEditor', function($label, $required , $name, $errors = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::textarea($name , null , ['class' => 'ckeditor', 'placeholder' => '', 'rows' => '4x4']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';

            return $item;
        });

        //DDL
         \Form::macro('stdSelect', function($label, $required,  $name, $values, $placeholder) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::select($name , $values, null , ['class' => 'form-control', 'placeholder' => $placeholder]);
            $item .= '</div>';

            return $item;
        });

        //Número entero
        \Form::macro('stdNumber', function($label, $required , $name, $errors = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::number($name , null , ['class' => 'form-control', 'placeholder' => '']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';

            return $item;
        });

        //Imagen
        \Form::macro('stdImg', function($label, $required , $name, $path = null, $errors = null, $size = null) {

            $nombre_imagen = '';

            if ($path) {
                $nombre_imagen = array_last(explode('/', $path));
                $extension = explode('.' , $nombre_imagen);
                $real_ext = array_pop($extension);
            }

            $item  = '<label class="col-sm-2 control-label"> <strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8 imagen-array">';
            $item .= '<p class="title-image-flm"> '. $nombre_imagen.' </p>';
            $item .= '<div class="ui fluid btn-group">';
            $item .= '<a data-input="'.$name.'" class="btn btn-custom fm-button btn-lg">  <i class="fa fa-folder-open"></i> Ver Galería </a>';
            $item .= \Form::text($name , $path ? $path : null , ['id' => $name , 'class' => 'input-flm', 'placeholder' => '', 'hidden' => true]);

            if ($path && $real_ext != 'pdf') {
                $item .= '<a class="btn btn-custom btn-lg preview-flm" data-name="'.$path.'"> <i class="fa fa-eye"> </i></a>';
            }

            if ($path) $item .= '<a class="btn btn-danger btn-lg delete-flm" data-name="'.$path.'"> <i class="fa fa-trash"> </i></a>';

            $item .= '</div>';
            $item .= '<span class="help-block"><strong>  '.$size.' </strong></span>';

            if ($errors) {
                 $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            }
            $item .= '</div>';

            return $item;
        });

        //Archivo
        \Form::macro('stdFile', function($label, $required , $name, $path = null, $errors = null) {

            $nombre_imagen = '';

            if ($path) {
                $nombre_imagen = array_last(explode('/', $path));
                $extension = explode('.' , $nombre_imagen);
                $real_ext = array_pop($extension);
            }

            $item  = '<label class="col-sm-2 control-label"> <strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8 imagen-array">';
            $item .= '<p class="title-image-flm"> '. $nombre_imagen.' </p>';
            $item .= '<div class="ui fluid btn-group">';
            $item .= '<a data-input="'.$name.'" class="btn btn-custom fm-button btn-lg">  <i class="fa fa-search"></i> Ver Galeria </a>';
            $item .= \Form::text($name , $path ? $path : null , ['id' => $name , 'class' => 'input-flm', 'placeholder' => '', 'hidden' => true]);

            if ($path && $real_ext != 'pdf') {
                $item .= '<a class="btn btn-custom btn-lg preview-flm" data-name="'.$path.'"> <i class="fa fa-eye"> </i></a>';
            }

            if ($path) $item .= '<a class="btn btn-danger btn-lg delete-flm" data-name="'.$path.'"> <i class="fa fa-trash"> </i></a>';

            $item .= '</div>';

            if ($errors) {
                 $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            }
            $item .= '</div>';

            return $item;
        });

        \Form::macro('gMaps', function($label, $errors = null , $help_text = null) {

            $item  = '<label class="col-sm-2 control-label"> <strong> '.$label.' </strong> </label>';
            $item .= '<div class="col-sm-7">';
            $item .= \Form::text('address'   , null , ['class' => 'form-control input' , 'placeholder' => 'Ingresar dirección']);
            $item .= \Form::text('latitude'  , null , ['id' => 'latitude' , 'hidden' => true]);
            $item .= \Form::text('longitude' , null , ['id' => 'longitude', 'hidden' => true]);
            if ($errors) {
                 $item .= $errors->first('address', '<span class="help-block"><strong> :message </strong></span>');
            }
            $item .= '<br>';
            $item .= '<div id="gmaps" style="width:100%;height:400px"></div>';


            $item .= '</div>';
            $item .= '<div class="col-sm-2"><a class="btn btn-info" id="buscar"> Buscar </a></div>';

            return $item;
        });

        //Fecha
        \Form::macro('stdDate' , function($label, $required , $name, $errors, $value = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
                 if ($required == 1) $item .= '<span class="required"> * </span>';
                  $item .= '</strong></label>';
                  $item .= '<div class="col-sm-8">';
                  $item .= '<div class="input-group date date-picker">';
                  $item .= \Form::text($name, $value ? $value->format('Y-m-d') : null , ['class' => 'form-control']);
                  $item .= '<span class="input-group-addon">';
                  $item .= '<span class="glyphicon glyphicon-calendar"></span>';
                  $item .= '</span>';
                  $item .= '</div>';
                  $item .= '</div>';

            return $item;
        });

        //Selector Múltiple
        \Form::macro('stdSelectMultiple', function($label, $required,  $name, $values, $placeholder, $multiple = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            if($multiple == 'multiple') {
                $item .= \Form::select($name.'[]', $values, null, ['multiple'=>'multiple','class' => 'form-control multiple', 'placeholder' => $placeholder]);
            } else {
                $item .= \Form::select($name, $values, null , ['class' => 'form-control', 'placeholder' => $placeholder]);
            }
            $item .= '</div>';

            return $item;
        });

        /*
         *******************************************************************************************************
         ************************************ UTILS PARA ARMAR LOS ARRAY ***************************************
         *******************************************************************************************************
         */
        
        \Form::macro('imageArray', function($label, $nombre, $required , $count, $path = null){

            $name = $nombre.$count;
            $nombre_imagen = '';

            if ($path) {
                $nombre_imagen = array_last(explode('/', $path));
                $extension = explode('.' , $nombre_imagen);
                $real_ext = array_pop($extension);
            }

            $item  = '<div class="group-img-input row">';
            $item .= '<label class="col-sm-2 control-label"> <strong> '. $label .' </strong>';
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</label>';
            $item .= '<div class="col-sm-8 imagen-array">';
            $item .= '<p class="title-image-flm"> '.$nombre_imagen.' </p>';
            $item .= '<div class="ui fluid btn-group">';
            $item .= '<div data-input="'.$name.'" class="btn btn-custom array-item fm-button btn-lg">  <i class="fa fa-folder-open"></i> Ver Galería </div>';
            $item .= '<input type="hidden" id="'.$name.'" name="'.$nombre.'[]" class="input-flm" value="'.$path.'" >';
            if ($path && $real_ext != 'pdf') {
                $item .= '<a class="btn btn-default btn-lg preview-flm" data-name="'.$path.'"> <i class="fa fa-eye"> </i></a>';
            }

            if ($path) $item .= '<a class="btn btn-danger btn-lg delete-flm" data-name="'.$path.'"> <i class="fa fa-trash"> </i></a>';
            $item .= '</div>';
            $item .= '</div>';
            $item .= '</div>';
            return $item;
        });

         \Form::macro('textArray', function($label, $required , $name, $value =null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::text($name , $value ? $value : null, ['class' => 'form-control', 'placeholder' => '', 'data-toggle' => 'tooltip' , 'title' => null , 'data-placement' => 'right', 'data-trigger' => 'focus']);
            $item .= '</div>';

            return $item;
        });

        \Form::macro('textAreaArray', function($label, $required, $name, $value = null, $errors = null) {
            $item  = '<label class="col-sm-2 control-label"><strong> '.$label;
            if ($required == 1) $item .= '<span class="required"> * </span>';
            $item .= '</strong></label>';
            $item .= '<div class="col-sm-8">';
            $item .= \Form::textarea($name, $value ? $value : null, ['class' => 'ckeditor', 'placeholder' => '', 'rows' => '4x4']);
            if ($errors) $item .= $errors->first($name, '<span class="help-block"><strong> :message </strong></span>');
            $item .= '</div>';
 
            return $item;
        });

        /*
         *******************************************************************************************************
         ******************************************* ARRAY CUSTOM **********************************************
         *******************************************************************************************************
         */

        

        //un solo archivo
        \Form::macro('arraySoloUnArchivo', function($labelOne1A, $archivoOne1A , $countOne1 , $pathOne1 = null) {

            $item  = '<li class="arraySoloUnArchivo">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($labelOne1A, $archivoOne1A, 1 , $countOne1 , $pathOne1);
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        \Form::macro('arraySoloUnArchivo1', function($labelOne1A1, $archivoOne1A1 , $countOne11 , $pathOne11 = null) {

            $item  = '<li class="arraySoloUnArchivo1">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($labelOne1A1, $archivoOne1A1, 1 , $countOne11 , $pathOne11);
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        \Form::macro('arraySoloUnArchivo2', function($labelOne1A2, $archivoOne1A2 , $countOne12 , $pathOne12 = null) {

            $item  = '<li class="arraySoloUnArchivo2">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($labelOne1A2, $archivoOne1A2, 1 , $countOne12 , $pathOne12);
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //un solo texto - input
        \Form::macro('arraySoloUnTexto', function($labelOne2A, $textoOne2A = null) {

            $item  = '<li class="arraySoloUnTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($labelOne2A, 1 , 'textoOne2A[]', $textoOne2A);
            $item .= '</div>';
            $item .= '</div>';   

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //un solo texto área
        \Form::macro('arraySoloUnTextoArea', function($labelOne3A, $textoOne3A = null) {

            $item  = '<li class="arraySoloUnTextoArea">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textAreaArray($labelOne3A, 1 , 'textoOne3A[]', $textoOne3A);
            $item .= '</div>';
            $item .= '</div>';   

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //archivo y texto
        \Form::macro('arrayArchivoTexto', function($label1A, $archivo1A , $count1 , $path1 = null , $label2A, $texto2A = null) {

            $item  = '<li class="arrayArchivoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($label1A, $archivo1A, 1 , $count1 , $path1);
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label2A, 1 , 'texto2A[]', $texto2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //archivo, archivo y texto
        \Form::macro('arrayArchivoArchivoTexto', function($label1A, $archivo1A , $count1 , $path1 = null, $label2A, $archivo2A , $count2 , $path2 = null , $label3A, $texto3A = null) {

            $item  = '<li class="arrayArchivoArchivoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($label1A, $archivo1A, 1 , $count1 , $path1);
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($label2A, $archivo2A, 1 , $count2 , $path2);
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label3A, 1 , 'texto3A[]', $texto3A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //archivo, texto1 y texto2
        \Form::macro('arrayArchivoNombreDescripcion', function($lblA, $archA , $count , $path = null , $lbl1A, $nomA = null, $lbl2A, $desA = null) {

            $item  = '<li class="arrayArchivoNombreDescripcion">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($lblA, $archA, 1 , $count , $path);
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl1A, 1 , 'nomA[]', $nomA);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl2A, 0 , 'desA[]', $desA);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        

        //texto1 y texto2
        \Form::macro('arrayTextoTexto', function($label1, $texto1A = null, $label2, $texto2A = null) {

            $item  = '<li class="arrayTextoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label1, 1 , 'texto1A[]', $texto1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label2, 1 , 'texto2A[]', $texto2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1 y texto2
        \Form::macro('arrayTextoTexto2', function($lbl1, $txt1A = null, $lbl2, $txt2A = null) {

            $item  = '<li class="arrayTextoTexto2">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl1, 1 , 'txt1A[]', $txt1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl2, 1 , 'txt2A[]', $txt2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, texto2 y texto3
        \Form::macro('arrayTextoTextoTexto', function($lbl1, $txt1A = null, $lbl2, $txt2A = null, $lbl3, $txt3A = null) {

            $item  = '<li class="arrayTextoTextoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl1, 1 , 'txt1A[]', $txt1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl2, 1 , 'txt2A[]', $txt2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl3, 1 , 'txt3A[]', $txt3A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, texto2, texto3 y texto4
        \Form::macro('arrayTextoTextoTextoTexto', function($label1, $texto1A = null, $label2, $texto2A = null, $label3, $texto3A = null, $label4, $texto4A = null) {

            $item  = '<li class="arrayTextoTextoTextoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label1, 1 , 'texto1A[]', $texto1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label2, 1 , 'texto2A[]', $texto2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label3, 1 , 'texto3A[]', $texto3A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label4, 1 , 'texto4A[]', $texto4A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //img1, texto1, texto2 y des
        \Form::macro('arrayImgTextoTextoDes', function($lblImgA, $imgA , $countImgA , $pathImgA = null , $lb1A, $tx1A = null, $lb2A, $tx2A = null, $lbDesA, $txDesA = null) {

            $item  = '<li class="arrayImgTextoTextoDes">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($lblImgA, $imgA, 1 , $countImgA , $pathImgA);
            $item .= '</div>';    
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb1A, 1 , 'tx1A[]', $tx1A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb2A, 1 , 'tx2A[]', $tx2A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textAreaArray($lbDesA, 1 , 'txDesA[]', $txDesA);
            $item .= '</div>';
            $item .= '</div>';   

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, texto2, texto3 y texto4
        \Form::macro('arrayTextoTextoTextoTextoTexto', function($lb1A, $tx1A = null, $lb2A, $tx2A = null, $lb3A, $tx3A = null, $lb4A, $tx4A = null, $lb5A, $tx5A = null) {

            $item  = '<li class="arrayTextoTextoTextoTextoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';                   
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb1A, 1 , 'tx1A[]', $tx1A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb2A, 1 , 'tx2A[]', $tx2A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb3A, 1 , 'tx3A[]', $tx3A);
            $item .= '</div>';
            $item .= '</div>';
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb4A, 1 , 'tx4A[]', $tx4A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb5A, 1 , 'tx5A[]', $tx5A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, texto2, texto3 y texto4
        \Form::macro('arrayTextoTextoTextoTextoTexto2', function($lb1A2, $tx1A2 = null, $lb2A2, $tx2A2 = null, $lb3A2, $tx3A2 = null, $lb4A2, $tx4A2 = null, $lb5A2, $tx5A2 = null) {

            $item  = '<li class="arrayTextoTextoTextoTextoTexto2">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';                   
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb1A2, 1 , 'tx1A2[]', $tx1A2);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb2A2, 1 , 'tx2A2[]', $tx2A2);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb3A2, 1 , 'tx3A2[]', $tx3A2);
            $item .= '</div>';
            $item .= '</div>';
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb4A2, 1 , 'tx4A2[]', $tx4A2);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb5A2, 1 , 'tx5A2[]', $tx5A2);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, archivo, texto2
        \Form::macro('arrayCoverVideoTexto', function($labelA, $archivo1A , $count , $path = null, $label1, $texto1A = null, $label2, $texto2A = null) {

            $item  = '<li class="arrayCoverVideoTexto">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label1, 1 , 'texto1A[]', $texto1A);
            $item .= '</div>';
            $item .= '</div>';   

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($labelA, $archivo1A, 1 , $count , $path);
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label2, 1 , 'texto2A[]', $texto2A);
            $item .= '</div>';
            $item .= '</div>';   

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //texto1, img1, img2 y img3
        \Form::macro('arrayTextoImgImgImg', function($lblImg1A, $img1A , $countImg1A , $pathImg1A = null, $lblImg2A, $img2A , $countImg2A , $pathImg2A = null ,$lblImg3A, $img3A , $countImg3A , $pathImg3A = null, $label1A, $texto1A = null) {

            $item  = '<li class="arrayTextoImgImgImg">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($label1A, 1 , 'texto1A[]', $texto1A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($lblImg1A, $img1A, 1 , $countImg1A , $pathImg1A);
            $item .= '</div>';             

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($lblImg2A, $img2A, 1 , $countImg2A , $pathImg2A);
            $item .= '</div>';   

            $item .= '<div class="form-group">';
            $item .=  \Form::imageArray($lblImg3A, $img3A, 1 , $countImg3A , $pathImg3A);
            $item .= '</div>';     

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //6 textos
        \Form::macro('array6TextosSucursal', function($lbl1, $txt1A = null, $lbl2, $txt2A = null, $lbl3, $txt3A = null, $lbl4, $txt4A = null, $lbl5, $txt5A = null, $lbl6, $txt6A = null) {

            $item  = '<li class="array6TextosSucursal">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl1, 1 , 'txt1A[]', $txt1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl2, 1 , 'txt2A[]', $txt2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl3, 1 , 'txt3A[]', $txt3A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl4, 1 , 'txt4A[]', $txt4A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl5, 1 , 'txt5A[]', $txt5A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lbl6, 1 , 'txt6A[]', $txt6A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //6 textos
        \Form::macro('array6TextosAgencia', function($l1, $t1A = null, $l2, $t2A = null, $l3, $t3A = null, $l4, $t4A = null, $l5, $t5A = null, $l6, $t6A = null) {

            $item  = '<li class="array6TextosAgencia">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l1, 1 , 't1A[]', $t1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l2, 1 , 't2A[]', $t2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l3, 1 , 't3A[]', $t3A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l4, 1 , 't4A[]', $t4A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l5, 1 , 't5A[]', $t5A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($l6, 1 , 't6A[]', $t6A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

        //6 textos
        \Form::macro('array6TextosUnidad', function($lb1, $tx1A = null, $lb2, $tx2A = null, $lb3, $tx3A = null, $lb4, $tx4A = null, $lb5, $tx5A = null, $lb6, $tx6A = null) {

            $item  = '<li class="array6TextosUnidad">';
            $item .= '<div class="group-items">';
            
            $item .= '<div class="float-elements"><a href="javascript:void(0);"> <i class="icon-trash group"></i> </a> </div>';           

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb1, 1 , 'tx1A[]', $tx1A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb2, 1 , 'tx2A[]', $tx2A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb3, 1 , 'tx3A[]', $tx3A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb4, 1 , 'tx4A[]', $tx4A);
            $item .= '</div>';
            $item .= '</div>';     
            
            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb5, 1 , 'tx5A[]', $tx5A);
            $item .= '</div>';
            $item .= '</div>'; 

            $item .= '<div class="form-group">';
            $item .= '<div class="group-img-input row">';
            $item .=  \Form::textArray($lb6, 1 , 'tx6A[]', $tx6A);
            $item .= '</div>';
            $item .= '</div>';

            $item .= '</div>';
            $item .= '</li>';

            return $item;
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
