<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesService
{
    public function all()
    {
        $images = DB::table('images')->select('*')->get();
        return $images;
    }

    public function add($image)
    {
        $fileName = $image->store('uploads');

        DB::table('images')->insert([
            'image' => $fileName
        ]);
    }

    public function update($id, $image)
    {
        $prevImage = $this->getOne($id);
        Storage::delete($prevImage->image);
        $fileName = $image->store('uploads');

        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $fileName]);
    }

    public function getOne($id)
    {
        $image = DB::table('images')->select()->where('id', '=', $id)->first();
        return $image;
    }

    public function delete($id)
    {
        $image = $this->getOne($id);
        Storage::delete($image->image);

        DB::table('images')->delete($id);
    }
}
