CREATE TABLE `utilisateur` (
    `id_utilisateur` int NOT NULL AUTO_INCREMENT,
    `nom_utilisateur` varchar(100) NOT NULL,
    `prenom_utilisateur` varchar(100) NOT NULL,
    `age` int NOT NULL,
    PRIMARY KEY (`id_utilisateur`)
);

INSERT INTO
    `utilisateur` (`nom_utilisateur`, `prenom_utilisateur`, `age`)
VALUES
    ('Doe', 'John', 30),
    ('Smith', 'Jane', 25),
    ('Johnson', 'Robert', 40);