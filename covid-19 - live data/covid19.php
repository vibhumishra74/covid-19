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
          <a class="nav-link" href="#contactid">contact</a>
        </li>

      </ul>

    </div>
  </nav>
  <div class="main_header">
    <div class="row mr-0 w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="image/virus.png" width="300" height="300" alt="covid-19">
        </div>
      </div>


      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"><img src="image/virus (2).png"
                width="50" height="50" alt="virus"></span>na virus</h1>
        </div>
      </div>
    </div>
  </div>
  <!--//////// corona update////////// -->

  <section class="corona_update container-fluid">
    <div class="mb-3">
      <h3 class="text-uppercase text-center">covid-19 update</h3>
    </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="table_value">
          <tr>
          <th>Country</th>
          <th>Total confirm</th>
          <th>Total Recovered</th>
          <th>Total Deaths</th>
          <th>NEw Recovered</th>
          <th>NEw Deaths</th>
          </tr>
    </table>
  </div>

  </section>
  <!-- **************** about section********** -->

  <div class="container-fluid sub_section bg-light pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-5">
      <h1> About Covid-19</h1>
    </div>
    <div class="row pt-5">
      <div id="virus" class=" col-lg-5 col-md-6 col-12 d-flex justify-content-center align-items-center">
        <img class="img-fluid" src="image/virus.jpg" alt="virus">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</h2>
        <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover
          without requiring special treatment. Older people, and those with underlying medical problems like
          cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious
          illness.

        </p>
      </div>
    </div>
  </div>
  <!--////////////// corona symptons//////////// -->

  <div class="container-fluid  pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-5">
      <h1> corona symptons</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/cough.png" height="100" width="100"
              alt="symptons">
            <figcaption>Cough</figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/hand.png" height="100" width="100"
              alt="symptons">
            <figcaption>Infection</figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/headache.png" height="100" width="100"
              alt="symptons">
            <figcaption>Headache</figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/social-distancing.png" height="100" width="100"
              alt="symptons">
            <figcaption>Avoid Crowds</figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/fever.png" height="100" width="100"
              alt="symptons">
            <figcaption>Check</figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center"> <img class="img-fluid" src="image/sick.png" height="100" width="100"
              alt="symptons">
            <figcaption> Breathing problem</figcaption>
          </figure>
        </div>


      </div>
    </div>
  </div>

  <!--////////////// prevention against corona//////////// -->

  <div class="container-fluid bg-light pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-5">
      <h1>6 steps Prevention Against Covid-19</h1>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/hand-sanitizer.png" height="90" width="90"
                  alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>Wash your hands frequently for 20+ seconds with soap and water</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/social-distancing.png" height="90"
                  width="90" alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>Stay at home and limit contact with others</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/people.png" height="90" width="90"
                  alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>avoid close contact with people who are unwell</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/pina-messina-kfJkpeI6Lgc-unsplash.jpg"
                  height="90" width="90" alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>do not take medicean without prescription</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/mask.jpg" height="90" width="90"
                  alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>wear mask while going outside</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center"> <img class="img-fluid" src="image/fever.png" height="90" width="90"
                  alt="symptons">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12  d-flex justify-content-center align-items-center">
              <p>if not felling well take Check up</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--////////////// contact us//////////// -->

  <div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-5">
      <h1>Contact Us</h1>
    </div>

    <div class="container">

      <div class="col-lg-8 m-auto d-block">
        <form action="" method="POST" class="" onsubmit="return validation12()">
          <div class="form-group">
            <label for="">username: </label>
            <input type="text" name="user" class="form-control" id="user">
            <span id="username">
              ***does not contain any special
              charater and user name between 3 to 15 charater
            </span>
          </div>
          <div class="form-group">
            <label for="">password: </label>
            <input type="text" name="password" class="form-control" id="pass">
            <span id="password">
              ***length 8-16 and must contain one digit one special charater
              !@#$%^&*</span>
          </div>
          <div class="form-group">
            <label for="">confirm password: </label>
            <input type="text" name="conpassword" class="form-control" id="conpass">
            <span id="confirmpass">***password did't match</span>
          </div>
          <div class="form-group" autocomplete="off">
            <label for="">phone: </label>
            <input type="text" name="mobile" class="form-control" id="mobile">
            <span id="mobileno">***please enter valid 10 digit no</span>
          </div>
          <div class="form-group">
            <label for="">email: </label>
            <input type="text" name="email" class="form-control" id="email">
            <span id="emailid">***please enter valid user email
              eg: abc@xyz.com
            </span>
          </div>
         <div class="form-group">
          <textarea placeholder="How You Feeling Describr.." class="form-control"name="msg" id="" cols="30" rows="10"></textarea>
        </div> 
          <input type="submit" class="btn btn-success" name="submit" id="submit">
        </form>
      </div>
    </div>
  </div>

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
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
  <script>

    function validation12() {
      let user = document.getElementById("user");
      let uservalue = user.value
      let pass = document.getElementById("pass");
      let passvalue = pass.value


      let conpass = document.getElementById("conpass");
      let conpassvalue = conpass.value


      let mobile = document.getElementById("mobile");
      let mobilevalue = mobile.value



      let email = document.getElementById("email");
      let emailvalue = email.value



      let password = document.getElementById("password")
      let confirmpass = document.getElementById("confirmpass")
      let mobileno = document.getElementById("mobileno")
      let emailid = document.getElementById("emailid")
      let username = document.getElementById("username");
      let userpattern = /^([a-zA-Z]){3,15}$/
      let emailpattern = /^[A-Za-z0-9_.]{3,}@[a-zA-Z]{2,}[.]{1}[A-Za-z.]{2,}$/
      let passpattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/
      let mobptrn = /^(\+91)?0?[\d]{10}$/gi  //mobile no
      if (userpattern.test(uservalue)) {
        username.style.display = "none";
      } else {
        username.style.display = "block";
        return false;
      }
      if (passpattern.test(passvalue)) {
        password.style.display = "none";
      } else {
        password.style.display = "block";
        return false;
      }
      if (passvalue === conpassvalue) {
        confirmpass.style.display = "none"
      } else {
        confirmpass.style.display = "block"
        return false
      }
      if (mobptrn.test(mobilevalue)) {
        mobileno.style.display = "none";
      } else {
        mobileno.style.display = "block";
        return false;
      }
      if (emailpattern.test(emailvalue)) {
        emailid.style.display = "none";
      } else {
        emailid.style.display = "block";
        return false;
      }
    }

  </script>
  
  <script>
    // api data fetch
    function fetch(){ //var $j = jQuery.noConflict();
      $.get('https://api.covid19api.com/summary',
        function(data){
          console.log(data.Countries.lenght);
          var table_value = document.getElementById("table_value");
          for (let i = 0; i < data['Countries'].lenght; i++) {
                   var x = table_value.insertRow();
                   x.insertCell(0);
                   table_value.rows[i].cells[0].innerHTML = data['countries'][i-1]['country'];
                   table_value.rows[i].cells[0].style.background = '#7a4a91';
                   table_value.rows[i].cells[0].style.color = '#fff';

                   x.insertCell(1);
                   table_value.rows[i].cells[1].innerHTML = data['countries'][i-1]['TotalConfirmed'];
                   table_value.rows[i].cells[1].style.background = '#4bb7d8';
                   x.insertCell(2);
                   table_value.rows[i].cells[2].innerHTML = data['countries'][i-1]['TotalRecovered'];
                   table_value.rows[i].cells[2].style.background = '#4bb7d8';
                   x.insertCell(3);
                   table_value.rows[i].cells[3].innerHTML = data['countries'][i-1]['TotalDeaths'];
                   table_value.rows[i].cells[3].style.background = '#f36e23';
                   x.insertCell(4);
                   table_value.rows[i].cells[4].innerHTML = data['countries'][i-1]['NewRecovered'];
                   table_value.rows[i].cells[4].style.background = '#4bb7d8';
                   x.insertCell(5);
                   table_value.rows[i].cells[5].innerHTML = data['countries'][i-1]['NewDeaths'];
                   table_value.rows[i].cells[5].style.background = '#9cc850';
                   x.insertCell(6);
                   table_value.rows[i].cells[6].innerHTML = data['countries'][i-1]['NewConfirmed'];
                   table_value.rows[i].cells[6].style.background = '#f36e23';
            const element = array[i];
            
          }
        }
      
      );
    }
  </script>
</body>

</html>

<?php
$done = '';
$notdone = '';
require('dbcon.php');

if(isset($_POST['submit'])){
$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];
$sql = "INSERT INTO `coronacase`( `name`, `password`, `email`, `phone`, `msg`) VALUES ('$user','$password','$email','$mobile','$msg')";
$result = mysqli_query($con,$sql);
if($result){
  $done;
}else{
  $notdone;
}

}
?>
<?php
if($done){

?>
<script>
  alert('your data has been save we will contact you soon');
</script>
<?php }else{ ?>
<script>
alert('Please resubmit your data your there is some error occure while saving your data');
</script>
<?php }
?>