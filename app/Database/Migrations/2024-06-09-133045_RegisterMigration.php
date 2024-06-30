<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegisterMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'password' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('register_users');
    }

    public function down()
    {
        $this->forge->dropTable('register_users');
    }
}
