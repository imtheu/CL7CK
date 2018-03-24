<div class="container mt-5 mb-5">
	
	<div class="card">
		<div class="card-body">
			<h5 class="card-title"><?php echo $name; ?></h5>
			<h6 class="card-subtitle mb-2 text-muted">Created at: <?php echo date('d/m/Y H:i', strtotime($creation_date)); ?></h6>
			<h6 class="card-subtitle mb-2 text-muted">Deadline date: <?php echo date('d/m/Y H:i', strtotime($deadline_date)); ?></h6>
			<p class="card-text"><?php echo $description; ?></p>
			<div class="text-right">
				<form action="<?php echo base_url() ?>app/goals/delete" method="post">
					<a class="btn btn-info text-white" href="<?php echo base_url() ?>app/edit_goal/<?php echo $id; ?>">Edit</a>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</div>
		</div>
	</div>

</div>