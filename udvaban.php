<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>

    <!--section featured big image-->

    <section class="event-feature bg-color-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="border-1px">
                        <div class="mb_30">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="thumb">
                                        <img class="full-width" src="images/udvaban_cover.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="row">

                                <div class="col-xs-11">
                                    <div class="event-content p_20 pt_0">
                                        <h3 class="event-title"><a href="#">উদ্ভাবন ডিজিটাল পত্রিকা</a></h3>
                                        <p class="mb_20">দেখতে দেখতে আমরা পৌঁছে গেলাম আমাদের দ্বিতীয় বর্ষের পুজো
                                            সংখ্যায়। ২০২০ সালের ৮ ই মার্চ আমাদের যাত্রা শুরু হয় । বহু প্রতিকূলতাকে
                                            পেরিয়েও আমাদের প্রচেষ্টা কোনো অংশেই থেমে থাকে নি । সেটা কোভিড হোক কী আম্ফান
                                            , ভরাকোটাল হোক কী ইয়াস । প্রত্যেকটি বাঁধা পেরিয়ে সৃষ্টি যেমন তার কাজ এগিয়ে
                                            নিয়ে গেছে তেমনই থেমে থাকে নি উদ্ভাবন এর প্রচেষ্টাও । শুধু উদ্ভাবনই নয়
                                            মানুষের পাশে দাঁড়ানোর প্রচেষ্টায় দৃঢ় প্রতিজ্ঞ সৃষ্টি । সেই অজ্ঞীকার স্বরূপ
                                            এবছর শালবনিতে কিছু বাচ্চার মুখে পুজোয় নতুন জামা তুলে দিতে সচেষ্ট হচ্ছি আমরা
                                            । এবার আসি পত্রিকার কথায় । এবারের পত্রিকায় আমরা বাঁধাধরা কোনো বিষয় না রাখলেও
                                            এটি পুজো সংখ্যা বলে পুজোকে উপলক্ষ্য করেই এই বারের সংখ্যাকে আমরা আপনাদের কাছে
                                            উপস্থাপিত করতে পেরেছি । যেসব শুভাকাঙ্ক্ষী বন্ধুরা আমাদের উদ্ভাবন এগিয়ে নিয়ে
                                            যেতে বরাবর আমাদের সাহায্য করে এসেছেন এবং যারা তাদের লেখা,  আঁকা, ছবি , কবিতা
                                            আমাদের পাঠিয়ে পত্রিকাকে সমৃদ্ধ করে যাচ্ছেন তাদের আবারও জানাই আন্তরিক ধন্যবাদ
                                            । সবকিছুর শেষে এটাই বলার কোভিড কিছুটা কমলেও এখানে কোভিডমুক্ত আমরা হই নি ।
                                            তাই নিজেদের সুরক্ষা নিজেদেরকেই দেখতে হবে । মাস্ক পড়ুন,  হাত পরিস্কার রাখুন ,
                                            জমায়েত এড়িয়ে চলুন,  সুস্থ ভাবে কোভিডের কথা মাথায় রেখে পুজো উপভোগ করুন । </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--end section featured big image-->
    <section class="blog-home blog-page blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.yumpu.com/xx/embed/view/6xyu7mVqolSiwPZf" frameborder="1"
                        allowfullscreen="true" allowtransparency="true" style="height: 80vh; width: 60vw;"
                        id="current_mag"></iframe>
                </div>

                <div class="col-md-2 pull-right" style="margin: 40vh 0;" id="download-curr">
                    <a href="#" class="thm-btn" id="download-curr-btn">Download PDF</a></p>
                </div>
            </div>
    </section>

    <section class="sec-padding faq-home">
        <div class="container">
            <hr style="margin-bottom: 20px;">
            <div class="row" id="prev-magazine">

                <!-- ========= Previous Magazines by JS =========== -->

            </div>

        </div>
    </section>


    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    $('document').ready(function() {

        /* ============================================ Getting Template ============================================ */
        function getTemplate(magazine) {

            var template =
                `<div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="magazine-card">
                        <img src="${magazine.display_cover}" alt="" width="60%" />
                        <div style="margin: auto 15px;">
                            <h5>${magazine.date}</h5>
                            <a href="${magazine.link}" class="thm-btn" style="padding: 5px 15px;">Download</a>
                        </div>
                    </div>
                </div>`;

            return template;
        }

        /* ============================================ Sorting by Date ============================================ */
        function GetSortOrder(prop) {
            return function(a, b) {
                if (a[prop] < b[prop]) {
                    return 1;
                } else if (a[prop] > b[prop]) {
                    return -1;
                }
                return 0;
            }
        }

        var html = '';

        fetch('./json/magazine_issue.json')
            .then(response => response.json())
            .then(data => {

                var download_curr_btn = document.getElementById('download-curr-btn');
                download_curr_btn.href = data.curr_issue.mag_link;

                var prev_issue = data.prev_issue;
                prev_issue.sort(GetSortOrder("issue_no"));

                //console.log(prev_issue);
                prev_issue.forEach(function(magazine) {
                    html += getTemplate(magazine);
                });
                //console.log(html);
                $('#prev-magazine').append(html);
            })
    });
    </script>


</body>

</html>