<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border="1" style="background-color:#FFFFCC;border-collapse:collapse;border:1px solid #FFCC00;color:#000000;width:100%" cellpadding="3" cellspacing="3">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Subject</td>
            <td>Message</td>
        </tr>
        <tr>
            <td><?= $data['name'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['subject'] ?></td>
            <td><?= $data['message'] ?></td>
        </tr>
    </table>

</body>

</html>