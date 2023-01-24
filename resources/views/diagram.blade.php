
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.jpg" />
    <title>Tumor on target</title>
    <link rel="stylesheet" href="/assets/app.css" />

</head>

<body>
    <div class="wrapper">
        <div class="layout">
            <div class="sidebar">
                <a class="logo" href="#">
                    <img src="https://cat-sa.uz/wp-content/uploads/IMG_20200831_162713_749-Shohista-Rustamova.jpg"
                        alt="" />
                    Tumorontarget
                </a>

                <ul class="menu">
                    <li>
                        <a href="{{ route('members.index') }}">Barcha bemorlar</a>
                    </li>
                    <li>
                        <a href="{{ route('members.create') }}">Ro'yhatga olish</a>
                    </li>
                    <li>
                        <a href="{{ route('diagramm') }}">Diagramma</a>
                    </li>


                </ul>
            </div>
            <div class="content">
                <h2 class="title mb-10">Diagramm</h2>

                <div class="chart__grid">
                    <div id="chart"></div>
                    <div id="chart2">
                        <h4>Kasallik turlati bo'yicha Natijalarni ko'rish</h4>
                        <a href="?sick=TORCH" style="margin: 10px"><b>TORCH</b></a>
                        <a href="?sick=Covid-19" style="margin: 10px"><b>Covid-19</b></a>
                        <a href="?sick=Omikron" style="margin: 10px"><b>Omikron</b></a>
                        <a href="?sick=Grip" style="margin: 10px"><b>Grip</b></a>
                        <a href="?sick=Gepatit A" style="margin: 10px"><b>Gepatit A</b></a>
                        <a href="?sick=Gepatit B" style="margin: 10px"><b>Gepatit B</b></a>
                        <a href="?sick=Gepatit C" style="margin: 10px"><b>Gepatit C</b></a>
                        <h3>{{ $s }} kassallarining ПЦР natijasi % da </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{{ $torch }}, {{ $covid }}, {{ $omikron }}, {{ $grip }}, {{ $ga }}, {{ $gb }}, {{ $gc }}],
            chart: {
                width: 500,
                type: 'pie',
            },
            labels: ['TORCH', 'Covid-19', 'Omikron', 'Grip', 'Gepatit A', 'Gepatit B', "Gepatit C"],

        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var options = {
            series: [{
                data: [{{$minus1 }}, {{ $plus1 }}]
            }],
            chart: {
                width: 500,
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Manfiy', 'Musbat', ],
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();

    </script>
    <script src="/assets/app.js"></script>
</body>

</html>





