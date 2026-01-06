<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universal University</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
        height: 100vh;
    }


    .container {
        display: flex;
        height: 100vh;
    }


    .image-section {
        position: relative;
        width: 60%;
        height: 100vh;
        overflow: hidden;
    }


    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transform: scale(1.05);
        transition: opacity 1s ease, transform 1s ease;
    }

    .slide.active {
        opacity: 1;
        transform: scale(1);
    }


    .dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: #fff;
        transform: scale(1.4);
    }


    .content-section {
        width: 40%;
        background-color: #e6d7bd;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 60px;
    }

    .content-section h1 {
        font-size: 45px;
        font-weight: 500;
        margin-bottom: 20px;
        text-align: center;
    }

    .subtitle {
        font-size: 20px;
        margin-bottom: 60px;
        text-align: center;
    }


    .buttons {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .buttons button {
        background-color: #6b3b36;
        color: #fff;
        border: none;
        padding: 16px 20px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 20px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-bottom: 10px;
    }

    .buttons button:hover {
        background-color: #552e2a;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .buttons button:active {
        transform: translateY(0);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
</style>

</head>
<body>

<div class="container">


    <div class="image-section">
        <img class="slide active" src="Assets/university.png" alt="Slide 1">
        <img class="slide" src="Assets/students.png" alt="Slide 2">
        <img class="slide" src="Assets/students2.png" alt="Slide 3">


        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>


    <div class="content-section">
        <h1>Universal University</h1>
        <p class="subtitle">Hello there!</p>

    <div class="buttons">
        <button onclick="location.href='student-signin.php'">I am a Student</button>
        <button onclick="location.href='admin-signin.php'">I am an Admin</button>
        <button onclick="location.href='registrar-signin.php'">I am a Registrar</button>
    </div>


</div>

<script>
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove("active"));
        dots.forEach(dot => dot.classList.remove("active"));

        slides[index].classList.add("active");
        dots[index].classList.add("active");

        currentIndex = index;
    }

    setInterval(() => {
        let nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }, 4000);

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
        });
    });
</script>

</body>
</html>
