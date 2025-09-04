CREATE TABLE IF NOT EXISTS `users`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `role_id` INT NOT NULL DEFAULT 1,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(191) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) NULL,
    `agent` VARCHAR(128) NULL,
    `address` TEXT,
    `profile_picture` VARCHAR(255),
    `is_active` TINYINT NOT NULL,
    `last_login` DATETIME NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NULL,
    `deleted_at` DATETIME NULL
);  