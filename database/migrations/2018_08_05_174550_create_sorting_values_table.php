<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortingValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorting_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants');            
            $table->double('bestMatch');
            $table->double('newest');
            $table->double('ratingAverage');
            $table->integer('distance');
            $table->double('popularity');
            $table->double('averageProductPrice');
            $table->integer('deliveryCosts');
            $table->integer('minCost');
        });

        $data = array(array( 
            'restaurant_id' => 1, 
            'bestMatch' => '3', 
            'newest' => '238', 
            'ratingAverage' => '4', 
            'distance' => '1618', 
            'popularity' => '23', 
            'averageProductPrice' => '1285', 
            'deliveryCosts' => '0', 
            'minCost' => '1200' 
         ), 
            
            array( 
            'restaurant_id' => 2, 
            'bestMatch' => '6', 
            'newest' => '118', 
            'ratingAverage' => '4', 
            'distance' => '2453', 
            'popularity' => '9', 
            'averageProductPrice' => '1103', 
            'deliveryCosts' => '150', 
            'minCost' => '1500' 
            ),
            
            array( 
            'restaurant_id' => 3, 
            'bestMatch' => '0', 
            'newest' => '96', 
            'ratingAverage' => '4.5', 
            'distance' => '1190', 
            'popularity' => '17', 
            'averageProductPrice' => '1536', 
            'deliveryCosts' => '200', 
            'minCost' => '1000' 
            ), 
            
            array( 
            'restaurant_id' => 4, 
            'bestMatch' => '4', 
            'newest' => '247', 
            'ratingAverage' => '4.5', 
            'distance' => '2308', 
            'popularity' => '81', 
            'averageProductPrice' => '915', 
            'deliveryCosts' => '0', 
            'minCost' => '2000' 
            ), 
            
            array( 
            'restaurant_id' => 5, 
            'bestMatch' => '5', 
            'newest' => '153', 
            'ratingAverage' => '4.5', 
            'distance' => '1605', 
            'popularity' => '44', 
            'averageProductPrice' => '922', 
            'deliveryCosts' => '250', 
            'minCost' => '500' 
            ), 
            
            array( 
            'restaurant_id' => 6, 
            'bestMatch' => '11', 
            'newest' => '272', 
            'ratingAverage' => '4.5', 
            'distance' => '2308', 
            'popularity' => '5', 
            'averageProductPrice' => '1189', 
            'deliveryCosts' => '150', 
            'minCost' => '1300' 
            ), 
            
            array( 
            'restaurant_id' => 7, 
            'bestMatch' => '12', 
            'newest' => '231', 
            'ratingAverage' => '4.5', 
            'distance' => '3957', 
            'popularity' => '79', 
            'averageProductPrice' => '1762', 
            'deliveryCosts' => '99', 
            'minCost' => '1300' 
            ), 
            
            array( 
            'restaurant_id' => 8, 
            'bestMatch' => '304', 
            'newest' => '131', 
            'ratingAverage' => '0', 
            'distance' => '2792', 
            'popularity' => '0', 
            'averageProductPrice' => '892', 
            'deliveryCosts' => '0', 
            'minCost' => '0' 
            ), 
            
            array( 
            'restaurant_id' => 9, 
            'bestMatch' => '306', 
            'newest' => '259', 
            'ratingAverage' => '3.5', 
            'distance' => '14201', 
            'popularity' => '0', 
            'averageProductPrice' => '4465', 
            'deliveryCosts' => '500', 
            'minCost' => '5000' 
            ), 
            
            array( 
            'restaurant_id' => 10, 
            'bestMatch' => '2', 
            'newest' => '133', 
            'ratingAverage' => '4.5', 
            'distance' => '2639', 
            'popularity' => '44', 
            'averageProductPrice' => '1492', 
            'deliveryCosts' => '150', 
            'minCost' => '2500' 
            ), 
            
            array( 
            'restaurant_id' => 11, 
            'bestMatch' => '7', 
            'newest' => '250', 
            'ratingAverage' => '4', 
            'distance' => '1396', 
            'popularity' => '6', 
            'averageProductPrice' => '912', 
            'deliveryCosts' => '0', 
            'minCost' => '1000' 
            ), 
            
            array( 
            'restaurant_id' => 12, 
            'bestMatch' => '8', 
            'newest' => '163', 
            'ratingAverage' => '4.5', 
            'distance' => '2732', 
            'popularity' => '31', 
            'averageProductPrice' => '902', 
            'deliveryCosts' => '150', 
            'minCost' => '1500' 
            ), 
            
            array( 
            'restaurant_id' => 13, 
            'bestMatch' => '14', 
            'newest' => '77', 
            'ratingAverage' => '4', 
            'distance' => '2302', 
            'popularity' => '3', 
            'averageProductPrice' => '1214', 
            'deliveryCosts' => '150', 
            'minCost' => '1250' 
            ), 
            
            array( 
            'restaurant_id' => 14, 
            'bestMatch' => '15', 
            'newest' => '150', 
            'ratingAverage' => '5', 
            'distance' => '2909', 
            'popularity' => '3', 
            'averageProductPrice' => '2557', 
            'deliveryCosts' => '150', 
            'minCost' => '1750' 
            ), 
            
            array( 
            'restaurant_id' => 15, 
            'bestMatch' => '305', 
            'newest' => '73', 
            'ratingAverage' => '0', 
            'distance' => '2880', 
            'popularity' => '0', 
            'averageProductPrice' => '838', 
            'deliveryCosts' => '0', 
            'minCost' => '0' 
            ), 
            
            array( 
            'restaurant_id' => 16, 
            'bestMatch' => '1', 
            'newest' => '266', 
            'ratingAverage' => '4.5', 
            'distance' => '2308', 
            'popularity' => '123', 
            'averageProductPrice' => '1146', 
            'deliveryCosts' => '150', 
            'minCost' => '1300' 
            ), 
            
            array( 
            'restaurant_id' => 17, 
            'bestMatch' => '9', 
            'newest' => '221', 
            'ratingAverage' => '4', 
            'distance' => '1911', 
            'popularity' => '6', 
            'averageProductPrice' => '1327', 
            'deliveryCosts' => '200', 
            'minCost' => '1000' 
            ), 
            
            array( 
            'restaurant_id' => 18, 
            'bestMatch' => '10', 
            'newest' => '201', 
            'ratingAverage' => '4', 
            'distance' => '2353', 
            'popularity' => '25', 
            'averageProductPrice' => '968', 
            'deliveryCosts' => '0', 
            'minCost' => '2000' 
            ), 
            
            array( 
            'restaurant_id' => 19, 
            'bestMatch' => '13', 
            'newest' => '155', 
            'ratingAverage' => '4', 
            'distance' => '2911', 
            'popularity' => '36', 
            'averageProductPrice' => '1579', 
            'deliveryCosts' => '0', 
            'minCost' => '2000' 
            ));
         DB::table('sorting_values')->insert($data);        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorting_values');
    }
}
