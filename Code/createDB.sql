CREATE TABLE repos (
	id int NOT NULL AUTO_INCREMENT,
	repo_name varchar(256) NOT NULL,
	username varchar(256) NOT NULL,
	html_url varchar(512) NOT NULL,
	language varchar(256) NOT NULL,
	forks_count varchar(32) NOT NULL,
	watchers varchar(32) NOT NULL,
	stars varchar(32) NOT NULL,
	readme text NOT NULL,
	PRIMARY KEY (id)
);