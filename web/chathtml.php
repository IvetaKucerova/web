<form class="formchat">
    </div>
        <div class="chat-header">
            <h5>Živý chat</h5>
            <!--<button id="close-chat-btn" onclick="closeChat()">Zavřít</button>-->
        </div>

        <div id="chat-messages" class="chat-messages">
        <!--zde budou zobrazeny zprávy-->
        </div>

        <!--<input type="text" id="message-input" class="message-input" placeholder="Napište mi...">-->
        
        <textarea name="text" id="message-input" class="message-input" placeholder="Napište mi..." cols="30" rows="10"></textarea>
        
        <button onclick="sendMessage()" class="send-btn">Odeslat</button>
    </div>
</form>
