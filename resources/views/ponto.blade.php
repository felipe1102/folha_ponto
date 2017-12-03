<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ URL::asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form  role="form" method="POST" action="{{ url('/cadastroPonto') }}">
              {{ csrf_field() }}
              <h1>PONTO</h1>
              @if ($resposta !=  '')
                
                  <span class="help-block">
                      <strong>{{$resposta}}</strong>
                  </span>
               
              @endif
              <div>
                <input type="text" class="form-control" name="id" placeholder="Codigo" required="" />
              </div>
              <button class="btn btn-default submit" href="">Registrar</button>
              <a class="btn btn-primary submit" href="/login">Logar</a>
              
                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
