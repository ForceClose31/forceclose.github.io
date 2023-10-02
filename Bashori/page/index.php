<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <?php include("../php/head.php")?>
    <title>Portfolio</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- navbar -->
    <?php include("../php/navigasi.php")?>
    <!-- section hero -->
    <section id="home" class="content">
        <main class="main-content">
            <h1>Welcome to My Website</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel perferendis neque sed, tempore eius eos, hic iste accusamus ullam molestiae labore repudiandae, asperiores vitae assumenda animi sapiente dolorem ducimus! Obcaecati enim ratione totam saepe rerum veritatis soluta voluptatem numquam accusantium adipisci sequi eveniet incidunt laboriosam, nobis, accusamus consequuntur aperiam illum culpa ab quis neque mollitia ipsa officiis. Cumque ullam temporibus enim nihil mollitia a cupiditate error obcaecati neque quaerat, necessitatibus pariatur non ad. Molestias quod soluta nihil magni, numquam nam eveniet reiciendis </p>
            <a href="about.php" class="btn">See more</a>
        </main>
    </section>

    <!-- about -->
    <section id="about" class="about">
        <h2>About Me</h2>
        <div class="row">
            <div class="img">
                <img src="../Komponen/Hero.jpeg" alt="about me">
            </div>
            <div class="aboutme">
                <h3>About Me</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta assumenda, eaque tempore quia quisquam asperiores enim? Nemo neque ipsam veniam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus saepe officia quam voluptates culpa id porro necessitatibus autem natus praesentium ducimus ut sequi atque consectetur rem, illum, nesciunt eaque doloribus?
                </p>
                <a href="about.php">See more</a>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <h2>Portfolio</h2>
        <h4>My Certified</h4>
        <div class="row">
            <div class="card-port">
                <img src="../Komponen/cer1.jpg" alt="Certified">
            </div>
            <div class="card-port">
                <img src="../Komponen/cer2.jpg" alt="Certified">
            </div>
            <div class="card-port">
                <img src="../Komponen/cer3.jpg" alt="Certified">
            </div>
            <div class="card-port">
                <img src="../Komponen/cer4.jpg" alt="Certified">
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="contact">
        <h2>My Contact</h2>
        <p class="one">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ullam dicta exercitationem voluptatum cumque. Reiciendis!</p>
        <div class="contact-wrap">
            <div class="contact-info">
                <h1>Contact Info</h1>
                <h2><i id="icon" data-feather="phone"></i>Phone</h2>
                <p>081393418933</p>
                <h2><i id="icon" data-feather="mail"></i>Email</h2>
                <p>forceclose31@gmail.com</p>
                <h2><i id="icon" data-feather="map-pin"></i>Address</h2>
                <p>Jember, Jawa Timur, Indonesia</p>
            </div>
            <div class="contact-info">
                <h1>Send a Message</h1>
                <form action="">
                    <input type="text" placeholder="Full Name" class="contact-input">
                    <input type="text" placeholder="Email" class="contact-input">
                    <input type="text" placeholder="Subject" class="contact-input">
                    <textarea placeholder="Message" class="contact-text-area"></textarea>
                    <input type="submit" value="SUBMIT" class="contact-btn">
                </form>
            </div>
            <div class="contact-info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.6602368748313!2d113.7173965379691!3d-8.172636906497566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695d2ee0a0f6b%3A0x331ca0f89acb7ce2!2sJember%2C%20Tegal%20Boto%20Lor%2C%20Sumbersari%2C%20Jember%20Regency%2C%20East%20Java%2068121!5e0!3m2!1sen!2sid!4v1695402020651!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
                </iframe>
            </div>
        </div>
    </section>
    
    <!-- Meme -->
    <section id="meme" class="meme">
        <h2>Meme Just<span>4</span>Fun</h2>
        <p>Pokok ada isinya dulu hehe :) next dipercantik untuk meme.</p>
        <div class="row-meme">
            <div class="meme">
                <img src="../Komponen/meme1.jpg" alt="" class="meme1">
            </div>
            <div class="meme">
                <img src="../Komponen/meme2.jpg" alt="" class="meme2">
            </div>
            <div class="meme">
                <img src="../Komponen/meme3.jpg" alt="" class="meme3">
            </div>
        </div>
        <a target="_blank" href="https://1cak.com/" class="btn-meme">See more</a>
    </section>

    <!-- footer -->
    <?php include("../php/footer.php")?>
    <!-- script -->
    <?php include("../php/script.php")?>
</body>
</html>