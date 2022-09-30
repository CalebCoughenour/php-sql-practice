CREATE TABLE also_users (
  user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  user_first varchar(255) NOT NULL,
  user_last varchar(255) NOT NULL,
  user_email varchar(255) NOT NULL,
  user_uid varchar(255) NOT NULL,
  user_pwd varchar(255) NOT NULL
);