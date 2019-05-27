<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Response;

class UploadController extends Controller
{
    public function postImages(Request $request)
    {
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                $imageFiles = $request->file('file');
                $folderDir = 'public/images';
                $destinationPath = base_path() . '/' . $folderDir;
                $images = [];
                foreach ($request->file('file') as $fileKey => $fileObject ) {
                    if ($fileObject->isValid()) {
                        $destinationFileName = $fileObject->getClientOriginalName();
                        $fileObject->move($destinationPath, $destinationFileName);
                        $images = Arr::prepend($images, 'images/'.$destinationFileName);
                    }
                }
                return Response::json($images);
            }
        }
        return false;
    }
}
