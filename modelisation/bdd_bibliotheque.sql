-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 oct. 2020 à 14:12
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `mdp`) VALUES
(14, 'djiby', '$2y$10$CP0geqOGe.iYtch9yNChMuXA90XWZP/q3GF8cHUAMYIdJRCr/sAau');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_auteurs`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteurs`, `nom`) VALUES
(1, 'Michel Onfray'),
(2, 'Marcello Borelli'),
(3, 'Christopher Wangen'),
(4, 'Shoshana Zuboff'),
(5, 'Jared Diamond'),
(6, 'Gauthier Chapelle'),
(7, 'Pierre Kropotkine'),
(8, 'Sun Tzu'),
(9, 'Robert Mercier'),
(10, 'Raymond Aron'),
(11, 'Christian Morel'),
(12, 'Fabrice Mosca'),
(13, 'Anna Llenas'),
(14, 'Maurice Reille'),
(15, 'Emmanuelle Caussé'),
(16, 'Camille Laura'),
(17, 'John Woodward'),
(18, 'Sophie Lamoureux'),
(19, 'Christian Jolibois'),
(20, 'Thierry Courtin'),
(21, 'Antoine De Saint-Exupery'),
(22, 'Jacques Sondron'),
(23, 'François Saillard'),
(24, 'Xanier Chanet'),
(25, 'Bertrand Petit'),
(26, 'Bernard Verlant'),
(27, 'Isabelle Arnaud'),
(28, 'José Dordoigne'),
(29, 'Pierre Arcuset'),
(30, 'Elise Chedeville'),
(31, 'George Orwell'),
(32, 'William Golding'),
(33, 'Edgar Allan Poe'),
(34, 'Stig Dagerman'),
(35, 'Léon Tolstoï'),
(36, 'Guy de Maupassant'),
(37, 'Jean Sevillia'),
(38, 'Andrew Roberts'),
(39, 'Pascal Blanchard'),
(40, 'Catherine Saliou'),
(41, 'Snorri Sturluson'),
(42, 'Pierre Cosme'),
(43, 'Amin Maalouf'),
(44, 'Gérard Chouquer'),
(45, 'Jean Paul Bertaud'),
(46, 'Paul Grimblot'),
(47, 'Cyril Lignac'),
(48, 'Marcello Rocco'),
(49, 'Stéphane Gabrielly'),
(50, 'Marcel Bouteille'),
(51, 'Patrice Thebault'),
(52, 'Luce Lebart'),
(53, 'Mickael Lee'),
(54, 'André Rouillé'),
(55, 'Frederic Dillaye'),
(56, 'Olivier Lafay'),
(57, 'Blaise Dubois'),
(58, 'Christopher Mcdougall'),
(59, 'Robert Marche'),
(60, 'Patanjali'),
(61, 'Solarberg Sehel'),
(62, 'Adrien Siroy'),
(63, 'JAN KEHJA'),
(64, 'GASSAMA ddddd'),
(65, 'toto toto');

-- --------------------------------------------------------

--
-- Structure de la table `categories_livres`
--

DROP TABLE IF EXISTS `categories_livres`;
CREATE TABLE IF NOT EXISTS `categories_livres` (
  `id_catLivres` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_catLivres`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories_livres`
--

INSERT INTO `categories_livres` (`id_catLivres`, `nom`) VALUES
(2, 'Sciences Humaines'),
(3, 'Etudes Supérieures'),
(4, 'Livres pour Enfants'),
(5, 'Romans et littérature'),
(6, 'Histoire'),
(7, 'Cuisine et Vins'),
(8, 'Art, Musique et Cinéma'),
(9, 'Sports'),
(13, 'DJIBRIL'),
(14, 'ererer'),
(15, 'NATATION');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_clients` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `mdp` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_clients`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_clients`, `nom`, `prenom`, `login`, `mdp`) VALUES
(2, 'GASSAMA', 'Astou', 'astou', '$2y$10$3dlHDfkCBkDe2vgCbWx55.yy02XqVRSgXEy5xjJZnDKiTm.KwomDu'),
(4, 'vich', 'zlatan', 'azerty', '$2y$10$LgytASosxfWE4v0E3d68i.QxVsfsebjvHxW21O97AyABWpJ5jfCCq'),
(5, 'KEJHA', 'jan', 'jan', '$2y$10$yAr92cy3W9KXUXG90hJRxepX/W9KclaxW9bI0NrY4n77V083./04y'),
(6, 'spleesh', 'dinero', 'Djibyg', '$2y$10$sSxF4UlGISlIY2KGJbzJDergevoMAhcP6RxiBo2mYoAa8.VZSbv7S'),
(7, 'Ganx', 'zerty', 'asx', '$2y$10$Bccn6zHF6eQECgp/6lbIY.tNBYtH729unF4RgLwHxEJtNoboVCbtW'),
(10, 'IPSSI', ' SQY', 'ipssisqy', '$2y$10$n7ToYZg/68LhuMNCwQte5uWpiQjEx/7Oh0yfbsf9JW3yMqb3yzzeC'),
(11, 'aaa', 'aaa', 'aaa', '$2y$10$FO7I9gzK0cWItQvWVO8w5uda.mvnoSJsFwnB2KtYIwNQ7IHHPddcC');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

DROP TABLE IF EXISTS `emprunter`;
CREATE TABLE IF NOT EXISTS `emprunter` (
  `id_clients` int(11) NOT NULL,
  `id_livres` int(11) NOT NULL,
  PRIMARY KEY (`id_clients`,`id_livres`),
  KEY `id_livres` (`id_livres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id_livres` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `id_auteurs` int(11) NOT NULL,
  `id_catLivres` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_livres`),
  KEY `id_auteur` (`id_auteurs`,`id_catLivres`),
  KEY `id_catLivres` (`id_catLivres`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id_livres`, `titre`, `description`, `quantite`, `id_auteurs`, `id_catLivres`, `photo`) VALUES
(7, 'De l\'inégalité parmi les sociétés', 'L\'inégalité dans la répartition des richesses entre les sociétés est liée aux différences de milieux, pas aux différences génétiques. Mobilisant des disciplines aussi diverses que la génétique, la biologie moléculaire, l\'écologie des comportements, l\'épidémiologie, la linguistique, l\'archéologie et l\'histoire des technologies, Jared Diamond montre notamment : le rôle de la production alimentaire (c\'est-à-dire la domestication des plantes et des animaux sauvages, puis l\'augmentation des vivres par l\'agriculture et l\'élevage, qui permet d\'entretenir des bureaucraties et des artisans spécialisés dans la production des armes) ; l\'évolution des germes caractéristiques des populations humaines denses favorisées par la révolution agricole (les germes eurasiens ont tué plus d\'indigènes américains et non eurasiens que les fusils ou les armes d\'acier des Eurasiens)', 100, 5, 2, 'delinegaliteparmilessocietes.jpg'),
(8, 'Bouleversement : Les nations face aux crises et au changement', 'Ce livre est une étude comparative, narrative et exploratoire des crises et des changements sélectifs survenus au cours de nombreuses décennies dans sept nations modernes : la Finlande, le Japon, le Chili, l\'Indonésie, l\'Allemagne, l\'Australie et les Etats-Unis. Les comparaisons historiques obligent, en effet, à poser des questions peu susceptibles de ressortir à l\'étude d\'un seul cas : pourquoi un certain type d\'événement a-t-il produit un résultat singulier dans un pays et un très différent dans un autre ? L\'étude s\'organise en trois paires de chapitres, chacune portant sur un type différent de crise nationale. La première paire concerne des crises dans deux pays (la Finlande en 1940 et le Japon des années 1850) qui ont éclaté lors d\'un bouleversement soudain provoqué par un choc extérieur au pays. La deuxième paire concerne également des crises qui ont éclaté soudainement, mais en raison d\'explosions internes (le Chili en 1973 et l\'Indonésie en 1965). La dernière paire décrit des crises qui n\'ont pas éclaté d\'un coup, mais se sont déployées progressivement (en Allemagne après 1945 et en Australie dans les années 1970), notamment en raison de tensions déclenchées par la Seconde Guerre mondiale. L\'objectif exploratoire de Jared Diamond est de déterminer une douzaine de facteurs, hypothèses ou variables, destinés à être testés ultérieurement par des études quantitatives. Chemin faisant, la question est posée de savoir si les nations ont besoin de crises pour entreprendre de grands changements, et si les dirigeants produisent des effets décisifs sur l\'histoire. Tout en respectant la volonté première de ne pas discuter d\'une actualité trop proche qui, faute de distance et perspective, rendrait le propos rapidement obsolète, un Après-propos, propre à l\'édition française, esquisse, en l\'état des données au printemps 2020, une réflexion sur la pandémie du Covid-19.', 100, 5, 2, 'bouleversement.jpg'),
(9, 'Effondrement : Comment les sociétés décident de leur disparition ou de leur survie', 'Au rythme actuel de la croissance démographique, et particulièrement de l\'augmentation des besoins économiques, de santé et en énergie, les sociétés contemporaines pourront-elles survivre demain ? La réponse se construit à partir d\'un tour du monde dans l\'espace et dans le temps - depuis les sociétés disparues du passé (les îles de Pâques, de Pitcairn et d\'Henderson ; les Indiens mimbres et anasazis du sud-ouest des États-Unis ; les sociétés moche et inca ; les colonies vikings du Groenland) jusqu\'aux sociétés fragilisées d\'aujourd\'hui (Rwanda, Haïti, Saint-Domingue, la Chine, le Montana et l\'Australie) en passant par les sociétés qui surent, à un moment donné, enrayer leur effondrement (la Nouvelle-Guinée, Tikopia et le Japon de l\'ère Tokugawa). De cette étude comparée, et sans pareille, Jared Diamond conclut qu\'il n\'existe aucun cas dans lequel l\'effondrement d\'une société ne serait attribuable qu\'aux seuls dommages écologiques. Plusieurs facteurs, au nombre de cinq, entrent toujours potentiellement en jeu : des dommages environnementaux ; un changement climatique ; des voisins hostiles ; des rapports de dépendance avec des partenaires commerciaux ; les réponses apportées par une société, selon ses valeurs propres, à ces problèmes. Cette complexité des facteurs permet de croire qu\'il n\'y a rien d\'inéluctable aujourd\'hui dans la course accélérée à la dégradation globalisée de l\'environnement.', 100, 5, 2, 'effondrement.jpg'),
(10, 'Le monde jusqu\'à hier : Ce que nous apprennent les sociétés traditionnelles', 'Les passagers, munis de titres de transport électroniques, de bagages de cabine passés aux rayons X, attendent, guidés par un personnel aux uniformes seyants et sous l\'oeil d\'une police affairée à regarder les écrans de contrôle de sécurité, d\'embarquer pour Wapenamanda, Goroka, Kikori, Kundiawa et Wewak. Nous sommes à Port Moresby, capitale de la Papouasie-Nouvelle-Guinée. Rien que de normal. L\'essentiel est ailleurs : ces hommes d\'équipage, ces policiers à gadgets électroniques et ces passagers coutumiers de l\'avion sont les descendants directs de ces millions de Papous, découverts par une expédition australienne en 1931, vivants isolés dans leurs diverses vallées montagneuses, en petites sociétés closes, dépourvues d\'écriture, de monnaie, d\'écoles et de gouvernement centralisé, à un âge trop vite jugé \"de pierre\". En quelque quatre-vingts années, la population des Highlands de Nouvelle-Guinée a vécu des changements qui prirent des millénaires à advenir dans le reste du monde. Jared Diamond, qui découvrit la Nouvelle-Guinée en 1964 pour sa première étude de terrain ornithologique, pose la question, rarement envisagée : que nous apprennent ces Papous de ce que les Occidentaux ont perdu avec la disparition des sociétés traditionnelles, ces sociétés structurées en groupes de faible densité de population (allant de quelques dizaines à quelques milliers d\'individus), subsistant de la chasse et de la cueillette, de la culture ou de l\'élevage, et que les contacts avec les grandes sociétés industrielles ont transformées de façon limitée ? Elles ont en effet inventé des milliers de solutions aux problèmes humains différentes de celles adoptées par nos sociétés modernes. Certaines, par exemple, des manières d\'élever les enfants, de traiter les personnes âgées, de demeurer en bonne santé, de bavarder, de passer le temps libre, de pratiquer le multilinguisme ou de régler les litiges, semblent supérieures à celles des pays occidentalisés et riches. Les sociétés traditionnelles peuvent nous inspirer quelques meilleures pratiques de vie, mais également nous aider à évaluer d\'autres avantages de notre propre société que nous avons fini par considérer comme normaux.', 100, 5, 2, 'lemondejusquahier.jpg'),
(11, 'Le troisième chimpanzé : Essai sur l\'évolution et l\'avenir de l\'animal humain', 'L\'homme partage plus de 98 % de ses gènes avec le chimpanzé pygmée et le chimpanzé commun. On en mesure habituellement peu les implications. Le langage, l\'art, la technique et l\'agriculture - qui distinguent ce \"troisième chimpanzé\" - sont le fruit d\'une évolution non pas seulement anatomique, mais également comportementale : le faible nombre de petits par portée, les soins parentaux bien au-delà du sevrage, la vie en couple, l\'espérance de vie, la ménopause particularisent le cycle vital de l\'homme. À quel stade le troisième chimpanzé fit-il le saut quantique en matière de réussite évolutive, avec l\'acquisition de l\'aptitude au langage, il y a moins de cent mille ans? Depuis lors l\'animal humain déploie tous ses traits particuliers - notamment son aptitude unique à détruire massivement son genre et les écosystèmes, à ruiner la base même de sa propre alimentation. Génocide et holocauste écologique posent désormais la question cruciale de l\'extinction de l\'espèce humaine, à l\'instar de milliards d\'autres espèces disparues au cours de l\'histoire de l\'évolution.', 50, 5, 2, 'letroisiemechimpanze.jpg'),
(12, 'Humanité bio-inspirée, une autre approche', 'Depuis que la vie est née sur Terre il y a près de 4 milliards d\'années, notre planète a vu se développer d\'innombrables espèces insérées dans leurs écosystèmes. La biodiversité actuelle, riche de plus de 20 millions d\'espèces, s\'apparente à un véritable laboratoire de recherche et développement ! Mais la pression environnementale exercée par notre modèle productiviste met en péril cet équilibre, posant à terme la question de la survie de l\'humanité. Face à l\'urgence, une communauté croissante de chercheurs et d\'entrepreneurs s\'applique à prendre une nouvelle référence de créativité et de prospérité : le vivant.\r\n', 100, 6, 2, 'humanitebioinspiree.jpg'),
(13, 'Le vivant comme modèle', 'À tous ceux qui, conscients de l\'urgence des défis écologiques, s\'inquiètent de l\'avenir, ce livre apporte un formidable espoir, à la fois technique, stratégique et philosophique. Son idée part d\'un constat : la nature est un gigantesque laboratoire, vieux de plusieurs milliards d\'années, et riche d\'autant de solutions.\r\n\r\nLancé il y a une trentaine d\'années outre-Atlantique par des naturalistes d\'un nouveau genre, pour la plupart des femmes, le mouvement du biomimétisme se développe aujourd\'hui en Europe. Dans tous les secteurs, il propose des passerelles entre ceux qui construisent le monde : ingénieurs, managers, marchands, agriculteurs, médecins... et les scientifiques qui étudient la nature. Gauthier Chapelle en est un des plus brillants représentants.', 50, 6, 2, 'levivantcommemodele.jpg'),
(14, 'L\'entraide : un facteur de l\'évolution', 'Pierre Kropotkine (1842-1921) proposait ici, exemples à l\'appui, une conception du progrès dans la nature et la société fondée sur l\'entraide et la sociabilité. Homme de son temps, il faisait certes preuve du même scientisme naïf que les savants qu\'il pourfendait, mais il a le mérite d\'avoir mis en lumière des comportements animaux fascinants et des réalités historiques et culturelles trop souvent oubliées. Broché 14 x 20,5 - 400 pages', 100, 7, 2, 'lentraide.jpg'),
(15, 'La conquête du pain', 'Dans La Conquête du Pain, Pierre Kropotkine décrit comment la révolution peut parvenir à une société anarcho-communiste qui est libre, égalitaire et autonome. En publiant son argument en faveur de cette société, Kropotkine critiques des différents systèmes économiques, du capitalisme pur socialisme d’État au collectivisme. En outre, il fournit au lecteur une histoire de la Révolution. Il analyse les échecs et les réussites des révolutions passées, y compris les révolutions françaises de 1789, 1848 et 1871. Kropotkine insiste sur la capacité de l’humanité à coopérer et avancer à travers l’entraide et la science - capacités essentielles pour le succès de la révolution et de la société post-révolution. La Conquête du Pain est un travail important et durable de la théorie politique et de la pensée anarchiste.Pierre Kropotkine (1842-1921) est né un prince russe, mais a abandonné son titre à l’âge de douze ans. Il s’est échappé de son premier emprisonnement et a vécu la majeure partie de sa vie en exil. Bien qu’il était un géographe émérite, il est plus connu pour être un théoricien importante de l’anarchisme et l’anarcho-communisme.', 100, 7, 2, 'pain.jpg\r\n'),
(16, 'L\'art de la guerre', 'Il y a vingt-cinq siècles, dans la Chine des \"Royaumes Combattants\", était rédigé le premier traité sur \"l\'art de la guerre\". Pour atteindre la victoire, le stratège habile s\'appuie sur sa puissance, mais plus encore le moral des hommes, les circonstances qui l\'entourent et l\'information dont il dispose. La guerre doit être remportée avant même d\'avoir engagé le combat. Sun Tzu ne décrit pas les batailles grandioses et le fracas des épées, pas plus qu\'il n\'énumère des techniques vouées à l\'obsolescence : L\'Art de la guerre est un précieux traité de stratégie, un grand classique de la pensée politique, et une leçon de sagesse à l\'usage des meneurs d\'hommes. Autant que de courage, la victoire est affaire d\'intelligence.', 50, 8, 2, 'guerre.jpg\r\n'),
(17, 'Comment analyser les gens', 'Imaginez que vous ayez le pouvoir de déchiffrer toute personne que vous regardez et de lire en elle comme dans un livre ouvert, que ce soient votre ami, votre collègue, votre patron ou la personne que vous voulez conquérir.\r\n\r\nGrâce à ce livre, vous découvrirez exactement les mêmes techniques utilisées par le FBI durant les interrogatoires pour analyser toute personne, lire dans ses pensées et voir si elle ment ou non.\r\n\r\nSeuls 0,01 % des gens savent exactement comment déchiffrer le langage corporel secret, celui qui ne ment jamais, même si l’on cache des secrets. Vous pourrez comprendre en un coup d\'œil ce que pense votre interlocuteur, simplement en regardant l\'expression de son visage ou la façon dont il prononce certains mots.', 100, 9, 2, 'commentanalyser.jpg\r\n'),
(18, 'Manipulation mentale', 'Continuez à vos risques et périls : une fois que vous aurez appris ces techniques, il n\'y aura pas de retour en arrière possible !', 100, 9, 2, 'manipulationmentale.jpg\r\n'),
(19, 'Les étapes de la pensée sociologique', 'Raymond Aron, « spectateur engagé », a tenté de concilier l\'étude et l\'action tout au long de sa vie. Il écrit ainsi, au sujet de Max Weber, sociologue allemand dont il s\'inspira : « On ne peut être en même temps homme d’action et homme d’études, sans porter atteinte à la dignité de l’un et de l’autre métier, sans manquer à la vocation de l’un et de l’autre. Mais on peut prendre des positions politiques en dehors de l’université, et la possession du savoir objectif, si elle n’est peut-être pas indispensable, est à coup sûr favorable à une action raisonnable. » Plus loin, on trouve cette déclaration, tout aussi ambiguë : « Max Weber interdisait au professeur de prendre parti dans les querelles du Forum, à l’intérieur de l’université, mais il ne pouvait pas ne pas considérer l’action, au moins par la parole ou par la plume, comme l’aboutissement de son travail. source wikipedia', 100, 10, 2, 'penseesociologique.jpg\r\n'),
(20, 'L\'opium des intellectuels', 'Introduit par Nicolas Baverez qui présente le contexte dans lequel il fut écrit et publié, ce livre est devenu un classique. Raymond Aron y prend vivement à partie les intellectuels compagnons de route du parti communiste, notamment Sartre et le groupe des Temps modernes, et analyse les raisons de leur aveuglement. Il montre comment la volonté de croire en un avenir enchanté peut conduire à refuser de voir la réalité d’un système qui piétine la liberté et la dignité humaines. Ce message peut continuer à nourrir une éthique intellectuelle telle que la définit les dernières lignes du livre : « Si la tolérance naît du doute, qu’on enseigne à douter des modèles et des utopies, à récuser les prophètes de salut, les annonciateurs de catastrophes. Appelons de nos vœux la venue des sceptiques s’ils doivent éteindre le fanatisme. »', 100, 10, 2, 'opium.jpg\r\n'),
(21, 'Les décisions absurdes : Sociologie des erreurs radicales et persistantes', 'Il arrive que les individus prennent collectivement des décisions singulières et agissent avec constance dans le sens totalement contraire au but recherché : pour éviter un accident, des pilotes s\'engagent dans une solution qui les y mène progressivement ; les ingénieurs de Challenger maintiennent obstinément des joints défectueux sur les fusées d\'appoint ; des copropriétaires installent durablement un sas de sécurité totalement inutile ; une entreprise persévère dans l\'usage d\'un outil de gestion au résultat inverse de l\'objectif visé... Quels sont les raisonnements qui produisent ces décisions absurdes ? Les mécanismes collectifs qui les construisent ? Quel est le devenir de ces décisions ? Comment peut-on à ce point se tromper et persévérer ? Ces questions, auxquelles Christian Morel répond grâce à une analyse sociologique aux multiples facettes, conduisent à une réflexion globale sur la décision et le sens de l\'action humaine.', 100, 11, 2, 'decisions.jpg'),
(22, 'Interdits et limites', 'Entre les tenants du slogan de Mai 68 \"il est interdit d\'interdire\" et ceux qui insistent sur la nécessité des limites, toutes les positions aujourd\'hui sont possibles. Cette diversité constitue l\'une des sources de malentendus les plus fréquentes entre les cultures, les familles, les personnes. La psychanalyse retrouve le même dilemme au coeur du fonctionnement psychique de chaque sujet où la tendance au laxisme total et l\'attitude coercitive coexistent depuis les origines, entretenant des conflits permanents. Sans interdits et sans limites, aucune vie psychique n\'est possible, aucune vie sociale non plus. Et la vraie question est de les clarifier, puis de les gérer, de telle sorte qu\'ils ouvrent l\'espace à l\'expression et à l\'échange, en chacun et entre les sujets, au lieu de le fermer. Une tâche indispensable, qui s\'impose à chaque âge de la vie.', 100, 11, 2, 'interdits.jpg'),
(23, 'Mon grand livre de jeux', '50 scènes de jeux Chaque jeu a une thématique. Plusieurs éléments différents à trouver dans chaque scène. Des scènes sur 1 page, des scènes sur 2 pages. Exemples de thèmes proposés : les dinosaures, les fleurs, à la piscine, au carnaval, à la patinoire, à la ferme, le Moyen Âge, l\' anniversaire... Toutes les solutions à la fin de l\' ouvrage.', 100, 12, 4, 'chercheettrouve.jpg'),
(24, 'La couleur des émotions', 'Le monstre des couleurs se sent tout barbouillé aujourd\'hui. Ses émotions sont sens dessus dessous ! Il ne comprends pas ce qui lui arrive. Réussira-t-il à mettre de l\'ordre dans son cur et à retrouver son équilibre ?', 100, 13, 4, 'emotions.jpg'),
(25, 'Dictionnaire visuel des arbres et arbustes communs', 'Dans son premier opus Maurice Reille nous a livré un Dictionnaire visuel de botanique sans équivalent, salué par la presse pour la beauté des images, l\'érudition de l\'auteur et le fait qu\'il soit parfaitement accessible à tous.', 50, 14, 4, 'dictionnairevisuel.jpg'),
(26, 'Dictionnaire visuel de botanique', 'Pour tous les amoureux de plantes\r\nCe dictionnaire, d\'une richesse visuelle inégalée, illustre tout le vocabulaire utile', 50, 14, 4, 'dicobota.jpg'),
(27, 'Disney - Heros et Aventures - 30 Histoires pour le Soir', 'Un recueil de 30 histoires   pour le soir autour des héros Disney et Pixar : Cars, Toy Story, .. Aventure et humour seront au rendez-vous dans ce recueil thématisé ! Un format broché épais avec coins ronds, idéal pour les petits.', 100, 15, 4, 'histoirespourlesoir.jpg'),
(28, 'Histoire de France : De la Préhistoire à nos jours', 'De la Préhistoire à la création de l\'Union Européenne, en passant par les grandes batailles de Moyen-Âge, découvrez l\'histoire des personnalités et des événements qui ont construit la France.', 50, 15, 4, 'histoirefrance.jpg'),
(29, 'Livre de coloriage dinosaure', 'Ce livre de coloriage de dinosaures contient 69 pages a colorier.Si votre enfant aime les dinosaures et que vous voulez qu\'il sache des choses intéressantes sur ces animaux préhistoriques, emmenez-le dans une aventure avec cet incroyable livre de coloriageCe livre de coloriage amusant de dinosaures divertira votre enfant!', 100, 16, 4, 'colodino.jpg\r\n'),
(30, 'Surprenants animaux', 'Les animaux comme vous ne les avez jamais vus, grâce à d’incroyables images de synthèse, des photographies époustouflantes et des explications très précises  !\r\n', 100, 17, 4, 'animaux.jpg'),
(31, 'La petite encyclopédie du pourquoi?', 'Pourquoi l\'orage fait-il du bruit ? Pourquoi les feuilles tombent-elles en automne ? Pourquoi y a-t-il des montagnes ? Pourquoi avons-nous un nombril ? Pourquoi les flamants sont-ils roses ? Pourquoi les bateaux flottent-ils ?Des réponses courtes, claires et précises à près de 150 questions des petits sur la nature, les animaux, le corps, la Terre et le ciel.Des pages transparentes, des planches documentaires pour enrichir ses connaissances et de belles images réalistes à reconnaître et à nommer.', 100, 18, 4, 'pourquoi.jpg'),
(32, 'La petite encyclopédie des animaux, questions - réponses', 'Qu\'est-ce qu\'un animal ? Qui habite dans la savane ?Comment s\'envole un oiseau ? Que font les animaux quand ils sont amoureux ?Une exploration passionnante du règne animal, des milieux naturels, de la vie des animaux et des dangers qui les menacent.', 100, 18, 4, 'encyanimaux.jpg\r\n'),
(33, 'La petite encyclopédie des comment?', 'Comment poussent les plantes ? Comment dorment les animaux ? Comment l\'eau arrive-t-elle au robinet ? Comment fait-on les bébés ? Comment vole un avion ? Comment combattaient les pirates ?Des réponses courtes, claires et précises à près de 150 questions des petits sur la nature, le corps, la vie quotidienne, l\'histoire des hommes.', 100, 18, 4, 'comment.jpg'),
(34, 'La petite poule qui voulait voir la mer', '\"Pondre, toujours pondre! Il n\'y a pas que çà dans la vie ! Moi je veux voir la mer ! \" s\'écrie Carméla, la petite poule blanche. Son père, le coq, n\'a jamais rien entendu d\'aussi fou. \"File au lit\", ordonne-t-il à la poulette. Mais Carméla n\'arrive pas à s\'endormir...\r\n', 100, 19, 4, 'petitepoule.jpg'),
(35, 'Un poulailler dans les étoiles', 'Un petit poulet au sacré caractère refuse le train-train quotidien du poulailler. Son rêve ? Toucher les étoiles... Et à cœur de poulet, rien d\'impossible !\r\n\r\nApprocher les étoiles ! Depuis qu\'il est sorti de son oeuf, Carmélito, le petit poulet, ne rêve que de çà. Oui, mais comment faire quand on n\'est qu\'un minuscule poussin face à l\'univers ? À coeur de poulet, rien n\'est impossible !', 100, 19, 4, 'poulailler.jpg'),
(36, 'Les p\'tites poules', 'Connaissez-vous Carmen, la petite poulette qui en a sous le crête ? Son frère, Carmélito, le téméraire petit poulet rose ? Leurs copains Coquenpâte, Coqsix, Molédecoq, Hucocotte et les autres agités du poulailler ?\r\nVoyages, humour, émotion, frisson et fantaisie... Voilà ce que vous trouverez dans le collector des quatre premières aventures des P\'tites Poules.\r\n\r\nÀ la fin du livre, des extraits du carnet secret des auteurs !!!', 100, 19, 4, 'ptitespoules.jpg'),
(37, 'T\'choupi - ma petite école', 'Une petite bibliothèque de T\'choupi sur le thème des premiers apprentissages !\r\n6 petits livres tout-carton dans un coffret avec une cachette à trésors : les formes, les lettres, les chiffres, les couleurs, les contraires, l\'anglais.\r\nUn coffret compact et pratique.', 100, 20, 4, 'tchoupi.jpg'),
(38, 'Le petit prince raconté aux enfants ', 'Le Petit Prince raconté aux enfants - Livre sonore - Dès 3 ans', 50, 21, 4, 'petitprince.jpg'),
(39, 'Réussir sa première année d\'études supérieures', 'Entreprendre une première année dans l enseignement supérieur est un beau défi mais constitue parfois une véritable rupture pour les jeunes étudiants confrontés à de nouvelles difficultés (méthodes d étude inadaptées, méconnaissance des habitudes universitaires, manque de motivation à se plonger dans ses cours...).', 100, 22, 3, 'reussir.jpg'),
(40, 'Cybersécurité des services informatiques 1re année BTS SIO', 'Un ouvrage conforme au nouveau référentiel du BTS SIO. Des chapitres construits autour de situations professionnelles variées pour travailler en contexte. Des missions professionnelles pour mettre en place les compétences de façon active.Des travaux sur poste informatique pour les deux heures hebdomadaires de laboratoire. Des fiches ressources synthétiques qui couvrent l\'ensemble des savoirs : savoirs technologiques et CEJM appliquée. Des applications nombreuses et variées pour consolider les compétences. Des entraînements à l\'examen progressifs. INCLUS : les machines virtuelles pour les manipulations sur poste informatique en laboratoire, à télécharger gratuitement.', 100, 23, 3, 'cybersecurite.jpg'),
(41, 'Mathématiques pour l\'informatique BTS SIO', 'Cet ouvrage est destiné aux étudiants préparant le BTS SIO (Services informatiques aux organisations). Il pourra également intéresser les étudiants en  IUT d’informatique, ou ceux en licence ou en classes préparatoires souhaitant acquérir des bases de l’algorithmique.', 100, 24, 3, 'mathematiques.jpg'),
(42, 'Infrastructure des réseaux informatiques ', 'Cet ouvrage a pour objectif de parcourir le domaine de l’infrastructure des réseaux informatiques en fournissant au lecteur des outils qui lui permettront d’aborder toutes les notions de manière synthétique.\r\nLes supports physiques, les normes d’architectures, les protocoles employés et les services fournis par les solutions actuelles sont présentés, accompagnés par des schémas et des exemples.\r\nCe livre est organisé en deux parties :\r\n- 50 fiches synthétiques : Chaque notion est abordée de manière simple pour en extraire les aspects principaux, illustrée de schémas pour en présenter les points essentiels et\r\nd’exemples d’applications.', 100, 25, 3, 'infrastructures.jpg'),
(43, 'Sigma mathématiques pour l\'informatique BTS SIO', '1. Une partie obligatoire : Mathématiques pour l’informatique composée de deux unités :\r\n- Mathématiques (évaluée en contrôle final)\r\n- Algorithmique appliquée (évaluée en CCF)\r\nCe nouveau manuel, accompagné de fichiers TICE en ligne, traite l’ensemble des deux unités de la partie obligatoire.\r\n\r\n2. Une partie facultative : Mathématiques approfondies.\r\nPour cet enseignement facultatif, nous conseillons l’usage du manuel de BTS CGO.', 100, 26, 3, 'sigmamath.jpg'),
(44, 'L’épreuve d’anglais aux BTS SIO', 'Outil indispensable, ce livre propose : • une présentation méthodologique des épreuves d’anglais aux deux BTS ; • le vocabulaire essentiel du secteur (l’équipement, les logiciels et les réseaux, le commerce en ligne, la cybersécurité…) ; • les rappels linguistiques fondamentaux (grammaire, conjugaison, syntaxe). Enfin, de nombreux exercices ainsi que des sujets d’entraînement et d’annales corrigés permettent de progresser en anglais et de se familiariser avec l’examen.', 100, 27, 3, 'btsanglais.jpg'),
(45, 'Réseaux informatiques - Notions fondamentales (8e édition)', 'Ce livre sur les réseaux s\'adresse aussi bien aux personnes désireuses de comprendre les réseaux informatiques et les systèmes d\'exploitation, qu\'aux informaticiens plus expérimentés souhaitant renforcer et mettre à jour leurs connaissances. Le lecteur identifie les contextes d\'accès aux réseaux d\'aujourd\'hui grâce notamment à des illustrations détaillant clairement les composants et technologies mis en jeu. De nombreux exemples reposant sur une approche client/serveur lui permettent de passer en revue les systèmes d\'exploitation les plus courants, ainsi que les matériels associés. La tolérance de panne et le stockage sont également détaillés avec les différentes typologies de disque ainsi que les notions telles que NAS, SAN, zoning, Fibre Channel, FCoE ou encore iSCSI. Les protocoles de réplication entre baies sont également décrits ainsi que le fonctionnement de la déduplication pour les sauvegardes et le principe des WAAS. Une synthèse sur la virtualisation est proposée permettant au lecteur de bien comprendre les enjeux, les avantages et inconvénients apportés par les différentes solutions du marché. Avec une approche pragmatique, l\'auteur permet ensuite au lecteur de mieux comprendre le modèle OSI en couches réseau de référence. Puis, de manière exhaustive, les principes de base sont présentés (normes, architectures courantes, câblages, codage des données, topologie, réseaux sans fil, interconnexions de réseaux...) ', 100, 28, 3, 'reseaux.jpg'),
(46, 'Les réseaux - Administrez un réseau sous Windows ou sous Linux', 'Ce livre sur les réseaux informatiques est destiné à toute personne ayant une connaissance générale sur les ordinateurs (matériel, logiciels). Il propose de nombreux exercices, un ensemble de travaux pratiques complets avec corrigés détaillés ainsi que des études de cas, pour travailler sur les grands thèmes liés aux réseaux TCP/IP.', 100, 28, 3, 'reseauxadmin.jpg'),
(47, 'Culture Économique, Juridique et Managériale - 2e année', 'Cet ouvrage de BTS 2e année, Culture Économique, Juridique et Managériale, de la Collection Réflexe, conforme au nouveau programme, propose une approche transversale de l\'économie, du droit et du management, et met l\'entreprise au centre du questionnement.', 100, 29, 3, 'cejm2.jpg'),
(48, 'Culture Économique, Juridique et Managériale - 1re année ', 'Cet ouvrage de BTS 1re année, Culture Économique, Juridique et Managériale, de la Collection Réflexe, conforme au nouveau programme, propose une approche transversale de l\'économie, du droit et du management, et met l\'entreprise au centre du questionnement.\r\n', 100, 29, 3, 'cejm1.jpg'),
(49, 'A toute vitesse! Programme BTS', '« Vite fait bien fait », « et que ça saute ! », illico presto, ASAP : ces expressions que nous employons au quotidien révèlent la frénésie de nos modes de vie. Et pour cause ! Les transports sont de plus en plus rapides, les communications instantanées, les technologies en mutation permanente. Aucun aspect du monde moderne n\'est épargné. Si bien que, pris dans une folle cadence, nous avons parfois l\'impression de perdre pied.\r\n', 100, 30, 3, 'toutevitesse.jpg'),
(50, 'Musique, maestro ! Recueil de nouvelles BTS ', 'BTS 2021-2022\r\nMusique, maestro !\r\nÉdition : Élise Chedeville', 100, 30, 3, 'musique.jpg'),
(51, 'La ferme des animaux', '\"Un certain 21 juin eut lieu en Angleterre la révolte des animaux. Les cochons dirigent le nouveau régime. Snowball et Napoléon, cochons en chef, affichent un règlement : \"Tout ce qui est sur deux jambes est un ennemi. Tout ce qui est sur quatre jambes ou possède des ailes est un ami. Aucun animal ne portera de vêtements. Aucun animal ne dormira dans un lit. Aucun animal ne boira d\'alcool. Aucun animal ne tuera un autre animal. Tous les animaux sont égaux.\"Le temps passe. La pluie efface les commandements. L\'âne, un cynique, arrive encore à déchiffrer : \"Tous les animaux sont égaux, mais (il semble que cela ait été rajouté) il y en a qui le sont plus que d\'autres.\"\"', 100, 31, 5, 'goferme.jpg'),
(52, '1984', 'Année 1984 en Océanie. 1984 ? C\'est en tout cas ce qu\'il semble à Winston, qui ne saurait toutefois en jurer. Le passé a été réinventé, et les événements les plus récents sont susceptibles d\'être modifiés. Winston est lui-même chargé de récrire les archives qui contredisent le présent et les promesses de Big Brother. Grâce à une technologie de pointe, ce dernier sait tout, voit tout. Liberté est Servitude. Ignorance est Puissance. Telles sont les devises du régime. Pourtant Winston refuse de perdre espoir. Avec l\'insoumise Julia, ils vont tenter d\'intégrer la Fraternité, une organisation ayant pour but de renverser Big Brother. Mais celui-ci veille...', 100, 31, 5, '1984.jpg'),
(53, 'Sa majesté des mouches', '\" Et si j\'écrivais l\'histoire de jeunes garçons sur une île ? Je les laisserais se comporter exactement comme ils voudraient. \" William Golding a relevé ce défi, et voici nos collégiens anglais \" sans grandes personnes \" sur une île déserte du Pacifique. C\'est l\'aventure, c\'est la liberté - serait-ce le paradis ?', 100, 32, 5, 'mouches.jpg'),
(54, 'Poe : Oeuvres en prose', 'Poe : Oeuvres en prose Relié – 1 janvier 1951', 100, 33, 5, 'poeprose.jpg'),
(55, 'Histoires extraordinaires (Français) Poche – 1 mars 1972', 'Baudelaire avait raison : ces nouvelles sont extraordinaires.\r\nUn homme atteint la lune en ballon, un autre transforme en or les vils métaux, les morts apparaissent pour entraîner les vivants au tombeau, les malédictions s\'accomplissent.\r\nEdgar Poe était fasciné par le rêve, le spiritisme, la métempsycose mais aussi les sciences. Il a créé un monde irréel d\'autant plus envoûtant que le fantastique est peint avec logique et minutie.\r\nCet écrivain américain ressentit toute sa vie la perversité qui existe en tout être. L\'homme est sans cesse et à la fois homicide et suicide, assassin et bourreau.\r\n« Edgar Poe a emprunté la voie royale du grand art. Il a découvert l\'étrange dans le banal, le neuf dans le vieux, le pur dans l\'impur. Voilà un être complet », disait Valéry.', 100, 33, 5, 'histoirespoe.jpg'),
(56, 'Notre besoin de consolation est impossible à rassasier', 'Depuis la découverte, en 1981, de ce texte où Stig Dagerman, avant de sombrer dans le silence et de se donner la mort, fait une ultime démonstration des pouvoirs secrètement accordés à son écriture, le succès ne s\'est jamais démenti. On peut donc, aujourd\'hui, à l\'occasion d\'une nouvelle édition de ce \"testament\", parler d\'un véritable classique, un de ces écrits brefs dont le temps a cristallisé la transparence et l\'inoubliable éclat.', 100, 34, 5, 'consolation.jpg'),
(57, 'Anna Karénine', 'Anna n\'est pas qu\'une femme, qu\'un splendide spécimen du sexe féminin, c\'est une femme dotée d\'un sens moral entier, tout d\'un bloc, prédominant : tout ce qui fait partie de sa personne est important, a une intensité dramatique, et cela s\'applique aussi bien à son amour.\r\nElle n\'est pas, comme Emma Bovary, une rêveuse de province, une femme désenchantée qui court en rasant des murs croulants vers les lits d\'amants interchangeables. Anna donne à Vronski toute sa vie.\r\nElle part vivre avec lui d\'abord en Italie, puis dans les terres de la Russie centrale, bien que cette liaison « notoire » la stigmatise, aux yeux du monde immoral dans lequel elle évolue, comme une femme immorale. Anna scandalise la société hypocrite moins par sa liaison amoureuse que par son mépris affiché des conventions sociales.\r\nAvec Anna Karénine, Tolstoï atteint le comble de la perfection créative.\r\nVladimir Nabokov.', 100, 35, 5, 'karenine.jpg'),
(58, 'La guerre et la paix', 'Au début du XIXE siècle, Pierre Bézoukhov, fils illégitime héritier d\'une grande fortune, et son ami André Bolkonsky, officier tourmenté, évoluent dans une haute société russe francophile et mondaine qui ne tardera pas à être rattrapée par les tourments de la guerre qui s\'annonce. Le parcours spirituel et politique de Pierre, comme le trajet militaire d\'André, est inséparable du destin contrarié de la Russie : Saint-Pétersbourg et Moscou, la campagne et la ville, la Sibérie et l\'Europe¿ La Russie est bicéphale, tragiquement clivée par le désir patiné de haine qui l\'attache au reste de l\'occident. La France et Napoléon sont l\'incarnation de cet idéal policé et calculateur : un ennemi mortel que les personnages admireront avant de le combattre. Au cœur des guerres napoléoniennes qui ravagèrent le vieux continent, Tolstoï tourne les pages d\'un roman immortel : l\'âme russe.', 100, 35, 5, 'guerrepaix.jpg'),
(59, 'Bel-ami', 'A qui Georges Duroy doit-il son irrésistible ascension ? Aux femmes séduites par sa jeunesse et sa beauté. La petite fille de l\'une de ses maîtresses le surnommera Bel-Ami. Et ce fils d\'aubergistes normands, à Canteleu, deviendra baron Du Roy de Cantel. L\'amitié lui ouvrira la carrière journalistique. L\'amour lui donnera l\'argent et la gloire. Maupassant a été journaliste. Il a connu ce monde parisien du xixe siècle, les salles de rédaction qui font et défont les ministères, et leurs annexes, les salons mondains où naissent intrigues et liaisons. Ses portraits de femmes dévorées d\'amour ou d\'ambition, ses tableaux de la vallée de la Seine à Rouen, ses fiacres, avenue du Bois de Boulogne, sont oeuvre de peintre. Maupassant était un maître du récit.', 100, 36, 5, 'belami.jpg'),
(60, 'Une vie', 'Jeanne, fille unique très choyée du baron et de la baronne Le Perthuis des Vauds, avait tout pour être heureuse. Son mariage avec Julien de Lamare, rustre et avare, se révélera une catastrophe. Sa vie sera une suite d\'épreuves et de désillusions.\r\nCe roman, le premier de Guy de Maupassant, est une peinture remarquable des moeurs provinciales de la Normandie du xixe siècle : hobereaux, domestiques, paysans y sont décrits avec beaucoup de réalisme.', 100, 36, 5, 'unevie.jpg\r\n'),
(61, 'Une histoire inédite de la France en 100 cartes', 'L\'histoire de la France cartographiée, de la préhistoire à nos jours, et racontée par Jean Sévillia.\r\nEn cinq parties - \"Les origines\", \"Le royaume de France\", \"La nation française\", \"Les temps modernes\" et \"La France aujourd\'hui\" - et plus de 100 cartes inédites et richement détaillées, de celle des principaux sites préhistoriques au planisphère de la francophonie actuelle, cet ouvrage novateur donne à voir, véritablement, une autre histoire de France, vivante, presque charnelle. La bataille d\'Alésia, Le partage de Verdun, la France des monastères de l\'an 1000 au XIIe siècle, l\'art roman ou gothique, les croisades, la France de François Ier, les princiaux monuments de la Renaissance, les résidences de Louis XIV, la frontière fortifiée de Vauban, les Lumières, les minorités religieuses aux XVIIe et XVIIIe siècles, les guerres de Vendée, la France du Premier Empire, la révolution de 1830, la construction du réseau ferré au XIXe, l\'alphabétisation, l\'urbanisation et les langues régionales en 1900, la Grande Guerre, ses victimes, les élections législatives de 1936, celles de 1946 - après la France occupée et la libération du territoire national ', 100, 37, 6, 'histoirefrancecarte.jpg'),
(62, 'Churchill', 'a meilleure biographie de Churchill, abondée de documents inédits.\r\nDe Churchill, croit-on, tout a été dit – en premier lieu par lui-même. Et pourtant, Andrew Roberts est parvenu à exhumer des articles de presse, des correspondances privées, des journaux intimes – le moindre n\'étant pas celui du roi Georges VI, jusque-là sous clé – qui ne figurent dans aucune des mille biographies environ déjà consacrées à ce personnage essentiel de la Grande-Bretagne et du XXe siècle. Tout cela lui permet de proposer un récit extrêmement enlevé, fondé sur une abondance de citations désormais \" classiques \", mais également souvent peu connues voire inédites qui apportent une éclairage parfois convergent, parfois contrasté sur l\'homme Churchill. Démêlant le vrai du faux, tordant le cou aux nombreux mythes voire aux calomnies qui lui collent à la peau, mais relevant les critiques justifiées dont il est loin d\'être exempt, Roberts brosse avec maestria le portrait de ce \" Vieux Lion \" dont toute la vie avant 1940 n\'a fait que préparer le grand œuvre que demeurent ses années de guerre.', 100, 38, 6, 'churchill.jpg'),
(63, 'Décolonisations françaises - La chute d\'un empire', 'L\'empire colonial français se développe au XIXe siècle et devient le deuxième empire le plus vaste du monde, après celui du Royaume-Uni. Les contestations se multiplient dès l\'entre-deux-guerres. Mais les bouleversements liés à la Seconde Guerre Mondiale accentuent la remise en question de la domination française. Commence dès lors un long processus de décolonisation, qui est aussi le plus long conflit de la France au XXe siècle, depuis les premiers soulèvements en 1943 jusqu\'aux dernières indépendances au milieu des années 1970.\r\n\r\nPascal Blanchard, Nicolas Bancel et Sandrine Lemaire évoquent toutes les facettes et les contradictions de ce processus, tantôt marqué par des épisodes d\'une violence inouïe, tantôt accompagné de réformes et d\'accords bilatéraux maintenant, des décennies plus tard, une forte dépendance des pays décolonisés vis-à-vis de la France. À travers près de 250 photographies, documents de presse ou affiches, ils décryptent l\'un des plus grands basculements de l\'histoire récente, et posent un regard renouvelé sur les deux faces du miroir colonial.', 100, 39, 6, 'decolonisation.jpg'),
(64, 'Le Proche-Orient : De Pompée à Muhammad, Ier s. av. J.-C. - VIIe s. apr. J.-C. ', 'Que savons-nous du lointain passé du Proche-Orient, qui occupe aujourd\'hui, de façon presque permanente, le devant de la scène médiatique ? Du Ier siècle av. J.-C. au VIIe siècle apr. J.-C., ce « croissant fertile » enserrant des régions arides entre la Méditerranée et les eaux de l\'Euphrate fut à sa façon un centre du monde. Il mit en relation l\'Empire romain, dont il faisait partie, avec l\'Arabie Heureuse, la Perse, l\'Inde et la Chine, et par lequel transitaient l\'encens, la myrrhe, le poivre, les perles et la soie. Pourtant, vu de Rome, puis de Constantinople, cet ensemble territorial pouvait sembler marginal et, de fait, il constituait une frontière. Ce volume déplace donc le regard du centre vers la périphérie ou, plus exactement, il place cette périphérie au coeur de l\'enquête. Catherine Saliou présente un Proche-Orient inscrit dans la longue durée, de la création de la province romaine de Syrie à la conquête islamique. Dans une perspective géohistorique, elle retrace l\'évolution politique, culturelle et écono-mique de ce vaste territoire, étudie ses rapports avec les autres régions du monde antique et restitue, au plus près des modes de vie saisis au quotidien, les pratiques et les acteurs d\'une histoire foisonnante. Des cartes originales guident le lecteur dans cet espace méconnu ; de magni-fiques illustrations lui permettent de visiter Jérusalem et Massada, de mesurer la splendeur de Palmyre et de Pétra, d\'apprécier la beauté des fresques de la syna-gogue de Doura-Europos et de bien d\'autres sites dans cet effervescent carrefour de peuples, de langues et de civilisations.', 100, 40, 6, 'procheorient.jpg'),
(65, 'L\'Edda: Récits de mythologie nordique', 'L\'Edda: Récits de mythologie nordique (Français) Broché – 21 février 1991', 100, 41, 6, 'ledda.jpg'),
(66, 'L\'empire romain DP - numéro 8136 ', 'Au Ier siècle av. J.-C., Rome a formé un empire à l\'échelle de l\'Europe occidentale et de la Méditerranée. Tout en conservant les apparences républicaines, Auguste fonde un nouveau régime politique : le Principat. Il adapte ainsi les institutions romaines aux dimensions de l\'Empire. Ce moment politique essentiel ouvre une période de cinq siècles d\'unité territoriale autour de la Méditerranée pendant laquelle s\'épanouit la civilisation gréco-romaine.\r\nCe dossier explore l\'Empire romain dans sa diversité, ses évolutions et ses éléments de continuité structurants. Il offre un aperçu de cette société fortement hiérarchisée, reposant sur l\'esclavage, mais dans laquelle des affranchis peuvent s\'élever à des fonctions parmi les plus hautes de l\'État.', 100, 42, 6, 'empromain.jpg'),
(67, 'Les Croisades vues par les Arabes', 'Juillet 1096 : il fait chaud sous les murailles de Nicée. A l\'ombre des figuiers, dans les jardins fleuris, circulent d\'inquiétantes nouvelles : une troupe formée de chevaliers, de fantassins, mais aussi de femmes et d\'enfants, marche sur Constantinople. On raconte qu\'ils portent, cousues sur le dos, des bandes de tissu en forme de croix. Ils clament qu\'ils viennent exterminer les musulmans jusqu\'à Jérusalem, et déferlent par milliers. Ce sont les \" Franj \". Ils resteront deux siècles en Terre sainte, pillant et massacrant pour la gloire de leur dieu. Cette incursion barbare de l\'Occident au cœur du monde musulman marque le début d\'une longue période de décadence et d\'obscurantisme. Elle est ressentie aujourd\'hui encore, en terre d\'islam, comme un viol.', 100, 43, 6, 'croisades.jpg'),
(68, 'Dominer et tenir la terre : Dans le haut Moyen Age', 'Barbare ? Informel ? Obscur ? En analysant la question foncière, ce livre démontre qu\'au contraire le haut Moyen Âge est une période inventive pour le droit. Du VIe au Xe siècle, durant lesquels la détention de la terre est le fondement de toute puissance, les terres publiques sont gérées de manière attentive : comment concéder la terre publique à des fidèles, afin d\'éviter le risque d\'accaparement ? Analysant le droit foncier, ce livre interroge les cadres et les concepts avec lesquels on parle de la terre dans les sociétés dites « barbares » et permet de dresser un portrait inattendu des sociétés du haut Moyen Âge, plus attaché au formalisme juridique qu\'on ne le croit couramment. Toutes les institutions foncières sont réexaminées et réévaluées ; des concessions aux églises à la colonisation agraire, en passant par les techniques d\'enregistrement et de publicité foncière. En montrant ainsi un formalisme toujours plus affirmé et l\'apparition d\'innovations juridiques totalement inconnues du droit romain, ce livre propose une approche inédite des sociétés rurales du haut Moyen-Âge.', 100, 44, 6, 'dominer.jpg'),
(70, 'Politique coloniale de l\'Angleterre', '“ Il y a longtemps que l’Angleterre est proposée à la France comme un modèle à étudier, sinon à imiter entièrement. Presque exclusivement occupée, depuis un demi-siècle, du soin de se donner une constitution, la France ne semble connaître encore de l’Angleterre que le mécanisme de ses institutions intérieures ; mais nous n’avons plus à réaliser aujourd’hui les principes abstraits des théories constitutionnelles, et, dans la voie des affaires où nous sommes définitivement entrés, nous pouvons demander à l’histoire des développements de la puissance anglaise des enseignements plus utiles peut-être. Lors même que nous n’aurions à gagner à cette école aucune des mâles qualités, l’ardeur, l’habileté, l’esprit de suite, qui fondent et soutiennent la puissance politique, des intérêts presque toujours hostiles devraient nous commander de connaître à fond le génie d’un peuple sur la véritable grandeur duquel il serait aussi funeste que puéril de se laisser aveugler par des susceptibilités nationales. L’opinion générale sait une chose vraie de l’Angleterre: c’est que les lois mêmes de sa nature lui imposent la nécessité d’accroître continuellement sa domination. La production des richesses est l’unique mobile du peuple anglais. Tout a concouru à assigner ce grand intérêt pour unité d’action à ses travaux et à sa politique : les conditions physiques du sol qu’il habite, qui en ont fait le peuple le plus industriel de la terre ; sa situation insulaire, qui lui a fourni par le commerce et la marine les moyens immédiats de répandre ses produits sur tous les marchés du monde ; enfin sa constitution aristocratique...”', 100, 46, 6, 'polang.jpg'),
(71, 'Fait Maison - numéro 2 par Cyril Lignac', 'Cyril Lignac cuisine 45 recettes salées et sucrées pour continuer de mettre un peu de peps dans ton quotidien.\r\n\r\nDes tomates farcies, des crêpes au jambon, un poulet basquaise, riz cuisiné à la crème de chorizo, une salade de pâtes, pesto rosso ou encore un délicieux soufflé au chocolat, riz soufflé caramélisé ou un moelleux aux pommes et à la cannelle...\r\n\r\n\" Tu vas te régaler en toute simplicité ! \"\r\n\r\nPour égayer tes déjeuners et dîners, des recettes faciles et rapides à déguster en solo, à deux, en famille ou entre amis.\r\n\r\nAvec Cyril, le fait-maison c\'est facile ! Mets ton tablier et laisse-toi guider par ses précieux conseils et ses recettes ultra-réconfortantes.', 100, 47, 7, 'faitmaison.jpg'),
(72, 'En cuisine - 200 recettes pour tous les jours Nouvelle édition', 'J’ai décidé de partager avec vous 200 recettes pour tous les jours  qui me ressemblent, faciles à réaliser chez vous. Certaines sont ancrées dans le terroir et la tradition, d’autres sont plus modernes et contemporaines, dans l’air du temps. Elles portent toutes ma griffe : mon amour de  la bonne cuisine simple pour tous les jours et celle des jours de fête.  Vous y retrouverez aussi mes petites astuces personnelles.\r\n\r\nDans ce livre, vous trouverez tout d’abord une sélection de recettes conviviales et innovantes pour cuisiner sur le pouce et préparer  un apéro entre amis sans perdre des heures en cuisine. Le chapitre  Cuisine fraîcheur vous livre ensuite des recettes bien-être, légères  et gourmandes, qui vous permettront de vous régaler en finesse.  Puis, dans Cuisine express, profitez de recettes rapides, faciles \r\net originales pour cuisiner vite et bon au quotidien sans banalité.  Vous découvrirez enfin des desserts gourmands, des plus traditionnels  aux plus audacieux, pour vous faire plaisir sans difficulté.', 100, 47, 7, '200rec.jpg'),
(73, 'La Pâtisserie', '\" La pâtisserie est une affaire de tendresse maternelle. Je veux que mes gâteaux réconfortent les gens, qu\'ils leur apportent de la douceur. \"\r\n\r\nLa pâtisserie, un condensé d\'émotions...\r\n\r\nS\'il s\'exprime aussi bien en cuisine qu\'en chocolaterie, Cyril Lignac nous ouvre ici les portes de sa pâtisserie pour mieux nous livrer son savoir-faire au cœur de notre quotidien. Avec Benoît Couvrand, grand pâtissier et complice créatif, il imagine 55 recettes sous le signe de la simplicité et de la proximité : classiques revisités, petites douceurs, gâteaux de saison... Les pâtisseries quittent leur vitrine pour embaumer les foyers des meilleurs parfums : ceux du goût, du plaisir et de la joie partagés.', 100, 47, 7, 'patisseries.jpg'),
(74, 'La Pâtisserie', '\" La pâtisserie est une affaire de tendresse maternelle. Je veux que mes gâteaux réconfortent les gens, qu\'ils leur apportent de la douceur. \"\r\n\r\nLa pâtisserie, un condensé d\'émotions...\r\n\r\nS\'il s\'exprime aussi bien en cuisine qu\'en chocolaterie, Cyril Lignac nous ouvre ici les portes de sa pâtisserie pour mieux nous livrer son savoir-faire au cœur de notre quotidien. Avec Benoît Couvrand, grand pâtissier et complice créatif, il imagine 55 recettes sous le signe de la simplicité et de la proximité : classiques revisités, petites douceurs, gâteaux de saison... Les pâtisseries quittent leur vitrine pour embaumer les foyers des meilleurs parfums : ceux du goût, du plaisir et de la joie partagés.', 100, 47, 7, 'patisserie.jpg');
INSERT INTO `livres` (`id_livres`, `titre`, `description`, `quantite`, `id_auteurs`, `id_catLivres`, `photo`) VALUES
(75, 'Mes recettes gourmandes et healthy par FatSecretFrance', 'Simples, visuelles, graphiques, des recettes 100 % gourmandise 0 % culpabilité\r\nComment équilibrer son alimentation ? Quels ingrédients privilégier pour retrouver la forme ? Comment se faire plaisir sans faire exploser le compteur à calories ? Retrouvez dans cet ouvrage conseils et recettes pour vous faire plaisir sans culpabiliser.', 100, 48, 7, 'healthy.jpg'),
(76, 'Plats gourmands, vapeur douce: 120 recettes simples et bluffantes', 'Le livre incontournable pour s\'initier à la vapeur douce\r\n\r\nUne cuisson santé qui...\r\n- préserve la plupart des nutriments et des vitamines\r\n- élimine les pesticides de surface et autres toxiques\r\n\r\nUne cuisine gourmande qui...\r\n- respecte la qualité des produits\r\n- conserve les textures\r\n- accentue les couleurs\r\n- développe les saveurs', 100, 49, 7, 'gourmand.jpg\r\n'),
(77, 'Le Guide Hachette des Vins 2021', 'Un guide sélectif et collégial :\r\n- 40 000 vins goûtés à l\'aveugle par 1 500 dégustateurs professionnels ;\r\n- 8 000 vins retenus, notés et commentés, avec indication de garde ;\r\n- plus de 500 coups de cœur ;\r\n- plus de 2 000 bons rapports qualité/prix ;\r\n- plus de 500 vins bio...\r\n', 100, 50, 7, 'vin.jpg\r\n'),
(78, 'Ombre et lumière', 'Travail photographique, au fil du temps, sur le jeu d\'ombre et de lumière. Les calendriers Calvendo sont des produits haut de gamme - avec ces plus qui font la différence : nos calendriers présentent bien toute l\'année grâce à leur papier de qualité supérieure et leur reliure à spirales pour une manipulation des pages plus aisée et une tenue parfaitement droite contre le mur. Un film plastique transparent protège la couverture de ces calendriers toujours plus solides, qui se déclinent désormais en cinq langues. Offrez-vous un calendrier Calvendo qui reste beau tout au long de l\'année. ', 100, 51, 8, 'ombre.jpg\r\n'),
(79, 'Les grands photographes du XXe siècle ', 'Ils s’appellent Walker Evans, Dorothea Lange, Henri Cartier-Bresson, Philippe Halsman, Robert Mapplethorpe, Seydou Keyta ou Raymond Depardon. Ils ont conclu le xixe siècle et ont ouvert le xxe en en fixant les couleurs désormais immuables. En saisissant un instant, un moment, un regard, ils ont bouleversé l’art photographique et changé à jamais la vision portée sur le monde et les choses. Leurs clichés, témoins de l’Histoire, des révolutions sociales, de la misère, de la souffrance ou des drames humains, mais aussi de la beauté des êtres et des éléments, sont devenus des icônes.\r\n\r\nRetrouvez pour chacun des grands photographes, de Man Ray à Nan Goldin, leur parcours personnel et artistique ainsi que des explications sur une de leurs œuvres les plus emblématiques et les techniques qu’ils utilisaient. Découvrez leurs combats, leurs audaces, et l’œil neuf qu’ils posèrent sur les hommes et le paysage pour en renouveler à jamais les images.\r\n ', 100, 52, 8, 'lucephoto.jpg'),
(80, 'Ils s\'aiment: Un siècle de photographies d hommes amoureux 1850-1950 ', 'Un siècle de photographies d’hommes amoureux (1850-1950)\r\nPrises à une époque où les relations homosexuelles étaient réprouvées et parfois même jugées comme un délit, ces quelque 350 clichés privés sont un voyage au cœur du sentiment amoureux.\r\nLes photos retrouvées viennent des États-Unis mais aussi d’Europe et d’Asie. Au-delà de la diversité géographique, les hommes photographiés appartiennent à tous les milieux : dandy new-yorkais et ouvriers de province, riches, pauvres, blancs, noirs, civils, militaires...\r\nIssus de la Collection Hugh Nini & Neal Treadwell et présentés au public pour la première fois, ces instantanés pris entre 1850 et 1950 témoignent du courage de ces amoureux qui osaient fixer ainsi leur amour pour l’éternité.\r\nUn des plus beaux hymnes à l’amour jamais publié.\r\nIntroduction de l’historien Régis Schlagdenhauffen', 100, 53, 8, 'homo.jpg\r\n'),
(81, 'La Photographie: Entre document et art contemporain', 'La légitimité culturelle et artistique de la photographie est récente. Longtemps tenue pour un simple outil dont on se sert, elle est désormais, dans les galeries et les musées, contemplée pour elle-même. Apparue avec l\'essor des métropoles et de l\'économie monétaire, l\'industrialisation et la démocratie, elle fut d\'abord l\'image de la société marchande, la mieux à même de la documenter et d\'actualiser ses valeurs. Mais si elle convenait à la société industrielle moderne, elle répond aujourd\'hui difficilement aux besoins d\'une société de l\'information, fondée sur les réseaux numériques. La photographie est donc l\'objet de ce livre : dans sa pluralité et ses devenirs, du document à l\'art contemporain ; dans son historicité, depuis son apparition, au milieu du XIXe siècle, jusqu\'à l\'alliage présent \" Art-photographie \" qui conduit André Rouillé à distinguer \" l\'art des photographes \" de \" la photographie des artistes \".', 100, 54, 8, 'photoart.jpg'),
(82, 'Le Paysage Artistique En Photographie', 'Le Paysage Artistique En Photographie: Avec Le Procédé Au Gélatino-Bromure d\'Argent (Classic Reprint) ', 100, 55, 8, 'phototo.jpg'),
(83, 'Méthode de musculation Lafay', 'MÉTHODE MUSCULATION\r\nENTRETIEN MUSCULAIRE ° PERTE DE GRAISSE ° REMISE EN FORME ° HAUTE PERFORMANCE\r\n', 100, 56, 9, 'lafay.jpg'),
(84, 'La clinique du coureur : La santé par la course à pied', 'l arrive enfin. Le livre référence de Blaise Dubois, le grand expert mondial de la santé en course à pied. En 10 ans, ce physiothérapeute et sa Clinique Du Coureur sont devenus incontournables, formant chaque année des milliers de kinés, notamment en France, révolutionnant leur manière d\'anticiper et soigner les blessures des coureurs.', 100, 57, 9, 'clinique.jpg'),
(85, 'Born to run ', 'Born to run, le best-seller américain, enfin traduit en français !\r\n«Pourquoi ai-je toujours mal aux pieds ?»\r\nComme la majorité des coureurs, Chris McDougall est hanté par cette question. Et quand ce ne sont pas les pieds ce sont les genoux, les hanches, les chevilles...\r\nLa quête de la réponse va entraîner le narrateur dans les aventures les plus folles, au coeur du Mexique, à la recherche de l\'homme qui courait comme les chevaux, surnommé Le Caballo blanco ; à la rencontre des Tarahumaras, une tribu de super-athlètes qui ont fait de la course à pied leur mode de vie et une source de joie permanente. Ils volent à petites foulées sur des terrains suicidaires. Personne ne peut les battre sur de très grandes distances. Les bobos, les maux de toutes sortes ? Disparus.\r\nLeur secret ? Ce récit passionnant le dévoile dans un texte qui tient à la fois d\'Indiana Jones, de Tintin chez les coureurs de fond et d\'une démonstration époustouflante sur de nouvelles techniques de course à pied.\r\nUn formidable récit d\'aventure, où tout est vrai.', 100, 58, 9, 'borntorun.jpg'),
(86, 'Le Chemin de Stevenson', 'Mettre ses pas dans ceux de Stevenson, c\'est vivre une aventure sans cesse renouvelée tout au long des 252 km de l\'itinéraire. Trait d\'union entre Auvergne et Languedoc, le chemin qu\'a ouvert l\'auteur de l\'Ile au trésor est aussi un lien entre deux cultures, entre deux religions. Des vastes plateaux volcaniques du Velay vers les hautes terres rudes du Gévaudan, pour traverser ensuite les croupes dénudées du mont Lozère, le pays cévenol des Camisards approche et enfin Alès, méridionale et industrielle, qui clôt le voyage.', 100, 59, 9, 'stevenson.jpg\r\n'),
(87, 'Yoga-Sutras', 'En 195 aphorismes, les Yoga-Sutras de Patanjali codifient l\'enseignement d\'une pratique traditionnelle plusieurs fois millénaire.\r\nC\'est l\'esprit même du Yoga qui se trouve ici décrit, résumé en une série de remarques lapidaires et lumineuses.\r\nVrai traité de connaissance de soi, cet ouvrage est l\'un des textes majeurs de l\'humanité. Son message, transcendant les siècles, se révèle bien plus que moderne : essentiel.', 100, 60, 9, 'yoga.jpg\r\n'),
(88, 'Le guide du crawl moderne', '\" Ce livre est très précieux car il entre vraiment dans les détails, or ce sont les détails qui font la différence ! \"\r\nFabien Gilot Médaillé mondial et olympique', 100, 61, 9, 'nage.jpg\r\n'),
(90, 'Frigobloc 2021 Mensuel', 'Avec ce calendrier maxi aimanté qui tient parfaitement sur tous les frigos (aimant renforcé), planifiez tout de septembre 2020 à décembre 2021. Le planning d\'organisation par mois permet de tout noter et de ne rien rater de la vie familiale. Avec en bonus, des blocs de listes de courses, des notes repositionnables, l\'emploi du temps des enfants, une fiche de numéros utiles et de nombreuses recettes et astuces cuisine 100% renouvelées. S\'organiser n\'a jamais été aussi simple !', 100, 64, 14, '200rec.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id_clients`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livres`) REFERENCES `livres` (`id_livres`);

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_2` FOREIGN KEY (`id_auteurs`) REFERENCES `auteurs` (`id_auteurs`),
  ADD CONSTRAINT `livres_ibfk_3` FOREIGN KEY (`id_catLivres`) REFERENCES `categories_livres` (`id_catLivres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
