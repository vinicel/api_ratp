<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190518122442 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE access_metro (id INT AUTO_INCREMENT NOT NULL, station_id INT NOT NULL, idptar INT DEFAULT NULL, nomptar VARCHAR(57) DEFAULT NULL, stif BIGINT DEFAULT NULL, code_insee INT DEFAULT NULL, x INT DEFAULT NULL, y INT DEFAULT NULL, coord VARCHAR(28) DEFAULT NULL, ufr INT DEFAULT NULL, annonce_sonore_prochain_passage INT DEFAULT NULL, annonce_visuelle_prochain_passage INT DEFAULT NULL, annonce_sonore_situations_perturbees INT DEFAULT NULL, annonce_visuelle_situations_perturbees INT DEFAULT NULL, paqt INT DEFAULT NULL, accessibilite_quai_train INT DEFAULT NULL, INDEX IDX_D11198B221BDB235 (station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qualiter_air (id INT AUTO_INCREMENT NOT NULL, station_id INT NOT NULL, dateheure VARCHAR(25) DEFAULT NULL, no VARCHAR(10) DEFAULT NULL, n_o2 VARCHAR(10) DEFAULT NULL, p_m10 VARCHAR(10) DEFAULT NULL, p_m2_5 VARCHAR(10) DEFAULT NULL, c_o2 VARCHAR(10) DEFAULT NULL, temp VARCHAR(10) DEFAULT NULL, humi VARCHAR(10) DEFAULT NULL, INDEX IDX_13DAF44821BDB235 (station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trafic_annuel_station_reseau_ferre (id INT AUTO_INCREMENT NOT NULL, trafic_station_id INT NOT NULL, rang INT DEFAULT NULL, rseau VARCHAR(6) DEFAULT NULL, station VARCHAR(35) DEFAULT NULL, trafic INT DEFAULT NULL, correspondance_1 VARCHAR(4) DEFAULT NULL, correspondance_2 VARCHAR(4) DEFAULT NULL, correspondance_3 VARCHAR(4) DEFAULT NULL, correspondance_4 VARCHAR(2) DEFAULT NULL, correspondance_5 VARCHAR(2) DEFAULT NULL, ville VARCHAR(27) DEFAULT NULL, arrondissementpour_paris VARCHAR(2) DEFAULT NULL, INDEX IDX_EAFBBEBF6944900 (trafic_station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sanitaire (id INT AUTO_INCREMENT NOT NULL, sanitaire_id INT NOT NULL, ligne VARCHAR(2) DEFAULT NULL, station VARCHAR(39) DEFAULT NULL, accessibleaupublic VARCHAR(3) DEFAULT NULL, tarif_gratuit_payant VARCHAR(7) DEFAULT NULL, acces_passe_navigoou_ticket_t VARCHAR(3) DEFAULT NULL, acces_boutonpoussoir VARCHAR(3) DEFAULT NULL, enzonecontrolee VARCHAR(3) DEFAULT NULL, horszonecontroleestation VARCHAR(3) DEFAULT NULL, horszonecontroleevoiepublique VARCHAR(3) DEFAULT NULL, accessibilite_pmr VARCHAR(3) DEFAULT NULL, localisation VARCHAR(111) DEFAULT NULL, coord_geo VARCHAR(28) DEFAULT NULL, gestionnaire VARCHAR(23) DEFAULT NULL, INDEX IDX_2F0B8AD4BA7FF1BA (sanitaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE station (id INT AUTO_INCREMENT NOT NULL, exploitant VARCHAR(4) DEFAULT NULL, idrefliga VARCHAR(6) DEFAULT NULL, tertram INT DEFAULT NULL, res_com VARCHAR(5) DEFAULT NULL, tramway INT DEFAULT NULL, tertrain INT DEFAULT NULL, reseau VARCHAR(5) DEFAULT NULL, cod_ligf INT DEFAULT NULL, coordinates VARCHAR(38) DEFAULT NULL, gares_id INT DEFAULT NULL, rer INT DEFAULT NULL, nom_gare VARCHAR(38) DEFAULT NULL, idf INT DEFAULT NULL, type VARCHAR(8) DEFAULT NULL, ternavette INT DEFAULT NULL, nomlong VARCHAR(54) DEFAULT NULL, id_ref_zdl INT DEFAULT NULL, metro INT DEFAULT NULL, num_mod INT DEFAULT NULL, mode VARCHAR(5) DEFAULT NULL, cod_resf INT DEFAULT NULL, principal INT DEFAULT NULL, terval INT DEFAULT NULL, x DOUBLE PRECISION DEFAULT NULL, y DOUBLE PRECISION DEFAULT NULL, objects_stations_type VARCHAR(18) DEFAULT NULL, idrefligc VARCHAR(6) DEFAULT NULL, ligne VARCHAR(5) DEFAULT NULL, terfer VARCHAR(5) DEFAULT NULL, res_stif INT DEFAULT NULL, termetro VARCHAR(5) DEFAULT NULL, indice_lig VARCHAR(4) DEFAULT NULL, ligne_code VARCHAR(10) DEFAULT NULL, val INT DEFAULT NULL, nom_iv VARCHAR(38) DEFAULT NULL, terrer VARCHAR(5) DEFAULT NULL, train INT DEFAULT NULL, navette INT DEFAULT NULL, num_psr INT DEFAULT NULL, fer INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE access_metro ADD CONSTRAINT FK_D11198B221BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE qualiter_air ADD CONSTRAINT FK_13DAF44821BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre ADD CONSTRAINT FK_EAFBBEBF6944900 FOREIGN KEY (trafic_station_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE sanitaire ADD CONSTRAINT FK_2F0B8AD4BA7FF1BA FOREIGN KEY (sanitaire_id) REFERENCES station (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro DROP FOREIGN KEY FK_D11198B221BDB235');
        $this->addSql('ALTER TABLE qualiter_air DROP FOREIGN KEY FK_13DAF44821BDB235');
        $this->addSql('ALTER TABLE trafic_annuel_station_reseau_ferre DROP FOREIGN KEY FK_EAFBBEBF6944900');
        $this->addSql('ALTER TABLE sanitaire DROP FOREIGN KEY FK_2F0B8AD4BA7FF1BA');
        $this->addSql('DROP TABLE access_metro');
        $this->addSql('DROP TABLE qualiter_air');
        $this->addSql('DROP TABLE trafic_annuel_station_reseau_ferre');
        $this->addSql('DROP TABLE sanitaire');
        $this->addSql('DROP TABLE station');
    }
}
