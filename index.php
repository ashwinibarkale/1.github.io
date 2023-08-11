<!DOCTYPE html>
<html>
<head>
<title>DYNMAIC WEBISTE</title>
 <!-------------------------------------------- LINKS--------------------------------------------->
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/me.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

 <!-------------------------------------------- NAVBAR--------------------------------------------->


<nav class="navbar navbar-expand-sm navbar-dark bg-blue">
  <div class="container">
  
    <a class="navbar-brand" href="#">
      <img src="img/me.jpg" alt="Logo"><b>Blossom</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#home" onclick="navigateToSection('home')">HOME</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="#about" onclick="navigateToSection('about')">ABOUT</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="#services" onclick="navigateToSection('services')">SERVICES</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="#gallery" onclick="navigateToSection('gallery')">GALLERY</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="#contact" onclick="navigateToSection('contact')">CONTACT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <!-------------------------------------------- HOME SECTION--------------------------------------------->

<section id="home" class="home-section">

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/flower-729512_640.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/Lotus-min.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
    <img src="img/rose-4276903_640.jpg" alt="Chicago" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  
</section>


 <!-------------------------------------------- ABOUT-SECTION--------------------------------------------->
 
 <section id="about" class="about-section">
    <div class="container">
    <h2 class="text-center mb-4">ABOUT</h2>
    <b>At "Blossom," we are more than just florists we are storytellers, weaving narratives
         of beauty and emotion through every petal and stem. Nestled within the heart of nature's 
         embrace, our passion for floral artistry is a testament to the cycles of life, growth, and transformation. 
         With an eye for detail and a heart for creativity, we curate arrangements that go beyond 
        aesthetics, resonating with the moments of joy, resilience, and heartfelt connections that define our lives.</b>
      <div class="row">
        <div class="col-md-6">
          <img src="img/about tulips.jpg" alt="About Image" class="img-fluid">
        </div>
        <div class="col-md-6">
            
         <i>Step into the world of Blossom, where nature's poetry
             unfolds in every petal. Our passion for floral artistry goes beyond visual appeal – it's a symphony of colors, fragrances, and emotions. With meticulous attention to detail, we craft arrangements that tell stories of love, joy, and heartfelt connections. From elegant wedding bouquets to vibrant everyday blooms, our creations 
            are a reflection of life's moments.

At Blossom, we understand that flowers
 speak a language of their own.
 They embody the essence of celebration,
  comfort, and beauty. Whether you're seeking a token
   of appreciation or adorning a special occasion, our arrangements 
   encapsulate the emotions you wish to convey. Step into a realm where each blossom 
   is a brushstroke on the canvas of life, painting memories that linger forever. Welcome 
   to Blossom where the art of nature and the artistry of humans converge to create moments of pure enchantment.</i>
  <i> 
  Embark on a floral journey that weaves beauty into every petal and bloom.
  Experience the artistry of nature through our captivating floral arrangements.
  From vibrant bouquets to elegant centerpieces, our creations breathe life into any occasion.
  Let our flowers be the language of your emotions, conveying sentiments beyond words.
  Immerse yourself in a symphony of colors, fragrances, and exquisite botanical wonders.
  Discover the timeless elegance of floral artistry that resonates with your soul.
  Elevate your space with nature's palette, creating moments of joy and inspiration.
  At Blossom, we curate arrangements that mirror the poetry of life's celebrations and milestones.</i>
  
        </div>
      </div>
    </div>
  </section>
 <!-------------------------------------------- SERVICES-SECTION--------------------------------------------->

  <section id="services" class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">SERVICES</h2>
        <b>Explore a world of floral elegance with our array of exquisite
             services. From crafting stunning wedding arrangements that infuse romance into your 
             special day, to offering expressive sympathy bouquets that convey heartfelt condolences, our services 
             are a testament to the artistry of nature. Elevate your everyday moments with vibrant bouquets, subscribe to bespoke
              floral creations that arrive at your doorstep, and transform events into magical experiences with our botanical event decor. 
              Join our interactive 
            flower workshops to unleash your creative flair, and let each arrangement tell a story 
            of beauty and meaning.</b>
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4">
                <div class="service text-center">
                    <img src="img/21.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Elegant Wedding Floral Arrangements</h3>
                    <p>Immerse yourself in a world of breathtaking beauty as our expert florists craft the perfect
                         floral ambiance for your special day. From exquisite bridal bouquets to enchanting centerpieces,
                          our wedding floral arrangements add a touch of romance and elegance to your celebration.</p>
                </div>
            </div>
            <!-- Repeat the structure for Services 2 to 6 -->
            <div class="col-md-4">
                <div class="service text-center">
                <img src="img/22.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Expressive Sympathy Bouquets</h3>
                    <p>During moments of loss and sympathy, express your heartfelt condolences with our thoughtfully designed sympathy bouquets. Each arrangement captures the essence of compassion and remembrance, offering solace and comfort to those who need it most.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center">
                <img src="img/23.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Vibrant Everyday Bouquets</h3>
                    <p>Elevate your everyday moments with a burst of nature's vibrancy. Our everyday bouquets are a delightful way to brighten your home, workspace, or gift to a loved one. Experience the joy of nature's palette through an ever-changing assortment of blooms.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center">
                <img src="img/24.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Bespoke Floral Subscription</h3>
                    <p>Indulge in the luxury of fresh blooms on a regular basis with our bespoke floral subscription service. Tailored to your preferences, receive curated arrangements at your doorstep, infusing each day with the allure of nature's finest creations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center">
                <img src="img/25.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Botanical Event Decor</h3>
                    <p>Transform your events into magical experiences with our botanical event decor service. From corporate gatherings to private celebrations, our artistic floral installations and centerpieces create an unforgettable atmosphere that captivates and delights.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center">
                <img src="img/26.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h3>Interactive Flower Workshops</h3>
                    <p>Unleash your creativity and learn the art of floral arrangement in our interactive workshops. Discover the secrets of crafting captivating bouquets, wreaths, and more. Whether you're a beginner or a budding florist, our workshops offer a unique and enriching experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-------------------------------------------- GALLERY-SECTION--------------------------------------------->

 <section id="gallery" class="gallery-section">
    <div class="container">
      <h2 class="text-center mb-4">GALLERY</h2>
      <b>Step into our captivating gallery where blooms take center stage. Each image captures 
        the essence of nature's finest, showcasing the interplay of colors, textures, and forms. 
        From the delicate petals of a rose to the vibrant hues of seasonal blossoms, our gallery is a
         visual journey through the wonders of the botanical world. Experience the
         artistry of our floral creations, each a masterpiece that brings joy, inspiration, and a
          touch of nature's charm.</b>
      <div class="row">
        <div class="col-md-4">
          <div class="gallery-item">
            <img src="img/1.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/2.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">  <img src="img/3.jpg" alt="Gallery Image 1" class="img-fluid">
          
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/4.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/5.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/6.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/7.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
              <img src="img/8.jpg" alt="Gallery Image 1" class="img-fluid">
           
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/9.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/10.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/11.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/3.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/13.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/14.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-item">
          <img src="img/15.jpg" alt="Gallery Image 1" class="img-fluid">
            <div class="overlay">
              <div class="text">Image 1</div>
            </div>
          </div>
        </div>
        <!-- Repeat the structure for more gallery items -->
      </div>
    </div>
  </section>

 <!-------------------------------------------- CONTACT-SECTION--------------------------------------------->

  <section id="contact" class="contact-section">
    <div class="container">
      <h2 class="text-center mb-4">CONTACT US</h2>
        
      <b>Connect with us through our contact section, the gateway to sharing
         your floral dreams and inquiries. Our dedicated team is here to assist you, 
         ready to craft personalized arrangements that reflect your vision and desires. Whether you're
          planning a special event, seeking the perfect bouquet, or simply curious about the world of blooms,
           reach out to us and let's embark on a journey of botanical beauty together. Your inquiries 
        are important to us, and we're here to ensure that every petal unfurls a story of delight and satisfaction.</b>
    
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="info.php" method="post">
            <div class="my-group">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="my-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="my-group">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="my-group">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-------------------------------------------- FOOTER--------------------------------------------->

  <footer class="footer">
    <div class="container">
    <p class="copyright">&copy; <b>2023 Blossom. All rights reserved.</b></p>
      <p class="italic">Designed by <a href="https://your-website.com" class="designer-link"><b>Ashwini Barkale</b></a></p>
      
    </div>
  </footer>

 <!-------------------------------------------- LINKS--------------------------------------------->

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>