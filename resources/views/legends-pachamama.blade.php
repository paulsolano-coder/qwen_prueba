<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legends of the Pachamama - Epic Adventure Awaits</title>
    <meta name="description" content="Embark on a mystical journey through ancient Andean legends. Pre-order now and discover the power of Pachamama.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --primary-gold: #D4AF37;
            --secondary-gold: #B8860B;
            --earth-brown: #3E2723;
            --deep-green: #1B5E20;
            --mystic-purple: #4A148C;
            --text-light: #F5F5F5;
            --text-dark: #212121;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            background: linear-gradient(135deg, var(--earth-brown) 0%, var(--deep-green) 50%, var(--mystic-purple) 100%);
            color: var(--text-light);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: 'Cinzel', serif;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: rgba(30, 20, 15, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--primary-gold);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 900;
            color: var(--primary-gold);
            text-decoration: none;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-gold);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary-gold);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 6rem 5% 4rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="%23D4AF37" opacity="0.3"/></svg>');
            background-size: 50px 50px;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            100% { transform: translateY(-50px); }
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 900px;
        }

        .hero-title {
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 900;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary-gold), #FFD700, var(--primary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
            animation: glow 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.3); }
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            margin-bottom: 2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--earth-brown);
            background: linear-gradient(45deg, var(--primary-gold), var(--secondary-gold));
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
            margin: 1rem;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.6);
        }

        .cta-button.secondary {
            background: transparent;
            border: 3px solid var(--primary-gold);
            color: var(--primary-gold);
        }

        .cta-button.secondary:hover {
            background: var(--primary-gold);
            color: var(--earth-brown);
        }

        /* Features Section */
        .features {
            padding: 6rem 5%;
            background: rgba(0, 0, 0, 0.3);
        }

        .section-title {
            text-align: center;
            font-size: clamp(2rem, 5vw, 3.5rem);
            margin-bottom: 1rem;
            color: var(--primary-gold);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 4rem;
            opacity: 0.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 2.5rem;
            border-radius: 15px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-gold);
        }

        /* Gallery Section */
        .gallery {
            padding: 6rem 5%;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 16/9;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid rgba(212, 175, 55, 0.3);
            cursor: pointer;
        }

        .gallery-item:hover {
            border-color: var(--primary-gold);
            transform: scale(1.02);
            transition: all 0.3s ease;
        }

        .gallery-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--earth-brown), var(--deep-green));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--primary-gold);
        }

        /* Story Section */
        .story {
            padding: 6rem 5%;
            background: rgba(0, 0, 0, 0.4);
            position: relative;
        }

        .story-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 2;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Newsletter Section */
        .newsletter {
            padding: 6rem 5%;
            text-align: center;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 2rem auto;
            display: flex;
            gap: 1rem;
        }

        .newsletter-input {
            flex: 1;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            border: 2px solid rgba(212, 175, 55, 0.5);
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            outline: none;
            transition: border-color 0.3s ease;
        }

        .newsletter-input:focus {
            border-color: var(--primary-gold);
        }

        .newsletter-input::placeholder {
            color: rgba(245, 245, 245, 0.6);
        }

        /* Footer */
        footer {
            padding: 3rem 5%;
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
            border-top: 1px solid rgba(212, 175, 55, 0.3);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .social-link {
            font-size: 1.5rem;
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-link:hover {
            color: var(--primary-gold);
        }

        .footer-text {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .hero {
                padding-top: 4rem;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="#" class="logo">PACHAMAMA</a>
        <ul class="nav-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#story">Story</a></li>
            <li><a href="#newsletter">News</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Legends of the Pachamama</h1>
            <p class="hero-subtitle">Embark on an epic journey through ancient Andean mythology. Discover the power of Mother Earth and forge your destiny.</p>
            <div>
                <a href="#preorder" class="cta-button">Pre-Order Now</a>
                <a href="#trailer" class="cta-button secondary">Watch Trailer</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <h2 class="section-title fade-in">Game Features</h2>
        <p class="section-subtitle fade-in">Experience a world inspired by ancient Andean civilizations, filled with mystery, magic, and adventure.</p>
        
        <div class="features-grid">
            <div class="feature-card fade-in">
                <span class="feature-icon">🏔️</span>
                <h3>Vast Open World</h3>
                <p>Explore breathtaking landscapes inspired by the Andes mountains, from misty peaks to lush valleys teeming with life.</p>
            </div>
            
            <div class="feature-card fade-in">
                <span class="feature-icon">⚔️</span>
                <h3>Epic Combat</h3>
                <p>Master ancient weapons and mystical abilities in dynamic combat systems that reward skill and strategy.</p>
            </div>
            
            <div class="feature-card fade-in">
                <span class="feature-icon">🎭</span>
                <h3>Rich Storyline</h3>
                <p>Uncover deep narratives woven from authentic Andean legends and myths passed down through generations.</p>
            </div>
            
            <div class="feature-card fade-in">
                <span class="feature-icon">🔮</span>
                <h3>Mystical Powers</h3>
                <p>Harness the power of Pachamama herself with unique magical abilities tied to nature and earth elements.</p>
            </div>
            
            <div class="feature-card fade-in">
                <span class="feature-icon">👥</span>
                <h3>Memorable Characters</h3>
                <p>Meet diverse characters inspired by indigenous cultures, each with their own stories and quests.</p>
            </div>
            
            <div class="feature-card fade-in">
                <span class="feature-icon">🎨</span>
                <h3>Stunning Visuals</h3>
                <p>Immerse yourself in beautifully crafted environments with day-night cycles and dynamic weather systems.</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <h2 class="section-title fade-in">Screenshot Gallery</h2>
        <p class="section-subtitle fade-in">Get a glimpse into the world of Legends of the Pachamama</p>
        
        <div class="gallery-grid">
            @for($i = 1; $i <= 6; $i++)
            <div class="gallery-item fade-in">
                <div class="gallery-placeholder">
                    Screenshot {{ $i }}
                </div>
            </div>
            @endfor
        </div>
    </section>

    <!-- Story Section -->
    <section id="story" class="story">
        <div class="story-content">
            <h2 class="section-title fade-in">The Legend Begins</h2>
            <div class="story-text fade-in">
                <p>In the heart of the ancient Andes, where the mountains touch the sky and the spirits of ancestors whisper through the wind, a prophecy foretells of a chosen hero who will restore balance to the world.</p>
                <br>
                <p>Pachamama, the revered Mother Earth, has fallen silent. The sacred connection between nature and humanity is breaking. Dark forces threaten to consume the land, and only you can awaken the ancient powers that slumber within the temples of old.</p>
                <br>
                <p>Journey through mystical realms, solve ancient puzzles, and forge alliances with the guardians of the earth. Your choices will shape the fate of this world and determine whether the legends of the Pachamama will endure for generations to come.</p>
            </div>
            <a href="#preorder" class="cta-button fade-in">Begin Your Journey</a>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="newsletter">
        <h2 class="section-title fade-in">Stay Connected</h2>
        <p class="section-subtitle fade-in">Subscribe to receive exclusive updates, behind-the-scenes content, and special offers</p>
        
        <form class="newsletter-form fade-in" action="#" method="POST">
            @csrf
            <input type="email" class="newsletter-input" placeholder="Enter your email" required>
            <button type="submit" class="cta-button">Subscribe</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#" class="social-link">📘</a>
            <a href="#" class="social-link">🐦</a>
            <a href="#" class="social-link">📸</a>
            <a href="#" class="social-link">🎮</a>
            <a href="#" class="social-link">▶️</a>
        </div>
        <p class="footer-text">&copy; {{ date('Y') }} Your Game Studio. All rights reserved.</p>
        <p class="footer-text">Legends of the Pachamama is a trademark of Your Game Studio.</p>
    </footer>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade-in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(30, 20, 15, 0.98)';
            } else {
                navbar.style.background = 'rgba(30, 20, 15, 0.9)';
            }
        });
    </script>
</body>
</html>
