-- Create database if not exists
CREATE DATABASE IF NOT EXISTS student_management;

-- Use the database
USE student_management;

-- Table structure for users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table structure for posts (if applicable)
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Sample data for users table (optional)
INSERT INTO users (username, password, email) VALUES
('admin', 'admin_password_hash', 'admin@example.com');

-- Additional tables and sample data can be added as per project requirements
