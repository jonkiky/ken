# Host: localhost  (Version 5.7.12-log)
# Date: 2018-03-17 10:08:40
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "campaign"
#

DROP TABLE IF EXISTS `campaign`;
CREATE TABLE `campaign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url_slug` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT NULL,
  `is_redirect` varchar(15) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

#
# Data for table "campaign"
#

INSERT INTO `campaign` VALUES (15,'name','url','redirect',NULL,NULL,1,'active'),(16,'bbbb','321','1','true',NULL,1,'active'),(17,'Ningbo VS New York','testcampaign123','','','24-Feb-2018 04:06 PM',1,'deleted'),(18,'basc','s','sfasdfasdf','','24-Feb-2018 04:07 PM',1,'deleted'),(19,'bbbb_duplicated_with_id_16','32112312312','1','false',NULL,1,'active'),(20,'bbbbbbbbbbb','TT','SSSSSSSSSSSs','true','15-Mar-2018 03:21 AM',1,'active'),(21,'T','','','false','16-Mar-2018 03:51 AM',1,'active'),(22,'T_duplicated_with_id_21','','','false','16-Mar-2018 03:51 AM',1,'deleted');

#
# Structure for table "coupon"
#

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(255) DEFAULT NULL,
  `offer_id` int(11) DEFAULT '-1',
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

#
# Data for table "coupon"
#

INSERT INTO `coupon` VALUES (1,'adsfasdf',2,'used'),(2,'bbbb',2,'not used'),(3,'dfasf',-1,'not used'),(4,'as',-1,'not used'),(5,'fda',-1,'not used'),(6,'sfd',-1,'not used'),(7,'as',-1,'not used'),(8,'df',-1,'not used'),(9,'sad',-1,'not used'),(10,'f',-1,'not used'),(11,'asdf',12,'not used'),(12,'sa',12,'not used'),(13,'f',12,'not used'),(14,'as',12,'not used'),(15,'f',12,'not used'),(16,'asf',10,'not used'),(17,'asdfas',10,'used'),(18,'as',12,'not used'),(19,'df',12,'not used'),(20,'as',12,'not used'),(21,'f',12,'not used'),(22,'saf',12,'not used'),(23,'sa',12,'not used'),(24,'f',12,'not used'),(25,'s',12,'not used'),(26,'as',11,'not used'),(27,'f',11,'not used'),(28,'as',11,'not used'),(29,'df',11,'not used'),(30,'as',-1,'not used'),(31,'f',-1,'not used'),(32,'saf',-1,'not used'),(33,'as',12,'not used'),(34,'f',12,'not used'),(35,'as',12,'not used'),(36,'df',12,'not used'),(37,'as',12,'not used'),(38,'f',12,'not used'),(39,'saf',12,'not used'),(40,'sa',12,'not used');

#
# Structure for table "offer"
#

DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'active/pending/disabled',
  `market_place` varchar(255) DEFAULT NULL,
  `template_id` int(11) DEFAULT '-1',
  `is_ever_green` varchar(15) DEFAULT NULL COMMENT 'YES/NO',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `daily_coupon_limited` int(11) DEFAULT '0',
  `sale_price` varchar(255) DEFAULT NULL,
  `normal_price` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_signup` varchar(255) DEFAULT NULL,
  `benefit1` varchar(255) DEFAULT NULL,
  `landing_analytics_code` text,
  `benefit2` varchar(255) DEFAULT NULL,
  `thank_you_analytics_code` text,
  `seller_id` varchar(255) DEFAULT NULL,
  `product_asin` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `buy_link_keywords` text,
  `url_rotation` text,
  `is_super_nova_url` varchar(255) DEFAULT NULL,
  `super_noval_url_keyword` text,
  `club_name` varchar(255) DEFAULT NULL,
  `deal_club_url` varchar(255) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT '0',
  `aweber_id` varchar(255) DEFAULT NULL,
  `search_key_words` varchar(255) DEFAULT NULL,
  `add_to_wishlist` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `lead_sentence` varchar(255) DEFAULT NULL,
  `product_description` text,
  `freq_deal_description` text,
  `freq_free_product_name` varchar(255) DEFAULT NULL,
  `freq_free_product_value` varchar(255) DEFAULT NULL,
  `freq_free_product_buy_url` varchar(255) DEFAULT NULL,
  `freq_disc_description` text,
  `freq_disc_product_name` varchar(255) DEFAULT NULL,
  `freq_disc_product_value` varchar(255) DEFAULT NULL,
  `freq_disc_product_discount` varchar(255) DEFAULT NULL,
  `freq_disc_product_buy_url` varchar(255) DEFAULT NULL,
  `is_upviral` varchar(255) DEFAULT NULL,
  `upviral_code` text,
  `user_id` int(11) DEFAULT '-1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

#
# Data for table "offer"
#

INSERT INTO `offer` VALUES (1,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Offer Name','true','us',1,'true','','',12,'123','321','Product Name','Brand','Company Email Address','direct','Benefit 1','','Benefit 2','','','','','','','','','','',19,'','Search Keywords','true','Product Type','','','','','','','','','','','','','',1),(3,'abcd','','',1,'','','',-1,'','','','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(4,'aba','true','',1,'true','','',-1,'9999999','999999','12312','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(5,'a','','',1,'','','',-1,'9999999','999999','','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(6,'','','',1,'','','',-1,'9999999','999999','','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(7,'','','',1,'','','',-1,'9999999','999999','','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(8,'12312','','',1,'','','',-1,'9999999','999999','','','','','','','','','','','','','','','','','',19,'','','','','','','','','','','','','','','','','',1),(9,'adfa  title','deleted','uk',2,'','','',12,'9999999','999999','','','','','','','','','','','','','','','','','',20,'','','','','','','','','','','','','','','','','',1),(10,'Offer Name2','deleted','us',1,'true','','',123,'111111111','22222222222','Product Name','Brand','Company Email Address','custom','Benefit 1','Landing Page Tracking/Analytics Code','Benefit 2','Thank You Page Tracking/Analytics Code','Seller ID (optional)','Product ASIN','Canonical URL (optional)','Keywords (optional)','URL Rotation (optional)','true','Seller ID is required. Keywords are optional.','Deal Club Name (optional)','Deal Club URL (optional)',21,'Aweber List ID','Search Keywords','true','Type','Lead Sentence','Product Deion','Deal Deion','Free Product Name','Free Product Value','Custom Buy URL','Deal Deion','Discounted Product Name','Discounted Product Value','Discounted Product Percentage Off','Custom Buy URL','true','UpViral Embed Code',1),(11,'Offer Name2','true','',1,'','2018-03-11 13:45','2018-03-31 07:50',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','Product Deion','','','','','','','','','','','',1),(12,'Offer Name3','','',1,'','','',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','','Deal Deion','','','','','','','','','','',1),(13,'Offer Name4','deleted','',1,'','2018-02-16 15:55','2018-03-21 10:50',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','','Deal Description','','','','','','','','','','',1),(14,'Offer Name2_duplicated_with_id_10','deleted','us',1,'true','','',123,'111111111','22222222222','Product Name','Brand','Company Email Address','custom','Benefit 1','Landing Page Tracking/Analytics Code','Benefit 2','Thank You Page Tracking/Analytics Code','Seller ID (optional)','Product ASIN','Canonical URL (optional)','Keywords (optional)','URL Rotation (optional)','true','Seller ID is required. Keywords are optional.','Deal Club Name (optional)','Deal Club URL (optional)',21,'Aweber List ID','Search Keywords','true','Type','Lead Sentence','Product Deion','Deal Deion','Free Product Name','Free Product Value','Custom Buy URL','Deal Deion','Discounted Product Name','Discounted Product Value','Discounted Product Percentage Off','Custom Buy URL','true','UpViral Embed Code',1),(15,'Offer Name2_duplicated_with_id_10','deleted','us',1,'true','','',123,'111111111','22222222222','Product Name','Brand','Company Email Address','custom','Benefit 1','Landing Page Tracking/Analytics Code','Benefit 2','Thank You Page Tracking/Analytics Code','Seller ID (optional)','Product ASIN','Canonical URL (optional)','Keywords (optional)','URL Rotation (optional)','true','Seller ID is required. Keywords are optional.','Deal Club Name (optional)','Deal Club URL (optional)',21,'Aweber List ID','Search Keywords','true','Type','Lead Sentence','Product Deion','Deal Deion','Free Product Name','Free Product Value','Custom Buy URL','Deal Deion','Discounted Product Name','Discounted Product Value','Discounted Product Percentage Off','Custom Buy URL','true','UpViral Embed Code',1),(16,'Offer Name2_duplicated_with_id_10','deleted','us',1,'true','','',123,'111111111','22222222222','Product Name','Brand','Company Email Address','custom','Benefit 1','Landing Page Tracking/Analytics Code','Benefit 2','Thank You Page Tracking/Analytics Code','Seller ID (optional)','Product ASIN','Canonical URL (optional)','Keywords (optional)','URL Rotation (optional)','true','Seller ID is required. Keywords are optional.','Deal Club Name (optional)','Deal Club URL (optional)',21,'Aweber List ID','Search Keywords','true','Type','Lead Sentence','Product Deion','Deal Deion','Free Product Name','Free Product Value','Custom Buy URL','Deal Deion','Discounted Product Name','Discounted Product Value','Discounted Product Percentage Off','Custom Buy URL','true','UpViral Embed Code',1),(17,'Offer Name3_duplicated_with_id_12','','',1,'','','',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','','Deal Deion','','','','','','','','','','',1),(18,'Offer Name2_duplicated_with_id_10','deleted','us',1,'true','','',123,'111111111','22222222222','Product Name','Brand','Company Email Address','custom','Benefit 1','Landing Page Tracking/Analytics Code','Benefit 2','Thank You Page Tracking/Analytics Code','Seller ID (optional)','Product ASIN','Canonical URL (optional)','Keywords (optional)','URL Rotation (optional)','true','Seller ID is required. Keywords are optional.','Deal Club Name (optional)','Deal Club URL (optional)',21,'Aweber List ID','Search Keywords','true','Type','Lead Sentence','Product Deion','Deal Deion','Free Product Name','Free Product Value','Custom Buy URL','Deal Deion','Discounted Product Name','Discounted Product Value','Discounted Product Percentage Off','Custom Buy URL','true','UpViral Embed Code',1),(19,'Offer Name4_duplicated_with_id_13','deleted','',1,'','2018-02-16 15:55','2018-03-21 10:50',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','','Deal Description','','','','','','','','','','',1),(20,'Offer Name2_duplicated_with_id_11','true','',1,'','2018-03-11 13:45','2018-03-31 07:50',0,'9999999','999999','','','','','','','','','','','','','','','','','',21,'','','','','','Product Deion','','','','','','','','','','','',1);

#
# Structure for table "offer_image"
#

DROP TABLE IF EXISTS `offer_image`;
CREATE TABLE `offer_image` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_id` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "offer_image"
#


#
# Structure for table "template"
#

DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "template"
#

INSERT INTO `template` VALUES (1,'Flash Sale Offer'),(2,'Giveaway Offer'),(3,'Search-Find-Bu'),(4,'Frequently Bought Together (Free)'),(5,'Frequently Bought Together (Discount)'),(6,'Contest');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0-active,-1 disactive',
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'user','user','user',0,'sfasdfsadf12312');
