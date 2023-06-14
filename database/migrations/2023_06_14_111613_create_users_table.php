<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->user_code();
            $table->username();
            $table->password();
            $table->first_name();
            $table->last_name();
            $table->date_of_birth();
            $table->gender();
            $table->email();
            $table->roleid();
            $table->mesh_id();
            $table->phone_number();
            $table->address();
            $table->profile_photo();
            $table->balance();
            $table->bal_threshold();
            $table->bal_expiry();
            $table->breakfast();
            $table->lunch();
            $table->dinner();
            $table->notification_alert();
            $table->id_proof_type();
            $table->id_proff_photo();
            $table->verified();
            $table->comments();
            $table->rec_status();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};