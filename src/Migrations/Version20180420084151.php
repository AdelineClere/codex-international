<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180420084151 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(30) NOT NULL, societe VARCHAR(50) NOT NULL, telephone VARCHAR(30) NOT NULL, email VARCHAR(100) NOT NULL, cumul_commande INT NOT NULL, password VARCHAR(255) NOT NULL, roles VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, pdf VARCHAR(200) NOT NULL, INDEX IDX_29A5EC2712469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, article LONGTEXT NOT NULL, locale VARCHAR(150) NOT NULL, INDEX IDX_6D59D9912C2AC5D3 (translatable_id), UNIQUE INDEX blog_translation_unique_translation (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(60) DEFAULT NULL, image2 VARCHAR(60) DEFAULT NULL, image3 VARCHAR(60) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT DEFAULT NULL, titre VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, locale VARCHAR(150) NOT NULL, slug VARCHAR(255) DEFAULT NULL, INDEX IDX_3F207042C2AC5D3 (translatable_id), UNIQUE INDEX category_translation_unique_translation (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE download (id INT AUTO_INCREMENT NOT NULL, pdf_key VARCHAR(50) NOT NULL, pdf_nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT DEFAULT NULL, nom VARCHAR(75) NOT NULL, locale VARCHAR(150) NOT NULL, INDEX IDX_CA7101EB2C2AC5D3 (translatable_id), UNIQUE INDEX produit_translation_unique_translation (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE blog_translation ADD CONSTRAINT FK_6D59D9912C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_translation ADD CONSTRAINT FK_3F207042C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_translation ADD CONSTRAINT FK_CA7101EB2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES produit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blog_translation DROP FOREIGN KEY FK_6D59D9912C2AC5D3');
        $this->addSql('ALTER TABLE produit_translation DROP FOREIGN KEY FK_CA7101EB2C2AC5D3');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2712469DE2');
        $this->addSql('ALTER TABLE category_translation DROP FOREIGN KEY FK_3F207042C2AC5D3');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE blog_translation');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_translation');
        $this->addSql('DROP TABLE download');
        $this->addSql('DROP TABLE produit_translation');
    }
}
