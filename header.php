<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

  <title> EnviroStation </title>

</head>



<body>

    <div id="header">

      <p class="date"><span id="datetime"></span></p>

      <script>
      var dt = new Date();
      document.getElementById("datetime").innerHTML = fetchDate();
      </script>


      <div id="heroimage">


        <img src="\media\envirostationprototypeone.jpg"
        alt="PanGalacticLogo" class="clipped"  style=width:100%; >






        <div id="headlogo">
          <img src="\media\PanGalacticLogo2020NoLines01smaller.png"
          alt="PanGalacticLogo" style=width:100%;">
        </div>


        <div id="headtitle">
          <h1> Pan Galactic Tech </h1>
          <hlow>Arduino PCB   </hlow> <hhigh> EnviroStation </hhigh><hlow>Raspi Space Tech Design </hlow>
        </div>


      </div> <!-- end of hero image -->
    </div>  <!-- end of div header -->




  <div id="navbar">
    <span>
      <p>navbar</p>
    </span>
  </div>

  <?php include('sidebar.php'); ?>
