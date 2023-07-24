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
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>PATIENT VISIT REPORT</h4>
    </div>


    <div style="left: 30px;">
        <div>
            <div>
                <div>
                    <table class="pt-info">
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Name of Patient/Relative</th>
                            <td>{{ $patientvisit->patientname }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Ward / Clinic</th>
                            <td>{{ $patientvisit->ward }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Referred Date</th>
                            <td>{{ $patientvisit->referreddate }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Attended Date</th>
                            <td>{{ $patientvisit->attendeddate }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Reason for Referral</th>
                            <td>{{ $patientvisit->reason }}</td>
                        </tr>
                    </table>
                    <br>
                    <table class="pt-info">
                        <tr>
                            <th style="text-align: left; padding: 5px;" colspan="2">DETAILS</th>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Background of Patient/Relative</h5>
                                <div>
                                    {{ $patientvisit->background }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Current Condition</h5>
                                <div>
                                    {{ $patientvisit->currentcondition }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Problem</h5>
                                <div>
                                    {{ $patientvisit->problem }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding: 5px;" colspan="2">
                                <h5>Intervention</h5>
                                <div>
                                    {{ $patientvisit->intervention }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Case Status/Outcome:</h5>
                                {{ $patientvisit->casestatus}}
                                <div>
                                    <h6>Case Closed /Refer to other expert (please specify):</h6>
                                </div>
                                <div>
                                    <h5>Next Follow Up (if any):</h5>
                                </div>{{ $patientvisit->followup  }}
                </div>
                </td>
                <td>
                    <h5>Reported by:</h5>
                    <div>
                        <h6>This is an auto-generated signature</h6>
                    </div>

                    <div>
                        Name : {{ $patientvisit->slo_name }}
                    </div>
                    @php
                    $datetime = $patientvisit->created_at;
                    $dateParts = explode(' ', $datetime);
                    $date = implode('-', array_reverse(explode('-', $dateParts[0])));
                    @endphp

                    <div>
                        Date : {{ $date  }}
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