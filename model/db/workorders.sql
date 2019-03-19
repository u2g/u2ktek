
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `missions`
--

-- --------------------------------------------------------

--
-- Structure de la table `workorders`
--

CREATE TABLE `workorders` (
  `wo_id` int(11) NOT NULL COMMENT 'id ordre de travail',
  `customerphone` varchar(10) NOT NULL COMMENT 'numero de telephone',
  `customername` varchar(255) NOT NULL COMMENT 'nom du client',
  `customeradress` varchar(255) NOT NULL COMMENT 'adresse du client',
  `jobcode` varchar(10) NOT NULL COMMENT 'type intervention',
  `wo_number` varchar(50) NOT NULL COMMENT 'numero ordre  travail',
  `wo_date` date NOT NULL COMMENT 'date rendez-vous',
  `remarks` text NOT NULL COMMENT 'remarque cloture odre travail',
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'date enregistrement odre travail'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `workorders`
--
ALTER TABLE `workorders`
  ADD PRIMARY KEY (`wo_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `workorders`
--
ALTER TABLE `workorders`
  MODIFY `wo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id ordre de travail';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
