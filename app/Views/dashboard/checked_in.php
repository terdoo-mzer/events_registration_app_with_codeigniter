 <h1>Checked In Participants</h1>

 <table id="customers">
   <tr>
     <th>S/N</th>
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
         <td><?php echo $attendee['id'] ?></td>
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
   <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Königlich Essen</td>
    <td>Philip Cramer</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>Simon Crowther</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris spécialités</td>
    <td>Marie Bertrand</td>
    <td>France</td>
  </tr> -->
 </table>