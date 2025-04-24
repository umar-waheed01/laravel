<div>
    <h1>Add New Student</h1>
    <form action="addstudent" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="batch">batch:</label>
            <input type="number" id="batch" name="batch" required>
        </div>
        <button type="submit">Add Student</button>
</div>

<style>
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    button {
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    a {
        display: inline-block;
        margin-top: 10px;
        text-decoration: none;
        color: #007BFF;
    }
    a:hover {
        text-decoration: underline;
    }
    h1 {
        margin-bottom: 20px;
    }
    div {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }
    h1 {
        color: #333;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    input[type="text"],
    input[type="email"],
    input[type="number"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
</style>
