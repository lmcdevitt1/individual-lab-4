
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #191a1d;
        }

        h1, h2 {
            color: #191a1d;
        }

        .hours {
            margin-bottom: 30px;
            padding: 15px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .table-container {
            overflow-x: auto;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #191a1d;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e8e8e8;
        }

        caption {
            font-size: 1.25rem;
            font-weight: bold;
            text-align: left;
            padding: 10px 0;
        }
    </style>
</head>

<body>

    <h1>Items</h1>

    <section class="hours">
        <h2>Hours of Operation</h2>

        <p><strong>Pick Up and Tech Support:</strong>
            Wednesday - Sunday, 9 AM - 9 PM
        </p>

        <p><strong>Mobile Rental Truck:</strong>
            Thursday - Sunday, 2 PM - 10 PM
        </p>

        <p><strong>Holidays and Emergencies:</strong>
            Available upon request; additional charges will be quoted.
        </p>

        <p><strong>Hourly Truck Rental Rate:</strong>
            $20/hour, in addition to the monthly device subscription.
        </p>
    </section>

    @foreach (['Apple', 'Dell'] as $manufacturer)
        <div class="table-container">
            <table>
                <caption>{{ $manufacturer }} Laptops</caption>

                <thead>
                    <tr>
                        <th>Manufacturer</th>
                        <th>Name</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Price Range</th>
                    </tr>
                </thead>

                <tbody>
                    @php
			$manufacturerItems = $manufacturer === 'Apple' ? $appleItems: $dellItems;
		@endphp

		@foreach ($manufacturerItems as $item)
                        <tr>
                            <td>{{ $item->manufacturer }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->make }}</td>
                            <td>{{ $item->model }}</td>
                            <td>${{ number_format((float) $item->price, 2) }}</td>
                            <td>{{ $item->price_range }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach

</body>
</html>

