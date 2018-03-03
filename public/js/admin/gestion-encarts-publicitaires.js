const up = document.querySelector('#up');
const down = document.querySelector('#down');

up.addEventListener('click', moveUp);
down.addEventListener('click', moveDown);

function moveUp()
{
    const ddl = document.querySelector('#contentlist');
    const selectedItems = new Array();
    const temp = {innerHTML:null, value:null};
    for(let i = 0; i < ddl.length; i++)
        if(ddl.options[i].selected)
            selectedItems.push(i);

    if(selectedItems.length > 0)
        if(selectedItems[0] != 0)
            for(let i = 0; i < selectedItems.length; i++)
            {
                temp.innerHTML = ddl.options[selectedItems[i]].innerHTML;
                temp.value = ddl.options[selectedItems[i]].value;
                ddl.options[selectedItems[i]].innerHTML = ddl.options[selectedItems[i] - 1].innerHTML;
                ddl.options[selectedItems[i]].value = ddl.options[selectedItems[i] - 1].value;
                ddl.options[selectedItems[i] - 1].innerHTML = temp.innerHTML;
                ddl.options[selectedItems[i] - 1].value = temp.value;
                ddl.options[selectedItems[i] - 1].selected = true;
                ddl.options[selectedItems[i]].selected = false;
            }
}

function moveDown()
{
    const ddl = document.querySelector('#contentlist');
    const selectedItems = new Array();
    const temp = {innerHTML:null, value:null};
    for(let i = 0; i < ddl.length; i++)
        if(ddl.options[i].selected)
            selectedItems.push(i);

    if(selectedItems.length > 0)
        if(selectedItems[selectedItems.length - 1] != ddl.length - 1)
            for(let i = selectedItems.length - 1; i >= 0; i--)
            {
                temp.innerHTML = ddl.options[selectedItems[i]].innerHTML;
                temp.value = ddl.options[selectedItems[i]].value;
                ddl.options[selectedItems[i]].innerHTML = ddl.options[selectedItems[i] + 1].innerHTML;
                ddl.options[selectedItems[i]].value = ddl.options[selectedItems[i] + 1].value;
                ddl.options[selectedItems[i] + 1].innerHTML = temp.innerHTML;
                ddl.options[selectedItems[i] + 1].value = temp.value;
                ddl.options[selectedItems[i] + 1].selected = true;
                ddl.options[selectedItems[i]].selected = false;
            }
}