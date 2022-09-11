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
                    <h2>Gallery</h2>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>


    <!--Gallery Section-->
    <section class="gallery-section full-width pb_2">
        <div class="auto-container">

            <!--Filter-->
            <!--<div class="filters">-->
            <!--	<ul class="filter-tabs style-one clearfix anim-3-all">-->
            <!--        <li class="filter" data-role="button" data-filter="all">All</li>-->
            <!--        <li class="filter" data-role="button" data-filter=".child">Child</li>-->
            <!--        <li class="filter" data-role="button" data-filter=".charity">Charity</li>-->
            <!--        <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>-->
            <!--        <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>-->
            <!--    </ul>-->
            <!--</div>-->

        </div>

        <div class="images-container" style="margin: 0 2rem;">
            <div class="filter-list clearfix">

                <div id="gallery">
                    <!--========== Loading through JS ==============  -->
                    <p>No Images Found...</p>
                </div>
            </div>
        </div>
    </section>


    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    const setGallery = (images) => {
        var template = '<div class="row">';

        for (var i = 0; i < images.length; i++) {
            if (i % 3 == 0) {
                template += `</div> <div class="row">`;
            }
            template += `<div class="col-md-4">
            <div class="thumbnail">
                <a href="${images[i].url}" target="_blank">
                    <img src="${images[i].url}" alt="Lights" style="width:100%;height:350px;">
                </a>
            </div>
        </div>`;
        }

        template += `</div>`;

        return template;
    }

    var urlParams = new URLSearchParams(window.location.search);
    var project = urlParams.get('project')

    doAjax('api/api_images.php', 'GET', {
            project: project
        })
        .then(response => {
            var images = JSON.parse(response).data;
            $('#gallery').html(setGallery(images));
            $('h2').html(project+" Gallery")
        })
    </script>

</body>

</html>