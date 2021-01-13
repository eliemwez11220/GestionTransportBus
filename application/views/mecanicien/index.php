<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mecaniciens Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mecanicien/add'); ?>" class="btn btn-success btn-sm">Ajouter mecanicien</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NomMecanicien</th>
						<th>Telephone</th>
						<th>Adresse</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mecaniciens as $t){ ?>
                    <tr>
						<td><?php echo $t['mec_id']; ?></td>
						<td><?php echo $t['nomMecanicien']; ?></td>
						<td><?php echo $t['telephone']; ?></td>
						<td><?php echo $t['adresse']; ?></td>
						<td><?php echo $t['mec_observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('mecanicien/edit/'.$t['mec_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('mecanicien/remove/'.$t['mec_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
