<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company', 255);
            $table->string('title', 255);
            $table->string('url', 255);
            $table->string('hash', 255)->unique();
            $table->boolean('will_contact')->nullable();
            $table->boolean('over_qualified')->nullable();
            $table->boolean('under_qualified')->nullable();
            $table->boolean('no_bacholers')->nullable();
            $table->boolean('resume_issues')->nullable();
            $table->boolean('cover_issues')->nullable();
            $table->text('additional_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
