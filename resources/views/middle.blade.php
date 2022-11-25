
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/middle.css')}}" />
        

    </head>
  <body>

     <div class="container">

       <div class="benefit-content">
          <div class="ben-title"> <h4>Mafao Yetu</h4></div>
       
          <div class="bn-content">
            
             <a class="prev-arrow" onclick="plusSlides(-1)">❮</a>
             <a class="next-arrow" onclick="plusSlides(1)">❯</a>
             
             <div class="oldage">
               <img src ="{{ asset('img/benefit/oldage.jpg') }}" class = "bn-img" alt="...">
                  <div class="text">Fao La Kustaafu </div>
             </div>
             <div class="dth">
               <img src ="{{ asset('img/benefit/oldage.jpg') }}" class = "bn-img" alt="...">
                <div class="text">Fao La Kifo </div>
             </div>
             <div class="ivalidity">
               <img src ="{{ asset('img/benefit/oldage.jpg') }}" class = "bn-img" alt="...">
                <div class="text">Fao la Majanga</div>
             </div>
             <div class="unemployment">
               <img src ="{{ asset('img/benefit/oldage.jpg') }}" class = "bn-img" alt="...">
                <div class="text">Fao La Kukosa Kazi</div>
             </div>
             <div class="maternity">
                <img src ="{{ asset('img/benefit/oldage.jpg') }}" class = "bn-img" alt="...">
                  <div class="text">Fao La Uzazi</div>
             </div>
          </div>
          </div> 

       <div class="news-content">
           <div class="top-news">
              <div class="alert-box"><blink>News</blink>
             
               </div>
              <div class="narration-box">

               PSSSF YAPOKEA GAWIO LA BILIONI 11.85 KUTOKA CRDB KWENYE UWEKEZAJI WA HISA

               June 29th, 2022
              </div>
           </div>

           <div class="tabs">
               <div class="tab">
               <button class="tablinks" onclick="openCity(event, 'Mission')">Mission</button>
               <button class="tablinks" onclick="openCity(event, 'Vision')">Vission</button>
               <button class="tablinks" onclick="openCity(event, 'Values')">Values</button>
               </div>

               <div id="Mission" class="tabcontent">
                 
                 <p>To provide high quality social security services using competent, 
                     motivated staff and appropriate technology..</p>
               </div>

               <div id="Vision" class="tabcontent">
               
                <p>To be an Outstanding Provider of Social Security Services in Tanzania.</p> 
               </div>

               <div id="Values" class="tabcontent">
              
                 <p>

                    <ul> 
                         <li>Customer Focused</li>
                         <li> and Transparency</li>
                         <li> Teamwork </li>
                         <li> Professionalism </li>
                        <li>Compliance</li> </ul>

                     </p>
               </div>

           </div>
       </div>
     </div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  if(evt) evt.currentTarget.className += " active";
    else document.querySelector('button.tablinks').className += " active";
}
document.body.addEventListener('DOMContentLoaded', openCity(event, 'Mission'));
</script>
  </body>
</html>