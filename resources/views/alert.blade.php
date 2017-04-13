<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="app">
        <enter-email v-if="step == 1" v-on:emailsave="nextStep"></enter-email>
        <enter-data v-if="step == 2" v-on:datasave="nextStep"></enter-data>
        <finish v-if="step == 3"></finish>
    </div>

    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script type="text/javascript" src="js/app.js"></script>

</body>
</html>

