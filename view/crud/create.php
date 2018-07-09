<div class="container">
    <br><br><br><br>
    <div class="col-md-4">
        <?php require_once 'view/dashboard/Sidebar-left.php'; ?>
    </div>
    <div class="col-md-8">
        <form action="?c=crud&m=CreateRegister" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="table">TABLE:</label>
                <select class="form-control" id="table" name="table">
                    <option value="int_kwr" selected="">int_kwr</option>
                </select>
            </div>
            <!-- toma de la fecha para la tabla int_kwr  -->
            <div class="form-group">
                <label for="INT_KWR_DATE">FECHA:</label>
                <input type="date" name="INT_KWR_DATE" id="INT_KWR_DATE" class="form-control">
            </div>
            <!-- toma de la hora para la tabla int_kwr  -->

            <div class="form-group">
                <label for="INT_KWR_TIME">HORA:</label>
                <input type="time" name="INT_KWR_TIME" id="INT_KWR_TIME" class="form-control" > 
            </div>
             <!-- CAMPO INDEFINIDO ACTUALMENTE  -->

            <div class="form-group">
                <label for="INT_KWR_S">S:</label>
                <input type="number" name="INT_KWR_S" id="INT_KWR_S" class="form-control" value="0"> 
            </div>
                <!-- CAMPO INDEFINIDO ACTUALMENTE  -->

            <div class="form-group">
                <label for="INT_KWR_TECHNOLOGY">TECNOLOGIA:</label>
                <select class="form-control" id="INT_KWR_TECHNOLOGY" name="INT_KWR_TECHNOLOGY">
                    <option value="">Seleccionar</option>
                    <?php
                    foreach ($this->model_int_kwr->QueryTechnologies() as $QueryTechnologies){
                        ?>
                    <option value="<?php echo $QueryTechnologies->TECHNOLOGIES_ID ?>"><?php echo $QueryTechnologies->TECHNOLOGIES_ID ?> - <?php echo $QueryTechnologies->TECHNOLOGIES_NAME ?></option>
                    <?php
                    }
                    
                    ?>
                </select>
            </div>
             <!-- INT_KWR_KPC -->
            <div class="form-group">
                <label for="INT_KWR_KPC">KPC:</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_KPC" id="INT_KWR_KPC"> 
            </div>
             
            
             <center>Entrada</center>
              <hr> 
             <!-- INT_KWR_U_DC_V-->
            <div class="form-group">
                <label for="INT_KWR_U_DC_V">U_DC_0 (VOLTIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_U_DC_V" id="INT_KWR_U_DC_V"> 
            </div>
            <!-- INT_KWR_I_DC_A-->
            <div class="form-group">
                <label for="INT_KWR_I_DC_A">I_DC_A (AMPERIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_I_DC_A" id="INT_KWR_I_DC_A"> 
            </div>
            
            <!-- INT_KWR_P_DC_W-->
            <div class="form-group">
                <label for="INT_KWR_P_DC_W">P_DC_W (VATIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_P_DC_W" id="INT_KWR_P_DC_W"> 
            </div>
            
        
            <center>Salida</center>
                <hr>
                
                
           <!-- INT_KWR_U_AC_V-->
            <div class="form-group">
                <label for="INT_KWR_U_AC_V">U_AC_V (VOLTIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_U_AC_V" id="INT_KWR_U_AC_V"> 
            </div>
                
           
            <!-- INT_KWR_I_AC_A-->
            <div class="form-group">
                <label for="INT_KWR_I_AC_A">I_AC_A (AMPERIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_I_AC_A" id="INT_KWR_I_AC_A"> 
            </div>
            
            <!-- INT_KWR_P_AC_W-->
            <div class="form-group">
                <label for="INT_KWR_P_AC_W">P_AC_W (VATIOS):</label>
                <input  class="form-control" type="number" value="0" name="INT_KWR_P_AC_W" id="INT_KWR_P_AC_W"> 
            </div>
            <hr>
            <button class="btn btn-primary">Crear Registro</button>      
        </form>
    </div>
</div>