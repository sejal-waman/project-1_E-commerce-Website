<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'product_brand' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'product_price' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
          
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cart');
    }

    public function down()
    {
        $this->forge->dropTable('cart');
    }
}
