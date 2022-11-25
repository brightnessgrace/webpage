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

        <div class="banner-heads">
              
                <div class="bn-chairperson"> 
                  <div class="bn-ch">
                  <img src ="{{ asset('img/banner/engmusa.jpg') }}" class="img-cnt" alt="...">
                  </div>
                  <div class="bn-nametags">Eng.Musa Iyombe</br>
                                           Chairman
                  </div>
                </div>

                <div class="bn-secretary">
                  <div class="bn-sec">
                  <img src ="{{ asset('img/banner/cpatdg.jpg') }}" class="img-cnt" alt="...">
                  </div>
                  <div class="bn-nametags">CPA(T) Hosea Kashimba</br>
                                          Director General
                  </div>
                      
                </div>

           
        </div>
    
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
                          
                         <img src ="{{ asset('img/benefit/oldage.jpg') }}" class="img-bn-cnt" alt="..."> 
                        </div>

                        <div class="slide">     
                          <img src = "{{ asset('img/benefit/dg1.jpg')}}"  class="img-bn-cnt"  alt="..."> 
                        </div>

                        <div class="slide">
                         <img src ="{{ asset('img/benefit/A2.jpg') }}" alt="..."> 
                         </div>

                         <!--image slide ends-->
                             <!--automatic navigation start-->
                           <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>

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
</html>