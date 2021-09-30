<?php 

    $title = 'Edit Record ';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    $results = $crud->getSpecialties();
    
    //Print attendee by id back to form for edit

    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Please check details and try again</h1>";
        
    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
?>

<br>

<h1 class="text-center">Edit Record</h1>

<form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
        <label for="firstname">First Name </label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name </label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>"id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth </label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob" >
        <p>Format options:<br>
        <select id="format">
            <option value="mm/dd/yy">Default - mm/dd/yy</option>
            <option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
            <option value="d M, y">Short - d M, y</option>
            <option value="d MM, y">Medium - d MM, y</option>
            <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
            <option value="&apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy">With text - &apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy</option>
        </select>
        </p> 
  

    <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" value="<?php echo $attendee['name'] ?>" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>

      <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == 
            $attendee['specialty_id']) echo 'selected'?> > 
            <?php echo $r['name']; ?> 
    </option>
      
      <?php  }?>
    </select>
    </div>
    </div>
    <div class="form-group">
        <label for="Email">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="Email" name="Email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="Phone">Contact Number</label>
        <input type="text" class="form-control"  value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp"  class="form-text text-muted">We'll never share your contact with anyone else.</small>
    </div>
   
     <button type="submit" name="submit" class="btn btn-success btn-block">Save changes</button>
    </form>

    <?php } ?>

<br>

<br>
   
<br>

<br>


<?php  require_once 'includes/footer.php'; ?> 