<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>covid-19</title>
</head>

<body onload="fetch()">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_style p-3">
    <a class="navbar-brand pl-5" href="#">covid-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">symptons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventid">prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Indiacoronalive.php">India Corona live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>

      </ul>

    </div>
  </nav>
<!--//////// corona update////////// -->

<section class="corona_update container-fluid">
    <div class="mb-3">
      <h3 class="text-uppercase text-center mt-5">covid-19 Live Update of India</h3>
    </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center mb-5" id="table_value">
    <tr >
          <th>Last Update</th> 
          <th>Total active</th>
          <th>Total confirmed</th>
          <th>Total Case</th>
          <th>Total deaths</th>
          <th>Total recovered</th>
          </tr>
    <?php
    $data = file_get_contents('https://api.covid19india.org/data.json');
    $coronalive = json_decode($data,true);
  $statecount = count($coronalive['statewise']);
 ?>
      <tr class="">
          <td><?php   echo $coronalive['statewise'][0]['lastupdatedtime'] ?></td>
          <td><?php   echo $coronalive['statewise'][0]['statenotes'] ?></td>
          <td><?php   echo $coronalive['statewise'][0]['active'] ?></td>
          <td><?php   echo $coronalive['statewise'][0]['confirmed'] ?></td>
          <td class="text-danger"><?php   echo $coronalive['statewise'][0]['deaths'] ?></td>
          <td class="text-success"><?php   echo $coronalive['statewise'][0]['recovered'] ?></td>
      </tr>
    
    </table>
    
      <table class="table table-bordered table-striped text-center" id="table_value">

          <tr class="bg-warning mt-2">
          <th>Last Update</th> 
          <th>state</th>
          <th>active</th>
          <th>confirmed</th>
          <th>deaths</th>
          <th>recovered</th>
          </tr>

         <?php
         $data = file_get_contents('https://api.covid19india.org/data.json');
         $coronalive = json_decode($data,true);
        //  echo "<pre>";
        //  print_r($coronalive); 
        //  echo "</pre>"; 
        // echo $coronalive['statewise'][1]['state'];
        $statecount = count($coronalive['statewise']);
        $i = 1;
        while ($i < $statecount) {
            ?>
            <tr>
                <td><?php   echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                <td><?php   echo $coronalive['statewise'][$i]['state'] ?></td>
                <td><?php   echo $coronalive['statewise'][$i]['active'] ?></td>
                <td><?php   echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                <td class="text-danger"><?php   echo $coronalive['statewise'][$i]['deaths'] ?></td>
                <td class="text-success"><?php   echo $coronalive['statewise'][$i]['recovered'] ?></td>
            </tr>
            <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
            echo $coronalive['statewise'][$i]['state']."<br>";
            echo $coronalive['statewise'][$i]['active']."<br>";
            echo $coronalive['statewise'][$i]['confirmed']."<br>";
            echo $coronalive['statewise'][$i]['deaths']."<br>"; -->
            <?php
            $i++;
        }

           ?>
    </table>
  </div>

  </section>








    <!-- ///////////////////  jump to top///// -->
    <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
  </div>

  <!-- //////////////////// footer////////////// -->
  <footer class="mt-5">
<div class="container-fluid text-center text-white footer_style">
  <p>&copy2020 vibhu mishra</p>
</div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script>
  //when click jump to top
  function topfunction(){
    document.body.scrollTop = 0;   //fpr safari
    document.documentElement.scrollTop = 0; // for chrome,ff,opera
  }
</script>
<script type="text/javascript">
mybutton = document.getElementById("mybtn");
//when user scroll down 100px from the top button apper
window.onscroll = function(){scrollfunction()};
function scrollfunction(){
  if(document.body.scrollTop>150 || document.documentElement.scrollTop>150){
    mybutton.style.display = "block";
  }else{
    mybutton.style.display = "none";
  }
}
</script>