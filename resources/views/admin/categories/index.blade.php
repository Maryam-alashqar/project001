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
                <div class="text-right mb-3">
                    <div class="btn-group sort-btn btn-light ">
                        <button class="btn btn-light" type="button" 
                        aria-haspopup="true" aria-expanded="false">Sort by: </button>
                        <button class="btn btn-light "  data-toggle="dropdown" data-sort="none">
                            <i class="fas fa-ellipsis-v"></i></button><!-- .dropdown-toggle adds rounded borders and reduces padding. It does not trigger dropdowns. -->
                        <ul class="dropdown-menu">
                            <li  class="dropdown-item">
                                <a href="#" tabindex="-1" data-type="alpha">Name</a>
                            </li>
                            <li  class="dropdown-item">
                                <a href="#" tabindex="-1" data-type="numeric">id</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
<script>
    (function(fn) {
	'use strict';
	fn(window.jQuery, window, document);
}(function($, window, document) {
	'use strict';
	
	$(function() {
		$('.sort-btn').on('click', '[data-sort]', function(event) {
			event.preventDefault();
			
			var $this = $(this),
				sortDir = 'desc';
			
			if ($this.data('sort') !== 'asc') {
				sortDir = 'asc';
			}
			
			$this.data('sort', sortDir).find('.fa').attr('class', 'fas fa-ellipsis-v' + sortDir);
			
			// call sortDesc() or sortAsc() or whathaveyou...
		});
	});
}));
</script>