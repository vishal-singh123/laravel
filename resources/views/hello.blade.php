<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
    <div class="register container jumbotron col-md-6 col-md-offset-3">
        <div class="text-center">
            {!! Form::open(array('method' => 'post', 'url' => '/register', 'files' => true)) !!}
            <div class="row col-md-6 form_fill">
                <div class="registerUser form-field-pull-down">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            {!! Form::text('email', old('email'), array('placeholder' => 'YOUR EMAIL ADDRESS','id' => 'username', 'class' => 'form-control', 'required', 'autocomplete' => 'off')) !!}
                        </div>
                        @if ($errors->has('email')) <div class="help-block">{{ $errors->first('email') }}</div> @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        {!! Form::text('name', old('name'), array('placeholder' => 'YOUR FULL NAME','id' => 'fullname', 'class' => 'form-control', 'required', 'autocomplete' => 'off')) !!}
                    </div>
                    @if ($errors->has('name')) <div class="help-block">{{ $errors->first('name') }}</div> @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
                        <div class="dropdown">
                            {!! Form::select('gender', ['' => 'Select Gender', 'MALE' => 'Male', 'FEMALE' => 'Female'], old('gender'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    @if ($errors->has('gender')) <div class="help-block">{{ $errors->first('gender') }}</div> @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        {!! Form::textarea('address', old('address'), array('placeholder' => 'YOUR ADDRESS','id' => 'address', 'class' => 'form-control', 'required', 'cols' => '50', 'rows' => '3', 'autocomplete' => 'off')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        {!! Form::text('phone', old('phone'), array('placeholder' => 'YOUR CONTACT NO.','id' => 'phoneNo', 'class' => 'form-control', 'required','maxlength' => '10', 'autocomplete' => 'off')) !!}
                    </div>
                    @if ($errors->has('phone')) <div class="help-block">{{ $errors->first('phone') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-12">
                {!! Form::submit('Save User',array('class' => 'col-sm-6 col-sm-offset-3 btn btn-info next-btn')) !!}
            </div>
        </div>
    </div>
  </body>
</html>
