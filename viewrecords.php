<?php 

 $title = 'View Record';
 require_once 'includes/header.php';
 require_once 'db/conn.php';

 //Get all attendees
 $results = $crud->getAttendees();
 
 ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Specialty</th>
    </tr>
  </thead>
  <tbody>
      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
      <th scope="row"><?php echo $r['attendee_id'] ?> </th>
      <td><?php echo $r['firstname'] ?> </td>
      <td><?php echo $r['lastname'] ?> </td>
      <td><?php echo $r['dateofbirth'] ?> </td>
      <td><?php echo $r['emailaddress'] ?> </td>
      <td><?php echo $r['contactnumber'] ?> </td>
      <td><?php echo $r['name'] ?> </td>
    </tr>
   <?php  }?>
  </tbody>
</table>








<br>

<br>
   
<br>

<br>


<?php  require_once 'includes/footer.php'; ?> 