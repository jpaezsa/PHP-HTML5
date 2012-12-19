<?php
require 'CONFIG.php';

# This function returns information about the website such as Title,
# description, owner etc.

function the_website ($option = "title") {
	switch ($option) {

		case 'title':
					echo WEBSITE_NAME ." - ". WEBSITE_DESCRIPTION;
			break;

		case 'name':
				echo WEBSITE_NAME;
			break;

		case 'description':
				echo WEBSITE_DESCRIPTION;
			break;

		case 'url':
				echo WEBSITE_URL;
			break;

		case 'owner':
				echo WEBSITE_OWNER;
	}
}

# This function returns information about the author such as url, name and slogan.

function the_author ($option = "author") {
	switch ($option) {

		case 'author':
				echo "Samuel Bran";
			break;

		case 'url':
			 echo "http://samuelbran.com";
			break;

		case 'slogan':
			 echo "";
	}
}

?>
