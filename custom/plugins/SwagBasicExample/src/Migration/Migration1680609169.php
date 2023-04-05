<?php declare(strict_types=1);

namespace SwagBasicExample\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1680609169 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1680609169;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('CREATE TABLE `swagbasic_example`(
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `active` TINYINT(1) NULL DEFAULT 0,
    `created_at` DATETIME(3) NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
