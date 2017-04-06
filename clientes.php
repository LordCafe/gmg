<?php include 'header.php'; ?>
<?php include 'top.php'; ?>
<div id="page-wrapper">
    <!--Begin section-->
    <section id="top-clientes" class="pad0 section">
        <div class="mar0 row">
            <div class="bgImage pad0 col s12 m5" style="background-image: url(images/img-clientes.png);">
            </div>
            <div class="col s12 m7 l6 strong">
                <h1 class="mb0">ACCESO A CLIENTES</h1>
                <h5 class="mar0">¡BIENVENIDO!</h5>
                <p class="question-text">¿Qué podemos hacer hoy por usted?</p>
                <p class="mt0">Mantenga un sentimiento cercano de las unidades a su servicio.</p>
            </div>
        </div>
    </section>
    <!--End section-->
    <!--Begin section-->
    <section id="login-section" class="section">
        <div class="black-ball relative valign-wrapper">
            <div class="container relative valign w100">
                <div class="mar0 row">
                    <form class="pad0 col s12" action="clientes.php" method="post" id="loginForm">
                        <div class="mar0 row">
                            <div class="pad0 col s12">
                                <div class="mar0 input-field col s12 m4 l4">
                                    <input id="user" name="user" type="text" class="validate">
                                    <label for="user">Usuario</label>
                                </div>
                                <div class="mar0 input-field col s12 m4 l4">
                                    <input id="pass" name="pass" type="password" class="validate">
                                    <label for="pass" data-error="wrong">Contraseña</label>
                                </div>
                                <div class="col s12 m4 l4">
                                    <button class="btn waves-effect waves-light left" type="submit">entrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End section-->
</div>
<?php include 'footer.php'; ?>
<?php include 'close.php'; ?>