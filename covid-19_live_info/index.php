<!DOCTYPE html>
<html>
<head>
  
  <title>Covid-19 Info</title>
<?php include 'links.php'; ?>
<?php include 'style.php'; ?>

</head>
<body onload="fetch()">
 
<nav class="navbar navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:24px"></i></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#globalid">Global Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#istatesid">Indian States</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li>
       
      
      </ul>
    
    </div>
  </nav>

<div class="main_header">
   <div class="row w-100 h-100 p-5">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
             <div class="left w-100 h-100 d-flex justify-content-center align-items-center"> 
               <img src="img/corona1.jpg" width="300" hight="300">
             </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
           <div class="right w-100 h-100 d-flex justify-content-center align-items-center">
               <h1>Corona virus disease </br>(COVID-19) pandemic</h1>
           </div>
      </div>
   </div>

</div>
<!-- *************************about section ********************** -->

<div class="container-fluid sub_saction  pt-5 pb-5 " id="aboutid">
        <div class="section_header text-center mb-5 mt-5">
              <h1>About Covid</h1>
        </div>
        <div class="row pt-5">
             <div class=" col-lg-5 col-md-6 col-12 ml-5 about_res">
               <div class="img ">
             
                        <img src="img/corona2.jpg">
                    </div>
             </div>
             <div class=" col-lg-6 col-md-6 col-12">
                <h2>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus</h2>
                <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.</p>
                <p>You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth</p>
             </div>
        </div>
</div>

<!--**********************Global corona update************************-->

<div class="container-fluid pt-5 pb-5  " id="globalid" >
        <div class="mb-3">
              <h2 class="text-center text-uppercase pb-5">Corona live update country Wise</h2>
         </div>
      <div class="table-responsive">
         <table class=" table table-bordered table-striped text-center" id="tbval">
         <tr>
         <th>Country</th>
         <th>TotalConfirmed</th>
         <th>TotalRecovered</th>
         <th>TotalDeaths</th>
         <th>NewConfirmed</th>
         <th>NewRecovered</th>
         <th>NewDeaths</th>

         </tr>

         </table>
      </div>

</div>

<!--********************** Indian states corona update************************-->
<!-- 
<div class="container-fluid sub_saction pt-5 pb-5 " id="istatesid">
        <div class="section_header text-center mb-5 mt-5">
              <h1>Corona live Indian States Wise</h1>
        </div>


</div>
 -->



<!--*************    Contact Form         **********-->
<div class="container-fluid sub_saction pt-5 pb-5 " id="contactid">
        <div class="section_header text-center mb-5 mt-5">
              <h1>Contact Form </h1>
        </div>


     <div class="w-50 m-auto">
     <form action="connect.php" method="post">
        <div class="form-group">
           <lable>Username  </lable>
          <input type="text" name="user" autocomplete="off" class="form-control">
       </div>

       <div class="form-group">
      <lable>Email-id  </lable>
      <input type="email" name="email" autocomplete="off" class="form-control">
      </div>

    <div class="form-group">
      <lable>Mobile  </lable>
    <input type="number" name="mobile" required autocomplete="off" class="form-control">
  </div>

    <div class="form-group">
      <lable>Comment  </lable>
   <textarea class="form-control " name="comment">
     
    </textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

</div>

<!-- ******************icons******************8 -->
<div class="container_div pt-5 pb-5">
    <a href="https://www.instagram.com/dk__9270/" target="_blank">
    <i class="fa fa-2x fa-instagram"  ></i>
    </a>
    <a href="https://www.instagram.com/dk__9270/" target="_blank">
    <i class="fa fa-2x fa-linkedin-square"  ></i>
    </a>
    <a href="https:https://wa.me/qr/HAA6FNAWN7YAM1" target="_blank">
    <i class="fa fa-2x fa-whatsapp" ></i>
    </a>
</div>


<!--*************************Footer**********************-->

<footer class="mt-5 sub_saction ">
  <div class="footer_style text-white text-center container-fluid p-2">
  <p>COPYRIGHT BY Dinesh Kalaskar</p>
</div>
</footer>

<script>
function fetch()
{
  $.get("https://api.covid19api.com/summary",
     
     function(data)
     {
       var tbval = document.getElementById('tbval');

         for(var i=1;i<(data['Countries'].length);i++)
         {
             var x = tbval.insertRow();
            
         x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background = '#C724B1';
        tbval.rows[i].cells[0].style.color = '#fff';
     
               
        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background = '#7a4a99';
        tbval.rows[i].cells[1].style.color = '#fff';
     
              
        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background = '#7a4a91';
        tbval.rows[i].cells[2].style.color = '#fff';
     
              
        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background = '#7a4a91';
        tbval.rows[i].cells[3].style.color = '#fff';
     
              
        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background = '#7a4a91';
        tbval.rows[i].cells[4].style.color = '#fff';
     
              
        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background = '#7a4a91';
        tbval.rows[i].cells[5].style.color = '#fff';
     
              
        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background = '#7a4a91';
        tbval.rows[i].cells[6].style.color = '#fff';
     
     }
}
  );
}

</script>

</body>

</html>