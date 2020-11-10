<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201110092546 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrats (id INT AUTO_INCREMENT NOT NULL, contrats VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offres (id INT AUTO_INCREMENT NOT NULL, contrat_id INT NOT NULL, type_contrat_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, mission_end DATETIME DEFAULT NULL, INDEX IDX_C6AC35441823061F (contrat_id), INDEX IDX_C6AC3544520D03A (type_contrat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_contrats (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC35441823061F FOREIGN KEY (contrat_id) REFERENCES contrats (id)');
        $this->addSql('ALTER TABLE offres ADD CONSTRAINT FK_C6AC3544520D03A FOREIGN KEY (type_contrat_id) REFERENCES type_contrats (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC35441823061F');
        $this->addSql('ALTER TABLE offres DROP FOREIGN KEY FK_C6AC3544520D03A');
        $this->addSql('DROP TABLE contrats');
        $this->addSql('DROP TABLE offres');
        $this->addSql('DROP TABLE type_contrats');
    }
}
