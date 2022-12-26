var data = [
    { y: '2006', a: 100 },
    { y: '2007', a: 75 },
    { y: '2008', a: 50 },
    { y: '2009', a: 75 },
    { y: '2010', a: 50 },
    { y: '2011', a: 7 },
    { y: '2012', a: 100 }
];

Morris.Bar({
    element: 'currencyHistoryChart',

    data: data,
    // Y-eksenini oluşturan öznitelik
    xkey: 'y',
    // Dikey çubukları oluşturan öznitelikler
    ykeys: ['a', 'b'],
    // Dikey çubukların etiketleri
    labels: ['Serie A', 'Serie B']
});