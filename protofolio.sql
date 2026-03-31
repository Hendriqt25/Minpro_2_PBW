CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS profile (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    level INT NOT NULL CHECK (level BETWEEN 0 AND 100)
);

CREATE TABLE IF NOT EXISTS experiences (
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS certificates (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL,
    organization VARCHAR(100) NOT NULL,
    year YEAR NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO profile (name, role, description) VALUES (
    'Hendri Zaidan Safitra',
    'Fullstack Developer | Database Developer | Photographer',
    'Saya mahasiswa Sistem Informasi Universitas Mulawarman yang memiliki minat dalam Full Stack Developer serta perancangan database yang terstruktur dan efisien.'
);

INSERT INTO skills (name, level) VALUES
    ('MySQL', 80),
    ('HTML', 60),
    ('CSS', 20),
    ('JavaScript', 5);

INSERT INTO experiences (description) VALUES
    ('Studi Independen: Full Stack Developer'),
    ('Asisten Laboratorium Konsep Basis Data 2026'),
    ('Himpunan INFORSA 2025/2026'),
    ('Ketua Panitia INFOSA Mengabdi 2025'),
    ('Paskibraka Kutai Timur 2024');

INSERT INTO certificates (title, organization, year, image) VALUES
    ('Sertifikat INFORSA', 'INFORSA', 2025, 'img/inforsa.png'),
    ('Sertifikat Dicoding', 'Dicoding', 2026, 'img/dicoding.png'),
    ('Sertifikat Paskibraka', 'DPPI Kutim', 2024, 'img/paskib.jpeg'),
    ('INFORSA Mengabdi', 'INFORSA', 2025, 'img/pengmas.jpeg');
