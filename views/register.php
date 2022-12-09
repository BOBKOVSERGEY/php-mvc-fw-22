
<?php
use app\core\form\Form;
?>
<h1>Create an account</h1>
<?php $form =  Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'firstname'); ?>
<?php echo $form->field($model, 'lastname'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password'); ?>
<?php echo $form->field($model, 'confirmPassword'); ?>
<button type="submit" class="btn btn-primary">Register</button>
<a href="/login">Already have an account?</a>
<?php Form::end(); ?>

<!--<form method="post" action="">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text"
               class="form-control"
               id="firstname"
               name="firstname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text"
               class="form-control"
               id="lastname"
               name="lastname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text"
               class="form-control"
               id="email"
               name="email" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password"
               class="form-control"
               id="password"
               name="password" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password"
               class="form-control"
               id="confirmPassword"
               name="confirmPassword" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  <a href="/login">Already have an account?</a>
</form>-->

