<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <button type="button" class="btn btn-primary mb-2">
        <a class="text-decoration-none text-white" href="?url=add_customer">Thêm khách hàng</a>
    </button>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        foreach ($customer as $value): ?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['email']?></td>
                <td><?= $value['phone']?></td>
                <td>
                    <button type="button" class="btn btn-success">
                        <a class="text-decoration-none text-white" href="?url=detail_customer&id=<?= $value['id']?>">Sửa</a>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">
                        <a class="text-decoration-none text-white" href="?url=deleteUser&id=<?= $value['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">Xóa</a>
                    </button>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>