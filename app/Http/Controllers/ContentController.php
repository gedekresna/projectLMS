<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\Content;
use DataTables;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

            if($request->ajax()){
                $query = Content::get();
                return Datatables::of($query)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            $btn = '
                                <button class="btn btn-warning edit-btn" data-id="'.$row->id.'"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger delete-btn" data-id="'.$row->id.'"><i class="bi bi-trash3"></i></button>
                            ';
                            // $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm" onclick="editContent()"><i class="bi bi-pencil-square"></i></a>';
                            // $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>';

                            return $btn;
                        })
                        ->make(true);
            }

            return view('dashboard.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $validatedData["id"] = $request->id;
        
        try{
            Content::updateOrCreate($validatedData);

            return redirect('/dashboard')->with('success','Data barang berhasil dibuat');
        }catch(err){
            alert("error create content");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $content = Content::find($id);
        return response()->json($content);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        
        try{
            $content = Content::where('id',$id)->update($validatedcontent);

            //return redirect('/dashboard')>with('success','Data barang berhasil diupdate');
            return response()->json([
                'data' => $content,
                'message' => "success update data"
            ]);
        }catch(err){
            alert("error create content");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $content = Content::where('id',$id)->delete();
        return response()->json([
            'data' => $content,
            'message' => "success delete data"
        ]);
    }
}
