CREATE TABLE Users
(
    user_id varchar(255),
    PRIMARY KEY(user_id)
)ENGINE=INNODB;

CREATE TABLE Posts
(
    post_id int NOT NULL AUTO_INCREMENT,
    content varchar(255),
    author_id varchar(1000),
    PRIMARY KEY (post_id),
    FOREIGN KEY (author_id) REFERENCES Users(user_id)
)ENGINE=INNODB;


