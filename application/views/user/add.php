<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Gestion utilisateurs</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="asset_fullname" class="control-label"><span class="text-danger">*</span>Nom complet</label>
						<div class="form-group">
							<input type="text" name="asset_fullname" value="<?php echo $this->input->post('asset_fullname'); ?>" class="form-control" id="asset_fullname" />
							<span class="text-danger"><?php echo form_error('asset_fullname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_username" class="control-label">Pseudo Utilisateur</label>
						<div class="form-group">
							<input type="text" name="asset_username" value="<?php echo $this->input->post('asset_username'); ?>" class="form-control" id="asset_username" />
							<span class="text-danger"><?php echo form_error('asset_username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_email" class="control-label"><span class="text-danger">*</span>Adresse Email</label>
						<div class="form-group">
							<input type="text" name="asset_email" value="<?php echo $this->input->post('asset_email'); ?>" class="form-control" id="asset_email" />
							<span class="text-danger"><?php echo form_error('asset_email');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="asset_sexe" class="control-label">Sexe de l'utilisateur</label>
						<div class="form-group">
							<select name="asset_sexe" class="form-control">
								<option value="">Selectionnez sexe</option>
								<?php 
								$asset_fonction_values = array(
									'masculin'=>'Homme',
									'feminin'=>'Femme',
								);

								foreach($asset_fonction_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('asset_sexe')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_phone" class="control-label">Numero de telephone</label>
						<div class="form-group">
							<input type="text" name="asset_phone" value="<?php echo $this->input->post('asset_phone'); ?>" class="form-control" id="asset_phone" />
							<span class="text-danger"><?php echo form_error('asset_phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_type" class="control-label"><span class="text-danger">*</span>Type compte utilisateur</label>
						<div class="form-group">
							<select name="asset_type" class="form-control">
								<option value="">Selectionnez un type compte</option>
								<?php 
								$asset_fonction_values = array(
									'admin'=>'Admin systeme',
									'user'=>'Utilisateur',
								);

								foreach($asset_fonction_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('asset_type')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('asset_type');?></span>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<label for="asset_fonction" class="control-label"><span class="text-danger">*</span> Fonction agent</label>
						<div class="form-group">
							<select name="asset_fonction" class="form-control">
								<option value="">Selectionnez une fonction</option>
								<?php 
								$asset_fonction_values = array(
									'admin'=>'Administrateur',
									'grm'=>'GRM',
									'gr'=>'GR',
								);

								foreach($asset_fonction_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('asset_fonction')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('asset_fonction');?></span>
						</div>
					</div>
					

					
					<div class="col-md-6">
						<label for="asset_matricule" class="control-label">Numero Matricule Agent</label>
						<div class="form-group">
							<input type="text" name="asset_matricule" value="<?php echo $this->input->post('asset_matricule'); ?>" class="form-control" id="asset_matricule" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="asset_password" class="control-label"><span class="text-danger">*</span>Creer un Mot de passe</label>
						<div class="form-group">
							<input type="text" name="asset_password" value="<?php echo $this->input->post('asset_password'); ?>" class="form-control" id="asset_password" />
							<span class="text-danger"><?php echo form_error('asset_password');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="password_confirm" class="control-label"><span class="text-danger">*</span>Confirmer le Mot de passe</label>
						<div class="form-group">
							<input type="text" name="password_confirm" value="<?php echo $this->input->post('password_confirm'); ?>" class="form-control" id="password_confirm" />
							<span class="text-danger"><?php echo form_error('password_confirm');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Creer compte utilisateur
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>