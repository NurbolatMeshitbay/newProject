<?php

use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable(false);
            $table->text('attribute')->nullable(false);

        });
        $types = [
            [
                'name' => 'book',
                'attribute' => 'kg'
            ],
            [
                'name' => 'dvd',
                'attribute'=>'Mb'
            ],
            [
                'name'=>'furniture',
                'attribute'=>'cm'
            ]
        ];
        foreach ($types as $oneType){
            Type::create($oneType);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
