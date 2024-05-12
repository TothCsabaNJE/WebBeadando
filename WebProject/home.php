<!DOCTYPE html>
<html>
    <h1>Thing</h1>
  <iframe width="100%" height="315"
src="https://www.youtube.com/watch?v=K4TOrB7at0Y" class="col-xl-5">
</iframe>

<video width="100%" height="315" controls class="col-xl-5">
  <source src="video.mp4" type="video/mp4">
</video>

<div id="googleMap" style="width:100%;height:400px;">  </div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nisi ac nisl vestibulum finibus. Integer fringilla aliquet turpis, maximus pretium arcu convallis sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed condimentum dolor neque, id pulvinar leo ultricies nec. Duis sapien leo, sollicitudin ac hendrerit pharetra, pharetra et tortor. Nullam massa leo, auctor et convallis nec, lobortis vel justo. Quisque luctus massa risus, non euismod mauris fringilla nec. Duis placerat ornare sagittis. Suspendisse quis elit non elit posuere consequat. Suspendisse vel odio sit amet purus pharetra efficitur. Cras varius nec arcu eleifend aliquet. In sodales dolor quis porta tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas sit amet enim sed massa iaculis tempus. Integer dui lorem, pellentesque nec nisi nec, aliquam bibendum nisi.</p>
    
</html>
