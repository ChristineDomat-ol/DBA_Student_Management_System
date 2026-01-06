<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Information</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
        background-color: #e6d7bd;
    }


    .top-bar {
        background-color: #7a3f3a;
        height: 60px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 0 30px;
    }

    .top-bar img {
        width: 36px;
        height: 36px;
    }

    .page {
        padding: 30px 40px;
    }

    .page h1 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .card {
        border: 2px solid #7a3f3a;
        border-radius: 10px;
        padding: 25px;
        background-color: #e6d7bd;
    }


    .card-header {
        display: flex;
        align-items: center;
        gap: 20px;
    }


    .profile {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }


    .student-name h2 {
        font-size: 24px;
    }

    .student-name p {
        font-size: 14px;
        margin-top: 5px;
    }


    .divider {
        margin: 25px 0;
        border-top: 1px solid #888;
    }


    .details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        row-gap: 15px;
        column-gap: 50px;
        font-size: 16px;
    }

    .details span {
        font-weight: bold;
        margin-left: 8px;
    }


    .actions {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
        margin-top: 25px;
    }

    .actions button {
        background-color: #6b3b36;
        color: white;
        border: none;
        padding: 12px 28px;
        font-size: 15px;
        cursor: pointer;
        border-radius: 4px;
    }

    .actions button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.25);

    }
</style>
</head>

<body>


<div class="top-bar">
    <img src="Assets/student.png" alt="Profile">
</div>


<div class="page">
    <h1>Student Information</h1>

    <div class="card">

  
        <div class="card-header">
            <img class="profile" src="Assets/student.png" alt="Student">
            <div class="student-name">
                <h2>Enguerra, Meagan S.</h2>
                <p>2023-00123-BN-0</p>
            </div>
        </div>

        <div class="divider"></div>

        <!-- DETAILS -->
        <div class="details">
            <div>Student ID:<span>2023-00123-BN-0</span></div>
            <div>Department:<span>BSIT</span></div>

            <div>First Name:<span>Meagan</span></div>
            <div>Year Level:<span>Second Year</span></div>

            <div>Last Name:<span>Enguerra</span></div>
            <div>Status:<span>Enrolled</span></div>

            <div>Gender:<span>Female</span></div>
            <div>Academic Standing:<span>30 mins na nakatayo</span></div>
        </div>

    </div>

   
    <div class="actions">
        <button>View Grades</button>
        <button>View Schedule</button>
    </div>
</div>

</body>
</html>
