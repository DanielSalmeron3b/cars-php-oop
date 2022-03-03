<?php

class car {
    // Properties
    private $brand;
    private $model;
    private $color;
    private $image;

    // Construct method
    function __construct(
        $brand='Honda', 
        $model='Civic', 
        $color='Red', 
        $image='img/hondacivic.jpg')
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->image = $image;
    }

    // Methods of the class
    function show(){
        $table = "<table style=\"width:200;border:ridge 5px rgb(200,50,150)\">\n";
        $table .= "<caption>Compra un " . $this->brand . "</caption>";
        $table .= "<tr>\n<td style=\"width:35%;\">BRAND</td>\n";
        $table .= "<td style=\"width:35%\">" . $this->brand . "</td>\n";
        $table .= "<td rowspan=\"3\" style=\"width:35%\"><img src=\"" . $this->image ."\"></td></tr>";
        $table .= "<tr>\n<td>MODEL</td>\n";
        $table .= "<td>" . $this->model . "</td>\n</tr>\n";
        $table .= "<tr>\n<td>COLOR</td>\n";
        $table .= "<td>\n" . $this->color . "</td>\n</tr>\n";
        $table .= "</table>\n";
        echo $table;
    }

}