<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetupSheetsTable extends Migration
{
    public function up()
    {
        Schema::create('setup_sheets', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('auto')->nullable();
            $table->string('piloto')->nullable();
            $table->string('evento')->nullable();
            $table->string('clima')->nullable();
            $table->string('superficie')->nullable();

            // Suspension Front
            $table->string('espirales_front')->nullable();
            $table->string('amortiguadores_total_front')->nullable();
            $table->string('amortiguadores_baja_front')->nullable();
            $table->string('amortiguadores_alta_front')->nullable();
            $table->string('amortiguadores_exp_front')->nullable();
            $table->string('valving_front')->nullable();
            $table->string('barra_posicion_front')->nullable();

            // Suspension Rear
            $table->string('espirales_rear')->nullable();
            $table->string('amortiguadores_total_rear')->nullable();
            $table->string('amortiguadores_baja_rear')->nullable();
            $table->string('amortiguadores_alta_rear')->nullable();
            $table->string('amortiguadores_exp_rear')->nullable();
            $table->string('valving_rear')->nullable();
            $table->string('barra_posicion_rear')->nullable();

            // $table->string('geometria_front');
            $table->string('convergencia_front')->nullable();
            $table->string('comba_front')->nullable();
            $table->string('avance_front')->nullable();
            $table->string('altura_front')->nullable();

            //$table->string('geometria_rear');
            $table->string('convergencia_rear')->nullable();
            $table->string('comba_rear')->nullable();
            $table->string('avance_rear')->nullable();
            $table->string('altura_rear')->nullable();

            //$table->string('frenos_front');
            $table->string('pastillas_front')->nullable();
            $table->string('liquido_front')->nullable();
            $table->string('balance_front')->nullable();

            //$table->string('frenos_rear');
            $table->string('pastillas_rear')->nullable();
            $table->string('liquido_rear')->nullable();
            $table->string('balance_rear')->nullable();

            //$table->string('transmision_front');
            $table->string('diferenciales_front')->nullable();

            //$table->string('transmision_rear');
            $table->string('diferenciales_rear')->nullable();

            $table->string('combustible_litros')->nullable();
            $table->string('combustible_tipo')->nullable();

            $table->string('neumaticos_marca')->nullable();
            $table->string('neumaticos_medida')->nullable();
            $table->string('neumaticos_comp')->nullable();
            $table->string('neumaticos_calibracion')->nullable();

            $table->string('extra_notas')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('setup_sheets');
    }
}
