<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();

            // registration type: team, volunteer, mentor, sponsor
            $table->string('type')->index();

            /*
            |---------------------------------
            | COMMON INFORMATION
            |---------------------------------
            */
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();

            /*
            |---------------------------------
            | TEAM REGISTRATION
            |---------------------------------
            */
            $table->string('team_name')->nullable();
            $table->string('school')->nullable();
            $table->string('age_group')->nullable(); // 10–13, 14–17
            $table->integer('players_count')->nullable();
            $table->string('jersey_color')->nullable();
            $table->boolean('has_goalkeeper_jersey')->default(false);

            /*
            |---------------------------------
            | VOLUNTEER / MENTOR DETAILS
            |---------------------------------
            */
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('profession')->nullable();
            $table->string('organization')->nullable();
            $table->text('experience')->nullable();
            $table->text('motivation')->nullable();
            $table->string('availability')->nullable();

            /*
            |---------------------------------
            | SPONSOR / PARTNER DETAILS
            |---------------------------------
            */
            $table->string('company_name')->nullable();
            $table->string('support_type')->nullable();
            $table->text('message')->nullable();

            /*
            |---------------------------------
            | ATTACHMENTS
            |---------------------------------
            */
            $table->string('team_photo')->nullable();
            $table->string('player_list')->nullable();
            $table->string('parental_consent')->nullable();

            /*
            |---------------------------------
            | AGREEMENT + STATUS
            |---------------------------------
            */
            $table->boolean('agreement')->default(false);
            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registrations');
    }
};