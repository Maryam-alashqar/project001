@extends('admin.master')

@section('title', 'Authors')

@section('content')
<div class="content">
<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-body">

            @if (session('msg'))
            <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
            @endif

            <h1>All Authors information</h1>
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>contact info</th>
                        <th>No. of news</th>
                        <th> ... </th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    
                    </tr>
                  
                    <tr>
                        <td colspan="4">No Data Found</td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


@stop