<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PSSSF | Home</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
    <link href="{{ asset('img/logo/psssf.jpg') }}" rel="icon" type="image/jpg">
     <link rel="stylesheet" href="{{ asset('css/topheader.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/nav.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/online.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/mafao.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/footer.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/new.css')}}" />
     <link rel="stylesheet" href="{{ asset('css/culture.css')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      
</head>
<body>
    <header>
          @include('layout.topbar')
   
          </header>
    
      
      <div class='menu-bar'>

        @include('layout.header')

        @include('navbar')
      </div>

   <div class="banner">

   @include('banner')
   </div>

   <div class="culture">
   @include('culture')
   
  </div>

   <div class="online">

   
   @include('online')
   </div>

   <div class="benefit">
     @include('mafao')
   </div>

   <div class="news">
   @include('news')
   
  </div>
  
    
</body>

<footer>  </footer>

<script>

const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
</script>
</html>