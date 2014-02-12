<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eastvantage Admin - Edit Ingredient</title>

    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//code.jquery.com/ui/1.10.4/themes/start/jquery-ui.css" rel="stylesheet">
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
        {{ Form::model($ingredient, array('route' => array('ingredientudpate', $ingredient->id))) }}
            <h2>Type an ingredient to update</h2>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Success!</strong> {{ $message }}</div>
            @endif
            {{ Form::token() }}

            {{ Form::hidden('id') }}

            {{ Form::label('name', 'Ingredient Name') }}
            {{ Form::text('name', Input::old('name'), array('class'=>'form-control')) }}

            {{ Form::label('popularity', 'Ingredient Popularity') }}
            {{ Form::text('popularity', Input::old('popularity'), array('class'=>'form-control')) }}

            {{ Form::submit('Edit', array('class'=>'btn btn-success')) }}
        {{ Form::close() }}
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#favorite').autocomplete({
       minLength: 2,
       source: "/autocomplete"
    });
    </script>
  </body>
</html>
