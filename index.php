<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>
    <!--Slider Image-->
    <?php include './includes/home/slider.php'?>

    <!--reference-->
    <section class="call-to-action">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="call-to-action-corner col-md-4"
                    style="background-image: url(images/call-to-action/shikshan-bg.jpg);">
                    <a href="shikshan.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Shikshan_white.png" />
                            <!--<h3>Shikshan</h3>-->
                            <p class="center">Education made available to the underprivileged. </p>
                            <!--<a href="shikshan.php" class="thm-btn inverse">Read More</a>-->
                        </div>
                    </a>
                </div>
                <div class="call-to-action-center col-md-4"
                    style="background-image: url(images/call-to-action/paridhan-bg.jpg);">
                    <a href="paridhan.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Paridhan_white.png" />
                            <!--<h3>Paridhan</h3>-->
                            <p class="center">Clothes for those living in rags.</p>
                            <!--<a href="paridhan.php" class="thm-btn inverse">Read More</a>-->
                        </div>
                    </a>
                </div>
                <div class="call-to-action-corner col-md-4"
                    style="background-image: url(images/call-to-action/udvaban-bg.jpg);">
                    <a href="/udvaban.php" class="single-call-to-action">
                        <div class="content-box">
                            <img src="images/call-to-action/Udvaban_white.png" />
                            <!--<h3>Udvaban</h3>-->
                            <p class="center">Trendy, thoughtful writings, snaps made digitally available to you. </p>
                            <!--<a href="event.php" class="thm-btn inverse">Read More</a>-->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!--Latest work-->
    <section class="recent-causes sec-padding">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Our Latest work</h2>
                <p>Pure labour of love. </p>
                <span class="decor"><span class="inner"></span></span>
            </div>


            <div class="row" id="latest-work">
                <p>No Data Found</p>
                <!-- ========= Loading through JS ========== -->
            </div>
        </div>
    </section>


    <!--Timeline-->
    <?php include './includes/home/timeline.php'?>


    <!--Upcoming Event-->
    <?php include './includes/home/upcomings.php'?>


    <!--counter-->
    <section class="fact-counter-wrapper sec-padding parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 md-text-center">
                    <h2>We are served since <b>6 years</b> <br>to helpless children with trust and <br>we are happy</h2>
                    <a href="membership.php" class="thm-btn inverse m-btmm40" style="border:none;">Be a part of us</a>
                </div>
                <div class="col-lg-6 col-md-12 md-text-center">
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-shapes-2"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="70" data-speed="800"
                            data-refresh-interval="50">70</span>
                        <p>Total Places</p>
                    </div>
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-people-3"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="6000" data-speed="800"
                            data-refresh-interval="50">6000</span>
                        <p>Total Children</p>
                    </div>
                    <div class="single-fact">
                        <div class="icon-box">
                            <i class="flaticon-hands"></i>
                        </div>
                        <span class="timer" data-from="10" data-to="36" data-speed="800"
                            data-refresh-interval="50">36</span>
                        <p>Total Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--landing-->

    <?php include './includes/home/landing_section.php'; ?>
    <!--landing-->

    <!-- Gallery -->
    <section class="gallery-section pb_2">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Gallery</h2>
                <p>Here's the moments that we have captured</p>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>

        <div id="gallery-overview">
            <p>No Image Found...</p>
            <!-- ======= Loading through JS ======= -->
        </div>

    </section>


    <section class="footer-call-to-action" style="padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="text-center sm-text-center">
                    <a href="gallery.php" class="thm-btn inverse m-tops15">View Full Gallery</a>
                </div>
            </div>
        </div>
    </section>


    <?php include './includes/testimonial.php'; ?>

    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    const setLatestWorks = (latestWorks) => {
        var template = '';
        latestWorks.forEach(project => {
            template += `<div class="col-sm-12 col-md-4 col-lg-4"> 
                    <div class="col-sm-12">
                        <div class="event border-1px mb_30">
                            <div class="causes sm-col5-center">
                                <div class="thumb">
                                    <img class="rounded-circle" alt="" src="${project.image}" alt="">
                                    <div class="donate-piechart">
                                        <div class="piechart-block">

                                        </div>
                                    </div>
                                </div>

                                <div class="causes-details clearfix">
                                    <h4 class="title"><a href="">${project.name}</a></h4>
                                    <ul class="about-causes list-inline clearfix">

                                    </ul>
                                    <p>${project.description.substring(0,70)}</p>


                                    <div>

                                        <form action="image.php" method="post"><input id="prodId" name="prj_name"
                                                type="hidden" value="${project.name}">
                                            <a href="paridhan.php" class="thm-btn btn-xs"><i
                                                    class="fa fa-angle-double-right text-white"></i> Read More</a>
                                            <a>
                                                <button type="submit" class="thm-btn inverse btn-xs" name="submit">View
                                                    More
                                                    Images</button>
                                        </form></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
        })

        return template;
    }

    const setGalleryOverview = (images) => {
        var template = '<div class="clearfix">';

        for (var i = 0; i < images.length; i++) {
            if (i % 4 == 0) {
                template += `</div><div class="clearfix">`;
            }
            template += `<div class="image-box">
                <div class="inner-box">
                    <figure class="image"><a href="${images[i].url}" class="lightbox-image"><img
                                src="${images[i].url}" alt="" style="width:25vw; height:18vw"></a></figure>
                    <a href="${images[i].url}" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-dot-circle-o"></span></a>
                </div>
            </div>`;
        }

        template += `</div>`;

        return template;
    }

    doAjax('api/api_latestWork.php', 'GET', {
            limit: 3
        })
        .then(response => {
            var latestWorks = JSON.parse(response).data;
            $('#latest-work').html(setLatestWorks(latestWorks));
        })

    doAjax('api/api_galleryOverview.php', 'GET', {})
        .then(response => {
            var images = JSON.parse(response).data;
            $('#gallery-overview').html(setGalleryOverview(images));
        })
    </script>

</body>

</html>