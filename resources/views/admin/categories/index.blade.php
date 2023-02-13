@extends('admin.master')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="card mt-4">
          <div class="card-body">

              <h1>All Categories</h1>
              <table class="table table-bordered">
                  <thead>
                      <tr  class="bg-dark text-white">
                          <th>ID</th>
                          <th>Name</th>
                          <th>description</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($categories as $category)
                          <tr>
                              <td>{{ $category->id }}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->description }}</td>
                         
                          </tr>
                      @empty
                          <tr>
                              <td colspan="4">No Data Found</td>
                          </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
  
@stop