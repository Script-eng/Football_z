<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            EntrySeeder::class,
            MatchSeeder::class,
            SpectatorSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spectatorid');
            $table->unsignedBigInteger('matchid');
            $table->timestamp('timestamp');
            $table->foreign('spectatorid')->references('id')->on('spectators')->onDelete('cascade');
            $table->foreign('matchid')->references('id')->on('matches')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date('mdate');
            $table->time('startsat');
            $table->decimal('ticketprice', 8, 2);
            $table->string('mtype');
            $table->timestamps();
        });

        Schema::create('spectators', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->boolean('male');
            $table->boolean('haspass');
            $table->timestamps();
        });
        
        
        
    }
}

