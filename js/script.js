var rates = [];

$(window).ready(function() {

    getData(); /* Get data for Curency Converter;*/

    $(function() {

        $('#startdate,#enddate').datetimepicker({
            useCurrent: false,
            format: 'MM/DD/YYYY',
            minDate: moment()
        });
        $('#startdate').datetimepicker().on('dp.change', function(e) {
            var incrementDay = moment(new Date(e.date));
            incrementDay.add(1, 'days');
            $('#enddate').data('DateTimePicker').minDate(incrementDay);
            $(this).data("DateTimePicker").hide();
        });

        $('#enddate').datetimepicker().on('dp.change', function(e) {
            var decrementDay = moment(new Date(e.date));
            decrementDay.subtract(1, 'days');
            $('#startdate').data('DateTimePicker').maxDate(decrementDay);
            $(this).data("DateTimePicker").hide();
        });

    });

    if ($("#translator").length > 0) {
        $('#translator').on('change', function() {
            if ($('#translator').val() == 'Yes') {
                $('#language-group').removeClass().addClass('form-group');
            } else {
                $('#language-group').removeClass().addClass('hidden');
            }
        });
    };
    if ($("#gallery").length > 0) {
        $("#gallery").unitegallery({
            tile_width: 300,
            tile_height: 250,
            grid_num_rows: 2,
            lightbox_type: "compact",
            lightbox_arrows_position: "inside",
            tile_enable_textpanel: true,
            tile_textpanel_bg_color: "#3A85E0",
            tile_textpanel_bg_opacity: 0.8,
            tile_textpanel_title_color: "yellow",
            tile_textpanel_title_text_align: "center",
        });
    };

    $('#optionsFrom').flagStrap({
        countries: {
            "US": "USD",
            "CN": "CNY",
            "MX": "MXN",
            "EU": "EUR"
        },
        placeholder: false,
        buttonSize: "btn-md",
        buttonType: "btn",
        labelMargin: "10px",
        scrollable: false,
        onSelect: function() {
            setValues();
        }
    });
    $('#optionsTo').flagStrap({
        countries: {
            "US": "USD",
            "CN": "CNY",
            "MX": "MXN",
            "EU": "EUR"
        },
        placeholder: false,
        buttonSize: "btn-md",
        buttonType: "btn",
        labelMargin: "10px",
        scrollable: false,
        onSelect: function() {
            setValues();
        }
    });
    /*----------Functions to control Curency Toggle --------------*/
    $("#fromValue").val('1');
    setValues();
    
    $('li.dropdown > a').on('click', function (event) {
        $(this).parent().toggleClass('open');
    });
    
    $('.flagstrap .dropdown-menu').on('click', function (event) {
        $(this).parent().toggleClass('open');
    });
    
    $('body').on('click', function (e) {
        if (!$('li.dropdown').is(e.target) 
            && $('li.dropdown').has(e.target).length === 0 
            && $('.open').has(e.target).length === 0
        ) {
            $('li.dropdown').removeClass('open');
        }
    });
    /*--------------------End functions---------------------------*/
});

function getData() {
    $.ajax({
        dataType: "json",
        url: ('http://api.fixer.io/latest?base=ZAR;symbols=USD,CNY,MXN,EUR'),
        async: false,
        success: function(data) {
            rates = data.rates;
        }
    })
};

function setValues() {
    var toType = rates[$('#optionsTo').find('select').children("option[selected=selected]")[0].innerHTML];
    var fromType = rates[$('#optionsFrom').find('select').children("option[selected=selected]")[0].innerHTML];
    var fromValue = $("#fromValue").val();
    var toValue = fromValue * (toType * (1 / fromType));
    $("#toValue").val(toValue.toFixed(3));

};
