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
                    <h2>Events</h2>
                    <!--<ul class="breadcumb">-->
                    <!--	<li><a href="index.html">Home</a></li>-->
                    <!--	<li><i class="fa fa-angle-right"></i></li>-->
                    <!--	<li><span>Events List</span></li>-->
                    <!--</ul>-->
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>





    <section class="event-feature sec-padding bg-color-fa pb_60">
        <div class="container" id="projects">
            <p>No Data Found</p>
            <!-- ======== Loading through JS ========= -->
        </div>
    </section>

    <?php #include 'landing_section.php';?>



    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    const setProjects = (projects) => {
        var template = '';
        projects.forEach(project => {
            template += `<div class="col-sm-6 col-md-4">
			<div class="event border-1px mb_30" style="height: 560px">
				<div class="row">
					<div class="col-sm-12">
						<div class="event-thumb">
							<div class="thumb">
								<center><img  src="${project.image}"></center>
							</div>

						</div>
					</div>
					<div class="col-sm-12">
						<div class="event-content p_20">
							<h4 class="event-title"><a href="#">${project.name}</a></h4>
							<ul class="event-held list-inline">
								<li class="text-555"><i class="fa fa-clock-o"></i> ${project.date}</li>
								<li class="text-555"> <i class="fa fa-map-marker"></i> ${project.location}</li>
							</ul>
							<p class="mb_20">${project.description}</p>
                            <a href="image.php?project=${project.name}" class="thm-btn btn-xs">
                                            See Images
                                        </a>
						</div>
					</div>
				</div>
			</div>
		</div>`;
        })

        return template;
    }

    doAjax('api/api_projects.php', 'GET', {
            project: 'Event'
        })
        .then(response => {
            var projects = JSON.parse(response).data;
            $('#projects').html(setProjects(projects));
        })
    </script>

</body>

</html>