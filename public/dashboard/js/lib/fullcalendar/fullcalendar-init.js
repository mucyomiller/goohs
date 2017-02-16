$(document).ready(function(){

/* ==========================================================================
    Fullcalendar
    ========================================================================== */
 // var data=null;
    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'prev, title, next',
            right: 'today agendaDay,agendaTwoDay,agendaWeek,month'
        },
        buttonIcons: {
            prev: 'font-icon font-icon-arrow-left',
            next: 'font-icon font-icon-arrow-right',
            prevYear: 'font-icon font-icon-arrow-left',
            nextYear: 'font-icon font-icon-arrow-right'
        },
        defaultDate: '2016-01-12',
        editable: true,
        selectable: true,
        eventLimit: true, // allow "more" link when too many events
        events:[],
        viewRender: function(view, element) {
            if (!("ontouchstart" in document.documentElement)) {
                $('.fc-scroller').jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
            }

            $('.fc-popover.click').remove();
        },
        eventClick: function(calEvent, jsEvent, view) {

            var eventEl = $(this);

            // Add and remove event border class
            if (!$(this).hasClass('event-clicked')) {
                $('.fc-event').removeClass('event-clicked');

                $(this).addClass('event-clicked');
            }

            // Add popover
            $('body').append(
                '<div class="fc-popover click">' +
                    '<div class="fc-header">' +
                        moment(calEvent.start).format('dddd • D') +
                        '<button type="button" class="cl"><i class="font-icon-close-2"></i></button>' +
                    '</div>' +

                    '<div class="fc-body main-screen">' +
                        '<p>' +
                            moment(calEvent.start).format('dddd, D YYYY, hh:mma') +
                        '</p>' +
                        '<p class="color-blue-grey">Name Surname Patient<br/>Surgey ACL left knee</p>' +
                        '<ul class="actions">' +
                            '<li><a href="#">More details</a></li>' +
                            '<li><a href="#" class="fc-event-action-edit">Edit event</a></li>' +
                            '<li><a href="#" class="fc-event-action-remove">Remove</a></li>' +
                        '</ul>' +
                    '</div>' +

                    '<div class="fc-body remove-confirm">' +
                        '<p>Are you sure to remove event?</p>' +
                        '<div class="text-center">' +
                            '<button type="button" class="btn btn-rounded btn-sm">Yes</button>' +
                            '<button type="button" class="btn btn-rounded btn-sm btn-default remove-popover">No</button>' +
                        '</div>' +
                    '</div>' +

                    '<div class="fc-body edit-event">' +
                        '<p>Edit event</p>' +
                        '<div class="form-group">' +
                            '<div class="input-group date datetimepicker">' +
                                '<input type="text" class="form-control" />' +
                                '<span class="input-group-addon"><i class="font-icon font-icon-calend"></i></span>' +
                            '</div>' +
                        '</div>' +
                        '<div class="form-group">' +
                            '<div class="input-group date datetimepicker-2">' +
                                '<input type="text" class="form-control" />' +
                                '<span class="input-group-addon"><i class="font-icon font-icon-clock"></i></span>' +
                            '</div>' +
                        '</div>' +
                        '<div class="form-group">' +
                            '<textarea class="form-control" rows="2">Name Surname Patient Surgey ACL left knee</textarea>' +
                        '</div>' +
                        '<div class="text-center">' +
                            '<button type="button" class="btn btn-rounded btn-sm">Save</button>' +
                            '<button type="button" class="btn btn-rounded btn-sm btn-default remove-popover">Cancel</button>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );

            // Datepicker init
            $('.fc-popover.click .datetimepicker').datetimepicker({
                widgetPositioning: {
                    horizontal: 'right'
                }
            });

            $('.fc-popover.click .datetimepicker-2').datetimepicker({
                widgetPositioning: {
                    horizontal: 'right'
                },
                format: 'LT',
                debug: true
            });


            // Position popover
            function posPopover(){
                $('.fc-popover.click').css({
                    left: eventEl.offset().left + eventEl.outerWidth()/2,
                    top: eventEl.offset().top + eventEl.outerHeight()
                });
            }

            posPopover();

            $('.fc-scroller, .calendar-page-content, body').scroll(function(){
                posPopover();
            });

            $(window).resize(function(){
               posPopover();
            });


            // Remove old popover
            if ($('.fc-popover.click').length > 1) {
                for (var i = 0; i < ($('.fc-popover.click').length - 1); i++) {
                    $('.fc-popover.click').eq(i).remove();
                }
            }

            // Close buttons
            $('.fc-popover.click .cl, .fc-popover.click .remove-popover').click(function(){
                $('.fc-popover.click').remove();
                $('.fc-event').removeClass('event-clicked');
            });

            // Actions link
            $('.fc-event-action-edit').click(function(e){
                e.preventDefault();

                $('.fc-popover.click .main-screen').hide();
                $('.fc-popover.click .edit-event').show();
            });

            $('.fc-event-action-remove').click(function(e){
                e.preventDefault();

                $('.fc-popover.click .main-screen').hide();
                $('.fc-popover.click .remove-confirm').show();
            });
        }
    });


/* ==========================================================================
    Side datepicker
    ========================================================================== */

    $('#side-datetimepicker').datetimepicker({
        inline: true,
        format: 'DD/MM/YYYY'
    });

/* ========================================================================== */

});


/* ==========================================================================
    Calendar page grid
    ========================================================================== */

(function($, viewport){
    $(document).ready(function() {

        if(viewport.is('>=lg')) {
            $('.calendar-page-content, .calendar-page-side').matchHeight();
        }

        // Execute code each time window size changes
        $(window).resize(
            viewport.changed(function() {
                if(viewport.is('<lg')) {
                    $('.calendar-page-content, .calendar-page-side').matchHeight({ remove: true });
                }
            })
        );
    });
})(jQuery, ResponsiveBootstrapToolkit);

function getAppointments(){
      axios.get('/api/appointments')
            .then(function (response) {
                data= response.data;
                console.log(data);
                return data;
            });
console.log(data);
}

