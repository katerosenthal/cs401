USE cs401;

CREATE TABLE users (
userID INT auto_increment NOT NULL PRIMARY KEY,
username VARCHAR(100) NOT NULL,
password VARCHAR(30) NOT NULL
);

CREATE TABLE page (
pageID INT auto_increment NOT NULL PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

CREATE TABLE notes (
noteID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
pageID INT NOT NULL,
text VARCHAR(1000) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID),
FOREIGN KEY (pageID) REFERENCES page(pageID)
);

CREATE TABLE tasks (
taskID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
pageID INT NOT NULL,
text VARCHAR(120) NOT NULL,
topThree boolean NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID),
FOREIGN KEY (pageID) REFERENCES page(pageID)
);

CREATE TABLE weekday (
weekdayID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
pageID INT NOT NULL,
position INT NOT NULL,
text VARCHAR(10) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID),
FOREIGN KEY (pageID) REFERENCES page(pageID)
);

CREATE TABLE schedules (
scheduleID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
pageID INT NOT NULL,
hour INT NOT NULL,
text VARCHAR(120) NOT NULL,
weekDayID INT NULL,
FOREIGN KEY (userID) REFERENCES user(userID),
FOREIGN KEY (pageID) REFERENCES page(pageID),
FOREIGN KEY (weekdayID) REFERENCES weekday(weekdayID)
);

CREATE TABLE dates (
dateID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL, 
pageID INT NOT NULL,
date VARCHAR(20) NOT NULL,
position INT NULL,
FOREIGN KEY (userID) REFERENCES user(userID),
FOREIGN KEY (pageID) REFERENCES page(pageID)
);

CREATE TABLE month (
monthID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL,
month VARCHAR(20) NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);

CREATE TABLE calendarDays (
calendarDayID INT auto_increment NOT NULL PRIMARY KEY,
userID INT NOT NULL,
position INT NOT NULL,
day INT NOT NULL,
FOREIGN KEY (userID) REFERENCES user(userID)
);