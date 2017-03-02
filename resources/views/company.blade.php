<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="js/app.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pretty-checkbox/2.1.0/pretty.min.css"> --}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">
      <div class="col-md-12 survey-header">
        <h1>{{ isset($company) ? $company.': ' : '' }}{{ isset($title) ? $title : '' }}</h1>
        <h2><small>Posting:<a href="{{ isset($url) ? $url : '' }}" >&nbsp;{{ isset($url) ? $url : '' }}</a></small></h2>
      </div>
      <div class="col-md-12 survey-wrapper">
        <div class="survey">
          <form method="POST" class="form-horizontal" action="/create">
            {{ csrf_field() }}
            <h3 class="pbottom">Please check all boxes that apply:</h3>
            <div class="check-wrapper">
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="willcontact" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Will contact canidate
                </label>
              </div>
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="main-check overqualified" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Canidate is over qualified
                </label>
              </div>
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="main-check underqualified" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Canidate is under qualified
                </label>
              </div>
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="main-check" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Canidate does not have bacholers degree
                </label>
              </div>
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="main-check" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Canidate had issues with resume
                </label>
              </div>
              <div class="checkbox form-group">
                <label style="font-size: 1em">
                  <input class="main-check" type="checkbox" value="">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                  Canidate had issues with cover letter
                </label>
              </div>
            </div>
            <div class="ptop">
              <div class="form-group">
                <label for="comment">Additional Comments or Information (are greatly appreciated):</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
