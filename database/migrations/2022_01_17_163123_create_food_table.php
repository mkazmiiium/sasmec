<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_premises', function (Blueprint $table) {
            $table->id();
            $table->string('PremiseName');
            $table->string('location');
            $table->string('declaration');
            $table->string('remarks1')->nullable();
            $table->string('Q1',10);
            $table->string('remarks2')->nullable();
            $table->string('Q2',10);
            $table->string('remarks3')->nullable();
            $table->string('Q3',10);
            $table->string('remarks4')->nullable();
            $table->string('Q4',10);
            $table->string('remarks5')->nullable();
            $table->string('Q5',10);
            $table->string('remarks6')->nullable();
            $table->string('Q6',10);
            $table->string('remarks7')->nullable();
            $table->string('Q7',10);
            $table->string('remarks8')->nullable();
            $table->string('Q8',10);
            $table->string('remarks9')->nullable();
            $table->string('Q9',10);
            $table->string('remarks10')->nullable();
            $table->string('Q10',10);
            $table->string('remarks11')->nullable();
            $table->string('Q11',10);
            $table->string('remarks12')->nullable();
            $table->string('Q12',10);
            $table->string('remarks13')->nullable();
            $table->string('Q13',10);
            $table->string('remarks14')->nullable();
            $table->string('Q14',10);
            $table->string('remarks15')->nullable();
            $table->string('Q15',10);
            $table->string('remarks16')->nullable();
            $table->string('Q16',10);
            $table->string('remarks17')->nullable();
            $table->string('Q17',10);
            $table->string('remarks18')->nullable();
            $table->string('Q18',10);
            $table->string('remarks19')->nullable();
            $table->string('Q191',10);
            $table->string('Q192',10);
            $table->string('remarks20')->nullable();
            $table->string('Q20',10);
            $table->string('remarks21')->nullable();
            $table->string('Q21',10);
            $table->string('remarks22')->nullable();
            $table->string('Q221',10);
            $table->string('Q222',10);
            $table->string('Q223',10);
            $table->string('Q224',10);
            $table->string('remarks23')->nullable();
            $table->string('Q23',10);
            $table->string('remarks24')->nullable();
            $table->string('Q24',10);
            $table->string('remarks25')->nullable();
            $table->string('Q25',10);
            $table->string('remarks26')->nullable();
            $table->string('Q26',10);
            $table->string('remarks27')->nullable();
            $table->string('Q27',10);
            $table->string('remarks28')->nullable();
            $table->string('Q28',10);
            $table->string('remarks29')->nullable();
            $table->string('Q29',10);
            $table->string('remarks30')->nullable();
            $table->string('Q30',10);
            $table->string('remarks31')->nullable();
            $table->string('Q31',10);
            $table->string('remarks32')->nullable();
            $table->string('Q32',10);
            $table->string('remarks33')->nullable();
            $table->string('Q33',10);
            $table->string('remarks34')->nullable();
            $table->string('Q34',10);
            $table->string('remarks35')->nullable();
            $table->string('Q35',10);
            $table->string('others36');
            $table->string('remarks36')->nullable();
            $table->string('Q36',10);
            $table->string('remarks37')->nullable();
            $table->string('Q37',10);
            $table->string('remarks38')->nullable();
            $table->string('Q38',10);
            $table->string('remarks39')->nullable();
            $table->string('Q39',10);
            $table->string('remarks40')->nullable();
            $table->string('Q40',10);
            $table->string('remarks41')->nullable();
            $table->string('Q41',10);
            $table->string('remarks42')->nullable();
            $table->string('Q42',10);
            $table->string('remarks43')->nullable();
            $table->string('Q43',10);
            $table->string('others44');
            $table->string('remarks44')->nullable();
            $table->string('Q44',10);
            $table->string('remarks45')->nullable();
            $table->string('Q45',10);
            $table->string('remarks46')->nullable();
            $table->string('Q46',10);
            $table->string('remarks47')->nullable();
            $table->string('Q47',10);
            $table->string('remarks48')->nullable();
            $table->string('Q48',10);
            $table->string('comment')->nullable();
            $table->string('correctiveaction')->nullable();
            $table->timestamps();
        });
        
        // Schema::create('food_premises', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('PremiseName');
        //     $table->string('location');
        //     $table->string('declaration');
        //     $table->string('remarks1')->nullable();
        //     $table->string('Q1');
        //     $table->string('remarks2')->nullable();
        //     $table->string('Q2');
        //     $table->string('remarks3')->nullable();
        //     $table->string('Q3');
        //     $table->string('remarks4')->nullable();
        //     $table->string('Q4');
        //     $table->string('remarks5')->nullable();
        //     $table->string('Q5');
        //     $table->string('remarks6')->nullable();
        //     $table->string('Q6');
        //     $table->string('remarks7')->nullable();
        //     $table->string('Q7');
        //     $table->string('remarks8')->nullable();
        //     $table->string('Q8');
        //     $table->string('remarks9')->nullable();
        //     $table->string('Q9');
        //     $table->string('remarks10')->nullable();
        //     $table->string('Q10');
        //     $table->string('remarks11')->nullable();
        //     $table->string('Q11');
        //     $table->string('remarks12')->nullable();
        //     $table->string('Q12');
        //     $table->string('remarks13')->nullable();
        //     $table->string('Q13');
        //     $table->string('remarks14')->nullable();
        //     $table->string('Q14');
        //     $table->string('remarks15')->nullable();
        //     $table->string('Q15');
        //     $table->string('remarks16')->nullable();
        //     $table->string('Q16');
        //     $table->string('remarks17')->nullable();
        //     $table->string('Q17');
        //     $table->string('remarks18')->nullable();
        //     $table->string('Q18');
        //     $table->string('remarks19')->nullable();
        //     $table->string('Q191');
        //     $table->string('Q192');
        //     $table->string('remarks20')->nullable();
        //     $table->string('Q20');
        //     $table->string('remarks21')->nullable();
        //     $table->string('Q21');
        //     $table->string('remarks22')->nullable();
        //     $table->string('Q221');
        //     $table->string('Q222');
        //     $table->string('Q223');
        //     $table->string('Q224');
        //     $table->string('remarks23')->nullable();
        //     $table->string('Q23');
        //     $table->string('remarks24')->nullable();
        //     $table->string('Q24');
        //     $table->string('remarks25')->nullable();
        //     $table->string('Q25');
        //     $table->string('remarks26')->nullable();
        //     $table->string('Q26');
        //     $table->string('remarks27')->nullable();
        //     $table->string('Q27');
        //     $table->string('remarks28')->nullable();
        //     $table->string('Q28');
        //     $table->string('remarks29')->nullable();
        //     $table->string('Q29');
        //     $table->string('remarks30')->nullable();
        //     $table->string('Q30');
        //     $table->string('remarks31')->nullable();
        //     $table->string('Q31');
        //     $table->string('remarks32')->nullable();
        //     $table->string('Q32');
        //     $table->string('remarks33')->nullable();
        //     $table->string('Q33');
        //     $table->string('remarks34')->nullable();
        //     $table->string('Q34');
        //     $table->string('remarks35')->nullable();
        //     $table->string('Q35');
        //     $table->string('others36');
        //     $table->string('remarks36')->nullable();
        //     $table->string('Q36');
        //     $table->string('remarks37')->nullable();
        //     $table->string('Q37');
        //     $table->string('remarks38')->nullable();
        //     $table->string('Q38');
        //     $table->string('remarks39')->nullable();
        //     $table->string('Q39');
        //     $table->string('remarks40')->nullable();
        //     $table->string('Q40');
        //     $table->string('remarks41')->nullable();
        //     $table->string('Q41');
        //     $table->string('remarks42')->nullable();
        //     $table->string('Q42');
        //     $table->string('remarks43')->nullable();
        //     $table->string('Q43');
        //     $table->string('others44');
        //     $table->string('remarks44')->nullable();
        //     $table->string('Q44');
        //     $table->string('remarks45')->nullable();
        //     $table->string('Q45');
        //     $table->string('remarks46')->nullable();
        //     $table->string('Q46');
        //     $table->string('remarks47')->nullable();
        //     $table->string('Q47');
        //     $table->string('remarks48')->nullable();
        //     $table->string('Q48');
        //     $table->string('comment')->nullable();
        //     $table->string('correctiveaction')->nullable();
        //     $table->timestamps();
        // });
        // Schema::create('registration', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('PremiseName');
        //     $table->string('location');
        //     $table->string('declaration');
        //     $table->string('remarks1')->nullable();
        //     $table->boolean('Q1');
        //     $table->string('remarks2')->nullable();
        //     $table->boolean('Q2');
        //     $table->string('remarks3')->nullable();
        //     $table->boolean('Q3');
        //     $table->string('remarks4')->nullable();
        //     $table->boolean('Q4');
        //     $table->string('remarks5')->nullable();
        //     $table->boolean('Q5');
        //     $table->string('remarks6')->nullable();
        //     $table->boolean('Q6');
        //     $table->string('remarks7')->nullable();
        //     $table->boolean('Q7');
        //     $table->string('remarks8')->nullable();
        //     $table->boolean('Q8');
        //     $table->string('remarks9')->nullable();
        //     $table->boolean('Q9');
        //     $table->string('remarks10')->nullable();
        //     $table->boolean('Q10');
        //     $table->string('remarks11')->nullable();
        //     $table->boolean('Q11');
        //     $table->string('remarks12')->nullable();
        //     $table->boolean('Q12');
        //     $table->string('remarks13')->nullable();
        //     $table->boolean('Q13');
        //     $table->string('remarks14')->nullable();
        //     $table->boolean('Q14');
        //     $table->string('remarks15')->nullable();
        //     $table->boolean('Q15');
        //     $table->string('remarks16')->nullable();
        //     $table->boolean('Q16');
        //     $table->string('remarks17')->nullable();
        //     $table->boolean('Q17');
        //     $table->string('remarks18')->nullable();
        //     $table->boolean('Q18');
        //     $table->string('remarks19')->nullable();
        //     $table->boolean('Q191');
        //     $table->boolean('Q192');
        //     $table->string('remarks20')->nullable();
        //     $table->boolean('Q20');
        //     $table->string('remarks21')->nullable();
        //     $table->boolean('Q21');
        //     $table->string('remarks22')->nullable();
        //     $table->boolean('Q221');
        //     $table->boolean('Q222');
        //     $table->boolean('Q223');
        //     $table->boolean('Q224');
        //     $table->string('remarks23')->nullable();
        //     $table->boolean('Q23');
        //     $table->string('remarks24')->nullable();
        //     $table->boolean('Q24');
        //     $table->string('remarks25')->nullable();
        //     $table->boolean('Q25');
        //     $table->string('remarks26')->nullable();
        //     $table->boolean('Q26');
        //     $table->string('remarks27')->nullable();
        //     $table->boolean('Q27');
        //     $table->string('remarks28')->nullable();
        //     $table->boolean('Q28');
        //     $table->string('remarks29')->nullable();
        //     $table->boolean('Q29');
        //     $table->string('remarks30')->nullable();
        //     $table->boolean('Q30');
        //     $table->string('remarks31')->nullable();
        //     $table->boolean('Q31');
        //     $table->string('remarks32')->nullable();
        //     $table->boolean('Q32');
        //     $table->string('remarks33')->nullable();
        //     $table->boolean('Q33');
        //     $table->string('remarks34')->nullable();
        //     $table->boolean('Q34');
        //     $table->string('remarks35')->nullable();
        //     $table->boolean('Q35');
        //     $table->string('others36');
        //     $table->string('remarks36')->nullable();
        //     $table->boolean('Q36');
        //     $table->string('remarks37')->nullable();
        //     $table->boolean('Q37');
        //     $table->string('remarks38')->nullable();
        //     $table->boolean('Q38');
        //     $table->string('remarks39')->nullable();
        //     $table->boolean('Q39');
        //     $table->string('remarks40')->nullable();
        //     $table->boolean('Q40');
        //     $table->string('remarks41')->nullable();
        //     $table->boolean('Q41');
        //     $table->string('remarks42')->nullable();
        //     $table->boolean('Q42');
        //     $table->string('remarks43')->nullable();
        //     $table->boolean('Q43');
        //     $table->string('others44');
        //     $table->string('remarks44')->nullable();
        //     $table->boolean('Q44');
        //     $table->string('remarks45')->nullable();
        //     $table->boolean('Q45');
        //     $table->string('remarks46')->nullable();
        //     $table->boolean('Q46');
        //     $table->string('remarks47')->nullable();
        //     $table->boolean('Q47');
        //     $table->string('remarks48')->nullable();
        //     $table->boolean('Q48');
        //     $table->string('comment')->nullable();
        //     $table->string('correctiveaction')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_premises');
    }
}
