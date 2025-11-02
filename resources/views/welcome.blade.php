<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexis Dev Solution - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 25%, #312e81 50%, #1e1b4b 75%, #0f172a 100%);
            background-attachment: fixed;
            min-height: 100vh;
            position: relative;
        }

        /* Animated background elements */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 15s ease-in-out infinite;
        }

        .blob-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .blob-2 {
            width: 250px;
            height: 250px;
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            top: 50%;
            right: 10%;
            animation-delay: 2s;
        }

        .blob-3 {
            width: 280px;
            height: 280px;
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
            bottom: 10%;
            left: 50%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0);
            }
            33% {
                transform: translate(30px, -50px);
            }
            66% {
                transform: translate(-20px, 20px);
            }
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .coming-soon-container {
            text-align: center;
            max-width: 800px;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-section {
            margin-bottom: 40px;
        }

        .logo-icon {
            font-size: 60px;
            color: #a855f7;
            margin-bottom: 20px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .brand-title {
            font-size: 48px;
            font-weight: 800;
            background: linear-gradient(135deg, #a855f7 0%, #ec4899 50%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            letter-spacing: -1px;
        }

        .brand-subtitle {
            font-size: 20px;
            color: #cbd5e1;
            font-weight: 300;
            margin-bottom: 50px;
            letter-spacing: 0.5px;
        }

        .description {
            font-size: 18px;
            color: #e2e8f0;
            line-height: 1.8;
            margin-bottom: 50px;
            font-weight: 300;
        }

        /* Countdown Timer */
        .countdown-section {
            margin-bottom: 50px;
        }

        .countdown-label {
            font-size: 16px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .countdown-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 15px;
            margin-bottom: 40px;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            padding: 25px 15px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .countdown-item:hover {
            background: rgba(168, 85, 247, 0.15);
            border-color: rgba(168, 85, 247, 0.6);
            transform: translateY(-5px);
        }

        .countdown-number {
            font-size: 36px;
            font-weight: 700;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
        }

        .countdown-label-item {
            font-size: 12px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        /* Email Subscription */
        .subscription-section {
            margin-bottom: 50px;
        }

        .subscription-form {
            display: flex;
            gap: 10px;
            max-width: 500px;
            margin: 0 auto;
            flex-wrap: wrap;
            justify-content: center;
        }

        .subscription-form input {
            flex: 1;
            min-width: 200px;
            padding: 15px 20px;
            border: 1px solid rgba(168, 85, 247, 0.3);
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.08);
            color: #e2e8f0;
            font-size: 15px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .subscription-form input::placeholder {
            color: #94a3b8;
        }

        .subscription-form input:focus {
            outline: none;
            background: rgba(168, 85, 247, 0.15);
            border-color: #a855f7;
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.3);
        }

        .subscription-btn {
            padding: 15px 35px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            box-shadow: 0 8px 25px rgba(168, 85, 247, 0.3);
        }

        .subscription-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(168, 85, 247, 0.5);
        }

        .subscription-btn:active {
            transform: translateY(-1px);
        }

        .subscription-message {
            margin-top: 15px;
            font-size: 14px;
            color: #4ade80;
            opacity: 0;
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Features */
        .features-section {
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid rgba(168, 85, 247, 0.2);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .feature-item {
            padding: 25px 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(168, 85, 247, 0.2);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(168, 85, 247, 0.1);
            border-color: rgba(168, 85, 247, 0.5);
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 32px;
            color: #a855f7;
            margin-bottom: 12px;
        }

        .feature-title {
            font-size: 14px;
            color: #e2e8f0;
            font-weight: 600;
        }

        /* Social Links */
        .social-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(168, 85, 247, 0.2);
        }

        .social-links {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .social-link {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(168, 85, 247, 0.3);
            border-radius: 50%;
            color: #a855f7;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .social-link:hover {
            background: linear-gradient(135deg, #a855f7, #ec4899);
            border-color: transparent;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(168, 85, 247, 0.4);
        }

        /* Footer */
        .footer-section {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(168, 85, 247, 0.2);
            font-size: 13px;
            color: #64748b;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .brand-title {
                font-size: 36px;
            }

            .brand-subtitle {
                font-size: 16px;
            }

            .description {
                font-size: 15px;
            }

            .countdown-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .countdown-number {
                font-size: 28px;
            }

            .countdown-item {
                padding: 20px 10px;
            }

            .subscription-form {
                flex-direction: column;
            }

            .subscription-form input,
            .subscription-btn {
                width: 100%;
            }

            .features-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .brand-title {
                font-size: 28px;
            }

            .brand-subtitle {
                font-size: 14px;
                margin-bottom: 30px;
            }

            .description {
                font-size: 14px;
                margin-bottom: 30px;
            }

            .logo-icon {
                font-size: 45px;
            }

            .countdown-label {
                font-size: 13px;
                margin-bottom: 20px;
            }

            .countdown-number {
                font-size: 24px;
            }

            .countdown-label-item {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">
        <div class="coming-soon-container">
            <!-- Logo Section -->
            <div class="logo-section">
                <div class="logo-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h1 class="brand-title">Nexis Dev Solution</h1>
                <p class="brand-subtitle">Something Amazing is Coming</p>
            </div>

            <!-- Description -->
            <p class="description">
                We're building innovative solutions to transform your digital presence.
                Get ready for a revolutionary experience that will redefine industry standards.
            </p>

            <!-- Countdown Timer -->
            <div class="countdown-section">
                <div class="countdown-label">Launching In</div>
                <div class="countdown-container">
                    <div class="countdown-item">
                        <div class="countdown-number" id="days">60</div>
                        <div class="countdown-label-item">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="hours">00</div>
                        <div class="countdown-label-item">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="minutes">00</div>
                        <div class="countdown-label-item">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="seconds">00</div>
                        <div class="countdown-label-item">Seconds</div>
                    </div>
                </div>
            </div>



            <!-- Features -->
            <div class="features-section">
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-zap"></i>
                        </div>
                        <div class="feature-title">Fast & Reliable</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-title">Secure</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature-title">24/7 Support</div>
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <div class="footer-section">
                <p>&copy; 2025 Nexis Dev Solution. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Countdown Timer
        function updateCountdown() {
            const launchDate = new Date();
            launchDate.setDate(launchDate.getDate() + 60);

            const timer = setInterval(() => {
                const now = new Date();
                const diff = launchDate.getTime() - now.getTime();

                if (diff > 0) {
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                    const minutes = Math.floor((diff / 1000 / 60) % 60);
                    const seconds = Math.floor((diff / 1000) % 60);

                    document.getElementById('days').textContent = String(days).padStart(2, '0');
                    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
                } else {
                    clearInterval(timer);
                    document.getElementById('days').textContent = '00';
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    document.getElementById('seconds').textContent = '00';
                }
            }, 1000);
        }

        // Email Subscription Handler
        function handleSubscribe(event) {
            event.preventDefault();
            const emailInput = document.getElementById('emailInput');
            const message = document.getElementById('subscriptionMessage');

            if (emailInput.value) {
                message.style.display = 'block';
                emailInput.value = '';

                setTimeout(() => {
                    message.style.display = 'none';
                }, 3000);
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateCountdown();
        });
    </script>
</body>
</html>
