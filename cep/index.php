<!DOCTYPE html>
<html>
<head>
    <title>CEP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/cep.js'></script>
</head>
<body>
    <div class="col-lg-12">
        <p>Preencher campos quando cep perder o foco.</p>
        <form method="get" action=".">
            <div class="col-lg-6">
                <label>Cep:
                    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                    onblur="pesquisacep(this.value);" /></label><br />
                    <label>Rua:
                        <input name="rua" type="text" id="rua" size="60" /></label><br />
                        <label>Bairro:
                            <input  name="bairro" type="text" id="bairro" size="58" /></label><br />

                            <label>Cidade:
                                <input disabled="" name="cidade" type="text" id="cidade" size="40" /></label><br />
                                <label>Estado:
                                    <input disabled="" name="uf" type="text" id="uf" size="2" /></label><br />
                                    <label>IBGE:
                                        <input disabled="" name="ibge" type="text" id="ibge" size="8" /></label><br />
                                    </form>
                                </div>
                            </div>
                        </body>
                        </html>

