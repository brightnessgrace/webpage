<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSSSF HOME</title>
    <link rel="stylesheet" href="{{ asset('css/apps.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/apps.css')}}" />

</head>
<body class="body-container">
    <div class="top-container">
       @include('layout.header')

    </div>

    <div class="second-container">
         @include('navbar')
    </div>

    <div class="bannner">
    @include('banner')
          
    </div>
    <div class="content-container">
   
        @include('middle')
    </div>
    <div class="footer"> 
        
       @include('footer')

</div>
</body>

</html>