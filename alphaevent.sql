/*
Navicat MySQL Data Transfer

Source Server         : Airost
Source Server Version : 100315
Source Host           : localhost:3306
Source Database       : alphaevent

Target Server Type    : MYSQL
Target Server Version : 100315
File Encoding         : 65001

Date: 2021-02-07 22:10:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for budgets
-- ----------------------------
DROP TABLE IF EXISTS `budgets`;
CREATE TABLE `budgets` (
  `Budget_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `Budget_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cost` double(11,2) NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Budget_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for challenge
-- ----------------------------
DROP TABLE IF EXISTS `challenge`;
CREATE TABLE `challenge` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `daily_login` tinyint(1) NOT NULL,
  `open_leaderboard` tinyint(1) NOT NULL,
  `week_start_date` date NOT NULL,
  `week_end_date` date NOT NULL,
  `create_event_count` int(11) NOT NULL,
  `invitation_count` int(11) NOT NULL,
  `invitation_achieved` tinyint(1) NOT NULL,
  `create_event_achieved` tinyint(1) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `Event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Event_startDate` date NOT NULL,
  `Event_EndDate` date NOT NULL,
  `Event_StartTime` time NOT NULL,
  `Event_EndTime` time NOT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Announcement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for gamification
-- ----------------------------
DROP TABLE IF EXISTS `gamification`;
CREATE TABLE `gamification` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for guests
-- ----------------------------
DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests` (
  `record_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `Guest_id` int(11) NOT NULL,
  `Guest_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for invitations
-- ----------------------------
DROP TABLE IF EXISTS `invitations`;
CREATE TABLE `invitations` (
  `Invitation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Invitation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `memberid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `Member_id` int(11) NOT NULL,
  `Role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for public_events
-- ----------------------------
DROP TABLE IF EXISTS `public_events`;
CREATE TABLE `public_events` (
  `Public_event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Public_event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for registered_events
-- ----------------------------
DROP TABLE IF EXISTS `registered_events`;
CREATE TABLE `registered_events` (
  `Guest_id` int(11) NOT NULL,
  `Event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for send_invitations
-- ----------------------------
DROP TABLE IF EXISTS `send_invitations`;
CREATE TABLE `send_invitations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `invitation_id` int(11) NOT NULL,
  `Guest_id` int(11) DEFAULT NULL,
  `Guest_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for todos
-- ----------------------------
DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `Task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Event_id` int(11) NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_until` date NOT NULL,
  `last_login` date DEFAULT NULL,
  `login_days` int(11) NOT NULL,
  `invitation_count` int(11) NOT NULL,
  `create_event_count` int(11) NOT NULL,
  `finish_event_count` int(11) NOT NULL,
  `invitation_card_amount` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
