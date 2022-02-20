<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $comics = Comic::all();
      return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
      return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 
		$request->validate([
			'title' => 'required',
			'description' => 'required',
			'thumb' => 'required|file|mimes:jpeg,bmp,png',
			'price' => 'required',
			'series' => 'required',
			'type' => 'required',
			]);
		$data = $request->all();
	
		$new_comic = new Comic();

		$img_path = Storage::put('thumbs', $data['thumb']);
		$slug = Str::slug($data['title'], '-');
		
		// CREAZIONE DI SLUG UNIVOCO
		$count = 1;
		$base_slug = $slug;
			while(Comic::where('slug', $slug)->first()){
				$slug = $base_slug.'-'.$count;
				$count++;
			}
		$data['slug'] = $slug;
		$data['thumb'] = $img_path;
		$new_comic -> fill($data);
		$new_comic -> save();
		
      dump($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $comic = Comic::find($id);
		return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
$request->validate([
			'title' => 'required',
			'description' => 'required',
			'thumb' => 'required|file|mimes:jpeg,bmp,png',
			'price' => 'required',
			'series' => 'required',
			'type' => 'required',
			]);

		$data = $request->all();

		$comic = Comic::find($id);

		if($data['title'] == $comic->title){
			$slug = Str::slug($data['title'], '-');
					// CREAZIONE DI SLUG UNIVOCO
			$count = 1;
			$base_slug = $slug;

			while(Comic::where('slug', $slug)->first()){
				$slug = $base_slug.'-'.$count;
				$count++;
			}
			$data['slug'] = $slug;
		}else{
			$data['slug'] = $comic->slug;
		}
		$comic->update($data);
		return redirect('admin/comics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comic_to_delete = Comic::find($id);
		$comic_to_delete->delete();
		Storage::delete($comic_to_delete->thumb);
		return redirect('admin/comics')->with('status', 'Comic was Removed');
    }
}
