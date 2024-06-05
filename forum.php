<style>
    /* Custom CSS for the forum page */

/* Set a background color for the body */
body {
  background-color: #f8f9fa;
}

/* Center the forum title */
h1 {
  text-align: center;
  margin-top: 20px;
}

/* Style the thread cards */
.card {
  margin-bottom: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-title {
  font-size: 18px;
  font-weight: bold;
}

.card-text {
  font-size: 14px;
}

/* Style the categories sidebar */
.card-title {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

.list-group-item {
  cursor: pointer;
  transition: background-color 0.3s;
}

.list-group-item:hover {
  background-color: #f0f0f0;
}
h1 {
  font-size: 32px;
  margin: 0;
  text-align: center;
  color: hsl(30, 100%, 50%);;
}

/* Style pour la navigation */
nav ul {
  list-style: none;
  margin: 10;
  padding: 10;
  text-align: center;
}

nav li {
  display: inline-block;
  margin-right: 40px;

}

nav li a {
  color: blue;
  text-decoration: none;
}


</style>
<?php require_once("header.php");?>


  <div class="container mt-4">
    <h1>Welcome to the Forum</h1>
    <hr>
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Thread Title</h5>
            <p class="card-text">This is the content of the thread.</p>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Another Thread Title</h5>
            <p class="card-text">This is another thread's content.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <ul class="list-group">
              <li class="list-group-item">Category 1</li>
              <li class="list-group-item">Category 2</li>
              <li class="list-group-item">Category 3</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
