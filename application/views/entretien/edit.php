<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Entretien Edition </h3>
            </div>
			<?php echo form_open('entretien/edit/'.$entretien['ent_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="bus_sid" class="control-label"><span class="text-danger">*</span>Bus</label>
						<div class="form-group">
							<select name="bus_sid" class="form-control">
								<option value="">selectionnez bus</option>
								<?php 
								foreach($all_bus as $bus)
								{
									$selected = ($bus['bus_id'] == $entretien['bus_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$bus['bus_id'].'" '.$selected.'>'.$bus['numPlaque'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('bus_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mec_sid" class="control-label"><span class="text-danger">*</span>Mecanicien</label>
						<div class="form-group">
							<select name="mec_sid" class="form-control">
								<option value="">selectionnez mecanicien</option>
								<?php 
								foreach($all_mecaniciens as $mecanicien)
								{
									$selected = ($mecanicien['mec_id'] == $entretien['mec_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$mecanicien['mec_id'].'" '.$selected.'>'.$mecanicien['nomMecanicien'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('mec_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateEntretien" class="control-label"><span class="text-danger">*</span>DateEntretien</label>
						<div class="form-group">
							<input type="text" name="dateEntretien" value="<?php echo ($this->input->post('dateEntretien') ? $this->input->post('dateEntretien') : $entretien['dateEntretien']); ?>" class="has-datepicker form-control" id="dateEntretien" />
							<span class="text-danger"><?php echo form_error('dateEntretien');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="etatBus" class="control-label">EtatBus</label>
						<div class="form-group">
							<input type="text" name="etatBus" value="<?php echo ($this->input->post('etatBus') ? $this->input->post('etatBus') : $entretien['etatBus']); ?>" class="form-control" id="etatBus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fraisEntretien" class="control-label">FraisEntretien</label>
						<div class="form-group">
							<input type="text" name="fraisEntretien" value="<?php echo ($this->input->post('fraisEntretien') ? $this->input->post('fraisEntretien') : $entretien['fraisEntretien']); ?>" class="form-control" id="fraisEntretien" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="panneDetectee" class="control-label">PanneDetectee</label>
						<div class="form-group">
							<textarea name="panneDetectee" class="form-control" id="panneDetectee"><?php echo ($this->input->post('panneDetectee') ? $this->input->post('panneDetectee') : $entretien['panneDetectee']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pieceEndommagee" class="control-label">PieceEndommagee</label>
						<div class="form-group">
							<textarea name="pieceEndommagee" class="form-control" id="pieceEndommagee"><?php echo ($this->input->post('pieceEndommagee') ? $this->input->post('pieceEndommagee') : $entretien['pieceEndommagee']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ent_observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="ent_observation" class="form-control" id="ent_observation"><?php echo ($this->input->post('ent_observation') ? $this->input->post('ent_observation') : $entretien['ent_observation']); ?></textarea>
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