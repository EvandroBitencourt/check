(function ($, window) {
    var apiKey = '7d1c14153f3db6fcc27c5d69a26a4dce';

    //Eventos dos campos fipe
    $(document).on('change', '#fipe_tipos', function (e) {
        if ($(this).val() !== "null") {
            loadMarcas($(this).val());
        }
    });
    $(document).on('change', '#fipe_marcas', function (e) {
        if ($(this).val() !== "null") {
            loadModelos($(this).val(), $('#fipe_tipos').val());
        }
    });
    $(document).on('change', '#fipe_modelos', function (e) {
        if ($(this).val() !== "null") {
            loadAnos($(this).val(), $('#fipe_marcas').val(), $('#fipe_tipos').val());
        }
    });
    $(document).on('change', '#fipe_anos', function (e) {
        if ($(this).val() !== "null") {
            loadResult($(this).val(), $('#fipe_modelos').val(), $('#fipe_marcas').val(), $('#fipe_tipos').val());
        }
    });

    function loadMarcas(tipo) {
        var ajax = $.ajax({
            url: `https://api.fipeapi.com.br/v1/${tipo}?${apiKey}`,
            type: 'GET',
            dataType: 'json',
            cache: true,
            beforeSend: function () {
                $('select#fipe_modelos').attr('disabled', true);
                $('select#fipe_modelos option').remove();
                $('select#fipe_modelos').append('<option value="">Modelo</option>');

                $('select#fipe_anos').attr('disabled', true);
                $('select#fipe_anos option').remove();
                $('select#fipe_anos').append('<option value="">Ano</option>');

                $('select#fipe_marcas option').remove();
                $('select#fipe_marcas').append('<option value="">Marca</option>');
                $('select#fipe_marcas').attr('disabled', true);
                $('select#fipe_marcas').append('<option value="">Carregando...</option>').attr('disabled', true);

                $('div#fipe_result span').text('""');
                $('div#preco_form').text('');
            },
            success: function (data) {
                $('select#fipe_marcas option').remove();
                $('select#fipe_marcas').append('<option value="">Selecione uma Marca</option>').attr('disabled', false);
                $.each(data, function (index, value) {
                    $('select#fipe_marcas').append(`<option value="${value.id}">${value.name}</option>`)
                });
            }
        });
    }

    function loadModelos(marca, tipo) {
        var ajax = $.ajax({
            url: `https://api.fipeapi.com.br/v1/${tipo}/${marca}?${apiKey}`,
            type: 'GET',
            dataType: 'json',
            cache: true,
            beforeSend: function () {
                $('select#fipe_anos').attr('disabled', true);
                $('select#fipe_anos option').remove();
                $('select#fipe_anos').append('<option value="">Ano</option>');

                $('select#fipe_modelos option').remove();
                $('select#fipe_modelos').attr('disabled', true);
                $('select#fipe_modelos').append('<option value="">Carregando...</option>').attr('disabled', true);
                $('div#fipe_result span').text('""');
                $('div#preco_form').text('');
            },
            success: function (data) {
                $('select#fipe_modelos option').remove();
                $('select#fipe_modelos').append('<option value="">Selecione um Veiculo</option>').attr('disabled', false);
                $.each(data, function (index, value) {
                    $('select#fipe_modelos').append(`<option value="${value.id_modelo}">${value.name}</option>`)
                });
            }
        });
    }

    function loadAnos(modelo, marca, tipo) {
        var ajax = $.ajax({
            url: `https://api.fipeapi.com.br/v1/${tipo}/${marca}/${modelo}?${apiKey}`,
            type: 'GET',
            dataType: 'json',
            cache: true,
            beforeSend: function () {
                $('select#fipe_anos option').remove();
                $('select#fipe_anos').attr('disabled', true);
                $('select#fipe_anos').append('<option value="">Carregando...</option>').attr('disabled', true);
                $('div#fipe_result span').text('""');
                $('div#preco_form').text('');
            },
            success: function (data) {
                $('select#fipe_anos option').remove();
                $('select#fipe_anos').append('<option value="null">Selecione um Modelo</option>').attr('disabled', false);
                $.each(data, function (index, value) {
                    $('select#fipe_anos').append(`<option value="${value.id}">${value.name}</option>`)
                });
            }
        });
    }

    function loadResult(ano, modelo, marca, tipo) {
        var ajax = $.ajax({
            url: `https://api.fipeapi.com.br/v1/${tipo}/${marca}/${modelo}/${ano}?${apiKey}`,
            type: 'GET',
            dataType: 'json',
            cache: true,
            beforeSend: function () {
                $('div#fipe_result span').text('""');
                $('div#preco_form').text('');
            },
            success: function (data) {
                $('div#fipe_result #fipe_codigo').text(`"${data.fipe_codigo}"`);
                $('div#fipe_result #name').text(`"${data.name}"`);
                $('div#fipe_result #marca').text(`"${data.marca}"`);
                $('div#fipe_result #ano').text(`"${data.ano}"`);
                $('div#fipe_result #combustivel').text(`"${data.combustivel}"`);
                $('div#fipe_result #preco').text(`"${data.preco}"`);
                $('div#preco_form').text(data.preco);

            }
        });
    }
    $(document).ready(function () {
        $('#consultar').on('click', function (e) {
            e.preventDefault();
            if (checkValidade()) {
                $("#resultado").show();
            }
        });

        $('#nova_consulta').on('click', function (e) {
            e.preventDefault();
            $("#campos").show();
            $("#resultado").hide();
            $('div#fipe_result span').text('""');
            $('div#preco_form').text('');
            $("#nenhum").prop('selected', 'selected');

            $('select#fipe_modelos').attr('disabled', true);
            $('select#fipe_modelos option').remove();
            $('select#fipe_modelos').append('<option value="">Modelo</option>');

            $('select#fipe_anos').attr('disabled', true);
            $('select#fipe_anos option').remove();
            $('select#fipe_anos').append('<option value="">Ano</option>');

            $('select#fipe_marcas').attr('disabled', true);
            $('select#fipe_marcas option').remove();
            $('select#fipe_marcas').append('<option value="">Marca</option>');

        });

    });

    function checkValidade() {
        if ($('select#fipe_tipos').val() == null)
            return false;
        else if ($('select#fipe_tipos').val() == "null")
            return false;
        if ($('select#fipe_marcas').val() == null)
            return false;
        else if ($('select#fipe_marcas').val() == "null")
            return false;
        if ($('select#fipe_modelos').val() == null)
            return false;
        else if ($('select#fipe_modelos').val() == "null")
            return false;
        if ($('select#fipe_anos').val() == null)
            return false;
        else if ($('select#fipe_anos').val() == "null")
            return false;
        else
            return true;
    }

})(jQuery, this);






