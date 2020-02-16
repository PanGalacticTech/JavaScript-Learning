


<!-- Page Heading -->



<div id="post">



  <div id="envirostation"> <!-- EnviroStation UI-->

    <div id="envirotitleblock">
      <div id="pagetitleboxL">
        <p class="maintitle">EnviroStation:</p>
      </div> <!-- Page Heading -->


      <div id="pagetitleboxR">
        <p class="subheading">Pollution & Air Quality Monitoring Station</p>
      </div> <!-- Page Sub Heading -->

    </div> <!-- End of title blocks -->




    <h4> Current EnviroStation Data: </h4>




    <div id = "databox">
      <h2>  PM2.5  </h2> </br>

  <p class="bigtext" id="PM2.5"></p>

        <script src="fetchData.js">
        document.getElementById("PM2.5").innerHTML =  grabData();
        </script>
    </div>



    <div id = "databox">
      <h2>  PM10  </h2> </br>
      <p class="bigtext" id="PM10"></p>

            <script>
            document.getElementById("PM10").innerHTML = 10.3;
            </script>
    </div>



    <div id = "databox">
      <h2>  Temperature  </h2> </br>
      <p class="bigtext" id="temp"></p>

            <script>
            document.getElementById("temp").innerHTML = 10.3;
            </script>
    </div>


    <div id = "databox">
      <h2>  Humidity </h2> </br>
      <p class="bigtext" id="humi"></p>

            <script>
            document.getElementById("humi").innerHTML = 10.3;
            </script>
    </div>



  </div> <!-- end of EnviroStation UI-->








</br>
</br>

</br>

</br>

</br>
</br>


</div> <!-- End of Post Div -->
