
# 🗂️ Gestor de Tareas Personales

## 📘 Información del Proyecto

**Nombre del Proyecto:** Gestor de Tareas Personales  
**Tipo de Aplicación:** Escritorio (web local)  
**Tecnologías Utilizadas:** PHP, MySQL, CSS, JavaScript, XAMPP (Apache + MySQL)  

---

## 👥 Integrantes del Equipo

- Balderas Espinoza Julio Cesar
- Gómez Rivera Victor Gerardo
- Osuna Reyes Manuel Amado
- Salazar Medina Ryan Alan
- Santiesteban Avila Jared Alexander
- Soto Zuñiga David Guadalupe
- Zamudio García Ivan Enrique

---

## 📌1. Introducción

El "Gestor de Tareas Personales" es una aplicación de escritorio simple pero efectiva que permite a los usuarios organizar sus actividades diarias desde su computadora. La herramienta está orientada a quienes buscan una solución rápida, accesible y funcional sin depender de servicios en línea.

---

## 🧾2. Resumen del Sistema

La aplicación permite:

- Registro e inicio de sesión de usuarios.
- Creación, edición y eliminación de tareas.
- Marcar tareas como completadas.
- Clasificación de tareas por prioridad (Alta, Media, Baja).
- Visualización organizada por estado (Pendientes / Completadas).
- Almacenamiento persistente mediante MySQL.

---

## ✅3. Requisitos

### Funcionales

- Permitir al usuario registrar una nueva tarea con título, descripción y prioridad. 
- Habilitar la edición de tareas existentes, incluyendo cambios en prioridad.
- Permitir eliminar tareas completadas o irrelevantes. 
- Mostrar las tareas organizadas por estado (pendientes y completadas). 
- Clasificar las tareas según su prioridad (alta, media, baja).
- Guardar automáticamente las tareas en una base de datos SQLite.
- Permitir marcar tareas como completadas.

---

### No Funcionales

- Interfaz de usuario clara, amigable y fácil de usar.
- Funcionamiento local sin necesidad de conexión a internet.
- Seguridad básica en el manejo de sesiones y contraseñas.


---

## ⚙️3.1 Requisitos Técnicos

- **Lenguaje Backend:** PHP
- **Base de Datos:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Servidor Local:** XAMPP (Apache y MySQL)
- **Base de datos:** Persistencia en MySQL mediante PHPMyAdmin

---
## 🏗️3.2 Arquitectura del Sistema

- **Frontend:** HTML + CSS + JavaScript
- **Backend:** PHP
- **Servidor:** Apache (XAMPP)
- **Base de Datos:** MySQL
- **Modelo de autenticación:** Validación de usuarios con sesiones PHP
- **Persistencia:** Local en base de datos MySQL

---
## 💾4. Instalación y Ejecución

### 1. Requisitos Previos

- Tener instalado **XAMPP**.
- Activar los módulos **Apache** y **MySQL** en el panel de control.

1. Instalar xampp seleccionar Apache, mysql, 
2. instalacion de visual code, 
3. Agregar archivos del repositorio en la siguiente ruta: C:\xampp\htdocs\login, 
4. En phpmyadmin crear una nueva base de datos llamada login y luego crear una tabla de usuarios con la informacion del archivo login


---
## 🖥️5. Uso del Sistema

### 1. Registro e Inicio de Sesión

-   Accede a la página principal.
    
-   Regístrate con un nombre de usuario, correo y contraseña.
    
-   Inicia sesión para comenzar a gestionar tus tareas.
    

### 2. Gestión de Tareas

-   **Agregar tarea:** Completar el formulario con título, descripción y prioridad.
    
-   **Editar tarea:** Modificar cualquier campo de una tarea existente.
    
-   **Eliminar tarea:** Eliminar tareas innecesarias o finalizadas.
    
-   **Marcar como completada:** Cambiar el estado a "completada".
    
-   **Visualización:** Filtrado de tareas por estado y prioridad.

---
## 🔐6. Modelado de Base de Datos
🧾 Tabla: `Usuario`

| Atributo | Tipo de dato | Descripción |
|---|---|---|
| IDUsuario | INT(PK) | Identificador único de usuario |
| NombreUsuario  | VARCHAR(100) | Nombre del usuario |
| Correo | VARCHAR(100) | Correo electrónico (opcional) |

🗂️ Tabla: `Tarea`
| Atributo | Tipo de dato | Descripción |
|---|---|---|
| IDTarea | INT (PK) | Identificador único de la tarea |
| Titulo | VARCHAR(255) | Título de la tarea |
| Descripcion | TEXT | Detalle o descripción de la tarea |
| Prioridad | ENUM('Alta','Media','Baja') | Nivel de prioridad de la tarea|
|Estado | ENUM('Pendiente','Completada')| Estado actual de la tarea|
|FechaCreacion | DATETIME | Fecha en que se creó la tarea | 
|FechaLimite | DATETIME |Fecha límite o de vencimiento de la tarea |

---
## 🔍Repositorio del Proyecto
https://github.com/JHX333/Gestor-de-tareas-personales.git

## INSTRUCCIONES DE INSTALACION
#### 1.-Descargar e instalar XAMPP: 
#### 2.-Una vez instalado el XAMPP, Ingresamos al XAMPP control panel 
![image](https://github.com/user-attachments/assets/dfe0bb14-9bd5-4518-b429-5b74289c4c32)

Vamos a cambiar los puertos que vienen por defecto en Apache y MySql, ya que los puertos que vienen por defecto tienden a estar ocupados, por lo que los cambiaremos por otros puertos que esten libres, en este caso utilizaremos 2 puertos para Apache: 1443 y 8012, para MySql el 3306.

#### 3.-En XAMPP control panel le damos en config al módulo Apache donde vamos a ingresar a la configuración de Apache (httpd.conf) 
![image](https://github.com/user-attachments/assets/0952e4a9-ccc6-4901-acd3-24c9d6c5b35f)

#### 4.-Entrando en las notas de Apache (httpd.conf) vamos a observar un apartado que dice:
![image](https://github.com/user-attachments/assets/867aa910-f53c-479e-8675-7b5890e6b0db)

#Listen 12.34.56.78:80
Listen 8012
En la parte donde aparece 443 lo vamos a cambiar por 8012, ya cambiado el puerto podemos cerrar la nota.

#### 5.-En Apache entraremos a config-Apache (httpd-ssl.conf) para cambiar el siguiente apartado:
![image](https://github.com/user-attachments/assets/26bd9db1-f7b2-4ba2-8d41-551b51d27b81)

#When we also provide SSL we have to listen to the 
#standard HTTP port (see above) and to the HTTPS port
Listen 1443

En donde esta 443 lo cambiaremos por 1443, también de igual forma en la siguiente sección, 443 por 1443:

<VirtualHost _default_:1443>

 ![image](https://github.com/user-attachments/assets/57715a87-41e4-4081-9065-ab4bd4bb489d)

Después de esos cambios podemos cerrar la nota.

#### 6.-En MySql vamos a ir a config-my.ini, después vamos a cambiar toda la nota por lo siguiente:

![image](https://github.com/user-attachments/assets/d095581b-3449-4c3e-8f45-44fbba87efb9)

| # Example MySQL config file for small systems. # # This is for a system with little memory (<= 64M) where MySQL is only used # from time to time and it's important that the mysqld daemon # doesn't use much resources. # # You can copy this file to # C:/xampp/mysql/bin/my.cnf to set global options, # mysql-data-dir/my.cnf to set server-specific options (in this # installation this directory is C:/xampp/mysql/data) or # ~/.my.cnf to set user-specific options. # # In this file, you can use all long options that a program supports. # If you want to know which options a program supports, run the program # with the "--help" option. # The following options will be passed to all MySQL clients [client] # password       = your_password port=3306 socket="C:/xampp/mysql/mysql.sock" # Here follows entries for some specific programs # The MySQL server default-character-set=utf8mb4 [mysqld] port=3306 socket="C:/xampp/mysql/mysql.sock" basedir="C:/xampp/mysql" tmpdir="C:/xampp/tmp" datadir="C:/xampp/mysql/data" pid_file="mysql.pid" # enable-named-pipe key_buffer=16M max_allowed_packet=1M sort_buffer_size=512K net_buffer_length=8K read_buffer_size=256K read_rnd_buffer_size=512K myisam_sort_buffer_size=8M log_error="mysql_error.log" # Change here for bind listening # bind-address="127.0.0.1" # bind-address = ::1          # for ipv6 # Where do all the plugins live plugin_dir="C:/xampp/mysql/lib/plugin/" # Don't listen on a TCP/IP port at all. This can be a security enhancement, # if all processes that need to connect to mysqld run on the same host. # All interaction with mysqld must be made via Unix sockets or named pipes. # Note that using this option without enabling named pipes on Windows # (via the "enable-named-pipe" option) will render mysqld useless! # # commented in by lampp security #skip-networking #skip-federated # Replication Master Server (default) # binary logging is required for replication # log-bin deactivated by default since XAMPP 1.4.11 #log-bin=mysql-bin # required unique id between 1 and 2^32 - 1 # defaults to 1 if master-host is not set # but will not function as a master if omitted server-id	=1 # Replication Slave (comment out master section to use this) # # To configure this host as a replication slave, you can choose between # two methods : # # 1) Use the CHANGE MASTER TO command (fully described in our manual) - #    the syntax is: # #    CHANGE MASTER TO MASTER_HOST=<host>, MASTER_PORT=<port>, #    MASTER_USER=<user>, MASTER_PASSWORD=<password> ; # #    where you replace <host>, <user>, <password> by quoted strings and #    <port> by the master's port number (3306 by default). # #    Example: # #    CHANGE MASTER TO MASTER_HOST='125.564.12.1', MASTER_PORT=3306, #    MASTER_USER='joe', MASTER_PASSWORD='secret'; # # OR # # 2) Set the variables below. However, in case you choose this method, then #    start replication for the first time (even unsuccessfully, for example #    if you mistyped the password in master-password and the slave fails to #    connect), the slave will create a master.info file, and any later #    change in this file to the variables' values below will be ignored and #    overridden by the content of the master.info file, unless you shutdown #    the slave server, delete master.info and restart the slaver server. #    For that reason, you may want to leave the lines below untouched #    (commented) and instead use CHANGE MASTER TO (see above) # # required unique id between 2 and 2^32 - 1 # (and different from the master) # defaults to 2 if master-host is set # but will not function as a slave if omitted #server-id       = 2 # # The replication master for this slave - required #master-host     =   <hostname> # # The username the slave will use for authentication when connecting # to the master - required #master-user     =   <username> # # The password the slave will authenticate with when connecting to # the master - required #master-password =   <password> # # The port the master is listening on. # optional - defaults to 3306 #master-port     =  <port> # # binary logging - not required for slaves, but recommended #log-bin=mysql-bin # Point the following paths to different dedicated disks #tmpdir = "C:/xampp/tmp" #log-update = /path-to-dedicated-directory/hostname # Uncomment the following if you are using BDB tables #bdb_cache_size = 4M #bdb_max_lock = 10000 # Comment the following if you are using InnoDB tables #skip-innodb innodb_data_home_dir="C:/xampp/mysql/data" innodb_data_file_path=ibdata1:10M:autoextend innodb_log_group_home_dir="C:/xampp/mysql/data" #innodb_log_arch_dir = "C:/xampp/mysql/data" ## You can set .._buffer_pool_size up to 50 - 80 % ## of RAM but beware of setting memory usage too high innodb_buffer_pool_size=16M ## Set .._log_file_size to 25 % of buffer pool size innodb_log_file_size=5M innodb_log_buffer_size=8M innodb_flush_log_at_trx_commit=1 innodb_lock_wait_timeout=50 ## UTF 8 Settings #init-connect=\'SET NAMES utf8\' #collation_server=utf8_unicode_ci #character_set_server=utf8 #skip-character-set-client-handshake #character_sets-dir="C:/xampp/mysql/share/charsets" sql_mode=NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION log_bin_trust_function_creators=1 character-set-server=utf8mb4 collation-server=utf8mb4_general_ci [mysqldump] max_allowed_packet=16M [mysql] # Remove the next comment character if you are not familiar with SQL #safe-updates [isamchk] key_buffer=20M sort_buffer_size=20M read_buffer=2M write_buffer=2M [myisamchk] key_buffer=20M sort_buffer_size=20M read_buffer=2M write_buffer=2M [mysqlhotcopy] |

#### Después de ingresar el código de arriba en la nota sin los signos " | " que estan al inicio y al final, ya la podemos cerrar, prácticamente con el código de la tabla de arriba cambiamos el puerto por el 3306

#### 7.-Iniciar (start) los puertos de Apache y Mysql

#### 8.-Desacargar e instalar visual studio code: https://code.visualstudio.com/Download

#### 9.-Instalar las siguientes extensiones dentro de visual studio code:
-MySQL
-PHP Debug
-PHP DocBlocker
-PHP Intelephense
-PHP Namespace Resolver
-PHPUnit

#### 10.-Descargar los archivos del siguiente repositorio: https://github.com/JHX333/Gestor-de-tareas-personales

#### 11.-Una vez descargados esos archivos, tenemos que colocarlos dentro de una carpeta llamada login

#### 12.-La carpeta login la vamos a colocar en la siguiente ruta: C:\xampp\htdocs

#### 13.-Luego verificamos que en el XAMPP este corriendo el Apache y el MySql

#### 14.-Ingresamos a cualquier navegador de nuestra preferencia 

#### 15.-En la barra URL escribimos: localhost:8012

![image](https://github.com/user-attachments/assets/a9b2ef2f-5e73-4648-ba1c-17986140b274)

Esto es para ingresar a nuestro XAMPP.

#### 16.-Ingresamos al phpMyAdmin

![image](https://github.com/user-attachments/assets/1754b6c0-4216-4905-a13b-ed5873507ab3)

#### 17.-En phpMyAdmin creamos una nueva base de datos llamada: login

![image](https://github.com/user-attachments/assets/f8824edc-f361-4fc1-880d-66d84af36a81)

#### 18.-En la base de datos login creamos una tabla llamada usuarios con la siguiente sintaxis:
```sql
CREATE TABLE usuarios(
Id int not null AUTO_INCREMENT,
PRIMARY KEY(id),
Correo varchar(150) NOT null UNIQUE,
Password varchar(150) NOT null
)
```
#### 19.-Abrimos visual studio code, después nos dirigimos a la ruta C:\xampp\htdocs y arrastramos la carpeta login al visual studio code

![image](https://github.com/user-attachments/assets/de300f4d-180e-43d1-9e1b-c2d0c344d5bd)

#### 20.-en nuestro navegador buscamos la URL: http://localhost:8012/login/

![image](https://github.com/user-attachments/assets/f0431209-dbd4-4426-aabf-f71463e10225)

#### 21.-Le damos click en Registrar usuario

![image](https://github.com/user-attachments/assets/665454fc-61c2-498f-8260-989186edfa4e)

#### 22.-Ya registrado el usuario en otra pestaña abrimos el localhost:8012-phpMyAdmin-login-usuarios y veremos que el usuario si ha sido agregado.

![image](https://github.com/user-attachments/assets/744db288-f8cd-476b-9f3d-303c63e01882)

#### 23.-Iniciamos sesión con el usuario que acabamos de agregar.

![image](https://github.com/user-attachments/assets/25201fad-a1e9-4e18-a0aa-89ce31445d88)

