<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSoftware extends Seeder
{
    public function run()
    {
        $data = [
            'software_id' => '',
            'software_title'    => 'The Hunter: Call of the Wild',
            'software_description' => 'Never before have you experienced a hunting game like theHunter: Call of the Wild.
             Plunge into an atmospheric open world, teeming with life: from the majestic true-to-life animals to the rustling
             of leaves above you as you stalk your prey. You can decide to hunt on your own or join up and hunt together
             with friends. Just remember, you are not just a visitor in this world, you are a living and breathing part of it.
             As you finally spot the majestic crown of your first red deer through the brush, the feeling is indescribable.',
            'software_harga' => 'Rp. 190,000',
            'software_img' => 'th1.png',

        ];

        // Simple Queries
        //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('software')->insert($data);
    }
}
