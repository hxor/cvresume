<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Name of Product/Project']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Category') !!}
    {!! Form::text('category', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('category') }}</small>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    {!! Form::label('content', 'Description') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('content') }}</small>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    {!! Form::label('image', 'Image') !!}
    <div class="input-group">
      {!! Form::text('image', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-default">
          <i class="fa fa-cloud-upload"></i> Choose
        </a>
      </span>
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">
    <small class="text-danger">{{ $errors->first('photo') }}</small>
</div>

<div class="form-group text-right m-b-0">
  <button class="btn btn-primary waves-effect waves-light" type="submit">
    Submit
  </button>
  <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
    Reset
  </button>
</div>
