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
                <h1>Lorem Ipsum some text here</h1>
                <p>some text here</p>
                <form>
                    <script src="https://cdn.razorpay.com/static/widget/payment-button.js"
                        data-payment_button_id="pl_Fccy7n81nUQJSy"> </script>
                </form>
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