@extends('layouts.backend.app')

@section('styles')

@endsection


@section('content')
  <div class="container">

        @include('layouts.backend.partials._bread', ['data' => empty($bread) ? '' : $bread])

        <div class="row">
          <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Edit {{ $exp->title }} Category</b></h4>

            {!! Form::model($exp, ['route' => ['admin.exp.update', $exp->id],  'method' => 'PUT']) !!}

              @include('main.backend.exp._form')

            {!! Form::close() !!}

          </div>
        </div>
        <!-- end row -->
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function(){

         $('#lfm').filemanager('image');

      });
  </script>
@endsection
