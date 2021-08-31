 
<?php
  if(isset($_POST['Send'])){
    $senderNme = $_POST['senderName'];
    $senderEml = $_POST['senderMail'];
    $receiver = $_POST['BenReceiver'];
    $amount = $_POST['amount'];
    if ($senderEml == $receiver) {
      header('location: users.php?msg=Can not send to self.');
    }
    else {
      include 'conn.php';
      $creditQuery = "update customer set Balance = Balance + $amount where Email = '$receiver';";
      $runCredit = mysqli_query($conn, $creditQuery) or die(mysqli_error());
      if($runCredit){
        $debitQuery = "update customer set Balance = Balance - $amount where Email = '$senderEml';";
        $runDebit = mysqli_query($conn, $debitQuery) or die(mysqli_error());
        if($runDebit){
          $benRec;
          switch ($receiver)
          {
           
            case "kailashbg2000@gmail.com":
              $benRec = "kailash";
            break;
            case "amit14@gmail.com":
              $benRec = "Amit Nijamra";
            break;
            case "utsavjain55@gmail.com":
              $benRec = "Utsav L.";
            break;
            case "lolopat21@gmail.com":
              $benRec = "Shourya Patidar";
            break;
            case "gohan100@gmail.com":
              $benRec = "Varnin Meshloop";
            break;
            case "jatiniyabjp34@gmail.com":
              $benRec = "Jatin Chaaw";
            break;
            case "vishal619@gmail.co":
              $benRec = "Bishal Kumar";
            break;
            case "gyanib14@gmail.com":
              $benRec = "Gyanendra Singh";
            break;
            case "jaytel84@gmail.com":
              $benRec = "Jay Tilgota";
            break;
            case "Yash Jain":
              $benRec = "yashnhp71@gmail.com";
            break;
          }
          $keepRecord = "insert into transfers (From_Sender, To_Receiver, Amount) values ('$senderNme', '$benRec', '$amount');";
          $runRecord = mysqli_query($conn, $keepRecord) or die(mysqli_error());
          if($runRecord){
            header('location: users.php?msg=Transaction Success!');
          }
          else {
            header('location: users.php?msg=Transaction failed!');
          }
        }
      }
    }
  }
?>