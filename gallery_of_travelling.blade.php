@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <h1><center><b>Gallery Of Travelling</b></center></h1>
        <html>
<head>
<title>Travelling Gallery</title>
<style>
*{
   box-sizing:border-box;
}
body{
       margin:0;
       background:red;
}
.container{
            max-width:1200px;
            margin:auto;
            background:#f2f2f2;
            overflow:auto;
}
.gallery{
          margin:5px;
          border:1px solid #ccc;
          float:left;
          width:390px;
}
.gallery img{
               width:100%;
               height:auto;
}
.desc{
        padding:5px;
        text-align:center;
}
</style>
</head>
<body>

<div class="container">
      <div class="gallery">
          <img src="images/new_zealand_travel_image.jpg">
               <div class="desc">It is a very famous travelling place.</div>
      </div>
      <div class="gallery">
          <img src="images/7.jpg">
               <div class="desc">It is a World's famous travelling place.</div>
      </div>
      <div class="gallery">
          <img src="images/thailand_travel_image.jpg">
               <div class="desc">It is a very beautiful travelling place in all over world.</div>
      </div>
      <div class="gallery">
          <img src="images/tra.jpg">
               <div class="desc">It is a famous travelling place as well as beautiful place.</div>
      </div>
      <div class="gallery">
          <img src="images/glue.jpg">
               <div class="desc">It is a world's famous travelling place.</div>
      </div>
      <div class="gallery">
          <img src="images/glue1.jpg">
               <div class="desc">It is a nice travelling place.</div>
      </div>
      <div class="gallery">
          <img src="images/glue2.jpg">
               <div class="desc">It is a beautiful travelling place..</div>
      </div>
      <div class="gallery">
          <img src="images/glue4.jpg">
               <div class="desc">It is a famous travelling spot as well as place.</div>
      </div>
      <div class="gallery">
          <img src="images/glue8.jpg">
               <div class="desc">It is a famous travelling place.</div>
      </div>
</div>
</body>
</html>
       
@endsection