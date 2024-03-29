<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190712023141 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_whitelist');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('DROP INDEX steam_hex ON compte_email');
        $this->addSql('DROP INDEX adresse_mail ON compte_email');
        $this->addSql('ALTER TABLE datastore CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE items CHANGE name name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE jail CHANGE identifier identifier VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE name name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE jsfour_criminalrecord CHANGE offense offense VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE jsfour_criminaluserinfo CHANGE identifier identifier VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE licenses CHANGE type type VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE owned_vehicles CHANGE plate plate VARCHAR(12) NOT NULL');
        $this->addSql('ALTER TABLE rented_vehicles CHANGE plate plate VARCHAR(12) NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE identifier identifier VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_whitelist (identifier VARCHAR(255) NOT NULL COLLATE utf8_general_ci, whitelisted TINYINT(1) NOT NULL, PRIMARY KEY(identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('CREATE UNIQUE INDEX steam_hex ON compte_email (steam_hex)');
        $this->addSql('CREATE UNIQUE INDEX adresse_mail ON compte_email (adresse_mail)');
        $this->addSql('ALTER TABLE datastore CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE items CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jail CHANGE identifier identifier VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jobs CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_criminalrecord CHANGE offense offense VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_criminaluserinfo CHANGE identifier identifier VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE licenses CHANGE type type VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE owned_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE rented_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE users CHANGE identifier identifier VARCHAR(50) NOT NULL COLLATE utf8mb4_bin');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
    }
}
