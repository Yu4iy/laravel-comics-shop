@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{route('admin.comic.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
		  <label for="title">Title</label>
		  <input name="title" id="title" class="form-control" type="text" value="{{old('title')}}">
		  @error('title')
		  <div class="text-danger">{{$message }}</div>
		  @enderror
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" class="form-control" id="description" rows="3">{{old('description')}}</textarea>
			@error('description')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="price">Price</label>
			<input name="price" id="price" class="form-control" type="number" value="{{old('price')}}">
			@error('price')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="series">Series</label>
			<input  name="series" id="series" class="form-control" type="text" value="{{old('series')}}">
			@error('series')
			<div class="text-danger">{{$message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<label for="type">Type</label>
			<select name="type" id="type" class="form-control form-control-sm" value="{{old('type')}}">
				<option value=""></option>
				<option value="1"  {{ old('type') == 1 ? 'selected' : '' }} >Graphic Novel</option>
				<option value="2" {{old('type') == 2 ? 'selected' : '' }} >Comic Book</option>
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

		<button class="btn btn-success" type="submit" >CREATE</button>
	 </form>
</div>
@endsection
