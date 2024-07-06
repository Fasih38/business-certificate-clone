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

<!--  -->
<div class='document-sec1'>
<div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="header-text mt-5 playfair-display-font">Search for your <span class="highlight-text">Company</span> and order your <span class="highlight-text">Certificate of Status</span>.</h1>
        <p class="text-center">Enter your company name or document number. Then select your company to start your order. Your Certificate of Status will be processed and sent to your email within 24 hours.</p>
      </div>
      <div class="col-12 custom-input-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Document Number or Company Name" aria-label="Document Number or Company Name">
          <button class="btn btn-success" type="button">Search Now</button>
        </div>
      </div>
    </div>
  </div></div>

  <!--  -->
  <div class="container my-5">
    <div class="table-responsive">
      <table class="table table-striped ">
        <thead>
          <tr >
            <th scope="col">#</th>
            <th scope="col">Document</th>
            <th scope="col">Company</th>
            <th scope="col">Owner</th>
            <th scope="col">Company Type</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class='white'>
          <tr class='white'>
            <th scope="row">1</th>
            <td>L24000138043</td>
            <td>AUTO 1 LOCKSMITH, LLC</td>
            <td>MICHEAL SAID</td>
            <td>MICHEAL SAID</td>
            <td><button class="btn btn-success">Select</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    @include('sections.footer')
</body>

</html>
