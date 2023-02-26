@extends('admin.master')

@section('content')

<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Add new Articales</h1>
                <form action="{{ route('admin.articales.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label for="category_id">Category</label>
                        <div class="col-md-6">

                            <select name="category_id" id="category_id"
                                class="form-control @error('category_id') is-invalid @enderror ">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <div class="col-md-6">

                            <input id="title" name="title" type="text" placeholder="Title"
                                class="form-control @error('title') is-invalid @enderror " value="{{ old('title') }}" />
                            @error('title')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="short_description">Short Description</label>
                        <div class="col-md-6">

                            <input id="short_description" name="short_description" type="text"
                                class="form-control @error('short_description') is-invalid @enderror "
                                value="{{ old('short_description') }}" />
                            @error('short_description')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input id="image" name="image" type="file"
                            class="form-control @error('image') is-invalid @enderror " />
                        @error('image')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description">Full Description</label>
                        <div class="mt-2">
                            <textarea name="full_description" class="myeditor"
                                value="{{ old('full_description') }}"></textarea>
                            @error('full_description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <button class="btn btn-success px-5 mb-5"><i class="fas fa-save"></i> Add</button>

                </form>
            </div>
        </div>
    </div>
</section>
@stop


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js"
    integrity="sha512-eV68QXP3t5Jbsf18jfqT8xclEJSGvSK5uClUuqayUbF5IRK8e2/VSXIFHzEoBnNcvLBkHngnnd3CY7AFpUhF7w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    tinymce.init({
        selector: '.myeditor'
    })
</script>
@stop