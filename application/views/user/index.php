<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing utilisateurs</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Creer nouveau compte</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                    	<th>Avatar</th>
						<th>Nom complet</th>
						<th>Username</th>
						<th>Email</th>
						<th>Sexe</th>
						<th>Type</th>
						
						<th>Fonction</th>
						<th>Matricule</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_am_users as $t){ ?>
                    <tr>
						<td>
							<?php if (!empty($t['asset_avatar'])) { ?>
                                         <img src="<?php echo base_url() . $t['asset_avatar']; ?>" class="img-circle" alt="User Image"
                                         style="border-radius: 10px!important; height: 40px; width: 40px;"/>
                                 <?php } else { ?>
                                  <img src="<?php echo base_url(); ?>global/img/avatars/avatar.png"
                                        alt="Avatar" class="img-circle" style="border-radius: 10px!important; height: 35px; width: 40px;"/>
                                <?php } ?>
						</td>
						<td><?php echo $t['asset_fullname']; ?></td>
						<td><?php echo $t['asset_username']; ?></td>
						<td><?php echo $t['asset_email']; ?></td>
						<td><?php echo $t['asset_sexe']; ?></td>
						<td><?php echo $t['asset_type']; ?></td>
					
						<td><?php echo $t['asset_fonction']; ?></td>
						<td><?php echo $t['asset_matricule']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$t['id_asset']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                                 <?php if($t['asset_type'] !== "admin"){ ?>
                             <a onclick="return confirm('Voulez-vous vraiment supprimer ce compte')"
                             href="<?php echo site_url('user/remove/'.$t['id_asset']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
                             <?php } ?>
                            
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
