@include('admin.css')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
@include('admin.navbar')
        <!-- partial -->
@include('admin.body')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
@include('admin.script')
