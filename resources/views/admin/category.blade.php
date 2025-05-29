@include('disign.admin_nav')
  <style>
    #example2 {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    #example2 th, #example2 td {
        padding: 14px 18px;
        text-align: left;
        vertical-align: middle;
    }

    #example2 thead {
        background-color: #4e73df;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
    }

    #example2 tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #example2 tbody tr:hover {
        background-color: #e2e6ea;
        cursor: pointer;
    }

    /* Buttons inside table */
    .action-btn-group form {
        display: inline-block;
        margin-right: 8px;
    }

    .action-btn-group button {
        font-size: 13px;
        padding: 6px 12px;
        border-radius: 5px;
    }
</style>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="action-btn-group">
                       <form action="{{ route('category.create') }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Category</button>
                        </form>

        <br>
        <br>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Post</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
