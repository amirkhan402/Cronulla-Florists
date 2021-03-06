<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{url('theme/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('theme/js/revslider.js')}}"></script>
<script type="text/javascript" src="{{url('theme/js/common.js')}}"></script>
<script type="text/javascript" src="{{url('theme/js/countdown.js')}}"></script> 
<script type="text/javascript" src="{{url('theme/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{url('theme/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('theme/js/jquery.mobile-menu.min.js')}}"></script>
<!--SweetAlerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!--Notify-->
<script src="{{ asset('theme/js/notify/js/notify.min.js') }}"></script>
<!--Notify init-->
<script src="{{ asset('theme/js/notify/notify.min.js') }}"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
@include('theme.layout.partials.message')
<script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
	
	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>
<script type="text/javascript">
       
        jQuery(document).ready(function(){
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:750,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        
        </script>
<script type="text/javascript">
    function quickView(id, name, description, feature_image, image, shipment_cost, price, currency) {
      $('.succ').hide();
      $('.err').hide();
      $('.popup').css('display', 'block');
      $('.quick-view-modal').attr('id', 'fade');
      $('#fade').css('display', 'block');
      // assign value to modal
      $('#product-zoom').attr('src', feature_image);
      $('#product-zoom').attr('data-zoom-image', feature_image);
      // $('#data-product-zoom0').attr('data-image', 'http://'+feature_image);
      // $('#data-product-zoom0').attr('data-zoom-image', 'http://'+feature_image);
      // $('#product-zoom0').attr('src', 'http://'+feature_image);
      // $('#data-product-zoom0').attr('href', 'javascript:changeImage("'+feature_image+'")');
      // $('#data-product-zoom1').attr('data-image', 'http://'+image);
      // $('#data-product-zoom1').attr('data-zoom-image', 'http://'+image);
      // $('#product-zoom1').attr('src', 'http://'+image);
      // $('#data-product-zoom1').attr('href', 'javascript:changeImage("'+image+'")');
      $('.product-id').val(id);
      $('.item-name').text(name);
      $('#qty').val(1);
      $('#product-price').text(price);
      $('.hidden-price').val(price);
      $('.item-detail').text(description);
    }
    // change image dynamically and show as main image
    // function changeImage(imageName) {
    //     $('#product-zoom').attr('src', 'http://'+imageName);
    //     $('#product-zoom').attr('data-zoom-image', 'http://'+imageName);
    // }
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('.popup').hide();
        jQuery('#fade').hide();
        //$('.quick-view-modal').removeAttr('id');
    }

    $('.items-count').click(function(){
        var price = $('.qty').val() * $('.hidden-price').val();
        $('#product-price').text(price.toFixed(2));
    });

    $('.cart-submit').click(function(){
        var id = $('.product-id').val();
        var qty = $('.qty').val();
        $.ajax({
            type: "POST",
            url: "/add-cart",
            dataType: 'json',
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id,
              "qty": qty,
            },
            success: function(data){
                if(data['success']) {
                  // update sidebar price and qty  section
                  $('.sidebar-qty').text(data['cartQty']);                 
                  $('.sidebar-price').text(data['cartTotal'].toFixed(2));
                  $('.sidebar-checkout').css('display', 'block');
                  $('.top-count').text(data['cartQty']);
                  window.location.href = "{{url('/shopping-cart')}}";
                  //alertSuccess(data['success']);

                }
                else if (data['error']) {
                  alertError(data['error']);
                }

            }
         });
    });


    $('.btn-empty').click(function(event){
      event.preventDefault();
         swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover these item!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                 $('#cart-data').submit();
              } 
          // if ends
          });    
      });

     $('.remove-item').click(function(){
        var postId = $(this).data('id');
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this item!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
            var url = "{{url('delete-cart')}}";
                $.ajax({
                  type: "get",
                  url: url,
                  dataType: 'json',
                  data: {
                    "id": postId 
                  },
                  success: function(data){
                    if (data['success'] != null) {
                      $("#"+postId+"").remove();
                      $('.checkout-price').text(data['cartTotal'].toFixed(2));
                      $('.checkout-qty').text(data['cartQty']);
                      $('.top-count').text(data['cartQty']);
                      alertSuccess(data['success']);

                    } else if (data['error'] != null) {
                      alertError(data['error']);

                    } else if (data['empty'] != null) {
                      $('#cart-data').hide();
                      $('.cart-checkout').hide();
                      $('.cart-empty').show();
                      $('.top-count').text(0);
                      alertSuccess(data['empty']);
                    }
                    // if else ends
                  }
                  // success promise ends
                });
                // ajax ends
          } 
          // if ends
        });
      });
     // item remove function ends

      function updateCart(id) {
        var id = id;
        var qty = $('.item-qty'+id+'').val();
        if (qty < 1) {
          alertError("Please select valid quantity.");
        } else {
           $.ajax({
            type: "post",
            url: "{{url('update-cart')}}",
            dataType: 'json',
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id,
              "qty": qty,
            },
            success: function(data){
               //console.log(data['success'][id]['id']);
               if (data['success'] != null) {
                $('.checkout-price').text(data['cartTotal'].toFixed(2));
                $('.checkout-qty').text(data['cartQty']);
                $('.item-total'+id+'').text((data['success'][id]['price'] * data['success'][id]['quantity']).toFixed(2));
                $('.top-count').text(data['cartQty']);
                alertSuccess("Cart updated successfully.");

               } else if (data['error'] != null) {
                  alertError(data['error']);
               }
               // if else ends
            }
            // success ends
         });
        }
       
        
      }
     // item update function ends

     function alertSuccess(message) {
        $.notify({
            icon: 'fa fa-check-circle fa-4x',
            title: 'Success!',
            message: message,
        },{
            element: 'body',
            type: "success",
            showProgressbar: false,
            placement: {
                from: "bottom",
                align: "left"
            },

            animate: {
                enter: 'animated zoomIn',
                exit: 'animated zoomOut'
            },
            template: '<div data-notify="container" class="custom-notify-success col-xs-11 col-sm-6 col-md-4 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#fff;">×</button>' +
                        '<div class="col-xs-2 col-sm-2 col-md-2" style=" display: inline-block;"><span data-notify="icon"></span></div>' +
                        '<div  class="col-xs-10 col-sm-9 col-md-10" style=" display: inline-block;"><span data-notify="title" style="font-size: 20px;font-weight: 600;">{1}</span><br>' +
                        '<span data-notify="message" style="margin: 0;font-size: 13px;">{2}</span></div>' +
                        '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        '</div>' +
                    '</div>' 
        });
     }
     // succes function ends

     function alertError(message) {
         $.notify({
            icon: 'fa fa-times-circle fa-4x',
            title: 'Error!',
            message: message,
        },{
            element: 'body',
            type: "danger",
            showProgressbar: false,
            placement: {
                from: "bottom",
                align: "left"
            },
            animate: {
                enter: 'animated zoomIn',
                exit: 'animated zoomOut'
            },
            template: '<div data-notify="container" class="custom-notify-danger col-xs-11 col-sm-6 col-md-4 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#fff;">×</button>' +
                        '<div class="col-xs-2 col-sm-2 col-md-2" style=" display: inline-block;"><span data-notify="icon"></span></div>' +
                        '<div class="col-xs-10 col-sm-9 col-md-10" style=" display: inline-block;"><span data-notify="title" style="font-size: 20px;font-weight: 600;margin: 0;">{1}</span><br>' +
                        '<span data-notify="message" style="margin: 0;font-size: 13px;">{2}</span></div>' +
                        '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        '</div>' +
                    '</div>' 
        });
     }
     // Error alert ends

    /*disable non active tabs*/
    $('.nav-tabs li').not('.active').addClass('disabled');
    /*to actually disable clicking the bootstrap tab, as noticed in comments by user3067524*/
    $('.nav-tabs li').not('.active').find('a').removeAttr("data-toggle");
     // to show previous button on tab click
      $('.tab-click').click(function(){
        $('.previous').show();
        $('.next').show();
      });
      // to display tabs on tab click in place data-toggle
      // $('.nav-tabs a').click(function(){
      //     $(this).tab('show');
      // });
      // get tabs length
      var totalTabs = $('.nav-tabs li').length;
      var currentTab = 1;
      // perform functionality on next button
      $('.next').click(function(e){
          e.preventDefault();
          // get current tab
          var tab =  $(".nav-tabs .active > a").attr("href");
          var getErrors = 0;
          if (tab == "#tab_default_1") {
             $(".required-step-1").each(function(){
                if ($(this).val() == "") {
                  getErrors++;
                }
            });
          } else if (tab == "#tab_default_2") {
              $(".required-step-2").each(function(){
                if ($(this).val() == "") {
                  getErrors++;
                }
            });
          } else if (tab == "#tab_default_3") {
              $(".required-step-3").each(function(){
                if ($(this).val() == "") {
                  getErrors++;
                }
            });
              if ($('.payment_method:checked').length == 0) {
                  getErrors++;
              }
          }

            if (getErrors > 0) {
              alertError("Please fill the required fields.");
            } else {
              currentTab +=1;
              showHideControls();
              var next_tab = $('.nav-tabs > .active').next('li').find('a');
              if(next_tab.length > 0){

                /*enable next tab*/
                $('.nav-tabs li.active').next('li').removeClass('disabled');
                $('.nav-tabs li.active').next('li').find('a').attr("data-toggle","tab")
                next_tab.trigger('click');
              }
            }
        });
      // perform functionality on previous button click
        $('.previous').click(function(e){
          e.preventDefault();
          currentTab -=1;
          showHideControls();
          var prev_tab = $('.nav-tabs > .active').prev('li').find('a');
          if(prev_tab.length > 0){
            prev_tab.trigger('click');
          }
      });
      // hdie/show next and previous buttons on condition 
      function showHideControls(){
        if(currentTab == 1){
          $('.previous').hide();
        } else if(currentTab == totalTabs){
          $('.next').hide();
        } else {
          $('.previous').show();
          $('.next').show();
        }

      }

      $('.remove-item-order').click(function(){
        var postId = $(this).data('id');
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this item!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          })
          .then((willDelete) => {
          if (willDelete) {
            var url = "{{url('delete-cart')}}";
                $.ajax({
                  type: "get",
                  url: url,
                  dataType: 'json',
                  data: {
                    "id": postId 
                  },
                  success: function(data){
                    if (data['success'] != null) {
                      $("#"+postId+"").remove();
                      $('.checkout-price').text(data['cartTotal'].toFixed(2));
                      $('.checkout-qty').text(data['cartQty']);
                      $('.top-count').text(data['cartQty']);
                      alertSuccess(data['success']);

                    } else if (data['error'] != null) {
                      alertError(data['error']);

                    } else if (data['empty'] != null) {
                      window.location.href ='{{URL::to("/shopping-cart")}}';
                    }
                    // if else ends
                  }
                  // success promise ends
                });
                // ajax ends
          } 
          // if ends
        });
      });
     // order item remove function ends

     // //submit order form
     //  $('.btn-proceed-order').click(function(e) {
     //    $('#co-billing-form').submit();
     //      var getErrors = 0;
     //        // check 1st tab field
     //        $(".required-step-1").each(function(){
     //            if ($(this).val() == "") {
     //              getErrors++;
     //            }
     //        });
     //        // check 2nd tab field
     //        $(".required-step-2").each(function(){
     //            if ($(this).val() == "") {
     //              getErrors++;
     //            }
     //        });
     //        // check 3rd tab field
     //        $(".required-step-3").each(function(){
     //            if ($(this).val() == "") {
     //              getErrors++;
     //            }
     //        });
     //        //check for errors
     //        if (getErrors > 0) {
     //          alertError("Please fill the required fields.");
     //        } else {
     //          // form submit
     //          $('#co-billing-form').submit();
     //        }
     // });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

      function checkOrderForm() {
        //   alert({{url("check-order-from")}});
        // get billing method
        var billingMethod = $( 'input[name=cart_billing_method]:checked' ).val();
        if (billingMethod == "paypal") {
          // $('#co-billing-form').attr('action', 'https://cronullaflorists.com.au/submit-paypal');
          $('#co-billing-form').attr('action', '{{url("submit-paypal")}}');
          $('#co-billing-form').submit();
        } else if (billingMethod == "stripe") {
            var form =  $('#co-billing-form')[0];
            var data = new FormData(form);
            $.ajax({
              // url: 'https://cronullaflorists.com.au/check-order-from',
              url: '{{url("check-order-from")}}',
              method: 'post',
              data: data,
              processData: false,
              contentType: false,
              cache: false,
              success: (data) => {
                
                if (data['success'] != null) {
                  payStripe();
                } else if (data['error'] != null)
                  alertError(data['error']);
              },
              error: (error) => {
                console.log(error);
                alert('Oops! Something went wrong')
              }
            })
            // ajax ends
        }
        // if ends    
      }
      // checkform functionends

      function payStripe() {
          var handler = StripeCheckout.configure({
           // your publisher key id
           
           key: 'pk_test_41VevGvxfneFWzQsV3rreJri00hWDvpf2E', 
           // key: 'pk_live_IpEvRYU7wEBNXcm6IVAxiVI9', 
          token: function (token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.
            console.log('Token Created!!');
            console.log(token)
            $('#token_response').html(JSON.stringify(token));
            
            $.ajax({
              url: '{{ url("store") }}',
              method: 'post',
              data: { 
                tokenId: token.id 
              },
              success: (data) => {
                  if(data.status == "succeeded") {
                    $('#s_id').val(data.id);
                     submitOrder();
                  }
              },
              error: (error) => {
                console.log(error);
                alert('Oops! Something went wrong')
              }
            })
          }
        });
       
        handler.open({
          name: 'Cronulla Florists',
          description: $('.checkout-qty').text()+' Products' ,
          amount: $('.checkout-price').text() * 100
        });
      }

  function submitOrder(s_id){
      var form =  $('#co-billing-form')[0];
      var data = new FormData(form);
      $.ajax({
        url: '{{url("submit-stripe-order") }}',
        method: 'post',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: (data) => {
          $('.cart-data').hide();
          $('.cart-checkout').hide();
          $('.cart-empty').show();
          $('.top-count').text(0);
          alertSuccess(data['success']);

        },
        error: (error) => {
          console.log(error);
          alert('Oops! Something went wrong')
        }
      })
      // ajax ends
  }
</script>
<script>
/* Date Picker disable prevoius dates and today date*/
$(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var nextday = day + 1;   
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
    nextday= '0' + nextday.toString();
    var maxDate = year + '-' + month + '-' + nextday;
    $('#txtDate').attr('min', maxDate);
});
</script>
@yield('footer-script')
