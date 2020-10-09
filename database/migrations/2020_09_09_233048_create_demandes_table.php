<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('type')->nullable(false);
            $table->longText('link');
            $table->string('description')->nullable(false);
            $table->integer('nb_days');
            $table->timestamp('begin_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('organisation');
            $table->longText('event_address');
            $table->string('event_phone')->nullable(false);
            $table->string('event_email')->nullable(false);
            $table->enum('visibility', ['PRIVATE', 'RESERVED', 'PUBLIC']);
            $table->unsignedBigInteger('id_categories');
            $table->unsignedBigInteger('organiser_id');
            $table->longText('flyer_link');
            $table->timestamps();

            $table->foreign('id_categories')->references('id')->on('categories');
            $table->foreign('organiser_id')->references('user_id')->on('user_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
