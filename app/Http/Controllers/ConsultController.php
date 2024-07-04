<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Auth;
class ConsultController extends Controller
{
    
    public function consultfun(){
        return view("Consult/consult");
    }

    public function AnlayizeData(Request $req)
{
    $eachBatteryVolt = 1000;
    
    $eachPanelVolt = 550;
    
    $backupvar= $req->backup;

    $appliances = [
        'fan' => 75,
        'light' => 60,
        'refg' => 350,
        'tv' => 150,
        'ac' => 1500,
        'washm' => 500,
    ];

    $totalSum = 0;
    $convertedData = [];

    foreach ($appliances as $appliance => $factor) {
        $convertedValue = number_format($req->$appliance) * $factor;
        $convertedData[$appliance] = $convertedValue;
        $totalSum += $convertedValue;
    }

    $number_of_batteries = round($totalSum / $eachBatteryVolt);

    $requird = round($number_of_batteries * $backupvar);

    $number_of_panels = round($totalSum / $eachPanelVolt);

    // dd('Batteries requird: '.$requird,'Panels requird: '.$number_of_panels);
    $lengthvar = $req->lengthinp;
    $widthvar  = $req->widthinp;
    $heightvar = $req->heightinp;

    $sum_of_area =round($lengthvar + $widthvar + $heightvar / 9);
    

    return view('Consult/analyze', [
        'batteriesRequired' => $requird,
        'panelsRequired' => $number_of_panels,
        'givenarea'=> $sum_of_area
    ]);
}

//PDF Data
public function DynamicData(Request $request)
{

    $data['panelsrequired']     = $request->query('panel');
    $data['givearea']           = $request->query('area');
    $data['batteriesrequired']  = $request->query('batteries');
    // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('
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
    

<h3 style="color: #917655;">"<span style="color: #000; text-transform: uppercase;font-size:25px;"><b><i>'.Auth::user()->name .'</span></i></b>"<span style="color: #000; text-transform: uppercase; font-size:20px; "> your solar consumption </span></h3>
            <p>In residential areas, solar panels are installed on rooftops to convert sunlight into electricity, allowing homeowners to generate their power and reduce their dependence on grid electricity. This not only helps reduce electricity bills but also contributes to a greener environment by lowering carbon emissions.</p>
            <table >
                <tr>
                <th> Your Required Plates</th>
                
                <th> Your Required Batteries</th>
                
                <th> Your Given Area</th>
                </tr>
                <tr>
                    <td>'.$request->query('panel').'  Panels of 160 watts</td>
                    <td>'.$request->query('batteries').' Batteries of 100 watts</td>
                    <td>'.$request->query('area').' square yards required</td>
                </tr>
            </table>
            
            <p>Energy Independence: Solar panels enable individuals and businesses to generate their electricity, reducing their dependence on utility companies and the grid. This energy independence provides a degree of security against power outages and rising energy prices.</p>
                       
                  
                    <div class="col-md-6 text-center text-md-end">
                     
                        <br>Distributed By: <b><i>Solar consult</i></b>
                    </div>


</body></html>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('consultation.pdf');

    
}


}
