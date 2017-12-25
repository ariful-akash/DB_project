/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var i = 0;
var seats;
var total_cost = 0;

var calculateCost = function (name, booked, cost) {

    var tBody = document.getElementById('costlist');
    var total = document.getElementById('totalcost');
    var totalcostrow = document.getElementById('totalcostRow');
    var button = document.getElementById(name);
    var buttonColor = button.style.backgroundColor;

    if ((buttonColor.split(',')[0].split('(')[1]) == 204) {

        var removalRow = document.getElementById(name + name);
        tBody.removeChild(removalRow);
        total_cost -= cost;
        button.style.backgroundColor = '#fff';
        i--;
    } else {

        var row = document.createElement('tr');
        row.id = name + name;

        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = ++i;
        cell2.innerHTML = name;
        cell3.innerHTML = cost;

        tBody.insertBefore(row, totalcostrow);

        total_cost += cost;

        button.style.backgroundColor = '#ccc';
    }

    total.innerHTML = total_cost;

};
