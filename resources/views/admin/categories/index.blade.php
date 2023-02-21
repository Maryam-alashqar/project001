@extends('admin.master')
@section('title', 'Categories')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">

                @if (session('msg'))
                <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
                @endif

                <h1>All Categories</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>ID</th>
                            <th>Name</th>
                            <th>description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure!?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
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