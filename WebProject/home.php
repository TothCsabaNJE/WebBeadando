<!DOCTYPE html>
<html>
    <h1>Thing</h1>
  <iframe width="100%" height="315"
src="https://www.youtube.com/watch?v=K4TOrB7at0Y" class="col-xl-5">
</iframe>

<video width="100%" height="315" controls class="col-xl-5">
  <source src="video.mp4" type="video/mp4">
</video>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87259.96546150898!2d19.596486083046734!3d46.885528865527974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da6108f61c3f%3A0x400c4290c1e1180!2sKecskem%C3%A9t!5e0!3m2!1shu!2shu!4v1715532170697!5m2!1shu!2shu" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="col-xl-12"></iframe>

<script>

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function myMap() {
var mapProp= {
  center:new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

</script>
