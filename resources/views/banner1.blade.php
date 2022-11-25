<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/banner.css')}}" />
        

    </head>
  <body>
    <div class="slider">
    
      <div class="image-container">
        <div class="slider-img">
          <div class = "slides">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id ="radio2">
            <input type="radio" name="radio-btn" id ="radio3">
            <input type="radio" name="radio-btn" id ="radio4">
     
            <div class="slide first">      
            <img src ="{{ asset('img/benefit/oldage.jpg') }}" class="img-cnt img-1 show" alt="..."> 
            </div>
            <div class="slide">
            <img src = "{{ asset('img/benefit/dg1.jpg')}}" class="img-cnt img-show" alt="..."> 
            </div>
            <div class="slide"> 
            <img src ="{{ asset('img/benefit/A2.jpg') }}" class="img-cnt img-show" alt="..."> 
            </div>
            <div class="slide"> 
            <img src = "{{ asset('img/benefit/dg1.jpg')}}" class="img-cnt img-show" alt="..."> 
            </div>   
          </div>
              <div class="navigation-manual">

              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
              
            </div>  
    </div>
      </div>

    <div class = "online-container">

           <div class = "flex-one">
           <img src = "{{ asset('img/banner/handportal.jpg')}}" class="img-portal" alt="..."> 
           <div class="i-title"> </div> 
          </div>

          <div class="flex-two">
         <img src = "{{ asset('img/banner/billportal.jpg')}}" class="img-portal" alt="..."> 
            
         </div>
          <div class="flex-three">

          <img src = "{{ asset('img/banner/onlinesubmission.jpg')}}" class="img-portal" alt="..."> 
            
        </div>
    </div>
    </div>
  </body>
</html>