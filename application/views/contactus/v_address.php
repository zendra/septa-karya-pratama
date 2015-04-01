<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <h1>Alamat Kami</h1>
            <div id="googleMap" style="width:1000px;height:500px;" align="center"></div>
            <table>
                <tr>
                    <td style="padding:10px;">
                        <img width="50" src="<?php echo base_url('assets/images/location.png'); ?>" />
                    </td>
                    <td style="padding:10px;">
                        Ruko Indonesia,<br>
                        Jalan Indonesia No.100,<br>
                        Surabaya<br>
                    </td>
                    <td style="padding:10px;">
                        <img width="100" src="<?php echo base_url('assets/images/phone.png'); ?>" />
                    </td>
                    <td style="padding:10px;">
                        +62 31 1234 567<br>
                        +62 81 123 456 789
                    </td>
                    <td style="padding:10px;">
                        <img width="110" src="<?php echo base_url('assets/images/mail.png'); ?>" />
                    </td>
                    <td style="padding:10px;">
                        address@mailinator.com<br>
                        dummy@mailinator.com<br>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize()
    {
        var mapProp =
                {
                    center: new google.maps.LatLng(-7.2633194, 112.7692121),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>