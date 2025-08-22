<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azhary Academy - Online Quran & Islamic Studies</title>
  <meta name="description" content="Learn Quran recitation, tajweed, Arabic language, and Islamic studies online with native French-speaking teachers.">
  
  <!-- Critical CSS Inline - No external dependencies -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: #333;
      background: #fff;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    .header {
      background: #02256c;
      color: white;
      padding: 1rem 0;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }
    
    .header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }
    
    .nav {
      display: flex;
      gap: 2rem;
    }
    
    .nav a {
      color: white;
      text-decoration: none;
    }
    
    .hero {
      background: linear-gradient(135deg, #02256c 0%, #1e3a8a 100%);
      color: white;
      padding: 8rem 0 4rem;
      text-align: center;
    }
    
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }
    
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      opacity: 0.9;
    }
    
    .btn {
      display: inline-block;
      padding: 1rem 2rem;
      background: linear-gradient(135deg, #d4af37, #228b22);
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-weight: bold;
      transition: transform 0.3s ease;
    }
    
    .btn:hover {
      transform: translateY(-2px);
    }
    
    .section {
      padding: 4rem 0;
    }
    
    .section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 3rem;
      color: #02256c;
    }
    
    .courses {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    
    .course {
      background: white;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s ease;
    }
    
    .course:hover {
      transform: translateY(-5px);
    }
    
    .course h3 {
      color: #02256c;
      margin-bottom: 1rem;
    }
    
    .cta {
      background: linear-gradient(135deg, #1e3a8a 0%, #02256c 100%);
      color: white;
      text-align: center;
      padding: 4rem 0;
    }
    
    .footer {
      background: #f8f9fa;
      text-align: center;
      padding: 2rem 0;
      color: #666;
    }
    
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
      
      .nav {
        display: none;
      }
      
      .courses {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">Azhary Academy</div>
      <nav class="nav">
        <a href="#courses">Courses</a>
        <a href="/enroll">Enroll</a>
        <a href="/teachers">Teachers</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Welcome to Azhary Academy</h1>
      <p>Experience personalized Quran and Islamic education with native French-speaking teachers</p>
      <a href="/enroll" class="btn">Enroll Now</a>
    </div>
  </section>

  <section class="section" id="courses">
    <div class="container">
      <h2>Our Courses</h2>
      <div class="courses">
        <div class="course">
          <h3>Quran (Recitation, Tajweed & Memorization)</h3>
          <p>Comprehensive Quran learning program covering recitation, tajweed rules, and memorization techniques.</p>
          <a href="/courses/quran" class="btn">Learn More</a>
        </div>
        
        <div class="course">
          <h3>Arabic Language</h3>
          <p>Master the Arabic language with native speakers - from basic conversation to advanced grammar.</p>
          <a href="/courses/arabic" class="btn">Learn More</a>
        </div>
        
        <div class="course">
          <h3>Islamic Studies</h3>
          <p>Explore the fundamentals of Islam including Aqeedah, Fiqh, and Seerah.</p>
          <a href="/courses/islamic-studies" class="btn">Learn More</a>
        </div>
        
        <div class="course">
          <h3>Ijazah (Qur'an Certification)</h3>
          <p>Advanced program for those seeking formal authorization in Quran recitation.</p>
          <a href="/courses/ijazah" class="btn">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <h2>Ready to Start Your Quranic Journey?</h2>
      <p>Join thousands of students worldwide and begin your Islamic education today</p>
      <a href="/enroll" class="btn">Enroll Now</a>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} Azhary Academy. All rights reserved.</p>
    </div>
  </footer>

  <!-- Minimal JavaScript -->
  <script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  </script>
  
  <!-- Performance Monitor -->
  <script src="/performance-monitor.js"></script>
</body>
</html>
