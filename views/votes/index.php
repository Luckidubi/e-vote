
<div class="row">

	

		<div class="col"></div>
	<div class="col-sm-12 col-md-8">
		
			<?php $candidates = (new CandidatesModel)->request();
					
			?>
			
				
								<h3 class="display-4 text-center">Vote Counts</h3>
								<table class="table table-responsive table-stripped p-5">
									<thead>

										<tr>
										<th scope="col">Candidate Name</th>
										<th scope="col">Position</th>
										<th scope="col">Party</th>
										<th scope="col">Vote Count</th>

										</tr>
									</thead>
									<tbody>
									
								

						
							<?php foreach($candidates as $item):?>

								<tr>
									<td><?php echo $item['Fullname']?></td>
									<td><?php echo $item['Position']?></td>
									<td><?php echo $item['Party']?></td>
									<td><?php echo $item['Allvotes']?></td>

								</tr>

							 <?php endforeach;?>

						
								</tbody>
							</table>

						
						
					
					
			
	</div>
	<div class="col"></div>

