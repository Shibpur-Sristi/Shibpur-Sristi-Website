<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>

    <section class="contact-content sec-padding">
        <div class="container">
            <!--<div class="sec-title text-center">-->
            <!--	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknownto </p>-->
            <!--</div>-->
            <div class="row">
                <div class="col-md-8">
                    <h2>Contact Form</h2>
                    <form action="./includes/contact/mailcontactus.php" class="contact-form row" id="contact-page-contact-form">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-12"><button class="thm-btn" type="submit" id="submitContact">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2>Address</h2>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Address</h4>
                                <p>3/1, Nabin Senapati Ln, Naora, <br>Shibpur, Howrah, West Bengal <br>711101</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Phone</h4>
                                <p>+91 7980468589</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Email</h4>
                                <p>info@shibpursristi.org</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <p>&nbsp;</p>
            <div class="google-map" id="contact-page-google-map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.6971011540918!2d88.31937729681827!3d22.57803410782889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027826d9182413%3A0x858142bdf4e77ac1!2sShibpur%20Sristi!5e0!3m2!1sen!2sin!4v1612453843508!5m2!1sen!2sin"
                    width="100%" height="450" frameborder="0" allowfullscreen></iframe></div>

        </div>
    </section>

    <!--   <section class="sec-padding faq-home faq-page pt_90">-->
    <!--	<div class="container">-->
    <!--		<div class="row">-->
    <!--			<div class="col-md-10 col-md-push-1">-->
    <!--				<div class="accrodion-grp" data-grp-name="faq-accrodion">-->
    <!--					<div class="accrodion active">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Lorem ipsum dolor sit amet, an eripuit laboramus sententiae duo lorem sio?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Lorem ipsum dolor sit amet, eu est delectus theophrastus consectetuer, sanctus delectus?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Dorem ipsum dolor sit amet, an eripuit laboramus sententiae duo lorem sio?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Amet ipsum dolor sit amet, ius cu nonumy eripuit, sed legimus similique in, stet fiona lipsum?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Lorem ipsum dolor sit amet, purto cetero laoreet id cum, prompta facilisis?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Amet ipsum dolor sit amet, ius cu nonumy eripuit, sed legimus similique in, stet fiona lipsum?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Lorem ipsum dolor sit amet, purto cetero laoreet id cum, prompta facilisis?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="accrodion ">-->
    <!--						<div class="accrodion-title">-->
    <!--							<h4>-->
    <!--								<span class="decor">-->
    <!--									<span class="inner"></span>-->
    <!--								</span>-->
    <!--								<span class="text">Lorem ipsum dolor sit amet, an numquam lobortis mel, audire deleniti complectitur vix ex?</span>-->
    <!--							</h4>-->
    <!--						</div>-->
    <!--						<div class="accrodion-content">-->
    <!--							<p>Lorem ipsum dolor sit amet, ea vel quem nullam, adhuc vituperata mea ei, verear regione ornatus ius ut. Saperet adipisci forensibus quo at, eam in ridens nonumes. Placerat eleifend recteque ea mei, vim mazim meliore dissentiet ea. Qui ea suas utinam indoctum, ex usu ceteros comprehensam, labores facilisis</p>-->
    <!--							<p>eu mea. Adhuc mucius ancillae ut vix, pri id quod enim inciderint, ludus reformidans eam te. Nostro praesent inciderint pri eu, ea facilis facilisi cum, ancilla gloriatur id vim. No his accumsan suavitate, movet splendide philosophia at vim.Eu eum paulo salutatus. Eu ubique maiestatis sea, pri legimus fabellas ex, no inimicus lorem ipsum is a dummy text</p>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->
    <!--</section>-->


    <!--<section class="overlay-white sec-padding parallax-section">-->
    <!--	<div class="container">-->
    <!--		<div class="row">-->
    <!--			<div class="col-md-8 col-md-offset-2 promote-project text-center">-->
    <!--				<h3>Did not find your answer?</h3>-->
    <!--				<div class="sec-title colored text-center">-->
    <!--					<span class="decor">-->
    <!--						<span class="inner"></span>-->
    <!--					</span>-->
    <!--				</div>-->
    <!--				<h2>Just call for emergency service</h2>-->
    <!--				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>-->
    <!--				<a href="tel:+917980468589" class="thm-btn">Call Now</a>-->
    <!--                   <a href="membership.php" class="thm-btn inverse">Join Us</a>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->
    <!--</section>-->
    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

</body>

</html>