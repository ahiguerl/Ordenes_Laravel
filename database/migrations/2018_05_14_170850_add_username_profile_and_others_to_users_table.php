<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameProfileAndOthersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('id')->unique()->change(); // Personal identification
            $table->string('name', 40)->change();
            $table->string('last_name', 40);
            $table->string('address', 200);
            $table->string('phone', 10);
            $table->dateTime('date_to_entry');
            $table->string('url_avatar')->nulleable();
            $table->integer('profile_id')->nulleable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_name', 'address', 'phone', 'date_to_entry', 'url_avatar', 'profile_id']);
            $table->increments('id')->change();
            $table->string('name')->change();
        });
    }
}
