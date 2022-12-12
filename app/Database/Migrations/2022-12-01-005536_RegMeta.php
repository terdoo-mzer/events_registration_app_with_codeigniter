<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class RegMeta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'attendee_ID' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'residence_address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'city_of_residence' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'state_of_residence' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'job_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'experience_level' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('attendee_ID', 'registration', 'attendee_ID');
        $this->forge->createTable('reg_meta');
    }

    public function down()
    {
        $this->forge->dropTable('reg_meta');
    }
}

