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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->char('member_id');
            $table->char('book_id');
            // $table->unsignedBigInteger('member_id');
            // $table->unsignedBigInteger('book_id');
            $table->date('borrow_date');
            $table->date('return_date');
            $table->enum('status', ['dipinjam', 'kembali'])->default('dipinjam');
            $table->timestamps();

            // $table->foreign('member_id')->references('id')->on('members');
            // $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
