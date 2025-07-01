CREATE TABLE IF NOT EXISTS `allergy` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `allergy_name` varbinary(1000) NOT NULL,
  `allergy_type` varbinary(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;
