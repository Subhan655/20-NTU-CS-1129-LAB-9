<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Lab 9</title>
</head>
<body>
    <div class="mt-5 container">
        <form action="server.php" method="post">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio" value="First radio" checked>
                    <label class="form-check-label" for="gridRadios1">
                      First radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio" value="Second radio">
                    <label class="form-check-label" for="gridRadios2">
                      Second radio
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                      Third disabled radio
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-2">Checkbox</div>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1" name="checkbox">
                  <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <input type="submit" class="btn btn-primary"/>
              </div>
            </div>
          </form>
          
    </div>
</body>
</html>