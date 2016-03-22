<?php

use yii\db\Schema;
use yii\db\Migration;

class m160209_160326_tbl_advert extends Migration
{
    public function up()
    {
       $this->execute("
       CREATE TABLE IF NOT EXISTS `advert` (
  `idadvert` int(11) NOT NULL AUTO_INCREMENT,
  `price` mediumint(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fk_agent_detail` mediumint(11) DEFAULT NULL,
  `bedroom` smallint(1) DEFAULT NULL,
  `livingroom` smallint(1) DEFAULT NULL,
  `parking` smallint(1) DEFAULT NULL,
  `kitchen` smallint(1) DEFAULT NULL,
  `general_image` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `hot` smallint(1) NOT NULL,
  `sold` smallint(1) NOT NULL,
  `type` varchar(50) NOT NULL,
  `recommend` smallint(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`idadvert`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


       ");
    }

    public function down()
    {
        $this->dropTable("advert");

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
