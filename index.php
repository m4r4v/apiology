<?php
// Namespace
namespace Apiology\Api;
// Set TimeZone
date_default_timezone_set('America/Santiago');
// Require autload from composer
require 'vendor/autoload.php';
// use bootstrap
use Apiology\Api\Bootstrap;
// instantiate the Bootstrap Object
new Bootstrap();

// var_dump($http->httpResponse(200, 'Hello World From Param'));
// echo json_encode($http->httpResponse(200, 'Hello World From Param'), JSON_PRETTY_PRINT);



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// $mail = new PHPMailer();
// $cc = false;


// $body = <<<EOT
// <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
// <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
// <head>
// <!--[if gte mso 9]>
// <xml>
//     <o:OfficeDocumentSettings>
//         <o:AllowPNG/>
//         <o:PixelsPerInch>96</o:PixelsPerInch>
//     </o:OfficeDocumentSettings>
// </xml>
// <![endif]-->
//     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <meta name="x-apple-disable-message-reformatting">
//     <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
//     <title></title>
    
//         <style type="text/css">
//             table, td { color: #000000; } @media only screen and (min-width: 620px) {
//     .u-row {
//         width: 600px !important;
//     }
//     .u-row .u-col {
//         vertical-align: top;
//     }

//     .u-row .u-col-100 {
//         width: 600px !important;
//     }

// }

// @media (max-width: 620px) {
//     .u-row-container {
//         max-width: 100% !important;
//         padding-left: 0px !important;
//         padding-right: 0px !important;
//     }
//     .u-row .u-col {
//         min-width: 320px !important;
//         max-width: 100% !important;
//         display: block !important;
//     }
//     .u-row {
//         width: calc(100% - 40px) !important;
//     }
//     .u-col {
//         width: 100% !important;
//     }
//     .u-col > div {
//         margin: 0 auto;
//     }
// }
// body {
//     margin: 0;
//     padding: 0;
// }

// table,
// tr,
// td {
//     vertical-align: top;
//     border-collapse: collapse;
// }

// p {
//     margin: 0;
// }

// .ie-container table,
// .mso-container table {
//     table-layout: fixed;
// }

// * {
//     line-height: inherit;
// }

// a[x-apple-data-detectors='true'] {
//     color: inherit !important;
//     text-decoration: none !important;
// }

// </style>
    
    

// <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->

// </head>

// <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000">
//     <!--[if IE]><div class="ie-container"><![endif]-->
//     <!--[if mso]><div class="mso-container"><![endif]-->
//     <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
//     <tbody>
//     <tr style="vertical-align: top">
//         <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
//         <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
        

// <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:'Lato',sans-serif;" align="left">
                
//     <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
//         <tbody>
//             <tr style="vertical-align: top">
//                 <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
//                     <span>&#160;</span>
//                 </td>
//             </tr>
//         </tbody>
//     </table>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>



// <div class="u-row-container" style="padding: 0px;background-color: transparent">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px;font-family:'Lato',sans-serif;" align="left">
                
// <table width="100%" cellpadding="0" cellspacing="0" border="0">
//     <tr>
//         <td style="padding-right: 0px;padding-left: 0px;" align="left">
            
//             <img align="left" border="0" src="https://avatars.githubusercontent.com/u/61147100?v=4" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 29%;max-width: 168.2px;" width="168.2"/>
            
//         </td>
//     </tr>
// </table>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>



// <div class="u-row-container" style="padding: 0px;background-color: transparent">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #c31b21;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #c31b21;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:20px 0px;font-family:'Lato',sans-serif;" align="left">
                
//     <div style="line-height: 100%; text-align: center; word-wrap: break-word;">
//         <p style="font-size: 14px; line-height: 100%; text-align: center;"><span style="font-size: 28px; line-height: 28px; color: #ffffff; font-family: Lato, sans-serif;"><span style="font-size: 20px; line-height: 20px; font-family: arial, helvetica, sans-serif;">Notificaci&oacute;n Formulario de Contacto Web</span><br /></span></p>
//     </div>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>



// <div class="u-row-container" style="padding: 0px;background-color: transparent">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:'Lato',sans-serif;" align="left">
                
//     <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
//         <p style="font-size: 14px; line-height: 140%; padding-bottom:10px;">Hello World!</p>
//     </div>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>



// <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #c31b21;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #c31b21;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:20px 0px;font-family:'Lato',sans-serif;" align="left">
                
//     <div style="line-height: 100%; text-align: center; word-wrap: break-word;">
//         <p style="font-size: 14px; line-height: 100%; text-align: center;"><span style="font-size: 28px; line-height: 28px; color: #ffffff; font-family: Lato, sans-serif;"><span style="font-size: 14px; line-height: 14px; font-family: arial, helvetica, sans-serif;">[https://domain.ext]</span><br /></span></p>
//     </div>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>



// <div class="u-row-container" style="padding: 0px;background-color: transparent">
//     <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;">
//         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
//             <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->
            
// <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
// <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
//     <div style="width: 100% !important;">
//     <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
    
// <table style="font-family:'Lato',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
//     <tbody>
//         <tr>
//             <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 40px 30px 20px;font-family:'Lato',sans-serif;" align="left">
                
//     <div style="line-height: 140%; text-align: left; word-wrap: break-word;">
        
//     </div>

//             </td>
//         </tr>
//     </tbody>
// </table>

//     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
//     </div>
// </div>
// <!--[if (mso)|(IE)]></td><![endif]-->
//             <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
//         </div>
//     </div>
// </div>


//         <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
//         </td>
//     </tr>
//     </tbody>
//     </table>
//     <!--[if mso]></div><![endif]-->
//     <!--[if IE]></div><![endif]-->
// </body>

// </html>
// EOT;


// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_OFF; //Enable verbose debug output
//     $mail->isSMTP(); //Send using SMTP
//     $mail->Host       = 'tiendadelcafe.cl'; //Set the SMTP server to send through
//     $mail->SMTPAuth   = true; //Enable SMTP authentication
//     $mail->Username   = 'testing.api@tiendadelcafe.cl'; //SMTP username
//     $mail->Password   = 'KQyc52eV9Goj2';  //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 465; //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//     //Recipients
//     $mail->setFrom('testing.api@tiendadelcafe.cl', 'Testing API');
//     $mail->addAddress('jmarquezrave@gmail.com', 'Jorge Marquez'); //Add a recipient
//     $mail->addReplyTo('testing.api@tiendadelcafe.cl', 'Testing API');
//     if($cc != false){
//         $mail->addCC('CC', 'NAME');
//     }
    

//     //Attachments
//     // $mail->addAttachment('image.jpg'); //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//     //Content
//     $mail->isHTML(true); //Set email format to HTML
//     $mail->Subject = 'Testing Subject';
//     $mail->Body    = $body;

//     $mail->send();
//     return true;
// } catch (Exception $e) {
//     echo "Exception: $e";
// }

?>