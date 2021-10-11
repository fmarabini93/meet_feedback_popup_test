<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="#" />
            <title>Test page</title>
      </head>
      <body>
            <button onclick='window.open("test_popup.php", "Feedback", "status=0,scrollbars=1,width=300,height=500,menubar=no,toolbar=no")' hidden id="test"></button>
            <a href="https://meet.google.com/sor-tikh-baq" target="_blank">Link</a>

            <script>
                  setTimeout(function clickLink() {
                        document.getElementById('test').click();
                  }, 3000);
            </script>
      </body>
</html>