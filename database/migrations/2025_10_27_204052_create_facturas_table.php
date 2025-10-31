<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->date('fecha');
            $table->decimal('total', 12, 2)->default(0);
            $table->string('estado')->default('pendiente'); // pendiente, pagada, anulada...
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
