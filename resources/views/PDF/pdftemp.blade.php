<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Consult</title>
    <style>
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

    </style>
</head>
<body>
    

<h3 style="color: #917655;">"<span style="color: #000; text-transform: uppercase;font-size:25px;"><b><i>{{ Auth::user()->name }}</span></i></b>"<span style="color: #000; text-transform: uppercase; font-size:20px; "> your solar consumption </span></h3>
            <p>In residential areas, solar panels are installed on rooftops to convert sunlight into electricity, allowing homeowners to generate their power and reduce their dependence on grid electricity. This not only helps reduce electricity bills but also contributes to a greener environment by lowering carbon emissions.</p>
            <table >
                <tr>
                <th> Your Required Plates</th>
                
                <th> Your Required Batteries</th>
                
                <th> Your Given Area</th>
                </tr>
                <tr>
                    <td>{{ $data['batteriesrequired'] }}  Panels of 160 watts</td>
                    <td>{{ $data['panelsrequired'] }} Batteries of 100 watts</td>
                    <td>{{ $data['givearea'] }} square yards required</td>
                </tr>
            </table>
            
            <p>Energy Independence: Solar panels enable individuals and businesses to generate their electricity, reducing their dependence on utility companies and the grid. This energy independence provides a degree of security against power outages and rising energy prices.</p>
                       
                  
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     
                        <br>Distributed By: <b><i>Solar consult</i></b>
                    </div>


</body>
</html>