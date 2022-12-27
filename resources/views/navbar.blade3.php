<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/nav.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
   
        <div class="navbar">
          <ul>  
           <li> <a href="#home">Mwanzo</a></li>
            <div class="subnav">
                <button class="subnavbtn">Kuhusu Sisi  <i class="fa fa-chevron-right"></i></button>
                <div class="subnav-content">
                <a href="{{ url('taasisi') }}">Taasisi</a>
                <a href="/trustee">Board Of Trustee</a>
                <a href="/managment">Managment</a>
                </div>
            </div> 
            <div class="subnav">
                <button class="subnavbtn">Mafao Yetu  <i class="fa fa-chevron-right"></i></button>
                <div class="subnav-content">
                <a href="/kustaafu">Kustaafu</a>
                <a href="/urithi">Kifo</a>
                <a href="/ugonjwa">Ugonjwa</a>
                <a href="/uzazi">Maternity</a>
                </div>
            </div> 
            <div class="subnav">
                <button class="subnavbtn">Uwekezaji  <i class="fa fa-chevron-right"></i></button>
                <div class="subnav-content">
                <a href="/daruwekezaji">Dar es salam</a>
                <a href="/mwanzauwekezaji">Mwanza</a>
                <a href="/dodomauwekezaji">Dodoma</a>
                <a href="/arushauwekezaji">Arusha</a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbtn">Habari  <i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="subnav">
                <button class="subnavbtn">e Mrejesho  <i class="fa fa-chevron-right"></i></button>
                <div class="subnav-content">
                <a href="/maoniform">Maoni Yako</a>
                <a href="/malalamikoform">Malalmiko Yako</a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbtn">Jihudumie <i class="fa fa-chevron-right"></i></button>
                <div class="subnav-content">
                <a href="/memportal">Member Portal</a>
                <a href="/empportal">Employer Portal</a>
                <a href="/onlinesub">Online Submission</a>
                <a href="/mobileapp">Mobile App</a>
                </div>
            </div>
          </ul>
            </div>

  
    </header>
</body>
</html>