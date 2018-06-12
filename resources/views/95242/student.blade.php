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

            <form method="POST" action="#" enctype="multipart/form-data">
            {{csrf_field()}}
                <tr>
                    <td>
                        <a href="/">
                            <img src="icons/back-icon.svg" />
                        </a>
                    </td>
                    <td>
                        <h3 class="sub-title left">Register a student</h3>
                    </td>
                </tr>
                <tr>
                    <td>Student number</td>
                    <td>
                        <input class="input" type="number" name="student-number" placeholder="e.g. 95242" required>
                    </td>
                </tr>
                <tr>
                    <td>Full name</td>
                    <td>
                        <input class="input" type="text" name="full-name" placeholder="e.g. Koteng Andrew Onyango" required>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input class="input" type="date" name="dob" required>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <input class="input" type="text" name="address" placeholder="e.g. Langata road, Nairobi" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="submit-button" type="submit" name="submit" value="register student">
                    </td>
                </tr>

            </form>

        </table>



    </div>
    <!--end of position content middle-->

</body>

</html>