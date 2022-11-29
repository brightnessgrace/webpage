<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/banner.css')}}" />
        

    </head>
  <body>
    <div class="ban-container">

    
      <div class="banner-slider">
           <div class="slider-body">
              
                <!-- image slider starts-->
                <div class="slider">
                    <div class="slides">
                        <!-- radio button starts-->
                      <input type="radio" name="radio-btn" id ="radio1">
                      <input type="radio" name="radio-btn" id ="radio2">
                      <input type="radio" name="radio-btn" id ="radio3">
                      <input type="radio" name="radio-btn" id ="radio4">
      
                      <!-- radio button end--> 
                        <!--image slide starts-->
                        <div class="slide first">   
                         <img src ="{{ asset('img/banner/dgprize.jpg') }}" class="img-bn-cnt" alt="..."> 
                        </div>

                        <div class="slide">     
                          <img src = "{{ asset('img/banner/dgprize.jpg')}}"  class="img-bn-cnt"  alt="..."> 
                        </div>

                        <div class="slide">     
                          <img src = "{{ asset('img/banner/twintower.jpg')}}"  class="img-bn-cnt"  alt="..."> 
                        </div>

                        <div class="slide">
                         <img src ="{{ asset('img/benefit/A2.jpg') }}" alt="..."> 
                        </div>

                         <!--image slide ends-->
                             <!--automatic navigation start-->
                           <div class="navigation-auto">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 

                           </div>
                             <!--automatic navigation end-->           

                </div>
                                   <!--manual navigation starts-->
                            <div class="navigation-manual">
                              <label for="radio1" class="manual-btn"></label>
                              <label for="radio2" class="manual-btn"></label>
                              <label for="radio3" class="manual-btn"></label>
                              <label for="radio4" class="manual-btn"></label>
                              <label for="radio5" class="manual-btn"></label>
                              <label for="radio6" class="manual-btn"></label>
                          </div>
                        <!-- end manual navigation -->
                    </div>
           </div>
      </div>

        <div class="banner-online-service">
            <div class="bn-mp">
                <div class="side-bn">
                  <div class="flip-bmp">
                    <div class="flip-bmp-front">
                     <img src = "{{ asset('img/banner/handportal.jpg')}}"  class="img-cnt-side"  alt="...">
                    </div> 
                     <div class="flip-bmp-back">
                        <h7>Login To Member Portal</h7>
                      </div>
                </div>
                </div>
            </div>


            <div class="bn-emp">
              <div class="side-bn">
                <div class="flip-bmpb">
                    <div class="flip-bmp-frontb">
                     <img src = "{{ asset('img/banner/billportal.jpg')}}" class="img-cnt-side"   alt="...">
                </div>
                <div class="flip-bmp-backb">
                        <h7>Login To Billing Portal</h7>
                      </div>
                  </div>
                  </div>  
            </div>


            <div class="bn-onl">
              <div class="side-bn">
               <div class="flip-bmpo">
                    <div class="flip-bmp-fronto">
                     <img src = "{{ asset('img/banner/onlinesubmission.jpg')}}" class="img-cnt-side"   alt="...">
                </div>
                <div class="flip-bmp-backo">
                        <h7>Online Form Submission</h7>
                      </div>
                  </div>
              </div>
            </div>

        </div>
    </div>
  </body>

  
  <script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
  }
  </script>

</html>