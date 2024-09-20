<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">About me</a></li>
                <li><a href="#proyects">Proyects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </nav>
    </header>
<section id="about">
    <h2>about me</h2>
    <h1>Hi, I'm a passionate web developer learning Html, CSS, and Js</h1>
</section>
<section id="proyects">
    <h2>Proyects</h2>
    <p>Here are some of tre proyects I've worked on:</p>
    <ul>
        <li>Proyects 1</li>
        <li>Proyects 2</li>
    </ul>
</section>
<section id="contact">
    <h2>Contacts</h2>
    <button type="button" onclick="ShowMessage()">Click to contact me!</button>
    <p id="message"></p>
</section>
<script src="script.js"></script>
</body>
</html>