<div class="container ft-cpy" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
          <div class="row" style="display:none">
            <div class="col-lg-5">
              <div class="ft-copyright">
                <p>Copyright © {{date("Y")}} {{$vendor->name}}</p>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="ft-copyright ft-r">
                <p>&nbsp; </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <script src="/systhatech/js/all.js"></script>
    <script> 
  $('#hc-nav-1-nav-title').text("Systha Tech ");
  
  </script>

<script>
function validatePhone(a) {
    
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}

function validateEmail(email) {
  const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return res.test(String(email).toLowerCase());
}

// email subscription 
$('#email_newsletter_go').on('click', function(event){

  event.preventDefault();
  let email = $('#subs-email').val();
  let valid = 0;
  let vtext ="";

  if(!validateEmail(email)){
     vtext = vtext + "- Email  not valid  "; 
      valid = 1; 
    }

if(valid ==1){
  $('#email_newsletter_result').html(vtext); 
  $('#email_newsletter_result').show();
  return ;
}


var data = $('#email_newsletter').serialize();

$.ajax({
     url :'/cms/sub/email',
     method:'post',
     data :data,
     beforeSend:function(){
      //$('#email_newsletter_result').html(load);

     }, success: function(data){
      $('#email_newsletter_result').show();
      $('#subs-email').val('');
      $('#email_newsletter_result').html("<span style='color:green !important' >Thank you for your email. </span>")

     }

   })


});

// contact form 

$('#sub').on('click', function(event){
  
   event.preventDefault();

   var name = $('#name').val();
   var email = $('#email').val();
   var phone = $('#phone').val();
   var valid =0;
   var text = "";
   $('#name').css('border','none');
   $('#phone').css('border','none');
   $('#email').css('border','none'); 
   $('#result').hide();

   $('#name').css('border-bottom','2px solid #e6e6e6');
   $('#phone').css('border-bottom','2px solid #e6e6e6');
   $('#email').css('border-bottom','2px solid #e6e6e6'); 


   if(name.length < 3){
    $('#name').css('border','1px solid red');
     text = text + "- Name must be grater then 3 letters. <br> "; 
     valid =1;
   }

   if(!validatePhone(phone)){
    $('#phone').css('border','1px solid red'); 
    text = text + "- Phone Number not valid  <br>"; 
      valid =1;
   }

   if(!validateEmail(email)){
    $('#email').css('border','1px solid red'); 
    text = text + "- Email  not valid  <br>"; 
      valid =1; 
    }

if(valid ==1){
  $('#result').html(text); 
  $('#result').show();
  return ;

}

  var data = $('#enq').serialize();

  var load = '<div style="height:300px; margin-left:20%;  color:green"> <img src="/systhatech/images/loader.gif" alt="Logo" class="img-fluid" style="height: 50px;"> <span>Processing Please Wait... </span> <div>';
   var  responseTxt = `<div style="height:300px;  line-height: 1.8; text-align:center; color:green"> 
   Thanks for your information. <br> Our sales team will contact you within 24hrs. </div>`
  

   $.ajax({
     url :'/cms/enq',
     method:'post',
     data :data,
     beforeSend:function(){
      $('#response').html(load);

     }, success: function(data){
      $('#response').html(responseTxt)

     }

   })

   

})

$('#bt').on('click', function(event){
 
  event.preventDefault();
  $('html, body').animate({ scrollTop: 3750 }, "slow");

})

$('#bt1').on('click', function(event){
 
 event.preventDefault();
 $('html, body').animate({ scrollTop: 3050 }, "slow");

})



    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SHVKFHL5TJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SHVKFHL5TJ');
</script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '288193123396869');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=288193123396869&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  </body>
</html>