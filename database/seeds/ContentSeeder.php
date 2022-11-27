<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'judul'	    => 'Pengumuman',
            'kode'	    => 'H_Pengumuman',
            'content'	=> '',
        ]);
    }
}
