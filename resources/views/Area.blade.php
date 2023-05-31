<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>SUM</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>
<body>
    <div class="container flex">
    <form method="post">
        @csrf
        <legend>Area of Triangle</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter a:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="enter a" name="a">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Enter H:</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="enter H" name="h">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <h1>
            <?php if (isset($resulAreaofTriangle)) {
                echo $resulAreaofTriangle;
            } 
            ?>
        </h1>
    </form>

    <form method="post">
        @csrf
        <legend>Area of Quadrangle</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter an edge</label>
            <input type="text" id="disabledTextInput" class="form-control" name="e1">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter an edge</label>
            <input type="text" id="disabledTextInput" class="form-control" name="e2">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter an edge</label>
            <input type="text" id="disabledTextInput" class="form-control" name="e3">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Enter an edge</label>
            <input type="text" id="disabledTextInput" class="form-control" name="e4">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <h1>
            <?php if (isset($resulAreaofQuadrangle)) {
                echo $resulAreaofQuadrangle;
            } 
            ?>
        </h1>
    </form>

</div>
</body>

</html>
