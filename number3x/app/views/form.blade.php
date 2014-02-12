<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eastvantage #3 - Index</title>

    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        {{ Form::open(array('url' => 'save')) }}
            <h2>Hi, friend!</h2>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> {{ $message }}</div>
            @endif

            {{ $errors->first('first_name', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Warning!</strong> :message</div>') }}
            {{ $errors->first('last_name', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Warning!</strong> :message</div>') }}
            {{ $errors->first('email', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Warning!</strong> :message</div>') }}
            {{ $errors->first('birthdate', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Warning!</strong> :message</div>') }}
            {{ $errors->first('favorite', '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Warning!</strong> :message</div>') }}
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ Input::old('first_name') }}" required="" autofocus=""><br>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ Input::old('last_name') }}" required="" autofocus=""><br>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Input::old('email') }}" required="" autofocus=""><br>
            <p class="form-inline">Birthdate <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ Input::old('birthdate') }}" required="" autofocus=""></p>
            <input type="text" class="form-control" id="favorite" name="favorite" placeholder="Favorite ingredient" value="{{ Input::old('favorite') }}" required="" autofocus=""><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        {{ Form::close() }}
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
