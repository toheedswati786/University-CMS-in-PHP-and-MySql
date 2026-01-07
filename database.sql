-- Students table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    roll_no VARCHAR(50),
    cgpa DECIMAL(3,2) DEFAULT 0.00
);

-- Subjects table
CREATE TABLE subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(20),
    name VARCHAR(100),
    credit_hours INT DEFAULT 3
);

-- Grades for each subject
CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject_id INT,
    mid_term DECIMAL(5,2) DEFAULT 0.00,
    assignment DECIMAL(5,2) DEFAULT 0.00,
    quiz DECIMAL(5,2) DEFAULT 0.00,
    final_exam DECIMAL(5,2) DEFAULT 0.00
);

-- Insert your data
INSERT INTO students (name, roll_no, cgpa) VALUES 
('Abdullah Khursheed', 'F2025-302-F23-B', 3.65);

-- Your 6 subjects
INSERT INTO subjects (code, name) VALUES
('CS323', 'Web Technologies (Lecture)'),
('CS324', 'Data Structures & Algorithms'),
('CS325', 'Database Management Systems'),
('CS326', 'Operating Systems'),
('CS327', 'Computer Networks'),
('CS328', 'Artificial Intelligence');

-- Your marks (only for CS323 shown in gradebook — others can be added later)
INSERT INTO grades (student_id, subject_id, mid_term, assignment, quiz, final_exam) VALUES
(1, 1, 80.00, 60.00, 0.00, 0.00);