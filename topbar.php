<style>

	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}

b {
  position: relative;
    top: -0.5rem;
}

</style>
<nav class="navbar navbar-light fixed-top bg-danger" style="padding:0;max-height: 4.5rem!important">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left">
  		<!-- <img src="assets/uploads/blood.png" alt="..." width="50%"> -->
  		</div>
      <div class="col-md-4 float-left text-white mt-3 mr-5">
        <!-- <large><b>HEMA SOURCE</b></large> -->
        <img src="images/logo.png" alt="" style="position: relative;
    height: 4rem!important;
    width: 15rem!important;
    top: -1.2rem!important;
    left: -1.5rem!important;">
      </div>
	  	<div class="float-right" style="position: relative;">
        <div class=" dropdown mr-4 mt-3">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
        </div>
      </div>
  </div>
  
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>