// import Echo from 'laravel-echo';
// window.io = require('socket.io-client');

// const echo = new Echo({
//     broadcaster: 'socket.io',
//     host: window.location.hostname + ':6001'
// });

// window.echo = echo;

import Echo from 'laravel-echo';
window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

   const echo = new Echo({
        broadcaster: 'socket.io',
        host: window.location.hostname + ':6001'
    });

            var fname = "{{ $fname }}";
    var lname = "{{ $lname }}";
    console.log("First Name: " + fname);
    console.log("Last Name: " + lname);
const messageInput = document.getElementById("message-input");
const sendButton = document.getElementById("send-button");
const cameraButton = document.getElementById("camera-button");

messageInput.addEventListener("input", function() {
    if (this.value.trim() !== "") {
        sendButton.style.display = "block";
        cameraButton.style.display = "none";
    } else {
        sendButton.style.display = "none";
        cameraButton.style.display = "block";
    }
});

sendButton.addEventListener("click", function(event) {
    event.preventDefault();
    const message = messageInput.value.trim();
    if (message !== "") {
        // Send the message
        // console.log("Message sent: " + message);
          const messagesContainer = document.getElementById("messages");

          messagesContainer.innerHTML += `<span style="position:relative;top:10px;left:20px;">${fname} ${lname}</span> <div class="message">       
<span style="padding:10px;max-width: 200px !important;overflow-wrap: break-word;">${message}</span></div>`;

        // Clear input field
        messageInput.value = "";
        // Hide send button
        sendButton.style.display = "none";
        // Display camera button
        cameraButton.style.display = "block";
    }
});

cameraButton.addEventListener("click", function(event) {
    event.preventDefault();
    // Your logic to handle camera button click
    console.log("Camera button clicked");
});