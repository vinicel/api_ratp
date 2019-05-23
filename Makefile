.PHONY: install symf-start symf-stop

install: composer install;

symf-start:
	    ./bin/console server:run;

symf-stop:
        ./bin/console server:stop;