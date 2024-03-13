-- Create Database
CREATE DATABASE smartEdConnectdb;

-- Create Role Table
CREATE TABLE role (
id UUID PRIMARY KEY NOT NULL,
role_name VARCHAR(150) NOT NULL,
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create User Table
CREATE TABLE "user" (
id UUID PRIMARY KEY NOT NULL,
first_name VARCHAR(150) NOT NULL,
last_name VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL UNIQUE,
password VARCHAR(225) NOT NULL,
role_id UUID REFERENCES role(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create School Table
CREATE TABLE school (
id UUID PRIMARY KEY NOT NULL,
name VARCHAR(225) NOT NULL,
phone_number VARCHAR(150),
logo BYTEA,
email VARCHAR(150),
licence_number VARCHAR(225) NOT NULL,
licence_certificate BYTEA,
street_address VARCHAR(150),
city VARCHAR(150),
state VARCHAR(150),
postal_code VARCHAR(150),
country VARCHAR(150),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Department Table
CREATE TABLE department (
id UUID PRIMARY KEY NOT NULL,
name VARCHAR(225) NOT NULL UNIQUE,
school_id UUID REFERENCES school(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Teacher Table
CREATE TABLE teacher (
id UUID PRIMARY KEY NOT NULL,
phone_number VARCHAR(150),
date_of_birth VARCHAR(150),
gender VARCHAR(150),
licence_number VARCHAR(225) NOT NULL,
licence_certificate BYTEA,
street_address VARCHAR(150),
city VARCHAR(150),
state VARCHAR(150),
postal_code VARCHAR(150),
country VARCHAR(150),
user_id UUID REFERENCES "user"(id),
school_id UUID REFERENCES school(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Department-Teacher Association Table
CREATE TABLE department_teacher (
id UUID PRIMARY KEY NOT NULL,
department_id UUID REFERENCES department(id),
teacher_id UUID REFERENCES teacher(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Course Table
CREATE TABLE course (
id UUID PRIMARY KEY NOT NULL,
name VARCHAR(225) NOT NULL UNIQUE,
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Course Materials Table
CREATE TABLE course_materials (
id UUID PRIMARY KEY NOT NULL,
course_resource BYTEA,
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Department-Course Association Table
CREATE TABLE department_course (
id UUID PRIMARY KEY NOT NULL,
department_id UUID REFERENCES department(id),
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Teacher-Course Association Table
CREATE TABLE teacher_course (
id UUID PRIMARY KEY NOT NULL,
teacher_id UUID REFERENCES teacher(id),
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Student Table
CREATE TABLE student (
id UUID PRIMARY KEY NOT NULL,
phone_number VARCHAR(150),
date_of_birth VARCHAR(150),
gender VARCHAR(150),
student_id_number VARCHAR(225) NOT NULL UNIQUE DEFAULT 'ST' || substring(uuid_generate_v4()::text, 1, 5),
street_address VARCHAR(150),
city VARCHAR(150),
state VARCHAR(150),
postal_code VARCHAR(150),
country VARCHAR(150),
user_id UUID REFERENCES "user"(id),
school_id UUID REFERENCES school(id),
teacher_id UUID REFERENCES teacher(id),
department_id UUID REFERENCES department(id),
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Assignment Table
CREATE TABLE assignment (
id UUID PRIMARY KEY NOT NULL,
name VARCHAR(225),
description TEXT,
content BYTEA,
teacher_id UUID REFERENCES teacher(id),
department_id UUID REFERENCES department(id),
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Non-Teaching Staff Table
CREATE TABLE non_teaching_staff (
id UUID PRIMARY KEY NOT NULL,
phone_number VARCHAR(150),
date_of_birth VARCHAR(150),
gender VARCHAR(150),
street_address VARCHAR(150),
city VARCHAR(150),
state VARCHAR(150),
postal_code VARCHAR(150),
country VARCHAR(150),
user_id UUID REFERENCES "user"(id),
school_id UUID REFERENCES school(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Grades and Assessment Table
CREATE TABLE grades_assessment (
id UUID PRIMARY KEY NOT NULL,
grade_calculation DECIMAL(10, 2),
student_id UUID REFERENCES student(id),
course_id UUID REFERENCES course(id),
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Event Table (Add this table)
CREATE TABLE event (
id UUID PRIMARY KEY NOT NULL,
name VARCHAR(225),
description TEXT,
event_date TIMESTAMPTZ,
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

-- Create Real-Time Messaging Table (Add this table)
CREATE TABLE real_time_message (
id UUID PRIMARY KEY NOT NULL,
sender_id UUID REFERENCES "user"(id),
recipient_id UUID REFERENCES "user"(id),
message_text TEXT,
message_time TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
created_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);
