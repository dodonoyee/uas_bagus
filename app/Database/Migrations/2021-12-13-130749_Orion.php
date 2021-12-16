<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'software_id'          => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'software_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'software_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'software_harga' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'software_img' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('software_id', true);
        $this->forge->createTable('software');
    }

    public function down()
    {
        $this->forge->dropTable('software');
    }
}
