<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div style="float: right">
      <p>IIUM-IIUMMC-SHAR-F010<br>VER: 01<br>REV: 00<br>EFFECTIVE DATE: 22 MARCH 2021</p>
    </div>

    <div style="position: relative; text-align: center">
      <img src="images/iium-logo.jpg" alt="logo" width="200" ></div>
      <div style="position: relative; text-align: center">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>SHARIAH LIAISON OFFICER MONTHLY REPORT</h4></div>


      <div style="left: 30px;">
            <div>
                <div>
               <div>
                <table class="pt-info">
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Shariah Liaison Officer’s Name</th>
                            <td >{{ $slomonthly->slo_name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Department / Unit / Ward / Clinic</th>
                            <td>{{ $slomonthly->dept }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Month</th>
                            <td>{{ $slomonthly->month }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Date</th>
                            <td>{{ $slomonthly->date }}</td>
                        </tr>
                    </table>
                    <br>
                    <table class="pt-info" >
                        <tr>
                            <th style="text-align: left; padding: 5px;" colspan="2">DETAILS</th>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Report</h5>
                                <div>
                                    {{ $slomonthly->report_details }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Corrective Action (if any)</h5>
                                <div>
                                    {{ $slomonthly->correctiveaction }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Suggestions / Recommendations from SLO</h5>
                                <div>
                                    {{ $slomonthly->suggestion }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Shariah Liaison Officer:</h5>
                                <div> <h6>This is an auto-generated signature</h6></div>
                                <div>
                                    Name : {{ $slomonthly->slo_name }}
                                </div>
                                <div>
                                    Position : 
                                </div>
                                <div>
                                    Date : {{ $slomonthly->date  }}
                                </div>
                            </td>
                        </tr>
                    </table>
               </div>
            
            
    </div>

    <div style="position: relative; text-align: center">
      <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
      
    </div>
    
  </body>
</html>

<style>
   *{
    font-family: Arial, sans-serif;
   }
  .centre{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  p{
    font-size: 10px;
  }
  .top right{
    font-size: 10px;
  }
  table, tr, td {
    padding: 2px;
    border: 1px solid black;
    border-collapse: collapse;
  }   
  .pt-info{
      margin: 2px;
      padding:2px;
      width: 100%;
      font-size: 16px;
  }

</style>

