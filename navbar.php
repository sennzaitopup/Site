 <?php

  session_start();

  $Data = $_SESSION['username'];

  ?>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg">
   <!-- Container wrapper -->
   <div class="container">
     <!-- Navbar brand -->
     <a class="navbar-brand me-2" href="./">
       <img src="https://media.discordapp.net/attachments/849652493902020639/892062521182289980/LSF_Logo_1x1.png" height="50" alt="" loading="Please wait.." style="margin-top: -1px;" />
     </a>

     <!-- Toggle button -->
     <button class="navbar-toggler text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
       <i class="fas fa-bars"></i>
     </button>

     <!-- Collapsible wrapper -->
     <div class="collapse navbar-collapse fw-bold" id="navbarButtonsExample">
       <!-- Left links -->
       <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
         <?php if ($Data == "") { ?>
           <div class="dropdown nav-item">
             <a class="dropdown-toggle nav-link text-white" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" href="javascript:;">
               Top 10 Rank
             </a>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item text-black" href="./top_guild.php">Top Guild</a></li>
               <li><a class="dropdown-item text-black" href="./top_rank.php">Top Rank </a></li>
             </ul>
           </div>
           <li class="nav-item">
             <a class="nav-link text-white" href="./donation.php">Donation</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="./server_info.php">Server Info</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="./download.php">Download</a>
           </li>
           <div class="dropdown nav-item">
             <a class="dropdown-toggle nav-link text-white" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" href="javascript:;">
               Community
             </a>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item text-black" href="https://discord.gg/tnqFa8qwKx">Discord</a></li>
               <li><a class="dropdown-item text-black" href="https://www.facebook.com/ForeverLosa">Facebook </a></li>
             </ul>
           </div>
         <?php } else { ?>
           <li class="nav-item">
             <a class="nav-link text-white" href="./member_page.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="javascript:;" onclick="buka('./page/daily_cash');">Daily Cash</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="javascript:;" onclick="buka('./page/redeem_code');">Redeem Code</a>
           </li>
           <div class="dropdown nav-item">
             <a class="dropdown-toggle nav-link text-white" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" href="javascript:;">
               Accounts Settings
             </a>
             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item text-black" href="javascript:;" onclick="buka('./page/change_password');">Change Password</a></li>
               <li><a class="dropdown-item text-black" href="javascript:;" onclick="buka('./page/history_daily_cash');">History Daily Cash</a></li>
               <li><a class="dropdown-item text-black" href="javascript:;" onclick="buka('./page/history_redeem');">History Redeem</a></li>
             </ul>
           </div>
         <?php } ?>
       </ul>
       <!-- Left links -->

       <div class="d-flex align-items-center">
         <?php if ($Data == "") { ?>
           <a class="btn btn-success me-3" href="./register.php">
             Register
           </a>
           <a class="btn btn-warning me-3" href="./login.php">
             Login
           </a>
         <?php } else { ?>
           <a class="btn btn-primary me-3" href="./logout.php">
             Logout
           </a>
         <?php } ?>
       </div>
     </div>
     <!-- Collapsible wrapper -->
   </div>
   <!-- Container wrapper -->
 </nav>
 <!-- Navbar -->