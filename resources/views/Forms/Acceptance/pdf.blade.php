<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>

  <div id="header">
    <div style="float: right; text-align: right">
      <p>IIUM-IIUMMC-SHAR-F012<br>VER: 01<br>REV: 02<br>EFFECTIVE DATE: 01 FEBRUARY 2021</p>
    </div>

    <div style="position: relative; text-align: center;">
      <img src="images/iium-logo.jpg" alt="logo" width="200">
      <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>SHARIAH PROGRAM / TRAINING<br>ACCEPTANCE/CONSENT FORM</h4>
    </div>

  </div>

  <div id="footer">
    <div style="position: relative; text-align: center">
      <p>Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
    </div>
  </div>

  <div class="boxed">
    SPEAKER'S DETAILS
  </div><br>
  <div class="col-span-6 sm:col-span-10">
    <div class="col-sm-9">
      <label class="form-check-label" for="declaration" style="text-align: justify">
        Program / Training: <u>{{ $acceptance->program }}</u><br>
        Date: <u>{{ $acceptance->date }}</u><br>
        Name: <u>{{ $acceptance->name }}</u><br>
        Institution: <u>{{ $acceptance->institution }}</u>
        <span style="color: white;"> {{ $acceptance->job === null ? $job = $acceptance->others : $job = $acceptance->job; }}</span>
      </label>
    </div>
  </div>
  <span style="color: white;"> {{ $acceptance->resources === null ? $resources = $acceptance->others2 : $resources = $acceptance->resources; }}</span>

  <div class="boxed">
    SPEAKER'S CONSENT
  </div><br>

  <div class="col-span-6 sm:col-span-10">




    <div class="col-sm-9">
      <label for="acceptance">I </label><u>{{ $acceptance->acceptance }}</u> an invitation as: <u> {{ $job }} </u><br><br>

      <label for="acceptance">I </label><u>{{ $acceptance->acceptance2 }}</u> the commitee to distribute my resources for the public
      reading and knowledge purposes.<br> <br>
      Resources category allowed: <u style="background-color: lightgreen;">{{ $resources }}</u><br>

      </label>
      <br>

    </div>

  </div>


  <div class="boxed">
    TERMS AND CONDITIONS
  </div><br>
  <div class="col-span-6 sm:col-span-10">
    <div class="col-sm-9">
      <input class="form-check-input">
      <label class="form-check-label" for="agreement">
        I allow the committee to distribute my slide presentation in pdf format
        and video recording to the program/training participants.<br><br>

        I acknowledge that I have observed the content of my presentation including copyright issues.<br>

        I acknowledge that Sultan Ahmad Shah Medical Centre @IIUM will not responsible to the content of
        presentation and cannot be held liable to any breach of Copyright and Data Protection made by the Speaker.
      </label>
    </div>
  </div>

</body>

</html>

<style>
  * {
    font-family: Arial, sans-serif;
  }

  @page {
    margin: 180px 50px;
  }

  #header {
    position: fixed;
    left: 0px;
    top: -180px;
    right: 0px;
    height: 150px;
    text-align: center;
  }

  #footer {
    position: fixed;
    left: 0px;
    bottom: -250px;
    right: 0px;
    height: 150px;
    text-align: center;
  }

  .page_break {
    page-break-before: always;
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

  .boxed {
    border: 1px solid black;
    text-align: center;
  }
</style>