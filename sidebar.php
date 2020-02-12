<div id="sidebar">
<script src="/jquery.min.js"></script>

<!--<p class="navtitle1">Navigation:</p>-->

<div id="insidebar">
<a class="link" href="/index.php">Home</a>
</br>


<?php
echo '<script type="text/JavaScript">
$(function () {
var tableBody = $("#tableBody"),
    tableHead = $("#tableHead");

    tableHead.on("click", function () {
        tableBody.slideToggle("fast");
    });
});
     </script>'
;
?>



<table>
    <thead id="tableHead">
        <tr>
            <th><p class="navtitle2"><u>Projects:</u></p></th>
        </tr>
    </thead>
    <tbody id = "tableBody">
        <tr>
            <td><a class="link" href="/OLED.php">Arduino OLED Screen</a></td>
        </tr>
        <tr>
            <td><a class="link" href="/GPS.php ">GPS Sensor</a></td>
         </td>
        </tr>
	 <tr>
            <td><a class="link" href="/raspiserver.php ">RaspiServer</a></td>
        </tr>
 	<tr>
            <td><a class="link" href="/taptempo.php ">Tap Tempo Delay</a></td>
        </tr>
    </tbody>
</table>



<a class="link" href="/index.php">Other Stuff</a>
</br>
</div>
</div>
