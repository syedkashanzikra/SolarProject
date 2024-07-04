<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicons/abc.jpg">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="consult-foam.css">


    <link rel="stylesheet" type="text/css" href="../assets/css/style0b84.css?fsfsdsdgsdgsdgsdg">
      <link rel="stylesheet" type="text/css" href="../assets/css/dark0b84.css?fsfsdsdgsdgsdgsdg">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Result</title> 
    <style>
        *{
            color: #FFF;
            font-family: Arial, Helvetica, sans-serif;
        }
    #particles-js{
    position: absolute;
    top:0; left:0;
    height:98%;
    width:100%;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:50px;
}

td, th {
  border: 1px solid  #917655;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:  #917655;

}
p{
    margin-top:20px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #000;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 400px;
  border-radius: 20px;
  margin-top: 340px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 35px;
  font-weight: bold;
  margin-top: 13px;
}

.close:hover,
.close:focus {
  color: #81684b;
  text-decoration: none;
  cursor: pointer;
}

.fcc-btn {
  display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #81684b;
    transition: all 0.3s linear;
    cursor: pointer;
  
  text-decoration: none;
}
.fcc-btn1 {
  display: flex;
    align-items: center;
    justify-content: center;
    height: 42px;
    max-width: 60px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 8px 0 0 10px;
    background-color: #81684b;
    transition: all 0.3s linear;
    cursor: pointer;
  
  text-decoration: none;
}
.fcc-btn1:hover,
.fcc-btn1:focus {
  background-color: #635443;
  text-decoration: none;
  cursor: pointer;
}


    </style>
</head>
<body>
<div id="particles-js"></div>
        
    
    
    <div class="container">
        <!-- Start Preload -->
<div class="loader-bg">
         
         <div class="loader-text">
            <span>G</span>
            <span>e</span>
            <span>n</span>
            <span>e</span>
            <span>r</span>
            <span>a</span>
            <span>t</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
            <span>.</span>
            <span>.</span>
            <span>.</span>
         </div>
      </div>
      <!-- End Preload -->
    
        <header>Consult
        <span style="font-size: 13px; color: #917655;">Beta</span>
        </header>

        <form action="/AnalizeData" method="post">
            <h3 style="color: #917655;">"<span style="color: #FFF; text-transform: uppercase;"><b><i>{{ Auth::user()->name }}</span></i></b>"<span style="color: #FFF; text-transform: uppercase; font-size:25px; "> your solar consumption </span></h3>
            <p>In residential areas, solar panels are installed on rooftops to convert sunlight into electricity, allowing homeowners to generate their power and reduce their dependence on grid electricity. This not only helps reduce electricity bills but also contributes to a greener environment by lowering carbon emissions.</p>
            <table >
                <tr>
                <th> Your Required Plates</th>
                
                <th> Your Required Batteries</th>
                
                <th> Your Given Area</th>
                </tr>
                <tr>
                    <td>{{ $panelsRequired }} Panels of 550 watts</td>
                    <td>{{ $batteriesRequired }} Batteries of 100 watts</td>
                    <td>{{ $givenarea }} square yards required</td>
                </tr>
            </table>
            
            <p>Energy Independence: Solar panels enable individuals and businesses to generate their electricity, reducing their dependence on utility companies and the grid. This energy independence provides a degree of security against power outages and rising energy prices.</p>
                       
                  
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     
                        <br>Distributed By: <b><i>Solar consult</i></b>
                    </div>
                    <div class="buttons">
                        <?php
                        $data = [
                          'panel'       => $panelsRequired,
                          'batteries'   => $batteriesRequired ,
                          'area'        => $givenarea ,
                        ];
                        
                        ?>
                        <a href="{{ route('pdf.data', $data) }}"  class="fcc-btn">
                          Download PDF<i class="fa fa-download" style="margin-left: 5px;"></i>
                      </a>
                        <a href="javascript:void()" id="myBtn"  class="fcc-btn" style="margin-left: 20px;">
                          Send on Email <i class="fa fa-envelope" style="margin-left: 5px;"></i>
                      </a>
                      
                      
                  </div>

           
        </form>

         <!-- The Modal -->
         <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              
              <form class="form1" action="/email" method="post" style="min-height: 0px;">
              <div class="input-field" style="display: flex;">
                        @csrf
                        <input type="email" placeholder="Enter Email"  name="mailinp" style="width: 250px;">
                        <button type="submit" style="display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 42px;
                        max-width: 60px;
                        width: 100%;
                        border: none;
                        outline: none;
                        color: #fff;
                        border-radius: 5px;
                        margin: 8px 0 0 10px;
                        background-color: #81684b;
                        transition: all 0.3s linear;
                        cursor: pointer;
                      text-decoration: none;"> <i class="fa fa-send-o"></i></button> 
                      </div>
                    </form>
                    
            </div>

        </div>
             
    </div>


    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

      <!-- Start Javascript Libraries -->
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <script src="../assets/js/plugin.min.js"></script>
      <script src="../assets/js/three.min.js"></script>
      <script src="../assets/js/vendors.min.js"></script>
      <script src="../assets/js/slider-1.js"></script>
      <script src="../assets/js/script0b84.js?fsfsdsdgsdgsdgsdg"></script> 
      <!-- End Javascript Libraries-->

    <!-- particles.js links  -->
<script src="particles.min.js"></script>
<script src="canva.js"></script>

</body>
</html>