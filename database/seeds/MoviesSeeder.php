<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Movie::create([
            'name' => 'The 400 Blows',
            'release_date' => \Carbon\Carbon::createFromDate('1959'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BYTQ4MjA4NmYtYjRhNi00MTEwLTg0NjgtNjk3ODJlZGU4NjRkL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,753,1000_AL_.jpg'
        ]);
        \App\Movie::create([
            'name' => 'La Haine',
            'release_date' => \Carbon\Carbon::createFromDate('1995'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDNiOTA5YjktY2Q0Ni00ODgzLWE5MWItNGExOWRlYjY2MjBlXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@._V1_SX700_CR0,0,700,999_AL_.jpg'
        ]);
        \App\Movie::create([
            'name' => 'The Godfather',
            'release_date' => \Carbon\Carbon::createFromDate('1972'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BY2Q2NzQ3ZDUtNWU5OC00Yjc0LThlYmEtNWM3NTFmM2JiY2VhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,700,1000_AL_.jpg'
        ]);
        \App\Movie::create([
            'name' => 'The Dark Knight',
            'release_date' => \Carbon\Carbon::createFromDate('2008'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'
        ]);
        \App\Movie::create([
            'name' => 'Gladiator',
            'release_date' => \Carbon\Carbon::createFromDate('2000'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDliMmNhNDEtODUyOS00MjNlLTgxODEtN2U3NzIxMGVkZTA1L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,675,1000_AL_.jpg'
        ]);

        \App\Movie::create([
            'name' => 'Crash',
            'release_date' => \Carbon\Carbon::createFromDate('2004'),
            'poster_image' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTk1OTA1MjIyNV5BMl5BanBnXkFtZTcwODQxMTkyMQ@@._V1_SY1000_CR0,0,675,1000_AL_.jpg'
        ]);

    }
}
