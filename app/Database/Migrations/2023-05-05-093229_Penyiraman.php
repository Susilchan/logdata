<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penyiraman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'penyiraman' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            
            'created_date datetime default current_timestamp',
            // 'updated_date datetime default current_timestamp on update current_timestamp',
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('penyiraman');
    }

    public function down()
    {
        $this->forge->dropTable('penyiraman');
        
    }
}


