CSS cdn 
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

JS CDN and Script



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>


<script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                dom: 'Bfrtip',
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                buttons: [
                'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
================================
Dynamic table data-table example

 success: function(data) {
                        // console.log(data.status)
                        if (data.status == 'success') {
                            console.log(data);
                            wrapper.empty();
                            $(wrapper).append("<table class='table table-bordered expandable-table' id='datatable-attendance'>\
                                                <thead>\
                                                    <tr>\
                                                        <th>Employe Name</th>\
                                                        <th>Attendance Date</th>\
                                                        <th>Status</th>\
                                                        <th>In Time</th>\
                                                        <th>Out Time</th>\
                                                        <th>Hour</th>\
                                                        <th>Day</th>\
                                                        <th>Note</th>\
                                                    </tr>\
                                                </thead>\
                                                <tbody id=''></tbody></table>");
                            $.each(data.data, function(key, value) {
                                var html = '<tr>';
                                html += '<td>' + value.employee.emp_name + '</td>';
                                html += '<td>' + value.date + '</td>';
                                html += '<td>' + value.status + '</td>';
                                html += '<td>' + value.time_in + '</td>';
                                html += '<td>' + value.time_out + '</td>';
                                html += '<td>' + value.hours_worked + '</td>';
                                html += '<td>' + value.week_day + '</td>';
                                html += '<td>' + value.note + '</td>';
                                html += '</tr>';
                                $('#datatable-attendance tbody').append(html);
                            });

                        } else {
                            wrapper.empty();
                            $(wrapper).append("<h2 class='text-center'>No Data Found</h2>");
                           
                        }
                        var table = $('#datatable-attendance').DataTable({
                            "aaSorting": [],
                            "ordering": false,
                            dom: 'Bfrtip',
                            lengthMenu: [
                                [10, 25, 50, -1],
                                ['10 rows', '25 rows', '50 rows', 'Show all']
                            ],
                            buttons: [
                                'pageLength', 'copy', 'csv', 'excel', 'pdf',
                                'print', 'colvis'
                            ],
                        })
                        table.ajax.reload();
                        $.fn.dataTable.ext.errMode = function(obj, param, err) {
                            var tableId = obj.sTableId;
                            console.log('Handling DataTable issue of Table ' + tableId);
                        };
                    }
========================
Button Customize

var table33 =  $('#example333').DataTable({
                processing: true,
                serverSide: true,
                searching: false,
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                ajax: {
                    url: "{{ url('editor/admin_get_parcel_data') }}" + '/' + parcelSlug,
                    data: {

                    }
                },
                scrollX: true,

                dom: 'Bfrtip',
                buttons: [
                    'pageLength',
                    {
                        extend: 'copy',
                        text: 'Copy',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
                            rows: function(idx, data, node) {
                                let found = false;
                                let selectedRowIndexes = table33.rows('.selected').indexes();
                                for (let index = 0; index < selectedRowIndexes.length; index++) {
                                    if (idx == selectedRowIndexes[index]) {
                                        found = true;
                                        break;
                                    }
                                }
                                return found;
                            }
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
                            rows: function(idx, data, node) {
                                let found = false;
                                let selectedRowIndexes = table33.rows('.selected').indexes();
                                for (let index = 0; index < selectedRowIndexes.length; index++) {
                                    if (idx == selectedRowIndexes[index]) {
                                        found = true;
                                        break;
                                    }
                                }
                                return found;
                            }
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'D_Man',
                        exportOptions: {
                            columns: [1, 3, 4, 5, 7, 8, 10, 14],
                            rows: function(idx, data, node) {
                                let found = false;
                                let selectedRowIndexes = table33.rows('.selected').indexes();
                                for (let index = 0; index < selectedRowIndexes.length; index++) {
                                    if (idx == selectedRowIndexes[index]) {
                                        found = true;
                                        break;
                                    }
                                }
                                return found;
                            }
                        }
                    },

                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                            rows: function(idx, data, node) {
                                let found = false;
                                let selectedRowIndexes = table33.rows('.selected').indexes();
                                for (let index = 0; index < selectedRowIndexes.length; index++) {
                                    if (idx == selectedRowIndexes[index]) {
                                        found = true;
                                        break;
                                    }
                                }
                                return found;
                            }
                        }
                    },

                    {
                        extend: 'print',
                        text: 'Print all',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                            rows: function(idx, data, node) {
                                let found = true;
                                let selectedRowIndexes = table33.rows('.selected').indexes();
                                for (let index = 0; index < selectedRowIndexes.length; index++) {
                                    if (idx == selectedRowIndexes[index]) {
                                        found = false;
                                        break;
                                    }
                                }
                                return found;
                            }
                        }
                    },
                    {
                        extend: 'colvis',
                    },

                ],
                createdRow: function(row, data, dataIndex) {
                    // Add your desired class to each <tr> element
                    $(row).addClass('data_all_trs');
                }

            });
