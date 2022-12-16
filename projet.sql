-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 déc. 2022 à 15:35
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categ` int(100) NOT NULL AUTO_INCREMENT,
  `nom_categ` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categ`, `nom_categ`) VALUES
(1, 'Action'),
(2, 'Comédie'),
(3, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_manga`
--

DROP TABLE IF EXISTS `categorie_manga`;
CREATE TABLE IF NOT EXISTS `categorie_manga` (
  `id_manga` varchar(100) NOT NULL,
  `id_categ` int(100) NOT NULL,
  PRIMARY KEY (`id_manga`,`id_categ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_manga`
--

INSERT INTO `categorie_manga` (`id_manga`, `id_categ`) VALUES
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 1),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 3),
(' 64113fcd-4f8c-41bc-8fa4-18a83076da2e', 2),
(' 64113fcd-4f8c-41bc-8fa4-18a83076da2e', 3),
(' f58c6ee0-42f7-4e4a-901a-22cdb03a4e38', 1),
(' f58c6ee0-42f7-4e4a-901a-22cdb03a4e38', 2),
('014374f6-c420-4361-9ee9-93675f7e36bb', 3),
('0241a53e-eb23-4295-bc08-340f7082e01f', 3),
('02ffca35-bb17-4f56-a8af-c447f2ee0720', 2),
('076028a7-197a-4329-bbd5-d13186bbd990', 3),
('08c3aeb3-7a39-47a0-aecc-9876646478ed', 1),
('08c3aeb3-7a39-47a0-aecc-9876646478ed', 3),
('08c65669-e94c-4df1-91c2-37ef15084a0d', 1),
('08c65669-e94c-4df1-91c2-37ef15084a0d', 2),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 1),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 3),
('0f8d38bd-84ff-4d72-a1b7-fce4f05b696b', 3),
('109e8013-370a-4249-aefc-8e993ab596f2', 2),
('109e8013-370a-4249-aefc-8e993ab596f2', 3),
('129c90ca-b997-4789-a748-e8765bc67a65', 1),
('12d08397-4227-4a8b-97ca-718c587f1185', 2),
('12d08397-4227-4a8b-97ca-718c587f1185', 3),
('132eff91-b4f1-42d1-982c-cb1aec6f0a8a', 1),
('132eff91-b4f1-42d1-982c-cb1aec6f0a8a', 3),
('15588d53-d6e9-4c07-813f-5a4c65e51c0a', 2),
('15588d53-d6e9-4c07-813f-5a4c65e51c0a', 3),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 2),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 3),
('20598dda-2d24-487b-bb3e-cfa795719492', 3),
('232702e4-7174-4fa3-a16a-c09d49648b1a', 1),
('232702e4-7174-4fa3-a16a-c09d49648b1a', 2),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 1),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 3),
('370110b7-2d60-47f7-a8c1-b5a9bfcbaabd', 3),
('37366974-0967-447c-8555-22b8744aa531', 2),
('3a3bbcd6-dc18-43c4-82f0-b4a9d6a433d2', 2),
('3a3bbcd6-dc18-43c4-82f0-b4a9d6a433d2', 3),
('40bc649f-7b49-4645-859e-6cd94136e722', 1),
('40bc649f-7b49-4645-859e-6cd94136e722', 2),
('40c373ac-ab7c-4582-bd0e-14893faefb8b', 1),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 1),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 2),
('456415b4-5d90-4262-b549-34a18153039d', 1),
('456415b4-5d90-4262-b549-34a18153039d', 3),
('49c7b586-b0a3-4776-b3f5-3bdc62d82161', 2),
('49c7b586-b0a3-4776-b3f5-3bdc62d82161', 3),
('4ada20eb-085a-491a-8c49-477ab42014d7', 1),
('4ada20eb-085a-491a-8c49-477ab42014d7', 3),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 2),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 2),
('5746bbb3-445d-4c31-948b-065098052b77', 1),
('5746bbb3-445d-4c31-948b-065098052b77', 3),
('58615d7f-175d-4eaf-a02a-8464a2cde5a8', 1),
('58615d7f-175d-4eaf-a02a-8464a2cde5a8', 2),
('5b93fa0f-0640-49b8-974e-954b9959929b', 1),
('5b93fa0f-0640-49b8-974e-954b9959929b', 3),
('5edf03fa-1cc2-40b4-8857-6ccce0ea7081', 2),
('5edf03fa-1cc2-40b4-8857-6ccce0ea7081', 3),
('5f95f18a-e482-4b1f-9d16-6dfbeb4de951', 1),
('5f95f18a-e482-4b1f-9d16-6dfbeb4de951', 2),
('5fcbcc88-5f3b-4222-bbd8-5f5952b8a506', 2),
('5fcbcc88-5f3b-4222-bbd8-5f5952b8a506', 3),
('600f467c-9613-4056-aa21-bb2ecc295b84', 1),
('600f467c-9613-4056-aa21-bb2ecc295b84', 3),
('6378f4b1-f9a0-4233-b89a-95021535d100', 1),
('64c59add-698a-4260-8671-848356f26eab', 2),
('6670ee28-f26d-4b61-b49c-d71149cd5a6e', 1),
('6670ee28-f26d-4b61-b49c-d71149cd5a6e', 3),
('667a6411-4b6f-4aa0-946f-2dbad05c0b1e', 2),
('667a6411-4b6f-4aa0-946f-2dbad05c0b1e', 3),
('66f110cc-2653-4dae-9177-b07b7706abd5', 2),
('6bf844c8-2ce4-401a-a761-3151042efe30', 2),
('6bf844c8-2ce4-401a-a761-3151042efe30', 3),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 1),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 3),
('6e44705b-9f80-42f6-9ebb-1141fbe8320e', 1),
('6e44705b-9f80-42f6-9ebb-1141fbe8320e', 2),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 1),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 2),
('744ba2b5-59dd-421d-98ab-4cb2c2b77c80', 1),
('744ba2b5-59dd-421d-98ab-4cb2c2b77c80', 2),
('7532f86a-023b-482a-8d53-670eff0484c5', 1),
('7532f86a-023b-482a-8d53-670eff0484c5', 2),
('7a19cf0c-28b4-4f3e-9b51-1843029601fb', 2),
('7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', 1),
('7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', 3),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 1),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 3),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 1),
('80d23647-1851-4cf9-ada8-eec8912813a7', 1),
('80d23647-1851-4cf9-ada8-eec8912813a7', 2),
('83cc2814-04e4-4434-9876-ba7eaafd32f5', 2),
('84e1c982-ce5f-4c00-b718-6ccab4e06caf', 2),
('84e1c982-ce5f-4c00-b718-6ccab4e06caf', 3),
('86a19e80-e6d6-4afd-8042-ddea780de827', 3),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 3),
('87f7e7fb-a2bc-4dee-bf7c-60f1053d78fe', 1),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 1),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 3),
('8dcdcee1-717d-4601-b828-4035ff247b31', 1),
('8dcdcee1-717d-4601-b828-4035ff247b31', 3),
('9c3d4ea5-df3c-4bab-b6db-6e216af7d24e', 1),
('9c3d4ea5-df3c-4bab-b6db-6e216af7d24e', 3),
('a04b95bf-6609-4a45-bedc-99d560acad6e', 1),
('a04b95bf-6609-4a45-bedc-99d560acad6e', 2),
('a1c7c817-4e59-43b7-9365-09675a149a6f', 1),
('a1c7c817-4e59-43b7-9365-09675a149a6f', 3),
('a77742b1-befd-49a4-bff5-1ad4e6b0ef7b', 1),
('a77742b1-befd-49a4-bff5-1ad4e6b0ef7b', 2),
('aa416bc9-d406-46d2-a44d-d5a91103cffc', 2),
('aa416bc9-d406-46d2-a44d-d5a91103cffc', 3),
('aa67625d-7dbb-4f91-b1a0-be3b3c25711d', 1),
('aa67625d-7dbb-4f91-b1a0-be3b3c25711d', 3),
('accc086b-2673-487d-8e06-a48c1d7c5a52', 2),
('accc086b-2673-487d-8e06-a48c1d7c5a52', 3),
('af7cc594-4f6a-4c0a-8f74-16748910dee5', 2),
('b33ca79b-a974-4fa1-a327-97fd6c029a76', 3),
('b3f3145a-6d58-4935-9942-79abe4026aab', 1),
('b3f3145a-6d58-4935-9942-79abe4026aab', 3),
('b9b2fbc4-e351-406c-a468-799be14033df', 2),
('b9b2fbc4-e351-406c-a468-799be14033df', 3),
('bdd0a765-c80b-4244-a160-38e3e59dcbe7', 1),
('bdd0a765-c80b-4244-a160-38e3e59dcbe7', 3),
('c00d5181-e971-4542-ac69-27786c9855f3', 1),
('c00d5181-e971-4542-ac69-27786c9855f3', 2),
('c13e3bdb-d3ca-4e76-a3e0-a2aaf2bf04b8', 1),
('c13e3bdb-d3ca-4e76-a3e0-a2aaf2bf04b8', 2),
('c1c408f6-3dec-4d62-b6b3-b57e615d933c', 1),
('c1c408f6-3dec-4d62-b6b3-b57e615d933c', 3),
('c62b73e5-0cfb-4aef-9425-60393477ab6c', 1),
('c62b73e5-0cfb-4aef-9425-60393477ab6c', 2),
('c658d616-73d2-494c-bd98-ece86bf5b8e8', 2),
('c658d616-73d2-494c-bd98-ece86bf5b8e8', 3),
('c7a10d9f-6628-4d58-b27a-5081ec3db27b', 2),
('ccb654fd-d4de-44d1-a9c1-f58ba34f3510', 2),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 1),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 2),
('d21c9c1d-21ec-4a15-bc82-73d97458a1d3', 2),
('d21c9c1d-21ec-4a15-bc82-73d97458a1d3', 3),
('d97652f6-1e9c-40b6-8e8e-904ce6c51d50', 2),
('d97652f6-1e9c-40b6-8e8e-904ce6c51d50', 3),
('d9f46e20-d66a-4771-a126-92d97b09bc77', 2),
('d9f46e20-d66a-4771-a126-92d97b09bc77', 3),
('dd71e056-0b61-4076-8c5e-affbed4c93f0', 2),
('dd7c685b-2e21-45a6-85f4-2679dcc202f7', 2),
('de7769da-b078-4978-8458-3d5dec2f99af', 1),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 2),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 3),
('e50022a5-b0b2-4019-8908-7579f60b3ec9', 2),
('e50022a5-b0b2-4019-8908-7579f60b3ec9', 3),
('e66ed7ea-583f-45c8-81e5-b610b1462fee', 1),
('eb7bd53b-d2b6-48f1-a731-4dbf73230c8a', 3),
('f6859844-44fa-437e-9e36-cb9177ec05be', 1),
('f6859844-44fa-437e-9e36-cb9177ec05be', 3),
('f7defd4d-a135-4890-9e4c-7df38a80f80f', 3),
('fa8b0760-41b3-46bd-8c44-0ede90772a80', 3),
('fa938045-2957-48d3-abba-4b7e34557baf', 1),
('fa938045-2957-48d3-abba-4b7e34557baf', 2),
('faaef9a1-7358-4a50-9703-c26c35d32644', 1),
('faaef9a1-7358-4a50-9703-c26c35d32644', 3),
('fae59015-76c4-4807-94c5-22e8b58ebb96', 2),
('fd4df778-292c-47c3-81b2-887ab6312a8b', 2),
('fd4df778-292c-47c3-81b2-887ab6312a8b', 3),
('ffe69cc2-3f9e-4eab-a7f7-c963cea9ec25', 1),
('ffe69cc2-3f9e-4eab-a7f7-c963cea9ec25', 3),
('Mickaelg57', 1),
('Test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` varchar(100) NOT NULL,
  `id_utilisateur` int(100) NOT NULL,
  `prix_total` float NOT NULL,
  `estLivre` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_utilisateur`, `prix_total`, `estLivre`) VALUES
('1S005164RU1292846', 2, 39.23, 0),
('56G71073P1974414N', 2, 39.23, 0),
('56S68553JR305024G', 2, 25.57, 0),
('7P7571796S0853312', 3, 51.22, 0),
('8VC79871LS399325R', 3, 80.49, 1);

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id_manga` varchar(100) NOT NULL,
  `nom_manga` varchar(300) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL,
  `état` tinyint(1) NOT NULL,
  `année` int(10) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `dessinateur` varchar(100) NOT NULL,
  `id_pays` int(100) NOT NULL,
  `lien_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id_manga`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `nom_manga`, `prix`, `description`, `état`, `année`, `auteur`, `dessinateur`, `id_pays`, `lien_image`) VALUES
('d21c9c1d-21ec-4a15-bc82-73d97458a1d3', ' Killing Killer', 6.69, 'The main character, Siwoo Lee, lost his parents to a murderer ten years ago. Finally, he meets Jack, the killer who killed his parents, and beheads him.  It wasn&acirc;&euro;&trade;t me who killed your parents.&acirc;&euro;After learning that the real culprit is a ', 1, 2022, 'A_backk', 'A_backk', 1, 'https://c.neevacdn.net/image/fetch/s--vBwSloii--/https%3A//tse1.mm.bing.net/th%3Fid%3DOIP.nfhGeF2LjSBUkEWjfiamkAAAAA%26pid%3DApi?savepath=th'),
('014374f6-c420-4361-9ee9-93675f7e36bb', ' HadaCamera', 6.78, 'Because he did not pass his college entrance exam, Kagami Kyosuke cannot stay close to Kojo Hikari, the love of his life. So instead he gets a part-time job near her university and buys an old camera since Hikari is passionate for photography. But as it turns out, that camera also has a secret which will get him involved in all sorts of \"exciting\" and \"awkward\" situations especially with Botan Oshikiri, his senpai and co-worker. How will Kyosukes life play out now?  ---', 1, 2017, 'Honna Wakou', 'Honna Wakou', 1, 'https://mangadex.org/covers/014374f6-c420-4361-9ee9-93675f7e36bb/bd2da80f-2d77-4a51-a2e9-f4de5ec31010.jpg'),
('ffe69cc2-3f9e-4eab-a7f7-c963cea9ec25', ' Lonely Attack on a Different World', 6.58, 'The strongest doesnâ€™t need any cheats! Haruka, who spends his high school life a loner, was suddenly summoned to another world one day along with all his classmates. When olâ€™ God enters the picture, Haruka believes he can just choose whatever cheat skill he wants to help him survive in the new worldâ€¦ But, contrary to his expectations, that list of cheat skills works on a first come, first serve basis. And so, his classmates pick out all the cheat skills. His choices now limited to leftovers, Haruka finds himself incapable of assembling a party due to his own  lonerâ€ skill. Even though itâ€™s a different world, it seems his adventuring days will be, as per usual, a solitary affairâ€¦ After becoming aware of a crisis looming over his classmates, Haruka makes a silent vow to save them. No relying on cheats! He will walk a heretical path of strength that transcends the need for them.  The curtain rises on the strongest lonerâ€™s otherworld strategy guide!', 1, 2019, 'oji Shoji', 'Bibi', 1, 'https://mangadex.org/covers/ffe69cc2-3f9e-4eab-a7f7-c963cea9ec25/72048cd0-4c24-449d-9a0d-50d0e62ad9a2.jpg'),
('5746bbb3-445d-4c31-948b-065098052b77', ' Baili Jin Among Mortals', 7.86, 'Baili Jin, a fairy who was living in heaven, eating and drinking without a care, broke her Majesty&acirc;&euro;&trade;s colourful, stained-glass plate at her birthday and got banished to the mortal realm. Now she has to begin her adventures in the mortal realm with all of her spiritual powers gone! In order to survive, the former fairy has to deliver take-out&acirc;&euro;&brvbar;.  An endearingly silly fairy, a gentle restaurant manager, a reserved top student and a hard to resist yandere onee-san (kind on the outside, dark/possessive on the inside) , let the story of their beautiful friendship and youthful days begin!  ', 1, 1900, 'Viva', 'Julys', 1, 'https://i.pinimg.com/474x/42/5b/b1/425bb12781ce438c038967000abb38ab.jpg'),
('49c7b586-b0a3-4776-b3f5-3bdc62d82161', ' Dog Nigga', 6.94, 'Rex is a half man half dog. He was created when a drunk old man forced himself on a stray female dog in the street. Because of his father, Rex has to live his life as a freak rejected by society. So one dayâ€¦ heâ€™s gonna find that man, and rape HIM.', 1, 2020, 'Dh Animations', 'Serbianhero', 1, 'https://mangadex.org/covers/49c7b586-b0a3-4776-b3f5-3bdc62d82161/2946e6a9-7dce-4260-b506-842c5fbe5453.jpg'),
('dd7c685b-2e21-45a6-85f4-2679dcc202f7', ' Unlikely Affair', 7.51, 'The third generation billionaires secret heir, Dong-Ju X Secret secretary Min-Young.Lee Min-Young of the HR team happened to see Han Dong-Ju, a new employee of the sales team, coming out of the presidents office.Surprisingly, Min-Young finds out that Dong-Ju is the presidents hidden son.Moreover, he receives a secret offer to spy on his private life in order to make him his heir...But this new employee, seems like he is flirting with me?!\"', 1, 2021, 'Lyrique (리릭)', 'Lyrique (리릭)', 1, 'https://mangadex.org/covers/dd7c685b-2e21-45a6-85f4-2679dcc202f7/4cc69bf6-ab43-4461-8bd1-332a7dea20cf.jpg'),
('f7defd4d-a135-4890-9e4c-7df38a80f80f', ' Bokura no Scramblues', 7.91, 'Haru Kurosaki once heard a strangers song in high school that made him decide to finally follow his passions. Now, hes a graphic designer whos recently been put in charge of designing a CD jacket for the prodigy musical artist Eddie Astley.On the outside, Eddie is intimidating and aloof â€” but when Haru spots him at a rock concert, he realizes how wrong that assumption is. As he sees beyond Eddies surly exterior and catches a glimpse of the man beneath the affectation, Haru begins to think about the message and emotions that Eddie tries to convey through his music. And in trying to get to know more about Eddie for his design project, he discovers that music always has a way of transporting you to a vital moment from the past.', 1, 2021, 'mame march', 'mame march', 1, 'https://mangadex.org/covers/f7defd4d-a135-4890-9e4c-7df38a80f80f/a471df2d-5449-4911-a0a4-fcc6ec516fe8.jpg'),
('a04b95bf-6609-4a45-bedc-99d560acad6e', ' Cheat Kusushi no Slow Life: Isekai ni Tsukurou Drugstore', 7.39, 'One day, a corporate slave, Reiji, suddenly got transported to another world. He made the best of his skills to make better potions which earned him lots of money and with that money, made a drugstore! An Elf who has trouble aiming with his bow? Give him some eye-drops! A Dragon who always let breathes out fire unintentionally? Dont worry, we have cough medicine for you! Reijis new, fun, slow life as a pharmacist in a village drugstore starts now!!', 1, 2018, 'Kennoji', 'Haruno Eri', 1, 'https://mangadex.org/covers/a04b95bf-6609-4a45-bedc-99d560acad6e/b6c56318-c196-41c6-8e22-4ab0a1ae3fff.jpg'),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', ' JoJos Bizarre Adventure Part 3 - Stardust Crusaders', 8.72, 'Third story arc of the JoJos Bizarre Adventure series. In 1989, Joseph Joestar arrives in Japan to meet his troubled grandson Jotaro Kujo at the request of his daughter Holly. Jotaro has locked himself in a jail cell out of fear that an evil spirit is possessing him and that he may cause harm to others. However, Joseph reveals the truth to Jotaro: this \"spirit\" is really a \"Stand,\" a physical manifestation of ones fighting spirit. What s more, Joseph and his companion Mohammed Avdol possess Stands of their own and have learned to control them with ease.  Josephs arrival comes with another piece of news: an old family enemy has returned from the grave, causing the Stands of the Joestar family to awaken. However, when a Stand manifests within Holly, her inability to cope with it leaves her gravely ill, stirring the men into action.  Armed with the power of Stands, a globe-trotting adventure from Japan to Egyptâ€”where their adversary residesâ€”begins. Meeting an array of nefarious Stand users along the way, as well as new allies, the team leads a crusade to save Holly and put an end to their enemy for good.', 1, 1989, 'Hirohiko Araki', 'Hirohiko Araki', 1, 'https://mangadex.org/covers/0d545e62-d4cd-4e65-a65c-a5c46b794918/350e0323-fc4b-4f57-a55d-26e8fb18eff9.jpg'),
('a77742b1-befd-49a4-bff5-1ad4e6b0ef7b', ' Chainsaw Man', 7.14, 'Broke young man + chainsaw dog demon = Chainsaw Man!  The name says it all! Denjis life of poverty is changed forever when he merges with his pet chainsaw dog, Pochita! Now hes living in the big city and an official Devil Hunter. But hes got a lot to learn about his new job and chainsaw powers!', 1, 1900, 'Fujimoto Tatsuki', 'Fujimoto Tatsuki', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5URXdBNS8VXoKuRIQfrWGhoUYr4VhdUDzlA&amp;usqp=CAU'),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', ' Nisekoi', 6.07, 'When Raku Ichijou was young, he made a heartfelt promise to his childhood friend that if they were to meet again, they would marry each other. Ten years have passed since that fateful day, leaving Rakus memory of her faded. But he still holds a relic of their relationship togetherâ€”a locked pendant, which his childhood friend holds the key to. He hopes to reunite with her one day, despite not remembering what she looks like.  Now a first-year student at Bonyari High School, Raku attempts to live a normal life, dreaming of becoming a public servant and marrying his crush Kosaki Onodera. However, this isnt as easy as it seems, as he is the unwilling heir to a large yakuza family, and Raku can t escape from his duties when the American Bee Hive gang wages war on his family s turf. In order to forge peace between the two feuding families, Raku is forced into a fake romantic relationship with Chitoge Kirisaki, the beautiful daughter of the Bee Hive s leader. The two quickly come to hate each other, but have to learn to live together and pretend to be deeply in love in order to keep their families at bay.  However, Raku s quest for the key to his pendant isn t becoming easier as more girlsâ€”who were all involved with his pendant in some wayâ€”enter his life. Join Raku as he juggles his false relationship, maintains the balance between warring families, and unravels the identity of the girl who will unlock his heart.', 1, 2011, 'Komi Naoshi', 'Komi Naoshi', 1, 'https://mangadex.org/covers/ce16b1c3-d6bb-41e0-8671-d8b065248ba2/b290bdfc-acd3-4aec-9447-fd69801d1ea4.jpg'),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', ' Innocent Rouge', 8.01, 'The eve of the French revolution, 1772:  The eldest brother of the Sanson family, Charles-Henri, has grown as an executioner, while his sister Marie-Joseph has been living freely in Versailles. But then Marie-Joseph s first love, a man named Alain, is killed by aristocrats. The histories of innocents plunges into the arc of the crimson revolution, Rouge.', 1, 2015, 'Sakamoto Shinichi', 'Sakamoto Shinichi', 1, 'https://mangadex.org/covers/31c3484e-1832-44c1-b43a-dee39e32c3bd/c5c41896-fbd7-42a4-980d-4067aa44e920.jpg'),
('e50022a5-b0b2-4019-8908-7579f60b3ec9', ' Touching Melody', 8.37, 'How certain were you that it wasnâ€™t a dream? Was there a certain moment where youâ€™d think â€˜Ah, deja vuâ€™. This happened to the MC who met a senior from his dreams, even though their graduation tore them apartâ€¦ They met again via teleportation?! Just what is happening? How are they able to teleport and switch places?!', 1, 2020, 'Xiao Ye Jiao Mu', 'Xiao Ye Jiao Mu', 1, 'https://mangadex.org/covers/e50022a5-b0b2-4019-8908-7579f60b3ec9/140d5d9c-dad2-46d5-abc4-24baceb05068.png'),
('c13e3bdb-d3ca-4e76-a3e0-a2aaf2bf04b8', ' Yeon s Letters', 6.04, 'In return of helping out a bullied girl, Yi Sori becomes a target herself. Feeling hurt and alone, she moves back to her father s house. She seems to be having trouble fitting in with her new classmates but then she finds anonymous letters that help her cheer up as it guides her through the school, sharing the writer s own nostalgia.', 1, 1900, 'Hyeon A Cho', 'Hyeon A Cho', 1, 'https://mangadex.org/covers/c13e3bdb-d3ca-4e76-a3e0-a2aaf2bf04b8/65cb03b8-c010-442e-8d8d-428b038b06e0.png'),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', ' Mobile Suit Gundam U.C.0096 - Last Sun', 7.06, 'In U.C. 0096, a ceremony to commemorate the end of the One Year War is held in Side 7. The Aonbarr, built to resemble the famous White Base is present at the ceremony, having transported junior high school students from Earth for the ceremony. Sun Place, one of the students who quickly becomes bored with the ceremony, enters a restricted access area, and encounters the three MS built for the ceremony, the G-First, Cannongan, and GF-Tank.At the same time, Zeon remnants on the Musai-class \"Mailmer\" attack, hoping to secure the Aonbharr as a trophy and join the Neo Zeon remnants known as \"The Sleeves\".', 1, 2014, 'Katsuragi Hiyon', 'Katsuragi Hiyon', 1, 'https://mangadex.org/covers/29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c/e2e3eaef-676a-479c-95a2-b6004137d0fe.png'),
('871c0581-f894-4772-8a3e-7ec97ab592a0', ' Kekkai Sensen: Back 2 Back', 7.79, 'Kekkai Sensen: Back 2 Back centers around the crime fighting organization \"Libra\" and their battles in Hellsalem s Lot, formerly known as New York City. Hellsalem s Lot was created in a single night when a portal to the \"Beyond\" opened, and now it is a paranormal melting pot of monsters, magic, and the everyday mundane city life. It s up to Libra to prevent the horrors of this city from spreading to the outside world.', 1, 2015, 'Nightow Yasuhiro', 'Nightow Yasuhiro', 1, 'https://mangadex.org/covers/871c0581-f894-4772-8a3e-7ec97ab592a0/e9939e45-a91f-4177-9ef1-36126b242aec.jpg'),
('667a6411-4b6f-4aa0-946f-2dbad05c0b1e', ' Records of the Mystic Gardens', 7.05, 'Gardens, isolated from the world, home to the mystical. What resides within their walls? Gods and deities? Charming vixen spirits? Ghouls and apparitions? An amalgamation of fiends, demons, beasts, and spectres, the Mystic Gardens descend and stir the world into chaos. Amidst countless creations and endless dangers, can the millions struggling to survive within the Gardens construct a safe haven for themselves?', 1, 1900, '惊面兔 (Startled Rabbit)', '惊面兔 (Startled Rabbit)', 1, 'https://mangadex.org/covers/667a6411-4b6f-4aa0-946f-2dbad05c0b1e/fade82ec-885f-4b77-8b3d-3f7653123a17.png'),
('6bf844c8-2ce4-401a-a761-3151042efe30', ' My Deskmate Alya Sometimes Hides Her Feelings in Russian', 6.91, 'Masachika Kuse sits next to Alya, a girl of Russian and Japanese descent. Sheâ€™s beautiful, haughty, and an exceptional student, while Masachika is nerdy and known for being a slacker. Heâ€™s an easy target for her comments in Russian, which sheâ€™s all too happy to translateâ€”except he can understand what sheâ€™s really saying!', 1, 2022, 'Sansan Sun', 'Tenamachi Saho', 1, 'https://mangadex.org/covers/6bf844c8-2ce4-401a-a761-3151042efe30/e87323d1-bea2-44ef-86c4-a0659c8fbb9e.png'),
('af7cc594-4f6a-4c0a-8f74-16748910dee5', ' Snow White with the Red Hair', 8.05, 'Shirayuki, a young girl born with unique apple-red hair, happens to meet a famous but foolish young man, Prince Raji. He falls in love with Shirayuki at first sight, and orders her to become his concubine.  Determined to do whatever it takes to resist his advances, but with nowhere else to go, Shirayuki cuts her hair and escapes to a neighboring country. While traversing through the forests, she meets an injured boy, Zen. After she boldly heals his wounds, he in return helps her. Meanwhile, Prince Raji sends out his henchmen to search for her.  What will become of Shirayuki? What is Zenâ€™s true character? A refreshing fantasy story between an optimistic heroine and a prince who constantly stays on her watch.  ', 1, 2006, 'Akizuki Sorata', 'Akizuki Sorata', 1, 'https://mangadex.org/covers/af7cc594-4f6a-4c0a-8f74-16748910dee5/0e55b127-0788-498e-b2d6-1182e1865044.jpg'),
('8dcdcee1-717d-4601-b828-4035ff247b31', ' Mimicry Girls', 6.2, 'The year is 2041. It has been several years since the development of Artificial Body technology, commonly known as \"Mimic.\" Captain Chris Armstrong, after suffering a serious injury from an unexpected incident during a military operation, undergoes mimic surgery and returns to the frontlines... or at least, that was the plan. After the surgery, there was something strange about his body.His reflection that he saw in the mirror had soft white skin, complimented by silky hairâ€”â€”it was a beautiful girl!?!!?Amidst the flames of war writhing with conspiracy and resentment, a makeshift team of four girl-type mimics was formed.Their name: Mimicry Girls.Shooting, CQC, infiltration. A mission was given to these girls that were specialists in all fields. That is, to escort the president s daughter from the international criminal organization \"Val Verde\" that is out for her life.After a cool tea party is the start of a cute operation!Taking on the form of girls, they face off against the world s greatest evils!An exhilarating gun-slinging comedy, presented by a four \"girl\" special forces team!', 1, 2022, 'Hitaki', 'Asanaya', 1, 'https://mangadex.org/covers/8dcdcee1-717d-4601-b828-4035ff247b31/d5af6238-c855-4034-b561-6204ced515a2.jpg'),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', ' Kouya ni Kemono Doukokusu', 6.44, 'After waking up, Mikado Shuhei found himself locked in a cage in a mysterious medical facility. Without his memories Shuhei now has to fight against beasts who can speak like humans.  A woman calling herself Akashi Maya then rescued him from this predicament.   Super fiction action!  ', 1, 2004, 'Baku Yumemakura', 'Itoh Sei', 1, 'https://mangadex.org/covers/4af2a8ae-6d71-44b1-95d7-9fb30a436e7b/4492277e-6809-447f-b267-153954cddf97.jpg'),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', ' Blue Lock', 6.97, 'Yoichi Isagi lost the opportunity to go to the national high school championships because he passed to his teammate who missed instead of shooting himself. Isagi is one of 300 U-18 strikers chosen by Jinpachi Ego, a man who was hired by the Japan Football Association after the 2018 FIFA World Cup, to guide Japan to winning the World Cup by destroying Japanese football. Ego s plan is to isolate the 300 strikers into a prison-like institution called ', 1, 2018, 'Kaneshiro Muneyuki', 'Nomura Yuusuke', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAo-_tVaJDGkoDlzfCuXTSxwamzTOwHJilPw&amp;usqp=CAU'),
('fae59015-76c4-4807-94c5-22e8b58ebb96', ' Infection Zone', 6.93, 'Newly weds Nam Gun Woo and  Baek Mei Zhen are living together in a modest apartment on Gun Woo s salary as a news cameraman. One day when they were driving in the rain the couple encountered a beggar. While trying to help the beggar an \"incident\" occurred. Shortly after, news of the \"infected\" began to spread. Of patients that escaped the hospital. The situation quickly spiraled out of control.  A story of love and survival.', 1, 2017, 'San Fu Studios', '三福动漫 San Fu Dong Man', 1, 'https://mangadex.org/covers/fae59015-76c4-4807-94c5-22e8b58ebb96/73cfd637-9937-4cf3-8b56-b0a6c030edba.jpg'),
('86a19e80-e6d6-4afd-8042-ddea780de827', ' Monstrous Heart', 8.05, 'Su Yuan, a poor student, in order to not place any additional burdens on his family, accidentally got himself enrolled into a college named, Ogus University. But soon he discovered that this institution was actually established for the protection of monsters (demons); and the physically weaker humans, in order to protect their lives, had to form partnershipsâ€”called PALâ€”with those monsters. Furthermore, as a result of his unique scent, many are drawn towards him in hopes of becoming his PAL; and at same time, he is also subjected to various attacks. That was, at least, until the day he rescued a fox covered in blood from head to toe, only to then discoverâ€¦  ', 1, 1900, 'Shi Yi Ball', 'Shi Yi Ball', 1, 'https://mangadex.org/covers/86a19e80-e6d6-4afd-8042-ddea780de827/7cf00975-f735-40f8-9157-e5ec4263c239.jpg'),
('08c3aeb3-7a39-47a0-aecc-9876646478ed', ' Akatsuki Jihen', 7.29, 'The Sukaku (Zhu He) family is a distinguished line of shamans that protects mankind from divine beasts. Our protagonist, Mutsuki, (Wang Yue) bears a promising future while his sister Uzuki (Chu Yue) completely lacks the capability to use any spiritual techniques. ', 1, 2022, 'Chigusa Ichihara', 'Chigusa Ichihara', 1, 'https://xfs-222.mpcdn.org/comic/2002/f3b/638f5f0b172d2c020cefcb3f/44393152_836_1200_480909.jpeg?acc=TjGqMrUDyFbS134Ez7OZ9g&amp;exp=1671120710'),
('3a3bbcd6-dc18-43c4-82f0-b4a9d6a433d2', ' Misunderstand', 8.34, 'This is the story of a misunderstanding that occurred among high school students. Does the situation get worse? Or is a beautiful story about to unfold?', 1, 2021, 'Gem', 'Gem', 1, 'https://mangadex.org/covers/3a3bbcd6-dc18-43c4-82f0-b4a9d6a433d2/00001438-e270-461b-a309-83528a3d7876.jpg'),
('370110b7-2d60-47f7-a8c1-b5a9bfcbaabd', ' The Lord Has Hidden Intentions', 8.53, 'I treated you like a brother, but you treated me like a love rival! You stole every girlfriend I ever had! I just wanted to get married and have a baby, why is that so difficult?! A black-hearted white lotus vs. straight guy. A wild omegaverse fantasy,  that s both sweet and seductive~~', 1, 2021, '麻辣火锅', '麻辣火锅', 1, 'https://mangadex.org/covers/370110b7-2d60-47f7-a8c1-b5a9bfcbaabd/d3f69051-6844-4bcf-9fae-071619011616.jpg'),
('c658d616-73d2-494c-bd98-ece86bf5b8e8', ' Yuribute Comic Yuri-Hime Short Story Tribute Anthology', 7.55, 'An anthology recording 12 gems published previously on the \"Yuri-Hime\" Magazine.', 1, 2020, 'Tsuke', 'Tsuke', 1, ''),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', ' Kizu Darake no Jinsei', 7.81, 'Nagai Jinsei, aka \"Bare-Knuckles Jinsei\". Born in a dumpster, raised in an orphanage, living as a yakuza, he is tough enough that he fights all his fights bare-handed, and is covered with countless knife and bullet scars from his battles. But his life changes when he saves the five-year-old Ayumi, daughter of the new police chief, Enjoji Masayoshi, and befriends their family. For the first time in his life, Jinsei feels like he s found a family of his own, and decides to start his life over, but his past and his ties to the yakuza keep getting in the way.', 1, 2006, 'Saruwatari Tetsuya', 'Saruwatari Tetsuya', 1, 'https://mangadex.org/covers/515effc1-cbd2-4e21-80e7-488ef149bf5d/65c9f66d-5a08-4417-bc96-0d293fcccc63.png'),
('0241a53e-eb23-4295-bc08-340f7082e01f', ' Rainbow City', 7.93, 'SOON', 1, 2022, 'Chaepali', 'RoGer', 1, 'https://mangadex.org/covers/0241a53e-eb23-4295-bc08-340f7082e01f/1ab76b03-04a6-4eb5-94b5-eb0ba0c637c0.jpg'),
('eb7bd53b-d2b6-48f1-a731-4dbf73230c8a', ' Cultivation Return on Campus', 6.7, 'She is the most powerful person in the fairy world, she really has no emotions. Get off the golden dragon when it rises, the white tiger becomes a cat, Suzaku flies, sleeps for nine days mysterious girl, dances at Lingxiaobao Temple, now returns to the city to become a Master of ordinary people and you donâ€™t make sense, the girl is dressed nicely, I here to teach you!', 1, 1900, 'Red Carp Studio', 'Red Carp Studio', 1, 'https://mangadex.org/covers/eb7bd53b-d2b6-48f1-a731-4dbf73230c8a/3a4f785a-6778-4faf-82e7-03abf4ed16fa.jpg'),
('87f7e7fb-a2bc-4dee-bf7c-60f1053d78fe', ' Believe My Sign', 8.15, 'Soo-jeong is always getting on the self-absorbed Eunchan s nerves since he first appeared before him out of the blue.Soo-jeong feels the same way towards the socially inept Eun-chan, who is often harsh towards him.Their ironic relationship develops as they try to survive together, even though they don t trust one another.What should you trust? Your past experiences and memories, or intuition?', 1, 1900, 'Shark', 'Sangeo', 1, 'https://mangadex.org/covers/87f7e7fb-a2bc-4dee-bf7c-60f1053d78fe/8e1eb83f-bcc1-47a3-993a-b88903b5fd83.png'),
('ccb654fd-d4de-44d1-a9c1-f58ba34f3510', ' Fate/Grand Order - Daily Chaldea (Doujinshi)', 6.94, 'Daily Chaldea is an unofficial daily slice-of-life fancomic created using art assets from the game Fate/Grand Order and building upon the existing lore of the franchise. The story follows the adventures of genderswapping protagonist Ritsuka Fujimaru and the many Servants they ve summoned, with the tone ranging from comedic to philosophical. The comic is  live  with the NA server of Fate/Grand Order, with new characters appearing in the comic around the time they appear in the game and comics often referencing recent events in the game. Enjoyment of this comic relies heavily upon the reader s familiarity with the game and its characters, so the author recommends playing Fate/Grand Order before reading this comic.    This comic is being uploaded to MangaDex by reader request and with the approval of MangaDex staff. All art is copyright TYPE-Moon / FGO Project, Aniplex Inc., Lasengle, and other copyright holders as appropriate. This comic is not for profit (through ad revenue or otherwise).    Some early use the original white backgrounds. Later comics have darker backgrounds and additional art assets for improved quality.', 1, 2019, 'Rednal', 'Fgo Project', 1, ''),
('20598dda-2d24-487b-bb3e-cfa795719492', ' The World Without You', 8.22, 'Ever since Han Saegae was a child, he would constantly dream about this one particular man.After seeing him countless times in his dreams, Han Saegae eventually fell in love with him. But suddenly, that man disappeared from his dreams, never to be seen again.One day, while Han Saegae was trying to get over the fact that the man from his dream was not real. Woo Ijun appeared in his life.Ijun s bright, blond hair, and the mole on the right side of his eye allowed Saegae to recognise the man from his dreams once more.To keep Ijun by his side, Saegae contacts Ijun, asking him if he could act out a script he had written for his project.And so, Ijun ends up acting for Saegae, butâ€¦ I can remake it. A world where he will never disappear. ', 1, 2022, 'Girang', 'Girang', 1, 'https://mangadex.org/covers/20598dda-2d24-487b-bb3e-cfa795719492/7a4256e8-cb35-4a78-808c-f5c3f3d12370.jpg'),
('d9f46e20-d66a-4771-a126-92d97b09bc77', ' Rengokujima -Polar Love-', 7.28, 'Five travelers, 3 women and 2 men, wash ashore a remote island, survivors of ship sinking.Finding themselves in this extreme situation, their instinct and conscience intersect and collide!Crossing thoughts, feelings of love and hate mixed with trust and betrayal. A story of uncontrollable libido and murderous intentâ€¦', 1, 2020, 'Nanairo Kasuga', 'Kubu Kurin', 1, 'https://mangadex.org/covers/d9f46e20-d66a-4771-a126-92d97b09bc77/e5d63f7f-5369-4bd0-ad82-e226f4c59f63.jpg'),
('744ba2b5-59dd-421d-98ab-4cb2c2b77c80', ' Like Two Peas in a Pod', 7.81, 'It began with a mistake. When Tanaka and Nakata are given each otherâ€™s papers back, they come to a horrible realization... They have almost identical names. And test results. And body types. And taste in fashion. And sports scores. And hobbies. The list goes on, and as annoying as it is, at least they know they always have each other. And maybe, just maybe, their similarities run even deeper.', 1, 1900, 'Kanbe Gorou', 'Kanbe Gorou', 1, 'https://mangadex.org/covers/744ba2b5-59dd-421d-98ab-4cb2c2b77c80/f51ba8b6-008f-4669-ae1d-53ebd9d0b74e.png'),
('c00d5181-e971-4542-ac69-27786c9855f3', ' Kekkon Surutte, Hontou desu ka?', 7.02, 'Takuya and Rika are co-workers for a travel agency and have barely ever interacted as they are both introverted, anti-social people. Both are doing their jobs as normal when an announcement from the higher-ups comes down: in one year, an overseas branch will be opening in Siberia, and an employee from their location will be sent to work there! While there s no telling who will be chosen to go, it is explained that people who are married and have families are far less likely to be sent! Neither Takuya nor Rika want to go to Siberia! Desperate to protect their solitary lives, they develop a plan: pretend that they are getting married to each other! Will they be able to keep up this charade for 365 days, and, maybe, even fall for one another in that time?', 1, 2020, 'Wakaki Tamiki', 'Wakaki Tamiki', 1, 'https://mangadex.org/covers/c00d5181-e971-4542-ac69-27786c9855f3/19c4125b-59f1-4385-be32-490b505cd648.jpg'),
('232702e4-7174-4fa3-a16a-c09d49648b1a', ' The Witches of Adamas', 8.04, 'Satou Yukinari is an ordinary high school boy. However, while playing a game of pocket pool one day, he suddenly felt as if he was passing a kidney stone. But this kidney stone was shiny and pink?  A trip to the hospital shows that Yukinari has a medical malady called Adamasu Syndrome - in short, whenever he jets his juice, a little diamond pops out of his saltshaker. Of course, it s painful as hell, to the point where even the act of popping the champagne bottle will shave off his lifespan. And of course, once his secret comes out, dozens of women flock to seduce him, their best friend now stuck inside his best friend. Can Yukinari survive when the world wants to sell his seed?', 1, 2018, 'Imai Yuu', 'Imai Yuu', 1, 'https://mangadex.org/covers/232702e4-7174-4fa3-a16a-c09d49648b1a/6e5e4f1d-c25a-47aa-9c8e-e1a3359a2594.jpg'),
('fa8b0760-41b3-46bd-8c44-0ede90772a80', ' Don t Get Caught! xxx', 8.78, '\"Why are you coming out there!!!\" I couldn t forget my school crush, Seo Jungwoo.Eun Se-eun is serializing a BL webtoon based on Jungwoo and himself.When my friend told me that Jungwoo already left my hometown, I return to find a peace of mind.However, contrary to his friend s words, he encounters Jungwoo, who is now working at the post office in his hometown. - Madeleine Scans -', 1, 2022, 'Lee (III)', 'Lee (III)', 1, 'https://mangadex.org/covers/fa8b0760-41b3-46bd-8c44-0ede90772a80/8b0b7d81-9b84-4b10-a99f-c96617f37b80.jpg'),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', ' Baraou no Souretsu', 8.02, 'Richard, the ambitious third son of the House of York, believes he is cursed, damned from birth to eternal darkness. But is it truly fate that sets him on the path to personal destruction? Or his own tormented longings? Based on an early draft of Shakespeare&acirc;&euro;&trade;s Richard III, Aya Kanno&acirc;&euro;&trade;s dark fantasy finds the man who could be king standing between worlds, between classes, between good and evil.', 1, 2013, 'Kanno Aya', 'Kanno Aya', 1, 'https://adala-news.fr/wp-content/uploads/2022/03/Baraou-no-Souretsu-image.jpg'),
('aa67625d-7dbb-4f91-b1a0-be3b3c25711d', ' Doppelganger', 6.01, '\"It s okay. It ll be okay.\" On November 8th, Shinwoo, who is holding on to life by a thread, is saved by Han s warm words.Afterwards, Han pursues Shinwoo, and the two quickly become close.However... \"You get tired of toys you ve played with for a while.\" For reasons unknown, the two grow apart, and just like that, 13 years pass. The two meet again as members of society, but for some reason, Han doesn t even remember Shinwoo...\"Who is he?\"Slowly, Han remembers what happened with Shinwoo, realizes all of his habits are related to him, and figures out why he forgot him.\"I only realized it today, but I think I like you a lot.\"He tries expressing his affection for Shinwoo in earnest, but the wary Shinwoo does not open his heart easily.Han, worried about Shinwoo s overly pessimistic attitude, learns about Shinwoo s past- which he hadn t even cared about before...Can their clock start again?', 1, 1900, 'EunEun', 'EunEun', 1, 'https://mangadex.org/covers/aa67625d-7dbb-4f91-b1a0-be3b3c25711d/74de0142-bfea-4917-803d-67cc08f70f08.jpg'),
('b9b2fbc4-e351-406c-a468-799be14033df', ' TenPuru - No one can live on loneliness', 7.94, 'That s right, I ll become a monk! Not knowing what to do with his worldly desires, Akagami Akemitsu aims to live a stoic life. However, the thick karmic blood flowing in him will not permit it!', 1, 1900, 'Yoshioka Kimitake', 'Yoshioka Kimitake', 1, 'https://mangadex.org/covers/b9b2fbc4-e351-406c-a468-799be14033df/6cbef8e2-4bec-4da2-89c2-79f37fe082dd.png'),
('d97652f6-1e9c-40b6-8e8e-904ce6c51d50', ' Shuumatsu no Harem Fantasia', 8.21, 'It s year 998, and the world has been corrupted by darkness. The next head of the small border kingdom of Nagara, Ark, has feelings for his cousin, Aurelia, but a political marriage to the Crown Prince has separated them. In order to get her back, Ark desires immense power, but a mysterious dark elf, Rati, appears in front of him.  In exchange for a promise, she will give him \"the power to rule the world.\" An erotic and dark fantasy begins!', 1, 1900, 'LINK', 'SAVAN', 1, 'https://mangadex.org/covers/d97652f6-1e9c-40b6-8e8e-904ce6c51d50/4c5216bb-e3d1-44ba-9e0e-7e731cca4551.jpg'),
('076028a7-197a-4329-bbd5-d13186bbd990', ' Boyfriend of the Dead', 8.57, 'In a zombie apocalypse, a woman relentlessly fights for the search for new clothes so fiercely that the zombies begin to organize for better living conditions, on the other hand, a zombie with a high level of cooking wisely chooses its prey, demanding the seal. friboi, and as fate would have it, these two end up becoming lovers.', 1, 2017, 'Ushio', 'Ushio', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8y0uGI4yy5HtyMhXBfH2cWJmnnQAZE3Xxrg&amp;usqp=CAU'),
('accc086b-2673-487d-8e06-a48c1d7c5a52', ' Poison Candy', 6.49, 'Young Sam Chase s life is turned upside down when he discovers he is infected with the SKAR virus. The SKAR virus has infected adolescents the world, granting them powers and a death sentence. Follow Sam as he fights to survive in a world of corruption, disease, and politics', 1, 1900, 'David Hine', 'Hans \\\"Hanzo\\\" Steinbach\"', 1, ' `https://mangadex.org/covers/accc086b-2673-487d-8e06-a48c1d7c5a52/5c3ab518-1fd7-41c5-9b02-1841b3ca658a.png'),
('b3f3145a-6d58-4935-9942-79abe4026aab', ' Revenge with the Demon King', 6.01, 'Yun Yehan, a complete moron and a loser in everyone s eyes, was put to death by her older sisterThe soul of a modern girl is reborn in her body when she wakes up, and she becomes \"the avenger.\"Her mean-hearted sister and heartless fiancÃ© have to kneel before her and beg for their lives', 1, 1900, 'Kuaikan Manhua', 'Kuaikan Manhua', 1, 'https://mangadex.org/covers/b3f3145a-6d58-4935-9942-79abe4026aab/606184cb-e762-4dc1-932c-fbee9a7d3f42.png'),
('de7769da-b078-4978-8458-3d5dec2f99af', ' Brother for Rent', 7.62, 'What the young girl rents is not a movie, but a brother, and the wonderful warm feeling of spending time with him. With her parents deceased, and her once kind brother changed&acirc;&euro;&brvbar; What the girl seeks is the warmth of a family that she once had. Even if it s a rental one.', 1, 1900, 'Ichiiro Hako', 'Ichiiro Hako', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNdPudaWrJqKBnhB3PtMLmChiQt_TlnpMNnw&amp;usqp=CAU'),
('600f467c-9613-4056-aa21-bb2ecc295b84', ' I\'m Sick and Tired of My Childhood Friend\'s, Now Girlfriend\'s, Constant Abuse so I Broke up With Her', 6.45, 'My childhood friend is also my girlfriend. A dream come true, right? Hell no. She insults me on a daily basis. She grinds my dignity into shreds and it takes a toll on my mental well-being. I can&acirc;&euro;&trade;t take it anymore.So I&acirc;&euro;&trade;m left with no choice, I&acirc;&euro;&trade;m going to break up with her. In order to maintain my sanity, it&acirc;&euro;&trade;s the only option.And thus, the story of my break up begins&acirc;&euro;&brvbar;', 1, 2022, 'Ononata Manimani', 'U35', 1, 'https://mangadex.org/covers/600f467c-9613-4056-aa21-bb2ecc295b84/9ede96fb-e9e6-43dd-97f2-09b3d0e0d9ba.jpg'),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', ' Fire Punch', 7.19, 'In the not-too-distant past, the Ice Witch blanketed the world in snow, starvation and madness, leading the inhabitants to seek their salvation in fire. With that, an unusual destiny unfolds for two young orphans, Agni and Luna, blessed with the ability to regenerate. But will this ability prove to be more of a curse than a blessing?Nominee for the 2017 Manga Taisho Award.', 1, 2016, 'Fujimoto Tatsuki', 'Fujimoto Tatsuki', 1, 'https://mangadex.org/covers/6fef1f74-a0ad-4f0d-99db-d32a7cd24098/b437f317-6f1e-48ae-a8a0-54cdd2abfd2f.jpg'),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', ' Saijou no Meii', 6.97, 'Saijou Mikoto was born with a bad heart. It was thanks to the incredible skills of Japanese leading pediatric heart surgeon, Shindou Mamoru, that he survived into adolescence, and he s decided to show his gratitude by becoming the greatest pediatric surgeon the world has ever known.', 1, 2008, 'Hashiguchi Takashi', 'Hashiguchi Takashi', 1, 'https://mangadex.org/covers/6e16d8d0-21ba-46b1-9323-ee42ef2dbd42/fcd73771-67b5-47ba-935c-709cd99f7c03.jpg'),
('6e44705b-9f80-42f6-9ebb-1141fbe8320e', ' Nozomanu Fushi no Boukensha', 7.31, 'The protagonist was an eternal copper rank adventurer of the frontier area, Lent. With his bad luck, he meets a powerful monster inside of the labyrinth and is defeated, before turning into a bone manã€ŠSkeletonã€‹.   Agonizing because he can t go to town in his current condition, he recalls the existence of monster evolution, and, with a goal to gain a body with muscle, he goes to defeat the monsters of the labyrinth.', 1, 2017, 'Okano Yuu', 'Nakasone Haiji', 1, 'https://mangadex.org/covers/6e44705b-9f80-42f6-9ebb-1141fbe8320e/f87430b2-a9aa-4d82-a633-24af20592d90.jpg'),
('7a19cf0c-28b4-4f3e-9b51-1843029601fb', ' Zombie no Afureta Sekai Ore Dake ga Osowarenai', 8.84, 'Takemura wakes up after falling ill for 3 days and realizes the world has been overrun by zombies but for some strange reason he is not being attacked by them! What will he do now with this great power he has?', 1, 2021, 'Uraji Roroku', 'Masuda Chihiro', 1, 'https://mangadex.org/covers/7a19cf0c-28b4-4f3e-9b51-1843029601fb/31713fff-d683-4cc2-8119-f246525b8ce1.jpg'),
('e66ed7ea-583f-45c8-81e5-b610b1462fee', ' Severance', 6.34, 'Li Chen is a teenager who, after consuming a powerful elixir, became an immortal for 1000 years. Ye Qing Yi is a sickly man who happens to look like the deity who can make the elixir. They both want something from the other, but will they be able become each other s remedy?', 1, 1900, 'Kuaikan Manhua', 'Kuaikan Manhua', 1, 'https://mangadex.org/covers/e66ed7ea-583f-45c8-81e5-b610b1462fee/9a90e00e-0896-4f9f-b3bf-3e25994e1e96.png'),
('c62b73e5-0cfb-4aef-9425-60393477ab6c', ' Dragon Ball Kakumei', 8.69, 'The story in Dragon Ball Kakumei picks up right after the Tournament of Power and deals with the consequences of Android 17 restoring the erased universes. In addition to the six universes destroyed by Zeno, the wish brought back Universe 19, which has warriors that are powerful enough to take down Zeno and the angels.', 1, 2021, 'Darkows', 'Darkows', 1, 'https://mangadex.org/covers/c62b73e5-0cfb-4aef-9425-60393477ab6c/c285fdcd-46e7-4b8c-9e02-0f1f15140c57.jpg'),
(' f58c6ee0-42f7-4e4a-901a-22cdb03a4e38', ' Makikomarete Isekai Teni suru Yatsu wa, Taitei Cheat', 7.48, 'One day  s lunch break, suddenly a male high school student Yuzo Ogata who has been transferred to another world of sword and magic together with four other friends.   According to the Princess of Space-Time Magician, a foreign world who summoned them, they want them to beat the Demon Lord as Heroes to save this world.Suddenly I was surprised at four friends \"Temple\", but it was a relaxing expression â€¦ â€¦ where the princess told of a startling fact!\"`?? There should only be four braves though?\"\"A man who was mistakenly summoned to a different world\"What will be in store as to his fate?', 1, 2017, 'Kaitou Hakobune', 'Kamitsuki Manmaru', 1, 'https://mangadex.org/covers/f58c6ee0-42f7-4e4a-901a-22cdb03a4e38/5a284c82-27ef-4428-a83c-12c193974aa1.jpg'),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', ' Oh, Our General Myao', 6.57, 'The Socialist Republic of Coldona. A socialist nation that broke all diplomatic relations with other countries, asserting its tough stance. But the tough leader of the nation suddenly died. Following its hereditary succession system, a new leader was born in the nation of Coldonaâ€¦ a 9-year-old girl, Myao Chobirov! Can the world s most carefree leader of a nation lead the world into a new age of peace? The slapstick political drama of the dictator girl!!!!', 1, 1900, 'Matsuda Kouta', 'Morichika', 1, 'https://mangadex.org/covers/7f1bafc4-67b8-45b3-968b-39729dfc9ab7/ed9e1b81-e0ed-416c-904c-91859572a6de.jpg'),
('bdd0a765-c80b-4244-a160-38e3e59dcbe7', ' Unparalleled', 6.43, 'Chen Daolin was only trying to enjoy his noodles, but he suddenly found himself in another worldExcited about the dangerous new world, he decided to become its unparalleled heroFollow Chen Daolin s journey as he discovers the secret of the Tulip family s descendant', 1, 1900, 'Changsha Angel Culture Co., Ltd.', 'Changsha Angel Culture Co., Ltd.', 1, 'https://mangadex.org/covers/bdd0a765-c80b-4244-a160-38e3e59dcbe7/4ac462a4-f1eb-4b18-a5a0-8d482ab7f087.png'),
('6378f4b1-f9a0-4233-b89a-95021535d100', ' Mitsuishi-san is Being Weird This Year', 7.18, 'The daily banter of two idiots in love.', 1, 2019, 'Shirosawa', 'Shirosawa', 1, 'https://mangadex.org/covers/6378f4b1-f9a0-4233-b89a-95021535d100/0ffc3406-ce59-4b36-8390-575a6b5eab44.jpg'),
('0f8d38bd-84ff-4d72-a1b7-fce4f05b696b', ' The witch of Stia', 8.87, 'undefined', 1, 1900, 'Makise Shoun', 'Makise Shoun', 1, 'https://mangadex.org/covers/0f8d38bd-84ff-4d72-a1b7-fce4f05b696b/23ec4607-2324-4e00-96fa-b7c029d5803d.jpg'),
('83cc2814-04e4-4434-9876-ba7eaafd32f5', ' I m the Master of This Life', 6.5, 'The guardian stone of the family appeared to me. To me, the illegitimate child, not my half-sister who is my enemy. Since then, my treatment changed. It really felt like I was part of the family. However, as I died, I realized that it was all an illusion at the hands of my fiancÃ©. That everything he did for me was a scheme by my half-sister to take the guardian stone.[Don t you want to take revenge on those who thoroughly deceived and killed you?]I decided to accept the devilishly sweet offer. This time, I will definitely get the guardian stone and become the head of the household. I will give you back as much or more than what I suffered. Until then, I will believe no one. But- From now on, no matter what happens, you must never stop and run.â€The image of him trying to save me, his eyes running in despair, couldn t be erased from my mind. The fiancÃ© I loved was looking at me as I died, but why were you running to me with those eyes. You, who I thought was my sister s person... I want to know where your sincerity lies.', 1, 2022, 'Rascca', 'fn_momo', 1, 'https://mangadex.org/covers/83cc2814-04e4-4434-9876-ba7eaafd32f5/57950228-53e6-4dfb-ae4e-eedc69282966.jpg'),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', ' Monkey Peak', 6.8, 'A group of employees from the Fujitani Pharmaceutical Company are on a hiking trip. After the company suffered a crisis, the CEO hopes to improve teamwork and morale among new and old employees with this trip. Not everyone is as excited as he is. Unfortunately for them, they soon find themselves having to deal with problems that they weren t prepared for.  What s going to happen to these employees? Will they fall in love with hiking? Will they be able to work together, get along well, and bring the company back to its feet? Read and find out in this heartwarming story of adventure, friendship, and teamwork!', 1, 2016, 'Shinasaka Kouji', 'Kumeta Akihiro', 1, 'https://mangadex.org/covers/1fc1355b-9c02-48e2-a457-094b592ecd9c/ea33182d-54c3-4f67-b72d-72f2c26463d2.jpg'),
('40c373ac-ab7c-4582-bd0e-14893faefb8b', ' Between Yearning And Obsession', 8.21, 'Julia, a lowly servant from the marquess  estate, has no idea how she lost the ability to speak. With no memories before the age of twelve, she s simply been told a certain incident traumatized her. While everyone treats her harshly at the estate, Julia has been able to barely survive with the help of Camille, the second son of the marquess. Camille even helps her speak again using his special power, ', 1, 2022, 'Karasuma Shimei', 'Sorajima Studio', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4IOruApFPWUyoBrq8Nm-pO4WIW2m1bmHFMw&amp;usqp=CAU'),
('c7a10d9f-6628-4d58-b27a-5081ec3db27b', ' Binbou Reijou no Kanchigai Seijo Den', 7.74, 'Even though I m a Baron s daughter, I have to become an adventurer? On my journey to make money in order to get our barony out of poverty, I died in a dungeon&acirc;&euro;&brvbar;wait a minute, was I reborn?! Everything is happening exactly as I remember it did. This time, I won t let our family become poor! I promise we will always have food on the table, and that I will grow up and marry into a rich family! Wait, father needs treatment for an illness?! The town is going through an epidemic?! What is going on? Why did I become an adventurer again?!', 1, 2021, 'Maji Manji', 'Yugyoji Tama', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQceAjP4syfv-ggDBeDAjfYBXD513U_JmyMtQ&amp;usqp=CAU'),
('6670ee28-f26d-4b61-b49c-d71149cd5a6e', ' Mieruko-chan', 6.18, 'All of a sudden, Miko is able to see grotesque monsters all around her; but no one else can. Rather than trying to run away or face them, she instead musters all of her courage andâ€¦ ignores them. Join in on her day-to-day life as she keeps up her best poker face despite the supernatural goings-on.', 1, 2018, 'Izumi Tomoki', 'Izumi Tomoki', 1, 'https://mangadex.org/covers/6670ee28-f26d-4b61-b49c-d71149cd5a6e/c395e835-a130-4bcb-8ff5-cebbaeda819a.jpg'),
('02ffca35-bb17-4f56-a8af-c447f2ee0720', ' Stories After Dark: Malaysia II', 7.16, 'Welcome, reader, to your worst nightmare! Are you prepared to experience some of Asia s most blood-curdling tales, collected for your personal fright? Not for the faint of heart or yellow of liver, you have been warned!', 1, 1900, 'Choon Liang', 'Choon Liang', 1, ' `https://mangadex.org/covers/02ffca35-bb17-4f56-a8af-c447f2ee0720/463341c0-de00-4f0a-a780-8999d9ea3035.png'),
(' 64113fcd-4f8c-41bc-8fa4-18a83076da2e', ' The Last Human', 7.76, 'Zuo Tianchen is the last living human in a mutated zombie-infested city. Just when he was sure he d died, he finds his soul returned to just before that ill-fated day ten years ago. He swears he ll protect the people important to him this time round and reunite with his past lover. Watch his struggles to survive equipped with his memory of the next ten years!', 1, 1900, 'Amazing Works', 'Amazing Works', 1, 'https://mangadex.org/covers/64113fcd-4f8c-41bc-8fa4-18a83076da2e/8a8d42b9-86f3-4856-b41f-cbae24199884.jpg'),
('4ada20eb-085a-491a-8c49-477ab42014d7', ' The Beginning After the End', 8.01, 'King Grey has unrivaled strength, wealth, and prestige in a world governed by martial ability. However, solitude lingers closely behind those with great power. Beneath the glamorous exterior of a powerful king lurks the shell of man, devoid of purpose and will.Reincarnated into a new world filled with magic and monsters, the king has a second chance to relive his life. Correcting the mistakes of his past will not be his only challenge, however. Underneath the peace and prosperity of the new world is an undercurrent threatening to destroy everything he has worked for, questioning his role and reason for being born again.', 1, 2018, 'TurtleMe', 'Fuyuki23', 1, 'https://mangadex.org/covers/4ada20eb-085a-491a-8c49-477ab42014d7/beff67b2-b671-4018-894c-33f7cb068f48.jpg'),
('5fcbcc88-5f3b-4222-bbd8-5f5952b8a506', ' Jinhua Kuangchao', 7.58, 'After his death, Duan Fei regresses 20 years back in time to just a few key hours before the virus catastrophe is set to begin, and was given a chance to remedy the regret he has shouldered for the past 20 long years. He utilizes all the knowledge he has amassed prior to his regression to arm himself in preparation for the oncoming apocalypse. His newly acquired â€˜Evolutionary Treeâ€ is also helping him constantly improve his strength. Duan Fei, who had to give it his all just to barely survive in his previous life, is now the hero and future savior of the world.', 1, 2021, '伏兹', '伏兹', 1, 'https://mangadex.org/covers/5fcbcc88-5f3b-4222-bbd8-5f5952b8a506/ba3f475b-5299-4993-b6d4-d744ceb9a1fd.jpg'),
('fa938045-2957-48d3-abba-4b7e34557baf', ' I Thought It Was Time!', 7.77, 'Lariette, the princess of the Duke of Blanchett, was told she only had three months left to live. She decided that she didn t want to go quietly and she decided to create and complete her bucket list! 1. Treat her maid Anne to cakes2. Gain independence and wealth3. Get rid of her fiance, the Marquis of Secreb4. Date someone handsome for three months5. Take a trip to the west!...But it was only after she ran away that she realised... the fact that a time-limited diagnosis was a complete misdiagnosis!', 1, 2022, 'Ari Choi', 'Ari Choi', 1, 'https://mangadex.org/covers/fa938045-2957-48d3-abba-4b7e34557baf/ec31182e-47c7-400f-9322-d89a47123dbe.jpg'),
('7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', ' Asahina Wakaba and her OO boyfriend', 7.63, 'Asahina Wakaba is a shy and slightly awkward girl. She is coerced by her classmates as a punishment game to confess to Iruma Haruto, the number one most hated boy in school. Though her relationship with Haruto starts out with an air of gloom for Wakaba, her depressing school life is dyed with color when she discovers that they share more in common than what she thinks.', 1, 2019, 'Hazama Takashi', 'Hige', 1, 'https://s1.zerochan.net/Asahina.Wakaba.600.2797629.jpg'),
('456415b4-5d90-4262-b549-34a18153039d', ' A scary boss, but from now on she s going to be happier and happier.', 7.89, 'My boss is very scary, but from now on I will do my best to make her happier.', 1, 2022, 'Yano Toshinori', 'Yano Toshinori', 1, 'https://ta1.yx247.com/comics/pic16/15/85839/7620349/5f6780632f5d27dd0cded5fc9361169e.jpg'),
('80d23647-1851-4cf9-ada8-eec8912813a7', ' Be My Only Love', 8.88, 'Xiao Nuo agrees to take her cousin s place as a scapegoat to save her grandmother s life. She is sold to Mo Xijue, a handsome, young, and wealthy company president with a terrible temper. A fluffy romance following the relationship between a possessive CEO and a girl with a big secret!', 1, 1900, 'Kuaikan Manhua', 'Kuaikan Manhua', 1, 'https://img.webnovel.com/bookcover/20327378306427301/600/600.jpg?cv=1625047061118&amp;imageMogr2/quality/40'),
('08c65669-e94c-4df1-91c2-37ef15084a0d', ' The surviving girl and the devil s egg', 6.11, 'undefined', 1, 2022, 'Giba-chan', 'Giba-chan', 1, 'https://mangadex.org/covers/08c65669-e94c-4df1-91c2-37ef15084a0d/6c1feccf-4155-4e75-9e9c-88c8fb18ff48.jpg');
INSERT INTO `manga` (`id_manga`, `nom_manga`, `prix`, `description`, `état`, `année`, `auteur`, `dessinateur`, `id_pays`, `lien_image`) VALUES
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', ' Nana to Kaoru: Last Year', 6.58, 'New Nana and Kaoru spinoff, serialized on the newly released (28/11/18) digital magazine \"Harem\" (ãƒãƒ¬ãƒ ), aiming at adults.  story takes place in the third year of high school, after the ending of the manga, with [Black Label (aka Arashi)](https://mangadex.org/title/243) occuring during summer vacation.  ', 1, 2018, 'Amazume Ryuta', 'Amazume Ryuta', 1, 'https://mangadex.org/covers/0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05/6740cec9-ee80-4c7c-a3d1-ab327e425867.jpg'),
('7532f86a-023b-482a-8d53-670eff0484c5', ' Duchess Crow', 8.82, 'Could love bedazzle like a gem? For Melisa, the best gemologist in Annabel, no love can outshine a gem. She d rather remain single and devoted to her career! But just when she thinks she has it all figured out, Duke Lewis Winterfelt, the most eligible bachelor in all the kingdom, asks for her hand in marriage â€” through a contract!The Duke of Winterfield, who drives thousands of girls crazy, broke into my shop and proposed to me? All of a sudden talking about a marriage contract, asking me, a gem appraiser, to help replace the fake crown of the royal family in return for a huge amount of wealth? What a joke, I won t agree to such a dangerous thing, even if... even if he looks handsome, absolutely not.', 1, 2021, 'Bittoru', 'Sbread', 1, 'https://mangadex.org/covers/7532f86a-023b-482a-8d53-670eff0484c5/7a6b2ff0-98bf-4469-a041-1e8ebe0c6701.png'),
('5b93fa0f-0640-49b8-974e-954b9959929b', ' Girls  Last Tour', 7.88, 'Civilization is dead, but Chito and Yuuri are still alive. So they hop aboard their beloved Kettenkrad motorbike and aimlessly wander the ruins of the world they once knew. Day after hopeless day, they look for their next meal and fuel for their ride. But as long as the two are together, even an existence as bleak as theirs has a ray or two of sunshine in it, whether they re sucking down their fill of soup or hunting for machine parts to tinker with. For two girls in a world full of nothing, the experiences and feelings the two share give them something to live forâ€¦  ', 1, 2014, 'Tsukumizu', 'Tsukumizu', 1, 'https://mangadex.org/covers/5b93fa0f-0640-49b8-974e-954b9959929b/760a82b6-ff87-4da2-971b-29a11ad535bc.jpg'),
('84e1c982-ce5f-4c00-b718-6ccab4e06caf', ' Ashita Kimi no Mono ni shite', 8.4, 'Yuki is a quiet, average boy who falls head over heels for the confident and cool Hayato in his new high school class. The two hit it off with an easygoing friendship, but when Yuki realizes that a female classmate has a crush on his friend, he tries to put some distance between them. As his feelings come to a head, he finally confesses to Hayato... who confesses right back!', 1, 2021, 'Miyama Kaoruko', 'Miyama Kaoruko', 1, 'https://cdn.myanimelist.net/images/manga/1/254296.jpg'),
('132eff91-b4f1-42d1-982c-cb1aec6f0a8a', ' So I Married an Anti-Fan', 8.79, 'A romance between famous K-pop star WhoJoon and his official anti-fan reporter Lee Geun-Young who end up cohabitatingâ€¦! How far would you go to take down the person you hate most? With no house, no job, and nothing left to lose, Geunyeong Lee is willing to risk it all to bring down the countryâ€™s national treasure, Korean superstar Who Joon. But once the two really get to know each other, bringing him down suddenly becomes a lot harder. Will she be able to ruin him once and for all after she learns the truth about the man behind the popstar?', 1, 2018, 'Kim Eun Jeong', 'Jaerim', 1, 'https://mangadex.org/covers/132eff91-b4f1-42d1-982c-cb1aec6f0a8a/885de73c-38c0-465e-a083-d88fd641d0e7.jpg'),
('a1c7c817-4e59-43b7-9365-09675a149a6f', ' One Piece', 6.11, 'Gol D. Roger, a man referred to as the \"Pirate King,\" is set to be executed by the World Government. But just before his demise, he confirms the existence of a great treasure, One Piece, located somewhere within the vast ocean known as the Grand Line. Announcing that One Piece can be claimed by anyone worthy enough to reach it, the Pirate King is executed and the Great Age of Pirates begins.  Twenty-two years later, a young man by the name of Monkey D. Luffy is ready to embark on his own adventure, searching for One Piece and striving to become the new Pirate King. Armed with just a straw hat, a small boat, and an elastic body, he sets out on a fantastic journey to gather his own crew and a worthy ship that will take them across the Grand Line to claim the greatest status on the high seas.', 1, 1997, 'Oda Eiichiro', 'Oda Eiichiro', 1, 'https://mangadex.org/covers/a1c7c817-4e59-43b7-9365-09675a149a6f/1dcc8e3c-0504-46f9-8588-e248e98250a1.jpg'),
('40bc649f-7b49-4645-859e-6cd94136e722', ' Dragon Ball', 6.15, 'Dragon Ball follows the adventures of Goku from his childhood through adulthood as he trains in martial arts and explores the world in search of the seven mystical orbs known as the Dragon Balls, which can summon a wish-granting dragon when gathered. Along his journey, Goku makes several friends and battles a wide variety of villains, many of whom also seek the Dragon Balls for their own desires. Along the way becoming the strongest warrior in the universe.Part II of Dragon Ball is also known as  Dragon Ball Z  in North America. **-The second best selling manga in history**', 1, 1984, 'Toriyama Akira', 'Toriyama Akira', 1, 'https://mangadex.org/covers/40bc649f-7b49-4645-859e-6cd94136e722/51c0756f-a053-46d0-a405-246a78541df2.jpg'),
('37366974-0967-447c-8555-22b8744aa531', ' Tadareta Koi ni wa Itashimasen!', 6.4, 'On his first day living alone in Tokyo, Miyazawa Kyouhei â€“ a university student who came from the countryside â€“ encounters Takara Tomohiro, a debauched playboy who lives next door. Takara enjoys poking fun at him for being a country boy though, which makes Miyazawa feel self-conscious around city people.   One day, Miyazawa accepts an invitation to Takara s house and warms up to him a little after experiencing his kindness. During the visit, however, Miyazawa mistakes a condom wrapper for a piece of chewing gumâ€¦!?   Takara asks, \"Do you want me to put it on you?\", and begins to tease Miyazawa s lower body. Suddenly a love story between a pure country boy and a playful city boy begins!', 1, 2018, 'Rakuta Shoko', 'Rakuta Shoko', 1, 'https://mangadex.org/covers/37366974-0967-447c-8555-22b8744aa531/804e891b-6cdf-4f77-82f8-83639cb1016b.jpg'),
('64c59add-698a-4260-8671-848356f26eab', ' Modern Villainess: Itâ€™s Not Easy Building a Corporate Empire Before the Crash', 6.95, 'In the tough times after the Japanese economic bubble burst, a career woman suffering through the aftermath reincarnates as Keikain Runa, the villainess of an otome game with a modern setting! However, not long after reincarnating, she realizes just how dire a situation her family is in due to the ongoing financial recession. Using knowledge from her previous life, Runa sets out to rescue her new family from crisis and stand against the tide of  the times  that caused her past life to end in misery.', 1, 2022, 'Tofuro Futsukaichi', 'Data', 1, 'https://mangadex.org/covers/64c59add-698a-4260-8671-848356f26eab/7cd54fbf-2db8-4937-9bb5-33aaf7975589.jpg'),
('faaef9a1-7358-4a50-9703-c26c35d32644', ' My King, My Male Lead', 7.63, 'The arrogant movie queen VS the infatuated emperor, a love story that spans through a thousand years...Time-travel, revenge, showbiz, letâ€™s see how this domineering female lead takes back what sheâ€™s lost! The love story between Chu Yan, the condescending movie queen, and the infatuated emperor who traveled to the modern world. The female lead was originally an arrogant and popular actress with acid tongue, but she was framed and disfigured and her career was ruined. In order to help the female lead find the real culprit, the male lead and the female lead lurked into the showbiz under aliases. The movie queen in the past now became the new artist s assistant. Can they find out the truth? Can Chu Yan counterattack and regain everything she once had?', 1, 1900, 'Iciyuan', 'Iciyuan', 1, 'https://mangadex.org/covers/faaef9a1-7358-4a50-9703-c26c35d32644/d16b5dc2-f851-45ed-ad18-0fd932f59a6d.png'),
('df148d10-0c7e-4908-9be8-35c63c0190ef', ' Gundam', 8.27, 'For 2000 years, a separate race of humanity has lived on the moon. Known as ', 1, 1999, 'Yoshiyuki Tomino', 'Yoshiyuki Tomino', 1, 'https://www.manga-news.com/public/images/series/Gundam-uc-bande-desinnee-01-kadokawa.jpg'),
('109e8013-370a-4249-aefc-8e993ab596f2', ' Your Sound', 6.88, 'Min Eun-hoo, general manager of JK Group. Handsome looks, wealth, and a strong future! He had everything, and at some point, the thought of an unknown woman begin to ring in his mind. while she was complaining of pain not knowing who the biggest hindrance in her life was, there was a woman she encountered like fate. The candidate who came to JK on the day of the interview to hire his assistant, Seo-yoon Ha!Director Min Eun-hoo, who can hear the sound of only one person s heart, and Ha Seo-yoon, the owner of the sound, fall in love as if attracted to them!', 1, 2021, 'Biseol (비설)', 'Biseol (비설)', 1, 'https://mangadex.org/covers/109e8013-370a-4249-aefc-8e993ab596f2/c2fa73e9-9c98-483e-9d27-96da60c92914.jpg'),
('dd71e056-0b61-4076-8c5e-affbed4c93f0', ' Mad Detective', 7.2, 'An unscrupulous ruffian accidentally crossed into a parallel space and turned into a serious crime detective.An evil system of adventures led him to solve strange cases repeatedly and became a detective with an insolent personality!', 1, 2022, '一纸鲸文化', '一纸鲸文化', 1, 'https://mangadex.org/covers/dd71e056-0b61-4076-8c5e-affbed4c93f0/f84157e7-5ba2-4919-a80d-1cbd55efb206.jpg'),
('129c90ca-b997-4789-a748-e8765bc67a65', ' The Tsuntsuntsuntsuntsuntsuntsuntsuntsuntsuntsundere Girl Getting Less and Less Tsun Day by Day', 8.92, 'The tsuntsuntsuntsuntsuntsuntsuntsuntsuntsuntsundere girl getting less and less tsun day by day.', 1, 2022, 'Yaki Tomato', 'Yaki Tomato', 1, 'https://mangadex.org/covers/129c90ca-b997-4789-a748-e8765bc67a65/cb431e9c-f1be-4578-afe8-94f19431356b.png'),
('c1c408f6-3dec-4d62-b6b3-b57e615d933c', ' Wind Breaker', 7.09, 'Jo Ja-Hyun (Jay) is the student president of Taeyang (Sunny) High. He is not just a smart student but an extreme biker with high techniques. As you follow his bike, you will meet his friends, love, and adventures.', 1, 2013, 'Jo Yongseuk', 'Jo Yongseuk', 1, 'https://mangadex.org/covers/c1c408f6-3dec-4d62-b6b3-b57e615d933c/ed11e024-f64d-430d-acc2-c14dfff86f0c.jpg'),
('5edf03fa-1cc2-40b4-8857-6ccce0ea7081', ' Stitch by Stitch', 8.47, 'Joo-won comes from a high-class background but spends his time in an old embroidery room. In embroidering, he hopes to finally find Gwangmyeong, as was told to him by a famous fortune teller. The man works stitch by stitch in a shabby neighborhood as he tries to find the light to his life', 1, 1900, 'Nal Rae', 'Oh Sang Yeon', 1, 'https://mangadex.org/covers/5edf03fa-1cc2-40b4-8857-6ccce0ea7081/576f43a9-80a4-4db0-8339-6ea6cadfd463.png'),
('12d08397-4227-4a8b-97ca-718c587f1185', ' Closed Room Mafia', 8.27, 'High school student Kang Chul-joing awoke in an unknown locked room. He finds himself in a chaotic situation, he searched around the room and found an old MP3.What he learned from the message left on the MP3 was that he was poisoned and that he had only three hours left to live.Kang Chul-joong, who was usually a mystery quiz enthusiast, tries to escape the unknown room by finding clues based on his reasoning skills that he has accumulated over the years.However, the reality is different from the ideal. What is the last clue that he noticed when he made a series of mistakes and ended up in an urgent situation where the poison spread and he start vomiting blood?!A new survival game presented by Baek Ji-woon the creator of \"Struggle\" and \"Undead King\"!Is there any way to escape this hellish secret room!', 1, 2022, '백지운', '백지운', 1, 'https://mangadex.org/covers/12d08397-4227-4a8b-97ca-718c587f1185/3e2b4612-def9-4c6b-bc27-1da5c9f04d4b.jpg'),
('9c3d4ea5-df3c-4bab-b6db-6e216af7d24e', ' Mai no Mushigurashi', 7.17, 'A girls comedy in which the main character, Mai, who is looking for a leisurely job, plays with field crops and wild insects while helping her farming friend, Nanako. Nanako is a kind-hearted girl and when it comes to the field and her cherished Mai, the look in her eyes changes. The series also includes a specially drawn project that turns the insects that appeared in the chapters into beautiful girls.', 1, 1900, 'Amagappa Shoujogun', 'Amagappa Shoujogun', 1, 'https://mangadex.org/covers/9c3d4ea5-df3c-4bab-b6db-6e216af7d24e/ef1aca95-6eb3-43bb-b0f7-1f93be27b58b.jpg'),
('58615d7f-175d-4eaf-a02a-8464a2cde5a8', ' The Right To Invoke', 8.58, 'He can control anything without interference. This ability is one that everyone just takes for granted, Rights. While using  The right to control everything , Joo Hwiseong can spend his days conveniently, but a girl who can recognize that Right, Cheon Aram, began to interfere with Hwiseong s daily life. With this unexpected situation, a new phase is unfolding where  rights activists  are violating each other s right... Will Hwiseong be able to defend his Right?', 1, 2922, '샤이탄', '샤이탄', 1, 'https://mangadex.org/covers/58615d7f-175d-4eaf-a02a-8464a2cde5a8/972aed33-bd23-44c0-b22e-5b80464b1236.jpg'),
('fd4df778-292c-47c3-81b2-887ab6312a8b', ' The Empress  Livestream', 8.59, 'Jiang Pengji got something called the Court Intrigue Stream System.  System:  Your goal is to become the most prestigious woman in the kingdom (the Queen)!â€  Jiang Pengji:  Okay, System. No problem!â€  Years later, she met the target by becoming the most prestigious woman (the Empress).   Jiang Pengji:  Well done, no?â€  ', 1, 1900, '油爆香菇', '油爆香菇', 1, ''),
('15588d53-d6e9-4c07-813f-5a4c65e51c0a', ' Falling in the Night with You', 8.36, 'The sudden appearance of the amnesiac witch, Nyx, has brought a lot of changes to Ren Xiâ€™s life. The two help each otherâ€™s growth, Ren Xiâ€™s willing to help Nyx to find her lost memories, but in the process, will discover an astonishing secretâ€¦â€¦  ', 1, 1900, 'Hu Tao', 'Hu Tao', 1, 'https://mangadex.org/covers/15588d53-d6e9-4c07-813f-5a4c65e51c0a/facde981-0657-4b8e-8809-9662fd386b14.png'),
('b33ca79b-a974-4fa1-a327-97fd6c029a76', ' The Story of How I Found My Cat', 6.01, 'One rainy day, Igai picked up a one eyed, three-legged cat. The problem is... he s not sure it s actually a cat.', 1, 1900, 'Terada Atarou', 'Terada Atarou', 1, 'https://mangadex.org/covers/b33ca79b-a974-4fa1-a327-97fd6c029a76/c0327186-b7b1-44db-a401-da1f219b752c.png'),
('f6859844-44fa-437e-9e36-cb9177ec05be', ' Queen s Academy', 6.37, 'Fumihiro, a high school student whose only merit is his cooking skills, has transferred to the humorous, elegant, and tea-scented Daiei Teikoku Academy.Fumihiro ends up having a run-in with Charlotte, the student council president and queen of the school. She decided to have Fumihiro join the student council as an exclusive cook to change the lousy quality of school food.However, within the council, there are spies, pirates, witches, knights, great detectives... a group of beautiful girls with super strong personalities! The Reiwa era s \"national character\" comedy opens here!', 1, 2022, 'Idonum', 'Idonum', 1, 'https://mangadex.org/covers/f6859844-44fa-437e-9e36-cb9177ec05be/e7d6adfd-31c4-490a-b50a-aaf566ce6730.jpg'),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', ' Have a Great Sunday', 7.86, 'Due to certain circumstances novelist Sasai Rinji, who has lived in New York for a long time, is forced to return to Tokyo. While accustomed to the freedom of living alone, every Sunday he is visited by his son Max and son-in-law Yasu,and together they attempt to make the best of their weekends.', 1, 2017, 'Ono Natsume', 'Ono Natsume', 1, 'https://mangadex.org/covers/8d78c416-cb7e-4c2a-a2e9-ac63ac138a39/274bdcee-66b1-45b4-b3f0-d3bcbef61c5b.jpg'),
('5f95f18a-e482-4b1f-9d16-6dfbeb4de951', ' Mimori-san no Yarashii Okuchi', 6.49, '\"Do you feel it inside your mouth? ...During the treatment, it was erected all the time, right?\" Mimori, a businessman s largest secret is thatã€his mouth is his erogenous zoneã€‘. He had been avoiding dentists all his life, but suddenly his wisdom tooth starts to hurt. He felt pleasure during the treatment when the dentist fiddled inside his mouth, and he can t keep down his voice and erection...! As he blushes from embarrassment, the Doctor tells him, \"Shall I help you?\" and suddenly kisses him! His slacks are undone and he felt the tongue slither on his hot excitement...', 1, 2019, 'Ono Natsume', 'rasu', 1, 'https://mangadex.org/covers/5f95f18a-e482-4b1f-9d16-6dfbeb4de951/3ffb9777-42b7-4813-a8c3-781d44b3c8a6.jpg'),
('66f110cc-2653-4dae-9177-b07b7706abd5', ' Bar Flowers', 7.28, 'From the author of NTR series ', 1, 2022, 'Yukino', 'Yukino', 1, 'https://otakuteca.com/images/books/cover/624d858770fe4.jpg'),
('aa416bc9-d406-46d2-a44d-d5a91103cffc', ' Blue Sky Complex - Indigo Blue no Gradation (Doujinshi)', 7.49, 'Each volume contains original extra ero scenes.  Vol. #1: Takes place during summer break. Terashima asks Narasaki to go to his home to have sex.   Vol. #2: Takes place after they graduate from high school and are about to start university.', 1, 1900, 'Hyakkei (Circle)', 'Hyakkei (Circle)', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxdb5dDOe6827tdANt6j406Y1aTNkRW_kJqA&amp;usqp=CAU'),
('Test', 'Test', 5, 'Mickael', 1, 2022, 'Test', 'Test', 1, 'www.test.com'),
('Mickaelg57', 'Test', 5, 'AUUUUUUUUUUUUUUUUUU CASSSS OUUUUUUUUUUUUUUUUUU', 2, 2022, 'Test', 'Test', 1, 'www.test.com');

-- --------------------------------------------------------

--
-- Structure de la table `panier_commande`
--

DROP TABLE IF EXISTS `panier_commande`;
CREATE TABLE IF NOT EXISTS `panier_commande` (
  `id_commande` varchar(100) NOT NULL,
  `id_manga` varchar(100) NOT NULL,
  `num_volume` int(100) NOT NULL,
  `qte` int(100) NOT NULL,
  PRIMARY KEY (`id_commande`,`id_manga`,`num_volume`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier_commande`
--

INSERT INTO `panier_commande` (`id_commande`, `id_manga`, `num_volume`, `qte`) VALUES
('1S005164RU1292846', 'd21c9c1d-21ec-4a15-bc82-73d97458a1d3', 1, 2),
('1S005164RU1292846', '600f467c-9613-4056-aa21-bb2ecc295b84', 1, 2),
('1S005164RU1292846', '64c59add-698a-4260-8671-848356f26eab', 1, 1),
('56G71073P1974414N', 'd21c9c1d-21ec-4a15-bc82-73d97458a1d3', 1, 2),
('56G71073P1974414N', '600f467c-9613-4056-aa21-bb2ecc295b84', 1, 2),
('56G71073P1974414N', '64c59add-698a-4260-8671-848356f26eab', 1, 1),
('56S68553JR305024G', '7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', 1, 1),
('56S68553JR305024G', '4141c5dc-c525-4df5-afd7-cc7d192a832f', 4, 2),
('7P7571796S0853312', '456415b4-5d90-4262-b549-34a18153039d', 2, 1),
('7P7571796S0853312', '84e1c982-ce5f-4c00-b718-6ccab4e06caf', 1, 1),
('7P7571796S0853312', 'c00d5181-e971-4542-ac69-27786c9855f3', 1, 1),
('7P7571796S0853312', '4141c5dc-c525-4df5-afd7-cc7d192a832f', 2, 1),
('7P7571796S0853312', '4141c5dc-c525-4df5-afd7-cc7d192a832f', 4, 2),
('8VC79871LS399325R', '456415b4-5d90-4262-b549-34a18153039d', 2, 4),
('8VC79871LS399325R', '456415b4-5d90-4262-b549-34a18153039d', 1, 3),
('8VC79871LS399325R', '7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(100) NOT NULL AUTO_INCREMENT,
  `nom_pays` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`) VALUES
(1, 'Japon');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(100) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(100) NOT NULL,
  `email_utilisateur` varchar(500) NOT NULL,
  `mdp_utilisateur` varchar(1170) NOT NULL,
  `estAdministrateur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mdp_utilisateur`, `estAdministrateur`) VALUES
(2, 'clement', 'test@test2.com', 'def5020029398566fb0038ee7992bbae7c71ab9abf16735a867de578ff7eb3c489f60b4f8ca41ed185cdb2e3fbbfe6b8f79f170fc6bacf3d7683b04d9d8e15e4e5e588b919a509af133c9780e75a194c3a8917fa49d96674', 1),
(3, 'clement', 'clement.stancato@gmail.com', 'def50200e1bcf8d99c6accbdb4902c06e1d655ede16c613bfae8697e01f9e6c734518b3185c22ce73e3d3fcc0f14108c1d2b2fcf42fb1566db1b5d17b8897c4e2d02bc7e5ace5f8ea5ce5fb76facc4b10986b7be499cd9d4', 2),
(4, 'test', 'test@test.com', 'def50200acfd2ba5279655a50ee649ef68b1af35a90e004eefd6383ff1c85ab4912ea2293f19d3ea77d12dd3f8ea333fc9983ef758edaa266d093f08faa37d008b402211e2c6f362efdd1a190a0f3d7ef4e95a14f9e36f', 2);

-- --------------------------------------------------------

--
-- Structure de la table `volume`
--

DROP TABLE IF EXISTS `volume`;
CREATE TABLE IF NOT EXISTS `volume` (
  `id_manga` varchar(100) NOT NULL,
  `num_volume` int(100) NOT NULL AUTO_INCREMENT,
  `stock` int(20) NOT NULL,
  PRIMARY KEY (`id_manga`,`num_volume`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `volume`
--

INSERT INTO `volume` (`id_manga`, `num_volume`, `stock`) VALUES
('d21c9c1d-21ec-4a15-bc82-73d97458a1d3', 1, 72),
('014374f6-c420-4361-9ee9-93675f7e36bb', 1, 334),
('014374f6-c420-4361-9ee9-93675f7e36bb', 2, 737),
('014374f6-c420-4361-9ee9-93675f7e36bb', 3, 256),
('014374f6-c420-4361-9ee9-93675f7e36bb', 4, 33),
('014374f6-c420-4361-9ee9-93675f7e36bb', 5, 829),
('014374f6-c420-4361-9ee9-93675f7e36bb', 6, 197),
('014374f6-c420-4361-9ee9-93675f7e36bb', 7, 39),
('014374f6-c420-4361-9ee9-93675f7e36bb', 8, 431),
('014374f6-c420-4361-9ee9-93675f7e36bb', 9, 665),
('ffe69cc2-3f9e-4eab-a7f7-c963cea9ec25', 1, 355),
('49c7b586-b0a3-4776-b3f5-3bdc62d82161', 1, 502),
('dd7c685b-2e21-45a6-85f4-2679dcc202f7', 1, 931),
('f7defd4d-a135-4890-9e4c-7df38a80f80f', 1, 275),
('a04b95bf-6609-4a45-bedc-99d560acad6e', 1, 463),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 1, 249),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 2, 857),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 3, 110),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 4, 176),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 5, 724),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 6, 741),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 7, 633),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 8, 37),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 9, 52),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 10, 209),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 11, 852),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 12, 172),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 13, 69),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 14, 260),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 15, 574),
('0d545e62-d4cd-4e65-a65c-a5c46b794918', 16, 835),
('a77742b1-befd-49a4-bff5-1ad4e6b0ef7b', 1, 325),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 1, 349),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 2, 666),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 3, 916),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 4, 895),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 5, 168),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 6, 811),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 7, 199),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 8, 528),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 9, 112),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 10, 487),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 11, 382),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 12, 57),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 13, 784),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 14, 931),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 15, 157),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 16, 64),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 17, 947),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 18, 313),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 19, 841),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 20, 319),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 21, 652),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 22, 531),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 23, 145),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 24, 920),
('ce16b1c3-d6bb-41e0-8671-d8b065248ba2', 25, 400),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 1, 594),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 2, 477),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 3, 847),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 4, 681),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 5, 670),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 6, 441),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 7, 950),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 8, 850),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 9, 484),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 10, 912),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 11, 223),
('31c3484e-1832-44c1-b43a-dee39e32c3bd', 12, 130),
('e50022a5-b0b2-4019-8908-7579f60b3ec9', 1, 860),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 1, 92),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 2, 198),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 3, 680),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 4, 966),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 5, 662),
('29d68a2b-3f3e-4de9-b0cb-337fbfd1e76c', 6, 801),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 1, 501),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 2, 56),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 3, 297),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 4, 324),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 5, 37),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 6, 774),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 7, 979),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 8, 440),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 9, 707),
('871c0581-f894-4772-8a3e-7ec97ab592a0', 10, 377),
('667a6411-4b6f-4aa0-946f-2dbad05c0b1e', 1, 868),
('6bf844c8-2ce4-401a-a761-3151042efe30', 1, 417),
('af7cc594-4f6a-4c0a-8f74-16748910dee5', 1, 898),
('8dcdcee1-717d-4601-b828-4035ff247b31', 1, 501),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 1, 524),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 2, 856),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 3, 269),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 4, 63),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 5, 894),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 6, 514),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 7, 523),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 8, 978),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 9, 704),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 10, 875),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 11, 686),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 12, 747),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 13, 804),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 14, 198),
('4af2a8ae-6d71-44b1-95d7-9fb30a436e7b', 15, 80),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 1, 915),
('fae59015-76c4-4807-94c5-22e8b58ebb96', 1, 929),
('86a19e80-e6d6-4afd-8042-ddea780de827', 1, 962),
('08c3aeb3-7a39-47a0-aecc-9876646478ed', 1, 767),
('3a3bbcd6-dc18-43c4-82f0-b4a9d6a433d2', 1, 417),
('370110b7-2d60-47f7-a8c1-b5a9bfcbaabd', 1, 198),
('c658d616-73d2-494c-bd98-ece86bf5b8e8', 1, 629),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 1, 114),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 2, 567),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 3, 868),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 4, 621),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 5, 248),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 6, 946),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 7, 642),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 8, 27),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 9, 822),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 10, 31),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 11, 280),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 12, 157),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 13, 965),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 14, 176),
('515effc1-cbd2-4e21-80e7-488ef149bf5d', 15, 974),
('0241a53e-eb23-4295-bc08-340f7082e01f', 1, 681),
('eb7bd53b-d2b6-48f1-a731-4dbf73230c8a', 1, 125),
('87f7e7fb-a2bc-4dee-bf7c-60f1053d78fe', 1, 710),
('ccb654fd-d4de-44d1-a9c1-f58ba34f3510', 1, 567),
('20598dda-2d24-487b-bb3e-cfa795719492', 1, 16),
('d9f46e20-d66a-4771-a126-92d97b09bc77', 1, 205),
('744ba2b5-59dd-421d-98ab-4cb2c2b77c80', 1, 8),
('c00d5181-e971-4542-ac69-27786c9855f3', 1, 774),
('232702e4-7174-4fa3-a16a-c09d49648b1a', 1, 519),
('fa8b0760-41b3-46bd-8c44-0ede90772a80', 1, 841),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 1, 939),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 2, 236),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 3, 980),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 4, 186),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 5, 182),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 6, 67),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 7, 492),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 8, 273),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 9, 118),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 10, 713),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 11, 619),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 12, 572),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 13, 674),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 14, 373),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 15, 845),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 16, 22),
('808fdeae-5ea2-4839-8f95-8183dfdddddc', 17, 696),
('aa67625d-7dbb-4f91-b1a0-be3b3c25711d', 1, 371),
('d97652f6-1e9c-40b6-8e8e-904ce6c51d50', 1, 659),
('076028a7-197a-4329-bbd5-d13186bbd990', 1, 358),
('accc086b-2673-487d-8e06-a48c1d7c5a52', 1, 187),
('b3f3145a-6d58-4935-9942-79abe4026aab', 1, 582),
('de7769da-b078-4978-8458-3d5dec2f99af', 1, 613),
('de7769da-b078-4978-8458-3d5dec2f99af', 2, 0),
('de7769da-b078-4978-8458-3d5dec2f99af', 3, 771),
('de7769da-b078-4978-8458-3d5dec2f99af', 4, 475),
('600f467c-9613-4056-aa21-bb2ecc295b84', 1, 495),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 1, 520),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 2, 180),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 3, 354),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 4, 18),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 5, 242),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 6, 25),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 7, 816),
('6fef1f74-a0ad-4f0d-99db-d32a7cd24098', 8, 90),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 1, 698),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 2, 791),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 3, 203),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 4, 926),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 5, 625),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 6, 803),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 7, 281),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 8, 434),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 9, 172),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 10, 996),
('6e16d8d0-21ba-46b1-9323-ee42ef2dbd42', 11, 59),
('6e44705b-9f80-42f6-9ebb-1141fbe8320e', 1, 798),
('7a19cf0c-28b4-4f3e-9b51-1843029601fb', 1, 251),
('e66ed7ea-583f-45c8-81e5-b610b1462fee', 1, 654),
('c62b73e5-0cfb-4aef-9425-60393477ab6c', 1, 690),
(' f58c6ee0-42f7-4e4a-901a-22cdb03a4e38', 1, 864),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 1, 682),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 2, 842),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 3, 757),
('7f1bafc4-67b8-45b3-968b-39729dfc9ab7', 4, 644),
('bdd0a765-c80b-4244-a160-38e3e59dcbe7', 1, 84),
('6378f4b1-f9a0-4233-b89a-95021535d100', 1, 982),
('0f8d38bd-84ff-4d72-a1b7-fce4f05b696b', 1, 819),
('83cc2814-04e4-4434-9876-ba7eaafd32f5', 1, 814),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 1, 469),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 2, 206),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 3, 383),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 4, 601),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 5, 905),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 6, 993),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 7, 422),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 8, 433),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 9, 104),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 10, 953),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 11, 587),
('1fc1355b-9c02-48e2-a457-094b592ecd9c', 12, 802),
('40c373ac-ab7c-4582-bd0e-14893faefb8b', 1, 725),
('c7a10d9f-6628-4d58-b27a-5081ec3db27b', 1, 53),
('6670ee28-f26d-4b61-b49c-d71149cd5a6e', 1, 78),
('02ffca35-bb17-4f56-a8af-c447f2ee0720', 1, 559),
(' 64113fcd-4f8c-41bc-8fa4-18a83076da2e', 1, 514),
('4ada20eb-085a-491a-8c49-477ab42014d7', 1, 780),
('5fcbcc88-5f3b-4222-bbd8-5f5952b8a506', 1, 493),
('fa938045-2957-48d3-abba-4b7e34557baf', 1, 299),
('7cddbbff-fdf2-4630-b921-b7c3a17b9d9d', 1, 648),
('456415b4-5d90-4262-b549-34a18153039d', 1, 195),
('80d23647-1851-4cf9-ada8-eec8912813a7', 1, 27),
('08c65669-e94c-4df1-91c2-37ef15084a0d', 1, 932),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 1, 374),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 2, 734),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 3, 927),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 4, 139),
(' 0b525cfb-abcc-4e4d-8f3d-c7d07ac03a05', 5, 610),
('7532f86a-023b-482a-8d53-670eff0484c5', 1, 537),
('5b93fa0f-0640-49b8-974e-954b9959929b', 1, 375),
('5b93fa0f-0640-49b8-974e-954b9959929b', 2, 664),
('5b93fa0f-0640-49b8-974e-954b9959929b', 3, 905),
('5b93fa0f-0640-49b8-974e-954b9959929b', 4, 215),
('5b93fa0f-0640-49b8-974e-954b9959929b', 5, 558),
('5b93fa0f-0640-49b8-974e-954b9959929b', 6, 895),
('84e1c982-ce5f-4c00-b718-6ccab4e06caf', 1, 845),
('132eff91-b4f1-42d1-982c-cb1aec6f0a8a', 1, 376),
('a1c7c817-4e59-43b7-9365-09675a149a6f', 1, 804),
('40bc649f-7b49-4645-859e-6cd94136e722', 1, 533),
('40bc649f-7b49-4645-859e-6cd94136e722', 2, 738),
('40bc649f-7b49-4645-859e-6cd94136e722', 3, 599),
('40bc649f-7b49-4645-859e-6cd94136e722', 4, 181),
('40bc649f-7b49-4645-859e-6cd94136e722', 5, 795),
('40bc649f-7b49-4645-859e-6cd94136e722', 6, 262),
('40bc649f-7b49-4645-859e-6cd94136e722', 7, 638),
('40bc649f-7b49-4645-859e-6cd94136e722', 8, 521),
('40bc649f-7b49-4645-859e-6cd94136e722', 9, 589),
('40bc649f-7b49-4645-859e-6cd94136e722', 10, 671),
('40bc649f-7b49-4645-859e-6cd94136e722', 11, 98),
('40bc649f-7b49-4645-859e-6cd94136e722', 12, 677),
('40bc649f-7b49-4645-859e-6cd94136e722', 13, 80),
('40bc649f-7b49-4645-859e-6cd94136e722', 14, 901),
('40bc649f-7b49-4645-859e-6cd94136e722', 15, 790),
('40bc649f-7b49-4645-859e-6cd94136e722', 16, 678),
('40bc649f-7b49-4645-859e-6cd94136e722', 17, 661),
('40bc649f-7b49-4645-859e-6cd94136e722', 18, 438),
('40bc649f-7b49-4645-859e-6cd94136e722', 19, 957),
('40bc649f-7b49-4645-859e-6cd94136e722', 20, 426),
('40bc649f-7b49-4645-859e-6cd94136e722', 21, 577),
('40bc649f-7b49-4645-859e-6cd94136e722', 22, 838),
('40bc649f-7b49-4645-859e-6cd94136e722', 23, 203),
('40bc649f-7b49-4645-859e-6cd94136e722', 24, 722),
('40bc649f-7b49-4645-859e-6cd94136e722', 25, 536),
('40bc649f-7b49-4645-859e-6cd94136e722', 26, 245),
('40bc649f-7b49-4645-859e-6cd94136e722', 27, 157),
('40bc649f-7b49-4645-859e-6cd94136e722', 28, 493),
('40bc649f-7b49-4645-859e-6cd94136e722', 29, 2),
('40bc649f-7b49-4645-859e-6cd94136e722', 30, 56),
('40bc649f-7b49-4645-859e-6cd94136e722', 31, 725),
('40bc649f-7b49-4645-859e-6cd94136e722', 32, 70),
('40bc649f-7b49-4645-859e-6cd94136e722', 33, 6),
('40bc649f-7b49-4645-859e-6cd94136e722', 34, 682),
('40bc649f-7b49-4645-859e-6cd94136e722', 35, 978),
('40bc649f-7b49-4645-859e-6cd94136e722', 36, 687),
('40bc649f-7b49-4645-859e-6cd94136e722', 37, 689),
('40bc649f-7b49-4645-859e-6cd94136e722', 38, 23),
('40bc649f-7b49-4645-859e-6cd94136e722', 39, 582),
('40bc649f-7b49-4645-859e-6cd94136e722', 40, 41),
('40bc649f-7b49-4645-859e-6cd94136e722', 41, 834),
('40bc649f-7b49-4645-859e-6cd94136e722', 42, 430),
('37366974-0967-447c-8555-22b8744aa531', 1, 606),
('64c59add-698a-4260-8671-848356f26eab', 1, 978),
('faaef9a1-7358-4a50-9703-c26c35d32644', 1, 692),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 1, 542),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 2, 796),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 3, 191),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 4, 859),
('df148d10-0c7e-4908-9be8-35c63c0190ef', 5, 796),
('109e8013-370a-4249-aefc-8e993ab596f2', 1, 228),
('dd71e056-0b61-4076-8c5e-affbed4c93f0', 1, 742),
('129c90ca-b997-4789-a748-e8765bc67a65', 1, 811),
('c1c408f6-3dec-4d62-b6b3-b57e615d933c', 1, 757),
('5edf03fa-1cc2-40b4-8857-6ccce0ea7081', 1, 187),
('12d08397-4227-4a8b-97ca-718c587f1185', 1, 322),
('9c3d4ea5-df3c-4bab-b6db-6e216af7d24e', 1, 488),
('9c3d4ea5-df3c-4bab-b6db-6e216af7d24e', 2, 126),
('58615d7f-175d-4eaf-a02a-8464a2cde5a8', 1, 55),
('fd4df778-292c-47c3-81b2-887ab6312a8b', 1, 437),
('15588d53-d6e9-4c07-813f-5a4c65e51c0a', 1, 127),
('b33ca79b-a974-4fa1-a327-97fd6c029a76', 1, 926),
('f6859844-44fa-437e-9e36-cb9177ec05be', 1, 880),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 1, 337),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 2, 318),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 3, 578),
('8d78c416-cb7e-4c2a-a2e9-ac63ac138a39', 4, 457),
('5f95f18a-e482-4b1f-9d16-6dfbeb4de951', 1, 125),
('66f110cc-2653-4dae-9177-b07b7706abd5', 1, 90),
('aa416bc9-d406-46d2-a44d-d5a91103cffc', 1, 920),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 2, 231),
('', 3, 586),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 3, 586),
('4141c5dc-c525-4df5-afd7-cc7d192a832f', 4, 690),
('456415b4-5d90-4262-b549-34a18153039d', 2, 94),
('456415b4-5d90-4262-b549-34a18153039d', 3, 0),
('456415b4-5d90-4262-b549-34a18153039d', 4, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
