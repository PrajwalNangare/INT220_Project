@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <h1><center><b>About Us Page Of Travelling Website</center></b></h1>
        <html>
<head>
<title>Travel Website</title>
<linkr rel="preconnect" href="http://fonts.gstatic.com">
<link rel="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
    *{
   padding:0px;
   margin:0px;
   box-sizing:border-vox;
   list-style:none;
   font-family:'Poppins',sans-serif;
}
.navbar{
         width:100%;
         height:80px;
         background-color:#fee;
         display:flex;
         justify-content:space-around;
         align-items:center;
         color:#000;
}
.menu ul{
          display:flex;
          align-items:center;
}
.menu ul li a{
                text-decoration:none;
                color:#000;
                padding:5px 12px;
                letter-spacing:2px;
                font-size:18px;
}
.menu ul li a:hover{
                     border-bottom:4px solid #000;
                     transition:0.4s;
}
.signup a{
           text-decoration:none;
           color:#000;
           text-align:center;
           font-size:18px;
           font-weight:bold;
           border-radius:12px;
           padding:12px 30px;
           border:2px solid #ff0000;
}
.signup a:hover{
                 background-color:red;
                 transition:0.6s;
}
.body{
      width:100%;
      height:90vh;
      display:flex;
      justify-content:space-around;
      align-items:center;
      background-image:linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url("images/travel_image.jpg");
      background-position:center;
      background-size:cover;
}
.heading{
          width:30%;
          text-align:center;
          color:#fff;
}
.heading h1{
             font-size:40px;
}
.heading a{
            text-decoration:none;
            color:#000;
            font-size:25px;
            font-weight:bold;
            border-radius:45px;
            padding:14px 50px;
            background-color:#fff;
}
.heading a:hover{
                   letter-spacing:3px;
                   transition:0.6s;
}
.tours{
        width:70%;
        display:flex;
        justify-content:space-around;
}
.places{
         display:inline;
         text-align:center;
         border-radius:12px;
}
.places h2{
            color:red;
            font-size:35px;
            letter-spacing:3px;
            border-radius:1px;
            padding:30px 30px;
            background-color:#000;
}
.places a{
           text-decoration:none;
           color:red;
           font-weight:bold;
           font-size:10px;
           border-radius:12px;
           padding:12px 30px;
           background-color:#fff;
}
.places a:hover{
                 background-color:#000;
                 letter-spacing:3px;
                 transition:0.6s;
}
.footer{
         width:100%;
         height:50px;
         display:flex;
         justify-content:space-around;
         align-items:center;
}
.footer a{
           text-decoration:none;
           color:green;
           font-size:18px;
           font-weight:bold;
}
.footer a:hover{
                  text-decoration:underline;
                  transition:0.4s;
}
</style>
</head>
<body>
   <div class="body">
        <div class="heading">
             <h1>About Us</h1>
             <br>
             <p>since 2021, Traveller has been committed to bringing travelers the best in value and quality travel arrangements.<br>
             <p>We are passionate about travel and providing corporate travelers high-touch services to facilitate their business travel needs and sharing the world's wonders on the leisure travel side.<br>
               <div class="SignUp">
                   <a href="#">Traveller Profile</a>
               </div>
               <br>
                  <p>Traveller is the largest independently owned travel agency headquartered in Ahmednagar.<br>
                 <div class="SignUp">
                      <a href="#">Our Mission Statement</a>
                 </div>
                 <br>
                 <p>the mission is the provide more services releated to travelling for clients.</p>
                      
                
       
             <br>
             <br>
             <a href="#">Learn More</a>
        </div>
   </div>
</body>
</html>



@endsection