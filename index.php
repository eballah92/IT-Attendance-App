<?php 

 $title = 'index';
 require_once 'includes/header.php';
 require_once 'db/conn.php';
 
 $results = $crud->getSpecialties();
 ?>

 <!-- 
     -First Name
     -Last Name
     -Date of Birth (Use DatePicker)
     -Specialty(Database Admin, Software Developer, Web Administrator)
     -Email Address
     -Contact Number
 -->
<br>

<h1 class="text-center">Registration for IT Conference</h1>

<form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name </label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name </label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth </label>
        <input type="text" class="form-control" id="dob" name="dob" >
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
    <select class="form-control" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
      <option value="<?php echo $r['specialty_id'] ?>"> <?php echo $r['name']; ?> </option>
      
      <?php  }?>
    </select>
    </div>
    </div>
    <div class="form-group">
        <label for="Email">Email address</label>
        <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="Phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp"  class="form-text text-muted">We'll never share your contact with anyone else.</small>
    </div>
   
     <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<br>

<br>
   
<br>

<br>


<?php  require_once 'includes/footer.php'; ?> 