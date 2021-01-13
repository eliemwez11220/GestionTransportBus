<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Entretiens Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('entretien/add'); ?>" class="btn btn-success btn-sm">Ajouter un entretien</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>BusSid</th>
						<th>Mecanicien</th>
						<th>DateEntretien</th>
						<th>EtatBus</th>
						<th>FraisEntretien</th>
						<th>PanneDetectee</th>
						<th>PieceEndommagee</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($entretiens as $t){ ?>
                    <tr>
						<td><?php echo $t['ent_id']; ?></td>
						<td><?php echo $t['bus_sid']; ?></td>
						<td><?php echo $t['mec_sid']; ?></td>
						<td><?php echo $t['dateEntretien']; ?></td>
						<td><?php echo $t['etatBus']; ?></td>
						<td><?php echo $t['fraisEntretien']; ?></td>
						<td><?php echo $t['panneDetectee']; ?></td>
						<td><?php echo $t['pieceEndommagee']; ?></td>
						<td><?php echo $t['ent_observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('entretien/edit/'.$t['ent_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('entretien/remove/'.$t['ent_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
