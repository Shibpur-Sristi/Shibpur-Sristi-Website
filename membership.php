<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'?>
</head>

<body>
    <!-- Navbar -->
    <?php include './includes/nav.php'?>

    <section style="padding: 2rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center" style="margin-bottom: 0;">
                    <h2>Volunteership</h2>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-content">
        <div class="container">
            <div id="membership-rules">
                <div class="sec-title">
                    <h3>Rules & Regulations</h3>
                    <ol id="rules-regulations">
                        <li> He/She should follow all the rules and regulations as written in Organization's Article of
                            Association.</li>
                        <li> He/She must abide by the project heads, Sub-Committee or Core committee's decision during
                            the time of the project.</li>
                        <li> He/She do not have any kind of voting rights during AGM (Annual General Meeting) , but
                            his/her views towards the betterment of the organization will be welcomed</li>
                        <li> He/She have to pay Rs.20 per month as subscription. Bills will be issued accordingly. In
                            case
                            of
                            12 months due He/She will be charged extra Rs.50 as late fine.</li>
                        <li> He/She have to visit our office at least twice a month.</li>
                        <li> He/She needs to be present at least half of the total projects assigned to him / her during
                            the
                            fiscal year.</li>
                        <li> Certificates will be provided on AGM (Annual General Meeting) based on their performance.
                        </li>
                        <li> He/She will get an identity card along with the volunteer-ship acceptance letter.</li>
                        <li> He/She have to renew his / her volunteer-ship after every Two years. Renewal will be free
                            of
                            cost.</li>
                        <li> He/She will be informed much before about all our projects.</li>
                        <li> His / Her cooperation is highly solicited.</li>
                        <li> If He/She violate any of the organization's rule core committee will take immediate action
                            and
                            that decision will be final.</li>
                    </ol>
                </div>

                <div class="center">
                    <button class="thm-btn" type="submit" onclick="functionChange()">Accept & Continue</button>
                </div>
                <p>&nbsp;</p>
            </div>

			<!-- === Form === -->
            <div id="membership-form-area" style="display: none">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Membership Form</h2>
                        <form action="./includes/membership/add_member.php" method="post" class="contact-form row" id="membership-form"
                            enctype="multipart/form-data">
                            <div class="col-md-6">
                                <h3>Personal & Contact Details</h3>
                                <input type="text" name="name" placeholder="Name">
                                <div id="gender-option" aria-required="true">
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">Female</label><br>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Other</label>
                                </div>
                                <input type="date" name="dob" id="dob" placeholder="Date of Birth">

                                <input type="text" name="phone" placeholder="Phone">
                                <input type="text" name="email" placeholder="Email">
                                <textarea name="address" placeholder="Address" cols="30" rows="4"
                                    id="member-details"></textarea>
                            </div>
                            <div class="col-md-6">
                                <h3>Experience</h3>
                                <input type="text" name="occupation" placeholder="Current Occupation/Study">
                                <input type="text" name="other-work" placeholder="Other Voluntary Work">

                                <textarea name="reason-joining"
                                    placeholder="Why are you interested in becoming a volunteer of Shibpur Sristi?"
                                    cols="30" rows="4" id="member-details"></textarea>

                                <label for="member-photo">Upload Your Photo (Passport Size)</label>

                                <input type="file" name="photo">

                                <label for="member-id">Upload Your ID Proof (Aadhar/Voter)</label>
                                <input type="file" name="photo-id">




                            </div>
                            <div class="col-md-12 center"><button class="thm-btn" type="submit"
                                    name="submit">Submit</button></div>
                        </form>
                    </div>
                    <p>&nbsp;</p>
                </div>
            </div>

        </div>
    </section>


    <!--<label for="member-photo">Upload Your Photo (Passport Size)</label>
            <input type="file" name="photo" id="member-photo">-->

    <?php include './includes/footer.php'; ?>

    <?php include './includes/scripts.php'; ?>

    <script>
    function functionChange() {
        const membershipRules = document.getElementById("membership-rules");
        membershipRules.style.display = 'none';
		const membershipForm = document.getElementById("membership-form-area");
        membershipForm.style.display = 'block';
    };
    // <input type="file" name="photo" id="member-photo"><label for="member-id">Upload Your ID Proof (Aadhar/Voter)</label>             <input type="file" name="file[]" id="file" multiple>//
    </script>

</body>

</html>