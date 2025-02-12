<?php

// Function to fetch user data from the JSONPlaceholder API
function getUsers() 
{
    
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);

}

// Get the list of users
$users = getUsers();

echo '<pre>';
print_r($users);
echo '<pre>';


for($i = 0; $i < count($users); $i++)
{
    echo $users[$i]['name'];
}

foreach($users as $user)
{
    echo $user['name'];
}

while()
{
    
}