
$(function () {
    'use strict';

    var dtUserTable = $('.user-list-table'),
        assetPath = '../../../app-assets/',
        userPreview = 'table-user.php',
        userAdd = 'form-user.php',
        userEdit = 'form-user.php';

    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
        userPreview = assetPath + '../../pages/actions/';
        userAdd = assetPath + '../../pages/actions/';
        userEdit = assetPath + '../../pages/actions/';
    }

    if (dtUserTable.length) {
        var dtUser = dtUserTable.DataTable({
            ajax: "https://reqres.in/api/users",
            autoWidth: false,
            columns: [
                { data: 'id' },
                { data: 'avatar' },
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'email' },
                { data: '' }
            ],
            columnDefs: [
                {
                    className: "control",
                    responsivePriority: 2,
                    targets: 0
                }, {
                    targets: 1,
                    width: "46px",
                    render: function (data, type, full, meta) {
                        var i = full['id'];
                        return '<a class="fw-bold" href="' + userPreview + '"> #' + i + "</a>"
                    }
                },
                {
                    targets: 2,
                    responsivePriority: 3,
                    width: '270px',
                    render: function (data, type, full, meta) {
                        var $name = full['first_name'],
                            $email = full['email'],
                            $image = full['avatar'],
                            stateNum = Math.floor(Math.random() * 6),
                            states = ['success', 'danger', 'warning', 'info', 'primary', 'secondary'],
                            $state = states[stateNum],
                            $name = full['first_name'],
                            $initials = $name.match(/\b\w/g) || [];
                        $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                        if ($image) {
                            var $output =
                                '<img  src="' + $image + '" alt="Avatar" width="32" height="32">';
                        } else {
                            $output = '<div class="avatar-content">' + $initials + '</div>';
                        }
                        var colorClass = $image === '' ? ' bg-light-' + $state + ' ' : ' ';

                        var $rowOutput =
                            '<div class="d-flex justify-content-left align-items-center">' +
                            '<div class="avatar-wrapper">' +
                            '<div class="avatar' +
                            colorClass +
                            'me-50">' +
                            $output +
                            '</div>' +
                            '</div>' +
                            '<div class="d-flex flex-column">' +
                            '<h6 class="user-name text-truncate mb-0">' +
                            $name +
                            '</h6>' +
                            '<small class="text-truncate text-muted">' +
                            $email +
                            '</small>' +
                            '</div>' +
                            '</div>';
                        return $rowOutput;
                    }
                },
                {
                    targets: 3,
                    width: '73px',
                    render: function (data, type, full, meta) {
                        var $firstName = full['first_name'];
                        return '<span class="d-none">' + $firstName + '</span>' + $firstName;
                    }
                },
                {
                    targets: 4,
                    width: '73px',
                    render: function (data, type, full, meta) {
                        var $lastName = full['last_name'];
                        return '<span class="d-none">' + $lastName + '</span>' + $lastName;
                    }
                },
                {
                    targets: 5,
                    width: '73px',
                    render: function (data, type, full, meta) {
                        var $email = full['email'];
                        return '<span class="d-none">' + $email + '</span>' + $email;
                    }
                },
                {
                    targets: 6,
                    title: 'Actions',
                    width: '80px',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        var $id = full['id'];
                        return '<div class="d-flex align-items-center col-actions"></a><a href="' + userPreview + '" data-bs-toggle="tooltip" data-bs-placement="top">' + feather.icons.eye.toSvg({
                            class: "font-small-4 me-50"
                        }) + '</a><a href="' + userEdit + '?id=' + $id + '" data-bs-toggle="tooltip" data-bs-placement="top">' + feather.icons.edit.toSvg({
                            class: "font-small-4 me-50"
                        }) + '</a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top">' + feather.icons.trash.toSvg({
                            class: "font-small-4 me-50"
                        }) + '</a>' + "</div>"
                    }
                }
            ],
            order: [[1, 'desc']],
            dom:
                '<"row d-flex justify-content-between align-items-center m-1"' +
                '<"col-lg-6 d-flex align-items-center"l<"dt-action-buttons text-xl-end text-lg-start text-lg-end text-start "B>>' +
                '<"col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0"f<"user_status ms-sm-2">>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Search',
                searchPlaceholder: 'Search User',
                paginate: {
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            buttons: [
                {
                    text: 'Add Record',
                    className: 'btn btn-primary btn-add-record ms-2',
                    action: function (e, dt, button, config) {
                        window.location = userAdd;
                    }
                }
            ],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['client_name'];
                        }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                        var data = $.map(columns, function (col, i) {
                            return col.columnIndex !== 2
                                ? '<tr data-dt-row="' +
                                col.rowIdx +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td>' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td>' +
                                col.data +
                                '</td>' +
                                '</tr>'
                                : '';
                        }).join('');
                        return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                    }
                }
            },
            initComplete: function () {
                $(document).find('[data-bs-toggle="tooltip"]').tooltip();
                this.api()
                    .columns(7)
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select id="UserRole" class="form-select ms-50 text-capitalize"><option value=""> Select Status </option></select>'
                        )
                            .appendTo('.user_status')
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
            },
            drawCallback: function () {
                $(document).find('[data-bs-toggle="tooltip"]').tooltip();
            }
        });
    }
});
