<?php

namespace App\Http\Controllers;

use App\Services\ImagesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    private $image;

    function __construct(ImagesService $imagesService)
    {
        $this->images = $imagesService;
    }

    public function index()
    {
        $images = $this->images->all();

        return view('home', ['images' => $images]);
    }

    public function addImage()
    {
        return view('addImage');
    }

    public function updateImage(Request $request, $id)
    {
        $this->images->update($id, $request->image);

        return redirect('/');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $this->images->add($image);

        return redirect('/');
    }

    public function editImage($id)
    {
        $image = DB::table('images')->select('*')->where('id', '=', $id)->first();

        return view('editImage', ['image' => $image]);
    }

    public function showImage($id)
    {
        $image = $this->images->getOne($id);

        return view('showImage', ['image' => $image]);
    }

    public function deleteImage($id)
    {
        $this->images->delete($id);

        return redirect('/');
    }
}
