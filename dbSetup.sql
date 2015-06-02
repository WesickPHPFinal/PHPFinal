CREATE TABLE IF NOT EXISTS user (
userid TINYINT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(50) NOT NULL UNIQUE KEY,
username VARCHAR(50) NOT NULL UNIQUE KEY,
thepassword VARCHAR(100) NOT NULL,
admin TINYINT(1) UNSIGNED DEFAULT '0',
active TINYINT(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS gamemanager (
gamemanagerid INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
gamename VARCHAR(30) NOT NULL,
userid TINYINT UNSIGNED DEFAULT NULL,
FOREIGN KEY (userid) REFERENCES user(userid),
loginname VARCHAR(40) NOT NULL,
thepassword VARCHAR(20) NOT NULL,
ingamename VARCHAR(20) NOT NULL,
notes VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;