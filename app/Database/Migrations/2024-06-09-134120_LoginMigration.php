<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
           
            'user_password' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('login_users');
    }

    public function down()
    {
        $this->forge->dropTable('login_users');
    }
}
