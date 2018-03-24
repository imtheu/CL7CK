<div class="container text-center">
	<div class="card mt-5 w-75 mx-auto text-left mb-5">
		<div class="card-header">
			<h1 class="">Edit goal</h1>
		</div>
		<div class="card-body">
			<form action="<?php echo base_url(); ?>goals/edit" method="post" name="userinput">
				<div class="form-group">
					<label for="name">Goal name</label>
					<input type="text" class="form-control" required id="name" name="name" placeholder="Enter goal name" value="<?php echo $name; ?>" autofocus>
				</div>
				<div class="form-group">
			    	<label for="description">Goal description</label>
				    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter goal description"><?php echo $description; ?></textarea>
			 	</div>
				<div class="form-group">
					<label for="deadlinedate">Deadline date</label>
					<input type="date" class="form-control" name="deadlinedate" id="deadlinedate" value="<?php echo $deadline_date; ?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
				<input type="hidden" name="creation_date" value="<?php echo $creation_date; ?>">
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Edit goal</button>
				</div>
			</form>
		</div>
	</div>
</div>