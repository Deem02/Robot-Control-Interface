// Get all the control buttons
const controlButtons = document.querySelectorAll('.control-btn');

// Add event listeners to the buttons
controlButtons.forEach(button => {
    button.addEventListener('click', handleButtonClick);
});

function handleButtonClick(event) {
    // Get the direction from the data-direction attribute
    const direction = event.target.dataset.direction;

    // Send the command to the server
    sendCommand(direction);
}

function sendCommand(direction) {
    // Create an AJAX request to send the command to the server
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'connectPHPMyAdmin.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Handle the response from the server
            console.log(xhr.responseText);
        }
    };
    xhr.send('direction=' + direction);
}