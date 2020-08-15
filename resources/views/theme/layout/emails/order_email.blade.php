<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Confirmation</title>
</head>

<body style="font-family:Arial; color:#555; font-size:13px; line-height:20px">
<div style="max-width:800px; margin:auto;">
  <!---->
  <table width="100%" cellpadding="0" cellspacing="0" style=" border-bottom:1px solid #000; margin-bottom:20px;">
    <tr>
      <td><div style="margin:5px 0; font-family:Arial; font-size:13px;">
          Cronulla Florists
        </div>
        <div style="color:#183650; font-size:20px;">
          Order Confirmation
        </div></td>
      <td align="right"><img src="https://cronullaflorists.com.au/theme/images/email_logo.png" alt="Logo" /></td>
    </tr>
  </table>
 
  
  <table width="100%" cellpadding="0" cellspacing="0" style=" border-bottom:0px solid #000; margin-bottom:20px;">
    <tr>
      <td style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">
  
        <div style="font-family:Arial; font-size:16px; margin-bottom:30px;">
          Order Status - <b style="color:#34ccff; ">In Process</b>
        </div>
        <div style="font-family:Arial; font-size:15px; color:#000; margin-bottom:5px; ">
          Dear Mr. {{$s_name}},
        </div>
        <div style="font-family:Arial; font-size:13px;">
          Welcome to Cronulla Florists...
        </div></td>
    </tr>
  </table>

  
  <table width="100%" cellspacing="0" cellpadding="0" style=" border-top:1px solid #000;  margin-top:20px; margin-bottom:20px; padding:20px 0;">
    <tr>
      <td width="60" style=""><img src="https://cronullaflorists.com.au/theme/images/info.png" height="50" /></td>
      <td style=""><div style="font-family:Arial; font-size:24px; color:#000; margin-bottom:5px; ">
          Sender Details
        </div></td>
    </tr>
  </table>
 
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr style="background:#fff;">
      <td width="20%" style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; border-right:1px solid #ddd;"><b>Name</b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Mobile</b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Email</b></td>
    
    </tr>
    <tr>
      <td style="padding:20px 10px ; border-bottom:1px solid #ddd; border-right:1px solid #ddd;">{{$s_name}} </td>
       <td style="padding:20px 10px; border-bottom:1px solid #ddd;">{{$s_phone}}</td>
      <td style="padding:20px 10px; border-bottom:1px solid #ddd;">{{$s_email}}</td>
      </tr>
  </table>
  
    <table width="100%" cellspacing="0" cellpadding="0" style=" border-top:1px solid #000;  margin-top:20px; margin-bottom:20px; padding:20px 0;">
    <tr>
      <td width="60" style=""><img src="https://cronullaflorists.com.au/theme/images/info.png" height="50" /></td>
      <td style=""><div style="font-family:Arial; font-size:24px; color:#000; margin-bottom:5px; ">
          Receiver Details
        </div></td>
    </tr>
  </table>
 
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr style="background:#fff;">
      <td width="20%" style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; border-right:1px solid #ddd;"><b>Name</b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Mobile</b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Address</b></td>
    
    </tr>
    <tr>
      <td style="padding:20px 10px ; border-bottom:1px solid #ddd; border-right:1px solid #ddd;">{{$r_name}} </td>
       <td style="padding:20px 10px; border-bottom:1px solid #ddd;">{{$r_telephone}}</td>
      <td style="padding:20px 10px; border-bottom:1px solid #ddd;">Address: {{$address}}, City: {{$city}}, State: {{$state}}, Postal Code: {{$postal_code}}</td>
      </tr>
  </table>
  
     <table width="100%" cellspacing="0" cellpadding="0" style=" border-top:1px solid #000;  margin-top:20px; margin-bottom:20px; padding:20px 0;">
    <tr>
      <td width="60" style=""><img src="https://cronullaflorists.com.au/theme/images/accounts.png" height="50" /></td>
      <td style=""><div style="font-family:Arial; font-size:24px; color:#000; margin-bottom:5px; ">
          Order Details
        </div></td>
    </tr>
  </table>
 
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr style="background:#fff;">
      <td width="20%" style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; border-right:1px solid #ddd;"><b>Product Name</b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Quantity</b></td>
       <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"><b>Total Amount </b></td>
    
    </tr>
    <tr>
      <td style="padding:20px 10px ; border-bottom:1px solid #ddd; border-right:1px solid #ddd;">{{$product_name}} </td>
      <td style="padding:20px 10px; border-bottom:1px solid #ddd;">{{$quantity}}</td>
      <td style="padding:20px 10px; border-bottom:1px solid #ddd;">{{$total_amount}}</td>
      </tr>
  </table>

  <!---->
  
  <table width="100%" cellspacing="0" cellpadding="0" style=" border-top:0px solid #000; border-bottom:0px solid #ddd;; margin-top:0px; margin-bottom:0px; padding:20px 0;">
    <tr>
      <td width="60" style=""><img src="https://cronullaflorists.com.au/theme/images/accounts.png" height="50" /></td>
      <td style=""><div style="font-family:Arial; font-size:24px; color:#000; margin-bottom:5px; ">
          Other Details
        </div></td>
    </tr>
  </table>
  <!---->

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr style="background:#fff;">
      <td width="20%" style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; border-right:1px solid #ddd;"><b>Message </b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;"> {{$r_message}}</td>
    </tr>
     <tr style="background:#fff;">
      <td width="20%" style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd; border-right:1px solid #ddd;"><b>Occasion  </b></td>
      <td style="padding:10px; border-bottom:1px solid #ddd; border-top:1px solid #ddd;">{{$r_occassion}}</td>
    </tr>
    
       
  </table>

   <br />
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr style="background:#fff;">
      
      <td>
     <strong>Regard</strong> <br />
    <strong> Cronulla Florists</strong><br />
     <strong>Tel:</strong> +1300 310 498<br />
     <strong>Email:</strong>info@cronullaflorists.com.au<br />
     <strong>Website:</strong>www.cronullaflorists.com.au
      </td>
        </tr>
  </table>
   <br />
    <br />
</div>

</body>
</html>
