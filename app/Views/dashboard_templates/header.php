<!------ Header Template ----->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check In Attendees</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
   <link href="<?=base_url('db/css/dashboard.css')?>" rel="stylesheet">

</head>

<body>
  <?php
  $uri = service('uri');
  ?>
  <ul>

    <li><a class="<?= ($uri->getSegment(2) == 'main' ? 'active' : null)?>" href="<?=base_url('dashboard/main')?>">Home</a></li>
    <li><a class="<?= ($uri->getSegment(2) == 'registered' ? 'active' : null)?>" href="<?=base_url('dashboard/registered')?>">Registered Participants</a></li>
    <li><a class="<?= ($uri->getSegment(2) == 'checked_in' ? 'active' : null)?>" href="<?=base_url('dashboard/checked_in')?>">Checked In Participants</a></li>
    <li><a href="<?=base_url('/logout')?>">Logout</a></li>
  </ul>