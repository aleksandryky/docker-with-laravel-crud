<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Obscura-X Certification Consulting</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        :root {
            --bg: #f4f6fb;
            --ink: #081225;
            --ink-soft: #4b5b74;
            --surface: #ffffff;
            --line: #dde3ee;
            --brand: #0c1e39;
            --brand-2: #1b4f9f;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 16px/1.65 "Inter", Arial, sans-serif;
        }
        .container { width: min(1180px, 92%); margin: 0 auto; }
        .site-header {
            position: sticky; top: 0; z-index: 20;
            background: rgba(255,255,255,.95);
            border-bottom: 1px solid var(--line);
            backdrop-filter: blur(8px);
        }
        .nav {
            min-height: 80px;
            display: flex; align-items: center; justify-content: space-between; gap: 20px;
        }
        .logo { font-weight: 800; font-size: 17px; color: var(--brand); }
        .nav-links { display: flex; align-items: center; gap: 26px; list-style: none; margin: 0; padding: 0; }
        .nav-links a { color: #1a2b46; text-decoration: none; font-size: 14px; font-weight: 500; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 10px; text-decoration: none; font-size: 14px; font-weight: 700;
            border: 1px solid transparent; padding: 12px 18px; transition: .2s ease;
        }
        .btn:hover { transform: translateY(-1px); }
        .btn-dark { background: var(--brand); color: #fff; }
        .btn-light { background: #fff; color: var(--brand); border-color: #c3cede; }
        .hero {
            padding: 86px 0 64px;
            background: radial-gradient(circle at top right, #1a3e80 0%, #0b1930 48%, #081225 100%);
            color: #fff;
        }
        .eyebrow {
            color: #9bc0ff;
            text-transform: uppercase;
            letter-spacing: .09em;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .hero h1 {
            margin: 0;
            font-size: clamp(34px, 5vw, 62px);
            line-height: 1.14;
            letter-spacing: -.02em;
            max-width: 880px;
        }
        .hero p {
            margin: 14px 0 0;
            color: rgba(255,255,255,.84);
            max-width: 760px;
            font-size: 18px;
        }
        section { padding: 80px 0; }
        h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 4vw, 44px);
            line-height: 1.15;
            letter-spacing: -.02em;
            color: #0c1f3a;
        }
        p { margin: 0; color: var(--ink-soft); }
        .story-grid {
            margin-top: 26px;
            display: grid; grid-template-columns: 1.2fr 1fr; gap: 24px;
        }
        .story-panel, .timeline-panel, .value-card, .team-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
        }
        .story-panel { padding: 26px; }
        .timeline-panel { padding: 22px; }
        .timeline-item { padding: 12px 0; border-bottom: 1px dashed #d4dfef; }
        .timeline-item:last-child { border-bottom: 0; }
        .timeline-item strong { display: block; color: #102444; }
        .mission-grid {
            margin-top: 22px;
            display: grid; grid-template-columns: 1fr 1fr; gap: 18px;
        }
        .mission-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 24px;
        }
        .mission-card h3 { margin: 0 0 8px; color: #102444; }
        .values-grid, .team-grid {
            margin-top: 24px;
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px;
        }
        .value-card { padding: 18px; min-height: 150px; }
        .value-card h4 { margin: 0 0 6px; color: #102444; }
        .team-grid { grid-template-columns: repeat(2, 1fr); }
        .team-card { padding: 22px; }
        .team-name { font-weight: 700; color: #102444; }
        .team-role { color: #5f7190; font-size: 14px; }
        .cta-band {
            margin-top: 28px;
            background: linear-gradient(120deg, #0b1c35, #1d4a91);
            border-radius: 18px;
            color: #fff;
            padding: 40px;
        }
        .cta-band h3 { margin: 0 0 8px; font-size: clamp(24px, 3vw, 40px); }
        .cta-band p { color: rgba(255,255,255,.86); margin-bottom: 16px; }
        .site-footer { background: #061124; color: #cad4e7; padding: 44px 0 30px; }
        .footer-grid { display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 18px; }
        .site-footer h4 { margin: 0 0 12px; color: #fff; font-size: 16px; }
        .site-footer a { display: inline-block; color: #c2cde0; text-decoration: none; margin-bottom: 7px; font-size: 14px; }
        .copyright { margin-top: 22px; padding-top: 14px; border-top: 1px solid #1c2c44; font-size: 13px; color: #8fa1bf; }
        @media (max-width: 1040px) {
            .story-grid, .mission-grid, .footer-grid, .values-grid, .team-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 760px) {
            .nav-links { display: none; }
            .hero { padding-top: 70px; }
            .cta-band { padding: 28px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <div class="logo">Obscura-X Certification Consulting</div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('state') }}">State</a></li>
                <li><a href="{{ url('/#services') }}">Certification</a></li>
                <li><a href="{{ url('/#services') }}">Our Process</a></li>
                <li><a href="{{ url('/#resources') }}">Blog</a></li>
                <li><a href="{{ url('/#contact') }}">Contact Us</a></li>
            </ul>
            <a class="btn btn-dark" href="{{ url('/#contact') }}">Get Started</a>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="eyebrow">About Us</div>
            <h1>Guiding Organizations Through All Types Certification with Expertise and Integrity.</h1>
            <p>We specialize in guiding businesses through every step of the all types certification process with clarity, accuracy, and proven expertise.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="eyebrow" style="color:#1b4f9f;">Our Story</div>
            <h2>From Certification Experts to Global Compliance Partners</h2>
            <div class="story-grid">
                <article class="story-panel">
                    <p>Obscura-X was founded in 2018 by a team of certification experts frustrated with opaque regulatory pathways. What started as a focused consultancy in tech compliance has grown into a trusted partner across all major certification domains.</p>
                    <br>
                    <p>Today, we guide organizations through quality management, environmental, information security, healthcare, finance, sustainability, and industry-specific programs with a practical, confidence-first consulting model.</p>
                </article>
                <aside class="timeline-panel">
                    <div class="timeline-item">
                        <strong>2018</strong>
                        Launched with a focus on tech startups.
                    </div>
                    <div class="timeline-item">
                        <strong>2020</strong>
                        Expanded globally and delivered 100+ successful certifications.
                    </div>
                    <div class="timeline-item">
                        <strong>2023</strong>
                        Introduced AI-driven tools for faster compliance audits.
                    </div>
                    <div class="timeline-item">
                        <strong>Today</strong>
                        Supporting 500+ clients worldwide with a 98% success rate.
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section style="padding-top:0;">
        <div class="container">
            <div class="eyebrow" style="color:#1b4f9f;">Our Mission & Vision</div>
            <h2>Transforming Compliance Into Competitive Advantage</h2>
            <div class="mission-grid">
                <article class="mission-card">
                    <h3>Mission</h3>
                    <p>To empower organizations with seamless certification consulting, turning regulatory hurdles into strategic advantages. We build certification programs that strengthen operations, reduce risk, unlock new markets, and enhance credibility.</p>
                </article>
                <article class="mission-card">
                    <h3>Vision</h3>
                    <p>A world where every business operates with confidence, backed by robust and tailored certifications. We believe compliance should be a foundation for trust, innovation, and sustainable growth.</p>
                </article>
            </div>
        </div>
    </section>

    <section style="padding-top:0;">
        <div class="container">
            <div class="eyebrow" style="color:#1b4f9f;">Core Values</div>
            <h2>What Defines Our Approach to Certification Consulting</h2>
            <div class="values-grid">
                <article class="value-card">
                    <h4>Integrity</h4>
                    <p>Transparent advice and compliance-first decisions with no shortcuts.</p>
                </article>
                <article class="value-card">
                    <h4>Expertise</h4>
                    <p>Certified consultants with 10+ years of hands-on certification experience.</p>
                </article>
                <article class="value-card">
                    <h4>Innovation</h4>
                    <p>Modern tools and structured workflows to streamline documentation and audits.</p>
                </article>
                <article class="value-card">
                    <h4>Client-Centric</h4>
                    <p>Tailored strategies and practical support for every business stage.</p>
                </article>
            </div>
        </div>
    </section>

    <section style="padding-top:0;">
        <div class="container">
            <div class="eyebrow" style="color:#1b4f9f;">Our Team</div>
            <h2>Experts Guiding You Through Every Certification Journey</h2>
            <div class="team-grid">
                <article class="team-card">
                    <div class="team-name">Arnav Gupta</div>
                    <div class="team-role">Head of Consulting</div>
                </article>
                <article class="team-card">
                    <div class="team-name">Tanvir Khan</div>
                    <div class="team-role">HR Manager</div>
                </article>
            </div>
            <div class="cta-band">
                <h3>Ready to Get Certified?</h3>
                <p>Start your certification journey with expert guidance and a proven, step-by-step process.</p>
                <a class="btn btn-light" href="{{ url('/#contact') }}">Get Started</a>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Obscura-X Certification Consulting</h4>
                    <p>We provide expert guidance, strategic insight, and end-to-end support to help organizations navigate certification with confidence.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <a href="{{ url('/') }}">Home</a><br>
                    <a href="{{ route('about') }}">About Us</a><br>
                    <a href="{{ route('state') }}">State</a><br>
                    <a href="{{ url('/#services') }}">Our Process</a><br>
                    <a href="{{ url('/#contact') }}">Contact</a>
                </div>
                <div>
                    <h4>Company</h4>
                    <a href="#">Certification</a><br>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Cookie Policy</a>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <a href="#">Facebook</a><br>
                    <a href="#">Instagram</a><br>
                    <a href="#">LinkedIn</a><br>
                    <a href="#">X (Twitter)</a>
                </div>
            </div>
            <div class="copyright">2026 Obscura-X Certification Consulting. All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>
