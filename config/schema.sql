--
-- Table structure for table `tracked_sessions`
--

CREATE TABLE IF NOT EXISTS `tracked_sessions` (
    `tracking_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tracking cookie value',
    `referrer` varchar(1024) COLLATE utf8_unicode_ci NOT NULL COMMENT 'location of beacon',
    `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'when the beacon was loaded',
     PRIMARY KEY (`time`)
);

