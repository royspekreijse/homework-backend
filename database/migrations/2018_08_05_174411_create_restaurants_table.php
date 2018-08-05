<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['open', 'order ahead','closed']);            
            $table->boolean('isFavorite');
        });
        $data =array(array( 
            'name' => 'Sushi One', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),
            array( 
            'name' => 'Pizza Heart', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Tanoshii Sushi', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Roti Shop', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Aarti', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Indian Kitchen', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'CIRO 1939', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                
            array( 
            'name' => 'De Amsterdamsche Tram', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),
            array( 
            'name' => 'Lunchpakketdienst', 
            'status' => 'open', 
            'isFavorite'=> false 
            ),                                 
            array( 
            'name' => 'Royal Thai', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Mama Mia', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Feelfood', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                                
            array( 
            'name' => 'Fes Patisserie', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                
            array( 
            'name' => 'Yvonne\'s Vispaleis', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                                
            array( 
            'name' => 'Lale Restaurant & Snackbar', 
            'status' => 'order ahead', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Tandoori Express', 
            'status' => 'closed', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Daily Sushi', 
            'status' => 'closed', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Pamukkale', 
            'status' => 'closed', 
            'isFavorite'=> false 
            ),                 
            array( 
            'name' => 'Zenzai Sushi', 
            'status' => 'closed', 
            'isFavorite'=> false 
            ));
        
        DB::table('restaurants')->insert($data);
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
