<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>

    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style scoped>
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

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Gallery Section styles */
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
            height: 300px;
            border-radius: 10px;
            background: #ddd;
        }

        #gallery-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        #gallery-slider img:hover {
            transform: scale(1.05);
        }

        .gallery-slider-section .owl-theme .owl-nav {
            margin: 0;
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .gallery-slider-section .owl-theme .owl-nav [class*=owl-] {
            background: rgba(0, 0, 0, 0.5) !important;
            color: white !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .gallery-slider-section .owl-theme .owl-nav [class*=owl-]:hover {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        @media (max-width: 768px) {
            .gallery-slider-section .owl-theme .owl-nav [class*=owl-] {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'; ?>

    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>Gallery</h2>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-slider-section">
        <div class="container">
            <div id="loader" style="display: none;">
                <div class="loader-spinner"></div>
            </div>
            <div id="gallery-slider" class="owl-carousel owl-theme">
                <!-- Dynamic content will be injected here -->
            </div>
        </div>
    </section>

    <?php include './includes/footer.php'; ?>
    <?php include './includes/scripts.php'; ?>

    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        // Initialize Gallery Slider
        function initializeGallerySlider(images) {
            const sliderContainer = document.getElementById('gallery-slider');
            const sliderContent = images.map(image => `
                <div class="item">
                    <img 
                        class="lazy" 
                        data-src="${image.url}" 
                        alt="Gallery Image" 
                    />
                </div>`).join('');
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
                    0: { items: 1 },
                    768: { items: 2 },
                    1024: { items: 3 }
                },
                onInitialized: lazyLoadImages
            });
        }

        // Lazy Load Images
        function lazyLoadImages() {
            const lazyImages = document.querySelectorAll('img.lazy');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            }, { rootMargin: '100px' });

            lazyImages.forEach(img => observer.observe(img));
        }

        // Fetch Gallery Images
        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const project = urlParams.get('project') || "Default";
            document.querySelector('h2').textContent = `${project} Gallery`;

            // Show loader
            document.getElementById('loader').style.display = 'flex';

            doAjax('api/api_images.php', 'GET', { project: project })
                .then(response => {
                    const images = JSON.parse(response).data;
                    document.getElementById('loader').style.display = 'none';
                    if (images.length) {
                        initializeGallerySlider(images);
                    } else {
                        document.getElementById('gallery-slider').innerHTML = '<p>No Images Found...</p>';
                    }
                })
                .catch(error => {
                    console.error("Error loading images:", error);
                    document.getElementById('loader').style.display = 'none';
                    document.getElementById('gallery-slider').innerHTML = '<p>Error loading images. Please try again later.</p>';
                });
        });
    </script>
</body>

</html>
