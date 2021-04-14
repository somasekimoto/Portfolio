up:
	touch .env
	cp .env.local .env
	./vendor/bin/sail up
	rm .env
down:
	./vendor/bin/sail down
build:
	./vendor/bin/sail build --no-cache
