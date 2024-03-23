<?php
	
	
	require_once("config/database_config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
	    <div class="row mt-5">
	        <div class="col-md-6 offset-md-3">
	            <h1 class="text-center mb-4">ToDo List</h1>
	            <!-- Form to add new task -->
	            <form id="taskForm" action="assets/php/add_task.php" method="post">
	                <div class="input-group mb-3">
	                    <input type="text" class="form-control" placeholder="Add a new task..." id="taskInput" name="task">
	                    <button class="btn btn-primary" type="submit">Add Task</button>
	                </div>
	            </form>
	            <!-- Task List -->
	            <ul class="list-group" id="taskList">
	                <?php require_once("assets/php/list_task.php"); ?>
	            </ul>
	        </div>
	    </div>
	</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<!-- jquery -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<!-- bootstrap JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>