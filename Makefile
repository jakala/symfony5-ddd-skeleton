#
# Makefile para simplificar las tareas comunes
#

# ejecutar docker-compose para crear el contenedor
.PHONY: compose
compose: CMD=up -d --build

.PHONY: compose_start
compose_start compose:
	docker-compose $(CMD)

# instalar vendors
.PHONY: install_composer
install_composer: CMD=--ignore-platform-reqs

.PHONY: vendors
vendors install_composer:
	composer install $(CMD)