<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student fee payment</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

    <!--position content middle-->
    <div class="content-middle">

        <div class="system-response" style="display:{{ $display_status or "" }}">
            <p>{{ $response or ""}}</p>
        </div>

        <table>

            <form method="POST" action="/fee" enctype="multipart/form-data">
            {{csrf_field()}}
                <tr>
                    <td>
                        <a href="/">
                            <img src="icons/back-icon.svg" />
                        </a>
                    </td>
                    <td><h3 class="sub-title left">Make fee payment</h3></td>
                </tr>
                <tr>
                    <td>Student number</td>
                    <td>
                        <input class="input" type="number" name="student-number" placeholder="e.g. 95242" required>
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input class="input" type="number" name="amount" placeholder="in KES" required>
                    </td>
                </tr>
                <tr>
                    <td>Date of Payment</td>
                    <td>
                        <input class="input" type="date" name="payment-date" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="submit-button" type="submit" name="submit" value="Make payment">
                    </td>
                </tr>

            </form>
            
        </table>

    </div>
    <!--end of position content middle-->

</body>

</html>