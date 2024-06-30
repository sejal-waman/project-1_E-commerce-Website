<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Message extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'phone_no' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'message' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
          
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('message');
    }

    public function down()
    {
        $this->forge->dropTable('message');
    }
}
