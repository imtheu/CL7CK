<div class="container mt-3 mb-5 text-center">
	<span class="h3">Today is <?php echo $date; ?></span>
	<h1>My goals are</h1>
	<div class="list-group w-35 text-left"> 

		<?php foreach ($goals as $goal) : ?>
			<a href="<?= base_url(); ?>app/goal/<?= $goal['id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1"><?php echo $goal['name']; ?></h5>
					<small class="text-muted">Deadline: <?php echo date('d/m/Y', strtotime($goal['deadline_date'])); ?></small>
				</div>
				<p class="mb-1"><?php echo $goal['description']; ?></p>
				<small class="text-muted">Click here to view and edit tasks</small>
			</a>
		<?php endforeach ?>
		
	</div>
</div>