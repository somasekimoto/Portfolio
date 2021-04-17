up:
	touch .env
	cp .env.local .env
	./vendor/bin/sail up
	rm .env
down:
	./vendor/bin/sail down
build:
	./vendor/bin/sail build --no-cache
common:
	@make npm
	@make zip
	@make release stage=$(stage) release=$(release)
	@make s3 stage=$(stage) release=$(release)
s3:
ifeq ($(release),beta)
	$(eval release := beta)
else
	$(eval release := stable)
endif
	aws s3 cp public/js/app.js.gz s3://portfolio-assets-$(stage)-$(release)/ --content-encoding "gzip" --content-type "text/javascript"
	aws s3 cp public/js/vendor.js.gz s3://portfolio-assets-$(stage)-$(release)/ --content-encoding "gzip" --content-type "text/javascript"
	aws s3 cp public/js/manifest.js.gz s3://portfolio-assets-$(stage)-$(release)/ --content-encoding "gzip" --content-type "text/javascript"
npm:
ifeq ($(stage),prod)
	$(eval env := prod)
else
	$(eval env := dev)
endif
	npm run $(env)
zip:
	gzip --best -f public/js/app.js
	gzip --best -f public/js/vendor.js
	gzip --best -f public/js/manifest.js
release:
	sls deploy --force --release $(release) --stage $(stage)
stg_beta:
	@make common stage=stg release=beta
