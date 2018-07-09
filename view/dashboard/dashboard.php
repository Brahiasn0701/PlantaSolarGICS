<br>
<br>
<br>
<div class="container mt-5">
    <div class="row  justify-content-start">
        <div class="col-3">
            <?php
                require_once 'view/dashboard/sidebar-left.php';
            ?>
        </div>
        <div class="col-5">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">Selecciona una opcion del panel de la izquierda.</p>
                    <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                </blockquote>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">  
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#PlantOne" role="tab" aria-controls="pills-home" aria-selected="true">Planta 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#PlantTwo" role="tab" aria-controls="pills-home" aria-selected="true">Planta 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#PlantThree" role="tab" aria-controls="pills-profile" aria-selected="false">Planta 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#PlantFour" role="tab" aria-controls="pills-contact" aria-selected="false">Planta 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#PlantFour" role="tab" aria-controls="pills-contact" aria-selected="false">Datos</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active"  id="PlantOne" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="mt-2 jumbotron jumbotron-fluid" style="width: 800px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <p class="lead">Tipo de Corriente</p>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Alterna</option>
                                                    <option value="">Directa</option>
                                                </select>
                                            </div>  
                                            <div class="form-group">
                                                <input type="date" name="" id="" class="form-control">
                                                <small class="form-text text-muted">Selecciona la Fecha</small>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary">Dia</button>
                                            <button type="button" class="btn btn-outline-primary">Mes</button>
                                            <button type="button" class="btn btn-outline-primary">Año</button>
                                            <hr>
                                            <button type="button" class="btn btn-outline-primary">Por Voltaje</button>
                                            <button type="button" class="btn btn-outline-primary">Por Amperios</button>
                                            <button type="button" class="btn btn-outline-primary">Por Vatios</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="pt-3"> 
                            <?php require_once('view/charts/Charts.php'); ?> 
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="pills-dropdown" role="tabpanel" aria-labelledby="ppills-dropdown-tab">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Selecciona una planta para poder continuar</p>
                            <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                        </blockquote>
                    </div>
                    <div class="tab-pane fade show " id="PlantTwo" role="tabpanel" aria-labelledby="ppills-dropdown-tab">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Planta Numero Dos</p>
                            <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                        </blockquote>
                    </div>
                    <div class="tab-pane fade" id="PlantThree" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <blockquote class="blockquote text-center">
                            <p class="mb-0">Planta Numero Tres</p>
                            <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                        </blockquote>
                    </div>
                    <div class="tab-pane fade" id="PlantFour" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Planta Numero Cuatro</p>
                            <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">En esta seccion encontraras informacion sobre el historial</p>
                    <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                </blockquote>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">En esta seccion encontraras informacion sobre el Querys</p>
                    <footer class="blockquote-footer">Plata Solar GICS<cite title="Source Title">&copy <?php echo date("Y"); ?></cite></footer>
                </blockquote>
            </div>  
        </div>
    </div>
</div>             


