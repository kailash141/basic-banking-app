
<?php
  if(isset($_GET['msg'])){
    $alert=$_GET['msg'];
    echo ("<script>alert('$alert')</script>");
  }
  include 'conn.php';
  $usersdata = "select * from customer;";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CICI Users</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <style media="screen">
  .box{
    border: none;
  }
  .box table{
    text-align: center;
    line-height: 35px;
    margin: auto;
    width: 100%;
  }
  .box table thead{
    background-color: #000000ad;
    color: #fff;
    font-size: 1.1rem;
  }
  .box table tbody tr{
    background-color: #fff;
  }
  .box table tbody tr td button{
    cursor: pointer;
    background-color: #35ade1b3;
  }
  .frm{
    display: grid;
    justify-content: center;
    border: 2px solid;
    height: 85%;
    margin: auto;
    width: 400px;
    background-color: #f8f8f8;
  }
  .frm h3{
    margin: auto;
    font-size: 1.6rem;
    margin-top: 3px;
    margin-bottom: 20px;
    background-color: #000000ad;
    color: #fff;
    display: flex;
    justify-content: center;
    border-radius: 10px;
    align-items: center;
    width: 100%;
  }
  .frm input, .frm select{
    display: block;
    height: 30px;
    width: 300px;
    padding-left: 5px;
    font-size: 1.1rem;
    outline: none;
  }
  .btns{
    display: flex;
    justify-content: space-between;
  }
  .btns input{
    width: 120px;
    font-size: .8rem;
    background-color: #35ade1b3;
    cursor: pointer;
  }
 
  </style>
  <header>
    <h1>CICI Bank</h1>
    <nav class="navigation">
      <a href="index.html">Home</a>
      <a href="users.php">Users</a>
      <a href="transactions.php">Transactions</a>
      <a href="about.html">About Us</a>
    </nav>
  </header>
  <body>
    <div class="box">
      <?php
        $runUsersData = mysqli_query($conn, $usersdata) or die(mysqli_error());
        if($runUsersData)
          {
      ?>
      <table>
        <thead>
          <td>S.No.</td>
          <td>Customer Name</td>
          <td>Customer Email</td>
          <td>Current Balance (Rs)</td>
          <td>Operation</td>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($runUsersData)) {
            echo "<tr><td>{$row['SNo']}</td><td>{$row['Name']}</td><td>{$row['Email']}</td><td>{$row['Balance']}</td><td><button onclick = f{$row['SNo']}()>&nbsp Transact &nbsp</button></td></tr>\n";
          }
          ?>
        </tbody>
      </table>
      <?php
        }
      ?>
    </div>
    <div class="box">
      <form class="frm" action="action.php" method="post">
        <h3>Transaction Window</h3>
        <input id="sname" type="text" name="senderName" readonly placeholder="Sender' Name">
        <input id="smail" type="email" name="senderMail" readonly placeholder="Sender's Email">
        <select class="options" name="BenReceiver" id="BenReceiver" size="1">
          <option disabled selected>Select Receiver</option>
          <option value="kailash2000@gmail.com">kailash</option>
          <option value="amit14@gmail.com">Amit Nijamra</option>
          <option value="utsavjain55@gmail.com">Utsav L.</option>
          <option value="lolopat21@gmail.com">Shourya Patidar</option>
          <option value="gohan100@gmail.com">Varnin Meshloop</option>
          <option value="jatiniyabjp34@gmail.com">Jatin Chaaw</option>
          <option value="vishal619@gmail.com">Bishal Kumar</option>
          <option value="gyanib14@gmail.com">Gyanendra Singh</option>
          <option value="jaytel84@gmail.com">Jay Tilgota</option>
          <option value="yashnhp71@gmail.com">Yash Jain</option>
        </select>
        <input required id="amount" type="number" min="1" name="amount" placeholder="Amount">
        <div class="btns">
          <input type="submit" name="Send" value="Make Transaction">
          <input type="reset" name="Reset" value="Reset">
        </div>
      </form>
    </div>
    <script src="main.js" type="text/javascript"></script>
  </body>
  <footer id="copyright">
    <p>Copyright &copy CICI Bank - 2021 | Developed by Himanshu Malviya</p>
  </footer>
</html>