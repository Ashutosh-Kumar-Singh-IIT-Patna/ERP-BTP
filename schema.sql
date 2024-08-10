-- Database: erp_db

CREATE TABLE acad_mother_tongue (
    id INT AUTO_INCREMENT PRIMARY KEY,
    language VARCHAR(40) NOT NULL
);

CREATE TABLE acad_profession (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profession VARCHAR(40) NOT NULL
);

CREATE TABLE acad_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_number VARCHAR(40) NOT NULL,
    full_name VARCHAR(40) NOT NULL,
    preferred_name VARCHAR(40),
    dob DATE NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    mother_tongue_id INT NOT NULL,
    religion VARCHAR(40) NOT NULL,
    nationality VARCHAR(40) NOT NULL,
    state VARCHAR(40) NOT NULL,
    blood_group VARCHAR(40) NOT NULL,
    category ENUM('general', 'sc', 'st', 'obc', 'ews') NOT NULL,
    country_code VARCHAR(40) NOT NULL,
    mobile_no VARCHAR(40) NOT NULL,
    whatsapp_no VARCHAR(40) NOT NULL,
    course ENUM('btech', 'bsc', 'msc', 'mtech', 'phd', 'bs', 'dual') NOT NULL,
    department VARCHAR(40) NOT NULL,
    branch VARCHAR(40) NOT NULL,
    specialization VARCHAR(40) NOT NULL,
    hostel_name VARCHAR(40) NOT NULL,
    hostel_block VARCHAR(40) NOT NULL,
    hostel_room_no VARCHAR(40) NOT NULL,
    webmail VARCHAR(40) NOT NULL,
    alt_mail VARCHAR(40) NOT NULL,
    date_of_admission DATE NOT NULL,
    father_name VARCHAR(40) NOT NULL,
    mother_name VARCHAR(40) NOT NULL,
    father_phone VARCHAR(40) NOT NULL,
    mother_phone VARCHAR(40) NOT NULL,
    father_profession_id INT NOT NULL,
    mother_profession_id INT NOT NULL,
    annual_income VARCHAR(40) NOT NULL,
    FOREIGN KEY (mother_tongue_id) REFERENCES acad_mother_tongue(id),
    FOREIGN KEY (father_profession_id) REFERENCES acad_profession(id),
    FOREIGN KEY (mother_profession_id) REFERENCES acad_profession(id)
);

CREATE TABLE acad_queries_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    query TEXT NOT NULL,
    traceback TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


