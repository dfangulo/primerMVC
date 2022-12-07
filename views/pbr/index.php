<?php require 'views/header.php' ?>
<div class="container">
    <form action="" method="post" class="container">
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="text-area-input_datos_series" class="form-label form-control-lg">INTRODUCIR LLAVES</label>
                <textarea name="input_datos_series" id="text-area-input_datos_series" class="form-control col-md-12" rows="23" placeholder="WindowsID, OfficeID"><?php if (!empty($last_textArea_input)) {
                                                                                                                                                                        echo trim($last_textArea_input);
                                                                                                                                                                    }; ?></textarea>
                <div class="row mt-3">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark col-auto" name="btn_crear_xml">CREAR XML</button>
                    </div>
                </div>
                <!-- <input type="file" name="archivo" id="archivoInputcsv" value="Archivo csv"> -->
            </div>
            <div class="col-md-9">
                <label for="textareaXml" class="form-label form-control-lg" placeholder="XML preview">VISTA PREVIA XML</label>
                <textarea id="textareaXml" class="form-control col-md-12" rows="23" aria-label="vista preliminar..." disabled readonly><?php
                         if (!empty($_POST['input_datos_series'])) {
                            $xmlview = new Pbr($_POST['input_datos_series']);
                            $strXML = $xmlview->crearXML();
                            print $strXML->saveXML();
                        } ?></textarea>
                <div class="row mt-3">
                    <?php
                    if (!empty($_POST['input_datos_series'])) {
                        echo '<div class="col-auto"><input type="text" class="form-control"  id="nombre-archivo" placeholder = "Nombre Archivo">         </div><div class="col-auto"><button name="btn_crear_xml" class="btn btn-dark col-auto" id="guardar">Descargar</button></div>';
                    } else {
                        echo '<div class="col-auto"><input type="text" class="form-control"  id="nombre-archivo" placeholder = "Nombre Archivo" readonly></div><div class="col-auto"><button class="btn btn-dark col-auto"     disabled>Descargar</button></div>';
                    };
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="<?php echo constant('URL') ?>public/js/pbr.js"></script>
<?php require 'views/footer.php' ?>