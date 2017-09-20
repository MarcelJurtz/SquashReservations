CREATE TABLE room(
	roomId TINYINT PRIMARY KEY
);

CREATE TABLE reservations(
    roomId TINYINT,
    intervalStart CHAR(16) NOT NULL,
    confirmed CHAR(1) DEFAULT 'F',
    name VARCHAR(50),
    PRIMARY KEY(roomId, intervalStart),
    FOREIGN KEY(roomId) REFERENCES room(roomId)
);

CREATE TABLE configuration(
	configKey VARCHAR(25) PRIMARY KEY,
    configValue TINYINT
);