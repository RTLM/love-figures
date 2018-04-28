        <footer>
            <div class="container">
                <div class="footer__menu row">
                    <div class="footer__menu__column">
                        <?php
                        $title = "Quicklinks";

                        $links = [
                            array(
                                "name"=>"Home",
                                "url"=>"index.php"
                            ),
                            array(
                                "name"=>"Packages",
                                "url"=>"Packages.php"
                            ),
                            array(
                                "name"=>"About Us",
                                "url"=>"about-us.php"
                            ),
                            array(
                                "name"=>"Contact",
                                "url"=>"contact-us.php"
                            ),
                        ];

                        component_footer_menu($title, $links);
                        ?>
                    </div>
                    <div class="footer__menu__column">
                        <?php
                        $title = "Socials";

                        $links = [
                            array(
                                "name"=>"Facebook",
                                "url"=>"http://www.facebook.com"
                            ),
                            array(
                                "name"=>"Instagram",
                                "url"=>"http://www.instagram.com"
                            ),
                            array(
                                "name"=>"Twitter",
                                "url"=>"http://www.twitter.com"
                            ),
                        ];

                        component_footer_menu($title, $links);
                        ?>
                    </div>
                    <div class="footer__menu__column">
                        <?php
                        $title = "Contact";

                        $links = [
                            array(
                                "name"=>"02 5555 5555",
                                "url"=>""
                            ),
                            array(
                                "name"=>"0455 555 555",
                                "url"=>""
                            ),
                            array(
                                "name"=>"info@wiseup.com.au",
                                "url"=>""
                            ),
                        ];

                        component_footer_menu($title, $links);
                        ?>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="app/scripts/main.js"></script>
    </body>
</html>