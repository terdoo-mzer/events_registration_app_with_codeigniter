<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'attendee_ID' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'middle_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
        'registration_date datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('attendee_ID');
        $this->forge->createTable('registration');
    }

    public function down()
    {
        $this->forge->dropTable('registration');
    }
}
