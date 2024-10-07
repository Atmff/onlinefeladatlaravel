<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    <div>
    {{ $foo }} 
    </div>
</body>
</html>