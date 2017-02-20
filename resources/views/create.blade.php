<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/vue.resource/1.2.0/vue-resource.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">
      <div class="padding col-md-12">
        <div class="create-header">
          Generate Employer Hash
        </div>
      </div>
      <div class="current-applications-wrapper col-md-6">
        <div class="current-applications">
          <h1>Current Applications</h1>
          <div class="pagination">
              <button class="btn btn-default" @click="fetchStories(pagination.prev_page_url)"
                      :disabled="!pagination.prev_page_url">
                  Previous
              </button>
              <span>Page @{{pagination.current_page}} of @{{pagination.last_page}}</span>
              <button class="btn btn-default" @click="fetchStories(pagination.next_page_url)"
                      :disabled="!pagination.next_page_url">Next
              </button>
          </div>
          <table class="table table-striped">
            <tr>
              <th>#</th>
              <th>Company</th>
              <th>Title</th>
              <th>Status</th>
            </tr>
            <tr v-for="company in companies" is="company" :company="company"></tr>
          </table>
        </div>
      </div>
      <div class="company-entry-wrapper col-md-6">
        <div class="company-entry">
          <form method="POST" class="form-horizontal" action="/create">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="company" class="col-sm-2 control-label">Company Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Job Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
              </div>
            </div>
            <div class="form-group">
              <label for="url" class="col-sm-2 control-label">Job URL</label>
              <div class="col-sm-10">
                <input type="url" class="form-control" name="url" id="url" placeholder="Job Url">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Generate</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">

      </div>
      <div class="current-return-wrapper col-md-6">
       <div class="company-return">
         <p>
           Company:&nbsp; {{ isset($data['company']) ? $data['company'] : '' }}
         </p>
         <p>
           Job Title:&nbsp; {{ isset($data['title']) ? $data['title'] : '' }}
         </p>
         <p>
           Application URL:&nbsp; <a>{{ isset($data['url']) ? $data['url'] : '' }}</a>
         </p>
         <p>
           Presentation URL:&nbsp; http://hireryan.today/{{ isset($data['hash']) ? $data['hash'] : '' }}
         </p>
       </div>
      </div>
    </div>
  </body>
</html>
