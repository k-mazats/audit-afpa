
    <div id="alert"></div>
    <form id="mailForm" method="POST" novalidate>
        <div class="mailFrom">
            <div class="mailLastName">
                <label for="lastName">Nom</label>
                <input name="lastName" id="lastName" type="text">
            </div>
            <div class="mailFirstName">
                <label for="firstName">Prénom</label>
                <input name="firstName" id="firstName" type="text">
            </div>
            <div class="mailReply">
                <label for="replyMail">Adresse email</label>
                <input name="replyMail" id="replyMail" type="email">
            </div>
        </div>
        <div class="mailContent">
            <label for="contentMail">Message</label>
            <textarea name="contentMail" id="contentMail" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Envoyer</button>
</form>