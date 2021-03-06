<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mecanicien - Nouvel enregistrement</h3>
            </div>
            <?php echo form_open('mecanicien/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomMecanicien" class="control-label"><span class="text-danger">*</span>Nom Mecanicien</label>
						<div class="form-group">
							<input type="text" name="nomMecanicien" value="<?php echo $this->input->post('nomMecanicien'); ?>" class="form-control" id="nomMecanicien" />
							<span class="text-danger"><?php echo form_error('nomMecanicien');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label"><span class="text-danger">*</span>Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo $this->input->post('telephone'); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mec_observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="mec_observation" class="form-control" id="mec_observation"><?php echo $this->input->post('mec_observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer mecanicien
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>