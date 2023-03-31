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
                                <a href=""><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a>
                                <a href=""><button class="btn btn-danger"><i class="bi bi-trash3"></i></button></a>
                            ';

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
        
        try{
            Content::create($validatedData);

            return redirect('/dashboard');
        }catch(err){
            alert();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
