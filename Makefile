.PHONY: install tests coverage-clover coverage-html

install:
	composer update

tests:
	vendor/bin/tester -i -p php -C
	vendor/bin/tester tests/Uniparser -s -p php -C
