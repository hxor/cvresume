<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
    {!! Form::label('firstname', 'Frist Name') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('firstname') }}</small>
</div>

<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
    {!! Form::label('lastname', 'Last Name') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('lastname') }}</small>
</div>

<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    {!! Form::label('gender', 'Active') !!}
    {!! Form::select('gender',['m'=>'Male', 'f' => 'Female', 'o' => 'Other'], null, ['class' => 'form-control',]) !!}
    <small class="text-danger">{{ $errors->first('gender') }}</small>
</div>

<div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
    {!! Form::label('birthdate', 'Birth Date') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('birthdate') }}</small>
</div>

<div class="form-group{{ $errors->has('add_street') ? ' has-error' : '' }}">
    {!! Form::label('add_street', 'Address Street') !!}
    {!! Form::textarea('add_street', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('add_street') }}</small>
</div>

<div class="form-group{{ $errors->has('add_city') ? ' has-error' : '' }}">
    {!! Form::label('add_city', 'City') !!}
    {!! Form::text('add_city', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('add_city') }}</small>
</div>

<div class="form-group{{ $errors->has('add_stat') ? ' has-error' : '' }}">
    {!! Form::label('add_stat', 'Stat/Province') !!}
    {!! Form::text('add_stat', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('add_stat') }}</small>
</div>

<div class="form-group{{ $errors->has('add_country') ? ' has-error' : '' }}">
    {!! Form::label('add_country', 'Country') !!}
    {!! Form::text('add_country', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('add_country') }}</small>
</div>

<div class="form-group{{ $errors->has('add_postcode') ? ' has-error' : '' }}">
    {!! Form::label('add_postcode', 'Zip Code') !!}
    {!! Form::text('add_postcode', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('add_postcode') }}</small>
</div>

<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Phone Number') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('phone') }}</small>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group{{ $errors->has('interest') ? ' has-error' : '' }}">
    {!! Form::label('interest', 'Interest') !!}
    {!! Form::textarea('interest', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('interest') }}</small>
</div>

<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
    {!! Form::label('photo', 'Photo') !!}
    <div class="input-group">
      {!! Form::text('photo', null, ['id' => 'thumbnail', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
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
