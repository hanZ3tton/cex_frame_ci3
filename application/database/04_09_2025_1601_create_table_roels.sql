CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Administrator with full access', '2025-08-19 04:24:24', '2025-08-19 04:24:24', NULL),
(2, 'driver', 'Delivery driver', '2025-08-19 04:24:24', '2025-08-19 04:24:24', NULL),
(3, 'staff', 'Staff with limited access', '2025-08-19 04:24:24', '2025-08-19 04:24:24', NULL);


