<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student fee payment</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
        tbody tr:nth-child(even) {
            background-color: #f7f7f7;
        }
    </style>

</head>

<body>

    <!--position content middle-->
    <div class="content-middle">

            <div class="system-response" style="display:{{ $display_status or "" }}">
                <p>{{ $response or ""}}</p>
            </div>

        <table>

            <tr>
                <td>
                    <a href="/">
                        <img src="icons/back-icon.svg" />
                    </a>
                </td>
                <td colspan="3">
                    <h3 class="sub-title left">View student fee records<h3>
                </td>
            </tr>

            <tr>
                <form method="POST" action="/search" enctype="multipart/form-data">
                {{csrf_field()}}
                    <td colspan="2" class="search-box">
                        <input class="input" type="search" name="search-student" placeholder="Search student by student number / id">
                    </td>
                    <td class="search-box">
                        <input class="search-button" type="submit" name="search" value="search">
                    </td>                    
                </form>
                <td class="search-box">
                    <a href="/view"><button class="submit-button">ALL</button></a>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="total-text">TOTAL PAID BY ALL STUDENTS:</td>
                <td colspan="2" class="total-text">KES {{ $total_fees or "---" }}</td>

            <tr class="table-header">
                <th>#</th>
                <th>Student number</th>
                <th>Full name</th>
                <th>Status</th>
            </tr>

            @foreach($records as $record)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $record->student_id }}</td>
                <td>{{ $record->full_name }}</td>
                <td>
                    <a href="/view/{{ $record->student_id }}">
                        <img src="icons/specific-view-icon.svg">
                    </a>
                </td>
            </tr>
            @endforeach


        </table>



    </div>
    <!--end of position content middle-->

</body>

</html>