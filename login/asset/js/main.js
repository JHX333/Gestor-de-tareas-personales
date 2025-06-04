function mostrarContraseña(idPassword, idIcon){
    let inputPassword = document.getElementById(idPassword);
    let icon = document.getElementById(idIcon);
    if(inputPassword.type =="password" && icon.classList.contains("fa-eye")){
        inputPassword.type = "text";
        icon.classList.replace("fa-eye","fa-eye-slash");
    }else{
        inputPassword.type = "password";
        icon.classList.replace("fa-eye-slash","fa-eye");
    }
}
function saveTask() {
    const title = document.getElementById("task-title").value;
    const description = document.getElementById("task-description").value;
    const priority = document.getElementById("task-priority").value;

    if (!title || !priority) {
        alert("Por favor complete el título y seleccione una prioridad");
        return;
    }

    fetch("guardar_tarea.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `titulo=${encodeURIComponent(title)}&descripcion=${encodeURIComponent(description)}&prioridad=${encodeURIComponent(priority)}`
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === "ok") {
            alert("Tarea guardada.");
            location.reload();
        }
    });
}
