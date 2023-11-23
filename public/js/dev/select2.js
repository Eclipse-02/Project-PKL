function select2Create(data) {
    data.forEach(e => {
        var id = '#' + e;
        $(id).select2({ 
            dropdownParent: $('#create_modal > .modal-dialog > .modal-content')
        });
    });
}