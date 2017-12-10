<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>BeachBooks - Sign Up</title>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Fixed navbar -->
        <?php include('nav.php'); ?>
        <?php
            $db = new mysqli("localhost", "root", "SoIf7pZnY0DT", "beach_books");
            if ($db->connect_errno) {
                echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
            }
            if (empty($_POST["email"])) {
            } else {
                $query = "SELECT ClientName FROM Users
                        NATURAL JOIN Client
                        WHERE ClientEmail = ? AND
                        Password = ?;";
                if ($stmt = $db->prepare($query)) {
                    $stmt->bind_param("ss", $email, $password);
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $stmt->execute();
                    $stmt->bind_result($name);
                    $stmt->fetch();
                    echo '<script>';
                    echo 'console.log("Logging in as ' . $name . '");';
                    echo 'login("' . $name . '");';
                    echo 'window.location.href = "home.php";';
                    echo '</script>';
                    ?>
                    <?php 
                }
            }
        ?>
        <main>
            <div id="sign-in-up" class="container center-block row">
                <div class="col-md-6 boxcol">
                    <form action="signup.php" method="post" class="form-signin">
                        <h2 class="form-signin-heading" id="emph">Sign In and Sell!</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus
                        oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required
                        oninvalid="this.setCustomValidity('You must fill out all fields to sign in to your account')" onchange="this.setCustomValidity('')">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <input id="login_button" class="btn btn-lg btn-primary btn-block" type="submit">
                    </form>
                </div>

                <div class="col-md-6 boxcol">
                    <form class="form-signin">
                        <h2 class="form-signin-heading" id="emph">Create an Account!</h2>
                        <label for="inputFirst" class="sr-only">First Name</label>
                        <input type="text" id="inputFirst" class="form-control" placeholder="First Name" required autofocus>
                        <label for="inputLast" class="sr-only">Last Name</label>
                        <input type="text" id="inputLast" class="form-control" placeholder="Last Name" required autofocus>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label><input type="checkbox" id="terms" name="terms" value="agree" required autofocus
                              oninvalid="this.setCustomValidity('You must agree to the Terms of Service before creating an account.')" onchange="this.setCustomValidity('')">
                              By clicking this you agree to BeachBooks's <a data-toggle="modal" data-target="#termsModal"><strong>Terms of Service</strong></a></label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                    </form>
                </div>

            </div> <!-- /container -->
        </main>

        <div class="container">
            <div class="modal fade" id="termsModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4>Terms of Service</h4>
                      </div>
                      <div class="modal-body" style="height:550px; overflow-x: hidden; overflow-y:scroll; padding-right:50px">
                        <p style="overflow:auto; font-size:20px; text-align:justify;"><br>
                          <ol type="1" style="text-align:justify;">
                              <li><b>Contractual Relationship</b><br>
                                <p>These Terms and Conditions govern your access or use, from within the United States and its territories and possessions,
                                of the applications, websites, content, products, and services (the "Services," as more fully defined below in Section 3)
                                made available in the United States and its territories and possessions by BeachBooks and its parents, subsidiaries,
                                representatives, affiliates, officers and directors (collectively, "BeachBooks"). PLEASE READ THESE TERMS CAREFULLY, AS
                                THEY CONSTITUTE A LEGAL AGREEMENT BETWEEN YOU AND BEACHBOOKS. In these Terms, the words "including" and "include" mean
                                "including, but not limited to."</p>

                                <p>By accessing or using the Services, you confirm your agreement to be bound by these Terms. If you do not agree to these
                                Terms, you may not access or use the Services. These Terms expressly supersede prior agreements or arrangements with you.
                                BeachBooks may immediately terminate these Terms or any Services with respect to you, or generally cease offering or deny
                                access to the Services or any portion thereof, at any time for any reason.</p>

                                <p><i><strong>IMPORTANT</strong>: PLEASE REVIEW THE ARBITRATION AGREEMENT SET FORTH BELOW CAREFULLY, AS IT WILL REQUIRE YOU TO
                                RESOLVE DISPUTES WITH BEACHBOOKS ON AN INDIVIDUAL BASIS THROUGH FINAL AND BINDING ARBITRATION. BY ENTERING THIS AGREEMENT,
                                YOU EXPRESSLY ACKNOWLEDGE THAT YOU HAVE READ AND UNDERSTAND ALL OF THE TERMS OF THIS AGREEMENT AND HAVE TAKEN TIME TO CONSIDER
                                THE CONSEQUENCES OF THIS IMPORTANT DECISION.</i></p>

                                <p>Supplemental terms may apply to certain Services, such as policies for a particular event, program, activity or promotion, and
                                such supplemental terms will be disclosed to you in separate region-specific disclosures (e.g., a particular city webpage on
                                BeachBooks.me) or in connection with the applicable Service(s). Supplemental terms are in addition to, and shall be deemed a
                                part of, the Terms for the purposes of the applicable Service(s). Supplemental terms shall prevail over these Terms in the
                                event of a conflict with respect to the applicable Services.</p>

                                <p>BeachBooks may amend the Terms from time to time. Amendments will be effective upon BeachBooks's posting of such updated Terms
                                at this location or in the amended policies or supplemental terms on the applicable Service(s). Your continued access or use of
                                the Services after such posting confirms your consent to be bound by the Terms, as amended. If BeachBooks changes these Terms
                                after the date you first agreed to the Terms (or to any subsequent changes to these Terms), you may reject any such change by
                                providing BeachBooks written notice of such rejection within 30 days of the date such change became effective, as indicated in
                                the "Effective" date above. This written notice must be provided either (a) by mail or hand delivery to our registered agent
                                for service of process, c/o BeachBooks, or (b) by email from the email address associated with your Account to:
                                <b>Contact.BeachBooks@gmail.com</b>. In order to be effective, the notice must include your full name and clearly indicate your
                                intent to reject changes to these Terms. By rejecting changes, you are agreeing that you will continue to be bound by the
                                provisions of these Terms as of the date you first agreed to the Terms (or to any subsequent changes to these Terms).</p>

                                <p>BeachBooks’s collection and use of personal information in connection with the Services is described in BeachBooks's Privacy
                                Statements located at BeachBooks.me/privacy.</p></li>
                              <li><b>Arbitration Agreement</b><br>
                                <p>By agreeing to the Terms, you agree that you are required to resolve any claim that you may have against BeachBooks on an
                                individual basis in arbitration, as set forth in this Arbitration Agreement. This will preclude you from bringing any class,
                                collective, or representative action against BeachBooks, and also preclude you from participating in or recovering relief under
                                any current or future class, collective, consolidated, or representative action brought against BeachBooks by someone else.</p>
                                <ul>
                                    <li><b>Agreement to Binding Arbitration Between You and BeachBooks.</b><br>
                                      <p>You and BeachBooks agree that any dispute, claim or controversy arising out of or relating to (a) these Terms or the
                                      existence, breach, termination, enforcement, interpretation or validity thereof, or (b) your access to or use of the
                                      Services at any time, whether before or after the date you agreed to the Terms, will be settled by binding arbitration
                                      between you and BeachBooks, and not in a court of law.</p>
                                      <p>You acknowledge and agree that you and BeachBooks are each waiving the right to a trial by jury or to participate as a
                                      plaintiff or class member in any purported class action or representative proceeding. Unless both you and BeachBooks
                                      otherwise agree in writing, any arbitration will be conducted only on an individual basis and not in a class, collective,
                                      consolidated, or representative proceeding. However, you and BeachBooks each retain the right to bring an individual action
                                      in small claims court and the right to seek injunctive or other equitable relief in a court of competent jurisdiction to
                                      prevent the actual or threatened infringement, misappropriation or violation of a party's copyrights, trademarks, trade
                                      secrets, patents or other intellectual property rights.</p></li>
                                    <li><b>Rules and Governing Law.</b><br>
                                      <p>The arbitration will be administered by the American Arbitration Association ("AAA") in accordance with the AAA’s Consumer
                                      Arbitration Rules and the Supplementary Procedures for Consumer Related Disputes (the "AAA Rules") then in effect, except as
                                      modified by this Arbitration Agreement. The AAA Rules are available at www.adr.org/arb_med or by calling the AAA at
                                      1-800-778-7879.<p>
                                      <p>The parties agree that the arbitrator (“Arbitrator”), and not any federal, state, or local court or agency, shall have
                                      exclusive authority to resolve any disputes relating to the interpretation, applicability, enforceability or formation of
                                      this Arbitration Agreement, including any claim that all or any part of this Arbitration Agreement is void or voidable. The
                                      Arbitrator shall also be responsible for determining all threshold arbitrability issues, including issues relating to
                                      whether the Terms are unconscionable or illusory and any defense to arbitration, including waiver, delay, laches, or estoppel.
                                      </p>
                                      <p>Notwithstanding any choice of law or other provision in the Terms, the parties agree and acknowledge that this Arbitration
                                      Agreement evidences a transaction involving interstate commerce and that the Federal Arbitration Act, 9 U.S.C. § 1 et seq.
                                      (“FAA”), will govern its interpretation and enforcement and proceedings pursuant thereto. It is the intent of the parties
                                      that the FAA and AAA Rules shall preempt all state laws to the fullest extent permitted by law. If the FAA and AAA Rules are
                                      found to not apply to any issue that arises under this Arbitration Agreement or the enforcement thereof, then that issue shall
                                      be resolved under the laws of the state of California.</p></li>
                                    <li><b>Process.</b><br>
                                      <p>A party who desires to initiate arbitration must provide the other party with a written Demand for Arbitration as specified in
                                      the AAA Rules. (The AAA provides a form Demand for Arbitration - Consumer Arbitration Rules at <a href="www.adr.org">www.adr.org</a>
                                      or by calling the AAA at 1-800-778-7879). The Arbitrator will be either (1) a retired judge or (2) an attorney specifically
                                      licensed to practice law in the state of California and will be selected by the parties from the AAA's roster of consumer
                                      dispute arbitrators. If the parties are unable to agree upon an Arbitrator within seven (7) days of delivery of the Demand for
                                      Arbitration, then the AAA will appoint the Arbitrator in accordance with the AAA Rules.</p></li>
                                    <li><b>Location and Procedure.</b><br>
                                      <p>Unless you and BeachBooks otherwise agree, the arbitration will be conducted in the county where you reside. If your claim does
                                      not exceed $1,000, then the arbitration will be conducted solely on the basis of documents you and BeachBooks submit to the
                                      Arbitrator, unless you request a hearing or the Arbitrator determines that a hearing is necessary. If your claim exceeds $1,000,
                                      your right to a hearing will be determined by the AAA Rules. Subject to the AAA Rules, the Arbitrator will have the discretion
                                      to direct a reasonable exchange of information by the parties, consistent with the expedited nature of the arbitration.</p></li>
                                    <li><b>Arbitrator's Decision.</b><br>
                                      <p>The Arbitrator will render an award within the time frame specified in the AAA Rules. Judgment on the arbitration award may be
                                      entered in any court having competent jurisdiction to do so. The Arbitrator may award declaratory or injunctive relief only in
                                      favor of the claimant and only to the extent necessary to provide relief warranted by the claimant's individual claim. An
                                      Arbitrator’s decision shall be final and binding on all parties. An Arbitrator’s decision and judgment thereon shall have no
                                      precedential or collateral estoppel effect. If you prevail in arbitration you will be entitled to an award of attorneys' fees and
                                      expenses, to the extent provided under applicable law. BeachBooks will not seek, and hereby waives all rights BeachBooks may have
                                      under applicable law to recover, attorneys' fees and expenses if BeachBooks prevails in arbitration.</p></li>
                                    <li><b>Fees.</b><br>
                                      <p>Your responsibility to pay any AAA filing, administrative and arbitrator fees will be solely as set forth in the AAA Rules.
                                      However, if your claim for damages does not exceed $1,000, BeachBooks will pay all such fees, unless the Arbitrator finds that
                                      either the substance of your claim or the relief sought in your Demand for Arbitration was frivolous or was brought for an improper
                                      purpose (as measured by the standards set forth in Federal Rule of Civil Procedure 11(b)).</p></li>
                                    <li><b>Changes.</b><br>
                                      <p>Notwithstanding the provisions in Section I above, regarding consent to be bound by amendments to these Terms, if BeachBooks changes
                                        this Arbitration Agreement after the date you first agreed to the Terms (or to any subsequent changes to the Terms), you may reject
                                        any such change by providing BeachBooks written notice of such rejection within 30 days of the date such change became effective, as
                                        indicated in the "Effective" date above. This written notice must be provided either (a) by mail or hand delivery to our registered
                                        agent for service of process, c/o BeachBooks, or (b) by email from the email address associated with your Account to:
                                        <b>Contact.BeachBooks@gmail.com.</b> In order to be effective, the notice must include your full name and clearly indicate your intent
                                        to reject changes to this Arbitration Agreement. By rejecting changes, you are agreeing that you will arbitrate any dispute between
                                        you and BeachBooks in accordance with the provisions of this Arbitration Agreement as of the date you first agreed to the Terms (or to
                                        any subsequent changes to the Terms).</p></li>
                                    <li><b>Severability and Survival.</b><br>
                                      <p>If any portion of this Arbitration Agreement is found to be unenforceable or unlawful for any reason, (1) the unenforceable or
                                        unlawful provision shall be severed from these Terms; (2) severance of the unenforceable or unlawful provision shall have no impact
                                        whatsoever on the remainder of the Arbitration Agreement or the parties’ ability to compel arbitration of any remaining claims on an
                                        individual basis pursuant to the Arbitration Agrement; and (3) to the extent that any claims must therefore proceed on a class,
                                        collective, consolidated, or representative basis, such claims must be litigated in a civil court of competent jurisdiction and not in
                                        arbitration, and the parties agree that litigation of those claims shall be stayed pending the outcome of any individual claims in
                                        arbitration.</p></li>
                                </ul>
                              <li><b>The Services</b><br>
                                <p>The Services comprise web applications and related services (each, an "Application"), which enable users to arrange and schedule meet-ups,
                                logistics and/or delivery services and/or to purchase certain goods, including with third party providers of such services and goods under
                                agreement with BeachBooks or certain of BeachBooks's affiliates ("Third Party Providers").</p>
                                <ul>
                                    <li><b>License.</b><br>
                                      <p>Subject to your compliance with these Terms, BeachBooks grants you a limited, non-exclusive, non-sublicensable, revocable,
                                        non-transferable license to:
                                          <ol type="i">
                                              <li>access and use the Applications on your personal device solely in connection with your use of the Services; and</li>
                                              <li>access and use any content, information and related materials that may be made available through the Services, in each case
                                                solely for your personal, noncommercial use. Any rights not expressly granted herein are reserved by BeachBooks and BeachBooks's
                                                licensors.</li>
                                          </ol>
                                      </p></li>
                                    <li><b>Restrictions.</b><br>
                                      <p>You may not:
                                          <ol type="i">
                                              <li>remove any copyright, trademark or other proprietary notices from any portion of the Services;</li>
                                              <li>reproduce, modify, prepare derivative works based upon, distribute, license, lease, sell, resell, transfer, publicly display,
                                                publicly perform, transmit, stream, broadcast or otherwise exploit the Services except as expressly permitted by BeachBooks;</li>
                                              <li>decompile, reverse engineer or disassemble the Services except as may be permitted by applicable law;</li>
                                              <li>link to, mirror or frame any portion of the Services;</li>
                                              <li>cause or launch any programs or scripts for the purpose of scraping, indexing, surveying, or otherwise data mining any
                                                portion of the Services or unduly burdening or hindering the operation and/or functionality of any aspect of the Services; or</li>
                                              <li>attempt to gain unauthorized access to or impair any aspect of the Services or its related systems or networks.</li>
                                          </ol>
                                        </p></li>
                                    <li><b>Third Party Services and Content.</b><br>
                                      <p>The Services may be made available or accessed in connection with third party services and content (including advertising) that
                                        BeachBooks does not control. You acknowledge that different terms of use and privacy policies may apply to your use of such third
                                        party services and content. BeachBooks does not endorse such third party services and content and in no event shall BeachBooks be
                                        responsible or liable for any products or services of such third party providers. These third party beneficiaries are not parties
                                        to this contract and are not responsible for the provision or support of the Services in any manner.</p></li>
                                    <li><b>Ownership.</b><br>
                                      <p>The Services and all rights therein are and shall remain BeachBooks's property or the property of BeachBooks's licensors. Neither these
                                        Terms nor your use of the Services convey or grant to you any rights:
                                          <ol type="i">
                                              <li>in or related to the Services except for the limited license granted above;</li>
                                              <li>to use or reference in any manner BeachBooks's company names, logos, product and service names, trademarks or services marks or
                                                those of BeachBooks's licensors.</li>
                                          </ol>
                                      </p></li>
                                </ul>
                              <li><b>Access and Use of the Services</b><br>
                                <ul>
                                    <li><b>User Accounts.</b><br>
                                      <p>In order to use most aspects of the Services, you must register for and maintain an active personal user Services account ("Account").
                                        You must be at least 18 years of age, or the age of legal majority in your jurisdiction (if different than 18), to obtain an Account,
                                        unless a specific Service permits otherwise. Account registration requires you to submit to BeachBooks certain personal information,
                                        such as your name, email address, and age. You agree to maintain accurate, complete, and up-to-date information in your Account. Your
                                        failure to maintain accurate, complete, and up-to-date Account information, may result in your inability to access or use the Services.
                                        You are responsible for all activity that occurs under your Account, and you agree to maintain the security and secrecy of your Account
                                        username and password at all times. Unless otherwise permitted by BeachBooks in writing, you may only possess one Account.</p></li>
                                    <li><b>User Requirements and Conduct.</b><br>
                                      <p>The Service is not available for use by persons under the age of 18. You may not assign or otherwise transfer your Account to any other
                                        person or entity. You agree to comply with all applicable laws when accessing or using the Services, and you may only access or use the
                                        Services for lawful purposes. You may not in your access or use of the Services cause nuisance, annoyance, inconvenience, or property
                                        damage, whether to the Third Party Provider or any other party. In certain instances you may be asked to provide proof of identity to
                                        access or use the Services, and you agree that you may be denied access to or use of the Services if you refuse to provide proof of
                                        identity.</p></li>
                                    <li><b>Emailing.</b><br>
                                      <p>You agree that BeachBooks may contact you by email at any of the emails provided by you or on your behalf in connection with an
                                        BeachBooks account, including for marketing purposes. You understand that you are not required to provide this consent as a condition of
                                        purchasing any property, goods or services. If you do not choose to opt out, BeachBooks may contact you as outlined in its User Privacy
                                        Statement, located at BeachBooks.me/privacy.</p>
                                    <li><b>Karma System.</b><br>
                                      <p>BeachBooks will, in its sole discretion, track your credibility using a karma system that will reflect upon your account for use to
                                        determine your liability and are subject to any additional terms that BeachBooks establishes. You agree that the karma system will
                                        benefit not only the users interacting with one another, but also the BeachBooks admins and will help track scammers and protect the
                                        users from future frauds. In terms of transferring the payment and book(s), users will have a one time opportunity to rate the
                                        buyer/seller once the trade confirmation has been confirmed. This system is put in place so users may rate the buyer/seller once and ONLY
                                        once, to prevent users from abusing the system. When in the initial stages of the transaction, users may check the karma rating of other
                                        users that post offers of books online before committing to anything.</p></li>
                                    <li><b>User Provided Content.</b><br>
                                      <p>BeachBooks will permit you to submit, upload, and publish or otherwise make available to BeachBooks through the Services the books you
                                        choose to sell and/or trade ("User Content"). Any User Content provided by you that is no longer in your possession becomes that of the
                                        buyer. Users will only be permitted to upload books they currently have in their possession. If, for any reason, users do not have the
                                        required materials during the transaction process, they will be subject to an investigation taken upon their account and their account may
                                        be terminated.</p>
                                      <p>You agree to not provide User Content that is defamatory, libelous, hateful, violent, obscene, pornographic, unlawful, or otherwise
                                        offensive, as determined by BeachBooks in its sole discretion, whether or not such material may be protected by law. BeachBooks may, but
                                        shall not be obligated to, review, monitor, or remove User Content, at BeachBooks's sole discretion and at any time and for any reason,
                                        without notice to you.</p></li>
                                    <li><b>Network Access and Devices.</b><br>
                                      <p>You are responsible for obtaining the data network access necessary to use the Services. Your mobile and computer network’s data may apply
                                        fees if you access or use the Services from your device. You are responsible for acquiring and updating compatible hardware or devices
                                        necessary to access and use the Services and Applications. BeachBooks does not guarantee that the Services, or any portion thereof, will
                                        function on any particular hardware or devices. In addition, the Services may be subject to malfunctions and delays inherent in the use of
                                        the Internet and electronic communications.</p></li>
                                </ul>
                              <li><b>Payment</b><br>
                                <p>You understand that use of the Services may result in charges to you for goods you receive ("Charges"). BeachBooks will not receive any payment
                                  of the applicable Charges for services or goods obtained through your use of the Services. Charges would be held by the potential buyer and
                                  applicable seller. Charges made between buyer and sell are non-refundable and final after the purchase has been made.</p></li>
                              <li><b>Disclaimers; Limitation of Liability; Indemnity.</b><br>
                                  <p><ul style="list-style-type:none">
                                      <li><strong>DISCLAIMER.</strong><br>
                                        <p><i>THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE." BEACHBOOKS DISCLAIMS ALL REPRESENTATIONS AND WARRANTIES, EXPRESS, IMPLIED, OR
                                          STATUTORY, NOT EXPRESSLY SET OUT IN THESE TERMS, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE
                                          AND NON-INFRINGEMENT. IN ADDITION, BEACHBOOKS MAKES NO REPRESENTATION, WARRANTY, OR GUARANTEE REGARDING THE RELIABILITY, TIMELINESS,
                                          QUALITY, SUITABILITY, OR AVAILABILITY OF THE SERVICES OR ANY SERVICES OR GOODS REQUESTED THROUGH THE USE OF THE SERVICES, OR THAT THE
                                          SERVICES WILL BE UNINTERRUPTED OR ERROR-FREE. BEACHBOOKS DOES NOT GUARANTEE THE QUALITY, SUITABILITY, SAFETY OR ABILITY OF THIRD PARTY
                                          PROVIDERS. YOU AGREE THAT THE ENTIRE RISK ARISING OUT OF YOUR USE OF THE SERVICES, AND ANY SERVICE OR GOOD REQUESTED IN CONNECTION
                                          THEREWITH, REMAINS SOLELY WITH YOU, TO THE MAXIMUM EXTENT PERMITTED UNDER APPLICABLE LAW.</i></p></li>
                                      <li><strong>LIMITATION OF LIABILITY.</strong><br>
                                        <i><p>BEACHBOOKS SHALL NOT BE LIABLE FOR INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, PUNITIVE, OR CONSEQUENTIAL DAMAGES, INCLUDING LOST
                                          PROFITS, LOST DATA, PERSONAL INJURY, OR PROPERTY DAMAGE RELATED TO, IN CONNECTION WITH, OR OTHERWISE RESULTING FROM ANY USE OF THE
                                          SERVICES, REGARDLESS OF THE NEGLIGENCE (EITHER ACTIVE, AFFIRMATIVE, SOLE, OR CONCURRENT) OF BEACHBOOKS, EVEN IF BEACHBOOKS HAS BEEN
                                          ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                                        <p>BEACHBOOKS SHALL NOT BE LIABLE FOR ANY DAMAGES, LIABILITY OR LOSSES ARISING OUT OF: (i) YOUR USE OF OR RELIANCE ON THE SERVICES OR
                                          YOUR INABILITY TO ACCESS OR USE THE SERVICES; OR (ii) ANY TRANSACTION OR RELATIONSHIP BETWEEN YOU AND ANY THIRD PARTY PROVIDER, EVEN IF
                                          BEACHBOOKS HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. BEACHBOOKS SHALL NOT BE LIABLE FOR DELAY OR FAILURE IN PERFORMANCE
                                          RESULTING FROM CAUSES BEYOND BEACHBOOKS'S REASONABLE CONTROL.</p>
                                        <p>THE LIMITATIONS AND DISCLAIMER IN THIS SECTION DO NOT PURPORT TO LIMIT LIABILITY OR ALTER YOUR RIGHTS AS A CONSUMER THAT CANNOT BE
                                          EXCLUDED UNDER APPLICABLE LAW. BECAUSE SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF OR THE LIMITATION OF LIABILITY FOR
                                          CONSEQUENTIAL OR INCIDENTAL DAMAGES, IN SUCH STATES OR JURISDICTIONS, BEACHBOOKS’S LIABILITY SHALL BE LIMITED TO THE EXTENT PERMITTED BY
                                          LAW. THIS PROVISION SHALL HAVE NO EFFECT ON BEACHBOOKS’S CHOICE OF LAW PROVISION SET FORTH BELOW.</p></i></li>
                                      <li><b>Indemnity.</b><br>
                                        <p>You agree to indemnify and hold BeachBooks and its affiliates and their officers, directors, employees, and agents harmless from any and
                                          all claims, demands, losses, liabilities, and expenses (including attorneys' fees), arising out of or in connection with:
                                            <ol type="i">
                                                <li>your use of the Services or services or goods obtained through your use of the Services;</li>
                                                <li>your breach or violation of any of these Terms;</li>
                                                <li>BeachBooks's use of your User Content; or</li>
                                                <li>your violation of the rights of any third party, including Third Party Providers.</li>
                                            </ol>
                                        </p>
                                      </li>
                                  </ul></p>
                              </li>
                              <li><b>Other Provisions</b><br>
                                  <p><ul>
                                      <li><b>Choice of Law.</b><br>
                                        <p>These Terms are governed by and construed in accordance with the laws of the State of California, U.S.A., without giving effect to any
                                          conflict of law principles, except as may be otherwise provided in the Arbitration Agreement above or in supplemental terms applicable to
                                          your region. However, the choice of law provision regarding the interpretation of these Terms is not intended to create any other
                                          substantive right to non-Californians to assert claims under California law whether that be by statute, common law, or otherwise. These
                                          provisions, and except as otherwise provided in Section 2 of these Terms, are only intended to specify the use of California law to
                                          interpret these Terms and the forum for disputes asserting a breach of these Terms, and these provisions shall not be interpreted as
                                          generally extending California law to you if you do not otherwise reside in California. The foregoing choice of law and forum selection
                                          provisions do not apply to the arbitration clause in Section 2 or to any arbitrable disputes as defined therein. Instead, as described in
                                          Section 2, the Federal Arbitration Act shall apply to any such disputes.</p></li>
                                      <li><b>Notice.</b><br>
                                        <p>BeachBooks may give notice by means of a general notice on the Services through electronic mail to your email address in your Account.
                                          Such notice shall be deemed to have been given upon the expiration of 48 hours after emailing. You may give notice to BeachBooks, with
                                          such notice deemed given when received by BeachBooks, at any time by emailing to our registered agent for service of process, c/o
                                          BeachBooks.</p></li>
                                      <li><b>General.</b><br>
                                        <p>You may not assign these Terms without BeachBooks's prior written approval. BeachBooks may assign these Terms without your consent to:
                                          <ol type="i">
                                            <li>a subsidiary or affiliate;</li>
                                            <li>an acquirer of BeachBooks's equity, business or assets; or</li>
                                            <li>a successor by merger. Any purported assignment in violation of this section shall be void</li>
                                          </ol>
                                          No joint venture, partnership, employment, or agency relationship exists between you, BeachBooks or any Third Party Provider as a result of
                                          this Agreement or use of the Services. If any provision of these Terms is held to be invalid or unenforceable, such provision shall be
                                          struck and the remaining provisions shall be enforced to the fullest extent under law. BeachBooks's failure to enforce any right or
                                          provision in these Terms shall not constitute a waiver of such right or provision unless acknowledged and agreed to by BeachBooks in
                                          writing. This provision shall not affect the Severability and Survivability section of the Arbitration Agreement of these Terms.</p></li>
                                  </ul></p>
                              </li>
                          </ol>
                        </p>
                      </div>
                      <div class="modal-footer">
                          <button>A</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
