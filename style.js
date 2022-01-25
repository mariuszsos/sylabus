$(function () {
    $('select[name="spec"]').hide();

    $('input[name="specOK"]').on('click', function () {
        if ($(this).prop('checked')) {
            $('select[name="spec"]').fadeIn();
        } else {
            $('select[name="spec"]').hide();
        }
    });
});

function setTextField(ddl) {
        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
}

function dodaj(){
    var number = document.getElementById("iledodac").value;
    var table = document.getElementById("efektyTabelka");

    while (table.rows.length > 1) {
        table.deleteRow(1);
    }

    for (i=0;i<number;i++){
        var row = table.insertRow(1 + i);
        
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var input1 = document.createElement("input");
        var input2 = document.createElement("textarea");
        var input3 = document.createElement("input");
        var input4 = document.createElement("input");
        input1.type = "text";
        input3.type = "text";
        input4.type = "number";

        input1.name = "kategoriaE" + i;
        input2.name = "efektyUcznia" + i;
        input3.name = "kodEfektu" + i;
        input4.name = "oddzialywanieE" + i;
        cell1.appendChild(input1);
        cell2.appendChild(input2);
        cell3.appendChild(input3);
        cell4.appendChild(input4);

    }
}