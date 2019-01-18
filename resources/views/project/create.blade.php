@extends('layouts.app')
@section('content')
	

<form method="POST" action="/project">
	{{ 	csrf_field() }}
	<div class="field">
<label class="label" for="title">Porject Title</label>
	<div class="control">
		<input type="text" name="title" class="input{{$errors->has('title')? 'is-danger':''}}"placeholder="title" value="{{old('title')}}">
	</div>
	</div>
	<div class="field">
		<label class="label" for="title">Porject Title</label>
	<div class="control">
		<textarea name="description" placeholder="Description" class="input{{$errors->has('title')? 'is-danger':''}}" value="{{old('description')}}"></textarea> 
	</div>
</div>
	<div>
		<button type="submit">Submit</button>
	</div>
@include('error')
</form>
@endsection