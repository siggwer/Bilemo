-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 02 mars 2020 à 10:09
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
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
('30995a67-65a0-4b8e-afa2-ea70d349855a', 'brand3'),
('3535a582-e368-4de1-8c42-dabf2209d1e5', 'brand4'),
('5f356d50-3dbd-4b47-b070-c1344dce75ee', 'brand8'),
('646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'brand7'),
('8564aad6-32f8-469a-8f93-f07786352600', 'brand10'),
('8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'brand9'),
('948df9f6-ef04-4c30-842b-aedc71be2ca3', 'brand5'),
('97d2193a-c058-4b5c-8b85-7dc168af43ae', 'brand1'),
('d6ff07ca-f2b9-4e45-951e-c776cede00e9', 'brand6'),
('f213bb0f-3965-445a-a30e-4f26b216534c', 'brand2');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:uuid)',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `email`, `password`, `created_at`, `updated_at`, `roles`) VALUES
('50f93202-7412-4491-8260-95e861bd8905', 'email10@email.fr', '$2y$13$ecLsfhMEjIFatFnTJtRpsuCzIjqHMgPFTSph908fxy5GeNAaL6Cde', '2020-03-02 10:03:37', '2020-03-02 10:03:37', '\"ROLE_USER\"'),
('6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'email1@email.fr', '$2y$13$2zi9xddXdzAPxiaW1X6NGOOishMaOCrRAfRJUyOVUTLi5DwF/9ip.', '2020-03-02 10:03:31', '2020-03-02 10:03:31', '\"ROLE_USER\"'),
('7d6d5968-266c-4f22-bac9-298fdacbd466', 'email3@email.fr', '$2y$13$HLR1HSL26qFbH1da9hB4kecDHgQm7SOk55geYheZ29eyHrFzqCtwG', '2020-03-02 10:03:33', '2020-03-02 10:03:33', '\"ROLE_USER\"'),
('8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'email4@email.fr', '$2y$13$knwoRJvqn/JtIFgqKB4ROO2oQudMszcV0wnJq0SAlqAc56tMASKDi', '2020-03-02 10:03:33', '2020-03-02 10:03:33', '\"ROLE_USER\"'),
('95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'email5@email.fr', '$2y$13$OnIU4JpO4jWF8vbPS/jo..0B.sMRHnl8psPJYpDB0MZeiJA86Hu/q', '2020-03-02 10:03:34', '2020-03-02 10:03:34', '\"ROLE_USER\"'),
('9d49dee7-feb7-4a03-8673-84fd9763e25b', 'email2@email.fr', '$2y$13$BwWRuC4bOWd/DD6dFB7PTujZTsocZiUig0qbCd4NU8n4LaD4NmLxK', '2020-03-02 10:03:32', '2020-03-02 10:03:32', '\"ROLE_USER\"'),
('b32a9d5e-3672-4f5b-988f-b264e3d49378', 'email8@email.fr', '$2y$13$bXcGqxOqpZ/8CBoHhEPDruLDNYWINucpmG9hPr7O0GUGkZM71XGoS', '2020-03-02 10:03:36', '2020-03-02 10:03:36', '\"ROLE_USER\"'),
('decdf4f2-3c83-4875-910e-db6088f8c994', 'email9@email.fr', '$2y$13$Gc9R7QZfwlsAocfBo7Uniez2jZm2zxi3UXMWXKozMn3rKbrOc9wMK', '2020-03-02 10:03:36', '2020-03-02 10:03:36', '\"ROLE_USER\"'),
('e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'email6@email.fr', '$2y$13$dgLy0mYCX8O4PQBhxWEzYuRtiEjKbcbuuL7i5ZnrmnX2QChV9nj9y', '2020-03-02 10:03:35', '2020-03-02 10:03:35', '\"ROLE_USER\"'),
('fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'email7@email.fr', '$2y$13$sgvhhf.UzpAriivIkfLXy.R6qqmEgiX1u/JkaBpaj1TU4fErqDofO', '2020-03-02 10:03:35', '2020-03-02 10:03:35', '\"ROLE_USER\"');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:uuid)',
  `brand_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(32,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD44F5D008` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `name`, `reference`, `description`, `price`) VALUES
('010f7d02-df30-40cc-8eac-e1147d29172e', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n10', 'ref10', 'phone 110', '88.00'),
('048e2ef0-5fae-4b5f-863b-6626dee5a22c', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n8', 'ref8', 'phone 18', '170.00'),
('072e9775-5487-4996-ba2c-4f538fd1811c', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n6', 'ref6', 'phone 16', '423.00'),
('09b9e629-ac8d-4f96-ab35-49f7369b4a19', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n10', 'ref10', 'phone 110', '449.00'),
('0a2ff674-22a0-4204-b737-a9b226b5ce5c', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n8', 'ref8', 'phone 18', '682.00'),
('0c7b827b-2f32-4847-ac7d-2aa287c6ce20', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n3', 'ref3', 'phone 13', '263.00'),
('0cf72586-7f4f-4993-b2ed-8cc2d652479d', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n7', 'ref7', 'phone 17', '260.00'),
('1063e2d7-3059-4631-8fac-8293acf8d231', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n9', 'ref9', 'phone 19', '475.00'),
('1b9fd66b-97e4-4ae3-9853-69639dbc3335', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n10', 'ref10', 'phone 110', '265.00'),
('1bf037f5-59c1-4cd7-8964-ae3f1225bf8c', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n7', 'ref7', 'phone 17', '803.00'),
('1ca27129-0729-4ab4-8f58-160a1cf56520', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n10', 'ref10', 'phone 110', '168.00'),
('1d9bc68b-2549-46e3-8880-6d03e11a28bd', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n8', 'ref8', 'phone 18', '494.00'),
('1e00868c-fc61-434c-80c7-50f81bf7ac88', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n5', 'ref5', 'phone 15', '208.00'),
('2557c5bb-84d1-4c39-b5e5-c8dc8d6e4c23', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n5', 'ref5', 'phone 15', '82.00'),
('2787c105-121b-497a-925b-29b6126a4d00', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n1', 'ref1', 'phone 11', '11.00'),
('2a6c8e5f-6a0e-42ed-96f1-df8f60d1597f', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n9', 'ref9', 'phone 19', '65.00'),
('2d0328f5-2ff2-497f-8315-b24461fc83eb', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n7', 'ref7', 'phone 17', '653.00'),
('2e99ea9e-77f5-478c-9383-b422aa5663d5', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n1', 'ref1', 'phone 11', '199.00'),
('35bff23f-3a0a-41d1-b7ec-879b129e76f3', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n6', 'ref6', 'phone 16', '683.00'),
('374b02de-74a9-474a-98ae-7bcc4e2bb94b', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n9', 'ref9', 'phone 19', '420.00'),
('37c4f577-4788-4973-a44e-2c66f3c61dbe', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n6', 'ref6', 'phone 16', '18.00'),
('38b4af5a-d217-4d0b-982d-c91f3440b0df', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n4', 'ref4', 'phone 14', '148.00'),
('3c20d524-fa71-473f-a105-235c879c4d1a', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n4', 'ref4', 'phone 14', '847.00'),
('4448a2cf-6ed5-4bd6-8447-c110f9b8f1c9', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n2', 'ref2', 'phone 12', '741.00'),
('493af050-6c81-479c-9503-f17e5487476b', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n10', 'ref10', 'phone 110', '15.00'),
('494672db-ac2d-4495-9921-a049f89956c8', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n6', 'ref6', 'phone 16', '772.00'),
('4bd497ae-4218-45ff-83fc-3d6618674b89', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n9', 'ref9', 'phone 19', '394.00'),
('4d583358-e4b7-45b9-89db-a05019633467', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n7', 'ref7', 'phone 17', '907.00'),
('4d6c528e-7c84-4214-81e6-0718fd86685d', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n5', 'ref5', 'phone 15', '938.00'),
('4f756baf-70b3-4e7b-9acc-317109fa73d4', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n9', 'ref9', 'phone 19', '427.00'),
('55240d2a-c50a-4bb9-8b8a-7c2e5494907b', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n2', 'ref2', 'phone 12', '775.00'),
('5628a58b-abca-45cb-9bac-0355187ca073', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n1', 'ref1', 'phone 11', '401.00'),
('564ba146-3b02-490b-aeeb-d6b31effa6d5', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n1', 'ref1', 'phone 11', '82.00'),
('56d63ca8-a582-4739-8568-140ca3427fb8', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n3', 'ref3', 'phone 13', '470.00'),
('56dff4f4-143b-46f2-af76-e85041eb048a', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n2', 'ref2', 'phone 12', '614.00'),
('5ad6e10e-2d3f-48fb-a297-9f9eabce7c74', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n3', 'ref3', 'phone 13', '859.00'),
('5d200a3a-2715-4d66-a7d2-22a47d72f46d', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n8', 'ref8', 'phone 18', '891.00'),
('5e5a6874-f7c2-42ea-9a46-ddcdec317691', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n1', 'ref1', 'phone 11', '676.00'),
('6039b067-e111-4ec6-9c48-5ab17814f5cb', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n4', 'ref4', 'phone 14', '86.00'),
('6585a1e5-ab5b-490c-b247-1af092d5078a', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n7', 'ref7', 'phone 17', '906.00'),
('66ff5b05-6e85-4b78-962d-ee15dd988e79', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n7', 'ref7', 'phone 17', '58.00'),
('68c97027-8713-4b63-8a8c-94f218a857f9', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n7', 'ref7', 'phone 17', '706.00'),
('695a9f46-5b1d-4fe5-b379-9e2b3b66825a', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n10', 'ref10', 'phone 110', '155.00'),
('6cbe22c5-da4d-473d-ba89-f73445b9c35b', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n5', 'ref5', 'phone 15', '423.00'),
('70d1bf4f-e362-4953-b059-7c9eed51be33', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n2', 'ref2', 'phone 12', '592.00'),
('73266998-7646-4ec0-8353-0476d0dab356', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n3', 'ref3', 'phone 13', '771.00'),
('73716de3-92fa-4c8b-ae81-6a5eabdabf76', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n10', 'ref10', 'phone 110', '928.00'),
('77517189-e40b-43da-8188-986e1400dc68', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n9', 'ref9', 'phone 19', '231.00'),
('7e57301f-1504-41b4-9d7c-cc32f7773350', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n8', 'ref8', 'phone 18', '197.00'),
('7eb8119b-25d8-4925-8c97-f484146662e7', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n2', 'ref2', 'phone 12', '883.00'),
('80c69286-e446-4994-97d6-fcb75610d0b7', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n1', 'ref1', 'phone 11', '977.00'),
('81b1d9ac-9dcb-4a5a-9d70-e4818e15dda4', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n1', 'ref1', 'phone 11', '676.00'),
('8482f0a3-1785-4d6a-95d1-345e5bbcfffc', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n6', 'ref6', 'phone 16', '382.00'),
('86387147-0eb8-4a4a-a015-e25365392c77', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n5', 'ref5', 'phone 15', '718.00'),
('8b0db6b3-d865-4e44-8bda-d404e7f6018a', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n6', 'ref6', 'phone 16', '173.00'),
('923ceb32-be5e-42bc-b4ce-9891b6cb2bd1', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n9', 'ref9', 'phone 19', '210.00'),
('98802630-a9e9-4da8-ac1a-0e08b25992da', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n6', 'ref6', 'phone 16', '80.00'),
('98ecf68c-762e-4dfe-95c9-482d542dad75', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n8', 'ref8', 'phone 18', '553.00'),
('9c3280b7-41a1-450b-bf82-bbfbe45fd94c', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n4', 'ref4', 'phone 14', '86.00'),
('9dea59de-03ad-4a5d-85bc-cb184a48442d', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n8', 'ref8', 'phone 18', '910.00'),
('9e485c92-f4b0-4876-856f-4201215ce6c9', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n3', 'ref3', 'phone 13', '432.00'),
('a008095c-0291-4b16-b804-bb381537fc0d', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n6', 'ref6', 'phone 16', '103.00'),
('a72c27d6-65d3-4b90-bbdf-0abffdb69430', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n7', 'ref7', 'phone 17', '567.00'),
('a7f1240e-4570-4ea7-baf1-3066f8ccfddd', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n6', 'ref6', 'phone 16', '911.00'),
('a807eb2f-5278-4f18-a936-d050e4f455dd', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n2', 'ref2', 'phone 12', '769.00'),
('ab5351c0-136f-4a69-b280-a89eaf5e4175', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n2', 'ref2', 'phone 12', '385.00'),
('abb08ada-ccbc-4a1d-a781-cdad2c6514dc', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n8', 'ref8', 'phone 18', '429.00'),
('acc0508f-74c2-43c5-9c6f-ae241d50fc66', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n7', 'ref7', 'phone 17', '625.00'),
('ad1ce685-e423-4609-ba9f-d58543b2e153', '97d2193a-c058-4b5c-8b85-7dc168af43ae', 'phone n5', 'ref5', 'phone 15', '50.00'),
('af85b1c4-2f21-48b3-a673-ff3a5e84327d', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n9', 'ref9', 'phone 19', '722.00'),
('b03c8135-7b09-4d61-aaef-d2959e48e3e4', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n1', 'ref1', 'phone 11', '45.00'),
('bbdd0ec8-8139-498c-bd8c-29f76601dc8c', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n2', 'ref2', 'phone 12', '604.00'),
('bd8e90f9-e4b3-42db-aa9d-36beb7021145', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n5', 'ref5', 'phone 15', '344.00'),
('bdeff733-584d-4e13-8fe4-ab79111cef11', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n7', 'ref7', 'phone 17', '330.00'),
('c0dc65d2-d09e-4bd9-93e3-0eb89a2cdec4', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n10', 'ref10', 'phone 110', '433.00'),
('c1943f63-6ad0-4101-bb38-e8458dfd088a', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n9', 'ref9', 'phone 19', '249.00'),
('c2dbcb43-4c31-443d-9cd2-593d7c85ee94', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n3', 'ref3', 'phone 13', '606.00'),
('c4aaa3eb-e586-494b-9a21-ed18ca662013', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n2', 'ref2', 'phone 12', '817.00'),
('cc8a5dc6-73fb-4bdb-b759-56efa8cd28cc', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n3', 'ref3', 'phone 13', '490.00'),
('cca1006b-f5f5-4cb0-91f8-709d8e30961c', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n10', 'ref10', 'phone 110', '170.00'),
('cedec518-aedc-43c3-b862-99a2cd961b87', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n10', 'ref10', 'phone 110', '515.00'),
('d04f4656-7b5e-494c-a664-47a8b148bf19', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n4', 'ref4', 'phone 14', '284.00'),
('d195806e-3091-4bb1-b066-37913bfa02e7', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n4', 'ref4', 'phone 14', '789.00'),
('d3754ca1-9b87-4ab5-9cba-0df7e7136fb7', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n4', 'ref4', 'phone 14', '638.00'),
('d75d5109-144b-41d3-9422-6fc5d206c909', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n4', 'ref4', 'phone 14', '430.00'),
('d89b3349-1f57-4520-8982-f97cba386900', '948df9f6-ef04-4c30-842b-aedc71be2ca3', 'phone n3', 'ref3', 'phone 13', '450.00'),
('d98c4213-a283-460d-8643-ea8b5f9ec4ea', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n3', 'ref3', 'phone 13', '197.00'),
('da9557dd-915f-4b07-b2b7-68506ec6951c', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n4', 'ref4', 'phone 14', '337.00'),
('df0bf91b-182d-4793-bf50-8cf515116815', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n5', 'ref5', 'phone 15', '610.00'),
('e33b2d9e-baab-445c-9519-5bcaeba6febd', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n8', 'ref8', 'phone 18', '819.00'),
('e7b4b718-6eac-4ca7-afd7-0c53f92c2942', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n1', 'ref1', 'phone 11', '383.00'),
('eb8b4994-9954-4ecf-b51a-ca31aabc190d', 'd6ff07ca-f2b9-4e45-951e-c776cede00e9', 'phone n4', 'ref4', 'phone 14', '232.00'),
('ec3eda3f-6019-4d7c-ba7c-13e9a5f5d5c5', '646544c1-49d3-4dfd-aeaf-4145e5fc0eac', 'phone n8', 'ref8', 'phone 18', '31.00'),
('edd5f2ea-5995-4b52-96bd-33e6ceeebf70', '3535a582-e368-4de1-8c42-dabf2209d1e5', 'phone n6', 'ref6', 'phone 16', '650.00'),
('ee081026-0bf5-4074-8315-6b555cc6d0b2', 'f213bb0f-3965-445a-a30e-4f26b216534c', 'phone n2', 'ref2', 'phone 12', '624.00'),
('f29dd10f-7b55-480c-bbec-519c1cb6b85a', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n5', 'ref5', 'phone 15', '799.00'),
('f4fe1bab-3ef0-4c89-bebd-3e7b341201ab', '8b8ebe64-0d4d-48df-8ba6-224282b1c7b2', 'phone n5', 'ref5', 'phone 15', '66.00'),
('f87f852e-d71e-465b-9034-0774f8eee2df', '5f356d50-3dbd-4b47-b070-c1344dce75ee', 'phone n3', 'ref3', 'phone 13', '594.00'),
('fc49c0a0-851b-40bc-8008-4220836760c7', '8564aad6-32f8-469a-8f93-f07786352600', 'phone n1', 'ref1', 'phone 11', '657.00'),
('fd7fc617-245f-42d9-bee0-ef42a2837b0e', '30995a67-65a0-4b8e-afa2-ea70d349855a', 'phone n9', 'ref9', 'phone 19', '564.00');

-- --------------------------------------------------------

--
-- Structure de la table `refresh_tokens`
--

DROP TABLE IF EXISTS `refresh_tokens`;
CREATE TABLE IF NOT EXISTS `refresh_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refresh_token` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9BACE7E1C74F2195` (`refresh_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:uuid)',
  `client_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `updated_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D64919EB6921` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `client_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
('0018d49d-5ef7-49c7-9286-ace652f18160', '50f93202-7412-4491-8260-95e861bd8905', 'username1', 'email91@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('012bb286-ba29-4d54-a433-1da656a7a405', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username3', 'email13@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('0252cb7a-fead-42d9-9958-b76f2b131667', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username4', 'email64@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('1973a97e-86d9-48ac-b3ba-043d9a2cb5e5', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username7', 'email17@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('1b8b5a54-8901-4c9c-b7ec-a0952cf405c4', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username10', 'email80@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('1c81c4c7-5090-4633-98c2-f1153431d465', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username4', 'email14@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('23cfd57a-3201-4d95-87e5-e1842f545965', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username10', 'email90@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('263910f4-d2b3-4e27-8dea-71972134ecb7', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username1', 'email81@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('26bba38b-fe7e-4137-a07d-c32b4cd31324', '50f93202-7412-4491-8260-95e861bd8905', 'username2', 'email92@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('26c77d36-57c3-4c77-b3bc-2e458f378080', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username1', 'email71@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('29fd62af-5886-4637-87e9-4f5332d0a53c', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username7', 'email57@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('2c8d975a-f9ab-4d82-8996-8a46c4e4a6ae', '50f93202-7412-4491-8260-95e861bd8905', 'username4', 'email94@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('2d08ada0-bc31-4ea3-b669-e5a82c049f48', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username9', 'email19@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('2e5790ae-ce51-41b0-9223-f2ca57ced23c', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username8', 'email8@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('31850d9d-81bb-49d3-a7e5-577157ee626a', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username7', 'email87@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('32f4eb1b-00f8-4c48-99ba-c953fa0edf21', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username1', 'email11@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('33120508-91ed-4f76-8d93-d7e03b3a2b1f', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username2', 'email72@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('3364e3c8-ac3d-40d6-9690-8a4212f0ee04', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username9', 'email49@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('3416a993-8463-4910-bbe3-9addc40d739f', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username3', 'email3@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('35b720b0-cf11-465a-a16f-5c7cc6a2734a', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username1', 'email41@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('35eecbca-5198-441d-a03e-0af3d6d2336c', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username3', 'email73@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('380d2c68-d6b0-4a4a-af1d-c9a00b20ce03', '50f93202-7412-4491-8260-95e861bd8905', 'username3', 'email93@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('3a32f8dd-ab0c-4855-8fe9-f4faed8bd0c3', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username3', 'email53@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('3a732f53-ee83-48ca-bde1-c8cfd1ab5412', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username3', 'email43@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('45163d6b-0297-4cb2-8a96-02e6d3d7fe1f', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username8', 'email88@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('4807a7ec-0b17-4298-aa08-ecccfba9a513', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username8', 'email28@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('482fbc7c-3baa-48c5-9d00-85a6a76a5282', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username2', 'email22@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('4ddba503-c88b-41bc-836e-434cf3e65aaf', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username4', 'email4@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('563c0c48-97e6-4382-94d6-77ca9eb22a4b', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username3', 'email63@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5779c70a-7644-4487-a072-ee0a8495d377', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username3', 'email23@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('57be4188-123c-459b-81ac-b12b471646db', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username6', 'email76@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5915915d-f818-47bd-a621-0529e7b6d120', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username6', 'email66@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('59b7a082-9d27-4cb5-918e-7cdb6b6c86b7', '50f93202-7412-4491-8260-95e861bd8905', 'username5', 'email95@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5b4b3cd7-46cd-45fa-a22e-e1eb11c231ed', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username6', 'email6@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5d9e2df6-267a-4d46-aa65-3ef29751924b', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username5', 'email35@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5e1e324a-20cf-4296-88de-e0aedb61ca2b', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username5', 'email65@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5e76f615-a612-4a94-a928-d37c066339b2', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username5', 'email85@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('5ff212f6-7d61-4986-b0d6-3a8d30a28065', '50f93202-7412-4491-8260-95e861bd8905', 'username7', 'email97@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('615fcafa-5c86-440a-90ff-237bbf8eb0be', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username6', 'email86@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('6564de9d-f60c-4ce0-b2f6-f30cbec0899f', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username2', 'email12@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('66694ff2-74a9-433b-91d3-489aa4ca0ab4', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username9', 'email39@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('6be976fe-e810-4f94-99f0-3eba651b5f2d', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username10', 'email30@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('6fa75141-d190-41e0-811a-e596a4524b73', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username4', 'email34@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('7465e1a9-feb0-4ad6-bc93-253be54690f8', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username2', 'email62@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('75316e6a-6c67-4ea0-8f22-80f0d36e06d6', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username5', 'email15@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('7709efdb-4cfe-4a07-88fa-5e32c2310c4b', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username6', 'email26@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('7c413f66-a62c-4f38-884a-9b7a4c6362ab', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username4', 'email54@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('813b621e-9bb5-4985-b468-64bfa9f35c2c', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username7', 'email47@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('83db0270-56b2-43af-b783-9e5e9c527556', '50f93202-7412-4491-8260-95e861bd8905', 'username9', 'email99@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('845f5fa4-7d0c-4a34-89e1-1477eb81aa66', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username6', 'email46@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('8cd33ac3-3f1c-4dbd-8911-da01bfd31e68', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username10', 'email20@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('8dbf57d8-3c4b-4d82-bad6-eb9653955f7f', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username5', 'email75@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('946476a2-1128-44f3-b21e-29a5f6e6ab85', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username1', 'email31@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('976e509b-ce6d-4b86-b7fa-50d35730c469', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username8', 'email78@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9791c52a-c2e6-4339-9443-59886889a8ea', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username2', 'email42@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9a30264f-48f0-412a-b477-5d1e22701d66', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username9', 'email79@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9a99aa51-c0df-4bf2-8ce2-fb4febeb2497', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username9', 'email69@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9cfec6c8-1653-4b79-950f-9b174e585c00', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username7', 'email27@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9d448e2a-c6fd-4eef-8910-ad34eb85d6ae', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username8', 'email58@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('9e357f73-9ae0-4202-83c8-1fb115feec0e', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username3', 'email33@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('a0d197b0-067b-49b2-9f4e-413fe4d444b0', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username3', 'email83@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('a675866d-96ec-4abf-8931-3ad85c586217', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username10', 'email10@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('a70d836b-6c1e-45ef-ab0f-cac85e69c613', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username4', 'email24@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('a809bfd0-bc87-44a6-855d-bd48a6080852', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username2', 'email2@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('aa698e08-ecfd-4cba-8ce4-e0d7ae43cf97', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username2', 'email32@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('aba4507d-7279-47bc-91d0-14dd44c8614f', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username7', 'email67@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('acdfa935-4515-4572-ba51-0b5074accf01', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username5', 'email45@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('ae34d84a-4d25-46f2-8842-81cafcb161ae', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username10', 'email60@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('af1000bf-b467-4344-8906-883172e76ec5', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username8', 'email18@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('afe72134-e5c7-4c10-8fe2-21bf220cbd82', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username4', 'email84@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b090542a-c7a2-4ed5-8465-cb62311beeea', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username10', 'email50@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b14adf08-ecd3-413b-88a9-1634f0f688e7', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username1', 'email61@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b217f89c-47ca-4c33-8aab-f2d183d16054', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username5', 'email25@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b73b055f-7d1a-41b6-8ffc-d52faeca5042', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username7', 'email77@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b8110093-815f-42d7-8dd5-9d1179a2abb2', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username4', 'email44@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('b9bf4706-6e8b-4236-9fca-14d77d06b547', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username1', 'email21@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('c285bc0a-7b5e-45b3-b161-cd4dc0da31fc', '7d6d5968-266c-4f22-bac9-298fdacbd466', 'username9', 'email29@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('c38c24b8-37b1-4882-9429-8d51a930022d', '50f93202-7412-4491-8260-95e861bd8905', 'username8', 'email98@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('c73de81f-a594-4931-ac7d-75d5fd69326e', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username7', 'email37@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('cc2c7bb9-9e53-438e-9dd7-5f10c5747e1e', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username5', 'email55@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('ce9b6187-562c-402e-9c32-220469702f21', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username8', 'email68@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('d913d2b5-77df-4578-9652-2efacba5f472', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username1', 'email1@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('d9260cae-eff4-497d-9996-c691caa19519', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username9', 'email59@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('daeda6d3-4583-4ade-a2eb-4c09c1f5c5d0', 'fe112731-41d2-4c11-86f5-1dbf9aeadac0', 'username10', 'email70@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e21e7356-d01e-46a9-880b-d0b33ebfea22', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username6', 'email36@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e3969a22-403d-46fc-b3bc-bed05efa4941', '9d49dee7-feb7-4a03-8673-84fd9763e25b', 'username6', 'email16@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e4ad7ebe-532c-4127-bb1e-b0ae49d6fad1', 'b32a9d5e-3672-4f5b-988f-b264e3d49378', 'username4', 'email74@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e6877303-40f6-4cd7-bd07-97ca405bc208', '50f93202-7412-4491-8260-95e861bd8905', 'username10', 'email100@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e878ed9d-2a42-4d85-a509-ba7d8166db84', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username9', 'email9@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('e9a8c0bd-e074-4b8e-adad-7378c89e4019', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username5', 'email5@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('ea35f7a5-e692-4b6e-9959-d4e9d0fd81d0', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username2', 'email52@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('eaf5997f-1713-4cf7-b8c5-5ef1a41a6538', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username9', 'email89@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('ed00df5e-0f1c-424e-8054-2940c46120f7', '6b4d149c-f32e-4be0-98b0-a6479ff7a589', 'username7', 'email7@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f4d6a392-db73-4f47-a586-e4eeda37889b', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username6', 'email56@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f6ab46c6-b672-4028-a5a9-0883fbb71a84', '50f93202-7412-4491-8260-95e861bd8905', 'username6', 'email96@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f6d5bec1-05af-414c-ba5c-7adbcdc09a64', 'decdf4f2-3c83-4875-910e-db6088f8c994', 'username2', 'email82@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f6df253b-050f-4270-9911-79600c2264d6', 'e2ce6271-9fef-4420-980c-b3ba85e7ef9f', 'username1', 'email51@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f7c274e2-2ee2-4f14-93db-2ddcccc1ec62', '95f4a57a-ecca-4558-a4c9-db7fcee7d61a', 'username8', 'email48@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('f933e2d1-adf5-4488-9d4c-e5a3d06b97db', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username8', 'email38@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37'),
('fc2aba5d-31e6-4ca5-9baa-c8401443a59e', '8580ebf3-0890-4da4-a102-cfd4c4d56c32', 'username10', 'email40@email.fr', '2020-03-02 10:03:37', '2020-03-02 10:03:37');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64919EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
