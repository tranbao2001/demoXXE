<html>
  <head>
    <title>Books Library</title>
    <link rel="stylesheet" type="text/css" >
    <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: #f1f1f1;
  color: #383b43;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
      float: none;
      display: block;
      text-align: left;
  }
  .header-right {
      float: none;
  }
}

.form-group {
  margin: 10px;
  border: 1px solid #edeff2;
  border-radius: 3px;
}

.form-group .form-input {
  font-size: 13px;
  line-height: 50px;
  font-weight: 400;
  color: #000;
  width: 100%;
  height: 50px;
  padding: 0 20px;
  border: 1px solid #000;
  border-radius: 3px;
}

.form-group.fl_icon .form-input {
  padding-left: 70px;
}

.form-group textarea.form-input {
  height: 150px;
}

#name {
  width: 300px;
  height: 30px;
  text-align: center;
  border-radius: 4px;
}

input {
  border-style: solid;
  background: #f1f1f1;
}

input[type="submit"] {
  width: 60px;
  height: 30px;
  background-color: dodgerblue;
  color: white;
}

.be-comment-block {
  margin-bottom: 50px !important;
  border: 1px solid #edeff2;
  border-radius: 2px;
  padding: 50px 70px;
  border: 1px solid #ffffff;
}

.comments-title {
  font-size: 16px;
  color: #262626;
  margin-bottom: 15px;
  font-family: 'Conv_helveticaneuecyr-bold';
}

.be-img-comment {
  width: 60px;
  height: 60px;
  float: left;
  margin-bottom: 15px;
}

.be-ava-comment {
  width: 60px;
  height: 60px;
  border-radius: 50%;
}

.be-comment-content {
  margin-left: 80px;
}

.be-comment-content span {
  display: inline-block;
  width: 49%;
  margin-bottom: 15px;
}

.be-comment-name {
  font-size: 13px;
  font-family: 'Conv_helveticaneuecyr-bold';
}

.be-comment-content a {
  color: #383b43;
}

.be-comment-time {
  text-align: right;
  font-size: 11px;
  color: #b4b7c1;
}

.be-comment-text {
  font-size: 13px;
  line-height: 18px;
  color: #7a8192;
  display: block;
  background: #f6f6f7;
  border: 1px solid #edeff2;
  padding: 15px 20px 20px 20px;
}

body {
  background: #f1f1f1;
}

#type {
  width: 400px;
}
</style>
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div>
        <center>
            <br><br><br><h3 id="type"></h3>
        </center>
    </div>
    <script type="text/javascript">
        var msg = "TRANG WEB DEMO XML EXTERNAL ENTITIES (XXE) - BÀI TẬP CUỐI KÌ ",
            i=0,
            body=document.getElementById('bodyId');
        body.onload = function(){
            'use strict';
            var typeWriter = setInterval(function(){

                document.getElementById('type').innerHTML += msg[i];
                i = i + 1;

                if(i>msg.length-1){
                    clearInterval(typeWriter)
                }
            }, 100);
        }
    </script>
  </body>
</html>