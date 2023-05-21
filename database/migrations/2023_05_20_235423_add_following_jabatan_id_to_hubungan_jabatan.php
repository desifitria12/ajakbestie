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
        Schema::table('hubungan_jabatan', function (Blueprint $table) {
            $table->unsignedInteger('following_jabatan_id')->nullable()->after('jabatan_id');
            $table->foreign('following_jabatan_id')->references('jabatan_id')->on('hubungan_jabatan')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hubungan_jabatan', function (Blueprint $table) {
            $table->dropForeign(['following_jabatan_id']);
            $table->dropColumn('following_jabatan_id');
        });
    }
};
