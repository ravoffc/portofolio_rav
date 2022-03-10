<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>ravoffc</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">ravoffc</span>
                    <span class="profession">Software Engineering</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bxs-user-circle icon'></i>
                            <span class="text nav-text">About</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="home.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="project.php">
                            <i class='bx bx-code-alt icon'></i>
                            <span class="text nav-text">Project</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contact.php">
                            <i class='bx bxs-conversation icon'></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Contact Me</div>

        <style>
            .container{
            z-index: 12;
            max-width: 1050px;
            width: 100%;
            background: #fff;
            border-radius: 12px;
            margin: 0 90px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }
            .container .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px 20px;
            }
            .content .image-box{
            max-width: 55%;
            }
            .content .image-box img{
            width: 100%;
            }
            .content .topic{
            font-size: 22px;
            font-weight: 500;
            color: #7CFC00;
            }
            .content form{
            width: 40%;
            margin-right: 30px;
            }
            .content .input-box{
            height: 50px;
            width: 100%;
            margin: 16px 0;
            position: relative;
            }
            .content .input-box input{
            position: absolute;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            padding-left: 16px;
            background: #F0FFF0;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            }
            .content .input-box input:focus,
            .content .input-box input:valid{
            border-color: #00BFFF;
            background-color: #fff;
            }
            .content .input-box label{
            position: absolute;
            left: 18px;
            top: 50%;
            color: #636c72;
            font-size: 15px;
            pointer-events: none;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            }
            .content .input-box input:focus ~ label,
            .content .input-box input:valid ~ label{
            top: 0;
            left: 12px;
            display: 14px;
            color: #7CFC00;
            background: #fff;
            }
            .content .message-box{
            min-height: 100px;
            position: relative;
            }
            .content .message-box textarea{
            position: absolute;
            height: 100%;
            width: 100%;
            resize: none;
            background: #F0FFF0;
            border: 2px solid transparent;
            border-radius: 6px;
            outline: none;
            transition : all 0.3s ease;
            }
            .content .message-box textarea:focus{
            border-color: #00BFFF;
            background-color: #fff;
            }
            .content .message-box label{
            position: absolute;
            font-size: 16px;
            color: #00BFFF;
            left: 18px;
            top: 6px;
            pointer-events: none;
            transition: all 0.3s ease;
            }
            .content .message-box textarea:focus ~ label{
            left: 12px;
            top: -10px;
            color: #00BFFF;
            font-size: 14px;
            background: #fff;
            }
            .content .input-box input[type="submit"]{
            color: #fff;
            background: #00BFFF;
            padding-left: 0;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            }
            .content .input-box input[type="submit"]:hover{
            background-color: #E0FFFF;
            }
            @media (max-width:1000px) {
            .content .image-box{
                max-width: 70%;
            }
            .content{
                padding: 10px 0;
            }
            }
            @media (max-width:900px) {
            .content .image-box{
                display: none;
            }
            .content form{
                width: 100%;
                margin-left: 30px;
            }
            }

        </style>
        <div class="container">
            <div class="content">
                <div class="image-box">
                    <img src="assets/img/contact.png" alt="">
                </div>
                <form action="#">
                    <div class="topic">Send us a message</div>
                    <div class="input-box">
                        <input type="text" required>
                        <label>Enter your name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="message-box">
                        <textarea id="subject" name="subject" placeholder="your message..." style="height: 85px"></textarea>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
            const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
