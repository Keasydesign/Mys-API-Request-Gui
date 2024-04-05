<?php
$customCSS = array(
  '<link href="./assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',

  '<link rel="stylesheet" type="text/css" href="css/1.css">',
  '<link rel="stylesheet" type="text/css" href="css/2.css">',
  '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">',
'	  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />',
'      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>',
);

$page_title = 'Ana Sayfa';

include('./types/inc/header_main.php');
include('./types/inc/header_sidebar.php');
include('./types/inc/header_native.php')
?>
<style>
  .kural {
    color: #fff;
    font-size: 18px;
  }

  table thead tr th {
    color: #fff !important;
  }

  tr td {
    color: #fff;
  }
  
  img {
   border-radius: inherit;
}

</style>

<BODY onLoad="qwkdkwqşkwlqkdwşqkqwkDuyuru()">
<!--BAŞLANGIC-->
<div class="main-wrapper">
  <div class="row">
  <div class="g-dash-content">
  
            <section class="mt-4 mb-2">
               <div class="container-fluid">
                  <div class="row mb-5">
					<div class="col-lg-7">
						<div class="row">
							 <div class="col-lg-6">
								<div class="gcard-2 gcard-shadow fade-4">
									  <div class="gcardc">
										 <div class="row align-items-center">
											<div class="col">
											   <h2>Sayfa Sayısı</h2>
											   <h3>6</h3>
											</div>
											<div class="col-auto">
											   <div class="gny-circle">
												  <i class="ri-wallet-3-line"></i>
											   </div>
											</div>
										 </div>
									  </div>
								</div>
							 </div>
							 <div class="col-lg-6 d-none d-md-block">
								<div class="gcard-2 gcard-shadow fade-4">
									  <div class="gcardc">
										 <div class="row align-items-center">
											<div class="col">
											   <h2>SİTE AUTHOR</h2>
											   <h3>CARTELFX</h3>
											</div>
											<div class="col-auto">
											   <div class="gny-circle">
												  <i class="ri-line-chart-line"></i>
											   </div>
											</div>
										 </div>
									  </div>
								</div>
							 </div>
						</div>
                    </div>

					
					 
					<div class="col-lg-5 d-none d-md-block">
                        <div class="gcard-2 gcard-shadow fade-4">
                              <div class="gcardc">
                                 <div class="row align-items-center">

									 <div class="row">
										<div class="col">
										<h2>API AUTHOR</h2>
											   <h3>MYSTERİOUS</h3>
									
										</div>
										
									 </div>


								  </div>
								  
								  
                                 </div>
                              </div>
                        </div>
                    </div>
                  </div>
               </div>

  
</div>

<!--BİTİŞ-->
<?php
include('./types/inc/footer_native.php');
include('./types/inc/footer_main.php');
?>