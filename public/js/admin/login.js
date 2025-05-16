function login(url){
    $.post(
        url,
        $('#formLogin').serialize(),
        function(data){
            console.log(data.msg);
        }
    );
}
