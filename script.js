function ClearText()
{
    var obj = document.getElementById('Phone').value = '';
    var obj = document.getElementById('Designation').value = '';
    var obj = document.getElementById('p2Address').value = '';
    var obj = document.getElementById('p1Address').value = '';
    var obj = document.getElementById('lastName').value = '';
    var obj = document.getElementById('firstName').value = '';
    var radio = document.getElementById('male').checked = false;
    var radio = document.getElementById('female').checked = false;
    var clear = document.getElementById('Department')
    for (var i=0;i<clear.lenght;i++)
    {
        if(clear.option[i].selected)
        {
            clear.option[i].selected = false;
        }
    }
}