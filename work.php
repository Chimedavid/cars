
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELLIS CARS</title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <link rel="stylesheet" href="assets/css/work.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body onload="yes()">
 <div class="banner">
  <div class="yes">
    <img src="assets/images/pexels-mike-b-120049.jpg" alt=""  class="backimages">
 </div>
 <div class="overlay">
 <?php require_once "assets/modules/nav.php"; ?>
    <div class="trap d-flex gap-3 pt-5 justify-content-center">
        <div class="card shadow" style="max-width: 17rem;">
        <img src="assets/images/card2.jpg" alt="" class="card-img-top">
        <h5 class="card-title">MERCEDES BENZ</h5>
        <P class="card-text">ABOUT MERCEDES BENZ AND THE DIFFERENT YEARS AND MODELS SINCE THE BEGINING OF TIME </P>
        <button class="btn btn-success pt-2 this" type="button">CLICK HERE</button>
        </div>
        <div class="card shadow" style="max-width: 17rem;">
            <img src="assets/images/lark.jpg" alt="" class="card-img-top">
            <h5 class="card-title">LEXUS</h5>
            <P class="card-text">ABOUT LEXUX AS A BRANCH OF THE TOYATO COMPANY AND THE DIFFERENT MODELS AND YEARS WHICH THEY WERE MADE </P>
            <button class="btn btn-success" type="button">CLICK HERE</button>
            </div>
            <div class="card shadow" style="max-width: 17rem;">
                <img src="assets/images/camry.jpg" alt="" class="card-img-top">
                <h5 class="card-title">TOYOTA</h5>
                <P class="card-text">ABOUT TOYOTA AND THE DIFFERENT MODELS AND TEARS WHEN THEY WERE PRODUCED </P>
                <button class="btn btn-success that" type="button">CLICK HERE</button>
                </div>
    </div>
 </div>
</div>
   <?php require_once "assets/modules/mobile.php"?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/work.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
    // Optional parameters
    effect: "cube",
        grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
    </script>
    
</body>
</html>