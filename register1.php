<<?php include('processgrade1.php') ?>
<html>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" media="screen" href="Transfer_Layout.css">
</head>
   <body>
  
      <h1> Transfer Equivalency Form</h1>
<div align="center">
</body>

<body>
  <form method="post" action="register1.php" id="register_form">
    <h1>Input Your Transfer Information</h1>
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
      <button type="submit" name="register1" id="reg_btn">SUBMIT CLASS</button>
    </div>
  </form>
  </body>
</html>
