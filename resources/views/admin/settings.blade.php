@extends('admin.master')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="card mt-4">
          <div class="card-body">
              <h1>Site Settings</h1>
              <form action="{{ route('admin.settings_store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                 
  
                
              </form>
          </div>
      </div>
    </div>
  </div>
  
@stop


@section('scripts')
<script>
    // function readURL(input) {

    // }

    $('input[type=file]').on('change', function(e) {

        // console.log(e.target);

        if (e.target.files && e.target.files[0]) {

            let inp = $(this)
            var reader = new FileReader();

            reader.onload = function (e) {
                // console.log(inp);
                inp.next('img').attr('src', e.target.result).width(150);
            };

            reader.readAsDataURL(e.target.files[0]);
        }
    })
</script>
@stop
