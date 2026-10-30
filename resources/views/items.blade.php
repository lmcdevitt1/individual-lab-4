<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <style>
        /* This places the tables side-by-side and gives them nice spacing */
        .menu-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            border: 1px solid #191a1d;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #191a1d;
            text-align: center;
            vertical-align: middle;
        }
        .LLL{
    text-align: center;
}
        .apple{
            font-size: 24px;
            font-weight: bold;
        }
        .dell{
            font-size: 24px;
            font-weight: bold;
        }
        .hours {
            font-size: 18px;
            font-weight: bold;
        }
        .holiday {
            font-size: 18px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
<h1 class="LLL">Luke's Laptop Loaners</h1>
<p class="hours">Hours of operation Pick up and tech support: Wed - Sun 9 AM - 9 PM</p><p class="hours">Hours of operation MOBILE Rental Truck: Thursday - Sunday 2 PM - 10 PM</p>
<p class="holiday">Holidays and emergencies upon request to be quoted</p>
<p class="hours">**Hourly Rate: $20/hour** applies to all truck rentals (**in addition to** the montly device subscription).</p>
<div class="container">
        @yield('content')
    </div>
<h1>Items</h1>

<div class="menu-container">

    <table>
        <thead>
        <tr>
            <caption class="apple">Apple</caption>
            <th>Manufacturer</th>
            <th>Name</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Price Range</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items ?? [] as $item)
            @if(stripos($item->manufacturer, 'Apple') !== false)
                <tr>
                    <td>{{ $item ->manufacturer }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->make }}</td>
                    <td>{{ $item->model }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->price_range }}</td>

                </tr>
            @endif
        @endforeach
        </tbody>
    </table>


    <table>
        <thead>
        <tr>
            <caption class="dell">Dell</caption>
            <th>Manufacturer</th>
            <th>Name</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Price Range</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items ?? [] as $item)
            @if(stripos($item->manufacturer, 'Dell') !== false)
                <tr>
                    <td>{{ $item ->manufacturer }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->make }}</td>
                    <td>{{ $item->model }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->price_range }}</td>


                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
