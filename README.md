# Slimore Multi Mosules Application

[Slimore](https://github.com/slimore/slimore) (H)MVC multi modules application template.

## Usage

	$ git clone https://github.com/slimore/slimore-multi-application.git
	# rename
	$ mv ./slimore-multi-application ./your-project-name
	$ cd ./your-project-name
	$ composer install

## Directory structure

	/
		app/
			home/				
				controllers/
				models/
				views/
			admin/				
				controllers/
				models/
				views/
			api/				
				controllers/
				models/
				views/
			caches/
			logs/
		configs/
			routes.php
			settigns.php
		public/
			.htaccess
			index.php
		vendor/
			...
		composer.json

## License

The [MIT License](https://github.com/slimore/slimore-application/blob/master/LICENSE).

Copyright (c) 2015 Pandao