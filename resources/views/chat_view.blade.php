@include('header')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Jillie Jen's Massage Spa</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <style>
@media screen and (min-width:481px) and (max-width:580px){
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    .chatbox{
    display: none;
 }
 .chat-content{
    width: 100%;
    height: 70vh;
overflow-x: hidden;
overflow-y: auto;
background-color: #fff;
 }
 .btn-mobile{
    display: block;
    font-size: 45px;
    color: dodgerblue;
    border:none;
    outline: none;
    background-color: transparent;
    position: absolute;
    bottom: 30px;
    right: 20px;
 }
 .input-textCont{
    background-color: lightgrey;
    width: 90%;
    margin-left: 20px;
    height: 50px;
    border-radius: 10px;
}
.input-textCont input::placeholder{
    padding-left: 10px;
}
.input-textCont input:active{
border:0px solid #fff;
outline: none;
}
.input-textCont input{
    width: 80%;
    height: 50px;
    border:0px;
    border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    background-color: transparent;
    padding-left:10px ;
    outline: none;

}
.btn-send{
    position: absolute;
    right: 50px;
    bottom:20px;
    font-size: 25px;
    margin: 10px;
}
.btn-send button{
    background-color: transparent;
    border: none;
    outline: none;
}
.message{
    background-color: #111;
    color: #fff;
    width: 40%;
    padding: 10px;
    border-radius: 10px;
    margin: 10px 10px;
}
}
/* smartphones, iPhone, portrait 480x320 phones */
 @media screen and (min-width:320px) and (max-width:480px){
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
  
.chatbox{
    display: none;
 }
 .chat-content{
    width: 100%;
    height: 70vh;
overflow-x: hidden;
overflow-y: auto;
background-color: #fff;
 }
 .btn-mobile{
    display: block;
    font-size: 45px;
    color: dodgerblue;
    border:none;
    outline: none;
    background-color: transparent;
    position: absolute;
    bottom: 30px;
    right: 20px;
 }
 .input-textCont{
    background-color: lightgrey;
    width: 90%;
    margin-left: 20px;
    height: 50px;
    border-radius: 10px;
}
.input-textCont input::placeholder{
    padding-left: 10px;
}
.input-textCont input:active{
border:0px solid #fff;
outline: none;
}
.input-textCont input{
    width: 80%;
    height: 50px;
    border:0px;
    border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    background-color: transparent;
    padding-left:10px ;
    outline: none;

}
.btn-send{
    position: absolute;
    right: 50px;
    bottom:20px;
    font-size: 25px;
    margin: 10px;
}
.btn-send button{
    background-color: transparent;
    border: none;
    outline: none;
}
.message{
    background-color: #111;
    color: #fff;
    width: 40%;
    padding: 10px;
    border-radius: 10px;
    margin: 10px 10px;
}
}

@media (min-width:1025px) { 
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.btn-mobile{
display: none;
}
.container_pages{
 height: 100%;
  width: 100% !important;
  display: flex;
flex-direction: row-reverse;
align-items: center;
justify-content: center;
  background-color: #cdcdcdff;
  padding:  0px;
  margin:   0px;
}
.chatbox{
    width:35%;
    height: 93vh;
    background-color: #fff;
    float: right;
    display: block;
    position:   relative ;
    left:  170px;
}
.footer{
    width: 100%;
    height: 70px;
    background-color: dodgerblue;
    padding: 10px;
    display: flex;
    align-items: center;
    text-align: center;
}
.footer img{
    margin-left: 60px;
}
.footer h1{
    font-size: 21px;
    font-style: italics;
}
.chat-content{
    width: 100%;
    height: 76.8vh;
overflow-x: hidden;
overflow-y: auto;
background-color: #fff;
}
.message{
    background-color: #111;
    color: #fff;
    width: 40%;
    padding: 10px;
    border-radius: 10px;
    margin: 10px 10px;
}
.input-textCont{
    background-color: lightgrey;
    width: 60%;
    margin-left: 20px;
    height: 50px;
    border-radius: 10px;
}
.input-textCont input::placeholder{
    padding-left: 10px;
}
.input-textCont input:active{
border:0px solid #fff;
outline: none;
}
.input-textCont input{
    width: 80%;
    height: 50px;
    border:0px;
    border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    background-color: transparent;
    padding-left:10px ;
    outline: none;

}
.btn-send{
    position: absolute;
    right: 230px;
    bottom:5px;
    font-size: 25px;
    margin: 10px;
}
.btn-send button{
    background-color: transparent;
    border: none;
    outline: none;
}
.CustList{
 background-color: #fff;
    width: 45%;
 height: 93vh !important;
 position:  relative;
 left:160px;
}
.FlatForm{
 display: flex;
 align-items: center;
 justify-content: center;
 width: 100%;
 height: 50%;

}
.TOPlist{
    width: 100%;
    background-color: dodgerblue;
    padding: 10px;
    height: 73px;
}
.TOPlist h2{
    font-size: 25px;
    position: relative;
    top: 10px;
    left:  20px;
    color: #fff;
}
.social-icons{
    width: 50%;
    text-align: center;
    font-style: italic;
}
.social-icons a i{
    font-size: 25px;
    margin: 10px 10px;
}
}
        </style>
    </head>
    <body>

<div class="container_pages">
<button class="btn-mobile" data-bs-toggle="modal" data-bs-target="#updateProfileImageModal"><i class="bi bi-messenger"></i></button>

<div class="modal fade" id="updateProfileImageModal" tabindex="-1" aria-labelledby="updateProfileImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                  <img
            src="{{ asset('./AdminPic/JillieJens.png') }}"
            class="rounded-circle border border-light me-2"
            height="40"
            width="40"
            alt="Black and White Portrait of a Man"
            loading="lazy"/>   
            <div class="d-flex flex-column text-white">
              <h1>jillie Help Desk</h1>
            </div>
                <!-- <h5 class="modal-title" id="updateProfileImageModalLabel">Chat Box</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="app">
                    <div id="messages1" class="chat-content bg-light">
                        @foreach($messages as $message)
                            <div>{{ $message->content }}</div>
                        @endforeach
                    </div>
                 <!--    <input type="text" id="newMessage" class="form-control mb-2">
                    <button onclick="sendMessage()"class="btn btn-primary">Send</button> -->
                      <div class="input-content p-2 bg-dark" >
                     <div class="input-textCont">
        <form>
            <input type="text" id="message-input1" autocomplete="off" placeholder="Type a Message">
            <div class="btn-send">
            <button id="send-button1"style="display: none;"><i class="bi bi-send"></i></button>
            <button id="camera-button1"><i class="bi bi-camera"></i></button>
       </div>
        </form>
    </div>
          </div>      </div>
            </div>
        </div>
    </div>
</div>





      <div class="chatbox">
          <div class="footer">
  <img
            src="{{ asset('./AdminPic/JillieJens.png') }}"
            class="rounded-circle border border-light me-2"
            height="40"
            width="40"
            alt="Black and White Portrait of a Man"
            loading="lazy"/>   
            <div class="d-flex flex-column text-white">
              <h1>jillie Help Desk</h1>
            </div> 
  
      </div>
      
<div class="chat-content  bg-light" id="messages">
       </div> 
            <div class="input-content p-2 bg-dark" >
   <div class="input-textCont">
        <form>
            <input type="text" id="message-input" autocomplete="off" placeholder="Type a Message">
            <div class="btn-send">
            <button id="send-button"style="display: none;"><i class="bi bi-send"></i></button>
            <button id="camera-button"><i class="bi bi-camera"></i></button>
       </div>
        </form>
    </div>
</div>
      
        
</div>
<div class="CustList">
<div class="TOPlist">
<h2>Inquire Us</h2>
</div>
<div class="FlatForm">
<div class="social-icons">
<a><i class="bi bi-messenger"></i></a>
<a><i class="bi bi-twitter-x"></i></a>
<a><i class="bi bi-google"></i></a><br>
<span style="position: relative;top:10px">Please don't hesitate to contact us for any inquiries regarding our massage services, or connect with us through our social media channels.</span>
</div>
</div>

</div>
   
        <script defer>
 //FOR DESKTOP           
            var fname = "{{ $fname }}";
    var lname = "{{ $lname }}";
  
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

//FOR MOBILE
const messageInput1 = document.getElementById("message-input1");
const sendButton1 = document.getElementById("send-button1");
const cameraButton1 = document.getElementById("camera-button1");

messageInput1.addEventListener("input", function() {
    if (this.value.trim() !== "") {
        sendButton1.style.display = "block";
        cameraButton1.style.display = "none";
    } else {
           sendButton1.style.display = "none";
        cameraButton1.style.display = "block";
    }
});
//down not run
sendButton1.addEventListener("click", function(event) {
    event.preventDefault();
    const message = messageInput1.value.trim();
    if (message !== "") {
          const messagesContainer1 = document.getElementById("messages1");

          messagesContainer1.innerHTML += `<span style="position:relative;top:10px;left:20px;">${fname} ${lname}</span> <div class="message">       
<span style="padding:10px;max-width: 200px !important;overflow-wrap: break-word;">${message}</span></div>`;

        // Clear input field
        messageInput1.value = "";
        // Hide send button
        sendButton1.style.display = "none";
        // Display camera button
        cameraButton1.style.display = "block";
    }
});




cameraButton.addEventListener("click", function(event) {
    event.preventDefault();
    // Your logic to handle camera button click
    console.log("Camera button clicked");
});

        </script>