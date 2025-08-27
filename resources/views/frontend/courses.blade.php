{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Quality Education for All</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> --}}
@extends('layouts.app')
@section('content')

    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        } */

        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2c3e50;
        }
/*
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        /* header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        } */

        /* .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        } */

        /* .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-size: 24px;
            margin: 0;
            color: #3498db;
        } */

        /* .logo span {
            color: #2c3e50;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        } */

        /* nav ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #3498db;
        } */

        /* .nav-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .nav-btn:hover {
            background-color: #2980b9;
        } */ */

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1522881193457-37ae97c905bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: white;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background-color: white;
            color: #2c3e50;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #3498db;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #3498db;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Courses Section */
        .courses {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .course-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .course-img {
            height: 200px;
            overflow: hidden;
        }

        .course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .course-card:hover .course-img img {
            transform: scale(1.05);
        }

        .course-content {
            padding: 20px;
        }

        .course-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .course-price {
            font-weight: 600;
            color: #3498db;
            font-size: 1.2rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: white;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            position: relative;
        }

        .testimonial-card i {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            color: #3498db;
            opacity: 0.2;
        }

        .testimonial-content {
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .author-info p {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(rgba(52, 152, 219, 0.9), rgba(52, 152, 219, 0.9)), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .cta h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            color: white;
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: #3498db;
        }

        .footer-col p {
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-icons a:hover {
            background-color: #3498db;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            /* .header-container {
                flex-direction: column;
            }

            nav ul {
                margin-top: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }

            nav ul li {
                margin: 5px 10px;
            } */

            .hero h2 {
                font-size: 2rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 200px;
                text-align: center;
                margin-bottom: 10px;
            }
        }
    </style>
{{-- </head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <h1>Edu<span>Learn</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#" class="nav-btn">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header> --}}

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Quality Education for a Brighter Future</h2>
            <p>Discover our wide range of courses designed to help you achieve your academic and career goals with expert instructors and flexible learning options.</p>
            <div class="hero-btns">
                <a href="#" class="btn btn-primary">Explore Courses</a>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Expert Instructors</h3>
                    <p>Learn from industry professionals with years of teaching experience and real-world expertise.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Flexible Learning</h3>
                    <p>Study at your own pace with our online courses that fit your schedule and learning style.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certification</h3>
                    <p>Earn recognized certificates that boost your resume and career prospects upon completion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80" alt="Web Development">
                    </div>
                    <div class="course-content">
                        <h3>Web Development Bootcamp</h3>
                        <div class="course-info">
                            <span><i class="far fa-clock"></i> 12 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Advanced</span>
                        </div>
                        <p>Master HTML, CSS, JavaScript, and modern frameworks to build responsive websites.</p>
                        <div class="course-price">$199.99</div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" alt="Data Science">
                    </div>
                    <div class="course-content">
                        <h3>Data Science Fundamentals</h3>
                        <div class="course-info">
                            <span><i class="far fa-clock"></i> 10 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Intermediate</span>
                        </div>
                        <p>Learn data analysis, visualization, and machine learning techniques with Python.</p>
                        <div class="course-price">$179.99</div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Graphic Design">
                    </div>
                    <div class="course-content">
                        <h3>Graphic Design Mastery</h3>
                        <div class="course-info">
                            <span><i class="far fa-clock"></i> 8 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Beginner</span>
                        </div>
                        <p>Create stunning visuals and designs using industry-standard tools and techniques.</p>
                        <div class="course-price">$149.99</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Students Say</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-content">
                        <p>"The courses are well-structured and the instructors are knowledgeable. I've significantly improved my skills since joining EduLearn."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Web Development Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-content">
                        <p>"The flexibility of learning at my own pace while still getting support from instructors has been invaluable for my busy schedule."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>Data Science Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-content">
                        <p>"The practical projects and real-world examples helped me apply what I learned directly to my job. Highly recommended!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jessica Williams">
                        </div>
                        <div class="author-info">
                            <h4>Jessica Williams</h4>
                            <p>Graphic Design Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Start Your Learning Journey Today</h2>
            <p>Join thousands of students who have transformed their careers with our courses. Get started now and take the first step toward achieving your goals.</p>
            <a href="#" class="btn btn-secondary">Enroll Now</a>
        </div>
    </section>

    @endsection



    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation to feature cards on scroll
            const featureCards = document.querySelectorAll('.feature-card');

            function checkScroll() {
                featureCards.forEach(card => {
                    const cardPosition = card.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if(cardPosition < screenPosition) {
                        card.style.opacity = 1;
                        card.style.transform = 'translateY(0)';
                    }
                });
            }

            // Set initial state for animation
            featureCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });

            window.addEventListener('scroll', checkScroll);
            checkScroll(); // Check on initial load
        });
    </script>
</body>
</html>
