<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mouvement - Nouvel enregistrement</h3>
            </div>
            <?php echo form_open('mouvement/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="bus_sid" class="control-label"><span class="text-danger">*</span>Bus</label>
						<div class="form-group">
							<select name="bus_sid" class="form-control">
								<option value="">select bus</option>
								<?php 
								foreach($all_bus as $bus)
								{
									$selected = ($bus['bus_id'] == $this->input->post('bus_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$bus['bus_id'].'" '.$selected.'>'.$bus['numPlaque'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('bus_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="chauf_sid" class="control-label"><span class="text-danger">*</span>Chauffeur</label>
						<div class="form-group">
							<select name="chauf_sid" class="form-control">
								<option value="">select chauffeur</option>
								<?php 
								foreach($all_chauffeurs as $chauffeur)
								{
									$selected = ($chauffeur['chauff_id'] == $this->input->post('chauf_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$chauffeur['chauff_id'].'" '.$selected.'>'.$chauffeur['matriculeChauffeur'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('chauf_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateMouvement" class="control-label">DateMouvement</label>
						<div class="form-group">
							<input type="date" name="dateMouvement" value="<?php echo $this->input->post('dateMouvement'); ?>" class="form-control" id="dateMouvement" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="heureDepart" class="control-label">HeureDepart</label>
						<div class="form-group">
							<input type="text" name="heureDepart" value="<?php echo $this->input->post('heureDepart'); ?>" class="form-control" id="heureDepart" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="heureArrivee" class="control-label">HeureArrivee</label>
						<div class="form-group">
							<input type="text" name="heureArrivee" value="<?php echo $this->input->post('heureArrivee'); ?>" class="form-control" id="heureArrivee" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="destination" class="control-label">Destination</label>
						<div class="form-group">
							<input type="text" name="destination" value="<?php echo $this->input->post('destination'); ?>" class="form-control" id="destination" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mvm_observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="mvm_observation" class="form-control" id="mvm_observation"><?php echo $this->input->post('mvm_observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>