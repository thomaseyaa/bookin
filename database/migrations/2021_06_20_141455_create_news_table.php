<?php

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->longText('body');
            $table->boolean('published');
            $table->string('img_url');
            $table->string('img_id');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });

        $this->faker = Factory::create();

        for ($i=0; $i < 3; $i++) {
            News::insert(
                [
                    'title' => $this->faker->realText($maxNbChars = 20),
                    'description' => $this->faker->realText($maxNbChars = 40),
                    'body' => $this->faker->realText($maxNbChars = 1000),
                    'img_url' => 'https://res.cloudinary.com/hhwtya6b8/image/upload/v1624547852/klnbhibjq5x1ba8m7dli.jpg',
                    'img_id' => 'klnbhibjq5x1ba8m7dli',
                    'published' => true,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
