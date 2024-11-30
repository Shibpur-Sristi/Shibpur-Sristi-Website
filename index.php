<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
</head>

<body>
    <!-- Loader -->
    <div id="loader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Navbar -->
    <?php include './includes/nav.php'; ?>

    <!-- Slider Image -->
    <?php include './includes/home/slider.php'; ?>

    <!-- Reference Section -->
    <section class="call-to-action">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="call-to-action-corner col-md-4" style="background-image: url(images/call-to-action/shikshan-bg.jpg);">
                    <a href="shikshan.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Shikshan_white.png" />
                            <p class="center">Education made available to the underprivileged.</p>
                        </div>
                    </a>
                </div>
                <div class="call-to-action-center col-md-4" style="background-image: url(images/call-to-action/paridhan-bg.jpg);">
                    <a href="paridhan.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Paridhan_white.png" />
                            <p class="center">Clothes for those living in rags.</p>
                        </div>
                    </a>
                </div>
                <div class="call-to-action-corner col-md-4" style="background-image: url(images/call-to-action/udvaban-bg.jpg);">
                    <a href="udvaban.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Udvaban_white.png" />
                            <p class="center">Trendy, thoughtful writings, snaps made digitally available to you.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Work -->
    <section class="recent-causes sec-padding">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Our Latest Work</h2>
                <p>Pure labour of love.</p>
                <span class="decor"><span class="inner"></span></span>
            </div>

            <div class="row" id="latest-work">
                <p>No Data Found</p>
                <!-- Data will be loaded here by JS -->
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <?php include './includes/home/timeline.php'; ?>

    <!-- Upcoming Event -->
    <?php include './includes/home/upcomings.php'; ?>

    <!-- Counter Section -->
    <section class="fact-counter-wrapper sec-padding parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 md-text-center">
                    <h2>We have served since <b>6 years</b> <br>to helpless children with trust and <br>we are happy</h2>
                    <a href="membership.php" class="thm-btn inverse m-btmm40" style="border:none;">Be a part of us</a>
                </div>
                <div class="col-lg-6 col-md-12 md-text-center">
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-shapes-2"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="70" data-speed="800" data-refresh-interval="50">70</span>
                        <p>Total Places</p>
                    </div>
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-people-3"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="6000" data-speed="800" data-refresh-interval="50">6000</span>
                        <p>Total Children</p>
                    </div>
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-hands"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="36" data-speed="800" data-refresh-interval="50">36</span>
                        <p>Total Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Landing Section -->
    <?php #include './includes/home/landing_section.php'; ?>

    <!-- Gallery -->
    <section class="gallery-section pb_2">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Gallery</h2>
                <p>Here's the moments that we have captured</p>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>

        <!--<div id="gallery-overview">
            <p>No Image Found...</p>
        </div>-->
    </section>

   <!-- <section class="footer-call-to-action" style="padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="text-center sm-text-center">
                    <a href="gallery.php" class="thm-btn inverse m-tops15">View Full Gallery</a>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Gallery Slider Section -->
    <section class="gallery-slider-section">
        <div class="container-fluid">
            <div id="gallery-slider" class="owl-carousel owl-theme">
                <!-- Images will be dynamically inserted here -->
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <?php include './includes/testimonial.php'; ?>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include './includes/scripts.php'; ?>

    <script>
        // Handle Loader Display
        function hideLoader() {
            document.getElementById('loader').style.display = 'none';
        }

        // Hide loader after 3 seconds
        setTimeout(hideLoader, 3000);

        // Optionally, hide loader earlier if content is fully loaded
        window.onload = hideLoader;

        // Function to populate the "Latest Works" section
        const setLatestWorks = (latestWorks) => {
            let template = '';
            latestWorks.forEach(project => {
                template += `<div class="col-sm-12 col-md-4 col-lg-4"> 
                    <div class="col-sm-12">
                        <div class="event border-1px mb_30">
                            <div class="causes sm-col5-center">
                                <div class="thumb">
                                    <img class="rounded-circle" alt="${project.name}" src="${project.image}" />
                                </div>
                                <div class="causes-details clearfix">
                                    <h4 class="title"><a href="#">${project.name}</a></h4>
                                    <p>${project.description.substring(0, 70)}...</p>
                                    <a href="paridhan.php" class="thm-btn btn-xs"><i class="fa fa-angle-double-right text-white"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
            });
            return template;
        }

        // Function to populate the "Gallery Overview" section
        const setGalleryOverview = (images) => {
            let template = '<div class="clearfix">';
            images.forEach((image, index) => {
                if (index % 4 === 0) {
                    template += `</div><div class="clearfix">`;
                }
                template += `<div class="image-box">
                    <div class="inner-box">
                        <figure class="image"><a href="${image.url}" class="lightbox-image"><img
                                    src="${image.url}" alt="" style="width:25vw; height:18vw"></a></figure>
                        <a href="${image.url}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
                    </div>
                </div>`;
            });
            template += `</div>`;
            return template;
        }

        // Fetch and display Latest Works
        doAjax('api/api_latestWork.php', 'GET', { limit: 3 })
            .then(response => {
                const latestWorks = JSON.parse(response).data;
                document.getElementById('latest-work').innerHTML = setLatestWorks(latestWorks);
            });

        // Fetch and display Gallery Images
        doAjax('api/api_galleryOverview.php', 'GET', {})
            .then(response => {
                const images = JSON.parse(response).data;
                document.getElementById('gallery-overview').innerHTML = setGalleryOverview(images);
            });
              // Function to initialize the gallery slider
     // Function to initialize the gallery slider
    function initializeGallerySlider(images) {
        const sliderContainer = document.getElementById('gallery-slider');
        let sliderContent = '';

        // Create slider items with lazy loading
        images.forEach(image => {
            sliderContent += `
                <div class="item">
                    <img 
                        class="lazy" 
                        data-src="${image.url}" 
                        alt="Gallery Image" 
                    />
                </div>`;
        });

        sliderContainer.innerHTML = sliderContent;

        // Initialize Owl Carousel
        $('#gallery-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            },
            onInitialized: () => {
                lazyLoadImages(); // Trigger lazy loading when slider initializes
            }
        });
    }

    // Lazy load images function
    function lazyLoadImages() {
        const lazyImages = document.querySelectorAll('img.lazy');
        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            },
            {
                rootMargin: '100px' // Start loading before the image enters the viewport
            }
        );

        lazyImages.forEach(img => observer.observe(img));
    }

    // Fetch gallery images and initialize the slider
    doAjax('api/api_gallery.php', 'GET', {})
        .then(response => {
            const images = JSON.parse(response).data;
            initializeGallerySlider(images);
        });
    </script>

    <style>
        /* Loader styles */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .loader-spinner {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 2s linear infinite;
        }
        /* Animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
         /* Slider styles */
    /* Slider styles */
    .gallery-slider-section {
        padding: 20px 0;
        background: #f9f9f9;
    }

    #gallery-slider .item {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 100%;
        max-width: 500px;
        height: 300px; /* Maintain a consistent height */
        border-radius: 10px;
        background: #ddd; /* Fallback background for loading */
    }

    #gallery-slider img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures image covers the container uniformly */
        transition: transform 0.3s ease;
    }

    #gallery-slider img:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
    }
    
            /* Scoped styles for owl-nav inside the gallery-slider-section */
    .gallery-slider-section .owl-theme .owl-nav {
        margin: 0; /* Override default */
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }
    
    .gallery-slider-section .owl-theme .owl-nav [class*=owl-] {
        background: rgba(0, 0, 0, 0.5) !important; /* Custom background */
        color: white !important; /* Custom text color */
        width: 40px;
        height: 40px;
        border: none; /* Remove the default border */
        font-size: 13px;
        border-radius: 50%;
        line-height: normal; /* Fix alignment for icons */
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 0;
    }
    
    .gallery-slider-section .owl-theme .owl-nav [class*=owl-]:hover {
        background: rgba(0, 0, 0, 0.8) !important; /* Custom hover background */
        color: white !important; /* Custom hover text color */
    }
    
    /* Responsive adjustments for mobile */
    @media (max-width: 768px) {
        .gallery-slider-section .owl-theme .owl-nav [class*=owl-] {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }
    }


    </style>

</body>

</html>
