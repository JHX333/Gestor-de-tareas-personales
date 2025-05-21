
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
