<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('subject')->nullable()->after('company');
        });

        // We can't easily modify enum in all DBs, so we'll just use string for flexibility
        // For existing data, this is fine since this is a dev environment
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn('subject');
        });
    }
};
