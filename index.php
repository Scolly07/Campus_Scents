<?php
$pageTitle = "Campus Scents | Affordable fragrances for student life";
include __DIR__ . "/includes/header.php";
?>
<main>
  <section class="hero">
    <div class="hero-copy">
      <p class="eyebrow" data-en="YOUR SCENT. YOUR BUDGET." data-zu="IPHUNGA LAKHO. ISABELO SAKHO.">YOUR SCENT. YOUR BUDGET.</p>
      <h1 data-en="Smell good. Spend smart." data-zu="Nuka kamnandi. Sebenzisa imali ngobuhlakani.">Smell good. Spend smart.</h1>
      <p class="hero-text" data-en="Discover affordable fragrances for lectures, dates, parties and every day in between." data-zu="Thola amakha angabizi kakhulu okufunda, izinsuku zokuphola, amaphathi nezinsuku zonke.">Discover affordable fragrances for lectures, dates, parties and every day in between.</p>
      <div class="hero-actions">
        <a class="button button-primary" href="#featured" data-en="Explore fragrances" data-zu="Bheka amakha">Explore fragrances</a>
        <a class="button button-outline" href="about.php" data-en="Our story" data-zu="Indaba yethu">Our story</a>
      </div>
      <div class="trust-row"><span>✓ Student-friendly prices</span><span>✓ Everyday scent options</span></div>
    </div>
    <div class="hero-art" aria-label="Illustration of perfume bottles" role="img">
      <div class="sun-disc"></div><div class="bottle bottle-one"><span>SCENT</span></div><div class="bottle bottle-two"><span>MOOD</span></div><div class="bottle bottle-three"><span>YOU</span></div>
      <div class="art-caption">FIND YOUR SIGNATURE</div>
    </div>
  </section>

  <section class="section intro-strip">
    <div><p class="eyebrow">MADE FOR CAMPUS LIFE</p><h2>Great fragrance doesn't have to cost a fortune.</h2></div>
    <p>Campus Scents helps students explore affordable fragrance options, including selections from Lattafa and Fragrance World. Choose a scent that fits your style and your budget.</p>
  </section>

  <section class="section" id="featured">
    <div class="section-heading"><div><p class="eyebrow">START EXPLORING</p><h2>Find a scent for your mood</h2></div><p>Use the filters to explore a few fragrance styles.</p></div>
    <div class="filter-bar" role="group" aria-label="Filter fragrance cards">
      <button class="filter-button active" data-filter="all">All moods</button><button class="filter-button" data-filter="fresh">Fresh</button><button class="filter-button" data-filter="sweet">Sweet</button><button class="filter-button" data-filter="bold">Bold</button>
    </div>
    <div class="product-grid">
      <article class="product-card" data-mood="fresh"><div class="product-visual visual-fresh"><span class="product-tag">FRESH</span><div class="mini-bottle"><i></i></div></div><div class="product-info"><p class="product-type">THE EVERYDAY PICK</p><h3>Fresh & Clean</h3><p>Light, easy-going fragrance styles for lectures, errands and daily wear.</p><span class="product-note">Mood: confident and effortless</span></div></article>
      <article class="product-card" data-mood="sweet"><div class="product-visual visual-sweet"><span class="product-tag">SWEET</span><div class="mini-bottle"><i></i></div></div><div class="product-info"><p class="product-type">THE COMPLIMENT PICK</p><h3>Warm & Sweet</h3><p>Comforting gourmand and amber-inspired styles for evenings and special plans.</p><span class="product-note">Mood: warm and inviting</span></div></article>
      <article class="product-card" data-mood="bold"><div class="product-visual visual-bold"><span class="product-tag">BOLD</span><div class="mini-bottle"><i></i></div></div><div class="product-info"><p class="product-type">THE STATEMENT PICK</p><h3>Deep & Bold</h3><p>Rich, woody and spicy fragrance styles for when you want to stand out.</p><span class="product-note">Mood: strong and memorable</span></div></article>
    </div>
    <p class="small-note">Product availability and prices can change. Contact us for current stock and pricing. Brand names are used to describe the types of fragrances we aim to offer.</p>
  </section>

  <section class="quiz-panel section">
    <div><p class="eyebrow">NOT SURE WHAT TO PICK?</p><h2>Get a quick scent suggestion</h2><p>Choose the vibe that sounds most like you.</p></div>
    <div class="quiz-controls"><label for="scentMood">My scent mood is...</label><select id="scentMood"><option value="fresh">Fresh and clean</option><option value="sweet">Sweet and warm</option><option value="bold">Bold and woody</option></select><button class="button button-primary" id="recommendButton">Suggest a style</button><p id="recommendation" class="recommendation" aria-live="polite">Your suggestion will appear here.</p></div>
  </section>
  <section class="cta-band"><div><p class="eyebrow">LET'S FIND YOUR NEXT FAVOURITE</p><h2>Your next signature scent could be one message away.</h2></div><a class="button button-light" href="contact.php">Ask about stock</a></section>
</main>
<?php include __DIR__ . "/includes/footer.php"; ?>