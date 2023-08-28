CREATE TABLE `utilisateur` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(200) NOT NULL,
	`email` varchar(150) NOT NULL,
	`notification` BOOLEAN NOT NULL,
	`donateur` BOOLEAN NOT NULL,
	`date_abonnement` DATE NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `dons` (
	`id_dons` INT NOT NULL AUTO_INCREMENT,
	`id_utilisateur` INT NOT NULL,
	`montant` DECIMAL NOT NULL,
	`date_dons` DATE NOT NULL,
	PRIMARY KEY (`id_dons`)
);

CREATE TABLE `avancement` (
	`id_avancement` INT NOT NULL AUTO_INCREMENT,
	`titre` varchar(200) NOT NULL,
	`description` TEXT NOT NULL,
	`date_publication` DATE NOT NULL,
	`image` varchar(250) NOT NULL,
	PRIMARY KEY (`id_avancement`)
);

CREATE TABLE `article` (
	`id_article` INT NOT NULL AUTO_INCREMENT,
	`titre` varchar(200) NOT NULL,
	`description` TEXT NOT NULL,
	`image` varchar(250) NOT NULL,
	PRIMARY KEY (`id_article`)
);

ALTER TABLE `dons` ADD CONSTRAINT `dons_fk0` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);





