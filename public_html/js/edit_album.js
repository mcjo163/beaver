function addSongAfter(number) {
    addOnBottom();

    for (i = count; i > number + 1; i--) {
        var shiftText = document.getElementById('song'+(i-1)).value;
        document.getElementById('song'+i).value = shiftText;
    }
    document.getElementById('song'+i).value = "";
}

function deleteSong(number) {

    for (i = number; i < count; i++) {
        var shiftText = document.getElementById('song'+(i+1)).value;
        document.getElementById('song'+i).value = shiftText;
    }

    deleteBottom();
}

function deleteBottom() {

    if (count > 1) {
        $('#row-song' + count).remove();
        count--;
    }
}

function addOnBottom() {
    count++;
    $('.textboxes').append(
        '<div class="form-group row" id="row-song'+count+'">' +
        '<div class="col-4">' +
        '<input type="button" id="btAdd'+count+'" value="+" class="btn btn-outline-secondary"' +
        'tabindex="-1" onclick="addSongAfter('+count+')">\n' +
        '<input type="button" id="delete'+count+'" value="Delete" class="btn btn-danger"' +
        'tabindex="-1" onclick="deleteSong('+count+')">' +
        '</div>' +
        '<div class="col-8">' +
        '<input type="text" id="song'+count+'" name="song'+count+'" class="form-control"' +
        'placeholder="Song '+count+'">' +
        '</div></div>'
    );
}