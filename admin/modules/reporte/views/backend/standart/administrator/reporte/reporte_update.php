
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Reporte        <small>Editar Reporte</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/reporte'); ?>">Reporte</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row" >
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">Reporte</h3>
                            <h5 class="widget-user-desc">Editar Reporte</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/reporte/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_reporte', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_reporte', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="NumeroReporte" class="col-sm-2 control-label">Número De Reporte 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="NumeroReporte" id="NumeroReporte" placeholder="Número De Reporte" value="<?= set_value('NumeroReporte', $reporte->NumeroReporte); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="cliente" class="col-sm-2 control-label">Cliente 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="cliente" id="cliente" data-placeholder="Select Cliente" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('persona') as $row): ?>
                                    <option <?=  $row->IdPersona ==  $reporte->cliente ? 'selected' : ''; ?> value="<?= $row->IdPersona ?>"><?= $row->Apellidos; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="fechaingreso" class="col-sm-2 control-label">Fecha De Ingreso 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datepicker" name="fechaingreso"  placeholder="Fecha De Ingreso" id="fechaingreso" value="<?= set_value('reporte_fechaingreso_name', $reporte->fechaingreso); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                       
                                                 
                                                <div class="form-group ">
                            <label for="orden" class="col-sm-2 control-label">Orden 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="orden" id="orden" placeholder="Orden" value="<?= set_value('orden', $reporte->orden); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="marca" class="col-sm-2 control-label">Marca 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="marca" id="marca" data-placeholder="Select Marca" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('cat_marca') as $row): ?>
                                    <option <?=  $row->IdMarca ==  $reporte->marca ? 'selected' : ''; ?> value="<?= $row->IdMarca ?>"><?= $row->Descripcion; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="modelo" class="col-sm-2 control-label">Modelo 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" value="<?= set_value('modelo', $reporte->modelo); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="ano" class="col-sm-2 control-label">Año 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ano" id="ano" placeholder="Año" value="<?= set_value('ano', $reporte->ano); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="Valuacion" class="col-sm-2 control-label">Valuacion 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="Valuacion" id="Valuacion" data-placeholder="Select Valuacion" >
                                    <option value=""></option>
                                    <option <?= $reporte->Valuacion == "SI" ? 'selected' :''; ?> value="SI">SI</option>
                                    <option <?= $reporte->Valuacion == "NO" ? 'selected' :''; ?> value="NO">NO</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PresupuestoEnviado" class="col-sm-2 control-label">Presupuesto Enviado 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="PresupuestoEnviado" id="PresupuestoEnviado" data-placeholder="Select PresupuestoEnviado" >
                                    <option value=""></option>
                                    <option <?= $reporte->PresupuestoEnviado == "SI" ? 'selected' :''; ?> value="SI">SI</option>
                                    <option <?= $reporte->PresupuestoEnviado == "NO" ? 'selected' :''; ?> value="NO">NO</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PresupuestoAceptado" class="col-sm-2 control-label">Presupuesto Aceptado 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="PresupuestoAceptado" id="PresupuestoAceptado" data-placeholder="Select PresupuestoAceptado" >
                                    <option value=""></option>
                                    <option <?= $reporte->PresupuestoAceptado == "SI" ? 'selected' :''; ?> value="SI">SI</option>
                                    <option <?= $reporte->PresupuestoAceptado == "NO" ? 'selected' :''; ?> value="NO">NO</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="SolicitudRefacciones" class="col-sm-2 control-label">Solicitud De Refacciones 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="SolicitudRefacciones" id="SolicitudRefacciones" data-placeholder="Select SolicitudRefacciones" >
                                    <option value=""></option>
                                    <option <?= $reporte->SolicitudRefacciones == "SI" ? 'selected' :''; ?> value="SI">SI</option>
                                    <option <?= $reporte->SolicitudRefacciones == "NO" ? 'selected' :''; ?> value="NO">NO</option>
                                    </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="refaccionesact" class="col-sm-2 control-label">Refacciones Necesarias 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="refaccionesact" id="refaccionesact" placeholder="Refacciones Necesarias" value="<?= set_value('refaccionesact', $reporte->refaccionesact); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TotalRefacciones" class="col-sm-2 control-label">Refacciones Conseguidas 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TotalRefacciones" id="TotalRefacciones" placeholder="Refacciones Conseguidas" value="<?= set_value('TotalRefacciones', $reporte->TotalRefacciones); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="CantidadRefacciones" class="col-sm-2 control-label">Cálculo Refacciones Disponibles  
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="CantidadRefacciones" id="calculo" placeholder="Cálculo Refacciones Disponibles " value="<?= set_value('CantidadRefacciones', $reporte->CantidadRefacciones); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="RefaccionesDispoiblesPorcentaje" class="col-sm-2 control-label">Refacciones Disponibles % 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="RefaccionesDispoiblesPorcentaje" id="RefaccionesDispoiblesPorcentaje" placeholder="Refacciones Disponibles %" value="<?= set_value('RefaccionesDispoiblesPorcentaje', $reporte->RefaccionesDispoiblesPorcentaje); ?>">
                                <small class="info help-block">
                                    <b>Confirma el porcentaje calculado</b>
                                </small>
                            </div>
                        </div>
                        
                        
                        <div class="form-group conditional" data-cond-option="RefaccionesDispoiblesPorcentaje" data-cond-value="100">
                            <label for="ReparacionUnidadPorcentaje" class="col-sm-2 control-label" >Reparación de partes % 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ReparacionUnidadPorcentaje" id="ReparacionUnidadPorcentaje" placeholder="Reparación Unidad %" value="<?= set_value('ReparacionUnidadPorcentaje', $reporte->ReparacionUnidadPorcentaje); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                        
                        
                         
                                                <div class="form-group conditional" data-cond-option="RefaccionesDispoiblesPorcentaje" data-cond-value="100">
                            <label for="UnidadProgRampa" class="col-sm-2 control-label">Unidad En Rampa 
                            </label>
                            <div class="col-sm-8">
                                <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $reporte->UnidadProgRampa == "SI" ? "checked" : ""; ?> type="radio" class="flat-red" name="UnidadProgRampa" value="SI"> SI </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $reporte->UnidadProgRampa == "No" ? "checked" : ""; ?> type="radio" class="flat-red" name="UnidadProgRampa" value="No"> No </label>
                                    </div>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                        
                   
                                                
                                                 
                                                <div class="form-group conditional" data-cond-option="RefaccionesDispoiblesPorcentaje" data-cond-value="100">
                            <label for="Deducible" class="col-sm-2 control-label">Deducible 
                            </label>
                            <div class="col-sm-8">
                                <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $reporte->Deducible == "SI" ? "checked" : ""; ?> type="radio" class="flat-red" name="Deducible" value="SI"> SI </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $reporte->Deducible == "No" ? "checked" : ""; ?> type="radio" class="flat-red" name="Deducible" value="No"> No </label>
                                    </div>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group conditional " data-cond-option="RefaccionesDispoiblesPorcentaje" data-cond-value="100">
                            <label for="MontoDeducible" class="col-sm-2 control-label">Monto Deducible 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="MontoDeducible" id="MontoDeducible" placeholder="Monto Deducible" value="<?= set_value('MontoDeducible', $reporte->MontoDeducible); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group conditional " data-cond-option="RefaccionesDispoiblesPorcentaje" data-cond-value="100">
                            <label for="FechaEntrega" class="col-sm-2 control-label">Fecha Promesa 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datepicker" name="FechaEntrega"  placeholder="Fecha Promesa" id="FechaEntrega" value="<?= set_value('reporte_FechaEntrega_name', $reporte->FechaEntrega); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                       
                                                
                        <div class="message"></div>
                        <div class="row-fluid col-md-7">
                            <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                            <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>
<!-- /.content -->
<!-- Page script -->
<script>
    $(document).ready(function(){
      
             
      $('#btn_cancel').click(function(){
        swal({
            title: "Are you sure?",
            text: "the data that you have created will be in the exhaust!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = BASE_URL + 'administrator/reporte';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_reporte = $('#form_reporte');
        var data_post = form_reporte.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_reporte.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#reporte_image_galery').find('li').attr('qq-file-id');
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            $('.data_file_uuid').val('');
    
          } else {
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
       
        $(function(){
    
    $('#refaccionesact').on('input', function() {
      calculate();
    });
    $('#TotalRefacciones').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#refaccionesact').val()); 
        var pEarned = parseInt($('#TotalRefacciones').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/pPos) * 100).toFixed();
           }
        
        $('#calculo').val(perc);
    }

});
       
           
    
    }); /*end doc ready*/
</script>



<script>
(function($) {
  $.fn.conditionize = function(options){ 
    
     var settings = $.extend({
        hideJS: true
    }, options );
    
    $.fn.showOrHide = function(listenTo, listenFor, $section) {
      if ($(listenTo).is('select, input[type=text]') && $(listenTo).val() == listenFor ) {
        $section.slideDown();
      }
      else if ($(listenTo + ":checked").val() == listenFor) {
        $section.slideDown();
      }
      else {
        $section.slideUp();
      }
    } 

    return this.each( function() {
      var listenTo = "[name=" + $(this).data('cond-option') + "]";
      var listenFor = $(this).data('cond-value');
      var $section = $(this);
  
      //Set up event listener
      $(listenTo).on('change', function() {
        $.fn.showOrHide(listenTo, listenFor, $section);
      });
      //If setting was chosen, hide everything first...
      if (settings.hideJS) {
        $(this).hide();
      }
      //Show based on current value on page load
      $.fn.showOrHide(listenTo, listenFor, $section);
    });
  }
}(jQuery));
  
 $('.conditional').conditionize();

</script>