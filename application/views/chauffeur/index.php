<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Chauffeurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('chauffeur/add'); ?>" class="btn btn-success btn-sm">Ajouter un nouveau chauffeur</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Matricule</th>
						<th>NomChauffeur</th>
						<th>Telephone</th>
						<th>DateAjout</th>
						<th>AdresseChauffeur</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($chauffeurs as $t){ ?>
                    <tr>
						<td><?php echo $t['chauff_id']; ?></td>
						<td><?php echo $t['matriculeChauffeur']; ?></td>
						<td><?php echo $t['nomChauffeur']; ?></td>
						<td><?php echo $t['telephone']; ?></td>
						<td><?php echo $t['dateAjout']; ?></td>
						<td><?php echo $t['adresseChauffeur']; ?></td>
						<td>
                            <a href="<?php echo site_url('chauffeur/edit/'.$t['chauff_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('chauffeur/remove/'.$t['chauff_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
