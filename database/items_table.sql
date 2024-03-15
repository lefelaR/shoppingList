
-- local config
    -- const DB_HOST = 'localhost';
    -- const DB_NAME = 'if0_36166217_xxx';
    -- const DB_USER = 'root';
    -- const DB_PSSD = '';

-- server config

    -- const DB_HOST = 'sql101.infinityfree.com';
    -- const DB_NAME = 'if0_36166217_xxx';
    -- const DB_USER = 'if0_36166217';
    -- const DB_PSSD = 'APQ9Qdnd4CTLI';

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `createdAt` varchar(45) DEFAULT NULL,
  `updatedAt` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;