<?php
    // our php flight data
    $data = [
        [ 
            "destinations" => "YYC",
            "price" => "$300",
            "rating" => "2 stars",
        ],
        [ 
            "destinations" => "YQL",
            "price" => "$200",
            "rating" => "1.5 stars",
        ],
        [ 
            "destinations" => "YQF",
            "price" => "$250",
            "rating" => "3 stars",
        ],
        [ 
            "destinations" => "YMM",
            "price" => "$600",
            "rating" => "4 stars",
        ],
        [ 
            "destinations" => "YQU",
            "price" => "$350",
            "rating" => "3.5 stars",
        ],
    ];
   
?>

<script>

var imageArray = [
"https://images.pexels.com/photos/346885/pexels-photo-346885.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=150",
"https://images.pexels.com/photos/672358/pexels-photo-672358.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=150",
"https://images.pexels.com/photos/307008/pexels-photo-307008.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=150",
"https://images.pexels.com/photos/338515/pexels-photo-338515.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=150",
"https://images.pexels.com/photos/1285625/pexels-photo-1285625.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=150",
];

var descriptionArray = [
"Planet being held",
"Overlooking the mountains",
"Overlooking the ocean",
"Eiffel Tower",
"City bordering ocean",
];

var urlArray =[
"https://bit.ly/1RK1jKp",
"https://bit.ly/2T15tGd",
"https://bit.ly/2z7P6la",
"https://bit.ly/2nDuzR3",
"https://bit.ly/2F8iJoM",
];

    document.write("<table>");
    document.write("<tr><th>Description</th><th>Images</th><th>Click Me!</th><th>PHP</th></tr>");

for (var i=0; i < descriptionArray.length; i++){
    document.write("<tr>");
    document.write("<td>" + descriptionArray[i] + "</td>" + "<td><img src=\"" + imageArray[i] + "\" /></td>" + "<td><p onclick='urlLoop(" + i + ")'>Click!</p></td>");
    document.write("<td>" + <?php echo $data[0]["destinations"]; ?> + "</td>");
    document.write("</tr>");
}

var mywindow;

function urlLoop (i) {
    mywindow = window.open(urlArray[i]);
    setTimeout('mywindow.close()',3000);
}

</script>
<!-- 
// tableOutput = '';

// tableOutput += '<table>'; 
// tableOutput += '<tr><th>Description</th>';
// for (var i=0; i < imageArray.length; i++){
//     tableOutput += '<tr><td>';
//     tableOutput += '<p onmouseover="toggleImage(' + i + ')">' + descriptionArray[i] + '</p>';
//     tableOutput += '</td>';
//     tableOutput += '</tr>';
// }

// document.getElementById('imageTable').innerHTML = tableOutput;


// function toggleImage(imageIndex){
//     document.getElementById('image').src = imageArray[imageIndex];
// } --> 

