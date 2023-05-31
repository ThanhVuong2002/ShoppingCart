<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>SUM</title>
</head>

<body>
    <form method="post">
        @csrf
        <legend>SUM A AND B</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter number A:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Number A" name="numberA">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Enter number B:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Number B" name="numberB">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <h1>
            <?php if (isset($result)) {
                echo $result;
            } 
            ?>
        </h1>
    </form>


</body>

</html>
