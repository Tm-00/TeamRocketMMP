<?php
// <NAME> IBARHIM SULU-GAMBARI
// <CONTRIBUTION TO THIS PAGE> The entire page apart from the header 
// WITH  THE USE OF HTML,CSS and PHP
session_start();
include('functions/dbconfig.php');

if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        * {
            text-decoration: none;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            text-align: center;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .H1{
display: flex;
background-color: #139b047e;
}
        nav {
          overflow: hidden;
          text-align: center;
          margin-left: 160px;
          padding-left: 100px;
          font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        nav a {
            font-size: large;
          float: left;
          display: block;
          color: black;
          text-align: center;
          padding-top: 20px;
          padding-bottom: 5px;
          margin-left: 30px;
          text-decoration: none;
          transition: border-bottom 0.3s; 
          border-bottom: 2px solid transparent; 
          font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
      
        nav a:hover {
          border-bottom: 2px solid white;
        }
        .button {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 13px;
        color: black;
        border-radius: 5px;
        transition: background-color 0.3s, border-color 0.3s;
        }

        .button:hover {
        background-color: #E8FFE8;
        border: 2px solid #129B04;
        }

        .f1{
            display :flex;
        }
        .buttons a {
            display: block;
            font-size: 12px;

        }
        .card img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 5px 25px;
            display: block;
        }
        label{
            display: block;
            width: 200px;
            background: #129B04;
            color: #E8FFE8;
            padding: 2px;
            margin: 3px;
            border-radius: 5px;
            cursor: pointer;
        }
        input{
            display: none;
        }
        h5{
            color: grey;
            text-decoration: none;
        }
        .hero{
            width: 950px;
            height: 100px;
            margin: 10px;
        }
        #calender{
            width: 100px;
            position: absolute;
        }
        .map{
            width: 90px;
            height: 80vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        iframe{
            width:1000px;
            height:450px;
            margin: 3px;
        }
        .b3{
            width: 200px;
            background: #129B04;
            color: #E8FFE8;
            padding: 5px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .b1{
            display: flex;
        }
        .b1 a{
            margin-left: 100px;
        }
        /* Chatbot Styles */
        .chatbot-toggler {
  position: fixed;
  bottom: 30px;
  right: 3500px;
  outline: none;
  border: none;
  height: 50px;
  width: 50px;
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #129B04;
  transition: all 0.2s ease;
}
div.show-chatbot .chatbot-toggler {
  transform: rotate(90deg);
}
.chatbot-toggler span {
  color: #fff;
  position: absolute;
}
.chatbot-toggler span:last-child,
div.show-chatbot .chatbot-toggler span:first-child  {
  opacity: 0;
}
div.show-chatbot .chatbot-toggler span:last-child {
  opacity: 1;
}
.chatbot {
  position: fixed;
  bottom: 90px;
  left: 50%;
  transform: translateX(-50%) translateX(-50%);
  width: 420px;
  max-width: calc(100% - 40px);
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
  transform: scale(0.5);
  transform-origin: bottom right;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
  transition: all 0.1s ease;
}

div.show-chatbot .chatbot {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1) translateX(-50%);
}


.chatbot header {
  padding: 16px 0;
  position: relative;
  text-align: center;
  color: #fff;
  background: #129B04;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.chatbot header span {
  position: absolute;
  right: 15px;
  top: 50%;
  display: none;
  cursor: pointer;
  transform: translateY(-50%);
}
header h2 {
  font-size: 1.4rem;
}
.chatbot .chatbox {
  overflow-y: auto;
  height: 510px;
  padding: 30px 20px 100px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
  width: 6px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
  background: #fff;
  border-radius: 25px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 25px;
}
.chatbox .chat {
  display: flex;
  list-style: none;
}
.chatbox .outgoing {
  margin: 20px 0;
  justify-content: flex-end;
}
.chatbox .incoming span {
  width: 32px;
  height: 32px;
  color: #fff;
  cursor: default;
  text-align: center;
  line-height: 32px;
  align-self: flex-end;
  background: #129B04;
  border-radius: 4px;
  margin: 0 10px 7px 0;
}
.chatbox .chat p {
  white-space: pre-wrap;
  padding: 12px 16px;
  border-radius: 10px 10px 0 10px;
  max-width: 75%;
  color: #fff;
  font-size: 0.95rem;
  background: #129B04;
}
.chatbox .incoming p {
  border-radius: 10px 10px 10px 0;
}
.chatbox .chat p.error {
  color: #721c24;
  background: #f8d7da;
}
.chatbox .incoming p {
  color: #000;
  background: #f2f2f2;
}
.chatbot .chat-input {
  display: flex;
  gap: 5px;
  position: absolute;
  bottom: 0;
  width: 100%;
  background: #fff;
  padding: 3px 20px;
  border-top: 1px solid #ddd;
}
.chat-input textarea {
  height: 55px;
  width: 100%;
  border: none;
  outline: none;
  resize: none;
  max-height: 180px;
  padding: 15px 15px 15px 0;
  font-size: 0.95rem;
}
.chat-input span {
  align-self: flex-end;
  color: #129B04;
  cursor: pointer;
  height: 55px;
  display: flex;
  align-items: center;
  visibility: hidden;
  font-size: 1.35rem;
}
.chat-input textarea:valid ~ span {
  visibility: visible;
}

@media (max-width: 490px) {
  .chatbot-toggler {
    right: 20px;
    bottom: 20px;
  }
  .chatbot {
    right: 0;
    bottom: 0;
    height: 100%;
    border-radius: 0;
    width: 100%;
  }
  .chatbot .chatbox {
    height: 90%;
    padding: 25px 15px 100px;
  }
  .chatbot .chat-input {
    padding: 5px 15px;
  }
  .chatbot header span {
    display: block;
  }
}

        .dashboard {
            width: 10000px;
        }
      

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
</style>
<body>
    <div class="H1">
        <div>
            <img src="./Images/logo/logo.png" alt=""style="width: 50px; height: auto;">
        </div>
        <div>
            <nav>
                <a href="./index.php"><b>Home</b></a>
                <a href="./careers.html"><b>Careers </b></a>
                <a href="./testimonial.html"><b>Testimonials </b></a>
                <a href="./Advice.html"><b>Advice </b></a>
                <a href="./About.html"><b>About Us </b></a>
            </nav>
              
        </div>
        <div>
            <nav>
            <form method="post">
                            <button type="submit" name="logout" class="logout-btn" >Log Out</button>
                        </form>
            </nav>
        </div>
        
    </div>
    <div class="f1">
        <div class="buttons">
            <div class="her">
                <div class="card">
                    <img src="./Images/logo/logo.png" id="profile-pic">
                    <label for="Input-file">Update Image</label>
                    <input type="file" accept="image/jpeg, image/png, image/jpg" id="Input-file">
                </div>
            </div>
            <a href="#" class="button" onclick="showMessages()" on><b>Messages</b></a>
            <a href="confirmation_patient.php" class="button"><b>Appointment</b></a>
            <a href="appointment_patient.php" class="button"><b>Events</b></a>
            <a href="#" class="button" onclick="showMap()" on><b>Map</b></a>
            <a href="assign_carer.php" class="button" ><b>Manage Carers</b></a>
            
            <h5>
                Social Links
            </h5>
            <a href="#" class="button"><b>Communities </b></a>
            <a href="#" class="button"><b>Gmail</b></a>

        </div>
        <div id="dashboard">
            
        </div>
    </div>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("Input-file");
        inputFile.onchange = function() {
            profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }

        const showMessages = () => {
            document.getElementById('dashboard').innerHTML = `
            <div class = "show-chatbot">
                <div class="chatbot">

                    <header>
                <h2>Chatbot</h2>
                <span class="close-btn material-symbols-outlined">close</span>
                </header>
                    <ul class="chatbox">
                        <li class="chat incoming">
                            <span class="material-symbols-outlined">smart_toy</span>
                            <p>Hi there 👋<br>How can I help you today?</p>
                        </li>
                    </ul>
                    <div class="chat-input">
                        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
                        <span class="material-symbols-rounded" onclick="handleChat()">send</span>
                    </div>
                </div>
            </div>
            `;

       

        const chatbotToggler = document.querySelector(".chatbot-toggler");
const chatbox = document.querySelector(".chatbox");
const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");

let userMessage = null; // Variable to store user's message
const API_KEY = "sk-proj-5pZuedbZ7fkSEluF7OTQT3BlbkFJ4kEmfVWOge4Kml6OSW7z"; // Paste your API key here
const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    // Create a chat <li> element with passed message and className
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", `${className}`);
    let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi; // return chat <li> element
}

const generateResponse = (chatElement) => {
    const API_URL = "https://api.openai.com/v1/chat/completions";
    const messageElement = chatElement.querySelector("p");

    // Define the properties and message for the API request
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": `Bearer ${API_KEY}`
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages: [{role: "user", content: userMessage}],
        })
    }

    fetchWithRetry(API_URL, requestOptions)
        .then(res => res.json())
        .then(data => {
            console.log(data); // Log the response for debugging
            if (data.choices && data.choices[0].message && data.choices[0].message.content) {
                messageElement.textContent = data.choices[0].message.content.trim();
            } else {
                throw new Error("Invalid response from API");
            }
        })
        .catch((error) => {
            console.error(error); // Log any errors for debugging
            messageElement.classList.add("error");
            messageElement.textContent = "Oops! Something went wrong. Please try again.";
        })
        .finally(() => chatbox.scrollTo(0, chatbox.scrollHeight));
}

// Function to fetch with retry
const fetchWithRetry = (url, options, maxRetries = 3, interval = 1000) => {
    return new Promise((resolve, reject) => {
        const fetchData = async (url, options, retries) => {
            try {
                const response = await fetch(url, options);
                if (!response.ok) {
                    if (response.status === 429 && retries > 0) {
                        // Retry if status is 429 and retries are left
                        setTimeout(() => {
                            fetchData(url, options, retries - 1);
                        }, interval);
                    } else {
                        throw new Error('Network response was not ok');
                    }
                } else {
                    resolve(response);
                }
            } catch (error) {
                reject(error);
            }
        }
        fetchData(url, options, maxRetries);
    });
}

const handleChat = () => {
    userMessage = chatInput.value.trim(); // Get user entered message and remove extra whitespace
    if(!userMessage) return;

    // Clear the input textarea and set its height to default
    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;

    // Append the user's message to the chatbox
    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);
    
    // Display "Thinking..." message while waiting for the response
    const incomingChatLi = createChatLi("Thinking...", "incoming");
    chatbox.appendChild(incomingChatLi);
    chatbox.scrollTo(0, chatbox.scrollHeight);
    generateResponse(incomingChatLi);
}

chatInput.addEventListener("input", () => {
    // Adjust the height of the input textarea based on its content
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatInput.addEventListener("keydown", (e) => {
    // If Enter key is pressed without Shift key and the window 
    // width is greater than 800px, handle the chat
    if(e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleChat();
    }
});

        };



        const showNotifications = () => {
        document.getElementById('dashboard').innerHTML = `
            hey
        `;
    };
    
    const showEvents = () => {
        document.getElementById('dashboard').innerHTML = `
  
        <div class="col-md-9">
                <div id="calendar"></div>
            </div>
        `;
    };
    const showMap = () => {
        document.getElementById('dashboard').innerHTML = `
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d77540.68402658866!2d-2.172699!3d52.603125!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1713146203771!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="b1">
                <a href="https://maps.app.goo.gl/6u877E5CLitRQx3A6" class="b3"><b>View current location</b></a>
                <a href="https://maps.app.goo.gl/mWAvDPfy7L97Eqvb7" class="b3"><b>Add pin</b></a>
                <a href="https://maps.app.goo.gl/mWAvDPfy7L97Eqvb7" class="b3"><b>Clear pin</b></a>
            </div>
        `;
    };
    const showManage = () => {
        document.getElementById('dashboard').innerHTML = `
            <div>
                jjj
            </div>
        `;
    };

    const showSetting = () => {
        document.getElementById('dashboard').innerHTML = `
            <div>
                hhh
            </div>
        `;
    };
    

        const closeBtn = document.querySelector(".close-btn");
        closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
    </script>
    <script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
    <script src="./js1/script.js"></script>
    

</html>