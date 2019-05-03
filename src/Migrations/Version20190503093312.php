<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503093312 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE qualiter_air ADD station_id INT NOT NULL');
        $this->addSql('ALTER TABLE qualiter_air ADD CONSTRAINT FK_13DAF44821BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('CREATE INDEX IDX_13DAF44821BDB235 ON qualiter_air (station_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE qualiter_air DROP FOREIGN KEY FK_13DAF44821BDB235');
        $this->addSql('DROP INDEX IDX_13DAF44821BDB235 ON qualiter_air');
        $this->addSql('ALTER TABLE qualiter_air DROP station_id');
    }
}
