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
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users', 'gender_id')) {
                $table->unsignedBigInteger('gender_id')->nullable()->after('language');
                $table->foreign('gender_id')
                      ->references('id')
                      ->on('genders')
                      ->onUpdate('cascade')
                      ->onDelete('cascade');
            }
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key first, then the column
            if (Schema::hasColumn('users', 'gender_id')) {
                $table->dropForeign(['gender_id']);
                $table->dropColumn('gender_id');
            }
            
        });
    }
};
