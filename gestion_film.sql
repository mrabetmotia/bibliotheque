-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:32 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestion film`
--

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noml` varchar(100) NOT NULL,
  `prod` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `nb` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `tel`, `email`, `noml`, `prod`, `type`, `prix`, `nb`, `qte`) VALUES
(4, 'sdfdsfds', 741452, 'motiamrabet123@gmail.com', ' Respire', ' Pocket Jeunesse', ' Roman', 20, 187, 0),
(5, 'motia', 27402558, 'motiamrabet@hotmail.com', ' Respire', ' Pocket Jeunesse', ' Roman', 20, 187, 0),
(9, 'dsfsdf', 741452, 'mrabetmotia@gmail.com', ' Respire', ' Pocket Jeunesse', ' Roman', 20, 187, 11);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`, `id`) VALUES
('Moncef zmander', 'motiamrabet@hotmail.com', 5462, 'fjhdsjfhsldfhsdifhuisfhuiqshfsudhfk', 1),
('sqdsqd', 'aaa@gmail.com', 21245, 'qsdsqdq', 2),
('aa', 'motiamrabet123@gmail.com', 5, 'aaaa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `idFilm` int(11) NOT NULL AUTO_INCREMENT,
  `nomfilm` varchar(100) NOT NULL,
  `producteur` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nb` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`idFilm`, `nomfilm`, `producteur`, `type`, `img`, `nb`, `prix`, `detail`, `qte`) VALUES
(1, 'Rouge Rubis', 'Kerstin Gier', 'Fantastique', 'Rubis', 400, 50, '"Rouge Rubis" est le premier livre de la trilogie "Les Gemmes" de l''auteure allemande Kerstin Gier. Il s''agit d''un roman de fantasy young adult qui mélange voyages dans le temps, mystères et aventures.  Le livre raconte l''histoire de Gwendolyn Shepherd, une adolescente ordinaire de 16 ans qui découvre qu''elle a hérité d''un pouvoir étrange : elle peut voyager dans le temps. Mais contrairement à ce qu''elle pensait, elle n''est pas la seule dans sa famille à posséder ce don. Sa cousine, Charlotte Montrose, est censée être la prochaine voyageuse dans le temps de leur famille, mais elle est atteinte d''une maladie grave qui l''empêche de voyager.  Gwen doit alors apprendre à contrôler son pouvoir tout en évitant les pièges des membres d''une organisation secrète appelée "Les veilleurs", qui cherchent à contrôler les voyageurs dans le temps. Elle rencontre également Gideon de Villiers, un autre voyageur dans le temps, avec qui elle doit accomplir une mission qui pourrait changer l''avenir.  Le livre est plein de rebondissements, de mystères et d''intrigues, avec des personnages intéressants et des dialogues amusants. L''intrigue principale se concentre sur la mission de Gwen et Gideon, mais il y a aussi des sous-intrigues qui ajoutent de la profondeur à l''histoire.  Dans l''ensemble, "Rouge Rubis" est un livre captivant et divertissant qui plaira aux lecteurs de tous âges. Il a été adapté au cinéma en 2013 sous le titre "Les Chroniques de Gideon".', 10),
(2, 'Respire', 'Pocket Jeunesse', 'Roman', 'Respire', 187, 20, '', 9),
(3, 'Titanic', ' Penguin Books', 'Romance', 'Titanic', 208, 30, 'Le livre "Titanic" est une œuvre littéraire qui retrace l''histoire de l''un des plus grands désastres maritimes de l''histoire. Il existe de nombreux livres sur ce sujet, qui se concentrent sur différents aspects du naufrage, tels que les événements qui ont conduit au naufrage, la construction et la conception du navire, les passagers à bord, le sauvetage des survivants, les conséquences du naufrage et les enquêtes qui ont suivi.  L''un des livres les plus connus sur le Titanic est "A Night to Remember" de Walter Lord, publié en 1955. Ce livre utilise des témoignages de première main de survivants pour raconter l''histoire de la nuit du naufrage. Il a été salué pour sa précision et son attention aux détails.  Un autre livre populaire sur le Titanic est "The Titanic: End of a Dream" de Wyn Craig Wade, publié en 1979. Ce livre se concentre sur les événements qui ont conduit au naufrage, en particulier les décisions prises par les responsables de la White Star Line concernant la conception et la construction du navire.  Il y a aussi des livres qui se concentrent sur les passagers à bord, tels que "The Titanic: Women and Children First" de Judith B. Geller, publié en 1998, qui examine le traitement des femmes et des enfants lors de l''évacuation du navire. "Gilded Lives, Fatal Voyage" de Hugh Brewster, publié en 2012, se concentre sur les passagers de première classe du Titanic, en explorant leur vie avant et après le naufrage.  Enfin, il y a des livres qui explorent les conséquences du naufrage et les enquêtes qui ont suivi. "The Loss of the SS Titanic" de Lawrence Beesley, publié en 1912 peu de temps après le naufrage, est un compte-rendu détaillé des événements tels que vécus par un survivant. "The Titanic Disaster Hearings" de Tom Kuntz, publié en 2012, examine les enquêtes menées après le naufrage pour déterminer les responsabilités et les échecs qui ont conduit à la tragédie.  Dans l''ensemble, le naufrage du Titanic reste un sujet fascinant pour les historiens et les lecteurs du monde entier, et il existe de nombreux livres détaillant les événements entourant cette tragédie historique.', 10),
(4, 'Secrets de Dumbledore', ' Gallimard Jeunesse', 'roman', 'Dumbledore', 896, 45, '"Secrets de Dumbledore" est le troisième livre de la série "Les Animaux Fantastiques" de l''auteur britannique J.K. Rowling, également connue pour la série de romans "Harry Potter".  Le livre se déroule dans le monde magique des années 1930 et suit les aventures de Norbert Dragonneau, un magizoologiste qui voyage à travers le monde pour étudier les créatures magiques. L''histoire se déroule principalement à Paris, où Norbert doit faire face à un nouvel ennemi, Gellert Grindelwald, un sorcier maléfique qui cherche à renverser l''ordre du monde magique.  Dans "Secrets de Dumbledore", Norbert Dragonneau est recruté par Albus Dumbledore pour l''aider à arrêter Grindelwald. Au cours de leur mission, ils doivent faire face à de nombreux dangers, notamment des créatures magiques dangereuses et des ennemis puissants.  Le livre explore également le passé de Dumbledore, en révélant des secrets sur ses relations avec Grindelwald et sur sa famille. Les lecteurs en apprendront également plus sur les événements qui ont conduit à la mort de la soeur de Dumbledore, Ariana.  Comme dans les livres précédents de la série "Les Animaux Fantastiques", "Secrets de Dumbledore" est rempli de créatures magiques fascinantes et d''éléments du monde de la magie. L''histoire est captivante et pleine de suspense, avec des personnages bien développés et des dialogues bien écrits.  Dans l''ensemble, "Secrets de Dumbledore" est un livre passionnant qui plaira aux fans de l''univers de J.K. Rowling et aux amateurs de romans de fantasy en général.', 11),
(5, 'jamais plus', 'Colleen Hoover', 'roman ', 'jamais plus', 464, 40, '"Jamais plus" est un roman de Colleen Hoover, une auteure américaine de romans contemporains pour jeunes adultes. Le livre raconte l''histoire de Lily Bloom, une jeune femme qui tente de se remettre d''une relation abusive avec son ex-petit ami, Ryle Kincaid.  Lily est une jeune femme dynamique qui adore son travail dans une entreprise de fleuristerie. Lorsqu''elle rencontre Ryle, un neurochirurgien à succès, elle est tout de suite attirée par lui. Cependant, leurs débuts de relation sont difficiles, car Ryle est résolument opposé à l''idée de s''engager dans une relation à long terme.  Malgré cela, Lily tombe amoureuse de Ryle et leur relation se développe. Cependant, Lily commence à découvrir des aspects de la personnalité de Ryle qu''elle ne connaissait pas auparavant, et elle commence à réaliser que leur relation peut être abusive.  Le livre explore les thèmes de l''amour, de la famille, de la confiance et de la résilience. Il aborde également les thèmes difficiles de la violence domestique et de l''abus émotionnel.  "Jamais plus" est un livre poignant et émotionnellement intense qui donne aux lecteurs un aperçu de la psychologie de la violence domestique. Le roman est bien écrit, avec des personnages complexes et réalistes. L''histoire est racontée du point de vue de Lily, ce qui permet aux lecteurs de comprendre ses pensées et ses émotions alors qu''elle essaie de faire face aux épreuves de sa relation avec Ryle.  Dans l''ensemble, "Jamais plus" est un livre puissant et émotionnellement intense qui traite de sujets difficiles mais importants. Il plaira aux lecteurs qui cherchent des romans contemporains réalistes qui abordent des thèmes profonds et complexes.', 22),
(6, 'la fille des deux mondes', 'Neal Stephenson', 'Fantastique', 'la fille', 1056, 100, '', 200),
(7, 'aaa', 'aaa', 'aaa', 'qqqqqq', 54, 45, 'aaaaaaaaaa', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `email`, `tel`, `mdp`, `type`, `img`) VALUES
(1, 'Motia', 'Motiamrabet123@gmail.com', 27402296, 'aaa', 'admin', '3'),
(2, 'taher jenhani', 'Taherjenhani8@gmail.com', 2147483647, 'aaa', 'admin', '1'),
(4, 'Marwa zmandar', 'ahmedhajji@gmail.com', 12457896, 'www', 'admin', '2'),
(5, 'ahmed', 'ahmed@gmail.com', 214587, 'ccc', 'user', ''),
(6, 'aaa', 'aaa@gmail.com', 0, 'sss', 'user', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
