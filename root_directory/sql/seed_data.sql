-- Use the student_management database
USE student_management;

-- Insert sample data into users table
INSERT INTO users (username, password, email) VALUES
('john_doe', 'password_hash_for_john', 'john.doe@example.com'),
('jane_smith', 'password_hash_for_jane', 'jane.smith@example.com'),
('admin', 'admin_password_hash', 'admin@example.com');
