<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210613214021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE students');
        $this->addSql('ALTER TABLE course DROP description, DROP summary, CHANGE field path VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE project DROP description, CHANGE field path VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE students (email VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, code_unique VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, first_name VARCHAR(35) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, last_name VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password VARCHAR(40) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, confirmation VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE course ADD description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD summary VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path field VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE project ADD description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path field VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
