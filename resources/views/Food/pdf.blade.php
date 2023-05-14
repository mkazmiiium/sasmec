<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <div style="float: left">
        <p>Date:{{ strftime("%d %b %Y",strtotime($food->created_at)) }}<br>Time:{{ strftime("%T",strtotime($food->created_at)) }}</p>
    </div>

    <div style="float: right">
        <p>IIUM-IIUMMC-SHAR-F011<br>VER: 01<br>REV: 01<br>EFFECTIVE DATE: {{ strftime("%d %b %Y",strtotime($food->created_at)) }}</p>
    </div>

    <div style="position: relative; text-align: center">
        <img src="images/iium-logo.jpg" alt="logo" width="200">
    </div>
    <div style="position: relative; text-align: center">
        <h4>SULTAN AHMAD SHAH MEDICAL CENTRE @IIUM<br>DEPARTMENT OF SHARIAH COMPLIANCE<br>FOOD PREMISE INSPECTION FORM</h4>
    </div>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Premise Name: {{ $food->PremiseName }}<br>
                Premise Location: {{ $food->location }}<br>
                Date: {{ $food->created_at }}<br>
            </label>
        </div>
    </div><br>

    <div class="boxed">
        CERTIFICATION OF HALAL COMPLIANCE
    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Certification of Halal Compliance: <span id="form_data">[ {{ $food->Q1 }} ]</span><br>
                Certificate of slaugter: <span id="form_data">[ {{ $food->Q2 }} ]</span><br>
                Certificate of slaugtering place: <span id="form_data">[ {{ $food->Q3 }} ]</span><br>
                Certificate of halal from JAKIM / State Islamic Religious Department: <span id="form_data">[ {{ $food->Q4 }} ]</span><br>
                Certificate of halal from any foreign recognised halal authorities: <span id="form_data">[ {{ $food->Q5 }} ]</span><br>
                Acknowledgment letter from Muslim provider if homemade product: <span id="form_data">[ {{ $food->Q6 }} ]</span><br>
            </label>
        </div>
    </div><br>


    <div class="boxed">
        FOOD HANDLER
    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                All food handlers are typoid vaccinated: <span id="form_data">[ {{ $food->Q7 }} ]</span><br>
                All food handlers are Muslim: <span id="form_data">[ {{ $food->Q8 }} ]</span><br>
                All food handlers are Friendly: <span id="form_data">[ {{ $food->Q9 }} ]</span><br>
                All food handlers are Helpful: <span id="form_data">[ {{ $food->Q10 }} ]</span><br>
                All food handlers are Clean Clothes: <span id="form_data">[ {{ $food->Q11 }} ]</span><br>
                All food handlers are Clean Nails: <span id="form_data">[ {{ $food->Q12 }} ]</span><br>
                All food handlers are Not having open injuries: <span id="form_data">[ {{ $food->Q13 }} ]</span><br>
                All food handlers are wearing suitable shoes: <span id="form_data">[ {{ $food->Q14 }} ]</span><br>
                All food handlers wash their hands before handling food: <span id="form_data">[ {{ $food->Q15 }} ]</span><br>
                All food handlers wash their hands after go to toilet: <span id="form_data">[ {{ $food->Q16 }} ]</span><br>
                All food handlers are Not coughing / sneezing towards food: <span id="form_data">[ {{ $food->Q17 }} ]</span><br>
            </label>
        </div>
    </div><br>



    <div class="boxed">
        CLEANLINESS OF PREMISE
    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Dinning area is clean: <span id="form_data">[ {{ $food->Q18 }} ]</span><br>
                Kitchen area - Dustbin is covered: <span id="form_data">[ {{ $food->Q191 }} ]</span><br>
                Kitchen area - Cooker hood/exhaust fan is clean: <span id="form_data">[ {{ $food->Q192 }} ]</span><br>
                Hand washing area with soup: <span id="form_data">[ {{ $food->Q20 }} ]</span><br>
                Dish washing area with soup: <span id="form_data">[ {{ $food->Q21 }} ]</span><br>
                Storage - Raw food is separated from cooked food: <span id="form_data">[ {{ $food->Q221 }} ]</span><br>
                Storage - Toxic/poisonous substances separete from food: <span id="form_data">[ {{ $food->Q222 }} ]</span><br>
                Storage - Good shelves condition: <span id="form_data">[ {{ $food->Q223 }} ]</span><br>
                Storage - Halal and Haram items stored separately (if any): <span id="form_data">[ {{ $food->Q224 }} ]</span><br>
                Clean packaging area (if any): <span id="form_data">[ {{ $food->Q23 }} ]</span><br>
                Clean Chiller / Freezer (separate halal and haram items): <span id="form_data">[ {{ $food->Q24 }} ]</span><br>
                Clean Food Containers: <span id="form_data">[ {{ $food->Q25 }} ]</span><br>
                Clean Floor/wall/ceiling: <span id="form_data">[ {{ $food->Q26 }} ]</span><br>
                Clean toilets: <span id="form_data">[ {{ $food->Q27 }} ]</span><br>
                Close Dustin with plastic bag: <span id="form_data">[ {{ $food->Q28 }} ]</span><br>
                Clean utensils: <span id="form_data">[ {{ $food->Q29 }} ]</span><br>
                Others: <span id="form_data">[ {{ $food->Q30 }} ]</span><br>
            </label>
        </div>
    </div><br>



    <div class="boxed">
        FOOD AND BEVERAGES
    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Fresh: <span id="form_data">[ {{ $food->Q31 }} ]</span><br>
                High quality: <span id="form_data">[ {{ $food->Q32 }} ]</span><br>
                Reasonable Price: <span id="form_data">[ {{ $food->Q33 }} ]</span><br>
                Wrapped/covered: <span id="form_data">[ {{ $food->Q34 }} ]</span><br>
                Expired date: <span id="form_data">[ {{ $food->Q35 }} ]</span><br>
                Others (please specify): <span id="form_data">[ {{ $food->Q36 }} ]</span><br>
            </label>
        </div>
    </div><br>


    <div class="boxed">
        PREPARATION AND METHODS

    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Clean eggs: <span id="form_data">[ {{ $food->Q37 }} ]</span><br>
                Clean vegetables and fruits: <span id="form_data">[ {{ $food->Q38 }} ]</span><br>
                Clean meat, fish, chicken. etc: <span id="form_data">[ {{ $food->Q39 }} ]</span><br>
                Clean utensils: <span id="form_data">[ {{ $food->Q40 }} ]</span><br>
                Rinsing rice with clean water: <span id="form_data">[ {{ $food->Q41 }} ]</span><br>
                Overall hygenic environment: <span id="form_data">[ {{ $food->Q42 }} ]</span><br>
                Follow the right method of preparation: <span id="form_data">[ {{ $food->Q43 }} ]</span><br>
                Others (please specify): <span id="form_data">[ {{ $food->Q44 }} ]</span><br>


            </label>
        </div>
    </div><br>


    <div class="boxed">
        OTHERS

    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                Tangkal Pelaris or any superstition items: <span id="form_data">[ {{ $food->Q45 }} ] </span><br>
                Frequency of garbage removal adequate to maintain the premises in the sanitary condition: <span id="form_data">[ {{ $food->Q46 }} ] </span><br>
                Good waste management, ventilation & drainage system: <span id="form_data">[ {{ $food->Q47 }} ] </span><br>
                No expired food item: <span id="form_data">[ {{ $food->Q48 }} ] </span><br>

            </label>
        </div>
    </div><br>


    <div class="boxed">
        COMMENTS

    </div><br>

    <div class="col-span-6 sm:col-span-10">
        <div class="col-sm-9">
            <label class="form-check-label" for="declaration" style="text-align: justify">
                COMMENTS: [ {{ $food->comment }} ]<br>
                CORRECTIVE ACTION: [ {{ $food->correctiveaction }} ]<br>
            </label>
        </div>
    </div><br>

    <div style="position: relative; text-align: center">
        <p style="position: fixed; bottom: 0; width:100%;">Sultan Ahmad Shah Medical Centre @IIUM, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur.<br>Tel: 09-591 2500</p>
    </div>

</body>

</html>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
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

    .boxed {
        border: 1px solid black;
        text-align: center;
    }
    #form_data {
        font-weight: bold;
        background-color: lightgreen;
    }
</style>