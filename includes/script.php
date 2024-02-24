<?php 

if ($parking === 'yes_parking') {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === true;
    });
} else if ($parking === 'no_parking') {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === false;
    });
}   

if ($vote == 1) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 1;
    });
} else if ($vote == 2) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 2;
    });
}   else if ($vote == 3) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 3;
    });
}   else if ($vote == 4) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 4;
    });
}   else if ($vote == 5) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 5;
    });
}   