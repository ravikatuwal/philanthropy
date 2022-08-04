<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('family_code');
            $table->string('full_name');
            $table->string('ritwik_name');
            $table->float('swastyayani');
            $table->float('istabhrity');
            $table->float('aacharyabhrity');
            $table->float('dakshina');
            $table->float('sangathani');
            $table->float('aanandabaajar');
            $table->float('pranami');
            $table->float('swaawa');
            $table->float('ritwiki');
            $table->float('utsaw');
            $table->float('dikshyapra');
            $table->float('aapra');
            $table->float('paribhrity');
            $table->float('wiwidh');
            $table->timestamps();
            $table->foreign('family_code')->references('family_code')->on('mainaccount')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
