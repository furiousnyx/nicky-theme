             

</div><!--END CONTAINER-->

	<!-- container -->

<!-- ---=== GOOGLE MAPS ===--- --><!-- ---=== GOOGLE MAPS ===--- -->
<script>
    var myCenter=new google.maps.LatLng(51.807026, 5.725205);

    function initialize() {
        var mapProp = {
        center:new google.maps.LatLng(51.807026, 5.725205),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    } 

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- ---=== GOOGLE MAPS ===--- --><!-- ---=== GOOGLE MAPS ===--- -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64488093-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
