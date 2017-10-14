<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    #googleMap{width:400px;
height:400px;
    }
  </style>
</head>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getlocation()">Try It</button>
<div id="googleMap"></div>

<p id="container"></p>
<script>
var x=document.getElementById('container');

function getlocation(){
   if(navigator.geolocation)
   {
     navigator.geolocation.getCurrentPosition(showposition);
   }
   else
     {
       x.innerHTML="your brouser is not supporting geolocation";
     }
}
     function showposition(position)
     {
      var  latitud=position.coords.latitude;
        var longitud=position.coords.longitude;

            var cords= new google.maps.LatLng(latitud,longitud);
         var mapProp= {
             center:cords,
             zoom:15,
         };
         var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker=new google.maps.Marker({position:cords,map:map,animation:google.maps.Animation.BOUNCE});


     }



// var marker=new google.maps.Marker({position:cords,map:map});



  //  function showError(error)
  //  {
  //    switch(error.code)
  //    {
  //      case error.TIMEOUT:
  //      x.innerHTML="ACCESS_DENIED by the geolocation";
  //      break;
  //      case error.PERMISSION_DENIED:
  //      x.innerHTML="PERMISSION_DENIED";
  //      break;
  //      case error.POSITION_UNAVALABLE:
  //      x.innerHTML="PERMISSION_DENIED";
  //      break;
   //
  //    }
  // }


 </script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2dc9erOeSpqTdKT59PhrC3d7laj_V9fM"
 type="text/javascript"></script>

</body>
</html>
