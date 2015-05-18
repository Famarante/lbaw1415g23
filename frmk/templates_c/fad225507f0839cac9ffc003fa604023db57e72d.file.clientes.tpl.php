<?php /* Smarty version Smarty-3.1.15, created on 2015-05-10 23:44:42
         compiled from "C:\xampp\htdocs\xampp\frmk_loja\templates\admin\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7480554fb9be0ae023-64366302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad225507f0839cac9ffc003fa604023db57e72d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\admin\\clientes.tpl',
      1 => 1431294274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7480554fb9be0ae023-64366302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554fb9be1250d2_15261958',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554fb9be1250d2_15261958')) {function content_554fb9be1250d2_15261958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Clientes
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Forms
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <script>
            $(function () {
                $('.list-group.checked-list-box .list-group-item').each(function () {

                    // Settings
                    var $widget = $(this),
                        $checkbox = $('<input type="checkbox" class="hidden" />'),
                        color = ($widget.data('color') ? $widget.data('color') : "primary"),
                        style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                        settings = {
                            on: {
                                icon: 'glyphicon glyphicon-check'
                            },
                            off: {
                                icon: 'glyphicon glyphicon-unchecked'
                            }
                        };

                    $widget.css('cursor', 'pointer')
                    $widget.append($checkbox);

                    // Event Handlers
                    $widget.on('click', function () {
                        $checkbox.prop('checked', !$checkbox.is(':checked'));
                        $checkbox.triggerHandler('change');
                        updateDisplay();
                    });
                    $checkbox.on('change', function () {
                        updateDisplay();
                    });


                    // Actions
                    function updateDisplay() {
                        var isChecked = $checkbox.is(':checked');

                        // Set the button's state
                        $widget.data('state', (isChecked) ? "on" : "off");

                        // Set the button's icon
                        $widget.find('.state-icon')
                            .removeClass()
                            .addClass('state-icon ' + settings[$widget.data('state')].icon);

                        // Update the button's color
                        if (isChecked) {
                            $widget.addClass(style + color + ' active');
                        } else {
                            $widget.removeClass(style + color + ' active');
                        }
                    }

                    // Initialization
                    function init() {

                        if ($widget.data('checked') == true) {
                            $checkbox.prop('checked', !$checkbox.is(':checked'));
                        }

                        updateDisplay();

                        // Inject the icon if applicable
                        if ($widget.find('.state-icon').length == 0) {
                            $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                        }
                    }
                    init();
                });

                $('#get-checked-data').on('click', function(event) {
                    event.preventDefault(); 
                    var checkedItems = {}, counter = 0;
                    $("#check-list-box li.active").each(function(idx, li) {
                        checkedItems[counter] = $(li).text();
                        counter++;
                    });
                    $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
                });


                //TESTE 2

                $('body').on('click', '.list-group .list-group-item', function () {
                    $(this).toggleClass('active');
                });
                $('.list-arrows button').click(function () {
                    var $button = $(this), actives = '';
                    if ($button.hasClass('move-left')) {
                        actives = $('.list-right ul li.active');
                        actives.clone().appendTo('.list-left ul');
                        actives.remove();
                        var idArray = [];
                        actives.each(function(){
                            idArray.push($(this).val());
                        });
                        if(idArray.length > 0){
                            console.log("Entra para o ajax...");
                            console.log(idArray);
                            $.ajax({    //create an ajax request to load_page.php
                                type: "POST",
                                url: "../../api/ban-clients.php",
                                data: { idArray:idArray },   //expect html to be returned    
                                dataType: "json",
                                complete: function(response){  
                                    //$("#responsecontainer").html(response); 
                                    console.log(response);
                                }
                            });
                        }
                    } else if ($button.hasClass('move-right')) {
                        actives = $('.list-left ul li.active');
                        actives.clone().appendTo('.list-right ul');
                        actives.remove();
                        var idArray = [];
                        actives.each(function(){
                            idArray.push($(this).val());

                        })
                        alert(idArray);
                    }
                });
                $('.dual-list .selector').click(function () {
                    var $checkBox = $(this);
                    if (!$checkBox.hasClass('selected')) {
                        $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
                        $checkBox.children('i').removeClass('glyphicon-unchecked').addClass('glyphicon-check');
                    } else {
                        $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
                        $checkBox.children('i').removeClass('glyphicon-check').addClass('glyphicon-unchecked');
                    }
                });
                $('[name="SearchDualList"]').keyup(function (e) {
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    if (code == '27') $(this).val(null);
                    var $rows = $(this).closest('.dual-list').find('.list-group li');
                    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                    $rows.show().filter(function () {
                        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                        return !~text.indexOf(val);
                    }).hide();
                });

                $( document ).ready(function() {                    
                    console.log( "ready!" );
                    $.ajax({    //create an ajax request to load_page.php
                        type: "GET",
                        url: "../../api/get-clients.php",             
                        dataType: "json",   //expect html to be returned                
                        success: function(response){  
                            //$("#responsecontainer").html(response); 
                            for ( var i = 0, l = response.length; i < l; i++ ) {
                                if(response[i].suspenso)
                                    $('#banned-clients').append('<li class="list-group-item" value="' + response[i].idutilizador + '">' + 'ID: ' + response[i].idutilizador + ' - ' + response[i].username + '</li>')
                                    else
                                        $('#unbanned-clients').append('<li class="list-group-item" value="' + response[i].idutilizador + '">' + 'ID: ' + response[i].idutilizador + ' - ' + response[i].username + '</li>')
                                        console.log(response[ i ]);
                            }
                        }
                    });
                });

                $(document).ajaxSuccess(function(){
                    //alert(dasse);
                    console.log("AJAX request successfully completed");
                });
            });
        </script>

        <div class="container-fluid">

            <div class="row">

                <div class="dual-list list-left col-md-5">
                    <h3 class="text-center">Lista de Clientes</h3>
                    <div class="well text-right client-list">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="unbanned-clients">
                        </ul>
                    </div>
                </div>

                <div class="list-arrows col-md-2 text-center">
                    <button class="btn btn-default btn-sm move-left">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>

                    <button class="btn btn-default btn-sm move-right">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>

                <div class="dual-list list-right col-md-5">
                    <h3 class="text-center">Lista de Clientes Suspensos</h3>
                    <div class="well client-list">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="btn-group">
                                    <a class="btn btn-default selector" title="select all"><i class="glyphicon glyphicon-unchecked"></i></a>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" name="SearchDualList" class="form-control" placeholder="search" />
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group" id="banned-clients">
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
