@extends('admin.master')

@section('title', 'Articale Details')

@section('content')
<div class="content">
    <div class="container py-5">

        <div class="container-fluid">
            <div class="card mt-4">
                <div class="card-body">
               
                    <form action="{{ route('admin.articales.update', $articale) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
        
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text" placeholder="title" class="form-control @error('title') is-invalid @enderror " value="{{ old('title', $articale->title) }}" />
                            @error('title')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
        
                        </div>
        
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input id="image" name="image" type="file" 
                            class="form-control @error('image') is-invalid @enderror " />
                            @error('image')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                            <img width="80" src="{{ asset( $articale->image ) }}" alt="">
                        </div>
        
                        <div class="mb-3">
                            <label for="short_description">Short Description</label>
                            <div class="mt-2">
                            <textarea name="short_description" class="form-control w-100 "cols="10" rows="5">
                                {{ old('short_description', $articale->short_description) }}</textarea>
                            @error('short_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="full_description">Full Description</label>
                            <div class="mt-2">
                            <textarea name="full_description" class="myeditor form-control w-100 "cols="10" rows="20">{{ old('full_description', $articale->full_description) }}</textarea>
                            @error('full_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
        
                        <button class="btn btn-success px-5"><i class="fas fa-save"></i> Save</button>
        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.3.1/tinymce.min.js" integrity="sha512-eV68QXP3t5Jbsf18jfqT8xclEJSGvSK5uClUuqayUbF5IRK8e2/VSXIFHzEoBnNcvLBkHngnnd3CY7AFpUhF7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    tinymce.init({
        selector: '.myeditor'
    })
</script>
@stop