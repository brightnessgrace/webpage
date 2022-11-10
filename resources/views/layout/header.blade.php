<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
        

    </head>

    <body>
      <header>
        <link href="{{ asset('img/logo/psssf.jpg') }}" rel="icon" type="image/jpg">
    
      </header>

   

     <div class="container"> 
      <div class="top-logo">

            <div class="header-one">
                  
                <h3 class="h3">Jamuhuri Ya Muungano Wa Tanzania</h3> 
                <h2 class="h1">Mfuko Wa Hifadhi Ya Jamii(PSSSF)</h2> 
                <h4 class="h4">Leo.Kesho.Pamoja</h4>

                <div class="change-lang-nav">
            <ul class="top-nav"> 
              <li><a class="active"> eng</a></li>
              <li><a class="active"> swa</a></li>
            </ul>
          </div> 
              
         
      </div>

    
     
      <div class="topright-logo">
                <a class="navbar-brand pt-0" href="{{ url('home')}}">
                    <img src="{{asset('img/logo/tzlogo.png')}}" class="navbar-brand-img" alt="...">
                </a>
      </div>
   
      <div>
                <a class="topleft-logo" href="{{ url('home')}}">
                    <img src="{{asset('img/logo/psssf.png')}}" class="navbar-brand-img" alt="...">
                </a>
            </div>
     </div>
             
     </div>
    


      
    </body>
</html>