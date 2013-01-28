
<?php

function sendEmail($navn, $email, $tlf, $foretak, $poststed, $kassasystem, $kommentar) {
  $to = "mail@snappit.no";
  $subject = "Fra form";
  $body = "Hi,\n\n";
  $body .= "\nNavn:" . $navn;
  $body .= "\nEpost:" . $email;
  $body .= "\nTlf:" . $tlf;
  $body .= "\nForetak:" . $foretak;
  $body .= "\nPoststed:" . $poststed;
  $body .= "\nKassasystem:" . $kassasystem;
  $body .= "\nKommentar:" . $kommentar;

  if (mail($to, $subject, $body)) {
    echo("<p>Message successfully sent!</p>");
  } else {
    echo("<p>Message delivery failed...</p>");
  }
}

$posting = false;
if (isset($_POST['submit'])) {
  $posting = true;
  $navn = $_POST['navn'];
  $email = $_POST['email']; // TODO: verify email adress
  if(_CURRENT_PAGE == 'company') {
    $tlf = $_POST['tlf'];
    $tlf = intval($tlf);
    $foretak = $_POST['foretak'];
  } else {
    // on faq form, these fields are not present
    $tlf = 'not in faqForm';
    $foretak = 'not in faqForm';
  }
  $poststed = $_POST['poststed'];
  $kassasystem = $_POST['kassasystem'];
  $kommentar = $_POST['kommentar'];
}

// If form is valid: Send email and display OK message
// If not valid: Display form again (with error messages)
if ($navn && $email && $tlf && $foretak) {
  echo ""._MESSAGE_SENT_THANKS;
  sendEmail($navn, $email, $tlf, $foretak, $poststed, $kassasystem, $kommentar);
} else {
  include("regForm_content.php");
}
?>

