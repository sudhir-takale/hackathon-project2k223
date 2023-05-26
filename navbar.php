<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        display: flex;

        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 20px;
        right: 20px;
        position: sticky;
        top: 0;
        z-index: 10;

    }

    .nav-links {
        display: flex;
        margin-right: 10px;
    }

    .nav-links li {
        list-style: none;
        margin-left: 2px;
        margin-right: 22px;
        font-size: 19px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .nav-links li a {
        color: #fff;
        text-decoration: none;
        margin-right: 20px;
    }

    .nav-links li a:hover {
        color: red;
    }

    .burger {
        display: none;
        cursor: pointer;
    }

    .burger div {
        width: 25px;
        height: 13px;
        background-color: #fff;
        margin: 15px;
    }

    @media screen and (max-width: 768px) {
        body {
            overflow-x: hidden;
        }

        .nav-links {
            position: absolute;
            right: 0px;
            height: 92vh;
            top: 8vh;
            background-color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 25%;
            transform: translateX(100%);
            transition: transform 0.5s ease-in;
        }

        .nav-links li {
            opacity: 0;
        }

        .burger {
            display: block;
        }
    }

    .nav-active {
        transform: translateX(0%);
    }

    @keyframes navLinkFade {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0px);
        }
    }


    .logo a {
        color: rgb(101, 245, 101);
        font-size: 24px;
        font-weight: bolder;
        text-decoration: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>


<nav>
    <div class="logo">
        <a href="index.php">Knowledge Point</a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href=study_material.php">Study Material</a></li>



        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>



        <li><a href="logout.php">Log Out</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>