<div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
    {!! Form::label('icon', 'Fa-Icon') !!}
    {!! Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'fa-icon']) !!}
    <small class="text-danger">{{ $errors->first('icon') }}</small>
</div>

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Level education']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name of Institution') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    {!! Form::label('time', 'Time') !!}
    {!! Form::text('time', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('time') }}</small>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    {!! Form::label('content', 'Description') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('content') }}</small>
</div>

<div class="form-group text-right m-b-0">
  <button class="btn btn-primary waves-effect waves-light" type="submit">
    Submit
  </button>
  <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
    Reset
  </button>
</div>
