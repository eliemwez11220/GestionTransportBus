<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chauffeur Edition</h3>
            </div>
			<?php echo form_open('chauffeur/edit/'.$chauffeur['chauff_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="matriculeChauffeur" class="control-label"><span class="text-danger">*</span>Matricule Chauffeur</label>
						<div class="form-group">
							<input type="text" name="matriculeChauffeur" value="<?php echo ($this->input->post('matriculeChauffeur') ? $this->input->post('matriculeChauffeur') : $chauffeur['matriculeChauffeur']); ?>" class="form-control" id="matriculeChauffeur" />
							<span class="text-danger"><?php echo form_error('matriculeChauffeur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomChauffeur" class="control-label"><span class="text-danger">*</span>Nom du Chauffeur</label>
						<div class="form-group">
							<input type="text" name="nomChauffeur" value="<?php echo ($this->input->post('nomChauffeur') ? $this->input->post('nomChauffeur') : $chauffeur['nomChauffeur']); ?>" class="form-control" id="nomChauffeur" />
							<span class="text-danger"><?php echo form_error('nomChauffeur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Numero Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $chauffeur['telephone']); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="adresseChauffeur" class="control-label">Adresse Chauffeur</label>
						<div class="form-group">
							<textarea name="adresseChauffeur" class="form-control" id="adresseChauffeur"><?php echo ($this->input->post('adresseChauffeur') ? $this->input->post('adresseChauffeur') : $chauffeur['adresseChauffeur']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Enregistrer modification
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>