-- membuat database
CREATE DATABASE hobiDB;

-- menggunakan database
USE hobiDB;

-- membuat table
	-- table persons
CREATE TABLE persons(
person_id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
PRIMARY KEY(person_id)
);

	-- table hobbies
CREATE TABLE hobbies(
hobbie_id INT NOT NULL AUTO_INCREMENT,
person_id INT NOT NULL,
name VARCHAR(100) NOT NULL,
PRIMARY KEY(hobbie_id),
CONSTRAINT FK_persons FOREIGN KEY(person_id)
REFERENCES persons(person_id)
);

-- menyimpan data
	-- pada table categories
INSERT INTO persons(name) VALUES ('Nurhadi');
INSERT INTO persons(name) VALUES ('Aldo');
INSERT INTO persons(name) VALUES ('Dodi');

	-- pada table hobbies
INSERT INTO hobbies (person_id, name) VALUES (1, "Bird Watching");
INSERT INTO hobbies (person_id, name) VALUES (1, "Martial Arts");
INSERT INTO hobbies (person_id, name) VALUES (2, "Hiking");
INSERT INTO hobbies (person_id, name) VALUES (1, "Archery");
INSERT INTO hobbies (person_id, name) VALUES (2, "Beekeeping");
INSERT INTO hobbies (person_id, name) VALUES (3, "Book Restoration");

-- menampilkan data
SELECT persons.person_id, persons.name, GROUP_CONCAT(hobbies.name) AS person_hobbies, COUNT(hobbies.person_id) AS jumlah_hobbie 
FROM persons INNER JOIN hobbies ON persons.person_id = hobbies.person_id 
GROUP BY person_id;


