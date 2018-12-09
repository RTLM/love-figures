<?php
if (!empty($_POST)) {
$token = $_POST['token'];
$secret = '6Lfdp38UAAAAAChKOWxiMHzWlMhO4nHjLucYu-At';
$action = $_POST['action'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Lfdp38UAAAAAChKOWxiMHzWlMhO4nHjLucYu-At',
    'response' => $_POST['token']
);
$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$response = json_decode($verify);
}

if (!empty($_POST) && $response->success == true && $response->score > 0.5 && $response->action == 'submit_form') {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // Modify the path in the require statement below to refer to the 
        // location of your Composer autoload.php file.
        require __DIR__ . '/../../vendor/autoload.php';

        // $adminEmail = 'bookkeeping@wiseupconnect.com.au';
        $adminEmail = 'joshrussellahern@gmail.com';
        $myEmail = 'joshrussellahern@gmail.com';


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

        if (! $mail->send()) {
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
        } else {
            $success = true;
        }
    }
}
?>

<div class="contact container">
    <div class="col-lg-5 mx-auto col-md-8">
    <div class="row">
        <div class="contact__phone-number__container text-center">
            <a href="tel:+61412325660"><i class="fas fa-phone"></i> +61 412 325 660</a>
        </div>
        <div class="contact__form__container">
            <?php if (isset($success) && $success == true) { ?>
                <p class="text-success">Thank you for your contact request. Your submission has been received</p>
            <?php } ?>
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
                <div class="g-recaptcha" data-sitekey="6Lfdp38UAAAAAJUwvPlf-qC3Jfkvy7sN7SoAj6pQ"></div>
                <input class="btn" type="submit" name="submit" value="Send Message">
            </form>
        </div>
    </div>
    </div>
</div>
