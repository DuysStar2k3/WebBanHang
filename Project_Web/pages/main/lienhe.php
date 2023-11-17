<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}


.contact-form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

.input_lienhe,
textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.submit_lienhe {
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
}

.submit_lienhe:hover {
    background-color: #555;
}
</style>
<section class="contact-form">
        <h2>Gửi tin nhắn cho chúng tôi</h2>
        <form action="process_contact.php" method="post">
            <label for="name">Họ và tên:</label>
            <input class="input_lienhe" type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input class="input_lienhe" type="email" id="email" name="email" required>

            <label for="message">Nội dung:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button class="submit_lienhe" type="submit">Gửi</button>
        </form>
    </section>