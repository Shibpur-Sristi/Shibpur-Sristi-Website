<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>
    
    <div class=container>
        <div class="row" style="margin-right: 0;">
            <div id="cover-donate" class="col col-sm-12 col-md-6">
                <img src="images/donate_cover.png" />
            </div>
            <div class="col col-sm-12 col-md-6" id="donate-btn">
                <h1>Donate for a cause</h1>
                <p>Sristi (সৃষ্টি) means creation, genesis. The very beginning of something. We dream of creating a society where the poor and the destitute will be able to fend for themselves and, most importantly, to sustain their very existence with dignity and be a part of the development along with others.</p>
               <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_LgnX6hroTklkVf" async> </script> </form>
            </div>
        </div>
    </div>

    <?php include './includes/testimonial.php'; ?>

    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    var donate = document.getElementById('header-donate');
    donate.style.display = 'none';
    </script>

</body>

</html>