<?php require 'views/header.php' ?>
<div class="container">
    <form action="" method="post" class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="text-area-input_datos_series" class="form-label form-control-lg text-primary ">INTRODUCIR LLAVES</label>
                <textarea name="input_datos_series" id="text-area-input_datos_series" class="form-control col-md-12" rows="21" placeholder="WindowsID, OfficeID" required><?php if (!empty($last_textArea_input)) {
                                                                                                                                                                                echo trim($last_textArea_input);
                                                                                                                                                                            }; ?></textarea>
                <div class="row mt-3">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark mb-2" name="btn_crear_xml">CREAR XML</button>
                    </div>
                </div>
            </div>
    </form>
    <div class="col-md-8">
        <label for="textareaXml" class="form-label form-control-lg text-primary" placeholder="XML preview">VISTA PREVIA XML</label>
        <textarea id="textareaXml" class="form-control col-md-12" rows="18" aria-label="vista preliminar..." disabled readonly><?php
                                                                                                                                if (!empty($_POST['input_datos_series'])) {
                                                                                                                                    $xmlview = new Pbr($_POST['input_datos_series']);
                                                                                                                                    $strXML = $xmlview->crearXML();
                                                                                                                                    print $strXML->saveXML();
                                                                                                                                } ?></textarea>
        <div class="row mt-3">
            <div class="form-inline">
                <div class="form-group mb-2">
                    <?php
                    if (!empty($_POST['input_datos_series'])) {
                        echo '<label for="nombre-archivo" class="sr-only">Nombre Archivo: </label>
                      <input type="text" class="form-control"  name="nombre-archivo" id="nombre-archivo" placeholder = "ejemplo: file.xml">
                      </div>
                      <button class="btn btn-dark mb-2" id="guardar">Descargar</button>';
                    } else {
                        echo '<label for="nombre-archivo" class="sr-only">Nombre Archivo: </label>
                      <input type="text" class="form-control"  name="nombre-archivo" id="nombre-archivo" placeholder = "ejemplo: file.xml" readonly>
                      </div>
                      <button class="btn btn-dark mb-2 col-3" id="guardar" disabled>Descargar</button>';
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo constant('URL') ?>public/js/pbr.js"></script>
    <?php require 'views/footer.php' ?>