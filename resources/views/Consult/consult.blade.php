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

    <title>Consult</title> 
    <style>
    #particles-js{
    position: absolute;
    top:0; left:0;
    height:98%;
    width:100%;
}
*{
    font-family: Arial, Helvetica, sans-serif;
}
    </style>
</head>
<body>



<div id="particles-js"></div>
        
    
    
    <div class="container">
    <!-- Start Preload -->
<div class="loader-bg">
         
         <div class="loader-text">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>s</span>
            <span>u</span>
            <span>l</span>
            <span>t</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
      <!-- End Preload -->

        <header>Consult
        <span style="font-size: 13px; color: #917655;">Beta</span>
        
        </header>
        <br>

        <p>Enter your home appliances which woukd used on solar panels.</p>
        <form action="/AnalizeData" method="post">
        

            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Consumtion Details</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Fan</label>
                            <select required name="fan">
                                <option disabled selected>Numbers of Fans</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Light</label>
                            <select required name="light">
                                <option disabled selected>Numbers of Lights</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Refigerater</label>
                            <select required name="refg">
                                <option disabled selected>Numbers of Refigeraters</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Tv</label>
                            <select required name="tv">
                                <option disabled selected>Numbers of Tv`s</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>AC</label>
                            <select required name="ac">
                                <option disabled selected>Numbers of AC</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Washing Machine</label>
                            <select required name="washm">
                                <option disabled selected>Numbers of Washing Machines</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="details personal">
                <div class="fields">
                <div class="input-field" style="width: 100%;">
                            <label>Backup</label>
                            <select required name="backup">
                                <option disabled selected>Numbers of Backup hours</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                  <div>
                </div>

                <div class="details ID">
                    <span class="title">Slect your area length</span>

                    <div class="fields">
                    
                    

                        <div class="input-field">
                            <label>length</label>
                            <input type="number" placeholder="Enter length in meter"  name="lengthinp" required>
                        </div>

                        <div class="input-field">
                            <label>width</label>
                            <input type="number" placeholder="Enter wihth in meter" name="widthinp" required>
                        </div>

                        <div class="input-field" >
                            <label>height</label>
                            <input type="number" placeholder="Enter height in feet" name="heightinp" required>
                        </div>

                    </div>

                    <div class="buttons">
                    <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <a href="/" style="text-decoration: none; color: #fff;">
                            <span class="btnText">Back</span>
                            </a>
                        </div>
                        <button class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    </div>
                  
                </div> 
            </div>

            
        </form>
    </div>
  <!-- Start Javascript Libraries -->
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <script src="../assets/js/plugin.min.js"></script>
      <script src="../assets/js/three.min.js"></script>
      <script src="../assets/js/vendors.min.js"></script>
      <script src="../assets/js/slider-1.js"></script>
      <script src="../assets/js/script0b84.js?fsfsdsdgsdgsdgsdg"></script>
      <!-- End Javascript Libraries -->

    <!-- particles.js links  -->
<script src="particles.min.js"></script>
<script src="canva.js"></script>


</body>
</html>