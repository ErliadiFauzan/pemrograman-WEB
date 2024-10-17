let tasks = [];

function addTask() {
    const input = document.getElementById('todo-input');
    const taskText = input.value.trim();

    if (taskText === '') {
        alert('Task cannot be empty');
        return;
    }

    const task = { id: Date.now(), text: taskText, isEditing: false };
    tasks.push(task);
    input.value = '';
    renderTasks();
}

function deleteTask(id) {
    tasks = tasks.filter(task => task.id !== id);
    renderTasks();
}

function toggleEditTask(id) {
    const task = tasks.find(task => task.id === id);
    task.isEditing = !task.isEditing;
    renderTasks();
}

function updateTask(id) {
    const taskInput = document.getElementById(`edit-${id}`);
    const updatedText = taskInput.value.trim();

    if (updatedText === '') {
        alert('Task cannot be empty');
        return;
    }

    const task = tasks.find(task => task.id === id);
    task.text = updatedText;
    task.isEditing = false;
    renderTasks();
}

function renderTasks() {
    const todoList = document.getElementById('todo-list');
    todoList.innerHTML = '';

    tasks.forEach(task => {
        const li = document.createElement('li');
        
        if (task.isEditing) {
            li.innerHTML = `
                <input type="text" id="edit-${task.id}" value="${task.text}">
                <button class="edit" onclick="updateTask(${task.id})">Update</button>
                <button onclick="deleteTask(${task.id})">Delete</button>
            `;
        } else {
            li.innerHTML = `
                <span>${task.text}</span>
                <button class="edit" onclick="toggleEditTask(${task.id})">Edit</button>
                <button onclick="deleteTask(${task.id})">Delete</button>
            `;
        }

        todoList.appendChild(li);
    });
}
