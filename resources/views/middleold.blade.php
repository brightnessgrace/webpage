


     <div class="container">

       <div class="benefit-content">
          <div class="ben-title"> <h4>Mafao Yetu</h4></div>

           <div class="bn-content">
               <div class="main-one">
                   <div class="ben-img">
                       <div class="image-bn">
                           <img src = "{{ asset('img/benefit/oldage.jpg')}}"  class="img-tnt"  alt="..."> </div>
                   </div>

                   <div class="ben-descr">
                       <h5>Old Age Benefit</h5>
                       <p>Commuted pension (Initial Lump sum) paid immediately before starting pension
                           which is equal to 33% of calculated annual pension times 12.5
                           Old age special lump sum for non qualifying members i.e total contributions plus interest
                           Minimum Pension is 40% of the lowest Sartorial Statutory Minimum Wage
                           Maximum Pension is 72.5% of the Annual Pensionable Emoluments </br></br>
                           <a href="#oldage">Learn More </a> </p>
                   </div>

               </div>

               <div class="bn-content-right">

                   <div class="main-two">

                       <div class="left-descr">

                           <h5>Maternity Benefit</h5>
                           <p>The purpose of maternity benefit is to ensure that a female Insured Person
                               is able to sustain and care for herself and the newly born child during
                               a specified period before and after confinement. </br></br>
                               <a href="#maternity">Learn More </a> </p>
                       </div>

                   </div>

                   <div class="main-three">

                       <div class="left-descr">

                           <h5>Unemployment Benefit</h5>
                           <p>Unemployment benefit is paid to an insured person
                               who is below fifty five (55) years old and ceased to be employed.  </br></br>
                               <a href="#maternity">Learn More </a> </p>
                       </div>

                   </div>

                   <div class="main-four">



                       <div class="left-descr">

                           <h5>Death Benefit</h5>
                           <p>Funeral Grant is paid as a reimbursement to a family member who has incurred
                               the burial expenses (costs)
                               of the deceased Psssf Insured Person. </br></br>
                               <a href="#death">Learn More </a> </p>
                       </div>


                   </div>

                   <div class="main-five">



                       <div class="left-descr">

                           <h5>Invalidity Benefit</h5>
                           <p>The aim of invalidity pension is to guarantee income security to the insured person

                               who has permanently lost his earning capacity, resulting from accident or illness. </br></br>
                               <a href="#invalidity">Learn More </a> </p>
                       </div>


                   </div>

               </div>
           </div>
          </div>

       <div class="news-content">
           <div class="top-news">
              <div class="alert-box"><blink>Habari Mpya</blink></div>
           
               <div class="news-slider">
                <div class="news-slider-one">
                 <div class="news-image">
                 <img src = "{{ asset('img/news/slide_3.jpg')}}"  class="news-tnt"  alt="..."> </div> 
                 <div class="news-descr">
                    <h7>Kamati ya Bunge yatembelea kiwanda cha ngozi Kilimanjaro</h7>
                    <p>Kamati ya Bunge ya Uwekezaji wa Mitaji ya Umma (PIC) imeilekeza Bodi ya Wakurugenzi 
                        wa Kiwanda cha Bidhaa...</p><a href="#news">Fahamu Zaidi </a> </div>        
                 </div>

                <div class="news-slider-two">
                <div class="news-image">
                <img src = "{{ asset('img/news/mkataba.jpg')}}"  class="news-tnt"  alt="..."> </div>
                <div class="news-descr">
                    <h7>PSSSF  Kuipangisha MIC TANZANIA PLC – TIGO Kwenye Jengo Lake  La PSSSF Commercial Complex</h7>
                   <p> CPA Hosea Kashimba amshukuru Mhe. Rais Samia Suluhu Hassan kwa kufungua nchi...</p>
                   <a href="#news">Fahamu Zaidi </a> </div>        
                 </div>
                    

                <div class="news-slider-three">
                <div class="news-image">
                 <img src = "{{ asset('img/news/gawio.jpg')}}"  class="news-tnt"  alt="..."> </div>
                 <div class="news-descr">
                    <h7>PSSSF Yapokea Gawio La Billion 11.85 Kutoka CRDB Kwenye Uwekezaji Wa Hisa</h7>
                    <p>Waziri wa Fedha na Mipango Mhe. Mwigulu Nchemba, akikabidhi gawio lenye thamani ya 
                        Shilingi bilioni 11.85 .... </p>
                        <a href="#news">Fahamu Zaidi </a> </div>        
                 </div>
                </div>
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
