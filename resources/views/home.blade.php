<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

  <title>Loan Alerts</title>
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script> 


  </head>
  <body>
    <div id="app">
      <component v-bind:is="activeComponent" v-on:email-submitted="showPreferences" v-on:preferences-submitted="showSuccess" :email="email"></component>
    </div>

    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>

  </body>
</html>
