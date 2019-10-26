-- DROP TABLE user_institute, user_types, user_offerings, 
-- institute_types, institute_offerings, types, offerings, institutions, users;

-- SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
-- FROM ((Orders
-- INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
-- INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

-- SELECT types.types_name, offerings.offerings_name,
-- institutions.company_name, institutions.company_description
-- FROM ((((institute_types
-- INNER JOIN types ON institute_types.types_id = types.id)
-- INNER JOIN institutions ON institute_types.institutions_id = institutions.id)
-- INNER JOIN institute_offerings ON institutions.id = institute_offerings.institutions_id)
-- INNER JOIN offerings ON institute_offerings.offerings_id = offerings.id);

-- SELECT types_name, offerings_name,
-- company_name, company_description
-- FROM ((((institute_types
-- INNER JOIN types ON institute_types.types_id = types.id)
-- INNER JOIN institutions ON institute_types.institutions_id = institutions.id)
-- INNER JOIN institute_offerings ON institutions.id = institute_offerings.institutions_id)
-- INNER JOIN offerings ON institute_offerings.offerings_id = offerings.id);

-- CREATE TABLE temp(
--     id SERIAL PRIMARY KEY,
--     username VARCHAR(120) NOT NULL UNIQUE 
-- );

CREATE TABLE types (
    id SERIAL PRIMARY KEY,
    types_name VARCHAR(80) NOT NULL UNIQUE,
    types_description TEXT,
    date_created TIMESTAMP NOT NULL DEFAULT NOW()
);

CREATE TABLE offerings (
    id SERIAL PRIMARY KEY,
    offerings_name VARCHAR(80) NOT NULL,
    offerings_description TEXT,
    interest REAL, 
    date_created TIMESTAMP NOT NULL DEFAULT NOW()
);

CREATE TABLE institutions (
    id SERIAL PRIMARY KEY,
    company_name VARCHAR(80) NOT NULL,
    company_description TEXT,
    primary_contact_person VARCHAR(80) NOT NULL,
    phone_number VARCHAR(80) NOT NULL,
    company_address VARCHAR(80) NOT NULL,
    date_created TIMESTAMP NOT NULL DEFAULT NOW()
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    username VARCHAR(255) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    user_address TEXT NOT NULL,
    background TEXT,
    phone_number VARCHAR(80) NOT NULL,
    roles VARCHAR(10) NOT NULL,
    date_created TIMESTAMP NOT NULL DEFAULT NOW()
);

CREATE TABLE user_institute (
    users_id INT NOT NULL REFERENCES users(id),
    institutions_id INT NOT NULL REFERENCES institutions(id)
);

CREATE TABLE user_types (
    users_id INT NOT NULL REFERENCES users(id),
    types_id INT NOT NULL REFERENCES types(id)
);

CREATE TABLE user_offerings (
    users_id INT NOT NULL REFERENCES users(id),
    offerings_id INT NOT NULL REFERENCES offerings(id)
);

CREATE TABLE institute_types (
    types_id INT NOT NULL REFERENCES types(id),
    institutions_id INT NOT NULL REFERENCES institutions(id)
);

CREATE TABLE institute_offerings (
    offerings_id INT NOT NULL REFERENCES offerings(id),
    institutions_id INT NOT NULL REFERENCES institutions(id)
);

INSERT INTO types (id, types_name, types_description) VALUES
(1, 'Insurance', 
'Insurance is a means of protection from financial loss. 
It is a form of risk management, primarily used to hedge 
against the risk of a contingent or uncertain loss.'),
(2, 'Banks', 
'A bank is a financial institution that accepts deposits 
from the public and creates credit. Lending activities can 
be performed either directly or indirectly through capital markets.');

INSERT INTO offerings (id, offerings_name, offerings_description, interest) VALUES
(1, 'Business Loan', 
'Money given to you by Bank of SVG', 6),
(2, 'Business Loan', 
'Money given to you by First SVG Bank', 4),
(3, 'Personal Insurance Policy',
'Insurance policy from Sentry Insurance',0),
(4, 'Family Insurance Policy',
'Insurance policy from General Insurance', 0);

INSERT INTO institutions (id, company_name, company_description, 
primary_contact_person, phone_number, company_address) VALUES
(1, 'Bank of SVG', 
'Bank owned by the Government', 'John Smith', '17844896325', 'Kingstown'),
(2, 'First SVG Bank', 
'Bank owned by private entity', 'Timo Almo', '17842368975', 'Kingstown'),
(3, 'Sentry Insurance',
'Insurance company owned by the same people who own 
First SVG Bank', 'Boy Scott', '17845693256', 'Kingstown'),
(4, 'General Insurance',
'Fictitous Insurance company that I thought of', 'Fict titous', '17845879634',
'Kingstown');

INSERT INTO institute_types (types_id, institutions_id) VALUES 
(2, 1),
(2, 2),
(1, 3),
(1, 4);

INSERT INTO institute_offerings (offerings_id, institutions_id) VALUES 
(1, 1),
(2, 2),
(3, 3),
(4, 4);