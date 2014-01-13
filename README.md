Práctica 3 IV: Diseño de máquinas virtuales
===========================================

1. Introducción
---------------

En ésta práctica he instalado dos máquinas virtuales:

*  [CentOS 6.3](http://www.centos.org/download/)
*  [Debian 7.3](http://www.debian.org/index.es.html)


2. Instalación máquina virtual
------------------------------

Para la creación de las dos máquinas virtuales he seguido pasos similares, el siguente ejemplo es con Debian:

*  El software utilizado para la virtualización es VirtuaBox, para su intalación he utilizado:
    
    sudo apt-get install virtualbox

*  Una vez instalado el software, se crea una nueva máquina virtual:

En este caso elegimos debian.

![captura1](https://dl.dropbox.com/s/krhi2308sxm6nlo/captura%201%20debian.png)

*  Asignamos la RAM deseada (luego la vamos a poder modificar):

![captura2](https://dl.dropbox.com/s/rh7p7vl9w85jg23/captura%202%20debian.png)

*  Creamos un disco duro virtual de un tamaño los suficientemento grande para la instalación. En ambos SO he elegido 8GB:

![captura3](https://dl.dropbox.com/s/o9h5gqhm1w3ecbi/captura%203%20debian.png)

*  En el tipo de archivo selecciono el usado en clase:

![captura4](https://dl.dropbox.com/s/pekcqtarozzz1q2/captura%204%20debian.png)

*  Por último selecciono la ISO del SO a instalar, para que arranque desde ella:

![captura5](https://dl.dropbox.com/s/rnw5anzbga2koet/captura%206%20debian.png)

Estos pasos son idénticos tanto en Debian como en CentOs.

Los siguientes pasos son la selección de idioma, creación de cuentas, etc... Estos pasos los obviamos.

3. Instalación Apache Benchmark
-------------------------------

En la instalación de Debian ya viene instalado por defecto.

Para instalarlo en CentOs he utilizado:

    yum install httpd
    service httpd start
    chkconfig httpd on

El último comando es para iniciar httpd por defecto al arranque.

4. Copia de sitio web en ambos SO
---------------------------------

En Debian copio la carpeta PHP en /var/www
En CentOs lo copio a en /var/www/http

5. Utilización de Apache Benchmark
----------------------------------

En cada SO he utilizado 4 combinaciones diferentes de RAM y procesadores.

Un ejemplo de utilización:

![captura6](https://dl.dropbox.com/s/d3qtkgolvl2ulpx/bench%20debian.png)

Tanto para Debian como CentOs he utilizado el siguiente comando:

    ab -n1000 -c10 http://localhost/php/
    
1000 consultas con una concurrencia de 10 usuarios.

Los resultados y las configuraciones son las siguientes:

Configuración | Time taken for tests | Requests per second | Time per request | Transfer rate
------------- | -------------------- | ------------------- | ---------------- | -------------
Debian 1GB RAM 1 Procesador | 0.223 seconds | 4493.63 | 2.225 [ms] | 2404.80 [Kbytes/sec]
Debian 2GB RAM 2 Procesadores | 0.436 seconds | 2292.96 | 4.361 [ms] | 1227.09 [Kbytes/sec]
Debian 1GB RAM 2 Procesadores | 0.196 seconds | 5107.90 | 1.958 [ms] | 2733.53 [Kbytes/sec]
Debian 2GB RAM 1 Procesador | 0.421 seconds | 2377.41 | 4.206 [ms] | 1272.29 [Kbytes/sec]
CentOS 1GB RAM 1 Procesador | 0.786 seconds | 1271.80 | 7.863 [ms] | 653.35 [Kbytes/sec]
CentOS 2GB RAM 2 Procesadores | 0.334 seconds | 2996.90 | 3.337 [ms] | 1544.18 [Kbytes/sec]
CentOS 1GB RAM 2 Procesadores | 0.707 seconds | 1414.82 | 7.068 [ms] | 726.82 [Kbytes/sec]
Centos 2GB RAM 1 Procesador | 0.366 seconds | 2730.32 | 3.663 [ms] | 1411.02 [Kbytes/sec]

6. Conclusión
-------------

Cómo se puede observar en la tabla anterior y según los resultados obtenidos podemos considerar que la mejor
opción es un so Debian con 1GB y 2 procesadores con una amplia ventaja sobre los demás. Cabe destacar el resultado inesperado por mi parte de Debian con 2GB de RAM y 2 procesadores que, a priori, podría parecer el mejor, pero que dados los resultados defrauda un poco.

