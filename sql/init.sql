CREATE TABLE projets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    description TEXT,
    technologies VARCHAR(255),
    lien_demo VARCHAR(255),
    lien_github VARCHAR(255),
    annee INT
);

INSERT INTO projets (titre, description, technologies, lien_demo, lien_github, annee)
VALUES ("Portfolio Amina", "Mon portfolio personnel", "PHP, MySQL, HTML, CSS", "#", "#", 2025);
