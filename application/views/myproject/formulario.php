<section>
    <div class="container">
       <?php echo form_open("holamundo/recibirdatos") ?>
       <?php
            $nombre = array(
                'name' => 'nombre',
                'placeholder' => 'Escribe tu nombre',
                'class' => 'form-control'
            );

            $video = array(
                'name' => 'videos',
                'placeholder' => 'Cantidad videos del curso',
                'class' => 'form-control'
            );
       ?>
           <div class="row py-5">
                <div class="col-12 col-md-6">
                    <?php echo form_input($nombre) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?php echo form_input($video) ?>
                </div>
                <div class="col-12">
                    <?php echo form_submit('','Subir curso') ?>
                </div>
           </div>

       <?php echo form_close() ?>
    </div>
</section>