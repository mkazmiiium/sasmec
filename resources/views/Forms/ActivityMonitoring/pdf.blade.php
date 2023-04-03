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
        <img src="images/iium-logo.jpg" alt="logo" width="200">
    </div>
    <div style="position: relative; text-align: center">
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>ACTIVITY MONITORING FORM</h4>
    </div>


    <div style="left: 30px;">
        <div>
            <div>
                <div>
                    <table class="pt-info">
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">ACTIVITY NAME</th>
                            <td>{{ $activity->activity_name }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">PERSON IN CHARGE</th>
                            <td>{{ $activity->pic }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Department / Unit / Ward / Clinic</th>
                            <td>{{ $activity->department }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Date</th>
                            <td>{{ $activity->created_date }}</td>
                        </tr>
                    </table>
                    <br>
                    <table class="pt-info">
                        <tr>
                            <th style="text-align: left; padding: 5px;" colspan="2">DETAILS</th>
                        </tr>                    
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>DISCUSSION POINTS</h5>
                                <div>
                                    {{ $activity->discussion_point }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>SHARIAH CRITICAL POINTS</h5>
                                <div>
                                    {{ $activity->shariah_critical_point }}
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Suggestions / Recommendations/ Comments from Representative of Shariah Compliance Unit</h5>
                                <div>
                                    {{ $activity->suggestion }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Next Follow Up</h5>
                                <div>
                                    {{ $activity->next_follow }}
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h5>Representative of Hod/Department: </h5>
                                <div>
                                    <h6>This is an auto-generated signature</h6>
                                </div>
                                <div>
                                    Name: {{ $user->name }}
                                </div>
                                <div>
                                    Position :
                                </div>
                                <div>
                                    Date : {{ $activity->created_date  }}
                                </div>
                            </td>
                            <td>
                                <h5>Representative from Shariah Compliance Unit:</h5>
                                <div>
                                    <h6>This is an auto-generated signature</h6>
                                </div>
                                <div>
                                    Name : 
                                </div>
                                <div>
                                    Position :
                                </div>
                                <div>
                                    Date : 
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
    * {
        font-family: Arial, sans-serif;
    }

    .centre {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    p {
        font-size: 10px;
    }

    .top right {
        font-size: 10px;
    }

    table,
    tr,
    td {
        padding: 2px;
        border: 1px solid black;
        border-collapse: collapse;
    }

    .pt-info {
        margin: 2px;
        padding: 2px;
        width: 100%;
        font-size: 16px;
    }
</style>