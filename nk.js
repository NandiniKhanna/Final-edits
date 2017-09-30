function init_map() {
            var var_location = new google.maps.LatLng(12.968410, 77.648297);
            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };
            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "NKC"
            });
            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);
            var_marker.setMap(var_map);
         }
         google.maps.event.addDomListener(window, 'load', init_map);
         var modal = document.getElementById('id01');
         

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 15000,
  });
});