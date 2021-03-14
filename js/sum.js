function res(k) {
    var p = 0;
    var All = document.forms['change'];
    for (var i = 0; i < All.elements.length; i++) {
        if (All.elements[i].checked) {
            p = p + parseInt(All.elements[i].value);
        }
    }
    var t = document.getElementById('hidden');
    t.value = p;

    if (k == 2) {
        alert(p);
    }
    
}