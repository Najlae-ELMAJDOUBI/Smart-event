<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_details', function (Blueprint $table) {
            $table->id('event');
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
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('organiser_id');
            $table->longText('flyer_link');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('categories');
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
        Schema::dropIfExists('events_details');

    }
}
