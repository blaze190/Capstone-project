/* Reset database - comment out if building for first time */
DROP TABLE quiz_user_answer;
DROP TABLE quiz_results;
DROP TABLE quiz_answers;
DROP TABLE quiz_questions;
DROP TABLE quiz;
DROP TABLE Logs;
DROP TABLE UserAccounts;


/* Create UserAccounts table */
CREATE TABLE UserAccounts (
	`username` varchar(20) UNIQUE,
	`password` char(128),
	`salt` char(8),
	`firstName` varchar (20),
	`lastName` varchar(20),
	`HBA1C` int(3),
	`gamification` boolean,
	`profilePic` varchar(20),
	PRIMARY KEY (`username`)
) CHARACTER SET utf8;

/* Create Logs Table */
CREATE TABLE Logs (
	`logID` int(12) NOT NULL AUTO_INCREMENT,
	`username` varchar(20) NOT NULL,
	`logDate` date,
	`logTime` time,
	`mealPeriod` enum('beforeBreakfast', 'afterBreakfast','beforeLunch', 'afterLunch', 'beforeDinner', 'afterDinner'),
	`carbExchange` int(2),
	`bloodGlucose` decimal(3,1),
	`qaInsulin` decimal(3,2),
	`backgroundInsulin` decimal(3,2),
	`qaCorrection` decimal(3,2),
	`ceCorrection` decimal(3,2),
	PRIMARY KEY (`logID`),
	FOREIGN KEY (`username`) REFERENCES UserAccounts (`username`)
) CHARACTER SET utf8;

/* Create quiz table */
CREATE TABLE quiz (
 	`quiz_id` int(10) unsigned NOT NULL,
 	`quiz_name` varchar(50) DEFAULT NULL,
 	PRIMARY KEY (`quiz_id`)
) CHARACTER SET utf8;

/* Create quiz questions table */
CREATE TABLE `quiz_questions` (
  `quiz_question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` int(10) unsigned NOT NULL,
  `quiz_question` mediumtext NOT NULL,
  PRIMARY KEY (`quiz_question_id`),
  KEY `FK_quiz_questions_quiz` (`quiz_id`),
  CONSTRAINT `FK_quiz_questions_quiz` FOREIGN KEY (`quiz_id`) REFERENCES quiz (`quiz_id`) ON DELETE NO ACTION
) AUTO_INCREMENT=13 CHARACTER SET utf8;

/* Create quiz answers table */
CREATE TABLE quiz_answers (
  `quiz_question_id` int(10) unsigned NOT NULL,
  `quiz_answer` int(10) unsigned NOT NULL,
  KEY `FK_quiz_answers_quiz_questions` (`quiz_question_id`),
  CONSTRAINT `FK_quiz_answers_quiz_questions` FOREIGN KEY (`quiz_question_id`) REFERENCES quiz_questions (`quiz_question_id`)
) CHARACTER SET utf8;

/* Create quiz results table */
CREATE TABLE quiz_results (
  `result_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `score` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`result_id`),
  KEY `FK_quiz_results_quiz` (`quiz_id`),
  KEY `FK_quiz_results_user` (`username`),
  CONSTRAINT `FK_quiz_results_quiz` FOREIGN KEY (`quiz_id`) REFERENCES quiz (`quiz_id`) ON DELETE NO ACTION,
  CONSTRAINT `FK_quiz_results_user` FOREIGN KEY (`username`) REFERENCES UserAccounts (`username`)
) AUTO_INCREMENT=19 CHARACTER SET utf8;


/* Create table to hold users answers to quizzes */
CREATE TABLE quiz_user_answer (
  `quiz_question_id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_answer` int(10) unsigned NOT NULL,
  KEY `FK_quiz_user_answer_quiz_questions` (`quiz_question_id`),
  KEY `FK_quiz_user_answer_user` (`username`),
  CONSTRAINT `FK_quiz_user_answer_quiz_questions` FOREIGN KEY (`quiz_question_id`) REFERENCES `quiz_questions` (`quiz_question_id`),
  CONSTRAINT `FK_quiz_user_answer_user` FOREIGN KEY (`username`) REFERENCES UserAccounts (`username`)
) DEFAULT CHARACTER SET utf8;



/* FILL TABLES WITH DATA */

/* Add accounts to UserAccounts table */
INSERT INTO `UserAccounts` (username,password,salt,firstName,lastName,HBA1C,gamification, profilePic) VALUES 
('testuser',	'b29bc850fa615d71089de0d39afe972ae6577a53975246c8391bc1252d13105be674506f6d4ad0f52d224b282dd5342fdfd391d195a6cdd3de2fc2816595e687'
	, 'bu34XsA3',	'Bobby',	'Briggs', 78, true,		'girl2'),
('hamish',		'120132862af31af99daa7a37b8625cada75e49c9408a8d5e3ae4f6d631878e5bb7310092f2d39b61c8bc42d896aa46e7ef5f3d9eecdea50443cf7faee6d4ace2'
	, '7vD0jMs4',	'Hamish',		'Sadler', 85, true,	'boy2'),
('tfennah',    '082130f0454cdb079c86d108991ab7f7132609f0784cf42a00ae6affe86f785d8d9b07a138d22ece689df39ba80205d4503da1ac0011968fef32bfd558311629'
  , 'WOb5c08b', 'Tom',    'Fennah', 82, true,  'boy2');

/* Add sample logs to Logs table */
INSERT INTO `Logs` (logID,username,logDate,logTime,mealPeriod,carbExchange,bloodGlucose,qaInsulin,backgroundInsulin,qaCorrection,ceCorrection) VALUES 
(null,	'testuser',	'2018-05-01',	'08:06:18',	'beforeBreakfast',	2,	7.8,	4,	2,	1,	2),
(null,	'testuser',	'2018-05-01',	'11:10:18',	'beforeLunch',		3,	7.5,	5,	1,	1,	1),
(null,	'testuser',	'2018-05-02',	'08:15:18',	'beforeBreakfast',	1,	7.3,	5,	1,	0,	0),
(null,	'testuser',	'2018-05-03',	'07:55:18',	'beforeBreakfast',	1,	7.1,	2,	1,	1,	2),
(null,	'testuser',	'2018-05-03',	'10:00:18',	'afterBreakfast',	2,	7.0,	0,	2,	2,	2),
(null,	'testuser',	'2018-05-03',	'18:10:18',	'beforeDinner',		3,	7.8,	3,	2,	2,	1),
(null,	'testuser',	'2018-05-04',	'08:12:18',	'beforeBreakfast',	3,	7.8,	2,	3,	2,	2),
(null,	'testuser',	'2018-05-04',	'07:58:18',	'beforeBreakfast',	2,	7.5,	2,	2,	1,	0),
(null,	'testuser',	'2018-05-05',	'09:30:18',	'beforeBreakfast',	3,	6.8,	2,	2,	1,	0),
(null,	'testuser',	'2018-05-06',	'08:00:18',	'beforeBreakfast',	3,	6.5,	4,	1,	2,	1),
(null,	'testuser',	'2018-05-07',	'07:45:18',	'beforeBreakfast',	1,	6.4,	6,	2,	2,	1),
(null,	'testuser',	'2018-05-08',	'08:04:18',	'beforeBreakfast',	3,	6.3,	2,	1,	1,	2),
(null,	'testuser',	'2018-05-09',	'08:10:18',	'beforeBreakfast',	2,	6.9,	2,	2,	1,	1),
(null,	'testuser',	'2018-05-10',	'09:12:18',	'beforeBreakfast',	3,	7.0,	3,	0,	2,	2),
(null,	'testuser',	'2018-05-11',	'08:32:18',	'beforeBreakfast',	2,	7.1,	1,	2,	1,	2),
(null,	'testuser',	'2018-05-12',	'08:52:18',	'beforeBreakfast',	2,	7.4,	0,	1,	1,	3),
(null,	'testuser',	'2018-05-13',	'08:24:18',	'beforeBreakfast',	3,	7.2,	1,	1,	2,	2),
(null,	'testuser',	'2018-05-14',	'08:42:18',	'beforeBreakfast',	2,	7.2,	1,	2,	2,	3),
(null,	'testuser',	'2018-05-15',	'08:54:18',	'beforeBreakfast',	3,	7.2,	3,	1,	2,	2),
(null,	'testuser',	'2018-05-16',	'08:12:18',	'beforeBreakfast',	1,	7.8,	3,	2,	1,	1),
(null,	'testuser',	'2018-05-17',	'08:00:18',	'beforeBreakfast',	1,	7.5,	3,	2,	1,	2),
(null,	'testuser',	'2018-05-18',	'08:21:18',	'beforeBreakfast',	3,	7.8,	2,	2,	0,	2),
(null,	'testuser',	'2018-05-18',	'08:35:22',	'afterBreakfast',	0,	8.2,	0,	1,	0,	1),
(null,	'testuser',	'2018-05-18',	'11:30:24',	'beforeLunch',		1,	7.6,	4,	1,	1,	3),
(null,	'testuser',	'2018-05-19',	'08:05:18',	'beforeBreakfast',	3,	7.1,	5,	2,	1,	2),
(null,	'testuser',	'2018-05-19',	'08:25:22',	'afterBreakfast',	0,	8.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-05-19',	'11:25:24',	'beforeLunch',		1,	7.7,	4,	1,	1,	3),
(null,	'testuser',	'2018-05-20',	'07:04:18',	'beforeBreakfast',	3,	6.6,	5,	2,	1,	2),
(null,	'testuser',	'2018-05-20',	'07:35:22',	'afterBreakfast',	0,	7.2,	0,	1,	1,	1),
(null,	'testuser',	'2018-05-20',	'11:15:23',	'beforeLunch',		1,	7.6,	4,	1,	1,	3),
(null,	'testuser',	'2018-05-20',	'12:01:34',	'afterLunch',		0,	8.4,	0,	0,	2,	0),
(null,	'testuser',	'2018-05-20',	'18:10:51',	'beforeDinner',		3,	7.6,	3,	1,	1,	1),
(null,	'testuser',	'2018-05-20',	'18:48:43',	'afterDinner',		0,	8.5,	0,	1,	0,	1),
(null,	'testuser',	'2018-05-21',	'07:13:28',	'beforeBreakfast',	4,	8.5,	5,	2,	1,	2),
(null,	'testuser',	'2018-05-21',	'18:55:51',	'beforeDinner',		3,	7.7,	3,	3,	1,	2),
(null,	'testuser',	'2018-05-21',	'19:34:43',	'afterDinner',		0,	8.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-05-22',	'07:04:18',	'beforeBreakfast',	2,	7.6,	5,	2,	1,	2),
(null,	'testuser',	'2018-05-22',	'07:35:22',	'afterBreakfast',	0,	7.9,	0,	1,	1,	1),
(null,	'testuser',	'2018-05-22',	'18:10:51',	'beforeDinner',		4,	7.5,	3,	1,	1,	1),
(null,	'testuser',	'2018-05-22',	'18:48:43',	'afterDinner',		0,	8.2,	0,	1,	0,	1),
(null,	'testuser',	'2018-05-23',	'07:04:18',	'beforeBreakfast',	3,	6.6,	4,	2,	1,	2),
(null,	'testuser',	'2018-05-23',	'18:10:51',	'beforeDinner',		2,	7.6,	2,	3,	0,	1),
(null,	'testuser',	'2018-05-23',	'18:48:43',	'afterDinner',		0,	8.5,	0,	1,	1,	1),
(null,	'testuser',	'2018-05-24',	'07:04:18',	'beforeBreakfast',	5,	7.6,	4,	0,	2,	2),
(null,	'testuser',	'2018-05-24',	'07:35:22',	'afterBreakfast',	0,	8.2,	0,	0,	2,	1),
(null,	'testuser',	'2018-05-24',	'18:48:43',	'afterDinner',		0,	8.0,	0,	0,	2,	1),
(null,	'testuser',	'2018-05-25',	'08:06:18',	'beforeBreakfast',	3,	7.8,	5,	1,	2,	2),
(null,	'testuser',	'2018-05-26',	'08:10:18',	'beforeBreakfast',	3,	7.8,	2,	1,	2,	2),
(null,	'testuser',	'2018-05-26',	'08:10:18',	'beforeDinner',		3,	7.5,	2,	2,	1,	2),
(null,	'testuser',	'2018-05-27',	'07:45:18',	'beforeBreakfast',	3,	7.2,	2,	2,	1,	3),
(null,	'testuser',	'2018-05-28',	'08:02:18',	'beforeBreakfast',	3,	7.2,	5,	0,	2,	2),
(null,	'testuser',	'2018-05-29',	'08:15:18',	'beforeBreakfast',	3,	7.0,	3,	2,	0,	2),
(null,	'testuser',	'2018-05-30',	'08:02:18',	'beforeBreakfast',	3,	7.3,	3,	1,	0,	2),
(null,	'testuser',	'2018-05-30',	'18:01:18',	'beforeDinner',		3,	7.4,	3,	2,	1,	1),
(null,	'testuser',	'2018-06-01',	'08:06:18',	'beforeBreakfast',	2,	7.2,	4,	2,	1,	2),
(null,	'testuser',	'2018-06-01',	'11:10:18',	'beforeLunch',		3,	7.2,	5,	1,	1,	1),
(null,	'testuser',	'2018-06-02',	'08:15:18',	'beforeBreakfast',	1,	7.3,	5,	1,	0,	0),
(null,	'testuser',	'2018-06-03',	'07:55:18',	'beforeBreakfast',	1,	7.1,	2,	1,	1,	2),
(null,	'testuser',	'2018-06-03',	'10:00:18',	'afterBreakfast',	2,	7.0,	0,	2,	2,	2),
(null,	'testuser',	'2018-06-03',	'18:10:18',	'beforeDinner',		3,	7.2,	3,	2,	2,	1),
(null,	'testuser',	'2018-06-04',	'08:12:18',	'beforeBreakfast',	3,	7.4,	2,	3,	2,	2),
(null,	'testuser',	'2018-06-04',	'07:58:18',	'beforeBreakfast',	2,	7.5,	2,	2,	1,	0),
(null,	'testuser',	'2018-06-05',	'09:30:18',	'beforeBreakfast',	3,	6.8,	2,	2,	1,	0),
(null,	'testuser',	'2018-06-06',	'08:00:18',	'beforeBreakfast',	3,	6.5,	4,	1,	2,	1),
(null,	'testuser',	'2018-06-07',	'07:45:18',	'beforeBreakfast',	1,	6.4,	6,	2,	2,	1),
(null,	'testuser',	'2018-06-08',	'08:04:18',	'beforeBreakfast',	3,	6.3,	2,	1,	1,	2),
(null,	'testuser',	'2018-06-09',	'08:10:18',	'beforeBreakfast',	2,	6.3,	2,	2,	1,	1),
(null,	'testuser',	'2018-06-10',	'09:12:18',	'beforeBreakfast',	3,	6.0,	3,	0,	2,	2),
(null,	'testuser',	'2018-06-11',	'08:32:18',	'beforeBreakfast',	2,	6.1,	1,	2,	1,	2),
(null,	'testuser',	'2018-06-12',	'08:52:18',	'beforeBreakfast',	2,	6.4,	0,	1,	1,	3),
(null,	'testuser',	'2018-06-13',	'08:24:18',	'beforeBreakfast',	3,	6.2,	1,	1,	2,	2),
(null,	'testuser',	'2018-06-14',	'08:42:18',	'beforeBreakfast',	2,	6.3,	1,	2,	2,	3),
(null,	'testuser',	'2018-06-15',	'08:54:18',	'beforeBreakfast',	3,	6.2,	3,	1,	2,	2),
(null,	'testuser',	'2018-06-16',	'08:12:18',	'beforeBreakfast',	1,	6.8,	3,	2,	1,	1),
(null,	'testuser',	'2018-06-17',	'08:00:18',	'beforeBreakfast',	1,	7.5,	3,	2,	1,	2),
(null,	'testuser',	'2018-06-18',	'08:21:18',	'beforeBreakfast',	3,	7.8,	2,	2,	0,	2),
(null,	'testuser',	'2018-06-18',	'08:35:22',	'afterBreakfast',	0,	8.2,	0,	1,	0,	1),
(null,	'testuser',	'2018-06-18',	'11:30:24',	'beforeLunch',		1,	7.6,	4,	1,	1,	3),
(null,	'testuser',	'2018-06-19',	'08:05:18',	'beforeBreakfast',	3,	7.1,	5,	2,	1,	2),
(null,	'testuser',	'2018-06-19',	'08:25:22',	'afterBreakfast',	0,	8.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-06-19',	'11:25:24',	'beforeLunch',		1,	7.3,	4,	1,	1,	3),
(null,	'testuser',	'2018-06-20',	'07:04:18',	'beforeBreakfast',	3,	6.5,	5,	2,	1,	2),
(null,	'testuser',	'2018-06-20',	'07:35:22',	'afterBreakfast',	0,	7.3,	0,	1,	1,	1),
(null,	'testuser',	'2018-06-20',	'11:15:23',	'beforeLunch',		1,	7.8,	4,	1,	1,	3),
(null,	'testuser',	'2018-06-20',	'12:01:34',	'afterLunch',		0,	8.0,	0,	0,	2,	0),
(null,	'testuser',	'2018-06-20',	'18:10:51',	'beforeDinner',		3,	8.2,	3,	1,	1,	1),
(null,	'testuser',	'2018-06-20',	'18:48:43',	'afterDinner',		0,	8.5,	0,	1,	0,	1),
(null,	'testuser',	'2018-06-21',	'07:13:28',	'beforeBreakfast',	4,	8.5,	5,	2,	1,	2),
(null,	'testuser',	'2018-06-21',	'18:55:51',	'beforeDinner',		3,	8.2,	3,	3,	1,	2),
(null,	'testuser',	'2018-06-21',	'19:34:43',	'afterDinner',		0,	8.6,	0,	1,	0,	1),
(null,	'testuser',	'2018-06-22',	'07:04:18',	'beforeBreakfast',	2,	8.6,	5,	2,	1,	2),
(null,	'testuser',	'2018-06-22',	'07:35:22',	'afterBreakfast',	0,	7.9,	0,	1,	1,	1),
(null,	'testuser',	'2018-06-22',	'18:10:51',	'beforeDinner',		4,	7.5,	3,	1,	1,	1),
(null,	'testuser',	'2018-06-22',	'18:48:43',	'afterDinner',		0,	7.2,	0,	1,	0,	1),
(null,	'testuser',	'2018-06-23',	'07:04:18',	'beforeBreakfast',	3,	6.6,	4,	2,	1,	2),
(null,	'testuser',	'2018-06-23',	'18:10:51',	'beforeDinner',		2,	7.6,	2,	3,	0,	1),
(null,	'testuser',	'2018-06-23',	'18:48:43',	'afterDinner',		0,	8.5,	0,	1,	1,	1),
(null,	'testuser',	'2018-06-24',	'07:04:18',	'beforeBreakfast',	5,	7.6,	4,	0,	2,	2),
(null,	'testuser',	'2018-06-24',	'07:35:22',	'afterBreakfast',	0,	8.2,	0,	0,	2,	1),
(null,	'testuser',	'2018-06-24',	'18:48:43',	'afterDinner',		0,	8.5,	0,	0,	2,	1),
(null,	'testuser',	'2018-06-25',	'08:06:18',	'beforeBreakfast',	3,	7.8,	5,	1,	2,	2),
(null,	'testuser',	'2018-06-26',	'08:10:18',	'beforeBreakfast',	3,	7.8,	2,	1,	2,	2),
(null,	'testuser',	'2018-06-26',	'08:10:18',	'beforeDinner',		3,	7.5,	2,	2,	1,	2),
(null,	'testuser',	'2018-06-27',	'07:45:18',	'beforeBreakfast',	3,	7.2,	2,	2,	1,	3),
(null,	'testuser',	'2018-06-28',	'08:02:18',	'beforeBreakfast',	3,	7.2,	5,	0,	2,	2),
(null,	'testuser',	'2018-06-29',	'08:15:18',	'beforeBreakfast',	3,	7.0,	3,	2,	0,	2),
(null,	'testuser',	'2018-06-30',	'08:02:18',	'beforeBreakfast',	3,	7.3,	3,	1,	0,	2),
(null,	'testuser',	'2018-06-30',	'18:01:18',	'beforeDinner',		3,	7.2,	3,	2,	1,	1),
(null,	'testuser',	'2018-07-01',	'08:06:18',	'beforeBreakfast',	2,	7.2,	4,	2,	1,	2),
(null,	'testuser',	'2018-07-01',	'11:10:18',	'beforeLunch',		3,	7.5,	5,	1,	1,	1),
(null,	'testuser',	'2018-07-02',	'08:15:18',	'beforeBreakfast',	1,	7.3,	5,	1,	0,	0),
(null,	'testuser',	'2018-07-03',	'07:55:18',	'beforeBreakfast',	1,	7.1,	2,	1,	1,	2),
(null,	'testuser',	'2018-07-03',	'10:00:18',	'afterBreakfast',	2,	7.5,	0,	2,	2,	2),
(null,	'testuser',	'2018-07-03',	'18:10:18',	'beforeDinner',		3,	7.8,	3,	2,	2,	1),
(null,	'testuser',	'2018-07-04',	'08:12:18',	'beforeBreakfast',	3,	7.6,	2,	3,	2,	2),
(null,	'testuser',	'2018-07-04',	'07:58:18',	'beforeBreakfast',	2,	7.5,	2,	2,	1,	0),
(null,	'testuser',	'2018-07-05',	'09:30:18',	'beforeBreakfast',	3,	6.8,	2,	2,	1,	0),
(null,	'testuser',	'2018-07-06',	'08:00:18',	'beforeBreakfast',	3,	6.8,	4,	1,	2,	1),
(null,	'testuser',	'2018-07-07',	'07:45:18',	'beforeBreakfast',	1,	6.4,	6,	2,	2,	1),
(null,	'testuser',	'2018-07-08',	'08:04:18',	'beforeBreakfast',	3,	6.3,	2,	1,	1,	2),
(null,	'testuser',	'2018-07-09',	'08:10:18',	'beforeBreakfast',	2,	6.9,	2,	2,	1,	1),
(null,	'testuser',	'2018-07-10',	'09:12:18',	'beforeBreakfast',	3,	7.0,	3,	0,	2,	2),
(null,	'testuser',	'2018-07-11',	'08:32:18',	'beforeBreakfast',	2,	7.1,	1,	2,	1,	2),
(null,	'testuser',	'2018-07-12',	'08:52:18',	'beforeBreakfast',	2,	7.2,	0,	1,	1,	3),
(null,	'testuser',	'2018-07-13',	'08:24:18',	'beforeBreakfast',	3,	7.6,	1,	1,	2,	2),
(null,	'testuser',	'2018-07-14',	'08:42:18',	'beforeBreakfast',	2,	7.6,	1,	2,	2,	3),
(null,	'testuser',	'2018-07-15',	'08:54:18',	'beforeBreakfast',	3,	7.5,	3,	1,	2,	2),
(null,	'testuser',	'2018-07-16',	'08:12:18',	'beforeBreakfast',	1,	7.8,	3,	2,	1,	1),
(null,	'testuser',	'2018-07-17',	'08:00:18',	'beforeBreakfast',	1,	7.5,	3,	2,	1,	2),
(null,	'testuser',	'2018-07-18',	'08:21:18',	'beforeBreakfast',	3,	7.5,	2,	2,	0,	2),
(null,	'testuser',	'2018-07-18',	'08:35:22',	'afterBreakfast',	0,	8.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-07-18',	'11:30:24',	'beforeLunch',		1,	7.6,	4,	1,	1,	3),
(null,	'testuser',	'2018-07-19',	'08:05:18',	'beforeBreakfast',	3,	7.4,	5,	2,	1,	2),
(null,	'testuser',	'2018-07-19',	'08:25:22',	'afterBreakfast',	0,	8.6,	0,	1,	0,	1),
(null,	'testuser',	'2018-07-19',	'11:25:24',	'beforeLunch',		1,	7.4,	4,	1,	1,	3),
(null,	'testuser',	'2018-07-20',	'07:04:18',	'beforeBreakfast',	3,	6.8,	5,	2,	1,	2),
(null,	'testuser',	'2018-07-20',	'07:35:22',	'afterBreakfast',	0,	7.2,	0,	1,	1,	1),
(null,	'testuser',	'2018-07-20',	'11:15:23',	'beforeLunch',		1,	7.6,	4,	1,	1,	3),
(null,	'testuser',	'2018-07-20',	'12:01:34',	'afterLunch',		0,	8.2,	0,	0,	2,	0),
(null,	'testuser',	'2018-07-20',	'18:10:51',	'beforeDinner',		3,	7.8,	3,	1,	1,	1),
(null,	'testuser',	'2018-07-20',	'18:48:43',	'afterDinner',		0,	8.5,	0,	1,	0,	1),
(null,	'testuser',	'2018-07-21',	'07:13:28',	'beforeBreakfast',	4,	8.3,	5,	2,	1,	2),
(null,	'testuser',	'2018-07-21',	'18:55:51',	'beforeDinner',		3,	7.7,	3,	3,	1,	2),
(null,	'testuser',	'2018-07-21',	'19:34:43',	'afterDinner',		0,	8.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-07-22',	'07:04:18',	'beforeBreakfast',	2,	7.6,	5,	2,	1,	2),
(null,	'testuser',	'2018-07-22',	'07:35:22',	'afterBreakfast',	0,	7.6,	0,	1,	1,	1),
(null,	'testuser',	'2018-07-22',	'18:10:51',	'beforeDinner',		4,	7.5,	3,	1,	1,	1),
(null,	'testuser',	'2018-07-22',	'18:48:43',	'afterDinner',		0,	7.0,	0,	1,	0,	1),
(null,	'testuser',	'2018-07-23',	'07:04:18',	'beforeBreakfast',	3,	7.6,	4,	2,	1,	2),
(null,	'testuser',	'2018-07-23',	'18:10:51',	'beforeDinner',		2,	7.6,	2,	3,	0,	1),
(null,	'testuser',	'2018-07-23',	'18:48:43',	'afterDinner',		0,	7.5,	0,	1,	1,	1),
(null,	'testuser',	'2018-07-24',	'07:04:18',	'beforeBreakfast',	5,	7.6,	4,	0,	2,	2),
(null,	'testuser',	'2018-07-24',	'07:35:22',	'afterBreakfast',	0,	8.2,	0,	0,	2,	1),
(null,	'testuser',	'2018-07-24',	'18:48:43',	'afterDinner',		0,	8.0,	0,	0,	2,	1),
(null,	'testuser',	'2018-07-25',	'08:06:18',	'beforeBreakfast',	3,	7.8,	5,	1,	2,	2),
(null,	'testuser',	'2018-07-26',	'08:10:18',	'beforeBreakfast',	3,	7.8,	2,	1,	2,	2),
(null,	'testuser',	'2018-07-26',	'08:10:18',	'beforeDinner',		3,	8.0,	2,	2,	1,	2),
(null,	'testuser',	'2018-07-27',	'07:45:18',	'beforeBreakfast',	3,	8.2,	2,	2,	1,	3),
(null,	'testuser',	'2018-07-28',	'08:02:18',	'beforeBreakfast',	3,	8.2,	5,	0,	2,	2),
(null,	'testuser',	'2018-07-29',	'08:15:18',	'beforeBreakfast',	3,	7.6,	3,	2,	0,	2),
(null,	'testuser',	'2018-07-30',	'08:02:18',	'beforeBreakfast',	3,	7.3,	3,	1,	0,	2),
(null,	'testuser',	'2018-07-30',	'18:01:18',	'beforeDinner',		3,	7.4,	3,	2,	1,	1);

/* Add quizes to quiz table */
INSERT INTO `quiz` (quiz_id, quiz_name) VALUES
	(1, 'fundamentals'),
	(2, 'treatment'),
	(3, 'problem_solving'),
	(4, 'insulin'),
	(5, 'lifestyle'),
	(6, 'hypo');

/* Add questions to quiz questions table */
INSERT INTO `quiz_questions` (quiz_question_id, quiz_id, quiz_question) VALUES
	(1, 1, 'What organ makes insulin'),
	(2, 1, 'What is the most common type of diabetes that affects young adults'),
	(3, 1, 'Having type one diabetes means:'),
	(4, 2, 'What is the normal blood glucose range for most people'),
	(5, 2, 'Which of the following are important in the treatment of diabetes'),
	(6, 2, 'If diabetes isn’t treated, which of the following can happen'),
	(7, 3, 'How do you measure your blood sugar'),
	(8, 3, 'When should you measure your blood sugar'),
	(9, 3, 'What test tells the doctor how well you have been managing your diabetes over the last ten weeks'),
	(10, 4, 'Which type of insulin do most people with diabetes take right before eating'),
	(11, 4, 'What are carbohydrates broken down to in the digestive system'),
	(12, 4, 'Where can I find out how much insulin to use'),
	(13, 5, 'Which is the following is a place where you can inject insulin'),
	(14, 5, 'What range should your blood glucose be before a meal'),
	(15, 5, 'What should you do before you inject insulin'),
	(16, 6, 'Which of the following actions might cause you to have a hypo'),
	(17, 6, 'Which of the following is an example of someone having a hypo'),
	(18, 6, 'What should you do first when you think you are having a hypo');

/* Add answers to quiz answers table */
INSERT INTO `quiz_answers` (quiz_question_id, quiz_answer) VALUES
	(1, 2),
	(2, 1),
	(3, 4),
	(4, 1),
	(5, 4),
	(6, 4),
	(7, 2),
	(8, 3),
	(9, 3),
	(10, 3),
	(11, 4),
	(12, 1),
	(13, 3),
	(14, 2),
	(15, 4),
	(16, 2),
	(17, 4),
	(18, 2);


/* Add sample data to quiz results */
INSERT INTO `quiz_results` (result_id, quiz_id, username, score) VALUES
	(16, 1, 'testuser', 3),
	(17, 2, 'testuser', 0),
	(18, 2, 'testuser', 3);

/* Add sample data to quiz user answer */
INSERT INTO `quiz_user_answer` (quiz_question_id, username, user_answer) VALUES
	(1, 'testuser', 2),
	(2, 'testuser', 1),
	(3, 'testuser', 4),
	(4, 'testuser', 2),
	(5, 'testuser', 1),
	(6, 'testuser', 2),
	(4, 'testuser', 1),
	(5, 'testuser', 4),
	(6, 'testuser', 4);