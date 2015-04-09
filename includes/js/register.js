$('#usertype').on('change',function(){
    var selection = $(this).val();
    switch(selection){
        case "1":
            $("#users").show(),
            $("#artists").hide(),
            $("#sponsors").hide()
            break;
        case "2":
            $("#users").hide(),
            $("#artists").show(),
            $("#sponsors").hide()
            break;
        case "3":
            $("#users").hide(),
            $("#artists").hide(),
            $("#sponsors").show()
            break;
        default:
            $("#users").show(),
                $("#artists").hide(),
                $("#sponsors").hide()
    }
});