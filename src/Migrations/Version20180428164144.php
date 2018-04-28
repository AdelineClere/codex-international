<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180428164144 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE esperso (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(150) DEFAULT NULL, pdf_nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE esperso_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, article LONGTEXT DEFAULT NULL, locale VARCHAR(10) NOT NULL, INDEX IDX_B1ACA172C2AC5D3 (translatable_id), UNIQUE INDEX esperso_translation_unique_translation (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE esperso_translation ADD CONSTRAINT FK_B1ACA172C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES esperso (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE esperso_translation DROP FOREIGN KEY FK_B1ACA172C2AC5D3');
        $this->addSql('DROP TABLE esperso');
        $this->addSql('DROP TABLE esperso_translation');
    }
}
