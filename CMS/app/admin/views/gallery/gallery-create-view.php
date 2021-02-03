<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gallery</h1>

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
    <div class="table-responsive">
        <form method="post" action="?admin=show&module=gallery&action=upload" enctype="multipart/form-data" >
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" name="name" id="name" value=""">
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input type="file" name="image" id="image" value="""></td>
                </tr>
                </thead>
            </table>
            <button>Update</button>
            <a href="javascript:window.history.back();">Cancel</a>
        </form>
    </div>
</main>