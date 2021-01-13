<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bus Edition</h3>
            </div>
			<?php echo form_open('bus/edit/'.$bus['bus_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="numPlaque" class="control-label"><span class="text-danger">*</span>Numero Plaque</label>
						<div class="form-group">
							<input type="text" name="numPlaque" value="<?php echo ($this->input->post('numPlaque') ? $this->input->post('numPlaque') : $bus['numPlaque']); ?>" class="form-control" id="numPlaque" />
							<span class="text-danger"><?php echo form_error('numPlaque');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="marqueBus" class="control-label"><span class="text-danger">*</span>Marque Bus</label>
						<div class="form-group">
							<input type="text" name="marqueBus" value="<?php echo ($this->input->post('marqueBus') ? $this->input->post('marqueBus') : $bus['marqueBus']); ?>" class="form-control" id="marqueBus" />
							<span class="text-danger"><?php echo form_error('marqueBus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="libelleBus" class="control-label">Libelle Bus</label>
						<div class="form-group">
							<input type="text" name="libelleBus" value="<?php echo ($this->input->post('libelleBus') ? $this->input->post('libelleBus') : $bus['libelleBus']); ?>" class="form-control" id="libelleBus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreSiege" class="control-label">Nombre Siege</label>
						<div class="form-group">
							<input type="text" name="nombreSiege" value="<?php echo ($this->input->post('nombreSiege') ? $this->input->post('nombreSiege') : $bus['nombreSiege']); ?>" class="form-control" id="nombreSiege" />
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