<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../php/head.php")?>
    <title>Portfolio</title>

    <link rel="stylesheet" href="../css/portfolio.css">
</head>
<body>
    <!-- navbar -->
    <?php include("../php/navigasi.php")?>
    <section class="portfolio">
        <h2>My Portfolio</h2>
        <div class="filter">
            <span class="port-item mixitup-control-active" data-filter=".all">All</span>
            <span class="port-item" data-filter=".certified">Certified</span>
            <span class="port-item work" data-filter=".work">Work</span>
        </div>
        <div class="filter-container container grid">
            <div class="filter-card mix certified all">
                <img src="../Komponen/cer1.jpg" alt="" class="filter-img">
                <h3 class="title">Certified 1</h3>
            </div>
            <div class="filter-card mix certified all">
                <img src="../Komponen/cer2.jpg" alt="" class="filter-img">
                <h3 class="title">Certified 2</h3>
            </div>
            <div class="filter-card mix certified all">
                <img src="../Komponen/cer3.jpg" alt="" class="filter-img">
                <h3 class="title">Certified 3</h3>
            </div>
            <div class="filter-card mix certified all">
                <img src="../Komponen/cer4.jpg" alt="" class="filter-img">
                <h3 class="title">Certified 4</h3>
            </div>
            <div class="filter-card mix work">
                <h1>Coming Soon</h1>
            </div>
        </div>
    </section>
    <?php include("../php/footer.php")?>

    <!-- script -->
    <script src="../js/mixitup.min.js"></script>
    <?php include("../php/script.php")?>
    <script src="../js/pageport.js"></script>
</body>
</html>