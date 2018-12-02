<div class="contact container">
    <div class="col-lg-5 mx-auto col-md-8">
    <div class="row">
        <div class="contact__phone-number__container text-center">
            <a href="tel:+61412325660"><i class="fas fa-phone"></i> +61 412 325 660</a>
        </div>
        <div class="contact__form__container">
            <form id="contact-form" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name*" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name*" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message*" required></textarea>
                </div>
                <button
                    class="btn"
                    data-sitekey="6Lf4sWsUAAAAAPsUYcBlgdPk6mNnDswb_Sb41VXA"
                    data-callback="onSubmit">
                    Send Message
                </button>
            </form>
        </div>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
        </script>
    </div>
    </div>
</div>

<?php
$response = $_POST["g-recaptcha-response"];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Lf4sWsUAAAAAIlgZtCOtqu8O9rhPKLfLRkPf1t8',
    'response' => $_POST["g-recaptcha-response"]
);
$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

if (!empty($_POST) && $captcha_success->success==true) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // Modify the path in the require statement below to refer to the 
        // location of your Composer autoload.php file.
        require __DIR__ . '/../../vendor/autoload.php';

        $adminEmail = 'bookkeeping@wiseupconnect.com.au';
        $myEmail = 'joshrussellahern@gmail.com';

        // $adminEmail = 'joshrussellahern@gmail.com';

        $customerEmail = $_POST['email'];
        $customerName =  $_POST['firstname'] . " " . $_POST['lastname'];
        $message = $_POST['message'];
        $footer = file_get_contents('/../partials/email-footer.html');

        // Instantiate a new PHPMailer 
        $mail = new PHPMailer;

        // Tell PHPMailer to use SMTP
        $mail->isSMTP();

        $mail->AddReplyTo($customerEmail, 'Reply to ' . $customerName);

        // Replace sender@example.com with your "From" address. 
        // This address must be verified with Amazon SES.
        $mail->setFrom($adminEmail, 'Wiseup Bookkeeping');

        // Replace recipient@example.com with a "To" address. If your account 
        // is still in the sandbox, this address must be verified.
        // Also note that you can include several addAddress() lines to send
        // email to multiple recipients.
        $mail->addAddress($adminEmail,  'Wiseup Bookkeeping');
        $mail->addCC($myEmail, 'Web Admin');

        // Replace smtp_username with your Amazon SES SMTP user name.
        $mail->Username = 'AKIAJLVTBBZZM6WRIWMQ';

        // Replace smtp_password with your Amazon SES SMTP password.
        $mail->Password = 'AsFePQ886ZCrdiy/dZFQChbQxqjr5QCyzE9+t5G9CH8w';
            
        // Specify a configuration set. If you do not want to use a configuration
        // set, comment or remove the next line.
        // $mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');
         
        // If you're using Amazon SES in a region other than US West (Oregon), 
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP  
        // endpoint in the appropriate region.
        $mail->Host = 'email-smtp.us-west-2.amazonaws.com';

        // The subject line of the email
        $mail->Subject = 'New email enquiry from ' . $customerName;

        // The HTML-formatted body of the email
        $mail->Body = "<p><strong>Beep Boop,</strong></p>
            <p>Hi Mary,</p>
            <p>Another email enquiry has arrived from www.wiseupconnect.com.au</p>
            <p>From: " . $customerName . " at " . $customerEmail ."</p>
            <p>\"" . $message . "\"</p>
            <p> You're welcome!</p>
            <p><strong>Beep boop.</strong></p>";

        // Tells PHPMailer to use SMTP authentication
        $mail->SMTPAuth = true;

        // Enable TLS encryption over port 587
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Tells PHPMailer to send HTML-formatted email
        $mail->isHTML(true);

        // The alternative email body; this is only displayed when a recipient
        // opens the email in a non-HTML email client. The \r\n represents a 
        // line break.
        $mail->AltBody = "New contact request from: " . $customerEmail . " \r\n" . $message;

        if($mail->send()) {
            $mail->ClearAddresses();
            $mail->ClearCCs();

            $mail->addAddress($customerEmail,  $customerName);
            // $mail->addCC('jackfbrock@hotmail.com',  $customerName);

            $mail->ClearReplyTos();
            $mail->AddReplyTo($adminEmail, 'Reply to Wiseup Bookkeeping');

            $mail->Subject = $_POST['firstname'] . ' we have received your enquiry';

            $mail->Body = "<p>Hi " . $customerName . ",</p>
            <p>Thanks for getting in touch with us!</p>
            <p>I'll get back to you as soon as possible regarding your enquiry.
            <br>Please don't hesitate to give me a call to reach me sooner.</p>
            <p>Here is a copy of your message:</p>
            <p>\"" . $message ."\"</p>
            <p>Thanks again<p>";

            $mail->AltBody = "Thanks for getting in touch with us! \r\n Here is a copy of your message" . $message;

            if($mail->send()) {
                echo "<script>window.location = '/thank-you'</script>";
            } else {
                echo "Email not sent. " , $mail->ErrorInfo , PHP_EOL;

                $mail->ClearAddresses();

                $mail->addAddress($myEmail);

                // The subject line of the email
                $mail->Subject = 'Wiseup - Failed Email to Customer';

                // The HTML-formatted body of the email
                $mail->Body = "<p>Hi " . $customerName . ",</p>
                    <p>Thanks for getting in touch with us!</p>
                    <p>I'll get back to you as soon as possible regarding your enquiry.
                    <br>Please don't hesitate to give me a call to reach me sooner.</p>
                    <p>Here is a copy of your message:</p>
                    <p>\"" . $message ."\"</p>
                    <p>Thanks again<p>";
            }
        } else {
            echo "Email not sent. " , $mail->ErrorInfo , PHP_EOL;

            $mail->ClearAddresses();

            $mail->addAddress($myEmail);

            // The subject line of the email
            $mail->Subject = 'Wiseup - Failed Email to Mary';

            // The HTML-formatted body of the email
            $mail->Body = "<p><strong>Beep Boop,</strong></p>
                <p>Hi Mary,</p>
                <p>Another email enquiry has arrived from www.wiseupconnect.com.au</p>
                <p>From: " . $customerName . " at " . $customerEmail ."</p>
                <p>\"" . $message . "\"</p>
                <p> You're welcome!</p>
                <p><strong>Beep boop.</strong></p>";
        }
    }
}
?>
