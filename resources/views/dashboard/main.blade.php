@extends('layouts.main')

@section('title','Dasboard Page')
    
@section('container')

    <div class="bg-white rounded p-3 mt-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <div class="container">
                <div class="row justify-content-end">
                    <div class="col">
                        <h1 class="h2">Class List</h1>  
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" id="createNewContent">Add Content</button>
                    </div>
                </div>  
           </div>
          </div>
    
    
        <div class="table-kelas pt-4">
            <table class="table table-responsive table-datatable data-table">
               <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tbody id="table-data"></tbody>
               </thead>
            </table>
        </div>
    </div>
     
    <script src="{{ asset('js/content/content.js') }}"></script>
    {{-- <script src="{{ asset('js/dashboard.js') }}"></script> --}}
@endsection
