@extends('layouts.app')

@section('content')
<div class="container">
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif
	<table class="table table-hover table-striped">
		<thead class="thead-dark">
		  <tr>
			 <th>id</th>
			 <th class="w-100">Title</th>
			 <th colspan="3">Actions</th>
		  </tr>
		</thead>
		<tbody>
			@forelse ($comics as $comic)
		  <tr>
				<th scope="row">{{$comic->id}}</th>
				<td class="px-2">{{$comic->title}}</td>
				<td class="px-2"><a class="btn btn-primary" href=""><i class="fa-solid fa-plus"></i></a></td>
				<td class="px-2"><a class="btn btn-secondary" href="{{route('admin.comics.edit', $comic->id)}}"><i class="fa-solid fa-pen"></i></a></td>
				<td class="px-2">
					<form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button value="delete" type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></i></button>
					</form>
				</td>
				
			</tr>
			@empty
			<h4>...</h4>
			@endforelse
		</tbody>
	 </table>
</div>
@endsection
