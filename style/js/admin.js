// Initial data

let activeSection = 'users';
let editingId = null;
let isAdding = false;

// DOM Elements
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const menuButton = document.getElementById('menuButton');
const sectionTitle = document.getElementById('sectionTitle');
const tableBody = document.getElementById('tableBody');
const navItems = document.querySelectorAll('.nav-item');

// Mobile menu handlers
menuButton.addEventListener('click', () => {
sidebar.classList.toggle('open');
overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
});

overlay.addEventListener('click', () => {
sidebar.classList.remove('open');
overlay.style.display = 'none';
});

// Navigation handlers
navItems.forEach(item => {
item.addEventListener('click', () => {
    // Update active section
    activeSection = item.dataset.section;
    sectionTitle.textContent = activeSection;
    
    // Update active state
    navItems.forEach(nav => nav.classList.remove('active'));
    item.classList.add('active');
    
    // Close mobile menu
    sidebar.classList.remove('open');
    overlay.style.display = 'none';
    
    // Reset state
    isAdding = false;
    editingId = null;
    
    // Refresh table
    renderTable();
});
});

// Table rendering
function renderTable() {
tableBody.innerHTML = '';

// Add new row if adding
if (isAdding) {
    const newRow = createAddingRow();
    tableBody.appendChild(newRow);
}

// Add existing items
items.forEach(item => {
    const row = document.createElement('tr');
    
    if (editingId === item.id) {
        var rows = '';
        Object.entries(item).forEach(([key, value]) => {
            if(key !== 'id' && key !== 'created_at') {
                rows += `<td><input name="${key}" type="${key=='email'?'email':key=='password'?'password':'text'}" value="${key=='password'?'':value}" id="editInput"></td>`;
            }
        });
    row.innerHTML = `<form action="/log/update" method="POST">
        <td>${item.id}</td>
        ${rows}
        <td>${item.created}</td>
        <td>
        <div class="action-buttons">
            <button type="submit" class="save-button" onclick="handleSaveEdit(${item.id})">Save</button>
            <button class="cancel-button" onclick="handleCancel()">Cancel</button>
        </div>
        </td>
    </form>
    `;
    } else {
        var rows = '';
        Object.entries(item).forEach(([key, value]) => {
            rows += `<td>${key=='password'?'.......':value}</td>`;
        });
        
        row.innerHTML = `
            ${rows}
            <td>
                <div class="action-buttons">
                    <button class="edit-button" onclick="handleEdit(${item.id})">Edit</button>
                    <button class="delete-button" onclick="handleDelete(${item.id})">Delete</button>
                </div>
            </td>
        `;
        
    }
    
    tableBody.appendChild(row);
});
}

function createAddingRow() {
    var rowsm = '';
    Object.entries(items[0]).forEach(([key, value]) => {
        if(key !== 'id' && key !== 'created_at') {
            rowsm += `<td><input type="${key}" placeholder="Enter title..." id="newInput"></td>`;
        }
    }); 
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>auto</td>
        ${rowsm}
        <td>auto</td>
        <td>
        <div class="action-buttons">
            <button class="save-button" onclick="handleSaveNew()">Save</button>
            <button class="cancel-button" onclick="handleCancel()">Cancel</button>
        </div>
        </td>
    `;
    return row;
}

// Action handlers
function handleAdd() {
isAdding = true;
renderTable();
document.getElementById('newInput').focus();
}

function handleSaveNew() {
const input = document.getElementById('newInput');
const title = input.value.trim();

if (title) {
    const newItem = {
    id: Math.max(0, ...items.map(item => item.id)) + 1,
    title: title,
    created: new Date().toISOString().split('T')[0]
    };
    items.push(newItem);
    isAdding = false;
    renderTable();
}
}

function handleEdit(id) {
editingId = id;
renderTable();
document.getElementById('editInput').focus();
}

function handleSaveEdit(id) {
const input = document.getElementById('editInput');
const title = input.value.trim();

if (title) {
    items = items.map(item =>
    item.id === id ? { ...item, title: title } : item
    );
    editingId = null;
    renderTable();
}
}

function handleDelete(id) {
items = items.filter(item => item.id !== id);
renderTable();
}

function handleCancel() {
isAdding = false;
editingId = null;
renderTable();
}

// Initial render
renderTable();