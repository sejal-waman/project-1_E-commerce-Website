<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BillingMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bill_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'region' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],

            'street_address_1' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],

            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],

            'state' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],

            'pin_code' => [
                'type'       => 'BIGINT',
                'constraint' => 200,
            ],

            'phone' => [
                'type'       => 'BIGINT',
                'constraint' => 100,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
          
        ]);
        $this->forge->addKey('bill_id', true);
        $this->forge->createTable('billing_details');
    }

    public function down()
    {
        $this->forge->dropTable('billing_details');
    }
}
