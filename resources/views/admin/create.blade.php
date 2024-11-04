<?php
$table_name = $_GET['table_name'];
use Illuminate\Support\Facades\Schema;

$columns = Schema::getColumnListing($table_name);
?>
<style>
    label{
        display: inline-block;
        width: 100px;
    }
</style>
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-top: 15%">
            <div class="container" align="center">
                <form action="{{route('admin.store', ['table_name' => $table_name])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($columns as $column)
                        @if ($column == 'id'|| $column == 'updated_at' || $column == 'created_at')
                            @continue
                        @endif
                        @if ($column == 'image')
                            <div>
                                <label>{{ $column }}</label>
                                <input type="file" name="{{ $column }}" placeholder="{{ $column }}"><br><br>
                            </div>
                        @endif
                        @if ($column == 'title' || $column == 'description' || $column == 'subtitle' || $column == 'email' || $column == 'phone' || $column == 'address' )
                            <div>
                                <label>{{ $column }}</label>
                                <input type="text" name="{{ $column }}" placeholder="{{ $column }}"><br><br>
                            </div>
                        @endif

                    @endforeach
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button  class="btn btn-primary">Show All {{$table_name}}</button>
                </form>

            </div>
        </div>
        <!-- main-panel ends -->
    </div>
      <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
  </body>
</html>
