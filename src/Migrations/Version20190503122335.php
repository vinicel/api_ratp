<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503122335 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro ADD station_id INT NOT NULL');
        $this->addSql('ALTER TABLE access_metro ADD CONSTRAINT FK_D11198B221BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('CREATE INDEX IDX_D11198B221BDB235 ON access_metro (station_id)');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre ADD trafic_station_id INT NOT NULL');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre ADD CONSTRAINT FK_EAFBBEBF6944900 FOREIGN KEY (trafic_station_id) REFERENCES station (id)');
        $this->addSql('CREATE INDEX IDX_EAFBBEBF6944900 ON trafic_annuel_station_reseau_ferre (trafic_station_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro DROP FOREIGN KEY FK_D11198B221BDB235');
        $this->addSql('DROP INDEX IDX_D11198B221BDB235 ON access_metro');
        $this->addSql('ALTER TABLE access_metro DROP station_id');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre DROP FOREIGN KEY FK_EAFBBEBF6944900');
        $this->addSql('DROP INDEX IDX_EAFBBEBF6944900 ON trafic_annuel_station_reseau_ferre');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre DROP trafic_station_id');
    }
}
