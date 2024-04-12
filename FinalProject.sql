-- Create the RealEstateDevelopmentAgency database
CREATE DATABASE IF NOT EXISTS RealEstateDevelopmentAgency;

-- Switch to the newly created database
USE RealEstateDevelopmentAgency;

-- Create the Contracts table
CREATE TABLE IF NOT EXISTS Contracts (
    contract_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    job_role VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    cv_file_path VARCHAR(255) NOT NULL
);

-- Create the ContactUs table
CREATE TABLE IF NOT EXISTS ContactUs (
    inquiry_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);

-- Create the ApartmentTourBookings table
CREATE TABLE IF NOT EXISTS ApartmentTourBookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    meeting_date DATE NOT NULL,
    meeting_time TIME NOT NULL,
    location VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS people (
    person_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL
);
