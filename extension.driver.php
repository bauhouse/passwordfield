<?php

	Class extension_passwordfield extends Extension{

		public function about(){
			return array('name' => 'Field: Password',
				'version' => '1.0',
				'release-date' => '2008-12-31',
				'author' => array('name' => 'Stephen Bau',
								 'website' => 'http://www.domain7.com',
								 'email' => 'stephen@domain7.com')
			);
		}
	
		public function uninstall(){
			$this->_Parent->Database->query("DROP TABLE `tbl_fields_password`");
		}

	
		public function install(){

			return $this->_Parent->Database->query("CREATE TABLE `tbl_fields_password` (
			  `id` int(11) unsigned NOT NULL auto_increment,
			  `field_id` int(11) unsigned NOT NULL,
			  PRIMARY KEY  (`id`),
			  UNIQUE KEY `field_id` (`field_id`)
			) TYPE=MyISAM");

		}
		
		
	}