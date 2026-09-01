<?php
$site_name = "Storm Parka Vale";
$site_tagline = "High-Performance Alpine & Arctic Outerwear";
$official_address = "181 Mercer Street, New York, NY 10012, United States";
$official_phone = "+1-888-777-5845";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storm Parka Vale | High-Performance Alpine & Arctic Outerwear Atelier</title>
  <meta name="description" content="Discover Storm Parka Vale: 900 fill power goose down parkas, 35,000mm hydrostatic waterproof membranes, and sub-zero mountaineering outerwear.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%230C1116' stroke='%2300F0FF' stroke-width='4'/><path d='M30 65 L50 35 L70 65 Z' stroke='%230D9488' stroke-width='3' fill='none'/><circle cx='50' cy='35' r='5' fill='%2300F0FF'/></svg>">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">🧥</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text"><?php echo $site_name; ?></span>
            <span class="brand-tagline"><?php echo $site_tagline; ?></span>
          </div>
        </a>
        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Main</a>
          <a href="about.html" class="nav-link">Atelier</a>
          <a href="blog.html" class="nav-link">Journal</a>
          <a href="contact.html" class="nav-link">Expedition Salon</a>
        </nav>
        <div class="nav-cta"><a href="contact.html" class="btn-storm btn-cyan">Commission Parka</a></div>
        <button class="mobile-toggle" aria-label="Toggle Navigation"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
  <main>
    <!-- Section 1: Hero Showcase -->
    <section class="hero-storm">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="section-tag">Polar & High-Altitude Atelier</span>
            <h1 class="hero-title">Defying Glacial Storms in <span>Aerated Warmth.</span></h1>
            <p class="hero-subtitle">
              Engineering 35,000mm hydrostatic head waterproof membranes, 900 fill-power hydrophobic goose down, and Kevlar-reinforced alpine outerwear in Manhattan.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
              <a href="contact.html" class="btn-storm btn-cyan">Schedule Thermal Fitting</a>
              <a href="about.html" class="btn-storm btn-outline">Explore Polar Engineering</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item"><h4>-50°C</h4><p>Certified Thermal Rating</p></div>
              <div class="stat-item"><h4>35,000mm</h4><p>Hydrostatic Head Barrier</p></div>
              <div class="stat-item"><h4>900 FP</h4><p>Hydrophobic Goose Down</p></div>
            </div>
          </div>
          <div class="hero-img-box">
            <img src="assets/images/hero-storm-parka.jpg" alt="Mountaineer wearing heavy Arctic storm down parka during severe mountain snow blizzard">
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Three Pillars of Alpine Outerwear Engineering -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Alpine Performance Pillars</span>
          <h2>The Architecture of Sub-Zero Outerwear</h2>
          <p>Every seam, baffle, and storm hood is engineered to withstand hurricane-force blizzards and high-altitude polar cold.</p>
        </div>
        <div class="grid-3">
          <div class="parka-card">
            <div class="card-img-wrap"><img src="assets/images/craft-hydrophobic-seams.jpg" alt="Ultrasonic seam sealing and hydrophobic membrane testing" loading="lazy"><span class="card-tag-pill">Membrane Physics</span></div>
            <div class="card-body"><h3>Hydrostatic Barrier Membrane</h3><p>Triple-layer microporous ePTFE laminate delivering 35,000mm waterproof protection while allowing sweat vapor to escape.</p><a href="about.html" class="card-link">Explore Membrane Tech &rarr;</a></div>
          </div>
          <div class="parka-card">
            <div class="card-img-wrap"><img src="assets/images/craft-down-loft.jpg" alt="High loft 900 fill power goose down thermal cluster" loading="lazy"><span class="card-tag-pill">Thermal Insulation</span></div>
            <div class="card-body"><h3>900 Fill Hydrophobic Down</h3><p>Box-wall baffle chambers filled with ethically harvested goose down treated with natural wax for permanent loft retention.</p><a href="about.html" class="card-link">Explore Down Physics &rarr;</a></div>
          </div>
          <div class="parka-card">
            <div class="card-img-wrap"><img src="assets/images/craft-storm-hood.jpg" alt="Articulated storm hood with Cohaesive cord locks and magnetic face shield" loading="lazy"><span class="card-tag-pill">Storm Defense</span></div>
            <div class="card-body"><h3>Articulated Storm Hoods</h3><p>Three-way adjustable tunnel hoods equipped with magnetic zipper storm flaps and integrated wire-brim face shields.</p><a href="about.html" class="card-link">Explore Hood Geometry &rarr;</a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Signature Expedition Outerwear Lineup -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Expedition Outerwear Lineup</span>
          <h2>The Storm Parka Vale Collection</h2>
          <p>Hand-crafted in limited alpine runs for polar explorers, Himalayan mountaineers, and severe-weather guides.</p>
        </div>
        <div class="grid-3">
          <div class="parka-card"><div class="card-body"><h3>The 8,000M Arctic Expedition Parka</h3><p>Heavy-duty polar parka with box-wall baffles, Kevlar elbow reinforcements, and internal fleece heat-trapping cuffs.</p><a href="contact.html" class="card-link">Reserve Custom Build &rarr;</a></div></div>
          <div class="parka-card"><div class="card-body"><h3>The North Sea Storm Shell</h3><p>Monolithic 3-layer storm shell engineered for coastal gales, torrential downpours, and sub-zero offshore sailing.</p><a href="contact.html" class="card-link">Reserve Custom Build &rarr;</a></div></div>
          <div class="parka-card"><div class="card-body"><h3>The Glacial Alpine Fastpack Parka</h3><p>Ultralight aerogel-down hybrid jacket designed for rapid ascents and technical ice climbing above 6,000 meters.</p><a href="contact.html" class="card-link">Reserve Custom Build &rarr;</a></div></div>
        </div>
      </div>
    </section>

    <!-- Section 4: Interactive Thermal & Weather Configurator -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Outerwear Studio</span>
          <h2>Configure Your Bespoke Storm Parka</h2>
          <p>Select your targeted temperature threshold, membrane waterproof rating, and alpine reinforcement zones.</p>
        </div>
        <div class="interactive-parka-tool">
          <div class="parka-selector-grid">
            <div class="parka-option-card active" data-parka="arctic8000"><h4>8,000M Arctic Parka</h4><p>-50°C certified, 900 fill goose down, box-wall baffles.</p></div>
            <div class="parka-option-card" data-parka="stormstorm"><h4>North Sea Storm Shell</h4><p>35,000mm water column, magnetic storm flaps, 3L membrane.</p></div>
            <div class="parka-option-card" data-parka="alpinerunner"><h4>Glacial Fastpack Parka</h4><p>480g total weight, aerogel hybrid, rapid mountain ascents.</p></div>
          </div>
          <div class="parka-result-box">
            <div>
              <div id="parka-custom-badge" style="color: var(--color-aurora-cyan); font-weight: 700; font-size: 0.88rem; margin-bottom: 6px;">Thermal Threshold: -50°C Certified &bull; 900 Fill Goose Down</div>
              <h3 id="parka-custom-title" style="margin-bottom: 8px;">The 8,000M Arctic Expedition Down Parka</h3>
              <p id="parka-custom-desc" style="color: var(--color-text-muted); font-size: 0.95rem;">Crafted with 900 fill-power hydrophobic Polish white goose down, 30,000mm hydrostatic head 3-layer membrane, and Kevlar abrasion elbow panels.</p>
            </div>
            <a href="contact.html" class="btn-storm btn-cyan" style="white-space: nowrap;">Commission This Custom Build</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: The Alpine Outerwear Bench Manifesto -->
    <section class="section">
      <div class="container">
        <div class="grid-2">
          <div>
            <span class="section-tag">Alpine Textile Engineering</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">The Master Tailor's Bench: Thermal Physics & Hydrophobic Defense</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 16px;">
              In an industry dominated by fast-fashion puffers that leak down feathers and fail in freezing rain, Storm Parka Vale builds indestructible alpine armor engineered to preserve human life in the most hostile weather conditions on Earth.
            </p>
            <p style="color: var(--color-text-muted); margin-bottom: 24px;">
              Every seam is ultrasonically welded, sealed with hot-melt polyurethane tape, and filled with certified down clusters in our Manhattan atelier:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-aurora-cyan); font-size: 1.2rem; margin-bottom: 4px;">🌧️ 35,000mm Hydrostatic Head</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Impacting gale-force rain cannot penetrate our 3-layer microporous ePTFE membranes.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-aurora-cyan); font-size: 1.2rem; margin-bottom: 4px;">🪶 900 Fill Hydrophobic Down</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Wax-infused down clusters that retain 95% of thermal loft even when exposed to damp fog.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-aurora-cyan); font-size: 1.2rem; margin-bottom: 4px;">🛡️ Kevlar Abrasion Shields</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Ballistic aramid fiber panels protecting shoulders from heavy backpack straps and ice axes.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-aurora-cyan); font-size: 1.2rem; margin-bottom: 4px;">🧲 Magnetic Storm Closures</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Self-aligning magnetic snaps operable while wearing heavy sub-zero mountaineering mitts.</p>
              </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
              <a href="about.html" class="btn-storm btn-cyan">Read Atelier Manifesto &rarr;</a>
              <a href="contact.html" class="btn-storm btn-outline">Schedule Studio Fitting</a>
            </div>
          </div>
          <div class="hero-img-box" style="position: relative;">
            <img src="assets/images/about-alpine-atelier.jpg" alt="Master alpine tailor examining waterproof seam sealing on technical expedition parka" loading="lazy">
            <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(12, 17, 22, 0.92); backdrop-filter: blur(10px); padding: 14px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
              <span style="font-size: 0.82rem; color: var(--color-aurora-cyan); font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">Expedition Bench Assembly</span>
              <span style="font-size: 0.78rem; color: var(--color-text-muted);">Arctic Tested &bull; -50°C Certified</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 6: Verified Alpine Performance Benchmarks -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Empirical Lab Testing</span>
          <h2>Outerwear Performance Benchmarks</h2>
          <p>Validated in sub-zero wind tunnels and extreme climatic testing chambers.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-aurora-cyan); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">0.00 CFM</div>
            <h4 style="margin-bottom: 12px;">Wind Permeability (Zero Draft)</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">100% windproof shell eliminating wind chill heat loss up to 100 mph gales.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-aurora-cyan); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">25,000 g/m²</div>
            <h4 style="margin-bottom: 12px;">Moisture Vapor Breathability</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Evaporates active sweat vapor during steep climbs, preventing internal condensation.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-aurora-cyan); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">100%</div>
            <h4 style="margin-bottom: 12px;">Box-Wall Baffle Construction</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Eliminates cold stitch-through lines, maintaining continuous 3-inch loft insulation.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7: Manhattan Expedition Salon Lookbook -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manhattan Expedition Salon</span>
          <h2>The Mercer Street Outerwear Showroom</h2>
          <p>Experience sub-zero cold room trials, custom sleeve articulation tailoring, and alpine fittings in SoHo.</p>
        </div>
        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); position: relative;">
          <img src="assets/images/lookbook-mercer-salon.jpg" alt="Luxury expedition outerwear showroom with winter parkas and arctic mountaineering displays" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 32px; left: 32px; background: rgba(12, 17, 22, 0.92); backdrop-filter: blur(12px); padding: 24px 32px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); max-width: 500px;">
            <h3 style="font-size: 1.35rem; margin-bottom: 8px; color: var(--color-aurora-cyan);">The Mercer Outerwear Salon</h3>
            <p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 16px;">Equipped with a sub-zero cold chamber to test parka insulation before arctic expeditions.</p>
            <a href="blog.html" class="card-link">Read Alpine Treatises &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 8: Explorer & Mountaineer Testimonials -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Expedition Reviews</span>
          <h2>Endorsements from Polar Explorers</h2>
          <p>From Denali winter ascents to Antarctic ice cap traverses, our parkas provide unyielding sanctuary.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-aurora-cyan); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #E2E8F0; font-style: italic; margin-bottom: 20px;">"Traversing the Greenland ice sheet in -45°C katabatic winds, the 8,000M parka was an absolute lifesaver. Zero cold spots and impenetrable storm flaps."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Torvald Einarsson</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Polar Guide & Glaciologist, Tromsø</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-aurora-cyan); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #E2E8F0; font-style: italic; margin-bottom: 20px;">"The articulated hood design allows full peripheral vision without letting freezing spindrift into the face opening. Outstanding alpine engineering."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Karin Beaumont</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">IFMGA Alpine Guide, Chamonix</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-aurora-cyan); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #E2E8F0; font-style: italic; margin-bottom: 20px;">"The hydrophobic Polish down kept its lofty warmth even during high-humidity coastal ice climbing in Newfoundland. Exceptional durability."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Dr. Liam MacIntyre</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Expedition Geoscientist, Banff</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9: Private Fitting & Commission Inquiries -->
    <section class="section">
      <div class="container container-narrow">
        <div style="background: radial-gradient(circle at center, rgba(0, 240, 255, 0.15), transparent 70%), var(--color-card-bg); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 60px 48px; text-align: center;">
          <span class="section-tag">Bespoke Outerwear Fitting</span>
          <h2 style="font-size: 2.3rem; margin-bottom: 16px;">Schedule Your Sub-Zero Consultation</h2>
          <p style="color: var(--color-text-muted); max-width: 560px; margin: 0 auto 32px;">
            Visit our Manhattan salon at 181 Mercer Street, New York, NY 10012 to test our cold chamber, or request our confidential alpine expedition dossier.
          </p>
          <div style="display: flex; gap: 12px; justify-content: center; max-width: 500px; margin: 0 auto 24px; flex-wrap: wrap;">
            <input type="email" placeholder="Enter your expedition or explorer email" style="flex: 1; min-width: 240px; padding: 14px 18px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-subtle-bg); color: var(--color-text-main); font-size: 0.95rem;">
            <a href="contact.html" class="btn-storm btn-cyan">Request Expedition Dossier</a>
          </div>
          <p style="font-size: 0.8rem; color: #64748B;">Direct atelier inquiries welcomed at +1-888-777-5845.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">🧥</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text"><?php echo $site_name; ?></span>
              <span class="brand-tagline"><?php echo $site_tagline; ?></span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #94A3B8; line-height: 1.8;">
            Handcrafting high-performance stormproof alpine parkas, 900 fill hydrophobic goose down outerwear, and sub-zero expedition gear in Manhattan.
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Main</a></li>
            <li><a href="about.html">Atelier</a></li>
            <li><a href="blog.html">Journal</a></li>
            <li><a href="contact.html">Expedition Salon</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Atelier Disclaimer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Manhattan Atelier</h4>
          <div class="footer-contact-item"><span class="icon">📍</span><span><?php echo $official_address; ?></span></div>
          <div class="footer-contact-item"><span class="icon">📞</span><span><?php echo $official_phone; ?></span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</div>
        <div>High-Altitude Alpine Outerwear &bull; 900 Fill Hydrophobic Down &bull; 35,000mm Storm Barrier</div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>