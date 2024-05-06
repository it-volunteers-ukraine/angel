// Отримати ширину екрану
var screenWidth = window.innerWidth;

// Відправити ширину екрану на сервер через AJAX
var xhr = new XMLHttpRequest();
xhr.open('POST', 'handle-screen-width.php', true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log('Width sent successfully.');
        // Тут ви можете обробити відповідь, якщо це необхідно
    }
};
xhr.send('screenWidth=' + screenWidth);