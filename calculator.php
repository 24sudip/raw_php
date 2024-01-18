<!-- start bg-info bg-dark btn-warning -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator-demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">                  
                    <form action="calculator_post.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInput1" class="form-label">Number One</label>
                            <input type="number" class="form-control" id="exampleInput1" placeholder="Number One" name="number_one">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput2" class="form-label">Number Two</label>
                            <input type="number" class="form-control" id="exampleInput2" placeholder="Number Two" name="number_two">
                        </div>                        
                        <button type="submit" class="btn btn-primary" name="add">Add(+)</button>
                        <button type="submit" class="btn btn-info" name="minus">Minus(-)</button>
                        <button type="submit" class="btn btn-info" name="divi">Divi(/)</button>
                        <button type="submit" class="btn btn-info" name="multi">Multi(*)</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
