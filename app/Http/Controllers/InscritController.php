<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscritController extends Controller
{

    public function create(){
        return view('inscrit.detail');   

    }

      /*

    public function store(Request $req){
      
        $cat = new ();
        $cat->category= $req->input('category');
        $cat->description= $req->input('description');

        $cat->save();
        return redirect('table-list');
        


    }

    public function edit($id){
        $listcat = Category::find($id);
        return view('category.edit', ['cat' => $listcat]);

    }

    public function update(Request $req, $id){
        $listcat = Category::find($id);

        $listcat->category = $req->input('category');
        $listcat->description = $req->input('description');

        $listcat->save();
        return redirect('table-list');

    }

    public function destroy(Request $req, $id){

        $listcat = Category::find($id);
        $listcat->delete();
        return redirect('table-list');

	
    }

    */ 
}
