<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!--  -->
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/public/stylebootstrap.css')}}" />
</head>

<body>
@include('sections.header')
    <!-- sec 2 certificate of status -->
    <div class="container se2-certificate-of-status-main">
    <h2 class='playfair-display-font'>Refund Policy</h2>
    <h4 class='h2-certificate-of-status-se2'>Refund Policy Overview</h4>
    <p>At Business Certificate Services, we strive to provide exceptional services and customer satisfaction. However, please note that due to the nature of our services, we have a strict no-refund policy. Once an order is placed and payment is made, refunds will not be issued.</p>
    <h5 class='h2-certificate-of-status-se2'>Exceptions</h5>
    <p>While we do not offer refunds after an order is placed, there are a few exceptions to this policy:</li>
      <li>If we are unable to fulfill your order due to unforeseen circumstances or technical issues, we will provide a full refund.</li>
      <li>In case of duplicate or accidental payments, we will refund the additional amount.</li>
    </ul>
    
    <h5 class='h2-certificate-of-status-se2'>Contact Us</h5>
    <p>If you have any questions or concerns regarding our refund policy, please don't hesitate to contact us:</p>
    <p>Business Certificate Services Florida</p>
    <p>Orlando, Florida, 32804</p>
    <p>Email: support@businesscertificateservices.com</p>
  </div>
    @include('sections.footer')
</body>

</html>
