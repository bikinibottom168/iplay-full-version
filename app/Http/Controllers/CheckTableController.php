<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CheckTableController extends Controller
{

    public function __construct() 
    {
        if (!Schema::hasColumn('movies','movie_hot'))
        {
            Schema::table('movies', function($table)
            {
                $table->integer('movie_hot')->default(0);
            });
        }

        if (!Schema::hasColumn('ads','position'))
        {
            Schema::table('ads', function($table)
            {
                $table->string('position')->default("A");
            });
        }

        if (!Schema::hasColumn('ads','show_ads'))
        {
            Schema::table('ads', function($table)
            {
                $table->integer('show_ads')->default(1);
            });
        }

        if (!Schema::hasColumn('seos','front_seo'))
        {
            Schema::table('seos', function($table)
            {
                $table->text('front_seo')->nullable();
            });
        }

        if (!Schema::hasColumn('movies','director'))
        {
            Schema::table('movies', function($table)
            {
                $table->text('director')->nullable();
                $table->text('actors')->nullable();
            });
        }
    }
}
