ColorReflex
===========

ColorReflex is color game where you pick a right color. ColorReflex is JavaScript and JQuery game.
Server side is using php.

## Deploy

### Create database
Use database.sql to create table and test data.

### config.ini
Create config.ini to highscore.php

		[database]
		db_username = username
		db_password = password
		db_host = localhost
		db_database = database
		
### config.json
Create config.json to index.html where url is where is your highscore.php

		{
			"url": "www.url.com"
		}
