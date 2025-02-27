<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameQuizhistoryTableToQuizHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::rename('quizhistory', 'quiz_histories');
    }

    public function down(): void
    {
        Schema::rename('quiz_histories', 'quizhistory');
    }
}
