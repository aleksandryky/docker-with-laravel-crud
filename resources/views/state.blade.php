<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Certifications | Obscura-X Certification Consulting</title>
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
        .nav { min-height: 80px; display: flex; align-items: center; justify-content: space-between; gap: 20px; }
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
        .hero h1 {
            margin: 0;
            font-size: clamp(34px, 5vw, 62px);
            line-height: 1.14;
            letter-spacing: -.02em;
            max-width: 820px;
        }
        .hero p {
            margin: 14px 0 0;
            color: rgba(255,255,255,.84);
            max-width: 860px;
            font-size: 18px;
        }
        section { padding: 78px 0; }
        h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.16;
            letter-spacing: -.02em;
            color: #0c1f3a;
        }
        .eyebrow {
            color: var(--brand-2);
            text-transform: uppercase;
            letter-spacing: .09em;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        p { margin: 0; color: var(--ink-soft); }
        .cards {
            margin-top: 24px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 18px;
            font-weight: 600;
            color: #132a4d;
        }
        .state-grid {
            margin-top: 24px;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px 16px;
        }
        .state-item {
            font-size: 14px;
            color: #1d3356;
            padding: 6px 0;
            border-bottom: 1px dashed #d8e1ef;
        }
        .state-item:nth-last-child(-n+4) { border-bottom: 0; }
        .content-panel {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 26px;
        }
        .content-panel p { margin-bottom: 14px; }
        .contact-wrap {
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 28px;
            align-items: start;
        }
        .form-box {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 24px;
        }
        .alert { margin-bottom: 16px; border-radius: 10px; padding: 12px 14px; font-size: 14px; }
        .alert-success { background: #ecfdf3; border: 1px solid #c7f0d7; color: #115e3b; }
        .alert-error { background: #fff1f1; border: 1px solid #f3cdcd; color: #8a1e1e; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .full { grid-column: 1 / -1; }
        label { display: block; margin-bottom: 6px; font-size: 13px; font-weight: 600; color: #253a58; }
        input, select, textarea {
            width: 100%;
            border: 1px solid #c8d4e6;
            border-radius: 10px;
            padding: 11px 12px;
            font: inherit;
            color: #10223f;
            background: #fff;
        }
        textarea { min-height: 120px; resize: vertical; }
        .submit-btn { width: 100%; }
        .site-footer { background: #061124; color: #cad4e7; padding: 44px 0 30px; }
        .footer-grid { display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 18px; }
        .site-footer h4 { margin: 0 0 12px; color: #fff; font-size: 16px; }
        .site-footer a { display: inline-block; color: #c2cde0; text-decoration: none; margin-bottom: 7px; font-size: 14px; }
        .copyright { margin-top: 22px; padding-top: 14px; border-top: 1px solid #1c2c44; font-size: 13px; color: #8fa1bf; }
        @media (max-width: 1040px) {
            .cards, .state-grid, .contact-wrap, .footer-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 760px) {
            .nav-links { display: none; }
            .hero { padding-top: 70px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <div class="logo">Obscura-X Certification Consulting</div>
            <ul class="nav-links">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ url('/#services') }}">Certification</a></li>
                <li><a href="{{ route('state') }}">State</a></li>
                <li><a href="{{ url('/#services') }}">Our Services</a></li>
                <li><a href="{{ url('/#contact') }}">Contact Us</a></li>
            </ul>
            <a class="btn btn-dark" href="{{ url('/#contact') }}">Schedule A Consultation</a>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>State Certifications</h1>
            <p>We help you identify the most relevant certifications, prepare accurate documentation, and successfully secure the right credentials to strengthen and grow your business.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="eyebrow">State-Recognized Certifications</div>
            <h2>Certified & Government-Validated Programs</h2>
            <div class="cards">
                <div class="card">DBE - Disadvantaged Business Enterprise</div>
                <div class="card">MBE - Minority Business Enterprise</div>
                <div class="card">WBE - Women Business Enterprise</div>
                <div class="card">MBE/WBE - Minority Women Business Enterprise</div>
                <div class="card">DOBE - Disability Owned Business Enterprise</div>
                <div class="card">SBE - Small Business Enterprise</div>
                <div class="card">VOSB/SDVOSB - Veteran Owned / Service Disabled Veteran Owned</div>
                <div class="card">Small Business Programs</div>
            </div>
        </div>
    </section>

    <section style="padding-top:0;">
        <div class="container">
            <div class="eyebrow">Specific State Information</div>
            <h2>State Certifications for Government & Corporate Contracts</h2>
            <div class="state-grid">
                <div class="state-item">Alabama</div><div class="state-item">North Carolina</div><div class="state-item">Oregon</div><div class="state-item">Alaska</div>
                <div class="state-item">North Dakota</div><div class="state-item">Pennsylvania</div><div class="state-item">Arizona</div><div class="state-item">Ohio</div>
                <div class="state-item">Rhode Island</div><div class="state-item">Arkansas</div><div class="state-item">Hawaii</div><div class="state-item">South Carolina</div>
                <div class="state-item">California</div><div class="state-item">Idaho</div><div class="state-item">South Dakota</div><div class="state-item">Colorado</div>
                <div class="state-item">Illinois</div><div class="state-item">Tennessee</div><div class="state-item">Connecticut</div><div class="state-item">Indiana</div>
                <div class="state-item">Texas</div><div class="state-item">Delaware</div><div class="state-item">Iowa</div><div class="state-item">Utah</div>
                <div class="state-item">Florida</div><div class="state-item">Kansas</div><div class="state-item">Vermont</div><div class="state-item">Georgia</div>
                <div class="state-item">Kentucky</div><div class="state-item">Virginia</div><div class="state-item">Montana</div><div class="state-item">Louisiana</div>
                <div class="state-item">Washington</div><div class="state-item">Nebraska</div><div class="state-item">Maine</div><div class="state-item">West Virginia</div>
                <div class="state-item">Nevada</div><div class="state-item">Maryland</div><div class="state-item">Mississippi</div><div class="state-item">New Hampshire</div>
                <div class="state-item">Massachusetts</div><div class="state-item">Missouri</div><div class="state-item">New Jersey</div><div class="state-item">Michigan</div>
                <div class="state-item">Wisconsin</div><div class="state-item">New Mexico</div><div class="state-item">Minnesota</div><div class="state-item">Wyoming</div>
                <div class="state-item">New York</div><div class="state-item">Oklahoma</div>
            </div>
        </div>
    </section>

    <section style="padding-top:0;">
        <div class="container">
            <div class="eyebrow">Contract Opportunities</div>
            <h2>Business Certification for Contract Growth</h2>
            <div class="content-panel">
                <p>For many small businesses aiming to expand operations, local, city, county, and state government contracts can provide a stable and reliable income source, especially during uncertain economic conditions. However, contract awards are highly competitive and opportunities are often available only for short windows.</p>
                <p>Obtaining the appropriate business certifications helps your company access more government and corporate opportunities. Certification provides a recognized and respected status that strengthens trust and makes your business stand out in a competitive marketplace.</p>
                <p>Many owners seek ways to win bids without lowering pricing and shrinking margins. One of the strongest strategies is earning city, county, or state certification. These programs verify that a business is genuinely owned, managed, and operated by individuals in categories agencies are actively supporting.</p>
                <a class="btn btn-dark" href="#contact">Request Help</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact-wrap">
            <div>
                <div class="eyebrow">Request Personalized Support</div>
                <h2>Request Support from Our Obscura-X Certification Experts</h2>
                <p>Expert support at every step of your certification journey.</p>
            </div>
            <form class="form-box" method="POST" action="{{ route('leads.store') }}">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-error">Please fix the highlighted fields and submit again.</div>
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
                    <a href="{{ url('/#services') }}">Our Services</a><br>
                    <a href="{{ url('/#contact') }}">Contact</a>
                </div>
                <div>
                    <h4>Company</h4>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Cookie Policy</a>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <a href="#">Facebook</a><br>
                    <a href="#">Instagram</a><br>
                    <a href="#">LinkedIn</a><br>
                    <a href="#">X (Twitter)</a><br>
                    <a href="#">YouTube</a>
                </div>
            </div>
            <div class="copyright">2026 Obscura-X Certification Consulting. All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>
