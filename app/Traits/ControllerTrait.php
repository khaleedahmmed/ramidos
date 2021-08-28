<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ControllerTrait
{
    public function slug($sentence)
    {
        return str::slug($sentence, '-');
    }

    public function uploadImage($image, $location = '')
    {
        $imageName = uniqid(rand()) . '.' . $image->getClientOriginalExtension();
        $image->move($location, $imageName);
        return $imageName;
    }

    public function uploadImages($images, $model, $foreign, $path = '')
    {
        if (is_array($images)) {
            foreach ($images as $image) {
                $name = uniqid(rand()) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $name);
                $model::create([
                    $foreign['key'] => $foreign['value'],
                    'name' => $name,
                ]);
            }
        } elseif ($images) {
            $name = uniqid(rand()) . '.' . $images->getClientOriginalExtension();
            $images->move($path, $name);
            $model::create($images);
        }
    }

    public function deleteImage($image, $path)
    {
        try {           
            unlink($path.$image);
            
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    public function deleteImages($images, $path)
    {
        foreach ($images->get() as $image) {
            try {
                unlink($path.$image->name);
            } catch (\Exception $e) {
                return false;
            }
        }
        $images->delete();
        return true;
    }
}
