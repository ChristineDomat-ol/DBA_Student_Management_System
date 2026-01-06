<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registrar Section</title>

<style>
    * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        margin: 0;
        background: #e8d7b8;
    }


    .top-bar {
        height: 60px;
        background: #7a3f3f;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-right: 25px;
    }

    .top-bar img {
        width: 36px;
        height: 36px;
    }


    .container {
        padding: 30px 50px;
    }

    h1 {
        margin-bottom: 20px;
    }


    .form-box {
        border: 2px solid #7a3f3f;
        border-radius: 12px;
        padding: 20px 30px 30px;
        position: relative;
    }


    .trash {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #4b2b1a;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .form-title {
        text-align: center;
    }

    .form-title h2 {
        margin: 0;
    }

    .form-title p {
        margin: 5px 0 15px;
    }

    hr {
        border: none;
        border-top: 1px solid #444;
        margin-bottom: 20px;
    }


    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px 60px;
        padding: 0 40px;
    }

    .field {
        display: flex;
        align-items: center;
    }

    .field label {
        width: 120px;
        font-size: 15px;
    }

    .field input {
        width: 200px;
        height: 24px;
    }


    .buttons {
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        padding: 5px 10px;
    }


    .left-buttons {
        display: grid;
        grid-template-columns: auto auto;
        gap: 15px;
    }


    .left-buttons .update {
        grid-column: 1 / 2;
    }

    .right-buttons {
        display: flex;
        flex-direction: column;
        align-items: flex-end;   
    }


    .view {
        background: #5a2a00;
        width: 150px;
        height: 40px;
    }


    button {
        padding: 10px 22px;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
    }


    .enroll { 
        background: #0b7d3e;
        width: 150px;
        height: 40px; 
    }

    .drop { 
        background: #b51212;
        width: 150px;
        height: 40px;  
    }

    .update { 
        background: #5a2a00;
        width: 150px;
        height: 40px; 
    }

    .view { background: #5a2a00; }

    .right-buttons {
        flex-direction: column;
    }

    button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.25);
}

.enroll:hover { background: #0f9a4d; }
.drop:hover { background: #d01818; }
.update:hover,
.view:hover { background: #6e3400; }


button:active {
    transform: translateY(0);
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
</style>
</head>

<body>

<div class="top-bar">
    <img src="Assets/admin.png" alt="Profile">
</div>

<div class="container">
    <h1>Registrar Section</h1>

    <div class="form-box">
        <div class="trash">🗑</div>

        <div class="form-title">
            <h2>Enroll Student</h2>
            <p>Fill up the form</p>
        </div>

        <hr>

        <div class="form-grid">
            <div class="field">
                <label>Registrar ID:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Department:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>First Name:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Year Level:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Last Name:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Status:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Gender:</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Academic Standing:</label>
                <input type="text">
            </div>
        </div>
    </div>

    <div class="buttons">
        <div class="left-buttons">
            <button class="enroll">Enroll</button>
            <button class="drop">Drop</button>
            <button class="update">Update</button>
        </div>

        <div class="right-buttons">
            <button class="view">View Schedule</button>
        </div>
    </div>
</div>

</body>
</html>