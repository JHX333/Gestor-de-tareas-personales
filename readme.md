
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
#### 1.-Descargar e instalar XAMPP: https://www.apachefriends.org/es/index.html
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

#### 6.-En MySql el puerto predeterminado es el 3306, si en dado caso no te funciona cambialo por el 3307 como se muestra en el video tutorial adjunto a este repositorio

![image](https://github.com/user-attachments/assets/d095581b-3449-4c3e-8f45-44fbba87efb9)

#### 7.-Iniciar (start) los puertos de Apache y Mysql

#### 8.-Desacargar e instalar visual studio code: https://code.visualstudio.com/Download

#### 9.-Instalar las siguientes extensiones dentro de visual studio code:
-MySQL
-PHP Debug
-PHP DocBlocker
-PHP Intelephense
-PHP Namespace Resolver
-PHPUnit

#### 10.-Descargar la carpeta login que se encuentra en este repositorio: https://github.com/JHX333/Gestor-de-tareas-personales

#### 11.-Si descargamos la carpeta en zip, la tenemos que extraer hasta que nos deje simplemente la carpeta

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
![image](https://github.com/user-attachments/assets/75e1f828-3055-4614-a014-8374a9e108b7)

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

#### 24.-Luego volvemos a phpmyadmin y en la base de datos login creamos una nueva tabla llamada tareas con el siguiente codigo:
 ```sql
CREATE TABLE tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    prioridad ENUM('Alta', 'Media', 'Baja'),
    completada BOOLEAN DEFAULT 0,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```
![image](https://github.com/user-attachments/assets/e4fcf378-d843-4c9e-8aa3-90503756b0a1)

![image](https://github.com/user-attachments/assets/0080835c-424b-4dad-b100-974f494e9922)

#### 25.-Ya iniciada la sesion, nos aparecera la siguiente pagina:

![image](https://github.com/user-attachments/assets/c054ff0a-250e-41ce-99a6-f8ebda6dc2bc)

Simplemente le damos click al boton de Agregar tareas.

#### 26.-Despues de entrar en la pagina de agregar tareas, nos aparecerá de la siguiente forma:

![image](https://github.com/user-attachments/assets/5ec1817c-1d55-40b4-b4a6-1a7886d7377f)

Aqui en mi caso yo ya tenia tareas guardadas que e terminado con este usuario.

#### 27.-Lo unico que tenemos que hacer es crear una tarea nueva, agregamos el titulo, descripcion, prioridad y crear

![image](https://github.com/user-attachments/assets/d54a049c-71e7-49fe-85c1-9c85bd30cd0e)

#### 28.-Una vez creada la tarea, podemos observar que nos lanza un mensaje del localhost de xampp:

![image](https://github.com/user-attachments/assets/85347ab0-a666-40f4-bd35-d1cdbad6bef0)

Esto quiere decir que al recargar la pagina, al cerrar sesion y volver entrar con el usuario la tarea seguira ahi, ya que se almaceno con exito en la tabla tareas de nuestra base de datos login con el usuario especifico y relacionado que la creo.

#### 29.-Podemos cerrar sesion para que nadie pueda ver nuestras tareas personales o bien registrar un nuevo usuario e iniciar sesion en nuestro gestor de tareas personales:

![image](https://github.com/user-attachments/assets/638330c3-7481-4786-80a2-812b87c59ea9)
![image](https://github.com/user-attachments/assets/4ed2711a-1678-4001-8ad4-1e8efc03238a)






