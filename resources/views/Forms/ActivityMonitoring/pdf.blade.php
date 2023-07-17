<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 5px;
            border: 1px solid black;
            vertical-align: text-top;

        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            background-color: white;
        }

        .yes-no-col {
            width: 75px;
            text-align: center;
            /* Adjust the width as needed */
        }

        h4 {
            font-size: 16px;
            font-weight: normal;
            padding-left: 5px;
        }
    </style>
</head>

<body>

    <div style="float: right">
        <p>IIUM-IIUMMC-SHAR-F010<br>VER: 01<br>REV: 00<br>EFFECTIVE DATE: 22 MARCH 2021</p>
    </div>

    <div style="position: relative; text-align: center">
        <img src="images/iium-logo.jpg" alt="logo" width="200">
    </div>
    <div style="position: relative; text-align: center">
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>SHARIAH COMPLIANCE ACTIVITY MONITORING FORM</h4>
    </div>
    @php
    $datetime = $activity->created_at;
    $dateParts = explode(' ', $datetime);
    $date = implode('-', array_reverse(explode('-', $dateParts[0])));
    @endphp

    <div style="left: 30px;">
        <div>
            <div>
                <div>
                    <table class="pt-info">
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Department / Unit / Ward / Clinic</th>
                            <td>{{ $activity->department_info }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Representative of Department / Unit / Ward / Clinic</th>
                            <td>{{ $activity->representative_dep }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Representative from Department of Shariah Compliance</th>
                            <td>{{ $activity->representative_shariah }}</td>
                        </tr>
                        <tr>
                            <th style="width: 25%; text-align: left; padding: 5px;">Date</th>
                            <td> {{ $date }}</td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <th colspan="3" style="background-color: #A8D08D;">INSPECTION DETAILS</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;">CONTENT</td>
                            <td class="yes-no-col">Yes/No</td>
                            <td style="text-align: center;">REMARKS</td>
                        </tr>
                        <tr>
                            <td>
                                <ol>

                                    <li><b>Workflow</b></li>
                                </ol>
                                <ul>
                                    <li>Person in charge give a briefing or explanation about workflow</li>
                                    <li>Workflow of the department / unit / ward / clinic is comply to shariah <br> (If not comply to shariah, it shall be stated in remarks column)</li>
                                </ul>


                            </td>
                            <td class="yes-no-col"> <br> <br>{{ $activity->Q1}} <br> <br><br> {{ $activity->Q2}}</td>
                            <td><br> <br>- {{ $activity->Q1_remarks}} <br> <br>- {{ $activity->Q2_remarks}}</td>
                        </tr>
                        <tr>
                            <td>
                                <ol start="2">
                                    <li><b>Shariah Critical Control Point</b></li>
                                </ol>
                                <ul>
                                    <li>Shariah Critical Control Points are archieved / fully implemented</li>
                                    <li>Shariah Critical Control Points are identified accordingly to Shariah requirements</li>
                                </ul>
                            </td>
                            <td class="yes-no-col"><br> <br>{{ $activity->Q3}} <br> <br><br> {{ $activity->Q4}}</td>
                            <td><br> <br>- {{ $activity->Q3_remarks}} <br> <br>- {{ $activity->Q4_remarks}}</td>
                        </tr>
                        <tr>
                            <td>
                                <h4><b>Any activities of non-conformity to Shariah are noticed during inspection</b></h4>
                                <h4>(If any activites of non-conformaties are noticed, it shall be stated in the remark column)</h4>
                            </td>
                            <td class="yes-no-col"><br> <br>{{ $activity->Q5}} </td>

                            <td><br> <br>- {{ $activity->Q5_remarks}} </td>
                        </tr>
                        <tr>
                            <td style="border-right: 1px white; height: 150px; vertical-align: text-top">
                                <h4> <b>Corrective Action</b> (if any)</h4>
                                {{$activity->corrective_action}}
                            </td>
                            <td style="border-right: 1px white;"></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td style="border-right: 1px white; height: 300px; vertical-align: text-top">
                                <h4> <b>Discussion points</b> (if any)</h4>
                                {{$activity->discussion_point}}
                            </td>
                            <td style="border-right: 1px white;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border-right: 1px white; height: 300px; vertical-align: text-top">
                                <h4> <b>Suggestion / Recommendations / Comments from <br> Representative from Department of Shariah <b> Compliance</b></h4>
                                {{$activity->suggestion}}
                            </td>
                            <td style="border-right: 1px white;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border-right: 1px white; height: 150px; vertical-align: text-top">
                                <h4> <b>Next Follow Up of Any Non-Conformities Activities</b> (if any)</h4>
                                {{$activity->next_follow}}
                            </td>
                            <td style="border-right: 1px white;"></td>
                            <td></td>
                        </tr>


                    </table>
                    <br>
                    <table>
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
                                    Position: {{ $user->position}}
                                </div>
                                <div>
                                    Date: {{ $activity->created_date  }}
                                </div>
                            </td>
                            <td>
                                <h5>Representative from Shariah Compliance Unit:</h5>
                                <div>
                                    <h6>This is an auto-generated signature</h6>
                                </div>
                                <div>
                                    Name:
                                </div>
                                <div>
                                    Position:
                                </div>
                                <div>
                                    Date:
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