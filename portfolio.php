<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunty Sharma | Frontend Developer & Graphics Designer</title>
   
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
          <style>
            /* ===============================
   GLOBAL
================================ */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}
:root {
    --bg: #05070d;
    --card: #0b0e17;
    --card2: #101421;
    --text: #ffffff;
    --muted: #a4a8b3;
    --purple: #7c3cff;
    --pink: #e83eac;
    --blue: #367cff;
    --border: rgba(255,255,255,0.09);
}
body {
    font-family: "Poppins", sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
}
a {
    color: inherit;
    text-decoration: none;
}
img {
    max-width: 100%;
    display: block;

}
button,
input,
textarea {
    font-family: inherit;
}
/* ===============================
   NAVBAR
================================ */
.navbar {
    width: 100%;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 7%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    background: rgba(5,7,13,0.75);
    backdrop-filter: blur(15px);
    border-bottom: 1px solid var(--border);
}
.logo {
    font-size: 28px;
    font-weight: 700;
    font-style: italic;
}
.logo span,
.footer-logo span {
    color: var(--pink);
}
.navbar nav {
    display: flex;
    gap: 35px;
}
.navbar nav a {
    font-size: 14px;
    color: #c6c8d0;
    transition: 0.3s;
    position: relative;
}
.navbar nav a:hover,
.navbar nav a.active {
    color: white;
}
.navbar nav a.active::after {

    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 100%;
    height: 2px;
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--pink)
    );
}
.talk-btn {
    padding: 10px 22px;
    border-radius: 8px;
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--pink)
    );
    font-size: 13px;
    font-weight: 600;
    transition: 0.3s;
}
.talk-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(124,60,255,0.3);
}
.menu-btn {
    display: none;
    border: none;
    background: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}
/* ===============================
   COMMON
================================ */
.section {
    width: 86%;
    max-width: 1400px;
    margin: auto;
}
.hero,
.about,

.skills,
.services,
.works,
.contact {
    padding-top: 120px;
}
.section-label {
    color: #a968ff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 12px;
}
.section-heading {
    margin-bottom: 45px;
}
.section-heading h2 {
    font-size: 38px;
}
.section-heading h2 span,
.about-content h2 span,
.contact h2 span {
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--pink)
    );
    -webkit-background-clip: text;
    color: transparent;
}
/* ===============================
   HERO
================================ */
.hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 70px;
    padding-top: 150px;
    position: relative;
}
.hero::before {
    content: "";
    position: absolute;
    width: 500px;

    height: 500px;
    background: #5726ff;
    filter: blur(180px);
    opacity: 0.12;
    top: 20%;
    right: 10%;
    pointer-events: none;
}
.hero-content {
    max-width: 650px;
}
.small-title {
    font-size: 20px;
    color: #d2d3d9;
    margin-bottom: 5px;
}
.hero h1 {
    font-size: clamp(55px, 7vw, 95px);
    line-height: 1.05;
    font-weight: 800;
    margin-bottom: 20px;
    background: linear-gradient(
        90deg,
        #3d8cff,
        #b93dff,
        #f13da9
    );
    -webkit-background-clip: text;
    color: transparent;
}
.hero h2 {
    font-size: 32px;
    line-height: 1.3;
    margin-bottom: 25px;
}
.hero h2 span {
    color: #a86cff;
}
.hero-text {
    color: var(--muted);
    max-width: 580px;
    margin-bottom: 35px;
}
.hero-buttons {
    display: flex;

    gap: 15px;
    flex-wrap: wrap;
}
.primary-btn,
.secondary-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 25px;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
}
.primary-btn {
    border: none;
    color: white;
    background: linear-gradient(
        90deg,
        var(--blue),
        var(--pink)
    );
}
.primary-btn:hover {
    transform: translateY(-3px);
    box-shadow:
        0 10px 35px rgba(113,59,255,0.35);
}
.secondary-btn {
    border: 1px solid #8b3dff;
    background: transparent;
}
.secondary-btn:hover {
    background: rgba(124,60,255,0.1);
}
.social-icons {
    display: flex;
    gap: 20px;
    margin-top: 35px;
}
.social-icons a {
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;

    justify-content: center;
    border: 1px solid var(--border);
    border-radius: 50%;
    transition: 0.3s;
}
.social-icons a:hover {
    color: white;
    border-color: var(--purple);
    background: rgba(124,60,255,0.15);
    transform: translateY(-4px);
}
/* HERO IMAGE */
.hero-image {
    width: 430px;
    height: 430px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}
.glow-circle {
    position: absolute;
    width: 390px;
    height: 390px;
    border-radius: 50%;
    background: linear-gradient(
        135deg,
        #334dff,
        #d226c8
    );
    box-shadow:
        0 0 80px rgba(93,48,255,0.4);
    /* animation: float 5s ease-in-out infinite; */
}
.hero-image img {
    width: 390px;
    height: 390px;
    object-fit: cover;
    border-radius: 50%;
    position: relative;
    z-index: 2;

    border: 2px solid #7544ff;
}
.experience-card {
    position: absolute;
    right: -20px;
    bottom: 20px;
    z-index: 5;
    padding: 15px 22px;
    background: rgba(10,12,20,0.85);
    border: 1px solid #9b4cff;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    display: flex;
    flex-direction: column;
}
.experience-card strong {
    font-size: 27px;
    color: white;
}
.experience-card span {
    color: #bbb;
    font-size: 12px;
}
@keyframes float {
    0%,100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
}
/* ===============================
   ABOUT
================================ */
.about {
    display: grid;
    grid-template-columns: 0.8fr 1.2fr;
    align-items: center;
    gap: 80px;
}
.about-image {

    display: flex;
    justify-content: center;
}
.image-frame {
    width: 380px;
    height: 480px;
    border-radius: 12px;
    padding: 3px;
    background: linear-gradient(
        135deg,
        var(--blue),
        var(--pink)
    );
}
.image-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}
.about-content h2 {
    font-size: 42px;
    line-height: 1.25;
    margin-bottom: 25px;
}
.about-content > p {
    color: var(--muted);
    margin-bottom: 15px;
}
.personal-info {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 20px;
    margin-top: 30px;
}
.personal-info > div {
    display: flex;
    align-items: center;
    gap: 15px;
}
.personal-info i {
    color: #a755ff;
}
.personal-info span {

    display: flex;
    flex-direction: column;
    font-size: 13px;
}
.personal-info small {
    color: #777c89;
}
/* ===============================
   SKILLS
================================ */
.skills-grid {
    display: grid;
    grid-template-columns:
        repeat(5,1fr);
    gap: 15px;
}
.skill-card {
    min-height: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    border: 1px solid var(--border);
    background: var(--card);
    border-radius: 10px;
    transition: 0.3s;
}
.skill-card:hover {
    transform: translateY(-6px);
    border-color: #793cff;
    background: #0e1020;
    box-shadow:
        0 10px 30px rgba(81,38,255,0.12);
}
.skill-card i {
    font-size: 32px;
    color: #8b5cff;
}
.skill-card h3 {
    font-size: 13px;
    font-weight: 500;

}
/* ===============================
   SERVICES
================================ */
.services-grid {
    display: grid;
    grid-template-columns:
        repeat(4,1fr);
    gap: 20px;
}
.service-card {
    padding: 30px;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 12px;
    transition: 0.3s;
}
.service-card:hover {
    transform: translateY(-8px);
    border-color: #793cff;
    box-shadow:
        0 15px 40px rgba(73,39,255,0.12);
}
.service-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: rgba(124,60,255,0.1);
    color: #a359ff;
    font-size: 20px;
    margin-bottom: 20px;
}
.service-card h3 {
    margin-bottom: 12px;
}
.service-card p {
    color: var(--muted);

    font-size: 13px;
    margin-bottom: 20px;
}
.service-card a {
    color: #9b5cff;
    font-size: 12px;
}
/* ===============================
   WORKS
================================ */
.works-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 30px;
}
.filters {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}
.filter {
    border: 1px solid var(--border);
    background: var(--card);
    color: #aaa;
    padding: 8px 15px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 11px;
    transition: 0.3s;
}
.filter:hover,
.filter.active {
    color: white;
    border-color: #743cff;
    background: linear-gradient(
        90deg,
        #6337dd,
        #b52c9f
    );

}
.projects-grid {
    display: grid;
    grid-template-columns:
        repeat(3,1fr);
    gap: 25px;
}
.project-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    transition: 0.3s;
}
.project-card:hover {
    transform: translateY(-6px);
    border-color: #753dff;
}
.project-image {
    height: 220px;
    position: relative;
    overflow: hidden;
}
.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
}
.project-card:hover .project-image img {
    transform: scale(1.08);
}
.project-overlay {
    position: absolute;
    inset: 0;
    background: rgba(65,31,145,0.65);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;

    transition: 0.3s;
}
.project-card:hover .project-overlay {
    opacity: 1;
}
.project-link {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: white;
    color: #5d36d9;
    display: flex;
    align-items: center;
    justify-content: center;
}
.project-info {
    padding: 18px;
}
.project-info h3 {
    font-size: 16px;
    margin-bottom: 5px;
}
.project-info p {
    color: #9b5cff;
    font-size: 12px;
}
/* ===============================
   CONTACT
================================ */
.contact {
    display: grid;
    grid-template-columns:
        0.9fr 1.1fr;
    gap: 70px;
    padding-bottom: 120px;
}
.contact h2 {
    font-size: 45px;
    line-height: 1.2;
    margin-bottom: 20px;
}
.contact-info > p:not(.section-label) {
    color: var(--muted);
    margin-bottom: 30px;

}
.contact-details {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.contact-details > div {
    display: flex;
    align-items: center;
    gap: 15px;
}
.contact-details i {
    color: #9c55ff;
    width: 35px;
}
.contact-details small {
    color: #777;
}
.contact-details p {
    font-size: 13px;
}
.contact-social {
    display: flex;
    gap: 12px;
    margin-top: 30px;
}
.contact-social a {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--border);
    border-radius: 50%;
}
.contact-social a:hover {
    background: #793cff;
}
/* FORM */
.contact-form {
    padding: 30px;
    background: var(--card);

    border: 1px solid var(--border);
    border-radius: 12px;
}
.input-row {
    display: grid;
    grid-template-columns:
        repeat(2,1fr);
    gap: 15px;
}
.contact-form input,
.contact-form textarea {
    width: 100%;
    border: 1px solid var(--border);
    background: #080b13;
    color: white;
    padding: 14px 15px;
    border-radius: 7px;
    outline: none;
    margin-bottom: 15px;
}
.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #7841ff;
}
.contact-form textarea {
    resize: vertical;
}
.contact-form .primary-btn {
    width: 100%;
}
#formMessage {
    margin-top: 15px;
    text-align: center;
    color: #b76aff;
    font-size: 13px;
}
/* ===============================
   FOOTER
================================ */
footer {
    border-top: 1px solid var(--border);
    min-height: 90px;
    padding: 25px 7%;

    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #777;
    font-size: 12px;
}
.footer-logo {
    color: white;
    font-size: 22px;
    font-weight: 700;
    font-style: italic;
}
footer a:hover {
    color: white;
}
/* ===============================
   RESPONSIVE
================================ */
@media (max-width: 1100px) {
    .hero {
        gap: 30px;
    }
    .hero-image {
        width: 350px;
        height: 350px;
    }
    .glow-circle,
    .hero-image img {
        width: 320px;
        height: 320px;
    }
    .skills-grid {
        grid-template-columns:
            repeat(4,1fr);
    }
    .services-grid {
        grid-template-columns:
            repeat(2,1fr);
    }
}
@media (max-width: 850px) {
    .navbar nav {
        position: absolute;

        top: 80px;
        left: 0;
        width: 100%;
        padding: 25px;
        display: none;
        flex-direction: column;
        gap: 20px;
        background: #080a11;
        border-bottom: 1px solid var(--border);
    }
    .navbar nav.show {
        display: flex;
    }
    .talk-btn {
        display: none;
    }
    .menu-btn {
        display: block;
    }
    .hero {
        flex-direction: column;
        text-align: center;
        padding-top: 130px;
    }
    .hero-buttons,
    .social-icons {
        justify-content: center;
    }
    .hero-image {
        margin-top: 30px;
    }
    .about {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .personal-info {
        text-align: left;
    }
    .works-heading {
        align-items: flex-start;
        flex-direction: column;
    }
    .contact {

        grid-template-columns: 1fr;
    }
}
@media (max-width: 600px) {
    .section {
        width: 90%;
    }
    .hero h1 {
        font-size: 52px;
    }
    .hero h2 {
        font-size: 24px;
    }
    .hero-image {
        width: 300px;
        height: 300px;
    }
    .glow-circle,
    .hero-image img {
        width: 280px;
        height: 280px;
    }
    .experience-card {
        right: -5px;
    }
    .about-content h2,
    .contact h2 {
        font-size: 32px;
    }
    .image-frame {
        width: 300px;
        height: 380px;
    }
    .skills-grid {
        grid-template-columns:
            repeat(2,1fr);
    }
    .services-grid {
        grid-template-columns: 1fr;
    }
    .projects-grid {
        grid-template-columns: 1fr;
    }
    .input-row {
        grid-template-columns: 1fr;
    }
    footer {

        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}
          </style>
</head>
<body>
<!-- ================= NAVBAR ================= -->
<header class="navbar">
    <a href="#home" class="logo">
        Bunty<span>.</span>
    </a>
    <nav id="navMenu">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#works">Works</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <a href="#contact" class="talk-btn">
        Let's Talk
    </a>
    <button class="menu-btn" id="menuBtn">
        <i class="fas fa-bars"></i>
    </button>
</header>
<!-- ================= HERO ================= -->
<section class="hero section" id="home">
    <div class="hero-content">
        <p class="small-title">Hello, I'm</p>
        <h1>
            Bunty <span>Sharma</span>
        </h1>
        <h2>
            Frontend Developer &<br>
            <span>Graphics Designer</span>
        </h2>
        <p class="hero-text">
            I create beautiful, responsive websites and
            eye-catching designs that help brands stand out.
        </p>
        <div class="hero-buttons">
            <a href="#works" class="primary-btn">

                View My Work
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#contact" class="secondary-btn">
                Contact Me
                <i class="far fa-envelope"></i>
            </a>
        </div>
        <div class="social-icons">
            <a href="#" aria-label="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" aria-label="Behance">
                <i class="fab fa-behance"></i>
            </a>
        </div>
    </div>
    <div class="hero-image">
        <div class="glow-circle"></div>
        <!-- Replace this image with your own photo -->
        <img src="images/profile.png"
             alt="#">
        <!-- <div class="experience-card">
            <strong>2+</strong>
            <span>Years of<br>Experience</span>
        </div> -->
    </div>
</section>
<!-- ================= ABOUT ================= -->
<section class="about section" id="about">
    <div class="about-image">
        <div class="image-frame">
            <img src="images/profile.png"
                 alt="#">
        </div>
    </div>

    <div class="about-content">
        <p class="section-label">ABOUT ME</p>
        <h2>
            I design and code solutions
            that make an <span>impact.</span>
        </h2>
        <p>
            I'm a passionate Frontend Developer and Graphics Designer
            who loves turning ideas into real digital products.
        </p>
        <p>
            I enjoy creating clean code, stunning visuals and
            seamless user experiences.
        </p>
        <div class="personal-info">
            <div>
                <i class="fas fa-user"></i>
                <span>
                    <small>Name</small>
                    Bunty Sharma
                </span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <small>Email</small>
                    buntysharma61996@gmail.com
                </span>
            </div>
            <div>
                <i class="fas fa-location-dot"></i>
                <span>
                    <small>Location</small>
                    India
                </span>
            </div>
            <div>
                <i class="fas fa-code"></i>
                <span>
                    <small>Specialization</small>
                    Web & Graphic Design
                </span>
            </div>
        </div>
    </div>
</section>
<!-- ================= SKILLS ================= -->
<section class="skills section">

    <div class="section-heading">
        <p class="section-label">MY SKILLS</p>
        <h2>Tools & <span>Technologies</span></h2>
    </div>
    <div class="skills-grid">
        <div class="skill-card">
            <i class="fab fa-html5"></i>
            <h3>HTML</h3>
        </div>
        <div class="skill-card">
            <i class="fab fa-css3-alt"></i>
            <h3>CSS</h3>
        </div>
        <div class="skill-card">
            <i class="fab fa-js"></i>
            <h3>JavaScript</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-image"></i>
            <h3>Photoshop</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-pen-nib"></i>
            <h3>Illustrator</h3>
        </div>
        <div class="skill-card">
            <i class="fab fa-figma"></i>
            <h3>Figma</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-laptop-code"></i>
            <h3>UI/UX Design</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-file-word"></i>
            <h3>MS Word</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-file-excel"></i>
            <h3>MS Excel</h3>
        </div>
        <div class="skill-card">
            <i class="fas fa-comments"></i>
            <h3>Communication</h3>
        </div>
    </div>
</section>
<!-- ================= SERVICES ================= -->
<section class="services section" id="services">

    <div class="section-heading">
        <p class="section-label">WHAT I DO</p>
        <h2>
            How I Can <span>Help</span>
        </h2>
    </div>
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-code"></i>
            </div>
            <h3>Frontend Development</h3>
            <p>
                Building responsive and modern websites
                using HTML, CSS and JavaScript.
            </p>
            <a href="#contact">
                Learn More →
            </a>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-palette"></i>
            </div>
            <h3>Graphics Design</h3>
            <p>
                Creating impactful designs for social media,
                branding, posters and digital platforms.
            </p>
            <a href="#contact">
                Learn More →
            </a>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-pen-ruler"></i>
            </div>
            <h3>UI/UX Design</h3>
            <p>
                Designing intuitive and engaging interfaces

                for digital products.
            </p>
            <a href="#contact">
                Learn More →
            </a>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-lightbulb"></i>
            </div>
            <h3>Branding</h3>
            <p>
                Creating strong visual identities with logos,
                colors and design systems.
            </p>
            <a href="#contact">
                Learn More →
            </a>
        </div>
    </div>
</section>
<!-- ================= WORKS ================= -->
<section class="works section" id="works">
    <div class="section-heading works-heading">
        <div>
            <p class="section-label">MY WORKS</p>
            <h2>
                Featured <span>Projects</span>
            </h2>
        </div>
        <div class="filters">
            <button class="filter active" data-filter="all">
                All
            </button>
            <button class="filter" data-filter="web">
                Web Development
            </button>
            <button class="filter" data-filter="design">
                Graphics Design
            </button>
            <button class="filter" data-filter="ui">

                UI/UX
            </button>
        </div>
    </div>
    <div class="projects-grid">
        <!-- PROJECT 1 -->
        <div class="project-card" data-category="ui">
            <div class="project-image">
                <img src="images/project1.jpg"
                     alt="VashtuTube">
                <div class="project-overlay">
                    <a href="#" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>VashtuTube Clone</h3>
                <p>UI/UX Design</p>
            </div>
        </div>
        <!-- PROJECT 2 -->
        <div class="project-card" data-category="web">
            <div class="project-image">
                <img src="images/project2.jpg"
                     alt="E-commerce.php">
                <div class="project-overlay">
                    <a href="E-commerce.php" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>E-Commerce Website</h3>

                <p>Web Development</p>
            </div>
        </div>
        <!-- PROJECT 3 -->
        <div class="project-card" data-category="design">
            <div class="project-image">
                <img src="boat headphone.jpeg"
                     alt="Boat Headphone Poster">
                <div class="project-overlay">
                    <a href="boat headphone.jpeg" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>Boat Headphone Poster</h3>
                <p>Graphics Design</p>
            </div>
        </div>
        <!-- PROJECT 4 -->
        <div class="project-card" data-category="web">
            <div class="project-image">
                <img src="images/project4.jpg"
                     alt="Travel Website">
                <div class="project-overlay">
                    <a href="landing_page.php" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>Travel Landing Page</h3>
                <p>Web Development</p>
            </div>

        </div>
        <!-- PROJECT 5 -->
        <div class="project-card" data-category="design">
            <div class="project-image">
                <img src="images/project5.jpg"
                     alt="Fashion Banner">
                <div class="project-overlay">
                    <a href="#" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>Fashion Sale Banner</h3>
                <p>Graphics Design</p>
            </div>
        </div>
        <!-- PROJECT 6 -->
        <div class="project-card" data-category="ui">
            <div class="project-image">
                <img src="images/project6.jpg"
                     alt="Dashboard UI">
                <div class="project-overlay">
                    <a href="#" class="project-link">
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>
            <div class="project-info">
                <h3>Dashboard UI</h3>
                <p>UI/UX Design</p>
            </div>
        </div>
    </div>

</section>
<!-- ================= CONTACT ================= -->
<section class="contact section" id="contact">
    <div class="contact-info">
        <p class="section-label">CONTACT ME</p>
        <h2>
            Let's work <span>together!</span>
        </h2>
        <p>
            Have a project in mind or want to say hello?
            Feel free to reach out.
        </p>
        <div class="contact-details">
            <div>
                <i class="fas fa-envelope"></i>
                <div>
                    <small>Email</small>
                    <p>buntysharma61996@gmail.com</p>
                </div>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <div>
                    <small>Phone</small>
                    <p>+91 8178554591</p>
                </div>
            </div>
            <div>
                <i class="fas fa-location-dot"></i>
                <div>
                    <small>Location</small>
                    <p>India</p>
                </div>
            </div>
        </div>
        <div class="contact-social">
            <a href="#">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <a href="#">
                <i class="fab fa-github"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fab fa-behance"></i>
            </a>
        </div>
    </div>
    <!-- CONTACT FORM -->
    <form class="contact-form" id="contactForm">
        <div class="input-row">
            <input type="text"
                   id="name"
                   placeholder="Your Name"
                   required>
            <input type="email"
                   id="email"
                   placeholder="Your Email"
                   required>
        </div>
        <input type="text"
               id="subject"
               placeholder="Subject"
               required>
        <textarea id="message"
                  placeholder="Your Message"
                  rows="7"
                  required></textarea>
        <button type="submit" class="primary-btn">
            Send Message
            <i class="fas fa-paper-plane"></i>
        </button>
        <p id="formMessage"></p>
    </form>
</section>
<!-- ================= FOOTER ================= -->
<footer>
    <div class="footer-logo">
        Bunty<span>.</span>

    </div>
    <p>
        © 2026 Bunty Sharma. All Rights Reserved.
    </p>
    <a href="#home">
        Back to Top ↑
    </a>
</footer>
<script src="script.js"></script>
</body>
</html>