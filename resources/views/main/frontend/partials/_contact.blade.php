<section id="contact" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-envelope"></i>Contact</h4>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-5 col-sm-12 col-xs-12">
                <!-- CONTACT FORM -->
                <div class="card">
                    <div class="card-content">
                        <form id="contact-form" name="c-form">
                            <!-- NAME -->
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate" name="first_name" required>
                                <label for="first_name">Name</label>
                            </div>
                            <!--SUBJECT-->
                            <div class="input-field">
                                <input id="sub" type="text" class="validate" name="sub">
                                <label for="sub">Subject</label>
                            </div>
                            <!--EMAIL-->
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <!--MESSAGE-->
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="textarea1">Message</label>
                            </div>
                            <!-- SEND BUTTON -->
                            <div class="contact-send">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Send
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--FORM LOADER-->
                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 col-xs-12">
                <!-- CONTACT MAP -->
                <div id="map-card" class="card">
                    <!-- MAP -->
                    <div id="myMap"></div>
                </div>
            </div>

        </div>
    </div>
</section>