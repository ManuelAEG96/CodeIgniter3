<!-- <script type="text/javascript">
  window.onload = function() {
  var element = document.getElementById('content');
  if (element!=null){
  element.onselectstart = function () { return false; } 
  element.onmousedown = function () { return false; } 
  }}
</script> -->

<div class="register-page" style="min-height: 586.8px;">

    <form class="" id="frm_solicitud" action="<?= $action_form; ?>" data-parsley-validate="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

      <h3 class="title-hero">INFORMACIÓN PERSONAL</h3>
        <hr>

        <div class="row">
        <div>
            <div class="form-group">
            <label for="">CURP <span class="spn-req-field mrg5L">*</span></label>
            <input type="text" class="form-control text-center" id="datos_solicitante-curp" name="datos_solicitante[curp]" value="<?= $data->datos_solicitante->curp ?? null; ?>" required="" onblur="validateParsleyCURP(this);" data-parsley-curp="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
        </div>

        <div>
            <div class="form-group">
            <label for="">NOMBRE <span class="spn-req-field mrg5L">*</span></label>
            <input type="text" class="form-control" id="datos_solicitante-nombre" name="datos_solicitante[nombre]" value="<?= $data->datos_solicitante->nombre ?? null; ?>" required="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
        </div>

        <div>
            <div class="form-group">
            <label for="">APELLIDO PATERNO <span class="spn-req-field mrg5L">*</span></label>
            <input type="text" class="form-control" id="datos_solicitante-apellido_paterno" name="datos_solicitante[apellido_paterno]" value="<?= $data->datos_solicitante->apellido_paterno ?? null; ?>" required="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
        </div>

        <div>
            <div class="form-group">
            <label for="">APELLIDO MATERNO</label>
            <input type="text" class="form-control" id="datos_solicitante-apellido_materno" name="datos_solicitante[apellido_materno]" value="<?= $data->datos_solicitante->apellido_materno ?? null; ?>">
            </div>
        </div>
        </div>

        <div class="row">
        <div>
            <div class="form-group" id="fg-email">
            <label for="">CORREO ELECTRÓNICO <span class="spn-req-field mrg5L">*</span></label>
            <div class="input-group">
                <span class="input-group-addon bg-black">
                <i class="glyph-icon icon-at"></i>
                </span>
                <input type="text" class="form-control" id="datos_solicitud-correo_electronico" name="datos_solicitud[correo_electronico]" value="<?= $data->datos_solicitud->correo_electronico ?? null; ?>" required="" onblur="validateParsleyEmail(this);" data-parsley-errors-container="#fg-email" data-parsley-email="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
            </div>
        </div>

        <div>
            <div class="form-group" id="fg-phone">
            <label for="">TELÉFONO <span class="spn-req-field mrg5L">*</span></label>
            <div class="input-group">
                <span class="input-group-addon bg-black">
                <i class="glyph-icon icon-phone"></i>
                </span>
                <input type="text" class="form-control text-center phone-validation" id="datos_solicitud-telefono" name="datos_solicitud[telefono]" value="<?= $data->datos_solicitud->telefono ?? null; ?>" data-parsley-errors-container="#fg-phone" required="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
            </div>
        </div>
        </div>

        <h3 class="title-hero mrg15T">DIRECCIÓN</h3>
        <hr>

        <div class="row">
        <div>
            <div class="form-group">
            <label for="">CALLE <span class="spn-req-field mrg5L">*</span></label>
            <input type="text" class="form-control" id="datos_solicitud-calle" name="datos_solicitud[calle]" value="<?= $data->datos_solicitud->calle ?? null; ?>" required="" data-cb="cb-datos-solicitante" data-step="1">
            </div>
        </div>

        <div>
            <div class="form-group" id="fg-no-ext-slote">
            <label for="">N° EXT. <span class="spn-req-field mrg5L">*</span></label>
            <div class="input-group">
                <span class="input-group-addon bg-black">
                <i class="glyph-icon icon-slack"></i>
                </span>
                <input type="text" class="form-control text-center int_number" id="datos_solicitud-no_ext" name="datos_solicitud[no_ext]" value="<?= $data->datos_solicitud->no_ext ?? null; ?>" required="" data-parsley-errors-container="#fg-no-ext-slote" data-cb="cb-datos-solicitante" data-step="1">
            </div>
            </div>
        </div>

        <div>
            <div class="form-group">
            <label for="">N° INT.</label>
            <input type="text" class="form-control text-center" id="datos_solicitud-no_int" name="datos_solicitud[no_int]" value="<?= $data->datos_solicitud->no_int ?? null; ?>">
            </div>
        </div>

        <div>
            <div class="form-group" id="fg-colonia-slote">
            <label for="">FRACC. Ó COLONIA <span class="spn-req-field mrg5L">*</span></label>
            <div class="input-group">
                <span class="input-group-addon bg-black">
                <i class="glyph-icon icon-map-marker"></i>
                </span>
                <input type="text" class="form-control" id="datos_solicitud-colonia" name="datos_solicitud[colonia]" value="<?= $data->datos_solicitud->colonia ?? null; ?>" required="" data-parsley-errors-container="#fg-colonia-slote" data-cb="cb-datos-solicitante" data-step="1">
            </div>
            </div>
        </div>
        </div>

        <div class="row">
        <div>
            <div class="form-group" id="fg-cp-solte">
            <label for="">C.P. <span class="spn-req-field mrg5L">*</span></label>
            <div class="input-group">
                <span class="input-group-addon bg-black">
                <i class="glyph-icon icon-slack"></i>
                </span>
                <input type="text" class="form-control text-center int_number" id="datos_solicitud-cp" name="datos_solicitud[cp]" value="<?= $data->datos_solicitud->cp ?? null; ?>" required="" data-parsley-errors-container="#fg-cp-solte" data-cb="cb-datos-solicitante" data-step="1">
            </div>
            </div>
        </div>
        </div>      

        <div class="col-xs-6 col-sm-6 col-md-6">
            <button type="submit" class="btn btn-alt bg-municipio btn-lg pull-right" id="btn-submit">
                <span><?= $btnGuardarText; ?></span>
                <img id="img-spinner" class="mrg5L" src="<?= base_url(); ?>assets/img/spinner/loader-light.gif" hidden>
            </button>
        </div>

    </form>
      
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()."assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
<script src="<?= base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
        
<script src="<?= base_url()."public/"; ?>js/scriptsregister.js"></script>



</div>
