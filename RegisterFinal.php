<?php include('ProcessFinal.php') ?>
<html>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" media="screen" href="System_Layout.css">
</head>

   <body>
  
      <h1> Transfer Equivalency Form</h1>
<div align="center">
</body>

<body>
  <form method="post" action="RegisterFinal.php" id="register_form">
    <h3>Input your transfer course information below to view Arcadia course equivalency and general education requirements</h3>
    <h2>Course 1</h2>
    <div <?php if (isset($school_error)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="schoolname" placeholder="SCHOOL NAME" value="<?php echo $schoolname; ?>">
    <?php if (isset($school_error)): ?>
      <span><?php echo $school_error; ?></span>
    <?php endif ?>
    </div>
    <div <?php if (isset($code_error)): ?> class="form_error" <?php endif ?> >
      <input type="text" name="coursecode" placeholder="COURSE CODE" value="<?php echo $coursecode; ?>">
      <?php if (isset($code_error)): ?>
        <span><?php echo $code_error; ?></span>
      <?php endif ?>
    </div>
    <div>
      <input type="number"  placeholder="CREDITS" name="credits">
    </div>
  <div <?php if (isset($grade_error)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="grade" placeholder="EARNED GRADE" value="<?php echo $grade; ?>">
     <?php if (isset($grade_error)): ?>
        <span><?php echo $grade_error; ?></span>
      <?php endif ?>
    </div>
    

    <h2>Course 2</h2>
    <div <?php if (isset($school_error1)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="schoolname1" placeholder="SCHOOL NAME" value="<?php echo $schoolname1; ?>">
    <?php if (isset($school_error1)): ?>
      <span><?php echo $school_error1; ?></span>
    <?php endif ?>
    </div>
    <div <?php if (isset($code_error1)): ?> class="form_error" <?php endif ?> >
      <input type="text" name="coursecode1" placeholder="COURSE CODE" value="<?php echo $coursecode1; ?>">
      <?php if (isset($code_error1)): ?>
        <span><?php echo $code_error1; ?></span>
      <?php endif ?>
    </div>
    <div>
      <input type="number"  placeholder="CREDITS" name="credits1">
    </div>
  <div <?php if (isset($grade_error1)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="grade1" placeholder="EARNED GRADE" value="<?php echo $grade1; ?>">
     <?php if (isset($grade_error1)): ?>
        <span><?php echo $grade_error1; ?></span>
      <?php endif ?>
    </div>
    <div>
      <button type="submit" name="RegisterFinal" id="reg_btn">SUBMIT COURSES</button>
      <button type="reset" name="reset" id="reg_btn1">RESET</button>
    </div>
  </form>
  </body>
       <ul>
        <li><a href="SchoolList.php">List of School Names</a></li>
        
      </ul>
  <footer>
  <p>For any additional questions, or to report missing course information, please contact the Registrar's office <br>
    Taylor Hall, Room 103 <br>
    215-572-2100 <br>
    215-572-2126 (fax) <br>
    registrar@arcadia.edu
</footer>

</html>
