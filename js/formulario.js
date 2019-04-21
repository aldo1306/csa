function mostrar(id) {
    if (id == "libro") {
        $("#libro").show();
        $("#tesis").hide();
        $("#autonomo").hide();

    }

    if (id == "tesis") {
        $("#libro").hide();
        $("#tesis").show();
        $("#revista").hide();

    }

    if (id == "revista") {
        $("#libro").hide();
        $("#tesis").hide();
        $("#revista").show();

    }

}