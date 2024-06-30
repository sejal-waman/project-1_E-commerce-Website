<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductsMigration extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'price' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],

            'quantity' => [
                'type'       => 'BIGINT',
                'constraint' => '150',
            ],

            'total' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
          
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }


}
