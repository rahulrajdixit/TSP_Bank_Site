<html>
<head>
  <title>Customer Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style_AppShelf1.css">

  <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    .navbar
    {
        width:100%;
        white-space:nowrap;
        background-color: #5E11A3;
    }
    .main_div
    {
        width:100%;
        height:100vh;
     
    }
    *{
        margin:0;
        padding:0;
       box-sizing:border-box;
    }
    .display_table
    {
        width:100vw;
        height:100vh;
        display:flex;
        flex-direction:column;
        justify-content: center;
        text-align:center;
    }
    .center_div
    {
        width:90vw;
        height:80vh;
        background-image:url('images/2.jpg');
        background-repeat:no-repeat;
        background-size:100%;
        padding:20px 0 0 0;
        box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
        border-radius:10px;
        margin-left:30px;
    }

    table
    {
        border-collapse:collapse;
        background-color:black;
        box-shadow:0 10px 20px 0 rgba(0,0,0,10);
        border-radius: 10px;
        border-collapse:collapse;
        table-layout:fixed;
        opacity:0.75;
        color:#F7CC1A;
        font-weight:bold;
        margin:auto;
    }
    th,td
    {
      border:1px solid #f2f2f2;
       padding:8px 30px;
      text-align:center;
      opacity:0.9;
      color:#FFFFFF ; 
    }
    th{
        text-transform:uppercase;
        font-weight:500;
    }
    td
    {
        font-size:13px;
    }

  </style>
</head>

<body>
      <!-- navigation bar -->
  <header id="main-header">             <!-- header -->
    <div class="container" style="padding-top: 12px;padding-bottom: 10px;">
      <h1>
        <span id="outer">
          TSF<span id="inner">Bank</span>
        </span>
      </h1>
    </div>
  </header>

  <nav id="navbar">                     <!-- navigation bar -->
    <div class="container" style="padding-top: 20px;">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <div class="main_div">

    <div class="display_table">
      <h1><b>Customer Details</b></h1>
      <div class="center_div">
        <div class="table-responsive">
          <table>                             <!-- table start -->
            <thead>                           <!-- table head -->
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Amount</th>
                <th colspan="2">operation</th>
              </tr>
            </thead>
            <tbody>                           <!-- table body -->
              <?php
                include 'connection.php';
                $selectquery = "select * from users";
                $query = mysqli_query($con,$selectquery);
                $numofrows = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query))
                {
              ?>

              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['balance']; ?></td>
                <td><a href="transfermoney.php?idtransfer=<?php  echo $res['id']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:#FFFFFF;"></i></a></td>
              </tr>

              <?php
                }
              ?>

            </tbody>
          </table>                            <!-- table end -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>