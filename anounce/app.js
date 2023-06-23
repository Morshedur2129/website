//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");
const ejs = require("ejs");
const mysql = require('mysql');

const homeStartingContent = "Are you a student dreaming of pursuing your higher education in China? Look no further! We are thrilled to announce that our Student's Consultancy Website is your ultimate gateway to exploring study opportunities in China. Discover Top Universities: Our extensive database features a wide range of Chinese universities renowned for their academic excellence. From prestigious institutions to specialized programs, you can explore a plethora of options tailored to your interests and aspirations.";
const aboutContent = "Hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Non diam phasellus vestibulum lorem sed. Platea dictumst quisque sagittis purus sit. Egestas sed sed risus pretium quam vulputate dignissim suspendisse. Mauris in aliquam sem fringilla. Semper risus in hendrerit gravida rutrum quisque non tellus orci. Amet massa vitae tortor condimentum lacinia quis vel eros. Enim ut tellus elementum sagittis vitae. Mauris ultrices eros in cursus turpis massa tincidunt dui.";
const contactContent = "Scelerisque eleifend donec pretium vulputate sapien. Rhoncus urna neque viverra justo nec ultrices. Arcu dui vivamus arcu felis bibendum. Consectetur adipiscing elit duis tristique. Risus viverra adipiscing at in tellus integer feugiat. Sapien nec sagittis aliquam malesuada bibendum arcu vitae. Consequat interdum varius sit amet mattis. Iaculis nunc sed augue lacus. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing elit. Pulvinar elementum integer enim neque. Ultrices gravida dictum fusce ut placerat orci nulla. Mauris in aliquam sem fringilla ut morbi tincidunt. Tortor posuere ac ut consequat semper viverra nam libero.";

const app = express();

app.set('view engine', 'ejs');

app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static("public"));

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'blogDB'
});

connection.connect();

const postTable = `CREATE TABLE IF NOT EXISTS posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT
);`;

connection.query(postTable, (error, results, fields) => {
  if (error) throw error;
  console.log('Posts table created or already exists.');
});

app.get("/", function(req, res){
  const query = "SELECT * FROM posts;";
  connection.query(query, (error, results, fields) => {
    if (error) throw error;
    res.render("home", {
      startingContent: homeStartingContent,
      posts: results
    });
  });
});

app.get("/compose", function(req, res){
  res.render("compose");
});

app.post("/compose", function(req, res){
  const title = req.body.postTitle;
  const content = req.body.postBody;
  const query = "INSERT INTO posts (title, content) VALUES (?, ?);";
  connection.query(query, [title, content], (error, results, fields) => {
    if (error) throw error;
    res.redirect("/");
  });
});



app.get("/posts/:postId", function(req, res) {
  console.log("Jihad")
  // Logic to fetch and render the individual post
});


app.get("/about", function(req, res){
  res.render("about", {aboutContent: aboutContent});
});

app.get("/contact", function(req, res){
  res.render("contact", {contactContent: contactContent});
});

app.listen(3000, function() {
  console.log("Server started on port 3000");
});
