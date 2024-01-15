<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPHP</title>

    <style>
        .table_component {
            overflow: auto;
            width: 40%;
        }

        .table_component table {
            border: 1px solid #dededf;
            height: 15%;
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            border-spacing: 1px;
            text-align: left;
        }

        .table_component caption {
            caption-side: top;
            text-align: left;
        }

        .table_component th {
            border: 1px solid #dededf;
            background-color: #eceff1;
            color: #000000;
            padding: 5px;
        }

        .table_component td {
            border: 1px solid #dededf;
            background-color: #ffffff;
            color: #000000;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Список пользователей:</h1>
    <div class="table_component" role="region" tabindex="0">
        <table>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Почта</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data['users'] as $user): ?>
                    <tr>
                        <td>
                            <?= $user->name ?>
                        </td>
                        <td>
                            <?= $user->email ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>