<script type="text/javascript" class="init">
    $(document).ready(function() {
        loaddashboard();

        function loaddashboard() {
            // hapus datatable
            var table = $('#tblDashboard').DataTable();
            table.destroy();

            var formData = {
                'wfnum': $('#txtWfnum').val(),
            };

            var cols = [
                { "data": "no","width": "2%" },
                { "data": "stsnm" },
                { "data": "jml","width": "20%" }
            ];   

            $('#tblDashboard').DataTable({
                "ajax": {
                    "url": baseurl+"dashboard/loadDashboard",
                    "type": "POST",
                    "data": formData,
                    "deferLoading": 57,
                    "scrollY": "200px",
                    "scrollCollapse": true,
                    "paging": false,
                    "dataSrc": ""
                },
                "columns": cols
            });
        }
    });
</script>
<h3 class="heading">Dashboard</h3>

<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="tabbable tabbable-bordered">
            <table id="tblDashboard" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>