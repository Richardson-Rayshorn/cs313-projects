CREATE TABLE types (
    id SERIAL PRIMARY KEY,
    types_name VARCHAR(80) NOT NULL,
    types_description TEXT,
    date_created DATE
);

CREATE TABLE offerings (
    id SERIAL PRIMARY KEY,
    offerings_name VARCHAR(80) NOT NULL,
    offerings_description TEXT,
    date_created DATE
);

CREATE TABLE institutions (
    id SERIAL PRIMARY KEY,
    company_name VARCHAR(80) NOT NULL,
    company_description TEXT,
    primary_contact_person VARCHAR(80) NOT NULL,
    phone_number VARCHAR(80) NOT NULL,
    company_address VARCHAR(80) NOT NULL,
    date_created DATE
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(80) NOT NULL,
    last_name VARCHAR(80) NOT NULL,
    user_address VARCHAR(80) NOT NULL,
    background TEXT,
    phone_number VARCHAR(80) NOT NULL,
    roles VARCHAR(10) NOT NULL,
    date_created DATE
);

CREATE TABLE user_institute (
    users INT REFERENCES users(id),
    institutions INT REFERENCES institutions(id)
);

CREATE TABLE user_types (
    users INT REFERENCES users(id),
    types INT REFERENCES types(id)
);

CREATE TABLE user_offerings (
    users INT REFERENCES users(id),
    offerings INT REFERENCES offerings(id)
);

CREATE TABLE institute_types (
    types INT REFERENCES types(id),
    institutions INT REFERENCES institutions(id)
);

CREATE TABLE institute_offerings (
    offerings INT REFERENCES offerings(id),
    institutions INT REFERENCES institutions(id)
);