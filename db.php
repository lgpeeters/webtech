<?php
    class db{
        // Properties
        private $dbhost = 'server.appartmedia.nl';
        private $dbuser = 's161151';
        private $dbpass = 'WebTech123';
        private $dbname = 's161151';

        // Connect
        public function connect() {
          $mysql_connect_str = "mysql:host=$this->dbhost,dbname=$this->dbname";
          $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
          $dbConnection->setAttribute(PDO::ATTR,ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $dbConnection;
        }
      }
