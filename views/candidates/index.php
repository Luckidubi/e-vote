
<div class="row">

	<div class="col-sm-12 col-md-6">

		<div class="card my-5" style="margin: auto; width: 50%; background: green">
			<div class="card-header">
				<h2>Select Position</h2>
			</div>
				<div class="card-body">
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
						<div class="form-group">
						
							<select name="positions" class="form-control">
				            <option value="0">Select Position</option>
				          <?php $positions = (new PositionsModel)->request();
				          ?>
				          <?php foreach($positions as $position) :?>
				              <option value=<?php echo $position['Position_Name'];?>><?php echo $position['Position_Name'];?></option>
				          <?php endforeach;?>
				        </select><br>
				        <div class="text-center">
				        <input type="submit" name="Submit" class="btn btn-primary">
				    </div>
						</div>
					</form>
				</div>
			</div>
		
		
	</div>
	<hr>
	<div class="col-sm-12 col-md-6">
		
			<?php $candidates = (new CandidatesModel)->getCandidate();
				$candidates2 = new CandidatesModel;		
			?>
			<?php
			if(isset($_POST['submit'])){
				$vote = $_POST['vote'];
				$candidates2->add($vote);
			}
			?>
			
			<?php if (isset($_POST['Submit'])):?>
				<?php if(!isset($_SESSION['logged_in'])):?>
					<?php Messages::setMsg('You must be logged in to see candidates', 'error');?>

				
						<?php else:?>
								<table class="table table-responsive table-stripped p-5">
									<thead>

										<tr>
										<th scope="col">Candidate Name</th>
										<th scope="col">Position</th>
										<th scope="col">Party</th>
										<th scope="col">Action</th>

										</tr>
									</thead>
									<tbody>
									<form method="post" >
								

						<?php if(!empty($candidates)):?>

							<?php foreach($candidates as $item):?>

								<tr>
									<td><?php echo $item['Fullname']?></td>
									<td><?php echo $item['Position']?></td>
									<td><?php echo $item['Party']?></td>
									<td><input type ='radio' name='vote' value ="<?= $item['id'] ;?>"/></td>

								</tr>

							 <?php endforeach;?>

								 <tr>
								 	<td></td>
								 	<td><input type='submit' class='btn btn-success btn-sm' onclick="confirm('Are you sure you want to vote for this candidate?')" name='submit' value='Vote'></td>
								 	<td></td>
								 </tr>
									</form>
								</tbody>
							</table>

						<?php else:?> 
							<tr>
								<td><h3>No Candidate for this position</h3></td>
							</tr>
						
					    <?php endif;?>
					   <?php endif;?>
				     <?php endif;?>

					
					
			
	</div>
</div>