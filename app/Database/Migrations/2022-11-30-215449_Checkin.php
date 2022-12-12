<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Checkin extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'attendee_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'phone' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('attendee_ID', 'registration', 'attendee_ID');
        $this->forge->createTable('checkin');
    }

    public function down()
    {
        //
        $this->forge->dropTable('checkin');
    }
}
