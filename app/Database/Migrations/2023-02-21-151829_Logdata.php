<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logdata extends Migration
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
            'suhu' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'kelembapan' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'created_date datetime default current_timestamp',
            // 'updated_date datetime default current_timestamp on update current_timestamp',
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('logdata');
    }

    public function down()
    {
        $this->forge->dropTable('logdata');
        
    }
}
