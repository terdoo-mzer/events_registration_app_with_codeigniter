<h1>Registered Participants</h1>

<table id="customers">
  <tr>
  
    <th>Attendee ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>

  <?php
   if (isset($result)) {
     foreach ($result as $attendee) {
   ?>
      <tr class="header_item">
    
        <td><?php echo $attendee['attendee_ID'] ?></td>
        <td><?php echo $attendee['first_name'] ?></td>
        <td><?php echo $attendee['last_name'] ?></td>
        <td><?php echo $attendee['email'] ?></td>
        <td><?php echo $attendee['phone'] ?></td>
     </tr>
  <?php
     }
   }
   ?>
</table>