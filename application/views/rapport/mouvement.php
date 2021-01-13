<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rapports Mouvements</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Mvm Id</th>
						<th>Bus Sid</th>
						<th>Chauf Sid</th>
						<th>DateMouvement</th>
						<th>HeureDepart</th>
						<th>HeureArrivee</th>
						<th>Destination</th>
						<th>Mvm Observation</th>
						
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
