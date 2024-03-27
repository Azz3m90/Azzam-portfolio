<?php
session_start();
$status = '';
if (isset($_POST['captcha']) && ($_POST['captcha'] != "")) {
  // Validation: Checking entered captcha code with the generated captcha code
  if (strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0) {
    // Note: the captcha code is compared case insensitively.
    // if you want case sensitive match, update the check above to strcmp()
    $status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#FF0000;'>Entered captcha code does not match! Kindly try again.</span></p>";
  } else {
    $status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#46ab4a;'>Your captcha code is match.</span></p>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azzam - personal portfolio</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&family=Saira+Stencil+One&display=swap"
        rel="stylesheet">
    <script src="./js/axios.min.js"></script>
</head>

<body id="top" class="dark_theme">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <h1 class="h1 logo">
                <a href="#">Azzam<span>.</span></a>
            </h1>

            <div class="navbar-actions">

                <select name="language" id="lang" hidden>
                    <option value="en">En</option>
                    <option value="ar">Ar</option>
                </select>

                <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn>
                    <span class="icon"></span>
                </button>

            </div>

            <button class="nav-toggle-btn" aria-label="Toggle Menu" title="Toggle Menu" data-nav-toggle-btn>
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
            </button>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link">Home.</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link">About.</a>
                    </li>

                    <li>
                        <a href="#skills" class="navbar-link">Skills.</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="navbar-link">Portfolio.</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link">Contact.</a>
                    </li>

                </ul>
            </nav>

        </div>
    </header>





    <main>
        <article class="container">

            <!-- 
        - #HERO
      -->

            <section class="hero" id="home">

                <figure class="hero-banner">

                    <picture>
                        <source srcset="./images/hero-banner.png" media="(min-width: 768px)">
                        <source srcset="./images/hero-banner-md.png" media="(min-width: 500px)">
                        <img src="./images/hero-banner-sm.png" alt="A man in a blue shirt with a happy expression"
                            class="w-100">
                    </picture>

                </figure>

                <div class="hero-content">

                    <h2 class="h2 hero-title">Senior Full Stack Web Developer</h2>

                    <a href="#contact" class="btn btn-primary">Get in touch</a>

                </div>

                <ul class="hero-social-list">

                    <li>
                        <a href="https://www.facebook.com/azzam.ali.9484" class="hero-social-link">
                            <ion-icon name="logo-facebook"></ion-icon>

                            <div class="tooltip">Facebook</div>
                        </a>
                    </li>

                    <li>
                        <a href="https://wa.me/+963991576641" class="hero-social-link">
                            <ion-icon name="logo-whatsapp"></ion-icon>

                            <div class="tooltip">Whatsapp</div>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.linkedin.com/in/azzam-aziz-ali/" class="hero-social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>

                            <div class="tooltip">Linkedin</div>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.youtube.com/@azzamazizali/playlists" class="hero-social-link">
                            <ion-icon name="logo-Youtube"></ion-icon>

                            <div class="tooltip">Youtube</div>
                        </a>
                    </li>
                </ul>

                <a href="#stats" class="scroll-down">Scroll</a>

            </section>





            <!-- 
        - #STATS
      -->

            <section class="stats" id="stats">
                <ul class="stats-list">

                    <li>
                        <a href="#" class="stats-card">

                            <div class="card-icon">
                                <img src="./images/stats-card_icon-1.png" alt="Badge icon">
                            </div>

                            <h2 class="h2 card-title">
                                12+ <strong>Years of Experience</strong>
                            </h2>

                            <ion-icon name="chevron-forward-outline"></ion-icon>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="stats-card">

                            <div class="card-icon">
                                <img src="./images/stats-card_icon-2.png" alt="Checkmark icon">
                            </div>

                            <h2 class="h2 card-title">
                                230+ <strong>Completed Projects</strong>
                            </h2>

                            <ion-icon name="chevron-forward-outline"></ion-icon>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="stats-card">

                            <div class="card-icon">
                                <img src="./images/stats-card_icon-3.png" alt="Peoples rating icon">
                            </div>

                            <h2 class="h2 card-title">
                                95+ <strong>Happy Clients</strong>
                            </h2>

                            <ion-icon name="chevron-forward-outline"></ion-icon>

                        </a>
                    </li>

                </ul>
            </section>





            <!-- 
        - #ABOUT
      -->

            <section class="about" id="about">

                <figure class="about-banner">
                    <img src="./images/about-banner.png" alt="A man in a alice blue shirt with a thinking expression"
                        class="w-100">
                </figure>

                <div class="about-content section-content">

                    <p class="section-subtitle">About me</p>

                    <h2 class="h3 section-title">Need a Creative Product? I can Help You!</h2>

                    <p class="section-text" style="text-align: justify;">
                        Hi! I’m Azzam Reacher, and I’m a developer who has passion for building clean web applications
                        with intuitive
                        functionalities. I enjoy the process of turning ideas into reality using creative solutions. I’m
                        always
                        curious about
                        learning new skills, tools, and concepts. In addition to working on various solo full stack
                        projects, I have
                        worked with
                        creative teams, which involves daily stand-ups and communications, source control, and project
                        management.
                    </p>

                    <div class="btn-group">
                        <div class="btn-group">
                            <button class="btn btn-secondary"
                                onclick="window.location.href='./cv/Azzam\'s Experience CERTIFICATE in Hexabitz Full-Stack Web Developer.pdf'">
                                Experience Certificate</button>
                            <button class="btn btn-secondary"
                                onclick="window.location.href='./cv/Azzam\'s Resume.pdf'">Azzam's Resume</button>
                            <button class="btn btn-primary"
                                onclick="window.location.href='./cv/Caresine SEO Specialist Caresine company - Azzam.pdf'">SEO
                                Certificate</button>
                        </div>

                    </div>

                </div>

            </section>





            <!-- 
        - #SKILLS
      -->

            <section class="skills" id="skills">

                <div class="skills-content section-content">

                    <p class="section-subtitle">My skills</p>

                    <h2 class="h3 section-title">What My Programming Skills Included?</h2>

                    <p class="section-text" style="text-align: justify;">
                        I develop simple, intuitive and responsive user interface that helps users get things done with
                        less effort
                        and time
                        with those technologies.
                    </p>

                    <div class="skills-toggle" data-toggle-box>
                        <button class="toggle-btn active" data-toggle-btn>Skills</button>

                        <button class="toggle-btn" data-toggle-btn>Tools</button>
                    </div>

                </div>

                <div class="skills-box" data-skills-box>

                    <ul class="skills-list">

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">HTML5</div>

                                <div class="card-icon">
                                    <img src="./images/html5.png" alt="HTML5 logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">CSS3</div>

                                <div class="card-icon">
                                    <img src="./images/css3.png" alt="CSS3 logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">JavaScript</div>

                                <div class="card-icon">
                                    <img src="./images/javascript.png" alt="JavaScript logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">TypeScript</div>

                                <div class="card-icon">
                                    <img src="./images/typescript.png" alt="TypeScript logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">jQuery</div>

                                <div class="card-icon">
                                    <img src="./images/jquery.png" alt="jQuery logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Bootstrap</div>

                                <div class="card-icon">
                                    <img src="./images/bootstrap.png" alt="Bootstrap logo">
                                </div>
                            </div>
                        </li>
                        <li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">React</div>

                                <div class="card-icon">
                                    <img src="./images/react.png" alt="React logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Vue</div>

                                <div class="card-icon">
                                    <img src="./images/vue.png" alt="Vue logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Firebase</div>

                                <div class="card-icon">
                                    <img src="./images/firebase.png" alt="Firebase logo">
                                </div>
                            </div>
                        </li>

                        <li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">SASS</div>

                                <div class="card-icon">
                                    <img src="./images/sass.png" alt="SASS logo">
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="tools-list">

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Ajax</div>

                                <div class="card-icon">
                                    <img src="./images/ajax.png" alt="Ajax logo">
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Webpack</div>

                                <div class="card-icon">
                                    <img src="./images/webpack.png" alt="Webpack logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Git</div>

                                <div class="card-icon">
                                    <img src="./images/git.png" alt="Git logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Npm</div>

                                <div class="card-icon">
                                    <img src="./images/npm.png" alt="Npm logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Command Line</div>

                                <div class="card-icon">
                                    <img src="./images/command.png" alt="Command Line logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">VS Code</div>

                                <div class="card-icon">
                                    <img src="./images/vs-code.png" alt="VS Code logo">
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="skill-card">
                                <div class="tooltip">ClickUp</div>

                                <div class="card-icon">
                                    <img src="./images/clickup.png" alt="ClickUp logo">
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="skill-card">
                                <div class="tooltip">Slack</div>

                                <div class="card-icon">
                                    <img src="./images/slack.png" alt="Slack logo">
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

            </section>





            <!-- 
        - #PROJECTS
      -->

            <section class="project" id="portfolio">

                <ul class="project-list">

                    <li>
                        <div class="project-content section-content">

                            <p class="section-subtitle">My Works</p>

                            <h2 class="h3 section-title">See My Works Which Will Amaze You!</h2>

                            <p class="section-text">
                                We develop the best quality website that serves for the long-term. Well-documented,
                                clean, easy and
                                elegant interface
                                helps any non-technical clients.
                            </p>

                        </div>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-1.png" class="w-100"
                                    alt="A macintosh on a yellow background.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 01</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-2.png" class="w-100"
                                    alt="On a Blue background, a Wacom and a mouse.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 02</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-3.png" class="w-100"
                                    alt="A Cassette tape on a mellow apricot background.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 03</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-4.png" class="w-100"
                                    alt="Blue digital watch on a dark liver background.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 04</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-5.png" class="w-100"
                                    alt="On a dark liver background, Airport luggage car carrying a luggage.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 05</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-6.png" class="w-100"
                                    alt="On a yellow background, a digital watch and a glass.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 06</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="project-card">

                            <figure class="card-banner">
                                <img src="./images/project-7.png" class="w-100"
                                    alt="A fujifilm instant camera on a dark electric blue background.">
                            </figure>

                            <div class="card-content">
                                <h3 class="h4 card-title">Lorem Ipsum Dolor 07</h3>

                                <time class="publish-date" datetime="2022-04">April 2022</time>
                            </div>

                        </a>
                    </li>

                    <li>
                        <button class="load-more">Load more work</button>
                    </li>

                </ul>

            </section>





            <!-- 
        - #CONTACT
      -->

            <section class="contact" id="contact">

                <div class="contact-content section-content">

                    <p class="section-subtitle">Contact</p>

                    <h2 class="h3 section-title">Have You Any Project? Please Drop a Message</h2>

                    <p class="section-text">
                        Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as
                        possible.
                    </p>

                    <ul class="contact-list">

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="location-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Address:</h3>

                                <address class="contact-info">
                                    VVJQ+C38, Al-Thawra Ave, Tartus, Syria
                                </address>
                            </div>

                        </li>

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Phone:</h3>

                                <a href="tel:+963991576641" class="contact-info">+(963)-991576641</a>


                            </div>

                        </li>

                        <li class="contact-list-item">

                            <div class="contact-item-icon">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <div class="wrapper">
                                <h3 class="h4 contact-item-title">Email:</h3>

                                <a href="mailto:Azzamazezali@gmail.com" class="contact-info">Azzamazezali@gmail.com</a>

                                <a href="mailto:Azzamazezali@hotmail.com"
                                    class="contact-info">Azzamazezali@hotmail.com</a>
                            </div>

                        </li>

                        <li>
                            <ul class="contac-social-list">

                                <li>
                                    <a href="https://www.facebook.com/azzam.ali.9484" class="contact-social-link">
                                        <div class="tooltip">Facebook</div>

                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://wa.me/+963991576641" class="contact-social-link">
                                        <div class="tooltip">Whatsapp</div>

                                        <ion-icon name="logo-whatsapp"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/azzam-aziz-ali/" class="contact-social-link">
                                        <div class="tooltip">Linkedin</div>

                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/@azzamazizali/playlists"
                                        class="contact-social-link">
                                        <div class="tooltip">Youtube</div>

                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </div>

                <form id="booking-form" method="post" class="contact-form">

                    <div class="form-wrapper">

                        <label for="name" class="form-label">Name</label>

                        <div class="input-wrapper">

                            <input type="text" name="name" id="name" required placeholder="e.g John Doe"
                                class="input-field">

                            <ion-icon name="person-circle"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="email" class="form-label">Email</label>

                        <div class="input-wrapper">

                            <input type="email" name="email" id="email" required placeholder="e.g johndoe@mail.com"
                                class="input-field">

                            <ion-icon name="mail"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="phone" class="form-label">Phone</label>

                        <div class="input-wrapper">

                            <input type="tel" name="phone" id="phone" required placeholder="Phone Number"
                                class="input-field">

                            <ion-icon name="call"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">

                        <label for="message" class="form-label">Message</label>

                        <div class="input-wrapper">

                            <textarea name="message" id="message" required placeholder="Write message..."
                                class="input-field"></textarea>

                            <ion-icon name="chatbubbles"></ion-icon>

                        </div>

                    </div>

                    <div class="form-wrapper">
                        <div class="form-group">
                            <!-- HTML -->
                            <label class="form-label"><strong>Enter the Captcha code:</strong></label><br />
                            <input type="text" id="captcha" class="input-field" name="captcha"
                                placeholder="Enter the Captcha code" required>
                            <p><br /><img src="./php/captcha.php?rand=<?php echo rand(); ?>" id="captcha_image">
                            </p>
                            <label class="form-label">Can't read the image? <a href="#"
                                    onclick="refreshCaptcha(event);">Click
                                    here</a> to refresh</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit">Send</button>

                </form>
                <style>
                .btn-success {
                    background-color: #28a745;
                    /* Green color for success */
                    border-color: #28a745;
                }

                .btn-danger {
                    background-color: #dc3545;
                    /* Red color for error */
                    border-color: #dc3545;
                }

                /* Modern modal styles */
                #confirmationModal {
                    display: none;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                }

                #confirmationModal p {
                    margin-bottom: 20px;
                }

                #confirmationModal button {
                    padding: 10px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                .invalid-input {
                    border: 1px solid red;
                    /* Change border color to red */
                }
                </style>
                <!-- Simple confirmation modal -->
                <!-- Simple confirmation modal -->
                <div id="confirmationModal">
                    <div>
                        <p id="modalMessage"></p>
                        <button onclick="closeModal()">OK</button>
                    </div>
                </div>


                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const form = document.getElementById("booking-form");
                    const submitButton = form.querySelector(".btn-submit");
                    const captchaInput = form.querySelector('input[name="captcha"]');
                    const captchaImage = document.getElementById('captcha_image');
                    const confirmationModal = document.getElementById('confirmationModal');
                    const modalMessage = document.getElementById('modalMessage');

                    form.addEventListener("submit", function(event) {
                        event.preventDefault();
                        submitForm();
                    });

                    captchaImage.addEventListener("click", function() {
                        refreshCaptcha();
                    });

                    function getCaptcha() {
                        axios.get('./php/get-captcha.php')
                            .then(function(response) {
                                console.log('Captcha:', response.data.captcha);
                            })
                            .catch(function(error) {
                                console.error('Error fetching captcha:', error);
                            });
                    }

                    // Call this function whenever you want to get the value of captcha
                    getCaptcha();

                    function submitForm() {
                        const captcha = captchaInput.value;
                        const formData = new FormData(form);
                        formData.append('captcha', captcha);

                        // Validate email
                        const emailInput = form.querySelector('input[name="email"]');
                        const email = emailInput.value;
                        if (!validateEmail(email)) {
                            openModal('Please enter a valid email address.');
                            emailInput.style.border = "1px solid red";
                            return false;
                        }

                        // Validate each required input field
                        const inputs = form.querySelectorAll("[required]");
                        let isValid = true;
                        inputs.forEach(function(input) {
                            if (input.value.trim() === "") {
                                isValid = false;
                                // Add red border to empty required fields
                                input.style.border = "1px solid red";
                            } else {
                                // Reset border to default style
                                input.style.border = "";
                            }
                        });

                        if (!isValid) {
                            // If any required field is empty, show an error message and prevent form submission
                            openModal("Please fill in all required fields.");
                            return false;
                        }

                        axios.post('./php/validate-captcha.php', formData)
                            .then(response => {
                                if (response.data.valid) {
                                    // Use AJAX to submit form data
                                    submitButton.innerHTML =
                                        '<span class="description">Submitting...</span>';
                                    axios.post('./php/send_mail.php', formData)
                                        .then(response => {
                                            console.log('Form submission response:', response.data);
                                            if (response.data === 'success') {
                                                submitButton.innerHTML =
                                                    '<span class="description">Submition successful!</span>';
                                                submitButton.classList.remove('btn-secondary');
                                                submitButton.classList.remove('btn-submit');
                                                submitButton.classList.add('btn-success');
                                                submitButton.setAttribute('disabled', 'disabled');
                                            } else {
                                                openModal(
                                                    'There was an error submitting the form. Please try again.'
                                                );
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error submitting form:', error);
                                            openModal(
                                                'There was an error submitting the form. Please try again.'
                                            );
                                        });
                                } else {
                                    openModal('The entered CAPTCHA code does not match. Please try again.');
                                    refreshCaptcha();
                                }
                            })
                            .catch(error => {
                                console.error('Error validating CAPTCHA:', error);
                            });
                    }
                });

                function refreshCaptcha(event) {
                    if (event) {
                        event.preventDefault();
                    }

                    var img = document.getElementById('captcha_image');

                    axios.get('./php/captcha.php', {
                            params: {
                                rand: Math.random() * 1000
                            },
                            responseType: 'arraybuffer'
                        })
                        .then(function(response) {
                            var blob = new Blob([response.data], {
                                type: 'image/jpeg'
                            });
                            var imgUrl = URL.createObjectURL(blob);
                            img.src = imgUrl;
                            getCaptcha();
                        })
                        .catch(function(error) {
                            console.error('Error refreshing CAPTCHA:', error);
                        });
                }

                function openModal(message) {
                    modalMessage.innerText = message;
                    confirmationModal.style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('confirmationModal').style.display = 'none';
                }

                function validateEmail(email) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return emailRegex.test(email);
                }
                </script>


            </section>
            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.0121196661667!2d35.88511907504313!3d34.88104197285618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15217f4bc0a508e5%3A0xcf7dd72462e3d9d1!2z2YXZg9iq2KjYqSDZiNmF2LfYqNi52Kkg2KfZhNi52LLZitiy!5e0!3m2!1sen!2snl!4v1711489276123!5m2!1sen!2snl"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="h1 logo">
                <a href="#">
                    Azzam<span>.</span>
                </a>
            </p>

            <p class="copyright">
                &copy; 2022 <a href="#">Eng.Azzam Aziz Ali</a>. All rights reserved
            </p>

        </div>
    </footer>





    <!-- 
    - #GO TO TOP
  -->

    <a href="#top" class="go-top" data-go-top title="Go to Top">
        <ion-icon name="arrow-up"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>