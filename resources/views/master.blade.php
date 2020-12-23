<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://polynotes.in/login/login.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"  rel="stylesheet"/>
    
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js" >
    </script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js" >
    
    </script>
    <script src="https://kit.fontawesome.com/9522163cff.js" crossorigin="anonymous"></script> 
    <title></title>

    <style>

      
.owl-next span,.owl-prev span {
          background: white;
      
  
        padding-bottom:3px;
        
     }
     .owl-next span:hover {
      background: black;
     }
     .owl-prev span:hover{

      background: black;
     }
     .owl-next span{
position:absolute;
right:0px;
top:30%;
font-size:50px;

     }
     .owl-prev span{
position:absolute;
left:0px;
top:30%;
font-size:50px;

     }
    

   

     
 </style>
  </head>
  <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>

  
</html>