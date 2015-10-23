<!DOCTYPE html>
<head>
    <title>DWA15 - Project 3</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="//p2.oprisan.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="//p2.oprisan.com/css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <a class="navbar-brand" href="#">DWA 15</a>
      <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" href="http://p1.oprisan.com">P1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://p2.oprisan.com">P2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://p3.oprisan.com">P3 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://p4.oprisan.com">P4</a>
        </li>
      </ul>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Text and User Profile Generator</h1>
        <p>This Laravel application allows you to generate random text paragraphs and user profile data that can be used anywhere!</p>
        <form method="get" action="generate/textbuild">
          <div class="form-group row">
            <label for="count" class="col-sm-4 form-control-label">How many paragraphs would you like to generate?</label>
            <div class="col-sm-2">          
              <select id="count" name="count" class="form-control">
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="submit" class="btn btn-primary btn-lg" id="generateText" value="Generate Paragraphs">
            </div>
          </div>
        </form>
        <br><br>
        <form method="get" action="generate/profilebuild">
          <div class="form-group row">
            <label for="count" class="col-sm-4 form-control-label">How many user profiles would you like to generate?</label>
            <div class="col-sm-2">          
              <select id="count" name="count" class="form-control">
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            Include
            <label for="count" class="col-sm-4 form-control-label">Birthday</label>
            <div class="col-sm-2">          
                <input name="birthdate" type="checkbox">
            </div>
          </div>
          <div class="form-group row">
            Include
            <label for="count" class="col-sm-4 form-control-label">Address</label>
            <div class="col-sm-2">          
                <input name="address" type="checkbox">
            </div>
          </div>
          <div class="form-group row">
            Include
            <label for="count" class="col-sm-4 form-control-label">Profile</label>
            <div class="col-sm-2">          
                <input name="profile" type="checkbox">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="submit" class="btn btn-primary btn-lg" id="generateProfiles" value="Generate Profiles">
            </div>
          </div>
        </form>

      </div>
    </div>
    <p>GitHub: <a href="https://github.com/andreioprisan/dwa15-p3">https://github.com/andreioprisan/dwa15-p3</a>
</body>
</html>