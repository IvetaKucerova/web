function sendMessage() {
    var messageInput = document.getElementById("message-input");
    var message = messageInput.Value.trim();
    if (message !=="") {
        //zde se může zobrazit zpráva uživateli
        displayMessage("Me",message);

        messageInput.value = "";
    }
}

function displayMessage(sender, message) {
    var chatMessages = document.getElementById("chat-messages");
    var messageElement = document.createElement("div");
    messageElement.innerHTML = "<strong>" + sender + ":</strong>" + message;
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight; //posune dolů
}



//function closeChat() {
  //  var chatContainer = document.querySelector(".formchat");
    //chatContainer.style.display = "none";
//}




