//Couter up
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

Morris.Area({
    element: 'chart-booking',
    data: [{
            month: '2010',
            totalBooking: 0,
        }, {
            month: '2011',
            totalBooking: 130,

        }, {
            month: '2012',
            totalBooking: 80,

        }, {
            month: '2013',
            totalBooking: 70,

        }, {
            month: '2014',
            totalBooking: 180,

        }, {
            month: '2015',
            totalBooking: 105,
        },
        {
            month: '2016',
            totalBooking: 250,
        }
    ],
    xkey: 'month',
    ykeys: ['totalBooking'],
    labels: ['Total Booking'],
    pointSize: 0,
    fillOpacity: 0.4,
    pointStrokeColors: ['#01c0c8'],
    behaveLikeLine: true,
    gridLineColor: '#e0e0e0',
    lineWidth: 0,
    smooth: true,
    hideHover: 'auto',
    lineColors: ['#01c0c8'],
    resize: true

});