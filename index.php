<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEB-230 Assignments</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
      .container{
        padding:30px;
      }
      a{
        text-decoration: none;
        color: #AAA;
        font-weight: bold;
      }
      a:hover{
        text-decoration: none;
        color: #333; 
      }
    </style>
  </head>

  <body class="text-center">
          <?php

              scanner("series");
              function scanner($path){

                $col001 = '';
                $col002 = '';
                $col003 = '';
                $cnt = 0;
                $scan = glob($path . '/*');

                foreach($scan as $item){

                  if(is_dir($item)){

                    switch ($cnt) {
                        case 0:
                            $col001 .= '<a href="series/'.basename($item).'/"><li class="list-group-item">'.basename($item).'</li></a>';
                            $cnt++;
                            break;
                        case 1:
                            $col002 .= '<li class="list-group-item"><a href="series/'.basename($item).'/">'.basename($item).'</a></li>';
                            $cnt++;
                            break;
                        case 2:
                            $col003 .= '<li class="list-group-item"><a href="series/'.basename($item).'/">'.basename($item).'</a></li>';
                            $cnt = 0;
                            break;
                        default:
                            //echo "Your favorite color is neither red, blue, nor green!";
                    }
                          //echo '<li class="list-group-item">'.basename($item).'</li>';

                          //$result[basename($item)] = scanner($item);
                  }

                }
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <div class="list-group">
                        <?php echo $col001; ?>
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="list-group">
                        <?php echo $col002; ?>
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="list-group">
                        <?php echo $col003; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php

                //return $result;



              }
          ?>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

  </body>
</html>
