<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709021549 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE categorie_t DROP FOREIGN KEY FK_FF082B2A3256915B');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE addon_account');
        $this->addSql('DROP TABLE addon_account_data');
        $this->addSql('DROP TABLE addon_inventory');
        $this->addSql('DROP TABLE addon_inventory_items');
        $this->addSql('DROP TABLE billing');
        $this->addSql('DROP TABLE bug_tracker');
        $this->addSql('DROP TABLE cardealer_vehicles');
        $this->addSql('DROP TABLE categorie_t');
        $this->addSql('DROP TABLE characters');
        $this->addSql('DROP TABLE coffeemachine');
        $this->addSql('DROP TABLE datastore');
        $this->addSql('DROP TABLE datastore_data');
        $this->addSql('DROP TABLE dock');
        $this->addSql('DROP TABLE dock_categories');
        $this->addSql('DROP TABLE dock_vehicles');
        $this->addSql('DROP TABLE fine_types');
        $this->addSql('DROP TABLE fine_types_ambulance');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE jail');
        $this->addSql('DROP TABLE job_grades');
        $this->addSql('DROP TABLE jobs');
        $this->addSql('DROP TABLE jsfour_criminalrecord');
        $this->addSql('DROP TABLE jsfour_criminaluserinfo');
        $this->addSql('DROP TABLE licenses');
        $this->addSql('DROP TABLE owned_dock');
        $this->addSql('DROP TABLE owned_properties');
        $this->addSql('DROP TABLE owned_vehicles');
        $this->addSql('DROP TABLE phone_app_chat');
        $this->addSql('DROP TABLE phone_calls');
        $this->addSql('DROP TABLE phone_messages');
        $this->addSql('DROP TABLE phone_users_contacts');
        $this->addSql('DROP TABLE playerstattoos');
        $this->addSql('DROP TABLE position_drugs');
        $this->addSql('DROP TABLE properties');
        $this->addSql('DROP TABLE rented_dock');
        $this->addSql('DROP TABLE rented_vehicles');
        $this->addSql('DROP TABLE rules');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE shops');
        $this->addSql('DROP TABLE shops2');
        $this->addSql('DROP TABLE site_news');
        $this->addSql('DROP TABLE society_moneywash');
        $this->addSql('DROP TABLE trunk_inventory');
        $this->addSql('DROP TABLE user_accounts');
        $this->addSql('DROP TABLE user_inventory');
        $this->addSql('DROP TABLE user_licenses');
        $this->addSql('DROP TABLE user_whitelist');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE vehicle_categories');
        $this->addSql('DROP TABLE vehicle_sold');
        $this->addSql('DROP TABLE vehicles');
        $this->addSql('DROP TABLE vehicles_for_sale');
        $this->addSql('DROP TABLE weekly_run');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE addon_account (name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_account_data (id INT AUTO_INCREMENT NOT NULL, account_name VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, money INT NOT NULL, owner VARCHAR(100) DEFAULT NULL COLLATE latin1_swedish_ci, UNIQUE INDEX index_addon_account_data_account_name_owner (account_name, owner), INDEX index_addon_account_data_account_name (account_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_inventory (name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_inventory_items (id INT AUTO_INCREMENT NOT NULL, inventory_name VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, name VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, count INT NOT NULL, owner VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, INDEX index_addon_inventory_inventory_name (inventory_name), INDEX index_addon_inventory_items_inventory_name_name (inventory_name, name), INDEX index_addon_inventory_items_inventory_name_name_owner (inventory_name, name, owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE billing (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, sender VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, target_type VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, target VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, amount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bug_tracker (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contenue LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, auteur VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME NOT NULL, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, status INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cardealer_vehicles (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categorie_t (id INT AUTO_INCREMENT NOT NULL, relation_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_FF082B2A3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, firstname VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, lastname VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, dateofbirth VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, sex VARCHAR(1) DEFAULT \'f\' NOT NULL COLLATE latin1_swedish_ci, height VARCHAR(128) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE coffeemachine (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, item VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE datastore (name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE datastore_data (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, owner VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, data LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci, UNIQUE INDEX index_datastore_data_name_owner (name, owner), INDEX index_datastore_data_name (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE dock (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, category VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE dock_categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE dock_vehicles (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types_ambulance (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_general_ci, amount INT DEFAULT NULL, category INT DEFAULT NULL, UNIQUE INDEX id (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE items (name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, `limit` INT DEFAULT -1 NOT NULL, rare INT DEFAULT 0 NOT NULL, can_remove INT DEFAULT 1 NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jail (identifier VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, isjailed TINYINT(1) DEFAULT NULL, J_Time DATETIME NOT NULL, J_Cell VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, Jailer VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, Jailer_ID VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE job_grades (id INT AUTO_INCREMENT NOT NULL, job_name VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, grade INT NOT NULL, name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, salary INT NOT NULL, skin_male LONGTEXT NOT NULL COLLATE latin1_swedish_ci, skin_female LONGTEXT NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jobs (name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, whitelisted TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jsfour_criminalrecord (offense VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci, date VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, institution VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, charge VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, description VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, term VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, classified INT DEFAULT 0 NOT NULL, identifier VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, dob VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, warden VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(offense)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jsfour_criminaluserinfo (identifier VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci, aliases VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, recordid VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, weight VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, eyecolor VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, haircolor VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, firstname VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, lastname VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, dob VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, sex VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, height VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE licenses (type VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(type)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_dock (id INT AUTO_INCREMENT NOT NULL, vehicle LONGTEXT NOT NULL COLLATE latin1_swedish_ci, owner VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_properties (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, price DOUBLE PRECISION NOT NULL, rented INT NOT NULL, owner VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_vehicles (plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci, owner VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, state TINYINT(1) DEFAULT \'0\' NOT NULL COMMENT \'Etat de la voiture\', vehicle LONGTEXT NOT NULL COLLATE latin1_swedish_ci, type VARCHAR(20) DEFAULT \'car\' NOT NULL COLLATE latin1_swedish_ci, `stored` TINYINT(1) DEFAULT \'0\' NOT NULL, fourrieremecano TINYINT(1) DEFAULT \'0\' NOT NULL, vehiclename VARCHAR(50) DEFAULT \'voiture\' NOT NULL COLLATE latin1_swedish_ci, INDEX vehsowned (owner), PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_app_chat (id INT AUTO_INCREMENT NOT NULL, channel VARCHAR(20) NOT NULL COLLATE utf8_general_ci, message VARCHAR(255) NOT NULL COLLATE utf8_general_ci, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_calls (id INT AUTO_INCREMENT NOT NULL, owner VARCHAR(10) NOT NULL COLLATE utf8_general_ci COMMENT \'Num tel proprio\', num VARCHAR(10) NOT NULL COLLATE utf8_general_ci COMMENT \'Num reférence du contact\', incoming INT NOT NULL COMMENT \'Défini si on est à l\'\'origine de l\'\'appels\', time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, accepts INT NOT NULL COMMENT \'Appels accepter ou pas\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_messages (id INT AUTO_INCREMENT NOT NULL, transmitter VARCHAR(10) NOT NULL COLLATE utf8_general_ci, receiver VARCHAR(10) NOT NULL COLLATE utf8_general_ci, message VARCHAR(255) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, isRead INT DEFAULT 0 NOT NULL, owner INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_users_contacts (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(60) DEFAULT NULL COLLATE utf8mb4_general_ci, number VARCHAR(10) DEFAULT NULL COLLATE utf8mb4_general_ci, display VARCHAR(64) DEFAULT \'-1\' NOT NULL COLLATE utf8mb4_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE playerstattoos (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE utf8mb4_general_ci, tattoos VARCHAR(255) NOT NULL COLLATE utf8mb4_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE position_drugs (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, name VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci, x DOUBLE PRECISION NOT NULL, y DOUBLE PRECISION NOT NULL, z DOUBLE PRECISION NOT NULL, percent DOUBLE PRECISION DEFAULT \'0.00\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE properties (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, label VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, entering VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, `exit` VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, inside VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, outside VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, ipls VARCHAR(255) DEFAULT \'[]\' COLLATE latin1_swedish_ci, gateway VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, is_single INT DEFAULT NULL, is_room INT DEFAULT NULL, is_gateway INT DEFAULT NULL, room_menu VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rented_dock (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, plate VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, player_name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, base_price INT NOT NULL, rent_price INT NOT NULL, owner VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rented_vehicles (plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci, vehicle VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, player_name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, base_price INT NOT NULL, rent_price INT NOT NULL, owner VARCHAR(22) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rules (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contenue LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, image_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, image_size INT NOT NULL, recrutement TINYINT(1) NOT NULL, contenue LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE shops (id INT AUTO_INCREMENT NOT NULL, store VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, item VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE shops2 (id INT AUTO_INCREMENT NOT NULL, store VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, item VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE site_news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contenue VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contenue_long LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, auteur VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME NOT NULL, categorie VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE society_moneywash (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, society VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, amount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE trunk_inventory (id INT AUTO_INCREMENT NOT NULL, plate VARCHAR(8) NOT NULL COLLATE latin1_swedish_ci, data TEXT NOT NULL COLLATE latin1_swedish_ci, owned INT NOT NULL, UNIQUE INDEX plate (plate), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_accounts (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, name VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, money DOUBLE PRECISION DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_inventory (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, item VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, count INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_licenses (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, owner VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_whitelist (identifier VARCHAR(255) NOT NULL COLLATE utf8_general_ci, whitelisted TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_bin, license VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_bin, money INT DEFAULT NULL, name VARCHAR(255) DEFAULT \'\' COLLATE utf8mb4_bin, skin LONGTEXT DEFAULT NULL COLLATE utf8mb4_bin, job VARCHAR(255) DEFAULT \'unemployed\' COLLATE utf8mb4_bin, job_grade INT DEFAULT 0, loadout LONGTEXT DEFAULT NULL COLLATE utf8mb4_bin, position VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_bin, bank INT DEFAULT NULL, permission_level INT DEFAULT NULL, `group` VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_bin, firstname VARCHAR(50) DEFAULT \'\' COLLATE utf8mb4_bin, lastname VARCHAR(50) DEFAULT \'\' COLLATE utf8mb4_bin, dateofbirth VARCHAR(25) DEFAULT \'\' COLLATE utf8mb4_bin, sex VARCHAR(10) DEFAULT \'\' COLLATE utf8mb4_bin, height VARCHAR(5) DEFAULT \'\' COLLATE utf8mb4_bin, phone_number VARCHAR(10) DEFAULT NULL COLLATE utf8mb4_bin, status LONGTEXT DEFAULT NULL COLLATE utf8mb4_bin, animal VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_bin, last_property VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_bin, jail INT DEFAULT 0 NOT NULL, UNIQUE INDEX identifier (identifier), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vehicle_categories (name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, label VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vehicle_sold (plate VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, client VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, model VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, soldby VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, date VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vehicles (model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, price INT NOT NULL, category VARCHAR(60) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(model)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vehicles_for_sale (id INT AUTO_INCREMENT NOT NULL, seller VARCHAR(50) NOT NULL COLLATE utf8_general_ci, vehicleProps LONGTEXT NOT NULL COLLATE utf8_general_ci, price INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE weekly_run (id INT AUTO_INCREMENT NOT NULL, company VARCHAR(255) NOT NULL COLLATE utf8mb4_bin, start_date INT NOT NULL, harvest INT NOT NULL, sell INT NOT NULL, malus INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categorie_t ADD CONSTRAINT FK_FF082B2A3256915B FOREIGN KEY (relation_id) REFERENCES bug_tracker (id)');
        $this->addSql('DROP TABLE user');
    }
}
