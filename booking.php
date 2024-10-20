<?php
require_once('./config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `booking_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>
<div class="container-fluid p-5">
    <form action="" id="booking-form" class="shadow-lg p-4 bg-white rounded">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
        <input type="hidden" name="cab_id" value="<?= isset($_GET['cid']) ? $_GET['cid'] : (isset($cab_id) ? $cab_id : "") ?>">
          <a href="./"><img style="" src="<?php echo validate_image($_settings->info('logo')) ?>"  alt="Logo"></a>

        <h3 class="text-center mb-4">Cab Booking Details</h3>

        <div class="form-group mb-3">
            <label for="pickup_zone" class="form-label">Pickup Zone</label>
            <textarea 
                name="pickup_zone" 
                id="pickup_zone" 
                rows="3" 
                class="form-control form-control-lg border-primary rounded-1 shadow-sm" 
                placeholder="Enter your pickup location..." 
                required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="drop_zone" class="form-label">Drop-off Zone</label>
            <textarea 
                name="drop_zone" 
                id="drop_zone" 
                rows="3" 
                class="form-control form-control-lg border-primary rounded-1 shadow-sm" 
                placeholder="Enter your drop-off location..." 
                required></textarea>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn  text-white btn-lg  shadow-sm" style="background:goldenrod;">Book Now</button>
        </div>
    </form>
</div>

<script>
	$(document).ready(function(){
		$('#booking-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_booking",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = './?p=booking_list';
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                            end_loader()
                    }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
				}
			})
		})
	})
</script>