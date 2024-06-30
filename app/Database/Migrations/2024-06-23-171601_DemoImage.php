<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DemoImage extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('demoimage');
    }

    public function down()
    {
        $this->forge->dropTable('demoimage');
    }
}
