<div class="container mb-5">
	<h2>Tasks</h2>
	<ul class="list-group">
		<li class="list-group-item">
			<form class="form-inline d-block text-center" action="<?php echo base_url() ?>app/tasks/new_task" method="post">
				<input type="text" class="form-control mr-sm-2" placeholder="Task name" name="name">
				<input type="text" class="form-control mr-sm-2" placeholder="Description" name="description">
				<select class="form-control custom-select my-1 mr-sm-2" name="status">
				    <option selected>Status</option>
				    <option value="completed">Completed</option>
				    <option value="in progress">In progress</option>
				    <option value="unessential">Unessential</option>
				    <option value="important">Very important</option>
		  		</select>
		  		<input type="date" class="form-control mr-sm-2" name="date">
		  		<input type="hidden" value="<?php echo $goal_id; ?>" name="goal_id">
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</li>
		<?php foreach ($tasks as $task) : ?>
			<li class="list-group-item">
				<h3 class="mb-0"><?php echo $task['name']; ?></h3>
				<?php if($task['status'] == 'important'): ?>
					<span class="badge badge-danger mt-0">Important</span>
				<?php elseif($task['status'] == 'completed'): ?>
					<span class="badge badge-success">Completed</span>
				<?php else: ?>
					<span class="badge badge-info"><?= ucfirst($task['status']); ?></span>
				<?php endif ?>
				
				<span class="text-muted mb-2 d-block">Date: <?php echo date('d/m/Y', strtotime($task['date'])); ?></span>
				<p><?php echo $task['description']; ?></p>
				<div class="text-right">
					<form method="post" action="<?php echo base_url() ?>app/tasks/change">
						<input type="hidden" name="task_id" value="<?php echo $task['id']; ?>">
						<input type="hidden" name="goal_id" value="<?php echo $goal_id; ?>">
						<?php if($task['status'] != 'completed'): ?>
							<button type="submit" value="complete" name="submit" class="btn btn-success">Complete</button>
						<?php endif ?>
						<button type="submit" value="delete" name="submit" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>