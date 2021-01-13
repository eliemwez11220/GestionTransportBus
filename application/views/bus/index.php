<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bus Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bus/add'); ?>" class="btn btn-success btn-sm">Ajouter un nouveau bus</a> 
                </div>
            </div>
            <div class="box-body">

                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NumPlaque</th>
						<th>MarqueBus</th>
						<th>LibelleBus</th>
						<th>NombreSiege</th>
						<th>DateAjout</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bus as $t){ ?>
                    <tr>
						<td><?php echo $t['bus_id']; ?></td>
						<td><?php echo $t['numPlaque']; ?></td>
						<td><?php echo $t['marqueBus']; ?></td>
						<td><?php echo $t['libelleBus']; ?></td>
						<td><?php echo $t['nombreSiege']; ?></td>
						<td><?php echo $t['dateAjout']; ?></td>
						<td>
                            <a href="<?php echo site_url('bus/edit/'.$t['bus_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('bus/remove/'.$t['bus_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
