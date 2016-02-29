CREATE TABLE party(
	party_id char(36) PRIMARY KEY,
	last_validation DATE
);
CREATE TABLE individual(
	party_id CHAR(36) PRIMARY KEY,
	first_name VARCHAR(45),
	last_name VARCHAR(45)
);
CREATE TABLE organization (
	party_id CHAR(36) PRIMARY KEY,
	name VARCHAR(45)
); 
CREATE TABLE legaldetails(
	party_id CHAR(36) PRIMARY KEY,
	vat VARCHAR(45)
);