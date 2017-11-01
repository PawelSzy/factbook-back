<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataBaseTestController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test_database()
    {
        // Test database connection
        try {
            DB::connection()->getPdo();
            var_dump('Test_is_succesfull');
        }
        catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }
    }
}
