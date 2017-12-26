/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var searchValidator = function () {
    var start = document.getElementById("start").value;
    var dest = document.getElementById("dest").value;
    var date = document.getElementById("date").value;
    var bus_type = document.getElementById("bus_type").value;

    var flag = false;

    if (start !== "" && dest !== "" && date !== "" && bus_type !== "") {

        if (start !== dest) {

            flag = true;
        }
    }

    return flag;
};


var adminbusinput = function () {

    var name = document.getElementById("name").value;
    var reg_no = document.getElementById("reg_no").value;
    var coach = document.getElementById("coach").value;
    var dep_date = document.getElementById("dep_date").value;
    var time = document.getElementById("time").value;
    var starting = document.getElementById("starting").value;
    var dest = document.getElementById("dest").value;

    var flag = false;
    if (name !== "" && reg_no !== "" && coach !== "" && dep_date !== "" && time !== "" && starting !== "" && dest !== "")
    {
        flag = true;
    }

    return flag;

};


