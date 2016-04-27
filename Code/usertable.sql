CREATE TABLE users(
	id int NOT NULL AUTO_INCREMENT,
	email varchar(256) NOT NULL,
	github_username varchar(256) NOT NULL,
	github_id varchar(256) NOT NULL,
	github_url varchar(256) NOT NULL,
	UNIQUE KEY (id)
);