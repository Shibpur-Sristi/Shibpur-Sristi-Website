<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>

    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>PARIDHAN</h2>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>


    <section class="event-feature sec-padding bg-color-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="featured-causes">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="thumb">
                                    <img class="full-width" src="images/paridhan-cover.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="causes-details clearfix p_30">

                                    <h2 class="text-black mb_20">Adequate clothing for those living in rags.</h2>
                                    <p class="font-16">Clothing is one of the most important human needs. According to
                                        'Maslow's Hierarchy 'clothing is a physiological need, that is mandatory for
                                        every human being to live. The right to adequate clothing, or the right to
                                        clothing, is recognized as a human right in various international human rights
                                        instruments; this, together with the right to food and the right to housing, are
                                        parts of the right to an adequate standard of living as recognized under Article
                                        11 of the International Covenant on Economic, Social and Cultural Rights
                                        (ICESCR). The right to clothing is similarly recognized under Article 25 of the
                                        Universal Declaration of Human Rights (UDHR).</p>
                                    <div class="row mt_30">
                                        <div class="col-sm-5">
                                            <p class="font-16 mt_5">There are millions of children in our country who
                                                doesn't have access to adequate clothing. In rural areas kids doesn't
                                                get enough clothes during winter which causes fever and cold, sometimes
                                                death. Slums are also heavily affected in winter season, and lack of
                                                warm clothes made things worst for them.</p>
                                        </div>
                                        <div class="col-sm-7 brder-left-3">
                                            <p class="p-title font-16 mt_15"> ”Paridhan” means “Vastra” in Sanskrit
                                                which in english is “clothing”. We started distributing clothes among
                                                slum kids back in 2015. Back then we don't have any kind of brand name
                                                or proper initiative, but in 2016 we decided to make a brand out of it.
                                                Thus we started the initiative under the brand name of “Paridhan”.Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit. Nam harum corrupti
                                                assumenda sunt eaque, praesentium quod incidunt consequuntur dolorem
                                                maiores, neque mollitia perferendis unde.</p>
                                        </div>
                                    </div>
                                    <div class="pull-left">
                                        <a class="thm-btn btn-xs" href="donate.php">Donate Now</a>
                                    </div>
                                    <div class="pull-right">
                                        <h6>Help us by share:</h6>
                                        <ul class="social">
                                            <li><a href="https://www.facebook.com/shibpursristi" target="_blank"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/shibpursristi14" target="_blank"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/shibpursristi/" target="_blank"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCLhhn_H9iWcwSTI4MalAa-w"
                                                    target="_blank"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/shibpur-sristi/"
                                                    target="_blank"><i class="fa fa-linkedin"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-padding about-content full-sec">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12">
                    <div class="full-sec-content">
                        <div class="sec-title style-two">
                            <h2>How We Work</h2>
                            <span class="decor">
                                <span class="inner"></span>
                            </span>
                        </div>

                        <p>A detailed survey report about their condition of clothing, their needs, economic conditions
                            etc will be made. The overall survey report will be a key document for us and other
                            organizations to understand the overall scenario and we will also suggest organizations to
                            act accordingly. We also have decided that, we will visit them twice or more in a year to
                            make sure that their condition is uplifting on a subsequent basis. We may not be able to
                            solve the overall problem but at least some of them will surely be benefitted, as our
                            continuous support and encouragement will always be with them.</p>
                        <br>
                        <!--<a href="about.php" class="thm-btn">Read More</a>-->
                    </div><br><br>
                </div>
                <div class="col-md-7 hidden-md text-right">
                    <img src="images/hww-paridhan.jpg" alt="Awesome Image" />
                </div>
            </div>
        </div>
    </section>

    <!--landing-->

    <?php //include 'landing_section.php';?>
    <!--landing-->

    <!--dynamic div start-->
    <!--slider-->

    <!--list-->
    <section class="event-feature sec-padding bg-color-fa pb_60">
        <div class="container" id="projects">
            <p>No Data Found</p>
            <!-- ======== Loading through JS ========= -->
        </div>
    </section>
    <!--dynamic div end-->

    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    const setProjects = (projects) => {
        var template = '';
        projects.forEach(project => {
            template += `<div class="row">
                <div class="col-sm-12">
                    <div class="event border-1px mb_30">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="event-thumb">
                                    <div class="thumb">

                                        <center><img  src="${project.image}"></center>
                                        <!--<img class="full-width" src="<?php #echo $imageURL;?>" alt="image_not_found">-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="event-content p_20 pl_0">
                                    <h3 class="event-title"><a href="#">${project.name}</a></h3>
                                    <ul class="event-held list-inline font-13 mb_20">
                                        <li class="text-555"><i class="fa fa-clock-o"></i> ${project.date}</li>
                                        <li class="text-555"> <i class="fa fa-map-marker"></i> ${project.location}</li>
                                    </ul>
                                    <p class="mb_20"> ${project.description}</p>
                                        <a href="image.php?project=${project.name}" class="thm-btn btn-xs">
                                            See Images
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        })

        return template;
    }

    doAjax('api/api_projects.php', 'GET', {
            project: 'Paridhan'
        })
        .then(response => {
            var projects = JSON.parse(response).data;
            $('#projects').html(setProjects(projects));
        })
    </script>

</body>

</html>