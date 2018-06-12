<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student fee payment</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <style>
        tbody tr:nth-child(even) {
            background-color: #f7f7f7;
        }
    </style>

</head>

<body>

    <!--position content middle-->
    <div class="content-middle">

        <div class="system-response" style="display:{{ $display_status or ""}}">
            <p>{{ $response or ""}}</p>
        </div>

        <table>

            <tr>
                <td>
                    <a href="/view">
                        <img src="/icons/back-icon.svg" />
                    </a>
                </td>
                <td colspan="2">
                    <h3 class="sub-title left">{{ $student_name->full_name }}</h3>
                </td>
            </tr>

            <tr>
                <th>#</th>
                <th>Date of Payment</th>
                <th>Amount</th>
            </tr>

            @foreach($fees as $fee)
            <tr>
                <td>{{ $loop->iteration or "0" }}</td>
                <td>{{ $fee->payment_date or "0" }}</td>
                <td>KES {{ $fee->amount or "0"}}</td>
            </tr>
            @endforeach

            <tr>
                <td></td>
                <td class="total-paid">total paid :</td>
                <td class="amount">KES {{ $total_paid or "0" }}</td>
            </tr>

        </table>

    </div>
    <!--end of position content middle-->

</body>

</html>