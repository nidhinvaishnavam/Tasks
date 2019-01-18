<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<h1 class="title">{{$project->title}}</h1>
<h4>{{$project->description}}</h4><br><a href="/project/{{$project->id}}/edit">edit</a><br><br>
@if($project->tasks->count())
<h1 class="title">Tasks</h1>	
<div>
	@foreach($project->tasks as $task)
	<div class="box">
		<form method="POST" action="/tasks/{{$task->id}}">
			@method('PATCH')
			@csrf
		<label class="checkbox" for="completed">
			<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked':''}} >
			{{$task->description}}
		</label>
		</form>
	</div>
	@endforeach 
	</div>
	@endif	

<form class="box" method="POST" action="/project/tasks/{{$project->id}}">
	@csrf
	<div class="field">
		<label class="label" for="description">New Task</label>
		<div class="control">
			<input type="text" name="description" class="input" placeholder="New Task">
		</div>
		
	</div>
		<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Add Task</button>
			@include('error')
</form>
</body>
</html>