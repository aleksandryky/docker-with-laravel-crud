<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obscura-X Certification Consulting</title>
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
            --accent: #f6b400;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 16px/1.65 "Inter", Arial, sans-serif;
        }
        .container { width: min(1180px, 92%); margin: 0 auto; }
        .eyebrow {
            color: var(--brand-2);
            text-transform: uppercase;
            letter-spacing: .09em;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 12px;
        }
        h1, h2, h3 { margin: 0; line-height: 1.15; letter-spacing: -.02em; }
        p { margin: 0; color: var(--ink-soft); }
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
        .logo {
            font-weight: 800;
            font-size: 17px;
            color: var(--brand);
            letter-spacing: -.01em;
        }
        .nav-links { display: flex; align-items: center; gap: 26px; list-style: none; margin: 0; padding: 0; }
        .nav-links a {
            color: #1a2b46; text-decoration: none; font-size: 14px; font-weight: 500;
        }
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 10px; text-decoration: none; font-size: 14px; font-weight: 700;
            transition: .2s ease; border: 1px solid transparent; cursor: pointer;
            padding: 12px 18px;
        }
        .btn:hover { transform: translateY(-1px); }
        .btn-dark { background: var(--brand); color: #fff; }
        .btn-light { background: #fff; color: var(--brand); border-color: #c3cede; }
        .hero {
            padding: 88px 0 54px;
            background: radial-gradient(circle at top right, #1a3e80 0%, #0b1930 46%, #081225 100%);
            color: #fff;
        }
        .hero h1 {
            font-size: clamp(34px, 5vw, 66px);
            max-width: 860px;
            margin-bottom: 16px;
        }
        .hero p {
            color: rgba(255,255,255,.84);
            max-width: 760px;
            font-size: 18px;
            margin-bottom: 28px;
        }
        .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .stats {
            margin-top: 48px;
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;
        }
        .stat {
            background: rgba(255,255,255,.1);
            border: 1px solid rgba(255,255,255,.22);
            border-radius: 16px;
            padding: 18px 20px;
        }
        .stat strong { display: block; font-size: 36px; margin-bottom: 4px; }
        .stat span { color: rgba(255,255,255,.84); font-size: 14px; }
        section { padding: 82px 0; }
        h2 { font-size: clamp(30px, 4vw, 44px); margin-bottom: 14px; color: #0b1c35; }
        .section-lead { max-width: 900px; font-size: 18px; }
        .services-grid {
            margin-top: 34px;
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px;
        }
        .service-card {
            background: var(--surface); border: 1px solid var(--line); border-radius: 14px;
            padding: 26px; min-height: 245px;
        }
        .service-card h3 { font-size: 22px; margin-bottom: 12px; color: #102444; }
        .service-card p { font-size: 15px; margin-bottom: 16px; }
        .service-card a { color: var(--brand-2); text-decoration: none; font-weight: 700; font-size: 14px; }
        .cta-band {
            background: linear-gradient(120deg, #0b1c35, #1d4a91);
            border-radius: 18px;
            color: #fff;
            padding: 42px;
            margin-top: 38px;
        }
        .cta-band h3 { font-size: clamp(26px, 3vw, 40px); margin-bottom: 12px; }
        .cta-band p { color: rgba(255,255,255,.86); max-width: 700px; margin-bottom: 18px; }
        .contact-wrap {
            display: grid; grid-template-columns: 1.05fr 1fr; gap: 28px; align-items: start;
        }
        .form-box {
            background: #fff; border: 1px solid var(--line); border-radius: 14px; padding: 24px;
        }
        .alert {
            margin-bottom: 16px; border-radius: 10px; padding: 12px 14px; font-size: 14px;
        }
        .alert-success { background: #ecfdf3; border: 1px solid #c7f0d7; color: #115e3b; }
        .alert-error { background: #fff1f1; border: 1px solid #f3cdcd; color: #8a1e1e; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .full { grid-column: 1 / -1; }
        label { display: block; margin-bottom: 6px; font-size: 13px; font-weight: 600; color: #253a58; }
        input, select, textarea {
            width: 100%; border: 1px solid #c8d4e6; border-radius: 10px;
            padding: 11px 12px; font: inherit; color: #10223f; background: #fff;
        }
        input:focus, select:focus, textarea:focus { outline: 2px solid #d4e1f5; border-color: #98b5e4; }
        textarea { min-height: 120px; resize: vertical; }
        .submit-btn { width: 100%; }
        .site-footer { background: #061124; color: #cad4e7; padding: 44px 0 30px; }
        .footer-grid {
            display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 18px;
        }
        .site-footer h4 { margin: 0 0 12px; color: #fff; font-size: 16px; }
        .site-footer a {
            display: inline-block; color: #c2cde0; text-decoration: none; margin-bottom: 7px; font-size: 14px;
        }
        .copyright {
            margin-top: 22px; padding-top: 14px;
            border-top: 1px solid #1c2c44; font-size: 13px; color: #8fa1bf;
        }
        @media (max-width: 1040px) {
            .services-grid { grid-template-columns: 1fr 1fr; }
            .contact-wrap, .footer-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 760px) {
            .nav-links { display: none; }
            .stats, .services-grid, .form-grid { grid-template-columns: 1fr; }
            .hero { padding-top: 72px; }
            .cta-band { padding: 28px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <div class="logo">Obscura-X Certification Consulting</div>
            <ul class="nav-links">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="#services">Our Process</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a class="btn btn-dark" href="#contact">Get Started</a>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="eyebrow" style="color:#ffd56c;">Schedule A Consultation</div>
            <h1>Guiding Businesses with Expertise, Compliance, and Confidence</h1>
            <p>End-to-end certification support that drives confidence and compliance. We guide your business through every stage of Obscura-X certification.</p>
            <div class="hero-actions">
                <a class="btn btn-light" href="#contact">Schedule Free Consultation</a>
                <a class="btn btn-dark" href="#services" style="background:#14325e;">Explore Certifications</a>
            </div>
            <div class="stats">
                <div class="stat"><strong>$1.2B+</strong><span>Value Proposition</span></div>
                <div class="stat"><strong>98%</strong><span>Certification Success</span></div>
                <div class="stat"><strong>25+</strong><span>Years in the Industry</span></div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="eyebrow">Our Company</div>
            <h2>What We Do</h2>
            <p class="section-lead">Obscura-X Certification Consulting is a trusted advisory firm dedicated to helping businesses navigate complex regulatory frameworks with clarity and precision. We provide strategic, end-to-end support from eligibility assessment and documentation through application submission and post-certification guidance.</p>
        </div>
    </section>

    <section id="services" style="padding-top:0;">
        <div class="container">
            <div class="eyebrow">Certification Categories Overview</div>
            <h2>Explore the Key Obscura-X Certification Programs We Specialize In</h2>
            <div class="services-grid">
                <article class="service-card">
                    <h3>Airport Concession Disadvantaged Business Enterprise (ACDBE)</h3>
                    <p>Comprehensive assistance for airport concessionaires, including eligibility assessment, documentation preparation, submission, and compliance support.</p>
                    <a href="#">Learn More</a>
                </article>
                <article class="service-card">
                    <h3>Disadvantaged Business Enterprise (DBE)</h3>
                    <p>Support for federal and state DBE pathways to improve qualification readiness and access transportation contracting opportunities.</p>
                    <a href="#">Learn More</a>
                </article>
                <article class="service-card">
                    <h3>Economically Disadvantaged Women-Owned Small Business (EDWOSB)</h3>
                    <p>Guided support for EDWOSB certification with clear eligibility checks, documentation standards, and compliant submissions.</p>
                    <a href="#">Learn More</a>
                </article>
                <article class="service-card">
                    <h3>Minority-Owned Business (MBE)</h3>
                    <p>Complete consulting support for MBE certification across federal, state, and local requirements to strengthen market positioning.</p>
                    <a href="#">Learn More</a>
                </article>
                <article class="service-card">
                    <h3>Service-Disabled Veteran-Owned Small Business (SDVOSB)</h3>
                    <p>End-to-end SDVOSB advisory for eligibility review, package preparation, and long-term compliance alignment.</p>
                    <a href="#">Learn More</a>
                </article>
                <article class="service-card">
                    <h3>Small Business Administration 8(a) Program</h3>
                    <p>Structured SBA 8(a) consulting to help eligible firms prepare strong applications and unlock federal growth opportunities.</p>
                    <a href="#">Learn More</a>
                </article>
            </div>
            <div class="cta-band">
                <h3>Navigate All Types of Certification with Confidence</h3>
                <p>Expert guidance from application to approval. We combine compliance precision with practical execution to keep your certification journey on track.</p>
                <div class="hero-actions">
                    <a class="btn btn-light" href="#contact">Request Help</a>
                    <a class="btn btn-dark" href="#services" style="background:rgba(255,255,255,.14); border-color:rgba(255,255,255,.2)">Explore More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-wrap">
            <div>
                <div class="eyebrow">Request Personalized Support</div>
                <h2>Request Help from Our Obscura-X Certification Experts</h2>
                <p class="section-lead">Share your business details and our team will contact you with clear next steps for your certification strategy.</p>
            </div>
            <form class="form-box" method="POST" action="{{ route('leads.store') }}">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-error">
                        Please fix the highlighted form fields and submit again.
                    </div>
                @endif
                <div class="form-grid">
                    <div>
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required>
                    </div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                    </div>
                    <div>
                        <label for="phone_number">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" value="{{ old('phone_number') }}" required>
                    </div>
                    <div class="full">
                        <label for="business_name">Business Name</label>
                        <input id="business_name" name="business_name" type="text" value="{{ old('business_name') }}" required>
                    </div>
                    <div class="full">
                        <label for="business_status">Current Business Status</label>
                        <select id="business_status" name="business_status" required>
                            <option value="">Select status</option>
                            <option value="Startup" @selected(old('business_status') === 'Startup')>Startup</option>
                            <option value="Growing" @selected(old('business_status') === 'Growing')>Growing</option>
                            <option value="Established" @selected(old('business_status') === 'Established')>Established</option>
                            <option value="Government Contractor" @selected(old('business_status') === 'Government Contractor')>Government Contractor</option>
                        </select>
                    </div>
                    <div class="full">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="full">
                        <button class="btn btn-dark submit-btn" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer id="resources" class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Obscura-X Certification Consulting</h4>
                    <p>We provide expert guidance, strategic insight, and end-to-end support for successful certification outcomes.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <a href="#">Home</a><br>
                    <a href="{{ route('about') }}">About Us</a><br>
                    <a href="#services">Our Process</a><br>
                    <a href="#contact">Contact</a>
                </div>
                <div>
                    <h4>Company</h4>
                    <a href="#">DCSS Certification</a><br>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Cookie Policy</a>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <a href="#">LinkedIn</a><br>
                    <a href="#">Facebook</a><br>
                    <a href="#">X (Twitter)</a>
                </div>
            </div>
            <div class="copyright">2026 Obscura-X Certification Consulting. All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>
