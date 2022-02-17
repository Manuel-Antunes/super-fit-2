<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function store(Request $request)
    {
        $uploaded = [];

        $files = $request->allFiles();
        if (sizeof($files) == 0) {
            return $uploaded;
        }
        foreach ($files['files'] as $file) {
            $nameFile = null;
            $name = uniqid(date('HisYmd'));
            $extension = $file->extension();
            $nameFile = "{$name}.{$extension}";
            // Retorna mime type do arquivo (Exemplo image/png)
            $type = $file->getMimeType();

            // Retorna o nome original do arquivo
            $f = $file->getClientOriginalName();


            $file->storeAs('uploads', $nameFile);
            $media = Media::create([
                'name' => $f,
                'file' => $name,
                'type' => $type,
                'subtype' => $extension,
            ]);
            $uploaded[] = $media;
        }
        return $uploaded;
    }
}
