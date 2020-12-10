USE cs401;

CREATE TABLE users (
userID INT auto_increment NOT NULL PRIMARY KEY,
username VARCHAR(100) NOT NULL,
password VARCHAR(30) NOT NULL
);

CREATE TABLE notes (
noteID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(1000) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE tasks (
taskID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(256) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE weekdays (
weekdayID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(25) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE schedules (
scheduleID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
time VARCHAR(30) NOT NULL,
text VARCHAR(256) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE dates (
dateID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(25) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE month (
monthID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(25) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE monthdays (
monthdayID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(2) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE dayofweek (
dayofweekID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
name VARCHAR(25) NOT NULL,
text VARCHAR(25) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

