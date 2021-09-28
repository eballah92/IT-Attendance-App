<?php 

 $title = 'index';
 require_once 'includes/header.php';
 require_once 'db/conn.php';
 
 ?>

 <!-- 
     -First Name
     -Last Name
     -Date of Birth (Use DatePicker)
     -Specialty(Database Admin, Software Developer, Web Administrator)
     -Email Address
     -Contact Number
 -->

<h1 class="text-center">Registration for IT Conference</h1>

<form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name </label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name </label>
        <input type="text" class="form-control" id="lastname"name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth </label>
        <input type="text" class="form-control" id="dob" name="dob" >

    <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
      <option value="1">Database Admin</option>
      <option>Software Developer</option>
      <option>Web Administrator</option>
      <option>System Administrator</option>
      <option>Other</option>
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