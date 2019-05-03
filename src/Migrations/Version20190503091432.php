<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503091432 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE trafic_annuel_station_reseau_ferre (id INT AUTO_INCREMENT NOT NULL, rang INT DEFAULT NULL, rseau VARCHAR(6) DEFAULT NULL, station VARCHAR(35) DEFAULT NULL, trafic INT DEFAULT NULL, correspondance_1 VARCHAR(4) DEFAULT NULL, correspondance_2 VARCHAR(4) DEFAULT NULL, correspondance_3 VARCHAR(4) DEFAULT NULL, correspondance_4 VARCHAR(2) DEFAULT NULL, correspondance_5 VARCHAR(2) DEFAULT NULL, ville VARCHAR(27) DEFAULT NULL, arrondissementpour_paris VARCHAR(2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE trafic_annuel_station_reseau_ferre');
    }
}
