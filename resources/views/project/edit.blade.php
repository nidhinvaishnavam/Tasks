<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<h1>Create orders</h1>
<form method="POST" action="/project/{{$project->id}}">
	{{method_field('PATCH')}}
	{{ 	csrf_field() }}

	<div>
		<input type="text" name="title" value="{{$project->title}}">
	</div>
	<div>
		<input type="text" name="description" value="{{$project->description}}">
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
	@include('error')
</form>
<form method="POST" action="/project/{{$project->id}}">
{{csrf_field()}}
	{{method_field('DELETE')}}
	<button type="submit">Delete</button>

</form>
</body>
</html>