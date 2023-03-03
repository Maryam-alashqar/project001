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

</script>
@stop
