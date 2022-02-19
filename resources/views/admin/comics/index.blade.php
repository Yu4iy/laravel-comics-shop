@extends('layouts.app')

@section('content')
<div class="container">
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
				<td class="px-2"><a class="btn btn-secondary" href=""><i class="fa-solid fa-pen"></i></a></td>
				<td class="px-2"><a class="btn btn-primary" href=""><i class="fa-solid fa-plus"></i></a></td>
				<td class="px-2"><a class="btn btn-danger" href=""><i class="fa-solid fa-trash-can"></i></a></td>
				
			</tr>
			@empty
			<h4>...</h4>
			@endforelse
		</tbody>
	 </table>
</div>
@endsection
