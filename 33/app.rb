require 'sinatra'

get '/' do
  erb :form
end

post '/submit' do
  first = params[:first_name]
  last = params[:last_name]
  @reversed_name = "#{last} #{first}"
  erb :result
end

<!DOCTYPE html>
<html>
<head>
  <title>Ruby Form</title>
</head>
<body>
  <h2>Enter Your Name</h2>
  <form action="/submit" method="post">
    First Name: <input type="text" name="first_name"><br><br>
    Last Name: <input type="text" name="last_name"><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
</head>
<body>
  <h2>Reversed Name:</h2>
  <p><%= @reversed_name %></p>
</body>
</html>


