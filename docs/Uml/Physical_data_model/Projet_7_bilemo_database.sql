-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 28 jan. 2020 à 14:22
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bilemo`
--

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'brandname_1'),
(2, 'brandname_2'),
(3, 'brandname_3'),
(4, 'brandname_4'),
(5, 'brandname_5'),
(6, 'brandname_6'),
(7, 'brandname_7'),
(8, 'brandname_8'),
(9, 'brandname_9'),
(10, 'brandname_10'),
(11, 'brandname_11'),
(12, 'brandname_12'),
(13, 'brandname_13'),
(14, 'brandname_14'),
(15, 'brandname_15'),
(16, 'brandname_16'),
(17, 'brandname_17'),
(18, 'brandname_18'),
(19, 'brandname_19'),
(20, 'brandname_20'),
(21, 'brandname_21'),
(22, 'brandname_22'),
(23, 'brandname_23'),
(24, 'brandname_24'),
(25, 'brandname_25'),
(26, 'brandname_26'),
(27, 'brandname_27'),
(28, 'brandname_28'),
(29, 'brandname_29'),
(30, 'brandname_30'),
(31, 'brandname_31'),
(32, 'brandname_32'),
(33, 'brandname_33'),
(34, 'brandname_34'),
(35, 'brandname_35'),
(36, 'brandname_36'),
(37, 'brandname_37'),
(38, 'brandname_38'),
(39, 'brandname_39'),
(40, 'brandname_40'),
(41, 'brandname_41'),
(42, 'brandname_42'),
(43, 'brandname_43'),
(44, 'brandname_44'),
(45, 'brandname_45'),
(46, 'brandname_46'),
(47, 'brandname_47'),
(48, 'brandname_48'),
(49, 'brandname_49'),
(50, 'brandname_50'),
(51, 'brandname_51'),
(52, 'brandname_52'),
(53, 'brandname_53'),
(54, 'brandname_54'),
(55, 'brandname_55'),
(56, 'brandname_56'),
(57, 'brandname_57'),
(58, 'brandname_58'),
(59, 'brandname_59'),
(60, 'brandname_60'),
(61, 'brandname_61'),
(62, 'brandname_62'),
(63, 'brandname_63'),
(64, 'brandname_64'),
(65, 'brandname_65'),
(66, 'brandname_66'),
(67, 'brandname_67'),
(68, 'brandname_68'),
(69, 'brandname_69'),
(70, 'brandname_70'),
(71, 'brandname_71'),
(72, 'brandname_72'),
(73, 'brandname_73'),
(74, 'brandname_74'),
(75, 'brandname_75'),
(76, 'brandname_76'),
(77, 'brandname_77'),
(78, 'brandname_78'),
(79, 'brandname_79'),
(80, 'brandname_80'),
(81, 'brandname_81'),
(82, 'brandname_82'),
(83, 'brandname_83'),
(84, 'brandname_84'),
(85, 'brandname_85'),
(86, 'brandname_86'),
(87, 'brandname_87'),
(88, 'brandname_88'),
(89, 'brandname_89'),
(90, 'brandname_90'),
(91, 'brandname_91'),
(92, 'brandname_92'),
(93, 'brandname_93'),
(94, 'brandname_94'),
(95, 'brandname_95'),
(96, 'brandname_96'),
(97, 'brandname_97'),
(98, 'brandname_98'),
(99, 'brandname_99'),
(100, 'brandname_100');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'email+1@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(2, 'email+2@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(3, 'email+3@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(4, 'email+4@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(5, 'email+5@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(6, 'email+6@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(7, 'email+7@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(8, 'email+8@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(9, 'email+9@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(10, 'email+10@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(11, 'email+11@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(12, 'email+12@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(13, 'email+13@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(14, 'email+14@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(15, 'email+15@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(16, 'email+16@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(17, 'email+17@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(18, 'email+18@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(19, 'email+19@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(20, 'email+20@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(21, 'email+21@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(22, 'email+22@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(23, 'email+23@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(24, 'email+24@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(25, 'email+25@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(26, 'email+26@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(27, 'email+27@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(28, 'email+28@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(29, 'email+29@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(30, 'email+30@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(31, 'email+31@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(32, 'email+32@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(33, 'email+33@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(34, 'email+34@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(35, 'email+35@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(36, 'email+36@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(37, 'email+37@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(38, 'email+38@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(39, 'email+39@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(40, 'email+40@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(41, 'email+41@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(42, 'email+42@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(43, 'email+43@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(44, 'email+44@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(45, 'email+45@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(46, 'email+46@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(47, 'email+47@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(48, 'email+48@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(49, 'email+49@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(50, 'email+50@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(51, 'email+51@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(52, 'email+52@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(53, 'email+53@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(54, 'email+54@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(55, 'email+55@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(56, 'email+56@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(57, 'email+57@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(58, 'email+58@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(59, 'email+59@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(60, 'email+60@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(61, 'email+61@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(62, 'email+62@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(63, 'email+63@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(64, 'email+64@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(65, 'email+65@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(66, 'email+66@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(67, 'email+67@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(68, 'email+68@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(69, 'email+69@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(70, 'email+70@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(71, 'email+71@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(72, 'email+72@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(73, 'email+73@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(74, 'email+74@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(75, 'email+75@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(76, 'email+76@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(77, 'email+77@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(78, 'email+78@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(79, 'email+79@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(80, 'email+80@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(81, 'email+81@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(82, 'email+82@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(83, 'email+83@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(84, 'email+84@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(85, 'email+85@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(86, 'email+86@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(87, 'email+87@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(88, 'email+88@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(89, 'email+89@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(90, 'email+90@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(91, 'email+91@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(92, 'email+92@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(93, 'email+93@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(94, 'email+94@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(95, 'email+95@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(96, 'email+96@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(97, 'email+97@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(98, 'email+98@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(99, 'email+99@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(100, 'email+100@email.com', 'password', '2020-01-28 14:21:48', '2020-01-28 14:21:48');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(32,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD44F5D008` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `name`, `reference`, `description`, `prix`) VALUES
(1, 1, 'phone 1', 'ref_1', 'Asperiores accusamus nihil repellat vero omnis voluptates id amet. Et suscipit qui recusandae totam nulla quam. Voluptatem cupiditate sed natus debitis voluptas. Laudantium sit repudiandae esse perspiciatis dignissimos error et itaque. Tempora velit porro ut velit soluta explicabo eligendi.', '519.00'),
(2, 2, 'phone 2', 'ref_2', 'Saepe eum sint dolorem delectus enim ipsum inventore. Libero et velit qui suscipit. Deserunt laudantium quibusdam enim nostrum soluta qui ipsam non. Velit reiciendis aperiam et fuga. Nisi placeat cumque est ducimus temporibus modi saepe architecto. Non dicta eveniet exercitationem aut porro sed.', '131.00'),
(3, 3, 'phone 3', 'ref_3', 'Vitae voluptas sint non. Ut optio quos qui illo error nihil laborum. A officia id corporis incidunt saepe provident esse. Eligendi quos culpa ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis.', '866.00'),
(4, 4, 'phone 4', 'ref_4', 'Odit amet et est ut. Nisi molestiae quidem ut sunt et quidem est. Aut nemo fuga est placeat rerum ut et. Ex eveniet facere sunt quia.', '965.00'),
(5, 5, 'phone 5', 'ref_5', 'Et eum architecto fugit repellendus illo veritatis. Ex esse veritatis voluptate vel possimus. Aut incidunt sunt cumque asperiores incidunt iure sequi.', '676.00'),
(6, 6, 'phone 6', 'ref_6', 'Aut rerum exercitationem est rem dicta. Fuga totam reiciendis qui architecto fugiat nemo omnis. Recusandae qui cupiditate eos. Veritatis vel optio provident non incidunt magnam molestias. Quibusdam et ab quo voluptatum.', '125.00'),
(7, 7, 'phone 7', 'ref_7', 'Est accusantium eveniet aut atque possimus aut dolores quis. Incidunt ducimus aperiam nesciunt est quia. Minima sunt qui similique ut culpa natus consequatur.', '978.00'),
(8, 8, 'phone 8', 'ref_8', 'Nihil ut porro amet laborum iure molestiae et. Quaerat molestiae iste in dolores. Rerum sequi quia quasi quae sint saepe.', '214.00'),
(9, 9, 'phone 9', 'ref_9', 'Quo aperiam natus ut doloribus magni quasi. Aperiam ea similique ad sed architecto quod nulla. Voluptas quibusdam inventore esse harum accusantium rerum nulla. Voluptas optio quos sed autem.', '982.00'),
(10, 10, 'phone 10', 'ref_10', 'Nesciunt omnis sit nisi recusandae. Molestias sit id labore. Ut voluptatem laudantium perferendis eveniet quam vero. Corrupti omnis temporibus maxime sint suscipit laudantium. Magni non voluptas fuga non autem non non. Et neque itaque ex quaerat.', '903.00'),
(11, 11, 'phone 11', 'ref_11', 'Consequatur non rerum in cupiditate voluptas molestiae fuga. Cum non qui quaerat cupiditate incidunt id sunt. Veritatis voluptatem perferendis molestiae est. Iure possimus ab in hic. Odio sed vitae maiores ex beatae reprehenderit exercitationem corrupti. Reprehenderit ut ducimus omnis molestiae.', '809.00'),
(12, 12, 'phone 12', 'ref_12', 'Est qui doloremque aperiam qui rerum. Beatae dolores enim et doloribus voluptatibus perspiciatis quae. Quia suscipit doloribus cupiditate dolorem saepe libero quas magni. Consequatur laudantium nisi quo earum rerum esse eveniet. Omnis voluptatem voluptatem et eaque praesentium et praesentium. Velit molestiae porro consequuntur quos hic animi.', '684.00'),
(13, 13, 'phone 13', 'ref_13', 'Velit eius similique dolore. Et ipsam omnis saepe dolor in perspiciatis sit. Temporibus voluptate laborum hic hic. Culpa rerum soluta in dicta molestiae asperiores consequuntur sit. Dolorum aliquam doloremque et reprehenderit nesciunt eum non. Esse et ut quis corporis voluptate ullam.', '751.00'),
(14, 14, 'phone 14', 'ref_14', 'Eaque possimus quia optio explicabo. Repellat tempore quod tempore totam iste quidem eum. Velit voluptatibus in laudantium voluptatem. Vel dignissimos et dolorem doloremque quam quia voluptatem. Ad in maiores nisi eius quibusdam sapiente quia. Aut numquam laboriosam sint enim reiciendis quod ullam at.', '541.00'),
(15, 15, 'phone 15', 'ref_15', 'Sed amet sunt vitae enim sapiente occaecati natus. Reiciendis similique et laudantium vel nisi ea itaque. Et nihil beatae omnis voluptatibus quae sit veniam. Eos officiis et est nisi iusto amet neque. Totam aut nisi non omnis voluptatem.', '412.00'),
(16, 16, 'phone 16', 'ref_16', 'Eos sint ut voluptates quo incidunt omnis. Enim nihil repellat ut culpa. Rem est est alias neque.', '375.00'),
(17, 17, 'phone 17', 'ref_17', 'Repudiandae pariatur reprehenderit assumenda error consequatur. Ad iste minus ullam quidem. Vero soluta nostrum ea dolores doloremque fuga labore. Et molestias hic minus et omnis porro voluptatibus. Quia reprehenderit magni fugiat consequatur officiis.', '201.00'),
(18, 18, 'phone 18', 'ref_18', 'Et quis quae distinctio ratione quis voluptates nulla. Eos omnis inventore perferendis voluptatem nisi. Consequatur ullam voluptas et tempora.', '998.00'),
(19, 19, 'phone 19', 'ref_19', 'Sint dolores quaerat odit quia nisi accusantium. Voluptatem ut explicabo corporis eligendi ut ut. Ut qui quidem explicabo optio amet velit aut delectus. Sed alias asperiores perspiciatis deserunt omnis.', '59.00'),
(20, 20, 'phone 20', 'ref_20', 'Id in id porro molestiae in maxime. Doloremque similique aut est dolores consectetur odio facere odio. Consequatur dicta ipsa temporibus sit. Cupiditate doloremque odio ad asperiores quaerat eius accusamus. Dolorem earum ut consequatur facilis molestias quo.', '551.00'),
(21, 21, 'phone 21', 'ref_21', 'Delectus iste modi accusantium. Suscipit quia et et dolorum quos aliquam delectus. Quidem ut eius a. Totam placeat delectus voluptatem earum officiis.', '538.00'),
(22, 22, 'phone 22', 'ref_22', 'Voluptatem est quod alias iste similique aut. Pariatur et libero explicabo quia sed ea. Unde voluptatem tempora beatae. Eum est molestiae et laboriosam.', '180.00'),
(23, 23, 'phone 23', 'ref_23', 'Vel excepturi similique quia quas beatae et nam. Nesciunt fugit ea accusantium temporibus qui ad est et. Cum eius voluptas numquam quam occaecati culpa.', '9.00'),
(24, 24, 'phone 24', 'ref_24', 'Omnis et aut laborum cupiditate corporis. Aut cumque consequuntur non qui est. Aliquid rerum autem qui est velit excepturi et necessitatibus. Doloremque iusto quibusdam fuga beatae voluptas iure rerum voluptas. Eius commodi odio ut aliquid et sit enim.', '510.00'),
(25, 25, 'phone 25', 'ref_25', 'Aliquid repudiandae qui voluptatem distinctio modi officiis eos. Facilis vel ut modi quia recusandae. Eligendi quo voluptas totam asperiores ab tenetur voluptatem. Reiciendis cum accusamus ut et nobis iste accusantium quaerat. Voluptas est tenetur sed possimus.', '858.00'),
(26, 26, 'phone 26', 'ref_26', 'At qui eaque nihil aliquid. Fugit natus quaerat quibusdam alias omnis accusamus aut. Perspiciatis itaque doloribus qui dicta eligendi quae.', '933.00'),
(27, 27, 'phone 27', 'ref_27', 'Beatae deleniti quia molestiae alias quo quis inventore. Ea sit in ut qui fugiat dolores placeat. Nesciunt architecto quas ex similique consequatur. Fuga dolores aut velit illo illum. Voluptas a aperiam voluptas aut qui neque minus eos.', '115.00'),
(28, 28, 'phone 28', 'ref_28', 'Et et et fugit reiciendis excepturi enim. Qui nam nesciunt non dolore quis. Eius et et omnis. Pariatur non ea vel.', '554.00'),
(29, 29, 'phone 29', 'ref_29', 'Inventore quam suscipit qui accusamus. Dolorem voluptatem est similique tenetur aut sit aliquam. Et voluptatem eveniet consequatur sit impedit sint. Perferendis sit est magnam ut nemo possimus. Totam iste perspiciatis harum animi et ad rerum. Fugiat et facere quisquam.', '921.00'),
(30, 30, 'phone 30', 'ref_30', 'Velit ut rem repellendus ut. Laudantium consequuntur aut et. Quas ut est in reprehenderit reiciendis accusamus. Quia et mollitia deleniti qui nostrum doloremque. Aut molestiae sapiente est consequatur.', '215.00'),
(31, 31, 'phone 31', 'ref_31', 'Ut debitis consequatur facere dolorum doloremque quasi. Nobis error fuga ut perspiciatis quia quasi sit. Ad sunt est impedit itaque. Officiis ut quis quisquam consequatur asperiores voluptatem. Nostrum ea corrupti voluptatem molestiae.', '525.00'),
(32, 32, 'phone 32', 'ref_32', 'Rerum repellendus ducimus nulla voluptatem. Ipsa eius repellat adipisci. Voluptas doloremque esse dolor qui illo placeat harum voluptatem. Enim tempora voluptas ut dolorem voluptates deserunt provident. Ipsam fugiat est ipsam quia reprehenderit sint. Sed facere qui sit delectus ad iusto.', '511.00'),
(33, 33, 'phone 33', 'ref_33', 'Laboriosam nulla earum eius repellat culpa. Harum voluptatem sit nihil laboriosam sed. Nobis hic rerum delectus dolorum voluptas cupiditate aut consequatur. Ullam qui ea voluptatem aut cum vitae nostrum.', '929.00'),
(34, 34, 'phone 34', 'ref_34', 'Omnis aut quos ut ad est quidem eum rerum. Laboriosam ea porro blanditiis eos enim non aut. Sunt eligendi sapiente et et fuga recusandae. Veniam enim quae voluptas. Dolore explicabo nisi a aut architecto et aut. Nam cum tempore doloremque.', '374.00'),
(35, 35, 'phone 35', 'ref_35', 'Perferendis praesentium cupiditate iste repellat provident. Debitis nisi ad ipsa magni nihil voluptatem magnam. Impedit recusandae omnis consequatur ut repellendus.', '874.00'),
(36, 36, 'phone 36', 'ref_36', 'Non ut rem esse magnam iure. Sed velit aut omnis quod cupiditate. Nisi eos cupiditate quibusdam eveniet eveniet provident. Omnis voluptatem quia soluta recusandae id quo.', '104.00'),
(37, 37, 'phone 37', 'ref_37', 'Deleniti et accusantium nesciunt voluptas et aut. Reiciendis velit voluptas molestiae eum et eos. Voluptas voluptatem consequuntur nostrum culpa in quod voluptatem. Dignissimos sunt atque aut. Possimus accusamus sint hic ut atque expedita. Minima aut ut reiciendis ut.', '896.00'),
(38, 38, 'phone 38', 'ref_38', 'Culpa velit dignissimos molestias tenetur a cumque. Et rerum dolore consectetur et beatae. Nulla quisquam labore saepe perspiciatis doloremque. Unde optio accusamus magnam non ratione enim velit.', '300.00'),
(39, 39, 'phone 39', 'ref_39', 'Sapiente id consequuntur quo dolore qui in et. Incidunt rerum ex accusamus. Itaque nesciunt sit quidem fugit sapiente ullam eveniet dolore. Consectetur sed repellat quia. Iure voluptatibus dolorem totam.', '342.00'),
(40, 40, 'phone 40', 'ref_40', 'Adipisci sint velit rerum autem. Modi ducimus odio fuga vitae. Vitae vero animi fugiat corporis dolores et.', '588.00'),
(41, 41, 'phone 41', 'ref_41', 'Quasi qui sit rem consequatur hic incidunt et. Tempora sunt aliquam mollitia id repudiandae ipsa. Placeat ut esse beatae. Ratione cumque commodi corrupti cum ratione animi maxime.', '310.00'),
(42, 42, 'phone 42', 'ref_42', 'Provident vel tenetur asperiores animi ipsa. Optio odio aspernatur qui dolor blanditiis suscipit. Veniam neque omnis dolor qui. Quia voluptatem quisquam sed aut quia. Vero tenetur vel quasi corporis rerum quo.', '902.00'),
(43, 43, 'phone 43', 'ref_43', 'Quibusdam quia aut culpa dolores consectetur quod doloremque. Aut cupiditate aperiam occaecati adipisci veritatis vel voluptas. Cumque sed modi odit.', '513.00'),
(44, 44, 'phone 44', 'ref_44', 'Quae laborum expedita quis ut odio et id. Accusantium quia porro minus voluptates dignissimos est officiis. Repudiandae est atque odio inventore sed ipsum. Maiores esse nobis perspiciatis inventore voluptatem corrupti exercitationem. Quaerat numquam voluptatem harum sed quia. Aliquid neque voluptas est totam provident sunt.', '136.00'),
(45, 45, 'phone 45', 'ref_45', 'Qui minus officia quis consequuntur. Non quasi minima eveniet repudiandae laborum dolor quasi. Qui ipsam iusto enim inventore molestias. Aut qui nihil et fuga. Iure consequuntur qui provident et.', '870.00'),
(46, 46, 'phone 46', 'ref_46', 'Adipisci libero qui qui maiores est ducimus. Aliquam officiis soluta aliquam saepe aspernatur. Et sit enim omnis. Inventore consequatur mollitia ducimus veritatis doloribus.', '277.00'),
(47, 47, 'phone 47', 'ref_47', 'Saepe quia quia unde quos error modi. Eos et ab velit sunt est possimus voluptas. Et quo aut culpa reiciendis dolorum. Accusantium exercitationem animi qui.', '534.00'),
(48, 48, 'phone 48', 'ref_48', 'Consequatur temporibus sunt officia et dolorem impedit. Cumque rerum qui ut non perspiciatis voluptatem. Eligendi provident sed sint magni.', '822.00'),
(49, 49, 'phone 49', 'ref_49', 'Aut quibusdam labore sit quod est. Dolor reprehenderit alias et similique. Beatae dolores nobis recusandae qui voluptas rerum quia. Harum dolor quaerat libero et repellat rerum voluptas. Explicabo vero voluptates fugit officiis. Ipsa libero sit ducimus minima.', '845.00'),
(50, 50, 'phone 50', 'ref_50', 'Tempore voluptatibus recusandae et deleniti tenetur itaque illo. Possimus esse et porro consequatur totam et. Cumque nesciunt reiciendis sit optio. Aliquid quis repudiandae temporibus blanditiis sit.', '984.00'),
(51, 51, 'phone 51', 'ref_51', 'Qui pariatur cumque hic sunt harum alias omnis. Asperiores aliquid ducimus fuga temporibus consequuntur omnis sit. Corrupti vitae consectetur quia recusandae eligendi vel est. Asperiores vitae neque optio quod et consectetur ut expedita. Vitae qui sed ut repudiandae.', '743.00'),
(52, 52, 'phone 52', 'ref_52', 'Eum et nisi cumque et quod hic aut nulla. Minus dolores sit iusto rerum. Et neque pariatur vel laudantium et laborum.', '282.00'),
(53, 53, 'phone 53', 'ref_53', 'Ad in et fugit eius facilis dolor. Dicta eveniet voluptas est accusantium eveniet rerum architecto. Est omnis distinctio eum sit hic.', '478.00'),
(54, 54, 'phone 54', 'ref_54', 'Et aliquam qui vel debitis qui ipsum perferendis. Dolorum excepturi deleniti voluptatem iure et atque aut. Ipsum dolores in dolor necessitatibus. Corrupti et non quos quia repellat expedita laudantium.', '448.00'),
(55, 55, 'phone 55', 'ref_55', 'Et sed illo minima sit. Necessitatibus accusamus sed iure voluptatum excepturi sit. Magni numquam iusto voluptatem quasi consequatur. Consequuntur eveniet est voluptatem culpa. Quis sunt occaecati est nihil vel aut. Libero quis sit qui officia nihil.', '639.00'),
(56, 56, 'phone 56', 'ref_56', 'Modi est qui inventore. Quos a minus quos laudantium porro. Voluptatem suscipit quo consequatur ipsa repellendus voluptas quam. Fugit molestiae consectetur aut esse libero eveniet.', '158.00'),
(57, 57, 'phone 57', 'ref_57', 'Id aspernatur sapiente voluptatum sint eum. Et et et fuga fugit consequatur cum. Laborum sequi sit debitis tempora aperiam. Nemo consequatur voluptates error ut recusandae quis.', '239.00'),
(58, 58, 'phone 58', 'ref_58', 'Ea quia velit quia laudantium ea. Sit enim molestias sunt odio aperiam tenetur. Aut tempore dolorem eaque libero maxime voluptatem quidem quo. Vel consequatur deleniti id sed veniam aut. Perferendis dolores nemo nesciunt ullam.', '835.00'),
(59, 59, 'phone 59', 'ref_59', 'Quo aspernatur quod voluptas quibusdam exercitationem ab. Culpa rem sunt perferendis repellendus sapiente accusamus. Voluptatem alias dignissimos nobis expedita repellat aut velit. Optio qui ab quaerat consequuntur mollitia eaque. Optio voluptatibus et non ab necessitatibus exercitationem nemo et. Culpa praesentium mollitia et veniam eaque et.', '936.00'),
(60, 60, 'phone 60', 'ref_60', 'Tenetur aut perspiciatis molestias sed dicta molestiae illo. Qui iste velit dolorem facere officiis nostrum dolore. Est ea quo fugiat unde alias sunt rerum. Quasi placeat corporis hic odio quod totam. Tempora id reprehenderit voluptas maiores.', '6.00'),
(61, 61, 'phone 61', 'ref_61', 'Ducimus aut voluptatum quia voluptatem est quo ea. Inventore quibusdam in eum et fuga. Libero et illo ducimus consectetur. Error aspernatur magnam aut sed architecto officiis ea. Velit ratione quia minus sint quis voluptatem sequi.', '879.00'),
(62, 62, 'phone 62', 'ref_62', 'Dolorem fugit inventore repellendus voluptatum. Unde et est qui delectus ipsam. Non praesentium itaque sequi architecto quia veniam accusantium. Commodi qui id repellendus earum voluptate explicabo excepturi molestias.', '519.00'),
(63, 63, 'phone 63', 'ref_63', 'Distinctio et consequatur exercitationem in corporis qui. Sit cumque natus non neque. Dicta architecto omnis quae consequatur nihil. Sit beatae quo alias aut laborum perspiciatis quos. Sed nostrum doloremque atque. Molestiae expedita ut beatae repellendus doloremque omnis.', '901.00'),
(64, 64, 'phone 64', 'ref_64', 'Eius et dolorem rerum ab et culpa voluptatem. Qui animi pariatur rerum. Corrupti id alias et qui. Ut aperiam laudantium fugiat est officia aut enim. Quae consequatur excepturi quia excepturi ipsum. Dolorum similique a nihil quae veniam qui.', '821.00'),
(65, 65, 'phone 65', 'ref_65', 'Et nesciunt eius est minus quis aut. Eligendi minus aut ea. At blanditiis architecto magni deserunt ad cupiditate soluta.', '85.00'),
(66, 66, 'phone 66', 'ref_66', 'Accusamus rerum vel fuga quo incidunt aperiam sunt. Ut ullam dolores ut natus et ratione. Consequatur architecto iure placeat fugiat itaque. Sit est similique omnis recusandae dicta vel qui unde. Dolor omnis assumenda dolor enim exercitationem sunt.', '582.00'),
(67, 67, 'phone 67', 'ref_67', 'Id cupiditate asperiores assumenda molestiae culpa nobis. Ut culpa aliquam debitis. Magni qui qui officia. Sint quia quibusdam est ratione. Et consequatur suscipit saepe quia. Nesciunt nobis aperiam facere non iure nihil quia.', '682.00'),
(68, 68, 'phone 68', 'ref_68', 'Dolorum voluptas est voluptatem a nihil possimus aut. Voluptas consequatur rerum sunt. Molestiae est excepturi alias ex consequatur qui eaque. Necessitatibus necessitatibus qui est et. Odio alias sed eaque.', '542.00'),
(69, 69, 'phone 69', 'ref_69', 'Reiciendis ipsam voluptatem nulla molestias et minus. Et aperiam voluptas corporis fugiat distinctio occaecati omnis illum. Odit ducimus culpa quae dolores. Aut ut nemo eum vitae impedit.', '933.00'),
(70, 70, 'phone 70', 'ref_70', 'Aperiam blanditiis omnis corrupti hic aut. Rem minima unde enim molestiae. Id nobis quo aliquid nam ex asperiores neque. Voluptas ut ut facilis qui sed. Magnam voluptatem nostrum illum praesentium exercitationem numquam.', '558.00'),
(71, 71, 'phone 71', 'ref_71', 'Consequuntur assumenda quae labore. Exercitationem animi libero sit repudiandae. Aliquam reprehenderit a tempora ipsam error vel. Qui assumenda a iusto perspiciatis dolor. Dolore unde nihil ducimus rerum est similique et. Distinctio minima fugit corrupti.', '23.00'),
(72, 72, 'phone 72', 'ref_72', 'Soluta temporibus repellendus ad eum cupiditate in. Et enim temporibus quo soluta. Optio consectetur est cupiditate a eum natus officia laudantium.', '933.00'),
(73, 73, 'phone 73', 'ref_73', 'Rerum qui vitae enim et explicabo. Nesciunt voluptatibus ipsum officia fugit iste et et. Totam repellendus provident voluptatem. Repellendus necessitatibus hic ipsa doloribus.', '650.00'),
(74, 74, 'phone 74', 'ref_74', 'Et odio explicabo quam accusamus voluptate sint quia. Autem impedit perspiciatis perspiciatis illo odit id. Illo omnis quidem quo. Commodi aut voluptas corrupti placeat odio.', '854.00'),
(75, 75, 'phone 75', 'ref_75', 'Et et ea ad. Tempore ab quis impedit itaque assumenda aut. Consequatur nulla explicabo commodi praesentium voluptatem. Non optio consequatur occaecati delectus ut amet ipsam magni.', '289.00'),
(76, 76, 'phone 76', 'ref_76', 'Iusto odio alias nemo voluptatum non ea architecto. Nulla consectetur beatae autem dolorem maiores. Blanditiis in pariatur omnis blanditiis. Itaque consequuntur cupiditate praesentium itaque. Reiciendis quo sapiente est adipisci quaerat voluptas.', '82.00'),
(77, 77, 'phone 77', 'ref_77', 'Magnam ea velit quo autem id ut voluptatem est. Ipsam molestiae ipsam consequatur quaerat minima id. Veritatis aspernatur neque et quia saepe. Inventore laborum aut commodi et voluptates inventore dolor assumenda.', '234.00'),
(78, 78, 'phone 78', 'ref_78', 'Odit magnam omnis accusantium. Earum unde et ut corporis recusandae ad omnis explicabo. Sed et quis aut facilis a eum. Id perferendis asperiores et reprehenderit rem dolorum. Sed nisi aut accusamus aut.', '148.00'),
(79, 79, 'phone 79', 'ref_79', 'Ex omnis est similique culpa dolorem dolor perspiciatis. Nostrum eum omnis quaerat. Beatae iure necessitatibus qui. Quasi rerum veritatis veritatis nam et quam. Voluptatem qui ut itaque iusto consequuntur. Consequuntur et cupiditate ea eligendi in ab facere sunt.', '783.00'),
(80, 80, 'phone 80', 'ref_80', 'Et fugiat animi veniam ad animi. Impedit voluptatum qui iure laboriosam laborum. Iusto ipsum suscipit qui qui tempora qui qui alias. Esse sint nisi sed maiores veritatis laudantium aliquid incidunt. Et ut dolores omnis est accusamus iusto et.', '289.00'),
(81, 81, 'phone 81', 'ref_81', 'Vel praesentium aliquam dolor quasi eum et nihil ut. Odio quia consequuntur temporibus alias nihil. Officia sapiente nesciunt atque. Eius totam esse velit voluptas temporibus.', '541.00'),
(82, 82, 'phone 82', 'ref_82', 'Voluptas ut maxime qui fugiat officia ut omnis. Dolores et maxime tempora non aut. Totam molestiae assumenda fugiat doloremque ab unde a cumque. Voluptatum molestias facere totam similique voluptatum mollitia.', '53.00'),
(83, 83, 'phone 83', 'ref_83', 'Rerum accusantium laborum veniam iure doloremque possimus. Ad provident nemo asperiores excepturi explicabo voluptas. Molestiae aliquam aut voluptate velit et et reprehenderit officia. In et aut hic tempore maxime nemo rerum. Dolores molestias earum quos blanditiis eos ipsam. Non ut ex in nihil quidem est.', '829.00'),
(84, 84, 'phone 84', 'ref_84', 'Amet quod sed illo. Sint magni ea nemo sed voluptatibus in. Est ratione natus perferendis fuga animi nulla.', '759.00'),
(85, 85, 'phone 85', 'ref_85', 'Ratione est eveniet perspiciatis et et sed. Maiores et dignissimos similique mollitia. Enim ad totam nihil quis aliquid maiores ipsa esse. Cupiditate ut voluptatem deserunt doloremque magnam.', '628.00'),
(86, 86, 'phone 86', 'ref_86', 'Molestias vel deserunt eius architecto commodi eum at. Facilis inventore vero animi unde doloribus. Qui dolor vel consectetur debitis a animi. Ut ut exercitationem est quia ad quas. Cumque laborum quod ut ducimus.', '335.00'),
(87, 87, 'phone 87', 'ref_87', 'Veritatis saepe ex voluptas aut. Sit numquam vel est sunt. Doloribus cupiditate excepturi non. In voluptatem vel rem quaerat sunt magni aut.', '39.00'),
(88, 88, 'phone 88', 'ref_88', 'Molestias velit deleniti enim rerum sequi. Et nemo excepturi et eos vero hic quia. Adipisci rerum molestiae cum et facere fugiat sed. Iste suscipit voluptatem laboriosam deserunt nobis doloribus enim ipsa. Qui asperiores voluptates ut delectus sapiente quo. Rerum nihil sint placeat ipsa id ullam.', '299.00'),
(89, 89, 'phone 89', 'ref_89', 'Debitis voluptatem earum sed totam aut impedit facere. Provident aut aut officia ducimus ea beatae eum amet. Sint in eius et reprehenderit aliquam excepturi.', '738.00'),
(90, 90, 'phone 90', 'ref_90', 'Voluptate molestiae ut qui. Ex vel quod dolorem perspiciatis eos quis asperiores. Qui eaque natus qui voluptas. Beatae deleniti in quis. Blanditiis ab architecto quas illum cum aut facilis dolore. Unde fuga nostrum omnis.', '167.00'),
(91, 91, 'phone 91', 'ref_91', 'Dolorum fugit dolorem molestiae aut est enim cupiditate. Dolore nobis in autem dicta adipisci. Perspiciatis ut vel quibusdam voluptatem consequuntur voluptatem.', '510.00'),
(92, 92, 'phone 92', 'ref_92', 'Earum non explicabo voluptas et. Omnis est animi quaerat laborum autem qui. Vel aut magnam architecto corrupti itaque. Tenetur exercitationem autem consequatur. Perspiciatis animi ab assumenda debitis est nihil atque.', '454.00'),
(93, 93, 'phone 93', 'ref_93', 'Explicabo assumenda sit repellat sint nam in pariatur. Fuga consequatur praesentium consequatur nihil aut possimus id. Similique cumque provident et cum architecto. Provident voluptas ut omnis.', '343.00'),
(94, 94, 'phone 94', 'ref_94', 'Repellat delectus magnam repudiandae molestiae. A accusantium tempora consequuntur est ut commodi. Doloribus fugiat repellat harum assumenda. Illo voluptatem nobis fugit inventore sed at. Consequatur ut dignissimos sint et inventore ipsam ullam. Dolor debitis quo saepe vel possimus.', '609.00'),
(95, 95, 'phone 95', 'ref_95', 'Totam adipisci et odit molestiae tempora aut quidem. Dignissimos adipisci rerum beatae laboriosam possimus. Voluptatibus et maiores ex ratione facilis consequatur est. Et eveniet porro non similique aut suscipit.', '713.00'),
(96, 96, 'phone 96', 'ref_96', 'Libero provident nihil minus alias. Et cum illum corrupti et. Inventore iure tempora perspiciatis repudiandae numquam veniam sequi dolorem. Amet nam ipsa eius et non autem iste.', '462.00'),
(97, 97, 'phone 97', 'ref_97', 'Aut corporis quis in quia asperiores sed sit. Vero excepturi nihil harum sit et nemo rerum. Possimus odit qui voluptatem. Voluptates consequuntur occaecati soluta distinctio placeat nesciunt quam hic. Ab est neque ipsam sequi a error. Vero sint qui rerum.', '814.00'),
(98, 98, 'phone 98', 'ref_98', 'Odio atque qui at molestiae commodi id. Commodi dolorem voluptas occaecati itaque vel voluptatibus. Veritatis eligendi consequatur et tempore enim eius et.', '986.00'),
(99, 99, 'phone 99', 'ref_99', 'Pariatur nam minus architecto consequatur. Et nulla voluptate iste enim sunt architecto. Amet eveniet voluptatem et vero tempore. Commodi aut culpa totam iste.', '754.00'),
(100, 100, 'phone 100', 'ref_100', 'Voluptatum suscipit aut dolores voluptatem et. Provident quis tempora provident et nobis. Praesentium assumenda dolores harum cumque. Voluptatem necessitatibus nobis vel.', '823.00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D64919EB6921` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `client_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'name-1', 'email+1@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(2, 2, 'name-2', 'email+2@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(3, 3, 'name-3', 'email+3@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(4, 4, 'name-4', 'email+4@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(5, 5, 'name-5', 'email+5@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(6, 6, 'name-6', 'email+6@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(7, 7, 'name-7', 'email+7@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(8, 8, 'name-8', 'email+8@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(9, 9, 'name-9', 'email+9@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(10, 10, 'name-10', 'email+10@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(11, 11, 'name-11', 'email+11@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(12, 12, 'name-12', 'email+12@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(13, 13, 'name-13', 'email+13@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(14, 14, 'name-14', 'email+14@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(15, 15, 'name-15', 'email+15@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(16, 16, 'name-16', 'email+16@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(17, 17, 'name-17', 'email+17@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(18, 18, 'name-18', 'email+18@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(19, 19, 'name-19', 'email+19@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(20, 20, 'name-20', 'email+20@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(21, 21, 'name-21', 'email+21@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(22, 22, 'name-22', 'email+22@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(23, 23, 'name-23', 'email+23@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(24, 24, 'name-24', 'email+24@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(25, 25, 'name-25', 'email+25@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(26, 26, 'name-26', 'email+26@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(27, 27, 'name-27', 'email+27@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(28, 28, 'name-28', 'email+28@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(29, 29, 'name-29', 'email+29@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(30, 30, 'name-30', 'email+30@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(31, 31, 'name-31', 'email+31@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(32, 32, 'name-32', 'email+32@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(33, 33, 'name-33', 'email+33@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(34, 34, 'name-34', 'email+34@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(35, 35, 'name-35', 'email+35@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(36, 36, 'name-36', 'email+36@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(37, 37, 'name-37', 'email+37@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(38, 38, 'name-38', 'email+38@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(39, 39, 'name-39', 'email+39@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(40, 40, 'name-40', 'email+40@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(41, 41, 'name-41', 'email+41@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(42, 42, 'name-42', 'email+42@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(43, 43, 'name-43', 'email+43@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(44, 44, 'name-44', 'email+44@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(45, 45, 'name-45', 'email+45@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(46, 46, 'name-46', 'email+46@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(47, 47, 'name-47', 'email+47@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(48, 48, 'name-48', 'email+48@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(49, 49, 'name-49', 'email+49@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(50, 50, 'name-50', 'email+50@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(51, 51, 'name-51', 'email+51@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(52, 52, 'name-52', 'email+52@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(53, 53, 'name-53', 'email+53@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(54, 54, 'name-54', 'email+54@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(55, 55, 'name-55', 'email+55@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(56, 56, 'name-56', 'email+56@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(57, 57, 'name-57', 'email+57@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(58, 58, 'name-58', 'email+58@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(59, 59, 'name-59', 'email+59@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(60, 60, 'name-60', 'email+60@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(61, 61, 'name-61', 'email+61@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(62, 62, 'name-62', 'email+62@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(63, 63, 'name-63', 'email+63@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(64, 64, 'name-64', 'email+64@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(65, 65, 'name-65', 'email+65@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(66, 66, 'name-66', 'email+66@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(67, 67, 'name-67', 'email+67@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(68, 68, 'name-68', 'email+68@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(69, 69, 'name-69', 'email+69@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(70, 70, 'name-70', 'email+70@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(71, 71, 'name-71', 'email+71@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(72, 72, 'name-72', 'email+72@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(73, 73, 'name-73', 'email+73@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(74, 74, 'name-74', 'email+74@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(75, 75, 'name-75', 'email+75@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(76, 76, 'name-76', 'email+76@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(77, 77, 'name-77', 'email+77@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(78, 78, 'name-78', 'email+78@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(79, 79, 'name-79', 'email+79@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(80, 80, 'name-80', 'email+80@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(81, 81, 'name-81', 'email+81@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(82, 82, 'name-82', 'email+82@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(83, 83, 'name-83', 'email+83@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(84, 84, 'name-84', 'email+84@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(85, 85, 'name-85', 'email+85@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(86, 86, 'name-86', 'email+86@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(87, 87, 'name-87', 'email+87@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(88, 88, 'name-88', 'email+88@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(89, 89, 'name-89', 'email+89@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(90, 90, 'name-90', 'email+90@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(91, 91, 'name-91', 'email+91@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(92, 92, 'name-92', 'email+92@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(93, 93, 'name-93', 'email+93@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(94, 94, 'name-94', 'email+94@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(95, 95, 'name-95', 'email+95@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(96, 96, 'name-96', 'email+96@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(97, 97, 'name-97', 'email+97@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(98, 98, 'name-98', 'email+98@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(99, 99, 'name-99', 'email+99@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48'),
(100, 100, 'name-100', 'email+100@email.com', '2020-01-28 14:21:48', '2020-01-28 14:21:48');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
