<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key as session ID
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Optional user ID, linked to users table
            $table->string('ip_address', 45)->nullable(); // IP address of the user (supports IPv4 and IPv6)
            $table->text('user_agent')->nullable(); // Information about user's browser/device
            $table->text('payload'); // Session data
            $table->integer('last_activity'); // Last activity timestamp

            $table->timestamps(); // Created at and Updated at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
