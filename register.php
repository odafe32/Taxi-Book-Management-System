<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en">
 <?php require_once('inc/header.php') ?>
<body class="">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      
    }
    body{
      background-image:url('<?= validate_image($_settings->info('cover')) ?>');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .pass_type{
      cursor: pointer;
    }
    #cimg{
      width: 100%;
      height: auto;
     
      object-fit: scale-down;
      object-position: center center;
    }
    @media screen and (max-width:768px) {
      .back-to-site{
margin-bottom:20px;
      }
    }
  </style>

<div class="container" style="margin: 100px 0;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">
          <img src="<?= validate_image($_settings->info('logo')) ?>" alt="Logo"  >
          <br>
          <b>Create an Account</b>
        </div>
        <div class="card-body">
          <form id="register-frm" action="" method="post">
            <input type="hidden" name="id">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" autofocus class="form-control form-control-sm" required>
                <small>First Name</small>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="middlename" id="middlename" placeholder="Enter Middle Name (optional)" class="form-control form-control-sm">
                <small>Middle Name</small>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" class="form-control form-control-sm" required>
                <small>Last Name</small>
              </div>
              <div class="form-group col-md-6">
                <select name="gender" id="gender" class="custom-select custom-select-sm" required>
                  <option>Male</option>
                  <option>Female</option>
                </select>
                <small>Gender</small>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="contact" id="contact" placeholder="Enter Contact #" class="form-control form-control-sm" required>
                <small>Contact #</small>
              </div>
              <div class="form-group col-md-12">
                <small>Address</small>
                <textarea name="address" id="address" rows="3" class="form-control form-control-sm" placeholder="Block 6 Lot 23, Here Subd., There City, Anywhere, 2306"></textarea>
              </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" id="email" placeholder="jsmith@sample.com" class="form-control form-control-sm" required>
                <small>Email</small>
              </div>
              <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control form-control-sm" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small>Password</small>
              </div>
              <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" id="cpassword" placeholder="Confirm your Password" class="form-control form-control-sm" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small>Confirm Password</small>
              </div>
              <div class="form-group col-md-6">
                <label for="customFile" class="control-label">Avatar</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="img" onchange="displayImg(this,$(this))">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group col-md-6 d-flex justify-content-center">
                <img src="" alt="" id="cimg" class="img-fluid img-thumbnail">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-8 back-to-site" >
                <a href="<?= base_url ?>">Back to Site</a>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-warning btn-sm btn-block">Register</button>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 text-center">
                <a href="<?= base_url.'login.php' ?>">Already have an Account</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  window.displayImg = function(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }
	        reader.readAsDataURL(input.files[0]);
	    } else {
            $('#cimg').attr('src', "");
            _this.siblings('.custom-file-label').html("Choose file");
        }
	}
  
  $(document).ready(function(){
    end_loader();
    $('.pass_type').click(function(){
      var type = $(this).attr('data-type');
      if(type == 'password'){
        $(this).attr('data-type','text');
        $(this).closest('.input-group').find('input').attr('type',"text");
        $(this).removeClass("fa-eye-slash").addClass("fa-eye");
      } else {
        $(this).attr('data-type','password');
        $(this).closest('.input-group').find('input').attr('type',"password");
        $(this).removeClass("fa-eye").addClass("fa-eye-slash");
      }
    });

    $('#register-frm').submit(function(e){
      e.preventDefault();
      var _this = $(this);
      $('.err-msg').remove();
      var el = $('<div>').hide();
      if($('#password').val() != $('#cpassword').val()){
        el.addClass('alert alert-danger err-msg').text('Password does not match.');
        _this.prepend(el);
        el.show('slow');
        return false;
      }
			start_loader();
			$.ajax({
				url: _base_url_+"classes/Users.php?f=save_client",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error: err => {
					console.log(err);
					alert_toast("An error occurred",'error');
					end_loader();
				},
				success: function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = "./login.php";
					} else if(resp.status == 'failed' && !!resp.msg){   
              el.addClass("alert alert-danger err-msg").text(resp.msg);
              _this.prepend(el);
              el.show('slow');
          } else {
						alert_toast("An error occurred",'error');
						end_loader();
            console.log(resp);
					}
          $('html, body').scrollTop(0);
				}
			});
    });
  });
</script>
</body>
</html>
