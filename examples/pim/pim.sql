-- Personal Info Manager


CREATE DATABASE IF NOT EXISTS pim CHARACTER SET latin1 COLLATE latin1_general_ci;

CREATE TABLE IF NOT EXISTS `institutions` (
  `InstID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Institution ID',
  `InstName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Institution Name',
  `StDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Start Date',
  `Inactive` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Inactive',
  PRIMARY KEY (`InstID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `InstID` int(10) unsigned NOT NULL COMMENT 'Institution ID',
  `FullName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Full Name',
  `username` varchar(10) NOT NULL COMMENT 'Username',
  `passcode` varchar(40) DEFAULT NULL COMMENT 'Passcode',
  `Inactive` tinyint(1) DEFAULT '0' COMMENT 'Inactive',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE IF NOT EXISTS `doctxns` (
  `TxnID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Transaction ID',
  `UserID` int(10) unsigned NOT NULL COMMENT 'User ID',
  `EntryDT` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Entered On',
  `FileRef` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Reference',
  `Subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Subject',
  `Issue` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Issue Description',
  PRIMARY KEY (`TxnID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


