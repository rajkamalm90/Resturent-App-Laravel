<?php

// database/migrations/xxxx_xx_xx_update_admininfo_records.
// database/migrations/2024_02_25_232957_update_admininfo_records.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAdmininfoRecords extends Migration
{
    public function up()
    {
        \DB::table('admininfo')->get()->each(function ($admin) {
            // Generate a unique value for 'username'
            $newUsername = now()->timestamp . mt_rand(1000, 9999) . $admin->id;

            // Update 'username' for each admin
            \DB::table('admininfo')->where('id', $admin->id)->update(['username' => $newUsername]);
        });
    }

    public function down()
    {
        // Revert the changes made in the 'up' method if necessary
        // This is optional, depending on your needs
    }
}
