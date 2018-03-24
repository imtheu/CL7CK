<?php 
	function create_default_goals($user_id){
		
		$CI = get_instance();

		$goal1 = array(
			'user_id' => $user_id,
			'name' => 'My first goal',
			'description' => 'This is your first goal. By clicking here you can edit this goal, delete, or create tasks to be fulfilled!',
			'creation_date' => date('Y-m-d H:i:s'),
			'deadline_date' => date('Y-m-d H:i:s')
		);

		$goal2 = array(
			'user_id' => $user_id,
			'name' => 'Another goal',
			'description' => "You can have multiple goals! It's very simple: Just click on 'new goal' in the page header.",
			'creation_date' => date('Y-m-d H:i:s'),
			'deadline_date' => date('Y-m-d H:i:s')
		);

		$goal3 = array(
			'user_id' => $user_id,
			'name' => "Isn't it amazing?",
			'description' => "List all your goals, all your tasks, deadlines... and let's go!",
			'creation_date' => date('Y-m-d H:i:s'),
			'deadline_date' => date('Y-m-d H:i:s')
		);

		$CI->load->model('goals_model');
		$id1 = $CI->goals_model->save($goal1);
		$id2 = $CI->goals_model->save($goal2);
		$id3 = $CI->goals_model->save($goal3);

		$task1 = array(
			'name' => 'First task',
			'description' => 'This is your first task.',
			'date' => date('Y/m/d'),
			'status' => 'completed',
			'date' => date('Y/m/d'),
			'creation_date' => date('Y/m/d'),
			'user_id' => $user_id,
			'goal_id' => $id1
		);

		$task2 = array(
			'name' => 'Want to create new tasks?',
			'description' => 'You can create new tasks by filling out the form above and clicking submit.',
			'date' => date('Y/m/d'),
			'status' => 'in progress',
			'date' => date('Y/m/d'),
			'creation_date' => date('Y/m/d'),
			'user_id' => $user_id,
			'goal_id' => $id1
		);

		$task3 = array(
			'name' => 'Are you lost?',
			'description' => 'You can see how tasks work by checking your first goal.',
			'date' => date('Y/m/d'),
			'status' => 'important',
			'date' => date('Y/m/d'),
			'creation_date' => date('Y/m/d'),
			'user_id' => $user_id,
			'goal_id' => $id2
		);

		$task4 = array(
			'name' => 'Look at the buttons!',
			'description' => 'If you have completed a task, you can click "complete" and if you want to delete it, just click "delete".',
			'date' => date('Y/m/d'),
			'status' => 'in progress',
			'date' => date('Y/m/d'),
			'creation_date' => date('Y/m/d'),
			'user_id' => $user_id,
			'goal_id' => $id3
		);

		$CI->load->model('tasks_model');
		$CI->tasks_model->save($task1);
		$CI->tasks_model->save($task2);
		$CI->tasks_model->save($task3);
		$CI->tasks_model->save($task4);	

	}