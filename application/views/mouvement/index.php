<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mouvements Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mouvement/add'); ?>" class="btn btn-success btn-sm">Ajouter un mouvement bus</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>MvmID</th>
						<th>BusID</th>
						<th>ChauffeurID</th>
						<th>DateMouvement</th>
						<th>HeureDepart</th>
						<th>HeureArrivee</th>
						<th>Destination</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mouvements as $t){ ?>
                    <tr>
						<td><?php echo $t['mvm_id']; ?></td>
						<td><?php echo $t['bus_sid']; ?></td>
						<td><?php echo $t['chauf_sid']; ?></td>
						<td><?php echo $t['dateMouvement']; ?></td>
						<td><?php echo $t['heureDepart']; ?></td>
						<td><?php echo $t['heureArrivee']; ?></td>
						<td><?php echo $t['destination']; ?></td>
						<td><?php echo $t['mvm_observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('mouvement/edit/'.$t['mvm_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('mouvement/remove/'.$t['mvm_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
