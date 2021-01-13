<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Am User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$tb_am_user['id_asset']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="asset_fullname" class="control-label"><span class="text-danger">*</span>Asset Fullname</label>
						<div class="form-group">
							<input type="text" name="asset_fullname" value="<?php echo ($this->input->post('asset_fullname') ? $this->input->post('asset_fullname') : $tb_am_user['asset_fullname']); ?>" class="form-control" id="asset_fullname" />
							<span class="text-danger"><?php echo form_error('asset_fullname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_username" class="control-label">Asset Username</label>
						<div class="form-group">
							<input type="text" name="asset_username" value="<?php echo ($this->input->post('asset_username') ? $this->input->post('asset_username') : $tb_am_user['asset_username']); ?>" class="form-control" id="asset_username" />
							<span class="text-danger"><?php echo form_error('asset_username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_email" class="control-label"><span class="text-danger">*</span>Asset Email</label>
						<div class="form-group">
							<input type="text" name="asset_email" value="<?php echo ($this->input->post('asset_email') ? $this->input->post('asset_email') : $tb_am_user['asset_email']); ?>" class="form-control" id="asset_email" />
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
						<label for="asset_phone" class="control-label">Asset Phone</label>
						<div class="form-group">
							<input type="text" name="asset_phone" value="<?php echo ($this->input->post('asset_phone') ? $this->input->post('asset_phone') : $tb_am_user['asset_phone']); ?>" class="form-control" id="asset_phone" />
							<span class="text-danger"><?php echo form_error('asset_phone');?></span>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<label for="asset_matricule" class="control-label">Asset Matricule</label>
						<div class="form-group">
							<input type="text" name="asset_matricule" value="<?php echo ($this->input->post('asset_matricule') ? $this->input->post('asset_matricule') : $tb_am_user['asset_matricule']); ?>" class="form-control" id="asset_matricule" />
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
									'manager'=>'Chef de service',
									'gouverneur'=>'Agent Gouvernorat',
									'bourgmestre'=>'Agent commune',
									'agent'=>'Agent bureau',
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
                        <label for="asset_password" class="control-label"><span class="text-danger">*</span>Changer mot de passe</label>
                        <div class="form-group">
                            <input type="text" name="asset_password" value="<?php echo $this->input->post('asset_password'); ?>" class="form-control" id="asset_password" required/>
                            <span class="text-danger"><?php echo form_error('asset_password');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirm" class="control-label"><span class="text-danger">*</span>Confirmer le mot de passe</label>
                        <div class="form-group">
                            <input type="text" name="password_confirm" value="<?php echo $this->input->post('password_confirm'); ?>" class="form-control" id="password_confirm" required/>
                            <span class="text-danger"><?php echo form_error('password_confirm');?></span>
                        </div>
                    </div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Enregistrer modifications
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>