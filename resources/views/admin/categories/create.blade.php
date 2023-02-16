@extends('admin.master')

@section('content')

<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Add new category</h1>
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <div class="col-md-6">

                            <input id="name" name="name" type="text" placeholder="Name"
                                class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" />
                            @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <!--   
                  <div class="mb-3">
                      <label for="image">Image</label>
                      <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror " />
                      @error('image')
                          <small class="invalid-feedback">{{ $message }}</small>
                      @enderror
                  </div> -->

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <div class="mt-2">
                            <textarea name="description" class="myeditor">{{ old('description') }}</textarea>
                            @error('description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <button class="btn btn-success px-5"><i class="fas fa-save"></i> Add</button>

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