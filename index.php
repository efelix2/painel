<?php

// require_once('./header.php');

?>

<head>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/helpers.min.js" integrity="sha512-JG3S/EICkp8Lx9YhtIpzAVJ55WGnxT3T6bfiXYbjPRUoN9yu+ZM+wVLDsI/L2BWRiKjw/67d+/APw/CDn+Lm0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/helpers.js" integrity="sha512-Kkt+9BdRfSBFaKgC+9xNLDVzBX3nAlj2EE95amI6F/XV2LKxED93uUigInw7w9JABWGVnuD1WZU3SKy+J+aDPw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.umd.min.js" integrity="sha512-GCiwmzA0bNGVsp1otzTJ4LWQT2jjGJENLGyLlerlzckNI30moi2EQT0AfRI7fLYYYDKR+7hnuh35r3y1uJzugw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.umd.js" integrity="sha512-vCUbejtS+HcWYtDHRF2T5B0BKwVG/CLeuew5uT2AiX4SJ2Wff52+kfgONvtdATqkqQMC9Ye5K+Td0OTaz+P7cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.js" integrity="sha512-Cv3WnEz5uGwmTnA48999hgbYV1ImGjsDWyYQakowKw+skDXEYYSU+rlm9tTflyXc8DbbKamcLFF80Cf89f+vOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<style>
    body {
        background-color: #17191c !important;
        color: #fff !important;
        border-color: #000;
        overflow: hidden;

    }

    /* #primeiratabela {
        background-color: #31363d !important;
        border-radius: 10px;
        padding: 20px;
        font-family: "Arial";
    } */


    /* .bola {
        display: inline-block;
        height: 19px;
        width: 19px;
        border: 1px solid #000000;
    } */

    .bootstrap-table .fixed-table-container .fixed-table-body {
        overflow: hidden;
        position: relative;
    }

    #myChart0,
    #myChart1,
    #myChart2,
    #myChart3 {
        height: 270px !important;
        width: 270px !important;

        margin-bottom: 78px;
        pointer-events: none;
    }

    #myChart4,
    #myChart5 {
        height: 438px !important;
        width: 876px !important;
    }

    @media only screen and (min-width: 2560px) {
        /* #myChart4,
        #myChart5 {
            height: 438px !important;
            width: 876px !important;
        } */

        #myChart0,
        #myChart1,
        #myChart2,
        #myChart3 {
            /* height: 270px !important;
        width: 270px !important; */
            height: 460px !important;
            width: 460px !important;
            margin-bottom: 78px;
            pointer-events: none;
        }

        #myChart4,
        #myChart5 {
            /* height: 438px !important;
        width: 876px !important; */

            height: 638px !important;
            width: 1250px !important;
        }
    }

    @media only screen and (min-width: 3840px) {
        /* #myChart4,
        #myChart5 {
            height: 438px !important;
            width: 876px !important;
        } */

        #myChart0,
        #myChart1,
        #myChart2,
        #myChart3 {
            /* height: 270px !important;
        width: 270px !important; */
            height: 660px !important;
            width: 660px !important;
            margin-bottom: 100px;
            pointer-events: none;
        }

        #myChart4,
        #myChart5 {
            /* height: 438px !important;
             width: 876px !important; */

            /* height: 1138px !important; */
            height: 1084px !important;
            width: 1867px !important;
        }
    }
</style>


<form id="form_painel">
    <div class="row justify-content-center" style="margin-top: 44vh">
        <div class="form-group col-3">
            <label for="sl_empresa">EMPRESA</label>
            <select name="sl_empresa" id="sl_empresa" class="form-control text-uppercase selectpicker" data-style="btn btn-primary" onchange="locais_empresa(this.value)">
                <option value=""> SELECIONE A EMPRESA </option>
                <option value="1"> 01 - MATRIZ </option>
                <option value="6"> 06 - FILIAL 2 </option>
                <option value="11"> 11 - FILIAL 3 </option>
            </select>
        </div>

        <div class="form-group col-4">
            <label for="sl_local">LOCAL</label>
            <select name="sl_local" id="sl_local" class="form-control text-uppercase selectpicker" data-style="btn btn-primary" data-live-search="true">
                <option value=""> SELECIONE O LOCAL </option>
            </select>
        </div>

        <div class="form-group col-2 mt-3">
            <button class="btn btn-pink mt-3" id="iniciar" type="button" onclick="busca_maquina()"> INICIAR PAINEL </button>
        </div>
    </div>
</form>

<div id="painel" class="d-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="   border-radius: 10px;">
        <a class="navbar-brand align-middle"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav mr-auto" style="color:white;font-size:95px;display: block;margin-left: auto;margin-right: auto">
                <li class="nav-item active">
                    <b>PAINEL DE OEE</b>
                </li>
            </ul>
            <span class="navbar-text">
                <b><span class="align-middle" id="hora" style="color:white;font-size:95px;padding:10px;"></span></b>
            </span>
        </div>
    </nav>

    <div>
        <div class="row" style="background: #4F4F4F; margin-left:0px;margin-right:0px;   border-radius: 5px;">
            <div class=" col-md-12">
                <div class="d-flex justify-content-center" style="color:yellow;font-size:42px;"><strong> *** </strong></div>
            </div>
            <!-- <div class=" col-md-1">
                <div class="d-flex justify-content-center" style="color:white;font-size:30px;padding-top:17px;"><b>[PAINEL]</b></div>
            </div> -->
        </div>

        <div id="msg_noResult" class="d-none">
            <div class="card" style="width: 33rem; color: #000; margin: auto; margin-top: 30vh; background: yellow;">
                <div class="card-body text-center">
                    <h5 class="card-title" style="font-size: 4.25rem;">Atenção</h5>
                    <p class="card-text" style="font-size: 2.5rem;">Não Há Dados Disponíveis Sobre a Máquina Buscada.</p>
                </div>
            </div>
        </div>

        <div class="justify-content-around row " id="divGrafico">
            <canvas id="myChart0"></canvas>
            <canvas id="myChart1"></canvas>
            <canvas id="myChart2"></canvas>
            <canvas id="myChart3"></canvas>
        </div>
        <div class="form-group col-12 d-flex justify-content-between " id="divGrafico2">
            <div class="form-group col-6">
                <canvas id="myChart4"></canvas>
            </div>
            <div class="form-group col-6">
                <canvas id="myChart5"></canvas>
            </div>
        </div>

        <!-- <div class="row " style="margin-left:0px;margin-right:0px;">
        <div class="col px-md-3 m-2" id="primeiratabela" style="font-size:32px;font-weight: 780;">
            <table id="tab_prv" data-toggle="table" data-row-style="rowStyle" class="table table-dark" data-height="726" data-url="<?= base_url('int_pcpusin/painel_dbr/tabela1') ?>">
                <thead>
                    <tr>
                        <th class="caixa_alta" data-align="right" data-halign="center" data-field="nroopu"><strong>OPU</strong></th>
                        <th class="caixa_alta" data-align="center" data-halign="center" data-field="prodbruto"><strong>BRUTO</strong></th>
                        <th class="caixa_alta" data-align="center" data-halign="center" data-field="produsin"><strong>DESTINO</strong></th>
                        <th class="caixa_alta" data-align="left" data-halign="center" data-field="prod_descricao"><strong>DESCRIÇÃO</strong></th>
                        <th class="caixa_alta" data-align="right" data-halign="center" data-field="qtde"><strong>REQ.</strong></th>
                        <th class="caixa_alta" data-align="right" data-halign="center" data-field="qtde_env"><strong>ENV.</strong></th>
                        <th class="caixa_alta" data-align="left" data-halign="center" data-field="nome"><strong>REQUISITANTE</strong></th>
                        <th class="caixa_alta" data-align="right" data-halign="center" data-field="destino"><strong>DESTINO</strong></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div> -->
    </div>
</div>


<footer>
    <div class="d-flex bd-highlight">
        <div class="p-2 flex-fill bd-highlight"></div>
        <!-- <div class="p-2 flex-fill bd-highlight" style="font-size:30px;"><span class="bola" style="background:#ffc107;border-radius:50%"></span> ANDAMENTO-USINAGEM (MATRIZ)</div>
        <div class="p-2 flex-fill bd-highlight" style="font-size:30px;"><span class="bola" style="background:#dc3545;border-radius:50%"></span> MONTAGEM-USINAGEM (MATRIZ)</div> -->
    </div>
</footer>

<script>
    maquinas = [];
    Chart.register(ChartDataLabels);

    locais = [];

    // $('document').on('keyup', function() {
    //     if (event.key == 27) {
    //         console.log('passeo')
    //         $('#form_painel').removeClass('d-none');
    //         $('#painel').addClass('d-none');
    //     }
    // })

    function locais_empresa(empresa) {
        $('#sl_local').html('');
        $('#sl_local').append('<option value=""> SELECIONE O LOCAL </option>');

        $.each(locais[empresa], function(index, row) {
            opt = '<option value="' + row.trim() + '"> ' + row + ' </option>'
            $('#sl_local').append(opt);
        })

        $('#sl_local').selectpicker('refresh');
    }

    intervalo = setInterval(function() {
        console.log(maquinas[idc]);
        console.log(typeof(maquinas[idc]));

        busca_graficos(maquinas[idc].maqui_codmaqui, maquinas[idc].maqui_nome);
        idc++;
        if (typeof(maquinas[idc]) == 'undefined') {
            idc = 0;
        }
    }, 10000);

    function busca_maquina() {
        $.ajax({
            url: base_url + 'INT_OEE/PAINEL_OEE/BUSCA_MAQUINA',
            type: 'post',
            dataType: 'json',
            data: $('#form_painel').serialize(),
            beforeSend: function() {
                swal({
                    title: "Aguarde!",
                    text: "Gerando Gráficos...",
                    imageUrl: base_url + "../img/loading.gif",
                    showConfirmButton: false
                });
            },
            success: function(data) {
                maquinas = data
                $('form').addClass('d-none')
                $('#painel').removeClass('d-none')

                idc = 0;

                intervalo

                // busca_graficos(maquinas[indice].maqui_codmaqui, maquinas[indice].maqui_nome)
            },
            error: function() {}
        })
    }

    //Efetua a alteração da cor da linha para vermelho
    // function rowStyle(row, index) {

    //     var classes = [
    //         'text-warning',
    //         'text-danger',
    //         'btn-danger',
    //         'btn-warning'
    //     ]
    //     if (row.destino == 14) {
    //         return {
    //             classes: classes[2]
    //         }
    //     } else if (row.destino == 11) {
    //         return {
    //             classes: classes[3]
    //         }
    //     }
    //     return {
    //         css: {}
    //     }
    // }

    const plugin = {
        id: 'customCanvasBackgroundColor',
        beforeDraw: (chart, args, options) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = options.color || '#99ffff';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };

    titulo = ['DISPONIBILIDADE', 'DESEMPENHO', 'QUALIDADE', 'OEE'];

    setInterval(function() {
        let novaHora = new Date();
        let hora = novaHora.getHours();
        let minuto = novaHora.getMinutes();
        let segundo = novaHora.getSeconds();

        // Chamamos a função zero para que ela retorne a concatenação
        // com os minutos e segundos
        minuto = zero(minuto);
        segundo = zero(segundo);

        // Com o textContent, iremos inserir as horas, minutos e segundos
        // no nosso elemento HTML
        document.getElementById('hora').textContent = hora + ':' + minuto + ':' + segundo;
    }, 1000)

    function zero(x) {
        if (x < 10) {
            x = '0' + x;
        }
        return x;
    }

    // window.onload = function() {
    //     //executa a rolagem das quatro primeiras tabelas
    //     busca_graficos();
    // }

    function busca_graficos(maq, desc) {
        $.ajax({
            url: base_url + "int_oee/painel_oee/busca_graficos",
            type: "POST",
            dataType: 'json',
            data: {
                maq
            },
            // data: $('#prod_relatorio').serialize() + "&nao_apontado=" + n_apontado,
            success: function(data) {
                swal.close();
                oil = data
                // console.log(data);

                $('#msg_noResult').addClass("d-none");

                if (data.cod == 0) {
                    // swal('Atenção', data.msg, 'info');
                    $('#msg_noResult').removeClass("d-none");
                    $('#myChart0, #myChart1, #myChart2, #myChart3, #myChart4, #myChart5').remove();
                    return;
                } else if (data.cod == 2) {
                    ////////////////////////////////////////////
                } else if (data.cod == 1) {

                    $('#myChart0, #myChart1, #myChart2, #myChart3, #myChart4, #myChart5').remove();
                    $('#divGrafico').append('<canvas id="myChart0" style="position:relative"><div style="position: absolute"> </div></canvas><canvas id="myChart1"></canvas><canvas id="myChart2"></canvas><canvas id="myChart3"></canvas>');
                    $('#divGrafico2').children().eq(0).append('<canvas id="myChart4"></canvas>');
                    $('#divGrafico2').children().eq(1).append('<canvas id="myChart5"></canvas>');

                    monta_graficos();
                    monta_grafico_paradas(data.grafico_paradas)
                    // console.log(data.historico);
                    monta_graf_historico(data.historico);

                    swal({
                        timer: 1,
                        title: "Aguarde!",
                        text: "Gerando Gráficos...",
                        imageUrl: base_url + "../img/loading.gif",
                        showConfirmButton: false
                    });
                } else {

                }
            },
            beforeSend: function() {
                swal({
                    title: "Aguarde!",
                    text: "Gerando Gráficos...",
                    imageUrl: base_url + "../img/loading.gif",
                    showConfirmButton: false
                });
            },
        });

        $('strong').text((maq).trim() + ' - ' + ((desc).trim()).toUpperCase());
    }

    if (screen.width <= 3840 && screen.width > 2560) {
        fonte_rosca = '130px'; ////
        titulo_rosca = 55;
        titulo_barra = 47;
        fonte_datalabels = 45;
        yAxe = 50; ////
        xAxe = 30; ////
        xAxe_hist = 35
        largura_barra = 170; ////????
        divisor_altura_rosca = 3.6; ////
        divisor_largura_rosca = 4;
    } else if (screen.width <= 2560 && screen.width > 1920) {
        fonte_rosca = '90px';
        titulo_rosca = 35;
        titulo_barra = 30;
        fonte_datalabels = 28;
        yAxe = 30;
        xAxe = 20;
        xAxe_hist = 20
        largura_barra = 100;
        divisor_altura_rosca = 3.45;
        divisor_largura_rosca = 4;
    } else {
        // fonte_rosca = 20;
        // fonte_datalabels = 16;
        // $yAxe = 13;
        // $xAxe = 12;

        // titulo_rosca = 35;
        // titulo_barra = 30;
        titulo_rosca = 30
        titulo_barra = 30;
        fonte_rosca = '50px';
        fonte_datalabels = 16;
        yAxe = 13;
        xAxe = 12;
        xAxe_hist = 12;
        largura_barra = 70;
        divisor_altura_rosca = 1.68;
        divisor_largura_rosca = 1.95;

    }


    function monta_graf_historico(param) {

        console.log(param)

        cores = []
        indice = 0;
        $.each((param.indicador_oee).reverse(), function(index, row) {
            if (row < 20) {
                cores[indice] = '#cc0000';
            } else if (row < 60) {
                cores[indice] = '#ff9900';
            } else if (row < 80) {
                cores[indice] = '#5cd65c';
            } else {
                cores[indice] = '#2eb82e'
            }
            indice++;
        })

        const my5 = document.getElementById('myChart5');

        const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        const layoutMensal = {
            labels: param.anomes.reverse(),
            datasets: [{
                label: 'OEE - Mensal',
                data: param.indicador_oee, // [65, 59, 80, 81, 56, 55 /*, 40, 70, 58, 48, 41, 48*/ ], 
                barThickness: largura_barra,
                backgroundColor: cores //[
                    // 'rgb(204, 0, 0)'
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)',
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)',
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                    /*,
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)']*/
                    ,
                borderColor: cores //[
                    // 'rgb(204, 0, 0)'
                    // 'rgb(255, 99, 132)',
                    // 'rgb(255, 159, 64)',
                    // 'rgb(255, 99, 132)',
                    // 'rgb(255, 159, 64)',
                    // 'rgb(255, 99, 132)',
                    // 'rgb(255, 159, 64)'
                    /*,
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)']*/
                    ,
                borderWidth: 1
            }]
        };
        const grafMensal = {
            type: 'bar',
            data: layoutMensal,
            options: {
                plugins: {
                    customCanvasBackgroundColor: {
                        color: 'white',
                    },
                    datalabels: {
                        color: '#FFF',
                        anchor: 'center',
                        align: 'center',
                        formatter: function(value, context) {
                            return (value) + '%';
                        },
                        font: {
                            weight: 'bold',
                            size: fonte_datalabels
                        }
                    },
                    // datalabels: {
                    //     anchor: 'end',
                    //     align: 'top',
                    //     formatter: Math.round,
                    //     font: {
                    //         weight: 'bold',
                    //         size: 16
                    //     }
                    // },
                    title: {
                        display: true,
                        text: 'Histórico Mensal de OEE',
                        font: {
                            size: titulo_barra
                        }
                    },
                    label: {

                    },
                    legend: {
                        display: false
                    },
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: xAxe_hist
                            }
                        }
                    },

                    y: {
                        ticks: {
                            font: {
                                size: yAxe
                            }
                        }
                    }
                }
            },
            plugins: [plugin]
        };
        new Chart(my5, grafMensal);
    }

    function monta_grafico_paradas(values) {
        const my4 = document.getElementById('myChart4');
        const layout = {
            labels: values[0],

            datasets: [{
                // datalabels: {
                //     color: '#FFCE56'
                // },
                // label: 'TOP 5 - Paradas',
                data: values[1],
                barThickness: largura_barra,
                backgroundColor: [
                    'rgb(204, 0, 0)'
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)',
                    // 'rgba(255, 205, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(54, 162, 235, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(204, 0, 0)'
                    // 'rgb(255, 99, 132)',
                    // 'rgb(255, 159, 64)',
                    // 'rgb(255, 205, 86)',
                    // 'rgb(75, 192, 192)',
                    // 'rgb(54, 162, 235)',
                    // 'rgb(153, 102, 255)',
                    // 'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };


        const grafico = {
            type: 'bar',
            data: layout,
            options: {
                plugins: {
                    // datalabels: {
                    //     color: '#FFCE56'
                    // },
                    customCanvasBackgroundColor: {
                        color: 'white',
                    },
                    datalabels: {
                        color: '#FFF',
                        anchor: 'center',
                        align: 'center',
                        formatter: function(value, context) {
                            return ((value / values.somatoria) * 100).toFixed(1) + '%';
                        },
                        font: {
                            weight: 'bold',
                            size: fonte_datalabels
                        }
                    },
                    title: {
                        display: true,
                        text: 'Top 5 - Paradas',
                        font: {
                            size: titulo_barra
                        }
                    },
                    label: {

                    },
                    legend: {
                        display: false
                    },
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: xAxe
                            }
                        }
                    },

                    y: {
                        ticks: {
                            font: {
                                size: yAxe
                            }
                        }
                    }
                }
            },
            plugins: [plugin]
        };

        new Chart(my4, grafico);
    }

    function monta_graficos() {

        counter = {
            id: 'counter',
            beforeDraw(chart, args, options) {
                const {
                    ctx,
                    chartArea: {
                        top,
                        right,
                        bottom,
                        left,
                        width,
                        height
                    }
                } = chart;
                ctx.save();
                ctx.fillStyle = 'blue';
                yCenter = (top + (height / 2));
                // console.log(height);
                ctx.fillRect(width / 2, yCenter, 10, 10)
            }
        }


        //em Horas
        tempo_produtivo = (oil.tempo_total - oil.tempo_inprodutivo);

        cf_disponibilidade = ((tempo_produtivo / oil.tempo_total) * 100).toFixed(1);
        cf_desempenho = (((oil.total_conforme + oil.total_naoconforme) / oil.total_pecahora) * 100).toFixed(1);
        cf_qualidade = ((oil.total_conforme / (oil.total_conforme + oil.total_naoconforme)) * 100).toFixed(1);
        cf_oee = ((cf_disponibilidade / 100 * cf_desempenho / 100 * cf_qualidade / 100) * 100).toFixed(1);

        cofi = [cf_disponibilidade, cf_desempenho, cf_qualidade, cf_oee];

        // console.log(cf_disponibilidade + ' | ' + cf_desempenho + ' | ' + cf_qualidade)

        for (i = 0; i < 4; i++) {

            if (i == 3) {
                if (cofi[i] < 20) {
                    cor = '#ff1a1a';
                } else if (cofi[i] < 60) {
                    cor = '#ff9900';
                } else if (cofi[i] < 80) {
                    cor = '#5cd65c';
                } else {
                    cor = '#2eb82e'
                }
            } else {
                cor = 'rgb(0, 179, 60)';
            }

            if (cofi[i] > 100) {
                $total_perct = cofi[i];
            } else {
                $total_perct = 100;
            }

            data = {
                labels: [
                    // 'Red',
                    // 'Blue',
                    // 'Yellow'
                ],
                datasets: [{
                    // label: ['My0', 'My1', 'My2', 'My3'],
                    data: [cofi[i], $total_perct - cofi[i]],
                    backgroundColor: [
                        cor,
                        'rgb(204, 204, 204)'
                        // 'rgb(255, 205, 86)'
                    ],
                    // borderWidth: [
                    //     0, 0
                    // ]
                }],
                // datasets: [{
                //     // label: ['My0', 'My1', 'My2', 'My3'],
                //     data: [cofi[i], 100 - cofi[i]],
                //     backgroundColor: [
                //         'rgb(0, 179, 60)',
                //         'rgb(204, 204, 204)'
                //         // 'rgb(255, 205, 86)'
                //     ],
                //     // borderWidth: [
                //     //     0, 0
                //     // ]
                // }]
            };

            ctx = document.getElementById('myChart' + i);

            // centerText = {
            //     id: 'centerText',
            //     afterDatasetsDraw(chart, args, pluginOptions) {
            //         const {
            //             ctx,
            //             data
            //         } = chart;

            //         const text = 'EO'

            //         ctx.save();
            //         const x = chart.getDatasetMeta(0).data[0].x;
            //         const y = chart.getDatasetMeta(0).data[0].y;

            //         ctx.textAlign = 'center';
            //         ctx.textBaseline = 'middle';
            //         ctx.font = 'bold 30px sans-serif';

            //         ctx.fillText(text, x, y)

            //     }

            // }


            config = {
                type: 'doughnut',
                data: data,
                options: {
                    animation: false,
                    plugins: {
                        datalabels: {
                            color: '#000',
                            anchor: 'center',
                            offset: '80',
                            align: 'start',
                            formatter: function(value, context) {
                                // console.log(value)
                                // console.log(context)

                                if (context.dataIndex == 99) {
                                    return (value * 1).toFixed(1) + '%';
                                } else {
                                    return '';
                                }
                            },
                            font: {
                                weight: 'bold',
                                size: 25
                            }
                        },
                        counter,
                        title: {
                            display: true,
                            text: titulo[i],
                            color: '#FFF',
                            font: {
                                size: titulo_rosca
                            }
                        },
                        label: {
                            display: false
                        },
                    },
                    elements: {
                        // center: {
                        //     text: '75%',
                        //     color: '#000', // Default is #000000
                        //     fontStyle: 'Arial', // Default is Arial
                        //     sidePadding: 20, // Default is 20 (as a percentage)
                        //     minFontSize: 20, // Default is 20 (in px), set to false and text will not wrap.
                        //     lineHeight: 25 // Default is 25 (in px), used for when text wraps
                        // }
                    },
                    cutout: '70%',
                },
            };

            new Chart(ctx, config);

            cofi[i] = cofi[i].replace('.', ',') + '%';

            txt_grafico = cofi;
            // console.log(cofi[i]);
            // console.log(i);

            // var canvas = document.getElementById("myChart" + i);
            // var ctx2 = canvas.getContext("2d");
            // ctx2.font = "30px Arial";
            // ctx2.textAlign = "center";
            // ctx2.fillText(txt_grafico[i], canvas.width / 1.95, canvas.height / 1.75);



            // Chart.pluginService.register({
            //     beforeDraw: function(chart) {
            //         var width = chart.chart.width,
            //             height = chart.chart.height,
            //             ctx = chart.chart.ctx;
            //         ctx.restore();
            //         var fontSize = (height / 114).toFixed(2);
            //         ctx.font = fontSize + "em sans-serif";
            //         ctx.textBaseline = "middle";
            //         var text = "75%",
            //             textX = Math.round((width - ctx.measureText(text).width) / 2),
            //             textY = height / 2;
            //         ctx.fillText(text, textX, textY);
            //         ctx.save();
            //     }
            // });

            setTimeout(function() {
                for (e = 0; e < 5; e++) {
                    for (i = 0; i < 4; i++) {
                        var canvas = document.getElementById("myChart" + i);
                        var ctx2 = canvas.getContext("2d");
                        ctx2.font = fonte_rosca + " Arial";
                        ctx2.fillStyle = "#FFF";
                        ctx2.textAlign = "center";
                        ctx2.fillText(txt_grafico[i], canvas.width / divisor_largura_rosca, canvas.height / divisor_altura_rosca);
                    }
                }
            }, 300);

        }
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $(document).ready(function() {
        $.ajax({
            url: './locais_empresa.json',
            type: 'post',
            dataType: 'json',
            success: function(result) {
                console.log(result);
                locais = result;
            }
        })
    });
</script>

<?php

require_once('./footer.php')

?>