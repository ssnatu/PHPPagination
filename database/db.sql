--
-- Create database `paginate_users`
--

CREATE DATABASE IF NOT EXISTS `paginate_users` DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;

--
-- Table structure for table `users`
--

CREATE TABLE users (
    id INT(1) NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='Store users';

--
-- Insert data into table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, "John", "Smith", "johnsmith@exmaple.com", "0121-421-3333"),
(2, "James", "Cooper", "jamescooper@exmaple.com", "0121-421-4444"),
(3, "Anthony", "Potato", "anthonypotato@exmaple.com", "0121-421-5555"),
(4, "Fred", "Bloggs", "fredbloggs@exmaple.com", "0121-421-6666"),
(5, "Ryan", "Butler", "ryanbutler@exmaple.com", "0121-421-7777"),
(6, "James", "Blake", "jamesblake@exmaple.com", "0121-421-8888"),
(7, "James", "Smith", "jamessmith@exmaple.com", "0121-421-9999"),
(8, "Elaine", "Deville", "elainedeville@exmaple.com", "0121-421-3333"),
(9, "Robyn", "Spangler", "robynspagler@exmaple.com", "0121-421-4444"),
(10, "Joseph", "Pino", "josephpino@exmaple.com", "0121-421-5555"),
(11, "Sam", "Bloggs", "sambloggs@exmaple.com", "0121-421-6666"),
(12, "Mark", "Butler", "markbutler@exmaple.com", "0121-421-7777"),
(13, "Edgar", "Blake", "edgarblake@exmaple.com", "0121-421-8888"),
(14, "Connie", "Yang", "connieyang@exmaple.com", "0121-421-9999"),
(15, "Armando", "Gay", "armandogay@exmaple.com", "0121-421-3333"),
(16, "James", "Duarte", "jamesduarte@exmaple.com", "0121-421-4444"),
(17, "Jason", "West", "jasonwest@exmaple.com", "0121-421-5555"),
(18, "Sam", "Wood", "samwood@exmaple.com", "0121-421-6666"),
(19, "Gloria", "Saucedo", "gloriasaucdo@exmaple.com", "0121-421-7777"),
(20, "Paul", "Moody", "paulmoody@exmaple.com", "0121-421-8888"),
(21, "Sandra", "Williams", "sandrawilliams@exmaple.com", "0121-421-9999"),
(22, "Jack", "McDonough", "jackmcd@exmaple.com", "0121-421-5555"),
(23, "John", "Williams", "johnwill@exmaple.com", "0121-421-6666"),
(24, "Amelia", "Davis", "ameliadavis@exmaple.com", "0121-421-7777"),
(25, "Gertrude", "Lawrence", "gertrudel@exmaple.com", "0121-421-8888"),
(26, "Michael", "Harris", "mharris@exmaple.com", "0121-421-9999");