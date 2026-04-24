<?php

$db->execute('CREATE TABLE IF NOT EXISTS ' . $db->table('entries') . ' (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');