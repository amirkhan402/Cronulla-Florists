<script>
$(document).ready(function(){
@if (Session::has('success'))
    $.notify({
            icon: 'fa fa-check-circle fa-4x',
            title: 'Success!',
            message: "{{ Session::get('success') }}",
        },{
            element: 'body',
            type: "success",
            showProgressbar: false,
            placement: {
                 from: "bottom",
                align: "left"
            },
            animate: {
                enter: 'animated zoomIn',
                exit: 'animated zoomOut'
            },
            template: '<div data-notify="container" class="custom-notify-success col-xs-4 col-sm-4 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#fff;">×</button>' +
                        '<div style="width: 10%; display: inline-block;"><span data-notify="icon"></span></div>' +
                        '<div style="width: 90%; display: inline-block;"><span data-notify="title" style="font-size: 20px;font-weight: 600;margin: 0;">{1}</span><br>' +
                        '<span data-notify="message" style="margin: 0;font-size: 13px;">{2}</span></div>' +
                        '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        '</div>' +
                    '</div>' 
        });
@endif
@if (Session::has('error'))
    $.notify({
            icon: 'fa fa-times-circle fa-4x',
            title: 'Something Went Wrong!',
            message: "{{ Session::get('error') }}",
        },{
            element: 'body',
            type: "danger",
            showProgressbar: false,
            placement: {
                from: "bottom",
                align: "left"
            },
            animate: {
                enter: 'animated zoomIn',
                exit: 'animated zoomOut'
            },
            template: '<div data-notify="container" class="custom-notify-danger col-xs-4 col-sm-4 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#fff;">×</button>' +
                        '<div style="width: 10%; display: inline-block;"><span data-notify="icon"></span></div>' +
                        '<div style="width: 90%; display: inline-block;"><span data-notify="title" style="font-size: 20px;font-weight: 600;margin: 0;">{1}</span><br>' +
                        '<span data-notify="message" style="margin: 0;font-size: 13px;">{2}</span></div>' +
                        '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        '</div>' +
                    '</div>' 
        });
@endif
@if (Session::has('errors'))
        $.notify({
                icon: 'fa fa-times-circle fa-4x',
                title: 'Something Went Wrong!',
                    message: "{{ Session::get('errors')->first() }}",
            },{
                element: 'body',
                type: "danger",
                showProgressbar: false,
                placement: {
                    from: "bottom",
                    align: "left"
                },
                animate: {
                    enter: 'animated zoomIn',
                    exit: 'animated zoomOut'
                },
                template: '<div data-notify="container" class="custom-notify-danger col-xs-4 col-sm-4 alert alert-{0}" role="alert">' +
                            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#fff;">×</button>' +
                            '<div style="width: 10%; display: inline-block;"><span data-notify="icon"></span></div>' +
                            '<div style="width: 90%; display: inline-block;"><span data-notify="title" style="font-size: 20px;font-weight: 600;margin: 0;">{1}</span><br>' +
                            '<span data-notify="message" style="margin: 0;font-size: 13px;">{2}</span></div>' +
                            '<div class="progress" data-notify="progressbar">' +
                                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                            '</div>' +
                        '</div>' 
            });
@endif
    });
    
</script>