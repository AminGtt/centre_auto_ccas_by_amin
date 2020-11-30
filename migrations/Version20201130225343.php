<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130225343 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ADD energie_id INT NOT NULL, ADD modele_id INT NOT NULL, ADD garage_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5B732A364 FOREIGN KEY (energie_id) REFERENCES energie (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5AC14B70A FOREIGN KEY (modele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5C4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_F65593E5B732A364 ON annonce (energie_id)');
        $this->addSql('CREATE INDEX IDX_F65593E5AC14B70A ON annonce (modele_id)');
        $this->addSql('CREATE INDEX IDX_F65593E5C4FFF555 ON annonce (garage_id)');
        $this->addSql('ALTER TABLE contact_mail ADD annonce_id INT NOT NULL');
        $this->addSql('ALTER TABLE contact_mail ADD CONSTRAINT FK_79D92EB78805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('CREATE INDEX IDX_79D92EB78805AB2F ON contact_mail (annonce_id)');
        $this->addSql('ALTER TABLE garage ADD garagiste_id INT NOT NULL');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610BDFFD48B5 FOREIGN KEY (garagiste_id) REFERENCES garagiste (id)');
        $this->addSql('CREATE INDEX IDX_9F26610BDFFD48B5 ON garage (garagiste_id)');
        $this->addSql('ALTER TABLE modele ADD marque_id INT NOT NULL');
        $this->addSql('ALTER TABLE modele ADD CONSTRAINT FK_100285584827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_100285584827B9B2 ON modele (marque_id)');
        $this->addSql('ALTER TABLE photo ADD annonce_id INT NOT NULL');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B784188805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('CREATE INDEX IDX_14B784188805AB2F ON photo (annonce_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5B732A364');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5AC14B70A');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5C4FFF555');
        $this->addSql('DROP INDEX IDX_F65593E5B732A364 ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E5AC14B70A ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E5C4FFF555 ON annonce');
        $this->addSql('ALTER TABLE annonce DROP energie_id, DROP modele_id, DROP garage_id');
        $this->addSql('ALTER TABLE contact_mail DROP FOREIGN KEY FK_79D92EB78805AB2F');
        $this->addSql('DROP INDEX IDX_79D92EB78805AB2F ON contact_mail');
        $this->addSql('ALTER TABLE contact_mail DROP annonce_id');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610BDFFD48B5');
        $this->addSql('DROP INDEX IDX_9F26610BDFFD48B5 ON garage');
        $this->addSql('ALTER TABLE garage DROP garagiste_id');
        $this->addSql('ALTER TABLE modele DROP FOREIGN KEY FK_100285584827B9B2');
        $this->addSql('DROP INDEX IDX_100285584827B9B2 ON modele');
        $this->addSql('ALTER TABLE modele DROP marque_id');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B784188805AB2F');
        $this->addSql('DROP INDEX IDX_14B784188805AB2F ON photo');
        $this->addSql('ALTER TABLE photo DROP annonce_id');
    }
}
