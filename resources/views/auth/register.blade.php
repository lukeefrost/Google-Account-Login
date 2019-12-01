<div class="form-group">
  <label for="name" class="col-md-4 control-label">Register With</label>
  <div class="col-md-6">
    <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
    <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
    <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
    <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
  </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                         <label for="name" class="col-md-4 control-label">Name</label>
                         <div class="col-md-6">
                         @if(!empty($name))
                             <input id="name" type="text" class="form-control" name="name" value="{{$name}}" required autofocus>
                         @else
                             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                         @endif
                             @if ($errors->has('name'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                         <div class="col-md-6">
                             @if(!empty($email))
                             <input id="email" type="email" class="form-control" name="email" value="{{$email}}" required>
                             @else
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                             @endif
                             @if ($errors->has('email'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>
