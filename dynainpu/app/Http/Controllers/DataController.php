<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class DataController extends Controller
{
    //
    public function loadView()
    {
        return view('index');
    }

    public function saveData(Request $request)
    {
        $fileNames = [];
        foreach($request->filess as $file){
            $fileName = time() . '.'.$file->getClientOriginalName();
            $file->move(public_path('files'), $fileName);
            $fileNames[] = 'files/'.$fileName;
        }

        $insertData = [];
        for($x = 0; $x < count($request->names); $x++){
            $insertData[] = [
                'name' => $request->names[$x],
                'file' => $fileNames[$x],
            ];
        }

        Upload::insert($insertData);

        return redirect()->back()->with('success', 'Data Inserted Successfully!');
    }
}
