const chatMessages = document.getElementById('chatMessages');
const messageInput = document.getElementById('messageInput');
const sendButton = document.getElementById('sendButton');
const usersList = document.getElementById('usersList');
const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
const usersSidebar = document.getElementById('usersSidebar');


// Sample responses for demo
const sampleResponses = [
    "Albatta, sizga qanday yordam bera olaman?",
    "Bu juda qiziqarli, davom eting...",
    "Tushunaman, batafsil ma'lumot bera olasizmi?",
    "Bir daqiqa, tekshirib ko'raman",
    "Boshqa savollaringiz bormi?",
    "Ajoyib! Sizga yordam berganimdan xursandman",
    "Bu haqida ko'proq ma'lumot berishingiz mumkinmi?",
    "Ha, albatta. Hoziroq ko'rib chiqaman"
];

// Initialize users list
function initializeUsersList() {
    users.forEach(user => {
        const userItem = document.createElement('div');
        userItem.className = 'user-item';
        userItem.innerHTML = `
            <div class="avatar">
                <img src="${user.avatar}" alt="${user.name}">
                <span class="status-dot" style="background: ${user.status === 'online' ? '#4CAF50' : '#999'}"></span>
            </div>
            <div class="user-info">
                <h3>${user.name}</h3>
                <p>${user.lastMessage}</p>
            </div>
            <div class="message-info">
                <div class="message-time">${user.time}</div>
                ${user.unread ? `<div class="unread-count">${user.unread}</div>` : ''}
            </div>
        `;
        userItem.addEventListener('click', () => selectUser(user));
        usersList.appendChild(userItem);
    });
}

function selectUser(user) {
    // Update header with selected user
    document.querySelector('.chat-header .avatar img').src = user.avatar;
    document.querySelector('.chat-header .user-info h2').textContent = user.name;
    document.querySelector('.chat-header .status').textContent = user.status === 'online' ? 'Online' : 'Offline';
    document.querySelector('.chat-header .status-dot').style.background = user.status === 'online' ? '#4CAF50' : '#999';

    // Clear chat messages
    chatMessages.innerHTML = '';
    
    // Add initial message
    setTimeout(() => {
        addMessage(`Salom, men ${user.name}!`, false);
    }, 500);

    // On mobile, close sidebar after selection
    if (window.innerWidth <= 768) {
        usersSidebar.classList.remove('active');
    }
}

// Time formatter
function formatTime(date) {
    return date.toLocaleTimeString('uz-UZ', { 
        hour: '2-digit', 
        minute: '2-digit',
        hour12: false 
    });
}

function createMessageElement(content, isSent) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${isSent ? 'sent' : 'received'}`;
    
    const messageContent = document.createElement('div');
    messageContent.className = 'message-content';
    
    const textSpan = document.createElement('span');
    textSpan.textContent = content;
    
    const timeSpan = document.createElement('span');
    timeSpan.className = 'message-time';
    timeSpan.style.fontSize = '0.7rem';
    timeSpan.style.color = isSent ? 'rgba(255, 255, 255, 0.7)' : '#666';
    timeSpan.style.marginLeft = '8px';
    timeSpan.textContent = formatTime(new Date());
    
    messageContent.appendChild(textSpan);
    messageContent.appendChild(timeSpan);
    messageDiv.appendChild(messageContent);
    
    return messageDiv;
}

function addMessage(content, isSent) {
    const messageElement = createMessageElement(content, isSent);
    chatMessages.appendChild(messageElement);
    
    if (isSent) {
        showTypingIndicator();
    }
    
    chatMessages.scrollTo({
        top: chatMessages.scrollHeight,
        behavior: 'smooth'
    });
}

function showTypingIndicator() {
    const typingDiv = document.createElement('div');
    typingDiv.className = 'message received typing-indicator';
    typingDiv.innerHTML = '<div class="message-content">Yozmoqda...</div>';
    chatMessages.appendChild(typingDiv);
    
    setTimeout(() => {
        typingDiv.remove();
    }, 1000);
}

function getRandomResponse() {
    return sampleResponses[Math.floor(Math.random() * sampleResponses.length)];
}

function sendMessage() {
    const message = messageInput.value.trim();
    if (message) {
        addMessage(message, true);
        messageInput.value = '';
        
        setTimeout(() => {
            addMessage(getRandomResponse(), false);
        }, 2000);
    }
}

// Mobile sidebar toggle
mobileSidebarToggle.addEventListener('click', () => {
    usersSidebar.classList.toggle('active');
});

// Close sidebar when clicking outside
document.addEventListener('click', (e) => {
    if (window.innerWidth <= 768 && 
        !usersSidebar.contains(e.target) && 
        !mobileSidebarToggle.contains(e.target)) {
        usersSidebar.classList.remove('active');
    }
});

// Event Listeners
sendButton.addEventListener('click', sendMessage);

messageInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage();
    }
});

// Initialize users list
initializeUsersList();

// Add initial message
setTimeout(() => {
    addMessage("Assalomu alaykum! Sizga qanday yordam bera olaman? 👋", false);
}, 500);

// Button visual feedback
document.querySelectorAll('button').forEach(button => {
    button.addEventListener('mousedown', () => {
        button.style.transform = 'scale(0.95)';
    });
    
    button.addEventListener('mouseup', () => {
        button.style.transform = 'scale(1)';
    });
    
    button.addEventListener('mouseleave', () => {
        button.style.transform = 'scale(1)';
    });
});

// Prevent form submission
document.addEventListener('submit', (e) => e.preventDefault());