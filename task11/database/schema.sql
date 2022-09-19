CREATE TABLE `file_uploads` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `original_file_name` varchar(100) NOT NULL,
  `uploaded_file_name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uploaded_file_name` (`uploaded_file_name`)
);