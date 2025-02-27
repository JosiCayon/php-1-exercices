<!DOCTYPE html>
<html lang="en">
<?php require 'partial/head.php'; ?>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partial/header.php'; ?>
    <table-border: 1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Localidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person): ?>
                <tr>
                    <td><?= $person['Id'] ?></td>
                    <td><?= $person['name'] ?></td>
                    <td><?= $person['email'] ?></td>
                    <td><?= $person['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table-border:>
    <?php require 'partial/footer.php'; ?>
</body>

</html>