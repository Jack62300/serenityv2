<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190711033218 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE extension_mail (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, job_locked VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL');
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
        $this->addSql('ALTER TABLE user_whitelist CHANGE identifier identifier VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE extension_mail');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE datastore CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE items CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jail CHANGE identifier identifier VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jobs CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_criminalrecord CHANGE offense offense VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_criminaluserinfo CHANGE identifier identifier VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE licenses CHANGE type type VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE owned_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE rented_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE user_whitelist CHANGE identifier identifier VARCHAR(255) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE users CHANGE identifier identifier VARCHAR(50) NOT NULL COLLATE utf8mb4_bin');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
    }
}
