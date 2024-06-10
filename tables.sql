
CREATE TABLE admin (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE student
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    document INT          not null,
    faculty  VARCHAR(255) NOT NULL
);


CREATE TABLE console
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student (id)
);

CREATE TABLE game
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE pool
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student (id)
);

CREATE TABLE foosball
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student (id)
);

CREATE TABLE pingpong
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student (id)
);