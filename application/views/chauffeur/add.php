<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chauffeur - Nouvel Enregistrement</h3>
            </div>
            <?php echo form_open('chauffeur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="matriculeChauffeur" class="control-label"><span class="text-danger">*</span>Matricule Chauffeur</label>
						<div class="form-group">
							<input type="text" name="matriculeChauffeur" value="<?php echo $this->input->post('matriculeChauffeur'); ?>" class="form-control" id="matriculeChauffeur" />
							<span class="text-danger"><?php echo form_error('matriculeChauffeur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomChauffeur" class="control-label"><span class="text-danger">*</span>Nom du Chauffeur</label>
						<div class="form-group">
							<input type="text" name="nomChauffeur" value="<?php echo $this->input->post('nomChauffeur'); ?>" class="form-control" id="nomChauffeur" />
							<span class="text-danger"><?php echo form_error('nomChauffeur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Numero Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo $this->input->post('telephone'); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="adresseChauffeur" class="control-label">Adresse Chauffeur</label>
						<div class="form-group">
							<textarea name="adresseChauffeur" class="form-control" id="adresseChauffeur"><?php echo $this->input->post('adresseChauffeur'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>