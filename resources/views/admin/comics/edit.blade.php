@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{route('admin.comics.update', $comic->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="form-group">
		  <label for="title">Title</label>
		  <input name="title" id="title" class="form-control" type="text" value="{{old('title',$comic->title)}}">
		  @error('title')
		  <div class="text-danger">{{$message }}</div>
		  @enderror
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" class="form-control" id="description" rows="3">{{old('description',$comic->description)}}</textarea>
			@error('description')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="price">Price</label>
			<input name="price" id="price" class="form-control" type="number" value="{{old('price',$comic->price)}}">
			@error('price')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="series">Series</label>
			<input  name="series" id="series" class="form-control" type="text" value="{{old('series',$comic->series)}}">
			@error('series')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="type">Type</label>
			<select name="type" id="type" class="form-control form-control-sm">
				<option value="graphic novel"  {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }} >Graphic Novel</option>
				<option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }} >Comic Book</option>
			</select>
			@error('type')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="thumb">Thumb</label>
			<input name="thumb" id="thumb" class="form-control" type="file">
			@error('thumb')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<button class="btn btn-success" type="submit" >UPDATE</button>
	 </form>
</div>
@endsection
