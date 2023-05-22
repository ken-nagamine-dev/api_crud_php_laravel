<?php

namespace App\Http\Controllers;

use App\Models\NameModel;

class PostApiController extends Controller
{
    public function index()
    {
        return NameModel::all();
    }

    public function show($id){
        return NameModel::findOrFail($id);
    }

    public function store() 
    {
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
    
        return NameModel::create([
            'name' => request('name'),
            'content' => request('content'),
        ]);
    }

    public function update(NameModel $nameModel){
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
    
        $success = $nameModel->update([
            'name' => request('name'),
            'content' => request('content'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function destroy(NameModel $nameModel) {
        $success = $nameModel->delete();

        return [
            'success' => $success
        ];
    }
}
