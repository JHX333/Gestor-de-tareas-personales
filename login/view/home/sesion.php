<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>

<head>
    <title>Gestor de Tareas Personales</title>
    <style>
        .body {
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;
    background-color: rgb(2, 98, 136);
        }
        h1, h2, h3 {
            color: Black;
        }
        h1 {
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        .priority-high {
            color: #e74c3c;
            font-weight: bold;
        }
        .priority-medium {
            color: #f39c12;
        }
        .priority-low {
            color: #2ecc71;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
        }
        textarea {
            height: 80px;
            resize: vertical;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .completed {
            text-decoration: line-through;
            color: #95a5a6;
        }
        .status-container {
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #7f8c8d;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="body">
    <h1>Gestor de Tareas Personales</h1>
    <h2 id="welcome-message">Bienvenido: <?= $_SESSION['usuario']?></h2>
    <h3 id="current-date">Fecha 26 Abril del 2025</h3>

    <h3>Lista de Tareas</h3>
    <table id="tasks-table">
        <thead>
            <tr>
                <th width="10%">Estatus</th>
                <th width="60%">Título</th>
                <th width="30%">Prioridad</th>
            </tr>
        </thead>
        <tbody>
            <!-- Las tareas se agregarán aquí dinámicamente -->
        </tbody>
    </table>

    <div class="form-container" id="task-form">
        <h3 id="form-title">Nueva tarea</h3>
        <input type="text" id="task-title" placeholder="Título" required>
        <textarea id="task-description" placeholder="Descripción"></textarea>
        <select id="task-priority" required>
            <option value="">Seleccione prioridad...</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
        </select>
        <button id="submit-task">Crear</button>
        <button id="cancel-edit" style="display: none; background-color: #95a5a6;">Cancelar</button>
    </div>

    <div class="footer">
        <p>Total de tareas: <span id="total-tasks">0</span> | Completadas: <span id="completed-tasks">0</span></p>
    </div>
</div>
    <script>
        // Datos iniciales
       let tasks = [];

function cargarTareas() {
    fetch("/login/controller/get_tareas.php")
        .then(res => res.json())
        .then(data => {
            tasks = data.map(t => ({
                id: parseInt(t.id),
                title: t.titulo,
                description: t.descripcion,
                priority: t.prioridad,
                completed: t.completada == 1
            }));
            renderTasks();
        });
}

        let editingTaskId = null;

        // Mostrar fecha actual
        function updateDate() {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const today = new Date().toLocaleDateString('es-ES', options);
            document.getElementById('current-date').textContent = `Fecha ${today}`;
        }

        // Mostrar tareas en la tabla
        function renderTasks() {
            const tbody = document.querySelector("#tasks-table tbody");
            tbody.innerHTML = "";

            tasks.forEach(task => {
                const row = document.createElement("tr");
                if (task.completed) {
                    row.classList.add("completed");
                }

                // Celda de estatus (checkbox)
                const statusCell = document.createElement("td");
                statusCell.className = "status-container";
                const checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.checked = task.completed;
                checkbox.addEventListener("change", () => {
                    task.completed = checkbox.checked;
                    renderTasks();
                    updateTaskCounters();
                });
                statusCell.appendChild(checkbox);
                row.appendChild(statusCell);

                // Celda de título
                const titleCell = document.createElement("td");
                titleCell.textContent = task.title;
                titleCell.addEventListener("click", () => editTask(task.id));
                row.appendChild(titleCell);

                // Celda de prioridad
                const priorityCell = document.createElement("td");
                priorityCell.textContent = task.priority;
                priorityCell.classList.add(`priority-${task.priority.toLowerCase()}`);
                row.appendChild(priorityCell);

                tbody.appendChild(row);
            });

            updateTaskCounters();
        }

        // Actualizar contadores de tareas
        function updateTaskCounters() {
            document.getElementById("total-tasks").textContent = tasks.length;
            document.getElementById("completed-tasks").textContent = tasks.filter(t => t.completed).length;
        }

        // Editar tarea
        function editTask(id) {
            const task = tasks.find(t => t.id === id);
            if (!task) return;

            editingTaskId = id;
            document.getElementById("form-title").textContent = "Editar tarea";
            document.getElementById("task-title").value = task.title;
            document.getElementById("task-description").value = task.description;
            document.getElementById("task-priority").value = task.priority;
            document.getElementById("submit-task").textContent = "Actualizar";
            document.getElementById("cancel-edit").style.display = "inline-block";
        }

        // Cancelar edición
        function cancelEdit() {
            editingTaskId = null;
            document.getElementById("form-title").textContent = "Nueva tarea";
            document.getElementById("task-title").value = "";
            document.getElementById("task-description").value = "";
            document.getElementById("task-priority").value = "";
            document.getElementById("submit-task").textContent = "Crear";
            document.getElementById("cancel-edit").style.display = "none";
        }

        // Guardar tarea (nueva o editada)
        function saveTask() {
    const title = document.getElementById("task-title").value;
    const description = document.getElementById("task-description").value;
    const priority = document.getElementById("task-priority").value;

    if (!title || !priority) {
        alert("Por favor complete el título y la prioridad");
        return;
    }

    fetch("/login/controller/guardar_tarea.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `titulo=${encodeURIComponent(title)}&descripcion=${encodeURIComponent(description)}&prioridad=${encodeURIComponent(priority)}`
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === "ok") {
            alert("Tarea guardada correctamente.");
            cargarTareas();
            cancelEdit();
        } else {
            alert("Error al guardar la tarea.");
        }
    })

            if (editingTaskId) {
                // Actualizar tarea existente
                const taskIndex = tasks.findIndex(t => t.id === editingTaskId);
                if (taskIndex !== -1) {
                    tasks[taskIndex] = {
                        ...tasks[taskIndex],
                        title,
                        description,
                        priority
                    };
                }
            } else {
                // Crear nueva tarea
                const newId = tasks.length > 0 ? Math.max(...tasks.map(t => t.id)) + 1 : 1;
                tasks.push({
                    id: newId,
                    title,
                    description,
                    priority,
                    completed: false
                });
            }

            renderTasks();
            cancelEdit();
        }

        // Event listeners
        document.getElementById("submit-task").addEventListener("click", saveTask);
        document.getElementById("cancel-edit").addEventListener("click", cancelEdit);

        // Inicialización
        updateDate();
cargarTareas();
    </script>
</body>
</html>
<?php
require_once("C://xampp/htdocs/login/config/db.php");

$usuario_id = $_SESSION['usuario_id'];
$db = new db();
$pdo = $db->conexion();
$stmt = $pdo->prepare("SELECT * FROM tareas WHERE usuario_id = ?");
$stmt->execute([$usuario_id]);
$tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Aquí puedes hacer echo json_encode($tareas) si vas a usarlo con JavaScript
?>
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
