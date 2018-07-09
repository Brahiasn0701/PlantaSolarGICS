function DeleteRegister(value){
    $.ajax({
        type:'post',
        url:'?c=crud&m=DeleteRegister',
        data: {id:value},
        success(response){
            alert(response);
            location.reload();
        }
    });
}