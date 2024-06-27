<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thông tin sinh viên</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Năm sinh</th>
            <th>Email</th>
            <th>Đang học tại</th>
            <th>Chuyên ngành</th>
        </tr>
        <tbody>
            <?php foreach ($users as $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['diachi'] ?></td>
                    <td><?= $value['namsinh'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['hoctai'] ?></td>
                    <td><?= $value['chuyennganh'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>