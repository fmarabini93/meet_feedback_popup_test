<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="#" />
            <link rel="stylesheet" href="test.css">
            <title>Test Popup</title>
      </head>
      <body>
            <h4>Come valuti la lezione?</h4>
            <form class="rating">
                  <label>
                        <input type="radio" name="stars" value="1" onchange="getLessonRating(this)" />
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="2" onchange="getLessonRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="3" onchange="getLessonRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="4" onchange="getLessonRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="5" onchange="getLessonRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
            </form>
            <h4>Come valuti il tutor?</h4>
            <form class="rating">
                  <label>
                        <input type="radio" name="stars" value="1" onchange="getTutorRating(this)" />
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="2" onchange="getTutorRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="3" onchange="getTutorRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="4" onchange="getTutorRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
                  <label>
                        <input type="radio" name="stars" value="5" onchange="getTutorRating(this)" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                  </label>
            </form>
            <h4>Lascia un commento:</h4>
            <textarea id="comment" cols="50" rows="4"></textarea>
            <br>
            <input type="submit">

            <script>
                  function getLessonRating(el) {
                        console.log('Current lesson rating is: ' + el.value);
                  }
                  function getTutorRating(el) {
                        console.log('Current tutor rating is: ' + el.value);
                  }
            </script>
      </body>
</html>