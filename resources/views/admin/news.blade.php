@extends("admin.layout")
@section("css")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
@endsection

@section("content")
    <div class="row">
        <div class="col-12" style="color: #000000">
            <table id="myTable" class="display">
                <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("script")
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
