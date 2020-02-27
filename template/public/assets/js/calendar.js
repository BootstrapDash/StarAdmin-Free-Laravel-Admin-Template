(function ($) {
  'use strict';
  $(function () {
    var style = getComputedStyle(document.body);
    if ($('#calendar').length) {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        locale: 'en',
        dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday',
          'Thursday', 'Friday', 'Saturday'
        ],
        dayNamesShort: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July',
          'August', 'September', 'October', 'November', 'December'
        ],
        monthNamesShort: ['January', 'February', 'March', 'April', 'May', 'June', 'July',
          'August', 'September', 'October', 'November', 'December'
        ],
        defaultDate: '2017-07-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [{
            title: 'All Day Event',
            start: '2017-07-01'
          },
          {
            title: 'Long Event',
            start: '2017-07-07',
            end: '2017-07-10',
            color: style.getPropertyValue('--info')
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-07-09T16:00:00',
            color: style.getPropertyValue('--danger')
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-07-16T16:00:00',
            color: style.getPropertyValue('--info')
          },
          {
            title: 'Conference',
            start: '2017-07-11',
            end: '2017-07-13'
          },
          {
            title: 'Meeting',
            start: '2017-07-12T10:30:00',
            end: '2017-07-12T12:30:00',
            color: style.getPropertyValue('--danger')
          },
          {
            title: 'Lunch',
            start: '2017-07-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2017-07-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2017-07-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2017-07-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2017-07-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2017-07-28',
            color: style.getPropertyValue('--danger')
          }
        ]
      })
    }
  });
})(jQuery);