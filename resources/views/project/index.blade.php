<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<h1 class="title">Project</h1>
	<ul>	
@foreach($beverage as $od)
	<li><a href="/project/{{$od->id}}"> 
{{$od->title}}</a></li>
@endforeach
	<ul>
</body>
</html>