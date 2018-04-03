<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Write</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src='../../js/script.js'></script>
    <script type="text/javascript" src='../../js/main.js'></script>
    <link rel="stylesheet" href="../../css/main.css">
  </head>
  <body>
    <!-- Writing Section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 side-menu">

        </div>
        <div class="col-sm-9 right-module">
          <div class="mini-board">

            <h3>Write your story</h3>

            <form class="ui-form" action="" name="myForm" method="post" enctype="multipart/form-data" onsubmit="return submitStory()">
              <p class="error" id="headingerror"></p>
              <input type="text" name="heading" placeholder="Heading"><br><br>
              <p>Upload Article Image (drag/drop) <span class="error" id="imageerror"></span></p>
              <input type="file" name="background-image"><br><br>
              <p class="error" id="storyerror"></p>
              <textarea class="write-pad" name="story"></textarea><br>
              <input type="submit" class="draft" name="draft" value="save as draft">&nbsp;<input type="submit" class="publish" name="publish" value="publish">
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Froala Integration Script-->
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/js/froala_editor.pkgd.min.js"></script>
    <script>
    $(function() {
      $('.write-pad').froalaEditor()
    });
  </script>
  </body>
</html>
