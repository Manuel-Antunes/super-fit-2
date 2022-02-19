<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UseDateInsteadOfStringInUsersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $data = DB::select('SELECT * FROM users');
            foreach ($data as $user) {
                $strtime = str_replace(
                    '/',
                    '-',
                    $user->birth_date,
                );
                $phpdate = strtotime($strtime);
                $mysqldate = date('Y-m-d H:i:s', $phpdate);
                DB::statement("UPDATE users SET datedate = ? WHERE id = ?", [$mysqldate, $user->id]);
            }
            $table->dropColumn('birth_date');
            $table->renameColumn('datedate', 'birth_date');
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
            $table->renameColumn('birth_date', 'datedate');
            $table->string('birth_date')->nullable(true);
        });
    }
}
