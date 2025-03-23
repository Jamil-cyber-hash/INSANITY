<form action="submit_inquiry.php" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="inquiry_type">Inquiry Type:</label>
    <select id="inquiry_type" name="inquiry_type" required>
        <option value="General">General Inquiry</option>
        <option value="Obituary">Obituary Submission</option>
    </select>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Submit Inquiry</button>
</form>