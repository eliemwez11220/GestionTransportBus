<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Rapports Entretiens</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ent Id</th>
						<th>BusID</th>
						<th>MecanicienID</th>
						<th>DateEntretien</th>
						<th>EtatBus</th>
						<th>FraisEntretien</th>
						<th>PanneDetectee</th>
						<th>PieceEndommagee</th>
						<th>Observation</th>
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
