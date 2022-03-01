# Entorno desarrollo PHP con docker

_Entorno de desarrollo para PHP con docker orquestado con nginx y mariadb_

Este entorno emplea PHP v7.1.3-fpm, MariaDB v10.3.9 y nginx en su última versión; todos en contenedores independientes.

## Consideraciones

Considérese que la ruta establecida en el archivo **.env** como variable de entorno **ENVIRONMENT** corresponde a la dirección del directorio que se está usando en un equipo con sistema Unix, y por ende el enrutamiento es completamente diferente en cada equipo. Para cada caso, verificar que la dirección corresponde a la ubicación en la que se va a trabajar. Así mismo, la variable de entorno **PROJECT_DIR** será el directorio del proyecto, el cual se llamó según el curso que se está tomando. Puede cambiarse a complacencia, como el puerto por defecto que es el **8001**. Estas y otras variables se establecen en el archivo **.env**

Además, es importante tener en cuenta que según configuraciones establecidas en el archivo **default.conf** ubicado en **/docker/nginx/**, el orden debúsqueda, y los nombres que leerá nginx serán: _index index.php index.html index.htm_. Por tanto nombrarsen consecuentemente.

## Inicio

Sólo se necesia de [docker](https://www.docker.com/) instalado en la máquina.

Para Linux:

_abrir una terminal en el directorio del proyecto y ejecutar:_

```
docker network create php-network || true
docker-compose up -d
```

Para cerrar el entono

```
docker-compose down
docker network rm php-network || true
```

Opcionalmente:

```
make run
```
Este comando creará una red docker y desplegará de forma automática el entorno; debe tener instalado [make](https://www.gnu.org/software/make/)

Para cerrar el entono eliminando la red creada:

```
make down
```

Luego, abrir el navegador y tipear en la barra de direcciones **http://localhost:8001/**

__________________________
__________________________

## Autor

* **Andrés E. Restrepo F.** - *This project* - [todo-php7](https://github.com/andres613/todo-php7)
